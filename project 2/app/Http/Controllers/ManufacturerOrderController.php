<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use App\ManufacturerOrder;
use App\ManufacturerOrderDetail;
// use App\SecondaryUser;
use App\Manufacturer;
use App\Supply;
use DateTime;

class ManufacturerOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $orders = ManufacturerOrder::all();
        $manufacturers = Manufacturer::all();
        $supplies = Supply::all();

        //JOIN: BC_Secondary_User - BC_Location
        // $clients = DB::table('BC_Secondary_User')
        // ->join('BC_Location', 'BC_Secondary_User.refID', '=', 'BC_Location.companyID')
        // ->where('BC_Location.companyID', '=', '1')
        // ->select('BC_Secondary_User.*')
        // ->get();

        return view("appdev.manufacturerorder")->with("orders",$orders)->with("manufacturers",$manufacturers)->with("supplies",$supplies);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //VALIDATION OF INPUTS

        $ordered_supplies = $request->all();
        
        $manufacturer = Manufacturer::where('mn_name',$request->manufacturer)->first();
        // dd($request->manufacturer);
        $supplies = array();
        $i = 0;
        foreach ($ordered_supplies['supply'] as $ordered_supply){
            $supplies [0][$i] =  $ordered_supply;
            $i = $i+1;
        }

        $i = 0;
        foreach ($ordered_supplies['gram'] as $ordered_supply){
            $supplies [1][$i] =  $ordered_supply;
            $i = $i+1;
        }

        $i = 0;
        foreach ($ordered_supplies['orderqty'] as $ordered_supply){
            $supplies [2][$i] =  $ordered_supply;
            $i = $i+1;
        }

        //Check the Given Product Input
        // dd($products);
        $date = new DateTime();

        $order = new ManufacturerOrder();
        $order->manufacturerID = $manufacturer->id;
        $order->mnod_date = date("Y/m/d");
        $order->mnod_status = 'Processing';
        $order->save();

        $i = 0;
        for ($row = 0; $row < sizeOf($supplies[0]); $row++) {
            $orderdetail = new ManufacturerOrderDetail();
            $orderdetail->orderID = $order->id;
            // dd($products[2][$i]);
            $newproduct = Supply::where('sp_name',$supplies[0][$i])->where('sp_sku',$supplies[1][$i])->first();
            $orderdetail->supplyID = $newproduct->id;
            $orderdetail->mndt_qty = $supplies[2][$i];
            $orderdetail->save();

            $i = $i+1;
        }

        Session::flash('success','Successfully added an order!');
        return redirect("/manufacturerorder");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($id);
        $order = Manufacturer::find($id);
        $order->mnod_status = $request->input('orderStatus');
        $order->save();

        // dd($order);

        Session::flash('success','Successfully edited an order!');
        return redirect("/manufacturerorder");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order = Manufacturer::find($id);
        $order->delete();

        // dd($order);

        Session::flash('success','Successfully deleted an order!');
        return redirect("/manufacturerorder");
    }
}
