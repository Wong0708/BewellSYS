<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use App\Product;
use App\ProductLogs;
use App\Supply;
use App\SupplyLogs;
// use App\SecondaryUser;
use DateTime;

class SupplyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        $supply = Supply::all();
        return view('appdev.supplyinventory')->with("products",$products)->with("supply",$supply);
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
        $add_supply = $request->all();

        foreach ($add_supply['materialname'] as $added_supply){
            $supplyarray[0] = $added_supply;
        }
        foreach ($add_supply['materialcode'] as $added_supply)
        {
            $supplyarray[1] = $added_supply;
        }
        foreach ($add_supply['SKU'] as $added_supply)
        {
            $supplyarray[2] = $added_supply;
        }
        foreach ($add_supply['minimum'] as $added_supply)
        {
            $supplyarray[3] = $added_supply;
        }
        foreach ($add_supply['maximum'] as $added_supply)
        {
            $supplyarray[4] = $added_supply;
        }
        foreach ($add_supply['ROP'] as $added_supply)
        {
            $supplyarray[5] = $added_supply;
        }
        foreach ($add_supply['price'] as $added_supply)
        {
            $supplyarray[6] = $added_supply;
        }

        $date = new DateTime();
        $date1 = date("Y-m-d");

        $supply = new Supply();
        $supply->sp_expiryDate = $date1;
        $supply->sp_code = $supplyarray[1];
        $supply->sp_name = $supplyarray[0];
        $supply->sp_desc = 'N/A';
        $supply->sp_sku = $supplyarray[2];
        $supply->sp_qty = 0;
        $supply->sp_reorder = 0;
        $supply->sp_maxQty = $supplyarray[4];
        //$supply->sp_price = $productarray[10];
        $supply->sp_status = 'On Stock';
        $supply->created_at = $date->getTimestamp(); 
        $supply->updated_at = $date->getTimestamp();
        $supply->save();

        Session::flash('success','Successfully added a raw material!');
        return redirect("/supply");
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
        $date = new datetime();
        //
        $supply = Supply::find($request->sp_id);
        $supply->sp_status = $request->input('supplyStatus');
        $supply->updated_at = $date->getTimeStamp();
        $supply->save();

        // dd($order);

        Session::flash('success','Successfully updated the supply status!');
        return redirect("/supply");
        
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
        $product = Supply::find($id);
        $product->delete();

        // dd($product);

        Session::flash('success','Successfully deleted a supply!');
        return redirect("/supply");
    }
}
