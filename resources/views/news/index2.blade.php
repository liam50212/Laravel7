@extends('layouts.template')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index2.css') }}">

@endsection

@section('main')
<div class="section">
    <div class="section-top">
        <img src="{{ asset('https://www.taiwan.net.tw/att/topTitleImg/21_0001001.svg') }}" alt="">
    </div>
    <h2 class="section-news">最新消息</h2>
    <div class="section-data">
        <span>資料總筆數：175</span>
        <span>每頁筆數：10</span>
        <span>總頁數：18</span>
        <span>目前頁次：1</span>
    </div>
    <hr>
</div>
<section class="section-main">
    @foreach ($newsData as $news)
    <div class="main-text" style="display: flex">
        <img src="{{$news->img}}" style="width: 400px; height: 300px;" alt="">
        <div class="section-block" style="margin-left: 50px">
            <span class="span-block">{{$news->tittle}}</span><br><br>
            <a href="/news/detail/{id}">
                <span>經典小鎮升級3.0正式開跑　小鎮逗鎮趣 集章抽好禮</span>
            </a>
            <h5>{{$news->date}}</h5>
            <h5>{{$news->content}}</h5>
        </div>
    </div>   
    <hr>
    @endforeach
<section>


@endsection

@section('js')

@endsection