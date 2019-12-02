<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use App\ProductType;
use App\Product;
use App\Bill;
use App\Customer;
use App\BillDetail;
class admin extends Controller
{
    public function getadmin(){
    	return view('admin.home');
    }
    public function order(){
        $orders = Bill::all();
        return view('admin.orderlist',compact('orders'));
    }

    public function customer($id){
        $customer = Customer::findOrFail($id);
       return redirect()->back()->with('customer',$customer);
    }

    public function bill($id){
        $bill = BillDetail::where('id_bill',$id)->get();
       return redirect()->back()->with('bill',$bill);
    }

    public function xoaorder($id){
        $bill=Bill::findOrFail($id);
        $customer = Customer::findOrFail($bill->id_customer);
        $bill_detail = BillDetail::where('id_bill',$id);
        $bill->delete();
        $customer->delete();
        $bill_detail->delete();
        return redirect()->back();
    }

    public function status($id){
        $bill = Bill::findOrFail($id);
        if ($bill->status == 0) {
            $bill->status = 1;
            $bill->update();
        }
        return redirect()->back()->with('success', 'Bill ' . $id . ' has been processed');  
    }
}
