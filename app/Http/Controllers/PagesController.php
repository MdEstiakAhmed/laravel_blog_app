<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        if (auth()->user()) {
            $status = true;
        }
        else{
            $status = false;
        }
        
        $title = 'welcome to LaravelBlogApp';
        return view('pages.index', compact('title', 'status'));
    }

    public function about(){
        $title = 'about';
        return view('pages.about')->with('title', $title);
    }

    public function services(){
        $data = array(
            'title' => 'services',
            'services' => ['web design', 'web app development']
        );
        return view('pages.services')->with($data);
    }
}
