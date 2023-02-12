<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\product;
use App\Models\Subcategory;
use App\Models\wishlist;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Catch_;

class HomeController extends Controller
{

    // protected $categories;

    // public function __construct()
    // {
    //     $this->categories = Category::with('subcategories')->get();
    //     view()->share('categories', $this->categories);
    // }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // $categories=Category::with('subcategory')->get();
        // // dd($categories);
        return view('frontend.index');
    }

    public function shop($id)
    {


$products=Product::where('subcategory_id','=',$id)->paginate('15');
// dd($products);
        return view('frontend.shop', compact('products'));
    }

    public function details($id){
        $product=Product::with('stock')->findOrFail($id);

        return view('frontend.detail', compact('product'));
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


    public function wishlist( $id){
        $product=product::findOrFail($id);
        $wishlist =wishlist::where('product_id', $id)->first();
       if(isset($wishlist)){
        return "Allready Exits";
       }

        wishlist::insert([

            'product_id'=>$product->id,
        ]);
return back();

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
