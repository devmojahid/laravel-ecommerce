<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Color;
use Illuminate\Support\Str;
class ColorController extends Controller
{
    public function index() {
        $colors = Color::orderBy("id","desc")->get();
        return view("admin.products.color.index",compact("colors"));
    }

    public function store(Request $request) {
        // $status = $request->status == "active" ? "active" : "inactive";
        Color::create([
            "name" => $request->name,
            "slug" => Str::slug($request->name),
            "code" => $request->code,
            'summary' => $request->summary,
            "status" => $request->status,
        ]);
        return back()->with("success","Brand Added Successfully");
    }
}
