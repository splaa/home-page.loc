<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function __invoke()
    {
        $posts = Post::latest()->with('user')->paginate(6);

        return Inertia::render('Home', [ 'posts' => $posts]);
    }
}
