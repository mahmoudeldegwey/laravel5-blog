<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Category;
use DB;
use App\Post;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    /// Front End View
    public function index()
    {
        //$categories = Category::take(4)->get();
        //$categoriesAll = Category::all();        

        // Mobile
        $mobile = Category::where('name','mobile')->first();
        $lastPost = $mobile->posts->sortByDesc('id')->take(6);
        // Tablet
        $tablet = Category::where('name','tablet')->first();
        $lasttablet = $tablet->posts->sortByDesc('id')->take(2);
        // Design
        $design = Category::where('name','design')->first();
        $lastdesign = $design->posts->sortByDesc('id')->take(4);
        // Camera
        $camera = Category::where('name','Camera')->first();
        $lastcamera = $camera->posts->sortByDesc('id')->take(3);
        return view('front.index',compact('mobile','lastPost','tablet','lasttablet','design','lastdesign','camera','lastcamera','categories','categoriesAll'));
    }




    public function post($id){
        //$categoriesAll = Category::all();        
        $post = Post::findOrFail($id);
        $comments = $post->comments()->whereIsActive(1)->get();
        $relatedposts = Post::where('category_id',$post->category_id)->orderBy('id','desc')->take(4)->get();
        return view('front.post',compact('post','comments','relatedposts','categories','categoriesAll'));
    }

    public function category($id){
       // $categories = Category::take(4)->get();
        //$categoriesAll = Category::all();        
        $category = Category::findOrFail($id);
        $posts = $category->posts()->paginate(3); 
        return view('front.category',compact('category','posts','categories','categoriesAll'));
    }

    public function menu(){
        //$categories = Category::take(4)->get();
        //return view('layouts.home')->with('categories',$categories);
//return View::make("layouts/home", compact('categories'));
        //return View::make('/layouts/home')->with(compact('categories'));
    }
}
