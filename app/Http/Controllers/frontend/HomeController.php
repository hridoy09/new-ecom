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

    public function addToCart($id)
    {
        $product = product::findOrFail($id);

        $cart = session()->get('cart', []);

        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $product->title,
                "quantity" => 1,
                "price" => $product->price,
                "image" => $product->image
            ];
        }

        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function cart()
    {

        return view('frontend.cart');
    }


    public function remove(Request $request)
    {
        // dd($request->id);
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
        }
        return back();
    }


    public function update(Request $request)
    {
        // dd($request->all());

        if($request->id && $request->quantity){

            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            // dd($cart);
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }
        return back();
    }
}
