<?php

namespace App\Http\Controllers\Clients;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Hash;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function doi_mk(){
        return view('clients.profile.changePassword');
    }

    public function cntk(){
        $user = User::findOrFail(Auth::user()->id);
        return view('clients.profile.edit',compact('user'));
    }

    public function save_doi_mk(Request $req){
        $this->validate($req,[
            'password' => 'required|min:3|max:20',
            're_password' => 'required|same:password',
        ],
        [
            'password.required'=>'Bạn chưa nhập mật khẩu',
            'password.min'=>'Mật khẩu tối thiểu 3 kí tự',
            'password.max'=>'Mật khẩu tối đa 20 kí tự',
            're_password.required'=>"Bạn chưa xác nhập mật khẩu",
            're_password.same'=>'Xác nhập mật khảu chưa chính xác',
        ]);
            $user=User::findOrFail(Auth::user()->id);
            if (Hash::check($req->password, Auth::user()->password)) {
                return redirect()->back()->with('thongbao2','Bạn nhập sai mật khẩu cũ');
            }else{
                $user->password = Hash::make($req->password);
                $user->save();
                return redirect()->back()->with('thongbao','Đổi mật khẩu thành công');
            }
    }

    public function save_cntk(Request $req, $id){
        $this->validate($req,[
            'name' => 'required|min:5|max:35',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'address' => 'required',
        ],
        [
            'email.required'=>"Bạn chưa nhập email",
            'email.email'=>"Định dạng là email",
            'name.min' => ' Tên tối thiểu 5 kí tự.',
            'name.max' => ' Tên tối đa 35 kí tự',
            'name.required' => ' Bạn chưa nhập tên đăng nhập',
            'address.required'=>'Bạn chưa nhập địa chỉ',
            'phone.required'=>"Bạn chưa nhập Sô điện thoại",
            'phone.numeric'=>'Định dạng là số',
        ]);
            $user = User::findOrFail($id);
            $data = $req->all();
            $user->update($data);
            return redirect()->back()->with('thongbao', 'Cập nhật tài khoản thành công');
    }
}
