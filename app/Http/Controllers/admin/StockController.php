<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Product;
use App\Models\Stock;

use Illuminate\Http\Request;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $categories=Category::all();
        // $subcategories=SubCategory::all();
        $products=Product::all();
        $stocks=Stock::with('product')->get();

         return view('admin.stock.index', compact('products','stocks'));
        // return view('admin.stock.index', compact('categories','subcategories','products','stocks'));
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
        $product=Product::where('id','=',$request->product_id)->first();

        Stock::create([

            'product_name' => $request->product_id, //product_id = form name
            'total_stock' => $request->total_stock,
            'total_price' => $request->total_stock*$product->price,



        ]);
        return back();
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
        $products=Product::all();
        $stock=Stock::findOrFail($id);


        return view('admin.stock.edit', compact('products','stock'));
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
          $product=Product::where('id','=',$request->product_id)->first();
          $stock=Stock::findOrFail($id);
          $stock->product_name = $request->product_name;
          $stock->total_stock =$stock->total_stock+$request->total_stock;
          $stock->total_price = $stock->total_price+$product->price*$request->total_stock;
          $stock->save();
          return redirect('stock');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $stock=Stock::findOrFail($id);
        $stock->delete();
        return back();
    }
}
