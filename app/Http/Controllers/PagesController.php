<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function root(){
        return view('pages.root');
    }
    public function about(){
        return view('pages.about');
    }
    public function international_trade(){
        return view('pages.international_trade');
    }
}
