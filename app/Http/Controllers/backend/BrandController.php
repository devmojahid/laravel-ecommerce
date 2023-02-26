<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use Illuminate\Support\Str;
class BrandController extends Controller
{
    public function index() {
        $brands = Brand::orderBy("id","desc")->get();
        return view("admin.products.Brand.index",compact("brands"));
    }

    public function store(Request $request) {
        $logo_path = "";
        if($request->hasFile("logo")) {
            $logo_path = $request->file("logo")->store("uploads/brands","public");
        }
        $status = $request->status == "active" ? "active" : "inactive";
        Brand::create([
            "name" => $request->name,
            "slug" => Str::slug($request->name),
            "logo" => $logo_path,
            "email" => $request->email,
            "city" => $request->city,
            "status" => $status,
        ]);
        return back()->with("success","Brand Added Successfully");
    }

    public function edit($slug) {
        $brand = Brand::where("slug",$slug)->first();
        return view("admin.products.Brand.edit",compact("brand"));
    }

    public function update(Request $request,$slug) {
        $brand = Brand::where("slug",$slug)->first();
        $logo_path = "";
        if($request->hasFile("logo")) {
            $logo_path = $request->file("logo")->store("uploads/brands","public");
        }
        $status = $request->status == "active" ? "active" : "inactive";
        $brand->update([
            "name" => $request->name,
            "slug" => Str::slug($request->name),
            "logo" => $logo_path,
            "email" => $request->email,
            "city" => $request->city,
            "status" => $status,
        ]);
        return redirect()->route("brand.index")->with("success","Brand Updated Successfully");
    }

    public function delete($slug) {
        $brand = Brand::where("slug",$slug)->first();
        $brand->delete();
        return back()->with("success","Brand Deleted Successfully");
    }

}
