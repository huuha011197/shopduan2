<?php

namespace App\Http\Controllers\Clients;

use Illuminate\Http\Request;
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

    public function cartUpdate(Request $request, $id) {
        $qty=$request->qty;
        $product = Product::find($id);
		$cart = Session::get('cart');
		if ($qty==0 ) {
			unset($cart[$id]);
			Session::put('cart', $cart);
		}elseif($qty < 0 || $qty > 10)
		{
			$request->session()->flash('status', 'Lỗi, vui lòng kiểm tra lại!');
		}
		else{
            $cart->items[$id]['qty']=$qty;
            $cart->totalPrice= $qty * $cart->items[$id]['unit_price'];
            
			Session::put('cart', $cart);
        }
    //    Session::forget('cart');
        return back();
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
        $cart = Session::get("cart");
        // dd($cart->items);
    	return view('clients.pages.checkout', compact('cart'));
    }

    public function viewCart()
    {
        $cart = Session::get("cart");
        return  view('clients.pages.order', compact('cart'));
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
            $bill_detail->unit_price = $value['unit_price'];
            $bill_detail->product_name = $value['item']['name'];
            $bill_detail->save();
            $quantity_update=Product::find($key);
            $quantity_update->quantity= $quantity_update->quantity-$value['qty'];
            $quantity_update->save();
        }
       Session::forget('cart');
       return redirect()->back()->with('thongbao', 'Đặt hàng thành công');
    }
}