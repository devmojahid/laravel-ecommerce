<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Str;
class CategoryController extends Controller
{
    public function index(){
        $allcategories = Category::orderBy("id","DESC")->get();
        return view("admin.products.category-index",compact("allcategories"));
    }

    public function store(Request $request){
        $image_path = "";
        if(request()->hasFile("photo")){
            $image_path = request()->file("photo")->store("uploads/categories","public");
        }
        $icon_path = "";
        if(request()->hasFile("icon")){
            $icon_path = request()->file("icon")->store("uploads/categories","public");
        }

        $is_parent = 1;
        if($request->is_parent == null){
            $is_parent = 0;
        }

        Category::create([
            "title" => $request->title,
            "slug" => Str::slug($request->title),
            "photo" => $image_path,
            "icon" => $icon_path,
            "is_parent" => $is_parent,
            "summary" => $request->summary,
            "parent_id" => $request->parent_id,
        ]);

        return back()->with("success","Category created successfully");
    }

    public function edit($slug){
        $category = Category::where("slug",$slug)->first();
        $allcategories = Category::orderBy("id","DESC")->get();
        return view("admin.products.category-update",compact("category","allcategories"));
    }

    public function update(Request $request,$slug){
        $category = Category::where("slug",$slug)->first();
        $image_path = $category->photo;
        if(request()->hasFile("photo")){
            $image_path = request()->file("photo")->store("uploads/categories","public");
        }
        $icon_path = $category->icon;
        if(request()->hasFile("icon")){
            $icon_path = request()->file("icon")->store("uploads/categories","public");
        }

        $is_parent = 1;
        if($request->is_parent == null){
            $is_parent = 0;
        }

        $category->update([
            "title" => $request->title,
            "slug" => Str::slug($request->title),
            "photo" => $image_path,
            "icon" => $icon_path,
            "is_parent" => $is_parent,
            "summary" => $request->summary,
            "parent_id" => $request->parent_id,
        ]);

        return redirect()->route("category.index")->with("success","Category updated successfully");
    }
}

