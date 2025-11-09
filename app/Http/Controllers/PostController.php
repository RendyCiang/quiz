<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Writer;
use Illuminate\Http\Request;

class PostController extends Controller
{
    function showHomePage() {
        $posts = Post::with('writer')->get();
        return view('pages.home', compact('posts'));
    }

    function showMultimediaPage() {
        $posts = Post::with('writer')->where('category', 'Interactive Multimedia')->get();
        return view('pages.multimedia', compact('posts'));
    }

    function showSoftwareEngineeringPage() {
        // Load writer data along with posts
        $posts = Post::with('writer')->where('category', 'Software Engineering')->get();
        return view('pages.software_engineer', compact('posts'));
    }

    function showPostDetail($id) {
        $post = Post::with('writer')->findOrFail($id);
        return view('pages.detail_post', compact('post'));
    }   

    function showWritersPage() {
        $writers = Writer::withCount('posts')->get();
        return view('pages.writers', compact('writers'));
    }

    function showPostByAuthor($authorName) {
        $writer = Writer::where('name', $authorName)->firstOrFail();
        $posts = Post::with('writer')->where('writer_id', $writer->id)->get();
        $authorName = $writer->name; 
        return view('pages.author_post', compact('posts', 'authorName'));
    }

    function showPopularPage() {
        $posts = Post::with('writer')->paginate(3);
        return view('pages.popular_page', compact('posts'));
    }
}
