<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;


class NewsController extends Controller
{
    //
    public function index()
    {
        $newsData = News::get();
        
        return view('news.index2',compact('newsData'));
    }

    public function create()
    {
        return view('news.create_news');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        // News::create([
        //     'tittle'=>$request->tittle,
        //     'date'=>$request->date,
        //     'img'=>$request->img,
        //     'content'=>$request->content
        // ]);

        // $data = $request->all();
        News::create($request->all());
        return redirect('/news');
    }

    public function edit($id)
    {
        $news = News::find($id);
        return view('news.edit_news',compact('news'));
    }

    public function update($id,Request $request)
    {
        // dd($request->all());
        News::where('id',$id)->first()->update($request->all());
        // News::find('id',$id)->update($request->all());
        return redirect('/news');
    }

    public function delete($id)
    {
        News::destroy($id);
        return redirect('/news');
    }

    public function detail($id)
    {
        $newsDetail = News::find($id);
        return view('news.index3',compact('newsDetail'));
    }

    public function test()
    {
        $newsData = News::get();
        return view('news.test',compact('newsData'));
    }

}
