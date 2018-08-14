<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Schedule;
use App\Product;
use App\ClientOrder;
use App\ManufacturerOrder;
use App\SupplierOrder;
use DB;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate
     *
     * nate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $deliveries =Schedule::where(([['scd_status','=','Scheduled'],['scd_status','=', 'Processing']]))
                    ->get();

        $products =Product::where('pd_status','=','Re-stock')
                    ->get();

        $todayDelivery =Schedule::where('scd_date','=',date('Y/m/d'))
                    ->get();

        $todayDeadline = ClientOrder::where('expectedDate','=', date('Y/m/d'))
                    ->get();

        $allClientOrder = ClientOrder::where('clod_status','=','Processing')->get();
        $allManufacturerOrder = ManufacturerOrder::where('mnod_status','=','Processing')->get();
        $allSupplierOrder = SupplierOrder::where('spod_status','=','Processing')->get();
        $totalCompanyOrder = count($allClientOrder)+count($allManufacturerOrder)+count($allSupplierOrder);


        $allClientOrder = ClientOrder::where('clod_status','=','Processing')->get();
        $totalSales = 0;

        foreach($allClientOrder as $info){
            $totalSales = $totalSales+$info->clod_payment;
        }

        $allManufacturerOrder = ManufacturerOrder::where('mnod_status','=','Processing')->get();
        $allSupplierOrder = SupplierOrder::where('spod_status','=','Processing')->get();
        $totalCost = 0;

        foreach($allManufacturerOrder as $info){
            $totalCost = $totalCost+$info->mnod_payment;
        }

        foreach($allSupplierOrder as $info){
            $totalCost = $totalCost+$info->spod_payment;
        }
        return view('appdev.dashboard')
                    ->with('deliveries',$deliveries)
                    ->with('products',$products)
                    ->with('todayDelivery',count($todayDelivery))
                    ->with('todayRestock',count($products))
                    ->with('todayDeadline',count($todayDeadline))
                    ->with('totalCompanyOrder',$totalCompanyOrder)
                    ->with('totalSales',$totalSales)
                    ->with('totalCost',$totalCost);
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
