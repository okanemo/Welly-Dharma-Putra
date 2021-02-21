<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class AboutController extends Controller
{
    public function AboutPage(){
        $data=Profile::get();
        // dd($data);
        return view('about',compact('data'));
    }
}
