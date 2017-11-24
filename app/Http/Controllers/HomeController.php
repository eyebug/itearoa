<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function about()
    {
        return view('about');
    }

    public function contact(){
        return view('contact');
    }

    public function product(){
        return view('product');
    }

    public function detail(){
        return view('detail');
    }

    public function news(){
        return view('news');
    }

    public function shanshuiDownload() {
        return view('shanshui.download');
    }
}
