<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SupplierOrder;
use App\SupplierOrderDetail;
use App\SupplierOrderLogs;
use App\Supplier;
use App\Supply;

class SupplierOrderController extends Controller
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
        $orders = SupplierOrder::all();
        $suppliers = Supplier::all();
        $supplies = Supply::all();
        return view("appdev.supplierorder")
            ->with("orders",$orders)
            ->with("suppliers",$suppliers)
            ->with("materials",$supplies);
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
        $order =  SupplierOrder::where('id','=',$id)->first();
        $orderdetail =  SupplierOrderDetail::where('orderID','=',$order->id)->get();
        return view("appdev.supplierorderdetail")
                ->with('order',$order)
                ->with('orderdetail',$orderdetail);
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
        $order = SupplierOrder::where('id', $id)->delete();
        return response()->json($order);

        $logs = new SupplierOrderLogs();
        $logs->supplierID=$nid;
        $logs->userID= auth()->user()->id;
        $logs->query_date= date('Y-m-d H:i:s');
        $logs->query_type= 'Delete';
        $logs->notification=  'Deleted Supplier Order '.$id.'!';
        $logs->created_at= $date->getTimestamp();
        $logs->updated_at= $date->getTimestamp();
        $logs->save();
    }
}
