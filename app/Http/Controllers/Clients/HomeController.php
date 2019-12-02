<?php

namespace App\Http\Controllers\Clients;

use Illuminate\Http\Request;
use App\Slide;
use App\Product;
use App\ProductType;
use App\User;
use Auth;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function getIndex(){
    	$slide = Slide::all();
    	$new_p = Product::where('new', 1)->paginate(4);
    	$pro_sale = Product::where('promotion_price', '<>', 0)->paginate(8);
    	return view('clients.trangchu', compact('slide', 'new_p', 'pro_sale'));
    }

    public function getloaisp($type){
    	$sp_theo_loai= Product::where('id_type', $type)->paginate(6);
    	$loai = ProductType::all();
    	$lsp = ProductType::where('id', $type)->first();
    	return view('clients.loai_san_pham', compact('sp_theo_loai', 'loai', 'lsp'));
    }

    public function ctsp(Request $reqs){
    	$sp = Product::where('id',$reqs->id)->first();
    	$sptt = Product::where('id_type', $sp->id_type)->paginate(3);
    	return view('clients.chitiet',compact('sp', 'sptt'));
    }

    public function lienhe(){
    	return view('clients.lienhe');
    }

    public function gioithieu(){
    	return view('clients.gioithieu');
    }
}
