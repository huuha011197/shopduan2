<?php

namespace App\Http\Controllers\Clients;

use Illuminate\Http\Request;
use App\Slide;
use App\Product;
use App\ProductType;
use App\User;
use App\Contact;
use App\Comment;
use Auth;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
class HomeController extends Controller
{
    public function getIndex(){
        $slides = Slide::all();
        $product_types = ProductType::take(3)->get();
    	$new_products = Product::orderBy('id', 'desc')->paginate(4);
        $sale_products = Product::where('promotion_price', '<>', 0)->paginate(8);
    	return view('clients.pages.index', compact('slides', 'new_products', 'sale_products', 'product_types'));
    }

    public function getloaisp($id = 'all'){
        $categories = ProductType::all();
        if ($id != 'all') {
            $cate_products = Product::where('id_type', $id)->get();
        } 
        else {
            $cate_products = Product::all();
        }
    	return view('clients.pages.categories',compact('categories', 'cate_products'));
    }

    public function ctsp($id){
        $product_detail = Product::with('product_type')->findOrFail($id);
        $product_type = $product_detail->product_type;
        $product_detail->view += 1;
        $product_detail->save();
        $related_products = Product::where('id_type', $product_detail->id_type)->get();
        return view('clients.pages.productDetail',compact('product_detail', 'product_type', 'related_products'));
    }

    public function search(Request $request){
        if($request->has('search')){
            $items = Product::search($request->search)->paginate(6);	
    	}else{
    		$items = Product::paginate(6);
    	}
        $keyword=$request->search;
        return view('clients.pages.search',compact('items','keyword'));
    }
    
    public function lienhe(){
    	return view('clients.pages.contact');
    }

    public function postLienhe(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
        ]);
        $contact = Contact::create($request->all());

        $data  = ['name' => $request->name, 'email' => $request->email, 'subject' => $request->subject, 'messages' => $request->message];
        Mail::send('clients.pages.mailct', $data, function($message){
            $message->from('trandinhdat9b@gmail.com', 'Khách hàng');
            $message->to('trandinhdatb4@gmail.com', 'Visitor')->subject('Liên hệ với shop!');
        });
        return back()->with('success', 'Đã gửi thàng công!');
    }
    public function gioithieu(){
    	return view('clients.pages.about');
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
