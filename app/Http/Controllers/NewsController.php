<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    //
    public function index()
    {
        $newsData = DB::table('news')->get();
        return view('news.index2',compact('newsData'));
    }

    public function create()
    {
        DB::table('news')->insert([
            'tittle'=>'abc',
            'date'=>'2021-05-05',
            'img'=>'https://www.taiwan.net.tw/pic.ashx?qp=/0040115/13_0040115.jpg&sizetype=2',
            'content'=>'asdadasdasdasdasdasd',
            'views'=>0
        ]);
    }

    public function update($id)
    {
        DB::table('news')
        ->where('id',$id)
        ->update(['tittle' => '999999']);
    }

    public function delete($id)
    {
        DB::table('news')
        ->where('id',$id)
        ->delete();
    }

    public function detail($id)
    {
        $newsData = DB::table('news')
        ->find($id);
        return view('news.index3',compact('newsData'));
    }

}
