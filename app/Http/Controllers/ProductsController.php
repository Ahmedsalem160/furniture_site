<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductReq;
use App\Models\Category;
use App\Models\Products;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use App\Traits\ImgTrait;

class ProductsController extends Controller
{
    use ImgTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $subCategory = SubCategory::findOrFail($id);
        $products = $subCategory->products;
        return view('admin.product.show',compact(['products','id']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        return view('admin.product.create',compact('id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductReq $request,$id)
    {
        $subcategory = SubCategory::findOrFail($id);
        $category_id = $subcategory->category['id'];
        $photo_name = $this->saveImg($request->photo,'images/products');

        $product = Products::create([
            'name'=>$request->name,
            'description'=>$request->description,
            'purchase_price'=>$request->purchase_price,
            'sale_price'=>$request->sale_price,
            'stock'=>$request->stock,
            'category_id'=>$category_id,
            'subCategory_id'=>$id,
            'image'=>$photo_name,
        ]);
        return redirect()->route('product-show',[$id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product =Products::findOrFail($id);
        return view('admin.product.showDetail',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product =Products::findOrFail($id);
        return view('admin.product.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(ProductReq $request, $id)
    {
        $img_name = $this->saveImg($request->photo, 'images/products');
        $product = Products::findOrFail($id);
        $product ->update([
            'name'=>$request->name,
            'description'=>$request->description,
            'purchase_price'=>$request->purchase_price,
            'sale_price'=>$request->sale_price,
            'stock'=>$request->stock,
            'image'=>$img_name,
        ]);
        //$product->update($request->all());

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product =Products::findOrFail($id);
        $product->delete();
        return redirect()->back();
    }
}
