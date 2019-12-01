<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use App\ProductType;
use App\Product;
use App\Bill;
use App\customer;
use App\billDetail;
class admin extends Controller
{
    public function getadmin(){
    	return view('admin.home');
    }
    public function viewuser(){
    	$user=User::all();
    	return view('admin.user',compact("user"));
    }
    public function suauser($id){
    	$user=User::find($id);
    	return view('admin.suauser',compact("user"));
    }
    public function newuser(){
        return view('admin.newuser');
    }
     public function addnewuser(Request $req){
        $this->validate($req,[
                'full_name' => 'required|min:5|max:35',
                'email' => 'required|email|unique:users',
                'phone' => 'required|numeric',
                'password' => 'required|min:3|max:20',
                're_password' => 'required|min:3|max:20|same:password',
                'address' => 'required',
                'role'=>"required",
            ],[
                'full_name.min' => ' The first name must be at least 5 characters.',
                'full_name.max' => ' The first name may not be greater than 35 characters.',
                'full_name.required' => ' The last name field is required.',
            ]);
        $user=new User;
        $user->password=$req->password;
        $user->full_name=$req->full_name;
        $user->email=$req->email;
        $user->phone=$req->phone;
        $user->password=$req->password;
        $user->address=$req->address;
        $user->vai_tro=$req->role;
        $user->save();
        return redirect()->back();
    }
    public function xoauser($id){
        $user= User::find($id);
        $user->delete();
        return redirect()->back();
    }
    public function upuser(Request $req, $id){
        $user=User::find($id);
        $data=$req->all();
        $user->update($data);
        return redirect()->back();
    }
    public function viewcategory(){
        $category= ProductType::all();
        return view('admin.viewcategory',compact('category'));
    }
    public function themcategory(){
        return view('admin.addcategory');
    }
    public function suacategory($id){
        $category= ProductType::find($id);
        return view('admin.suacategory',compact('category'));
    }
    public function xoacategory($id){
        $category= ProductType::find($id);
        $category->delete();
        return redirect()->back();
    }
    public function addnewcategory(Request $req){
         $this->validate($req,[
                'name' => 'required|min:5|max:35',
                'decription' => 'required|min:15',
            ],[
                'name.min' => ' The category name must be at least 5 characters.',
                'name.max' => ' The category name may not be greater than 35 characters.',
                'name.required' => ' The category name field is required.',
                'decription.required' =>"The category decription field is required.",
                'decription.min' =>"The category decription must be at least 15 characters.",
            ]);
         $category=new ProductType;
         $category->name=$req->name;
         $category->description=$req->decription;
         $category->save();
        return redirect()->back();
    }
    public function updatecategory(Request $req, $id){
         $this->validate($req,[
                'name' => 'required|min:5|max:35',
                'decription' => 'required|min:15',
            ],[
                'name.min' => ' The category name must be at least 5 characters.',
                'name.max' => ' The category name may not be greater than 35 characters.',
                'name.required' => ' The category name field is required.',
                'decription.required' =>"The category decription field is required.",
                'decription.min' =>"The category decription must be at least 15 characters.",
            ]);
        $cate = ProductType::find($id);
        $data = $req->all();
        $cate->update($data);
        return redirect()->back();
    }
    public function viewproduct(){
        $product= Product::paginate(5);
        return view('admin.viewproduct',compact('product'));
    }
     public function themproduct(){
        $type=ProductType::all();
        return view('admin.themproduct',compact('type'));
    }
      public function addproduct(Request $req){
         $this->validate($req,[
                'name' => 'required|min:5|max:35',
                'description' => 'required|min:15',
                'unit_price'=>'required|numeric|min:3',
                'promotion_price'=>'required|numeric|min:3',
                 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ],[
                'name.min' => ' The Productname name must be at least 5 characters.',
                'name.max' => ' The Productname name may not be greater than 35 characters.',
                'name.required' => ' The category name field is required.',
                'description.required' =>"The Product description field is required.",
                'description.min' =>"The category description must be at least 15 characters.",
                "unit_price.required"=>"Unit price field is required.",
                "promotion_price.required"=>"promotion price field is required."
            ]);
       $data=$req->all();
       $file = $req->file('image');
       $data['image']=$file->getClientOriginalName();
        Product::create($data);
        $file->move(base_path('public/source/image/product/'), $file->getClientOriginalName());
        return redirect()->back();
    }
    public function xoaproduct($id){
        Product::find($id)->delete();
        return redirect()->back();
    }
     public function suaproduct($id){
        $type=ProductType::all();
        $product=Product::find($id);
         return view('admin.suaproduct',compact('product','type'));
    }
          public function upproduct(Request $req,$id){
         $this->validate($req,[
                'name' => 'required|min:5|max:35',
                'description' => 'required|min:15',
                'unit_price'=>'required|numeric|min:3',
                'promotion_price'=>'required|numeric|min:3',
                 'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ],[
                'name.min' => ' The Productname name must be at least 5 characters.',
                'name.max' => ' The Productname name may not be greater than 35 characters.',
                'name.required' => ' The category name field is required.',
                'description.required' =>"The Product description field is required.",
                'description.min' =>"The category description must be at least 15 characters.",
                "unit_price.required"=>"Unit price field is required.",
                "promotion_price.required"=>"promotion price field is required."
            ]);
       $data=$req->all();
    
       $file = $req->file('image');
       if ($file==null) {
           $data['image']=$req->image2;
       }else{
            $data['image']=$file->getClientOriginalName();
            $file->move(base_path('public/source/image/product/'), $file->getClientOriginalName());
       }
        $p=Product::find($id);
        $p->update($data);
        return redirect()->back();
    }
     public function order(){
        $orders=Bill::all();
        return view('admin.orderlist',compact('orders'));
    }
    public function customer($id){
        $customer=Customer::find($id);
       return redirect()->back()->with('customer',$customer);
    }
     public function bill($id){
        $bill=BillDetail::where('id_bill',$id)->get();
       return redirect()->back()->with('bill',$bill);
    }
    public function xoaorder($id){
        $bill=Bill::find($id);
        $customer=Customer::find($bill->id_customer);
        $bill_detail=BillDetail::where('id_bill',$id);
        $bill->delete();
        $customer->delete();
        $bill_detail->delete();
        return redirect()->back();
    }
    public function status($id){
        $bill=Bill::find($id);
        if ($bill->status==0) {
            $bill->status=1;
            $bill->update();
            return redirect()->back()->with('success', 'Bill  has been deleted');
        }
        else{
        return redirect()->back()->with('success', 'Bill ' . $id . ' has been processed');           }
    }
}
