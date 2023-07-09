<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\cart;
use App\Models\Order;
use Session;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    function index()
    {
        $data = Product::all();
        return view('product', ['products' => $data]);
    }
    function detail($id)
    {
        $data = Product::find($id);
        return view('detail', ['product' => $data]);
    }

    function search(Request $req)
    {
        //return $req->input();
        $data = Product::where('name', 'like', '%' . $req->input('query') . '%')->get();
        return view('search', ['products' => $data]);
    }

    function addToCart(Request $req)
    {
        if ($req->session()->has('user')) {
            $cart = new cart;
            $cart->user_id = $req->session()->get('user')['id'];
            $cart->product_id = $req->product_id;
            $cart->save();
            return redirect('/');
        } else {
            return redirect('/login');
        }

    }

    static function cartItem()
    {
        $userId = Session::get('user')['id']; // get user id from session
        return cart::where('user_id', $userId)->count(); // count the number of items in cart
    }

    function cartlist()
    {
        $userId = Session::get('user')['id'];
        $products = DB::table('cart')
            ->join('product', 'cart.product_id', '=', 'product.id')
            ->where('cart.user_id', $userId)
            ->select('product.*', 'cart.id as cart_id')
            ->get();

        return view('cartlist', ['products' => $products]);
    }

    function removeCart($id)
    {
        cart::destroy($id);
        return redirect('cartlist');
    }

    function ordernow()
    {
        $userId = Session::get('user')['id'];
        $total = DB::table('cart')
            ->join('product', 'cart.product_id', '=', 'product.id')
            ->where('cart.user_id', $userId)
            ->select('product.*', 'cart.id as cart_id')
            ->sum('product.price');

        return view('ordernow', ['total' => $total]);
    }

    function orderPlace(Request $req)
    {
        $userId = Session::get('user')['id'];
        $allCart = cart::where('user_id', $userId)->get();
        foreach ($allCart as $cart) {
            $order = new Order; // creating an instance of Order model
            $order->product_id = $cart['product_id']; // assigning product id to order
            $order->user_id = $cart['user_id']; // assigning user id to order
            $order->status = "pending";
            $order->payment_method = $req->payment;
            $order->payment_status = "pending";
            $order->address = $req->address;
            $order->save(); // saving the order
            cart::where('user_id', $userId)->delete(); // deleting the order from cart
        }
        //return $req->input();
        return redirect('/login');
    }

    function myOrders()
    {
        //echo "orders";
        $userId = Session::get('user')['id'];
        $orders = DB::table('orders')
            ->join('product', 'orders.product_id', '=', 'product.id')
            ->where('orders.user_id', $userId)
            ->get();

        return view('myorders', ['orders' => $orders]);
    }
}
