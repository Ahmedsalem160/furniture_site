<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Traits\ImgTrait;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryReq;

class CategoryController extends Controller
{
    use ImgTrait;

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories =Category::all();
        return view('admin.category.show',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryReq $request)
    {
        $img_name = $this->saveImg($request->photo,'images/category');
        $category = new Category();
        $category->name =$request->input('name');
        $category->description =$request->input('description');
        $category->photo =$img_name;
        $category->save();
        return redirect()->route('category-show');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryReq $request, $id)
    {
        $img_name = $this->saveImg($request->photo,'images/category');

        $category =Category::findOrFail($id);
        $category->update([
            'name'=>$request->name,
            'description'=>$request->description,
            'photo'=>$img_name,
        ]);

        return redirect()->route('category-edit',[$id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category =Category::findOrFail($id);
        $category->delete();
        return redirect()->route('category-show');
    }
}
