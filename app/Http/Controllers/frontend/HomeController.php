<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\product;
use App\Models\Subcategory;
use App\Models\wishlist;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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



    public function wishlist(Request $request, $id){
        $user_id = Auth::user()->id;


        $product=product::findOrFail($id);
        $wishlist =wishlist::where('product_id', $id)->first();
       if(isset($wishlist)){
        return "Allready Exits";
       }

        wishlist::insert([

            'user_id'=>$user_id,
            'product_id'=>$product->id,
        ]);
return back();

    }


    public function showWishlist(){
        $session_id=Auth::user()->id;

        $wishlists=wishlist::where('user_id',$session_id)->with('wishProduct')->paginate('15');
        // dd($wishlists);
        return view('frontend.wishlist', compact('wishlists'));
    }

    public function wishDestroy($id){
        $wish = wishlist::findOrFail($id);
        $wish->delete();

        return back();
    }


}
