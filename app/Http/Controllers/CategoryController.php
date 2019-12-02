<?php

namespace App\Http\Controllers;
use App\ProductType;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category= ProductType::all();
        return view('admin.categories.index',compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create');
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
            'decription' => 'required|min:15',
        ],[
            'name.min' => 'The category name must be at least 5 characters.',
            'name.max' => 'The category name may not be greater than 35 characters.',
            'name.required' => 'The category name field is required.',
            'decription.required' =>"The category decription field is required.",
            'decription.min' => "The category decription must be at least 15 characters.",
        ]);
        $category = new ProductType;
        $category->name=$request->name;
        $category->description=$request->decription;
        
        if($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = $image->getClientOriginalName();
            $image->move(base_path('public/source/image/product/'), $filename);
            $category->image = $request->file('image')->getClientOriginalName();
        }
        $category->save();
        return redirect()->back()->with('success', 'Create category successfully!');;
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
        $category= ProductType::find($id);
        return view('admin.categories.edit ',compact('category'));
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
        ],[
            'name.min' => 'The category name must be at least 5 characters.',
            'name.max' => 'The category name may not be greater than 35 characters.',
            'name.required' => ' The category name field is required.',
            'description.required' =>"The category description field is required.",
            'description.min' =>"The category description must be at least 15 characters.",
        ]);
    $cate = ProductType::find($id);
    $data = $request->all();

    $file = $request->file('image');
        if ($file == null) {
           $data['image'] = $request->image;
        }else{
            $data['image']=$file->getClientOriginalName();
            $file->move(base_path('public/source/image/product/'), $file->getClientOriginalName());
        }
    $cate->update($data);
    return redirect()->back()->with('success', 'Update category successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category= ProductType::find($id);
        $category->delete();
        return redirect()->back()->with('success', 'Delete category successfully!');;
    }
}
