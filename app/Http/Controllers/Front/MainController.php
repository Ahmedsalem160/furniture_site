<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Order;
use App\Models\Products;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public  function getHome(){
        $categories = Category::all();
        $products =Products::all();
        return view('webSite.index',compact('categories','products'));
    }
    public function getCat(){
        $categories = Category::all();
        $products=Products::all();

        return view('webSite.categories',compact('categories','products'));
    }
    public function getCatWithID($id){
        $categories = Category::all();

        $products=Products::where('subCategory_id',$id)->get();
        return view('webSite.categories',compact('products','categories'));
    }
    public function getDetailsPage($id){
        $products=Products::where('id',$id)->first();
       $productsAllImage=Products::where('id',$id)->select('image')->get();
       return view('webSite.shop_details',compact('productsAllImage','products'));
    }
    public function AddOrder(Request $request ,$id){
            $total_price=0;
            $product=Products::findOrFail($id);
            if($product){
                foreach ($request->products as $id =>$quantity){
                    $product=Products::FindOrFail($id);
                    $total_price +=$request->sale_price * $quantity['quantity'];
                    $product->update([
                        'stock'=>$product->stock - $quantity['quantity']
                    ]);
                    $carts=Cart::create([
                        'product_id'=>$product->id,
                        'quantity'=>$quantity['quantity'],
                        'user_id'=>$request->user_id
                    ]);
                }
                $order=Order::create(['total_price'=>$total_price,'user_id'=>$request->user_id]);
                $order->products()->attach($request->products);
                return redirect()->route('cart.show');
            }
    }

    public function geCartPage(){
        $orders=Cart::with('product')->where('user_id',auth()->user()->id)->get();
       return view('webSite.cart',compact('orders'));
    }

    public function deletOrder($id){
        $orders=Order::with('products')->find($id);
        foreach ($orders->products as$product){
            $product->update([
               'stock'=>$product->stock + $product->pivot->quantity
            ]);
        }
        $carts=Cart::findOrFail($id);
        $orders->delete();
        $carts->delete();
        return redirect()->route('cart.show')->with(['success'=>'Remove Success']);

    }


}
