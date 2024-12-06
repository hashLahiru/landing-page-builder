<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ProductModel;
use Illuminate\Http\Request;

class BlogPostController extends Controller
{
    public function index()
    {
        $BlogPostData = BlogPostModel::first();

        if (!$BlogPostData) {
            abort(500, 'Blog post data not found in the database.');
        }

        return view('home', compact('BlogPostData'));
    }
}
