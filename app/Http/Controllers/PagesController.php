<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PagesController extends Controller
{

    public function root(Request $request){
        //$language = header_language();
        // $routerName = $request->route()->getPrefix();
        // $routerPrefix = route_prefix();
        // Log::info($routerPrefix);
        // Log::info($language);
        // switch ($routerPrefix){
        //     case 'cn':
        //         return view('pages.root');
        //     case 'jp':
        //         return view('pages.root');
        //     default :
        //     return view('pages.root');
        // }
        // if(session()->has('locale')) {
        //     return view('pages.root');
        // }
        // $locale = 'ja';
        // session()->put('locale', $locale);
        return view('pages.root');
    }
    public function about(){
        return view('pages.about');
    }
    public function international_trade(){
        return view('pages.international_trade');
    }
}
