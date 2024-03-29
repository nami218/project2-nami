<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::select()->paginate(config('myconfig.item_per_page'));
        return view('admin.pages.products.list', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $productCategories = ProductCategory::where('status',1)->get();
        return view('admin.pages.products.create')->with('productCategories', $productCategories);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        if($request->hasFile('image_url')){ // kiểm tra xem có file up lên ko
            $originName= $request->file('image_url')->getClientOriginalName();//lấy tên cũ của ảnh
            $fileName= pathinfo($originName, PATHINFO_FILENAME); // gắn thêm đường dẫn
            $extension = $request->file('image_url')->getClientOriginalExtension();// .jpg
            $fileName = $fileName.'_'.time().'.'.$extension; // thêm time để nó là unique
            $request->file('image_url')->move(public_path('backend/images/products'), $fileName); // di chuyển đến folder

        }
        $product = Product::create([
            'product_category_id' =>  $request->product_category_id,
            'name' => $request->name,
            'sku' => $request->sku,
            'slug' => $request->slug,
            'price' => $request->price,
            'discount_price' => $request->discount_price,
            'short_description' => $request->short_description,
            'description' => $request->description,
            'specification' => $request->specification,
            'qty' => $request->qty,
            'shipping' => $request->shipping,
            'weight' => $request->weight,
            'image_url' => $fileName,
            'status' => $request->status,
        ]);

        $message = $product ? 'success' : 'failed';
        return redirect()->route('admin.product.index')->with('message', $message);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::where('id',$id)->get();
        $productCategories = ProductCategory::where('status',1)->get();
        return view('admin.pages.products.detail',['product' => $product,'productCategories' => $productCategories]);
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
    public function update(UpdateProductRequest $request, Product $product)
    {
        $fileName = $product->image_url; // nếu không có ảnh update
        if($request->hasFile('image_url')){ // kiểm tra xem có file up lên ko
            $originName= $request->file('image_url')->getClientOriginalName();//lấy tên cũ của ảnh
            $fileName= pathinfo($originName, PATHINFO_FILENAME); // gắn thêm đường dẫn
            $extension = $request->file('image_url')->getClientOriginalExtension();// .jpg
            $fileName = $fileName.'_'.time().'.'.$extension; // thêm time để nó là unique
            $request->file('image_url')->move(public_path('backend/images'), $fileName); // di chuyển đến folder

            // remove old images
            if(!is_null($product->image_url) && file_exists("backend/images/".$product->image_url)){
            unlink("backend/images/".$product->image_url);
        }
        }

        // $fileName = $request->image_url;
        // if($request->hasFile('image_url')){
        //     $path = $request->file('image_url')->store('public/images');
        //     return response()->json(['success' => true, 'path' => $path]);
        // } else{
        //     return response()->json(['success' => false, 'message' => 'No file uploaded.']);
        // }

        $check = $product->update([
            'product_category_id' =>  $request->product_category_id,
            'name' => $request->name,
            'sku' => $request->sku,
            'slug' => $request->slug,
            'price' => $request->price,
            'discount_price' => $request->discount_price,
            'short_description' => $request->short_description,
            'description' => $request->description,
            'specification' => $request->specification,
            'qty' => $request->qty,
            'shipping' => $request->shipping,
            'weight' => $request->weight,
            'image_url' => $fileName,
            'status' => $request->status
        ]);

        $message = $check ? 'success' : 'failed';
        return redirect()->route('admin.product.index')->with('message', $message);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $check = $product->delete();

        $message = $check ? 'success' : 'failed';
        return redirect()->route('admin.product.index')->with('message', $message);
    }

    public function restore(string $product){
        $product = Product::withTrashed()->find($product);

        $product->restore();
        return redirect()->route('admin.product.index')->with('message', 'Khôi phục thành công');
    }

    public function getSlug(Request $request){
        $slug = Str::slug($request->name);
        return response()->json(['slug'=> $slug]);
    }

    public function copy(string $id)
    {
        //
    }

    public function uploadImage(Request $request){
        if($request->hasFile('upload')){
            $originName= $request->file('upload')->getClientOriginalName();
            $fileName= pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName.'_'.time().'.'.$extension;

            $request->file('upload')->move(public_path('backend/images'), $fileName);

            $url = asset('backend/images/'.$fileName);
            return response()->json(['fileName' => $fileName, 'uploaded' => 1, 'url' => $url]);
        }
    }


}
