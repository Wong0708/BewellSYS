<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use App\ClientOrder;
use App\ClientOrderDetail;
// use App\SecondaryUser;
use App\Client;
use App\Product;
use DateTime;

class ClientOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = ClientOrder::all();
        $clients = Client::all();
        $products = Product::all();

        //JOIN: BC_Secondary_User - BC_Location
        // $clients = DB::table('BC_Secondary_User')
        // ->join('BC_Location', 'BC_Secondary_User.refID', '=', 'BC_Location.companyID')
        // ->where('BC_Location.companyID', '=', '1')
        // ->select('BC_Secondary_User.*')
        // ->get();

        return view("appdev.clientorder")->with("orders",$orders)->with("clients",$clients)->with("products",$products);
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

        $ordered_products = $request->all();
        
        $client = Client::where('cl_name',$request->client)->first();
        $products = array();
        $i = 0;
        foreach ($ordered_products['product'] as $ordered_product){
            $products [0][$i] =  $ordered_product;
            $i = $i+1;
        }

        $i = 0;
        foreach ($ordered_products['gram'] as $ordered_product){
            $products [1][$i] =  $ordered_product;
            $i = $i+1;
        }

        $i = 0;
        foreach ($ordered_products['orderqty'] as $ordered_product){
            $products [2][$i] =  $ordered_product;
            $i = $i+1;
        }

        //Check the Given Product Input
        // dd($products);
        $date = new DateTime();

        $order = new ClientOrder();
        $order->clientID = $client->id;
        $order->clod_date = date("Y/m/d");
        $order->clod_status = 'Processing';
        $order->clientID = $client->id;
        $order->created_at = $date->getTimestamp();
        $order->updated_at = $date->getTimestamp();
        $order->save();

        $i = 0;
        for ($row = 0; $row < sizeOf($products[0]); $row++) {
            $orderdetail = new ClientOrderDetail();
            $orderdetail->orderID = $order->id;
            // dd($products[2][$i]);
            $newproduct = Product::where('pd_name',$products[0][$i])->where('pd_sku',$products[1][$i])->first();
            $orderdetail->productID = $newproduct->id;
            $orderdetail->cldt_qty = $products[2][$i];
            $orderdetail->created_at = $date->getTimestamp();
            $orderdetail->updated_at = $date->getTimestamp();
            $orderdetail->save();

            $i = $i+1;
        }

        Session::flash('success','Successfully added an order!');
        return redirect("/clientorder");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view("appdev.clientorderdetail");
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
        $order = ClientOrder::find($id);
        $order->clod_status = $request->input('orderStatus');
        $order->save();

        // dd($order);

        Session::flash('success','Successfully edited an order!');
        return redirect("/clientorder");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order = ClientOrder::find($id);
        $order->delete();

        // dd($order);

        Session::flash('success','Successfully deleted an order!');
        return redirect("/clientorder");
    }
}
