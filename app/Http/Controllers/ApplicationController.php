<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\blog;

class ApplicationController extends Controller
{


    public function blogList(){
        $blogData=blog::all();
        return view('frontend.blog-list',compact('blogData'));

    }
}
