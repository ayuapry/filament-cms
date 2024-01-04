<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $blogs = Blog::where("is_publish", true)->get();
        return view("welcome", ["blogs" => $blogs]);
    }

    public function show($id)
    {
        $blog = Blog::findOrFail($id);
        return view("detail", ["blog" => $blog]);
    }
}