<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ad;
class AdController extends Controller
{
    public function index()
    {
        $ads = Ad::orderBy('id', 'desc')->get();
        return view('admin.ads.index', compact('ads'));
    }

    public function store(Request $request)
    {
        $image_path = "";
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_path = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/ads'), $image_path);
        }
        Ad::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $image_path,
            'url' => $request->url,
            'link_text' => $request->link_text,
            'background_color' => $request->background_color,
        ]);

        return back()->with('success', 'Ad added successfully');
    }

    public function edit($id)
    {
        $ad = Ad::where('id', $id)->first();
        return view('admin.ads.edit', compact('ad'));
    }

    public function update(Request $request, $id)
    {
        $ad = Ad::where('id', $id)->first();
        $image_path = $ad->image;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_path = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/ads'), $image_path);
        }
        $ad->update([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $image_path,
            'url' => $request->url,
            'link_text' => $request->link_text,
            'background_color' => $request->background_color,
        ]);
        return redirect()->route('ads.index')->with('success', 'Ad updated successfully');
    }

    public function destroy($id)
    {
        $ad = Ad::where('id', $id)->first();
        $ad->delete();
        return back()->with('success', 'Ad deleted successfully');
    }
}
