<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class PagesController extends Controller
{
    public function index()
    {
        $title = 'Home Page';
        return Inertia::render('Home', [
            'title' => $title
        ]);
    }

    public function about()
    {
        $title = 'About Page';
        return Inertia::render('About', [
            'title' => $title
        ]);
    }

}
