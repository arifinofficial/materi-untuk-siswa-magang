<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index(){
        return view('blog.index');
    }

    public function create(){
        return view('blog.create');
    }

    public function store(Request $reqeust){
        Blog::create([
            'title' => $reqeust->title,
            'content' => $reqeust->content
        ]);

        return view('blog.index');
    }
}
