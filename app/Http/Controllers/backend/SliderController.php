<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;

class SliderController extends Controller
{
    public function index()
    {
        $sliders = Slider::orderBy('id', 'desc')->get();
        return view('admin.slider.index', compact('sliders'));
    }

    public function store(Request $request)
    {
        $image_path = "";
        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('uploads/slider', 'public');
        }
        Slider::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $image_path,
            'link' => $request->link,
            'link_text' => $request->link_text,
            'background_color' => $request->background_color,
        ]);

        return back()->with('success', 'Slider added successfully');
    }

    public function edit($id)
    {
        $slider = Slider::where('id', $id)->first();
        return view('admin.slider.edit', compact('slider'));
    }

    public function update(Request $request, $id)
    {
        $slider = Slider::where('id', $id)->first();
        $image_path = $slider->image;
        if ($request->hasFile('image')) {
            $image_path = $request->file('image')->store('uploads/slider', 'public');
        }
        $slider->update([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $image_path,
            'link' => $request->link,
            'link_text' => $request->link_text,
            'background_color' => $request->background_color,
        ]);
        return redirect()->route('slider.index')->with('success', 'Slider updated successfully');

    }

    public function destroy($id)
    {
        $slider = Slider::where('id', $id)->first();
        $slider->delete();
        return back()->with('success', 'Slider deleted successfully');
    }
}
