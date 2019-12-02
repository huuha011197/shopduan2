<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\User;
use Session;
use Auth;
use Hash;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function login(){
        return view('auth.dangnhap');
    }

    public function register(){
        return view('auth.dangki');
    }

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
}
