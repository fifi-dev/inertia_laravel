<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class BlogController extends Controller
{
    public function index() {
        return Inertia::render('Blog', [
            "posts" => 
            [
                "name" => "Mon article",
                "slug" => "mon-article",
                "contenet" => "lorem ipsum",
                "published" => 0
            ]
        ]);
    }

}
