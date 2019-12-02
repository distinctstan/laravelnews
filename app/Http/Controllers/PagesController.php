<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index () {
        $title = 'Home page';
        return view('pages.index')->with('title', $title);
    }

    public function about () {
        $title = 'About us page';
        return view('pages.about')->with('title', $title);
    }

    public function services () {
        $data = [
            'title' => 'Services page',
            'services' => ['Web', 'Mobile', 'Graphics']
        ];
        return view('pages.services')->with($data);
    }

}
