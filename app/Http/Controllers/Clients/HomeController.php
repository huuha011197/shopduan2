<?php

namespace App\Http\Controllers\Clients;

use Illuminate\Http\Request;
use App\Slide;
use App\Product;
use App\ProductType;
use App\User;
use App\Comment;
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

    public function ctsp($id){
        $sp = Product::findOrFail($id);
    	$sptt = Product::where('id_type', $sp->id_type)->paginate(3);
    	return view('clients.chitiet',compact('sp', 'sptt'));
    }

    public function search(Request $req){
        $keyword = $req->search;
        $items = Product::where([ 
            ['name', 'LIKE', '%'. $keyword. '%'],
        ])->paginate(6);
        return view('clients.search',compact('items', 'keyword'));
    }
    
    public function lienhe(){
    	return view('clients.lienhe');
    }

    public function gioithieu(){
    	return view('clients.gioithieu');
    }

    public function comment(Request $request)
    {
        $comment = new Comment;
        $user_id = Auth::user()->id;
        $product_id = $request->product_id;
        $comment->user_id = $user_id;
        $comment->product_id = $product_id;
        $comment->content = $request->content;
        $comment->status = $request->status;
        $comment->save();
        return redirect()->route('ctsp', $product_id);
    }
}
