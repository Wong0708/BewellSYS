<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use App\ManufacturerOrder;
use App\ManufacturerOrderDetail;
use App\Manufacturer;
use App\Supply;
use App\ClientOrder;
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
        $clientOrders = ClientOrder::all();
        $manufacturers = Manufacturer::all();
        $supplies = Supply::all();
        return view("appdev.manufacturerorder")
            ->with("orders",$orders)
            ->with("manufacturers",$manufacturers)
            ->with("materials",$supplies)
            ->with("clientOrders",$clientOrders);
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

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order =  ManufacturerOrder::where('id','=',$id)->first();
        return view("appdev.manufacturerorderdetail")->with('order',$order);
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
        $order = ManufacturerOrder::where('id', $id)->delete();
        return response()->json($order);
    }
}
