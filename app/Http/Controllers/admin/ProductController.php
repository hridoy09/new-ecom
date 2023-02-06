<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Product;
use File;
use Image;
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
        $categories=Category::all();
        $subcategories=SubCategory::all();
        return view('admin.product.index', compact('categories','subcategories'));
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
    //    dd($request->all());

    if($request->file('image')){
        $file= $request->file('image');
        $filename= $file->getClientOriginalName();
        $file->move(public_path('assets/admin/pro_img'), $filename);
    }



        Product::create([
            'category_id' => $request->category_id,
            'subcategory_id' => $request->subcategory_id,
            'image' => 'assets/admin/pro_img/'.$filename,
            'title' => $request->title,
            'price' => $request->price,


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
        $categories=Category::all();
        $subcategory=Subcategory::all();
        $product=Product::findOrFail($id);

        return view('admin.product.edit', compact('categories', 'subcategory', 'product'));
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

        if($request->file('image')){
            $file= $request->file('image');
            $filename= $file->getClientOriginalName();
            $file->move(public_path('assets/admin/pro_img'), $filename);
        }

        $product=Product::findOrFail($id);
        $product->category_id = $request->category_id;
        $product->subcategory_id = $request->subcategory_id;
        $product->image = $request->image;
        $product-> title = $request->title;
        $product->price = $request->price;
        $product->save();
        return redirect('subcategory');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product=Product::findOrFail($id);
        $product->delete();
        return back();
    }
}
