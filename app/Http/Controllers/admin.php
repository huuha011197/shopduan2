<?php

namespace App\Http\Controllers;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;
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
        $chart_options = [
            'chart_title' => 'Users by months',
            'report_type' => 'group_by_date',
            'model' => 'App\User',
            'group_by_field' => 'created_at',
            'group_by_period' => 'month',
            'chart_type' => 'bar',
            'filter_field' => 'created_at',
            'filter_days' => 365, // show only last 30 days
        ];
        $chart1 = new LaravelChart($chart_options);
        $chart_options = [
            'chart_title' => 'Users by names this months',
            'report_type' => 'group_by_string',
            'model' => 'App\User',
            'group_by_field' => 'name',
            'chart_type' => 'pie',
            'filter_field' => 'created_at',
            'filter_period' => 'month', // show users only registered this month
        ];
        $chart2 = new LaravelChart($chart_options);
        $chart_options = [
            'chart_title' => 'Product by months',
            'report_type' => 'group_by_date',
            'model' => 'App\Product',
            'group_by_field' => 'created_at',
            'group_by_period' => 'month',
            'chart_type' => 'bar',
            'filter_field' => 'created_at',
            'filter_days' => 365, // show only last 30 days
        ];
        $chart3 = new LaravelChart($chart_options);
        $chart_options = [
            'chart_title' => 'Comment by months',
            'report_type' => 'group_by_date',
            'model' => 'App\Comment',
            'group_by_field' => 'created_at',
            'group_by_period' => 'month',
            'chart_type' => 'pie',
            'filter_field' => 'created_at',
            'filter_days' => 365, // show only last 30 days
        ];
        $chart4 = new LaravelChart($chart_options);
        $chart_options = [
            'chart_title' => 'Order by months',
            'report_type' => 'group_by_date',
            'model' => 'App\Bill',
            'group_by_field' => 'created_at',
            'group_by_period' => 'month',
            'chart_type' => 'line',
            'filter_field' => 'created_at',
            'filter_days' => 365, // show only last 30 days
        ];
        $chart5 = new LaravelChart($chart_options);
        $chart_options = [
            'chart_title' => 'Order by customer this months',
            'report_type' => 'group_by_string',
            'model' => 'App\Customer',
            'group_by_field' => 'name',
            'chart_type' => 'pie',
            'filter_field' => 'created_at',
            'filter_period' => 'month', // show users only registered this month
        ];
        $chart6 = new LaravelChart($chart_options);
        return view('admin.charts.charts', compact('chart1', 'chart2','chart3','chart4','chart5','chart6'));
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
