<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function about_us(){
        return view('about-us');
    }
    
    public function contact_us(){
        return view('contact-us');
    }

}
