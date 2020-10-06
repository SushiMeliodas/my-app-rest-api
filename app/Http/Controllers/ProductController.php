<?php

namespace App\Http\Controllers;

use App\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Products::orderBy('product_id', 'desc')->get();
        return response()->json($products);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $products = new Products;
        $products->product_name = $request->product_name;
        $products->product_type = $request->product_type;
        $products->product_quantity = $request->product_quantity;
        $products->product_datetime = $request->product_datetime;
        $products->product_datetime_1 = $request->product_datetime_1;
        $products->product_datetime_2 = $request->product_datetime_2;
        $products->product_datetime_3 = $request->product_datetime_3;
        $products->save();
        return response()->json($products);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($product_id)
    {
        $products = Products::findOrFail($product_id);
        return response()->json($products);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $product_id)
    {
        $products = Products::findOrFail($product_id);
        $products->product_name = $request->product_name;
        $products->product_type = $request->product_type;
        $products->product_quantity = $request->product_quantity;
        $products->product_datetime = $request->product_datetime;
        $products->product_datetime_1 = $request->product_datetime_1;
        $products->product_datetime_2 = $request->product_datetime_2;
        $products->product_datetime_3 = $request->product_datetime_3;
        $products->product_status = $request->product_status;
        $products->product_status_1 = $request->product_status_1;
        $products->save();
        return response()->json($request);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($product_id)
    {
        $products = Products::findOrFail($product_id);
        $products->delete();
        return response()->json($products);
    }
}
