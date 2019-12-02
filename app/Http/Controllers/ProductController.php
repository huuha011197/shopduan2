<?php

namespace App\Http\Controllers;
use App\Product;
use App\ProductType;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product= Product::paginate(5);
        return view('admin.products.index',compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $type=ProductType::all();
        return view('admin.products.create',compact('type'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|min:5|max:35',
            'description' => 'required|min:15',
            'unit_price'=>'required|numeric|min:3',
            'promotion_price'=>'required|numeric|min:3',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ],[
            'name.min' => ' The Productname name must be at least 5 characters.',
            'name.max' => ' The Productname name may not be greater than 35 characters.',
            'name.required' => ' The category name field is required.',
            'description.required' => 'The Product description field is required.',
            'description.min' => 'The category description must be at least 15 characters.',
            'unit_price.required' => 'Unit price field is required.',
            'promotion_price.required' => 'promotion price field is required.'
        ]);
        $data=$request->all();
        $file = $request->file('image');
        $data['image']=$file->getClientOriginalName();
        Product::create($data);
        $file->move(base_path('public/source/image/product/'), $file->getClientOriginalName());
        return redirect()->back()->with('success', 'Create product successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $type = ProductType::all();
        $product = Product::findOrFail($id);
        return view('admin.products.edit',compact('product', 'type'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name' => 'required|min:5|max:35',
            'description' => 'required|min:15',
            'unit_price'=>'required|numeric|min:3',
            'promotion_price'=>'required|numeric|min:3',
             'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ],[
            'name.min' => 'The Productname name must be at least 5 characters.',
            'name.max' => 'The Productname name may not be greater than 35 characters.',
            'name.required' => 'The category name field is required.',
            'description.required' =>"The Product description field is required.",
            'description.min' =>"The category description must be at least 15 characters.",
            "unit_price.required"=>"Unit price field is required.",
            "promotion_price.required"=>"promotion price field is required."
        ]);
        $data = $request->all();
        $file = $request->file('image');
            if ($file == null) {
                $data['image'] = $request->image2;
            }else{
                    $data['image'] = $file->getClientOriginalName();
                    $file->move(base_path('public/source/image/product/'), $file->getClientOriginalName());
            }
        $product = Product::findOrFail($id);
        $product->update($data);
        return redirect()->back()->with('success', 'Update product successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Delete product successfully!');
    }
}
