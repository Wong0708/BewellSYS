<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Supplier;
use Session;

use Datetime;


class SupplierAccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $suppliers = Supplier::all();
        return view('appdev.supplieraccount')->with("suppliers",$suppliers);
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
        $added_suppliers = $request->all();

        foreach($added_suppliers['suppname'] as $added_supplier)
        {
            $supplierdetail[0] = $added_supplier;
        }
        foreach($added_suppliers['suppaddress'] as $added_supplier)
        {
            $supplierdetail[1] = $added_supplier;
        }
        foreach($added_suppliers['contactperson'] as $added_supplier)
        {
            $supplierdetail[2] = $added_supplier;
        }
        foreach($added_suppliers['contactnumber'] as $added_supplier)
        {
            $supplierdetail[3] = $added_supplier;
        }
        foreach($added_suppliers['suppemail'] as $added_supplier)
        {
            $supplierdetail[4] = $added_supplier;
        }
        foreach($added_suppliers['suppremarks'] as $added_supplier)
        {
            $supplierdetail[5] = $added_supplier;
        }


        $date = new DateTime();

        $supplier = new Supplier();
        $supplier->sp_name = $supplierdetail[0];
        $supplier->sp_address = $supplierdetail[1];
        $supplier->sp_contactperson = $supplierdetail[2];
        $supplier->sp_contactnumber = $supplierdetail[3];
        $supplier->sp_email = $supplierdetail[4];
        $supplier->sp_remarks = $supplierdetail[5];
        $supplier->sp_status = "Active";
        $supplier->created_at = $date->gettimestamp();
        $supplier->updated_at = $date->gettimestamp();
        $supplier->save();

        Session::flash('success', 'Successfully added a supplier profile!');
        return redirect('/supplieraccount');

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
