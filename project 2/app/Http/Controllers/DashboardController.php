<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Schedule;
use App\Product;
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
                    ->first();

        $todayDeadline =Schedule::where(([['scd_status','=','Scheduled'],['scd_status','=', 'Processing'],['scd_date','=', date('Y/m/d')]]))
                    ->get();

        return view('appdev.dashboard')
                    ->with('deliveries',$deliveries)
                    ->with('products',$products)
                    ->with('todayDelivery',$todayDelivery)
                    ->with('todayRestock',count($products))
                    ->with('todayDeadline',count($todayDeadline));
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
