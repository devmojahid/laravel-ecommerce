<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{
    Category,
    Brand,
    Color,
    Product
};
use Illuminate\Support\Str;
class ProductController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('id', 'DESC')->get();
        return view('admin.products.product.index', compact('products'));
    }
    public function create()
    {
        $categories = Category::orderBy('id', 'DESC')->get();
        $brands = Brand::orderBy('id', 'DESC')->get();
        $colors = Color::orderBy('id', 'DESC')->get();
        return view('admin.products.product.create', compact('categories', 'brands', 'colors'));
    }
    public function store(Request $request)
    {
        // \dd($request->all());

        $gallary = array();
        if ($request->hasFile('photos')) {
            foreach ($request->photos as $photo) {
                $image = $photo;
                $image_new_name = time() . $image->getClientOriginalName();
                $image->move('uploads/products', $image_new_name);
                $gallary[] = 'uploads/products/' . $image_new_name;
            }
        }

        $thumbnail = "";
        if($request->hasFile('thumbnail')){
            $thumbnail = $request->file('thumbnail')->store('uploads/products','public');
        }

        Product::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'photos' => implode('|', $gallary),
            'thumbnail' => $thumbnail,
            'description' => $request->description,
            'category_id' => $request->category_id,
            'brand_id' => $request->brand_id,
            'color_id' => $request->color_id,
            'price' => $request->price,
            'discount' => $request->discount,
            'discount_type' => $request->discount_type,
            'discount_start' => $request->discount_start,
            'discount_end' => $request->discount_end,
            'sku' => $request->sku,
            'barcode' => $request->barcode,
            'stock' => $request->stock,
            'stock_alert' => $request->stock_alert,
            'weight' => $request->weight,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'meta_keywords' => $request->meta_keywords,
            'featured' => $request->featured ? $request->featured : "no",
            'trending' => $request->trending ? $request->trending : "no",
            'best_rated' => $request->best_rated ? $request->best_rated : "no",
            'hot_new' => $request->hot_new ? $request->hot_new : "no",
            'buyone_getone' => $request->buyone_getone ? $request->buyone_getone : "no",
            'special_offer' => $request->special_offer ? $request->special_offer : "no",
            'special_deal' => $request->special_deal ? $request->special_deal : "no",
            'vat' => $request->vat ? $request->vat : 0,
            'tax' => $request->tax ? $request->tax : 0,
            'free_shipping' => $request->free_shipping ? $request->free_shipping : "no",
            'product_video_link' => $request->product_video_link ? $request->product_video_link : "",
            'product_audio_link' => $request->product_audio_link ? $request->product_audio_link : "",
            'product_file_link' => $request->product_file_link ? $request->product_file_link : "",
            'status' => $request->status ? $request->status : "active",
        ]);
        return redirect()->route("product.index")->with("success", "Product Created Successfully");
    }
    public function edit($slug)
    {
        $categories = Category::orderBy('id', 'DESC')->get();
        $brands = Brand::orderBy('id', 'DESC')->get();
        $colors = Color::orderBy('id', 'DESC')->get();
        $product = Product::where('slug', $slug)->first();
        return view("admin.products.product.edit", compact(['product', 'categories', 'brands', 'colors']));
    }
    public function update(Request $request, $slug)
    {
        $product = Product::where('slug', $slug)->first();
        if($product){
            $gallary = array();
            if ($request->hasFile('photos')) {
                foreach ($request->photos as $photo) {
                    $image = $photo;
                    $image_new_name = time() . $image->getClientOriginalName();
                    $image->move('uploads/products', $image_new_name);
                    $gallary[] = 'uploads/products/' . $image_new_name;
                }
            }

            $thumbnail = "";
            if($request->hasFile('thumbnail')){
                $thumbnail = $request->file('thumbnail')->store('uploads/products','public');
            }

            $product->update([
                'name' => $request->name,
                'slug' => Str::slug($request->name),
                'photos' => implode('|', $gallary),
                'thumbnail' => $thumbnail,
                'description' => $request->description,
                'category_id' => $request->category_id,
                'brand_id' => $request->brand_id,
                'color_id' => $request->color_id,
                'price' => $request->price,
                'discount' => $request->discount,
                'discount_type' => $request->discount_type,
                'discount_start' => $request->discount_start,
                'discount_end' => $request->discount_end,
                'sku' => $request->sku,
                'barcode' => $request->barcode,
                'stock' => $request->stock,
                'stock_alert' => $request->stock_alert,
                'weight' => $request->weight,
                'meta_title' => $request->meta_title,
                'meta_description' => $request->meta_description,
                'meta_keywords' => $request->meta_keywords,
                'featured' => $request->featured ? $request->featured : "no",
                'trending' => $request->trending ? $request->trending : "no",
                'best_rated' => $request->best_rated ? $request->best_rated : "no",
                'hot_new' => $request->hot_new ? $request->hot_new : "no",
                'buyone_getone' => $request->buyone_getone ? $request->buyone_getone : "no",
                'special_offer' => $request->special_offer ? $request->special_offer : "no",
                'special_deal' => $request->special_deal ? $request->special_deal : "no",
                'vat' => $request->vat ? $request->vat : 0,
                'tax' => $request->tax ? $request->tax : 0,
                'free_shipping' => $request->free_shipping ? $request->free_shipping : "no",
                'product_video_link' => $request->product_video_link ? $request->product_video_link : "",
                'product_audio_link' => $request->product_audio_link ? $request->product_audio_link : "",
                'product_file_link' => $request->product_file_link ? $request->product_file_link : "",
                'status' => $request->status ? $request->status : "active",
            ]);
            return redirect()->route("product.index")->with("success", "Product Updated Successfully");

        }else{
            return redirect()->back()->with("error", "Product Not Found");
        }
    }
    public function delete($slug)
    {
        $product = Product::where('slug', $slug)->first();
        $product->delete();
        return redirect()->back()->with("success", "Product Deleted Successfully");
    }
}
