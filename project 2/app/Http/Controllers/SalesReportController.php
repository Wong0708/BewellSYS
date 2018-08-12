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
use App\ProductDetails;
use DateTime;

class SalesReportController extends Controller
{
    /**
     * Display a listing of the resource.
     * CREATED BY FERNANDO PAYLAGO JR.
     * MIT LICENSE 2015
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        $total_gross = 0;
        $total_qty = 0;
        $orders = ClientOrder::all();
        $orderdetails =ClientOrderDetail::all();
        $clients = Client::all();
        $products = Product::all();
        $productdetails = ProductDetails::all();

        foreach($orders as $order){
            $date = date_create($order['clod_date']);
            $order['clod_date'] = date_format($date, "F j Y");
        }

       return view("appdev.salesreport")->with("start","")
       ->with("end","")->with("orders",$orders)->with("clients",$clients)
       ->with("products",$products)
       ->with("total_gross",$total_gross)
       ->with("total_qty",$total_qty)
       ->with("orderdetails", $orderdetails)
       ->with("productdetails",$productdetails);
    }

    public function generateReport(Request $request)
    {
        $total_gross = 0;
        $total_qty = 0;
        $orders = ClientOrder::all();
        $orderdetails =ClientOrderDetail::all();
        $clients = Client::all();
        $products = Product::all();
        $productdetails = ProductDetails::all();
        $test = $request->dog;


        
        $start = new DateTime($request->start." 00:00:00");
        $end = new DateTime($request->end." 23:59:59");

        $ords = $orders;
        
        $orders = array();
        foreach($ords as $ord){
            if(new DateTime($ord['clod_date']) >= $start && new DateTime($ord['clod_date']) <= $end){
                $clorder = self::getClientOrderFromOrderID($ord['id']);
                $total_qty += $clorder['cldt_qty'];
                $total_gross += self::getProduct($clorder['productID'])['pd_price'] * $clorder['cldt_qty'];
                array_push($orders,$ord);
            }
        }

        foreach($orders as $order){
            $date = date_create($order['clod_date']);
            $order['clod_date'] = date_format($date, "F j Y");
        }

        return view("appdev.salesreport")->with("orders",$orders)->with("clients",$clients)
        ->with("start",$request->start)
        ->with("end",$request->end)
        ->with("products",$products)
        ->with("total_gross",$total_gross)
        ->with("total_qty",$total_qty)
        ->with("orderdetails", $orderdetails)
        ->with("productdetails",$productdetails);
    }
    public static function getClient($id){
        $client = Client::where('id', $id)->first();
        return $client;
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
        $order = ClientOrder::find($id);
        $orderdetail =ClientOrderDetail::find($id);
        $client = Client::find($id);
        $product = Product::find($id);
        $productdetail = ProductDetails::find($id);
        
        $date = date_create($order['clod_date']);
        $order['clod_date'] = date_format($date, "F j Y");

       return view("appdev.salesreportdetail")->with("order",$order)
       ->with("client",$client)
       ->with("product",$product)
       ->with("orderdetail", $orderdetail)
       ->with("productdetail",$productdetail);
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
