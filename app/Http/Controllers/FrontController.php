<?php

namespace App\Http\Controllers;

use App\News;
use App\Products;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    //
    public function newsIndex()
    {
        $newsData = News::get();
        return view('front.news.index',compact('newsData'));
    }

    public function newsContent($id)
    {
        $newsDetail = News::find($id);
        return view('front.news.content',compact('newsDetail'));
    }
    // 
    public function productsIndex()
    {
        $newsData = Products::get();
        return view('front.products.index',compact('newsData'));
    }

    public function productsContent($id)
    {
        $newsDetail = Products::find($id);
        return view('front.products.content',compact('newsDetail'));
    }
}
