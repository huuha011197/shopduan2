<?php

namespace App\Http\Controllers;

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
class PageController extends Controller
{
    // public function getIndex(){
    // 	$slide = Slide::all();
    // 	$new_p = Product::where('new', 1)->paginate(4);
    // 	$pro_sale = Product::where('promotion_price', '<>', 0)->paginate(8);
    // 	return view('page.trangchu', compact('slide', 'new_p', 'pro_sale'));
    // }

    // public function getloaisp($type){
    // 	$sp_theo_loai= Product::where('id_type', $type)->paginate(6);
    // 	$loai = ProductType::all();
    // 	$lsp = ProductType::where('id', $type)->first();
    // 	return view('page.loai_san_pham', compact('sp_theo_loai', 'loai', 'lsp'));
    // }

    // public function ctsp(Request $reqs){
    // 	$sp = Product::where('id',$reqs->id)->first();
    // 	$sptt = Product::where('id_type', $sp->id_type)->paginate(3);
    // 	return view('page.chitiet',compact('sp', 'sptt'));
    // }

    // public function lienhe(){
    // 	return view('page.lienhe');
    // }

    // public function gioithieu(){
    // 	return view('page.gioithieu');
    // }

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
    	else{
    		Session::forget('cart');
    	}
    	return redirect()->back();
    }

    public function dathang(){
    	return view('page.dathang');
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
        $bill->note=$req->notes;
        // $bill->status=0;
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

    public function login(){
        return view('page.dangnhap');
    }

    public function register(){
        return view('page.dangki');
    }
    // public function doi_mk(){
    //     return view('page.doi_mk');
    // }
    // public function cntk(){
    //     $user= User::find(Auth::user()->id);
    //     return view('page.cap_nhat_tai_khoan',compact('user'));
    // }
    // public function save_doi_mk(Request $req){
    //     $this->validate($req,[
    //         'password' => 'required|min:3|max:20',
    //         're_password' => 'required|same:password',
    //     ],[
    //         'password.required'=>'Bạn chưa nhập mật khẩu',
    //         'password.min'=>'Mật khẩu tối thiểu 3 kí tự',
    //         'password.max'=>'Mật khẩu tối đa 20 kí tự',
    //         're_password.required'=>"Bạn chưa xác nhập mật khẩu",
    //         're_password.same'=>'Xác nhập mật khảu chưa chính xác',
    //     ]);
    //         $user=User::find(Auth::user()->id);
    //         if (Hash::check($req->password, Auth::user()->password)) {
    //             return redirect()->back()->with('thongbao2','Bạn nhập sai mật khẩu cũ');
    //         }else{
    //             $user->password= Hash::make($req->password);
    //             $user->save();
    //             return redirect()->back()->with('thongbao','Đổi mật khẩu thành công');
    //         }
    // }
    // public function save_cntk(Request $req, $id){
    //     $this->validate($req,[
    //         'name' => 'required|min:5|max:35',
    //         'email' => 'required|email',
    //         'phone' => 'required|numeric',
    //         'address' => 'required',
    //     ],[
    //         'email.required'=>"Bạn chưa nhập email",
    //         'email.email'=>"Định dạng là email",
    //         'name.min' => ' Tên tối thiểu 5 kí tự.',
    //         'name.max' => ' Tên tối đa 35 kí tự',
    //         'name.required' => ' Bạn chưa nhập tên đăng nhập',
    //         'address.required'=>'Bạn chưa nhập địa chỉ',
    //         'phone.required'=>"Bạn chưa nhập Sô điện thoại",
    //         'phone.numeric'=>'Định dạng là số',
    //     ]);
    //         $user=User::find($id);
    //         $data=$req->all();
    //         $user->update($data);
    //         return redirect()->back()->with('thongbao','Cập nhật tài khoản thành công');
    // }
    public function registernew( Request $req){
        $this->validate($req,[
                'name' => 'required|min:5|max:35',
                'email' => 'required|email|unique:users',
                'phone' => 'required|numeric',
                'password' => 'required|min:3|max:20',
                're_password' => 'required|same:password',
                'address' => 'required',
            ],[
                'email.required'=>"Bạn chưa nhập email",
                'email.email'=>"Định dạng là email",
                'email.unique'=>'email đã được sử dụng',
                'name.min' => ' Tên tối thiểu 5 kí tự.',
                'name.max' => ' Tên tối đa 35 kí tự',
                'name.required' => ' Bạn chưa nhập tên đăng nhập',
                'password.required'=>'Bạn chưa nhập mật khẩu',
                'password.min'=>'Mật khẩu tối thiểu 3 kí tự',
                'password.max'=>'Mật khẩu tối đa 20 kí tự',
                're_password.required'=>"Bạn chưa xác nhập mật khẩu",
                're_password.same'=>'Xác nhập mật khảu chưa chính xác',
                'address.required'=>'Bạn chưa nhập địa chỉ',
                'phone.required'=>"Bạn chưa nhập Sô điện thoại",
                'phone.numeric'=>'Định dạng là số',
            ]);
        $data = $req->all();
        $data['vai_tro'] = 0;
        $data['password'] = Hash::make($req->password);
        User::create($data);
        return redirect()->back()->with('thongbao', 'Đăng kí thành công');
    }
    public function getlogin(Request $req){
        $this->validate($req,[
            'email' => 'required|email',
            'password' => 'required',
        ],
        [
            'email.required'=> "Bạn chưa nhập email",
            'email.email'=> "Định dạng là email",
            'password.required' => 'Bạn chưa nhập mật khẩu',
        ]);
        $cre = array(
            'email' => $req->email,
            'password'=> $req->password
        );
        if (Auth::attempt($cre)) {
           return redirect()->back()->with([
                'flag' => 'success', 
                'thongbao' => 'Đăng nhập thành công'
            ]);
        }else{
            return redirect()->back()->with([
                'flag' => 'danger', 
                'thongbao' => 'Đăng nhập thất bại sai email hoặc mật khẩu'
            ]);
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('trang-chu');
    }

    // public function search(Request $req){
    //     $keyword = $req->search;
    //     $items = Product::where([ 
    //         ['name', 'LIKE', '%'. $keyword. '%'],
    //     ])->paginate(6);
    //     return view('page.search',compact('items', 'keyword'));
    // }
}
