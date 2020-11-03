<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('created_at','asc')
                      ->whereStatus('PUBLISHED')               
                      ->take(6)
                      ->get();
        return view('blog.index', ['myposts' => $posts]);
    }

    public function blog()
    {
        $posts = POST::orderBy('created_at','asc')
        ->whereStatus('PUBLISHED')
        ->paginate(3);
        return view('blog.blog', ['myposts' => $posts]);
    }

}
