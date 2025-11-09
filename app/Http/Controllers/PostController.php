<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    function showHomePage() {
        $posts = Post::all();
        return view('pages.home', compact('posts'));
    }

    function showMultimediaPage() {
        $posts = Post::where('category', 'Interactive Multimedia')->get();
        return view('pages.multimedia', compact('posts'));
    }

    function showSoftwareEngineeringPage() {
        $posts = Post::where('category', 'Software Engineering')->get();
        return view('pages.software_engineer', compact('posts'));
    }

    function showPostDetail($id) {
        $post = Post::findOrFail($id);
        return view('pages.detail_post', compact('post'));
    }   

    function showWritersPage() {
        $posts = Post::all()->groupBy('author');
        return view('pages.writers', compact('posts'));
    }

    function showPostByAuthor($authorName) {
        $posts = Post::where('author', $authorName)->get();
        return view('pages.author_post', compact('posts', 'authorName'));
    }
}
