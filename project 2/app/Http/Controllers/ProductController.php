<?php

namespace App\Http\Controllers;

use App\Schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use App\Product;
use App\ProductLogs;
use App\ProductDetails;
use App\Supply;
use App\SupplyLogs;
// use App\SecondaryUser;
use DateTime;

class ProductController extends Controller
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
        $products = Product::all();
        $supply = Supply::all();
        foreach ($products as $product){

            $datetime2 = new DateTime($product['pd_expiryDate']);
            $datetime1 = new DateTime(now());
            $interval = $datetime1->diff($datetime2);
            $product['datediff'] = $interval->format('%r%a');;
        }
        return view('appdev.productinventory')->with("products",$products)->with("supply",$supply);
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
        $add_product = $request->all();


        $materials = array();
        $i = 0;
        foreach ($add_product['material'] as $added_material){
            $materials [0][$i] =  $added_material;
            $i = $i+1;
        }
        $i = 0;
        foreach ($add_product['gram'] as $added_material){
            $materials [1][$i] =  $added_material;
            $i = $i+1;
        }
        $i = 0;
        foreach ($add_product['quantity'] as $added_material){
            $materials [2][$i] =  $added_material;
            $i = $i+1;
        }

        foreach ($add_product['productname'] as $added_product){
            $productarray[0] = $added_product;
        }
        foreach ($add_product['productcode'] as $added_product){
            $productarray[1] = $added_product;
        }
        foreach ($add_product['SKU'] as $added_product){
            $productarray[2] = $added_product;
        }
        foreach ($add_product['onhand'] as $added_product){
            $productarray[3] = $added_product;
        }
        foreach ($add_product['onorder'] as $added_product){
            $productarray[4] = $added_product;
        }
        foreach ($add_product['allocated'] as $added_product){
            $productarray[5] = $added_product;
        }
        foreach ($add_product['available'] as $added_product){
            $productarray[6] = $added_product;
        }
        /*foreach ($add_product['minimum'] as $added_product){
            $productarray[7] = $added_product;
        }*/
        foreach ($add_product['maximum'] as $added_product){
            $productarray[8] = $added_product;
        }
        foreach ($add_product['ROP'] as $added_product){
            $productarray[9] = $added_product;
        }
        foreach ($add_product['price'] as $added_product){
            $productarray[10] = $added_product;
        }


        $date = new DateTime();
        $date1 = date("Y-m-d");

        $product = new Product();
        $product->pd_expiryDate = $date1;
        $product->pd_code = $productarray[1];
        $product->pd_name = $productarray[0];
        $product->pd_desc = 'N/A';
        $product->pd_sku = $productarray[2];
        $product->pd_qty = $productarray[3];
        $product->pd_reorder = $productarray[4];
        $product->pd_maxQty = $productarray[8];
        $product->pd_price = $productarray[10];
        $product->pd_status = 'On Stock';
        $product->created_at = $date->getTimestamp(); 
        $product->updated_at = $date->getTimestamp();
        $product->save();

        $i=0;
        for($row = 0; $row<sizeof($materials[0]); $row++)
        {
            $productdetail = new ProductDetails();
            $productdetail->pd_id = $product->id;
            $nextmaterial = Supply::where('sp_name', $materials[0][$i])->first();//alternatively, where('sp_sku', $materials[1][$i])->first();
            $productdetail->sp_id = $nextmaterial->id;
            $productdetail->pd_sp_qty = $materials[2][$i];
            $productdetail->created_at = $date->gettimestamp();
            $productdetail->updated_at = $date->gettimestamp();
            $productdetail->save();

            $i = $i + 1;
        }

        Session::flash('success','Successfully added a product!');
        return redirect("/product");
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
        $products = Product::find($request->pd_id);
        $products->pd_status = $request->input('productStatuss');
        $products->updated_at = $date->getTimeStamp();
        $products->save();

        // dd($order);

        Session::flash('success','Successfully updated the product status!');
        return redirect("/product");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();

        // dd($product);

        Session::flash('success','Successfully deleted a product!');
        return redirect("/product");
    }
}
