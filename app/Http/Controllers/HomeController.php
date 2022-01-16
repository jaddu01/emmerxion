<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home');
    }
    public function techServices(){
        return view('tech-services');
    }
    public function digitalSolutions(){
        return view('digital-solutions');
    }
    public function aboutUs(){
        return view('about-us');
    }
    public function contactUs(){
        return view('contact-us');
    }
}
