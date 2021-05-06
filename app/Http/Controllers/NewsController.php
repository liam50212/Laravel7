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

        $data = $request->all();
        News::create($data);
        return redirect('/news');
    }

    public function edit()
    {
       return view('news.edit');
    }

    public function update($id)
    {
        News::where('id',$id)
        ->update(['tittle' => '王']);
    }

    public function delete($id)
    {
        News::where('id',$id)
        ->delete();
    }

    public function detail($id)
    {
        $newsDetail = News::find($id);
        return view('news.index3',compact('newsDetail'));
    }

}
