<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;
use App\Models\User;
use App\Models\Navbar;
use App\Models\Slider;
use App\Models\About;
use App\Models\Category;
use App\Models\Post;
use App\Models\Contact;

class HomeController extends Controller
{
    public function index()
    {
        $nav = Navbar::find(1);
        $sliders = Slider::all();
        $about = About::find(1);
        $posts = Post::orderBy('id', 'desc')->take(3)->get();
        $contact = Contact::find(1);

        $postId = array();
        $postRows = Post::all();
        foreach ($postRows as $postRow) {
            $post = $postRow->id;
            array_push($postId, $post);
        }

        $randomId = Arr::random($postId, 6);

        $post_1 = Post::find($randomId[1]);
        $post_2 = Post::find($randomId[1]);
        $post_3 = Post::find($randomId[2]);
        $post_4 = Post::find($randomId[3]);
        $post_5 = Post::find($randomId[4]);
        $post_6 = Post::find($randomId[5]);
        return view('home.index', compact('nav', 'sliders', 'about', 'posts', 'contact', 'post_1', 'post_2', 'post_3', 'post_4', 'post_5', 'post_6'));
    }
    public function redirect()
    {
        $allPosts = DB::table('posts')->count();
        return view('admin.index', compact('allPosts'));
    }
    public function about()
    {
        $nav = Navbar::find(1);
        $ins = Contact::find(1);
        $data = About::find(1);
        return view('home.about', compact('data', 'ins', 'nav'));
    }
    public function contact()
    {
        $nav = Navbar::find(1);
        $contact = Contact::find(1);
        return view('home.contact', compact('contact', 'nav'));
    }
    public function posts()
    {
        $nav = Navbar::find(1);
        $posts = Post::paginate(12);
        $categories = Category::all();
        return view('home.posts', compact('posts', 'nav', 'categories'));
    }
    public function post($id)
    {
        $nav = Navbar::find(1);
        $post = Post::find($id);
        return view('home.post', compact('post', 'nav'));
    }
    public function category($id)
    {
        $nav = Navbar::find(1);
        $category_id = $id;
        $categories = Category::all();
        $postCtg = DB::table('posts')->where('category_id', $category_id)->paginate(3);
        return view('home.category', compact('postCtg', 'nav', 'categories'));
    }
}
