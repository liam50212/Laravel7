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
    <div class="section-main">
        <img src="{{ asset('./img/php-01.jpg') }}" style="width: 400px; height: 300px;" alt="">
        <div class="section-block">
            <span class="span-block">最新消息</span><br><br>
            <a href="/news/detail">
                <span>經典小鎮升級3.0正式開跑　小鎮逗鎮趣 集章抽好禮</span>
            </a>
            <h5>2021-05-03</h5>
            <h5>為推動「小鎮漫遊」，交通部觀光局於108年配合「小鎮漫遊年」遴選40個特色小鎮，109年延續小鎮熱潮，配合「脊梁山脈旅遊年」遴選出30個經典/山城小鎮，今（110）年配合「自行車旅遊年」遴選出30個經典/自行車小鎮，邀請大家慢騎自行車小鎮，領略小鎮在地之美...</h5>
        </div>
    </div>
    <hr>
</div>

@endsection

@section('js')

@endsection