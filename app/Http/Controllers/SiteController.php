<?php

namespace App\Http\Controllers;

use App\Models\Post, App\Models\Category, App\Contact;
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

    public function blog($id = null)
    {

        if($id){
            $posts = Post::orderBy('created_at','asc')
                            ->whereStatus('PUBLISHED')               
                            ->whereCategoryId($id)
                            ->paginate(3); 
            }else{
                $posts = POST::orderBy('created_at','asc')
                            ->whereStatus('PUBLISHED')
                            ->paginate(3);        
            }

        /*$posts = POST::orderBy('created_at','asc')
        ->whereStatus('PUBLISHED')
        ->paginate(3);*/
        $categories = Category::all();
        return view('blog.blog', ['id'=> $id, 'myposts' => $posts, 'mycategories' => $categories]);
    }

    public function show($slug){
        $post = Post::whereSlug($slug)->first();
        $post->nb_visite++;
        $post->save();

        return view('blog.show', ['post' => $post]);
    }

    public function store(Request $request){
        //return $request->all();
        $contact = new Contact();

        $contact->objet = $request->input('object');
        $contact->email = $request->input('email');
        $contact->message = $request->input('message');

        $contact->save();

        return redirect('/contact')->with('success','This contact is saved');
        
    }

}
