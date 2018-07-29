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
use App\ProductDetail;
use DateTime;

class SalesReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = ClientOrder::all();
        $orderdetails =ClientOrderDetail::all();
        $clients = Client::all();
        $products = Product::all();
        $productdetails = Product::all();

       return view("appdev.salesreport")->with("orders",$orders)->with("clients",$clients)->with("products",$products)->with("orderdetails", $orderdetails)->with("productdetails",$productdetails);
    }
    public static function getClient($id){
        $client = Client::where('id', $id)->first();
        return $client;
        //return Client::find($id);
        //$client = Client::find($id);
        //return view("appdev.salesreport")->with("client",$client);
    }
    public static function getClientOrderFromOrderID($id){
        $order = ClientOrderDetail::where('orderID',$id)->first();
        return $order;
    }
    public static function getProduct($id){
        $product = Product::where('id',$id)->first();
        return $product;
    }

    public function dateRange($id){
        $order = Order::find($id);
        $start = $order->clod_date;
        $end = $order->clod_date;

        return Order::whereBetween('date-range',[$start, $end])->get();
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
