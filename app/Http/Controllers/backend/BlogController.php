<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{
    Category,
    Tag,
    Blog
};
use Illuminate\Support\Str;
class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::orderBy('id', 'DESC')->get();
        $categories = Category::orderBy('id', 'DESC')->get();
        $tags = Tag::orderBy('id', 'DESC')->get();
        return view('admin.blogs.index', compact(['blogs','categories','tags']));
    }
    public function store(Request $request)
    {
        $image_path = "";
        if($request->hasFile('image')){
            $image_path = $request->file('image')->store('uploads/blogs', 'public');
        }
        $status = $request->status ? $request->status : "active";
        $category_id = $request->category_id ? $request->category_id : null;
        $tag_id = $request->tag_id ? $request->tag_id : null;
        Blog::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'category_id' => $category_id ? $category_id : null,
            'tag_id' => $tag_id ? $tag_id : null,
            'image' => $image_path,
            'content' => $request->content,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'meta_keywords' => $request->meta_keywords,
            'status' => $status,
            'user_id' => $request->user_id ? $request->user_id : null,

        ]);
        $notification = array(
            'message' => 'Blog created successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function edit($slug)
    {
        return $slug;
    }
    public function update(Request $request, $slug)
    {
        $blog = Blog::where('slug', $slug)->first();
        $image_path = "";
        if($request->hasFile('image')){
            $image_path = $request->file('image')->store('uploads/blogs', 'public');
        }
        $status = $request->status ? $request->status : "active";
        $category_id = $request->category_id ? $request->category_id : null;
        $tag_id = $request->tag_id ? $request->tag_id : null;
        $blog->update([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'category_id' => $category_id ? $category_id : null,
            'tag_id' => $tag_id ? $tag_id : null,
            'image' => $image_path,
            'content' => $request->content,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'meta_keywords' => $request->meta_keywords,
            'status' => $status,
            'user_id' => $request->user_id ? $request->user_id : null,

        ]);
        $notification = array(
            'message' => 'Blog Updated successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function delete($slug)
    {
        return $slug;
    }


    // Frontend

    public function blogPageShow() {
        $blogs = Blog::orderBy('id', 'DESC')->with(['category','user'])->paginate(12);
        return view('frontend.blog', compact('blogs'));
    }

    // Single Blog

    public function singleBlogPageShow($slug) {
        $blog = Blog::where('slug', $slug)->with(['category','user'])->first();
        return view('frontend.single-blog', compact('blog'));
    }
}
