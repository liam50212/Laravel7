<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    //
    public function index()
    {
        return view('news.index2');
    }

    public function detail()
    {
        return view('news.index3');
    }

}
