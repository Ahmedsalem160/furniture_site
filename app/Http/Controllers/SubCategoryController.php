<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubCategoryReq;
use App\Models\SubCategory;
use App\Models\Category;
use App\Traits\ImgTrait;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    use ImgTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $category = Category::findOrFail($id);
        $subCategories=$category->subCategories;
        return view('admin.subcategory.show',compact('subCategories','id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        return view('admin.subcategory.create',compact('id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SubCategoryReq $request,$id)
    {
        $img_name = $this->saveImg($request->photo,'images/sub-category');
        $subCategory = SubCategory::create([
            'name'=>$request->name,
            'description'=>$request->description,
            'category_id'=>$id,
            'photo'=>$img_name,
        ]);
        return redirect()->route('sub-category-show',[$id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function show(SubCategory $subCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subCategory = SubCategory::findOrFail($id);
        return view('admin.subcategory.edit',compact('subCategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function update(SubCategoryReq $request, $id)
    {
        $subCategory =SubCategory::findOrFail($id);
        $img_name = $this->saveImg($request->photo,'images/sub-category');
        $subCategory ->update([
            'name'=>$request->name,
            'description'=>$request->description,
            'photo'=>$img_name,
        ]);
        return redirect()->route('sub-category-edit',[$id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subCategory =SubCategory::findOrFail($id);
        $subCategory->delete();
        return redirect()->back();
    }
}
