<?php

namespace App\Http\Controllers\Clients;

use Illuminate\Http\Request;
use App\Slide;
use App\Product;
use App\ProductType;
use App\Cart;
use App\User;
use App\Customer;
use App\BillDetail;
use App\Bill;
use Session;
use Auth;
use Hash;
use App\Http\Controllers\Controller;

class CartController extends Controller
{
    public function getAddtoCart(Request $req,$id){
    	$product = Product::findOrFail($id);
    	$oldCart = Session('cart') ? Session::get('cart') : null;
    	$cart = new Cart($oldCart);
    	$cart->add($product, $id);
    	$req->session()->put('cart', $cart);
    	return redirect()->back();
    }

    public function delcart($id){
    	$oldCart = Session::has('cart') ? Session::get('cart') : null;
    	$cart = new Cart($oldCart);
    	$cart->removeItem($id);
    	if (count($cart->items)>0) {
    		Session::put('cart', $cart);
        }
        else {
    		Session::forget('cart');
    	}
    	return redirect()->back();
    }

    public function dathang(){
    	return view('clients.orders.dathang');
    }

    public function postcheckout(Request $req){
        $cart = Session::get("cart");
        $customer= new Customer;
        $customer->user_id = Auth::user()->id;
        $customer->name = $req->name;
        $customer->gender = $req->gender;
        $customer->email = $req->email;
        $customer->address = $req->address;
        $customer->phone = $req->phone;
        $customer->note = $req->notes;
        $customer->save();

        $bill = new Bill;
        $bill->id_customer = $customer->id;
        $bill->date_order = date("Y-m-d");
        $bill->total = $cart->totalPrice;
        $bill->payment = $req->payment;
        $bill->note = $req->notes;
        $bill->status = 0;
        $bill->save();

        foreach ($cart->items as $key => $value) {
            $bill_detail = new BillDetail;
            $bill_detail->id_bill = $bill->id;
            $bill_detail->id_product=$key;
            $bill_detail->quantity = $value['qty'];
            $bill_detail->unit_price = $value['price']/$value['qty'];
            $bill_detail->product_name = $value['item']['name'];
            $bill_detail->save();
        }
       Session::forget('cart');
       return redirect()->back()->with('thongbao', 'Đặt hàng thành công');
    }
}
