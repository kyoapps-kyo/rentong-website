<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Topic;
use App\Models\InternationalTrade;
use App\Models\HistoryImg;

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
        $topics = Topic::all();
        return view('pages.root', compact('topics'));
    }
    public function sell(){
        return view('pages.webinfo');
    }
    public function rent(){
        return view('pages.webinfo');
    }
    public function projects(){
        return view('pages.webinfo');
    }
    public function owner(){
        return view('pages.webinfo');
    }
    public function about(){
        // $history_years = array_unique(HistoryImg::where('year', '>', '2011')->orderBy('year', 'DESC')->pluck('year')->toArray());
        $history_imgs = HistoryImg::where('year', '>', '2011')->orderBy('year', 'DESC')->get();
        $history_years = array_unique($history_imgs->pluck('year')->toArray());
        return view('pages.about', compact('history_years','history_imgs'));
    }
    public function international_trade(){
        $trades = InternationalTrade::all();
        return view('pages.international_trade', compact('trades'));
    }
}
