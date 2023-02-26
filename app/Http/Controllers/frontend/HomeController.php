<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{
    Category,
    Brand,
    Color,
    Product,
};

class HomeController extends Controller
{
    // Home Page
    public function HomePageShow() {
        $featuredcategories =Category::with(['products'])->orderBy("id","desc")->take(20)->get();
        return view("frontend.home",compact('featuredcategories'));
    }

    // Shop Page
    public function ShopPageShow() {
        $allproducts = Product::orderBy("id","desc")->paginate(8);
        return view("frontend.shop",compact('allproducts'));
    }

    // Categories Products
    public function categoriesProducts($slug) {
        $category = Category::where("slug",$slug)->first();
        $allproducts = $category->products()->paginate(8);
        // if($allproducts->count() == 0) {
        //     return redirect()->route("shop-page")->with("error","No Products Found!");
        // }
        return view("frontend.shop",compact('allproducts'));
    }

    // Shop Page
    public function singleProductPage($slug) {
        $singleproduct = Product::where("slug",$slug)->first();
        return view("frontend.single-product",compact('singleproduct'));
    }

    // Shop Page
    public function wishlistPage() {
        return view("frontend.wishlist");
    }

}
