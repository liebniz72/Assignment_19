<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('pages.home');
    }


    public function blogDetail($id)
    {

        $blog = Blog::find($id);

        // Pass the blog post to the view
        return view('pages.singleBlog', ['blog' => $blog]);
    }

    /**
     * @return Collection
     */
    public function blogAjax(Request $request)
    {
        return Blog::get();
    }
}
