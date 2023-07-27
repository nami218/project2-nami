<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductCategoryRequest;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productCategories = ProductCategory::select()->paginate(config('myconfig.item_per_page'));
        return view('admin.pages.productCategories.list',  compact('productCategories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.productCategories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductCategoryRequest $request)
    {
        $productCategory = ProductCategory::create([
            'name'=> $request->name,
            'slug'=> $request->slug,
            'status'=> $request->status
        ]);
        $message = $productCategory ? 'Tạo danh mục sản phẩm thành công' : 'Tạo danh mục sản phẩm thất bại';
        return redirect()->route('admin.product-category.index')->with('message', $message);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $productCategory = ProductCategory::find($id);
        $check = $productCategory->delete();

        $message = $check ? 'Xóa thành công' : 'Xóa thất bại';
        return redirect()->route('admin.product-category.index')->with('message', $message);
    }

    public function getSlug(Request $request){
        $slug = Str::slug($request->name);
        return response()->json(['slug'=> $slug]);

    }
}
