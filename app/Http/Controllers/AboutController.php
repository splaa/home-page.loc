<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class AboutController extends Controller
{
    public function __invoke()
    {
        $message = 'About, I am SplX Company!!!';

        return Inertia::render('About', ['about_us' => $message]);
    }
}
