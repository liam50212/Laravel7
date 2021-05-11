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
        {{-- <a href="/news/create">
            <button>新增</button>
        </a> --}}
    </div>
    <hr>
</div>
<section class="section-main">
    @foreach ($newsData as $news)
    <div class="main-text" style="display: flex">
        <img src="{{$news->img}}" style="width: 400px; height: 300px;" alt="">
        <div class="section-block" style="margin-left: 50px">
            <span class="span-block">{{$news->title}}</span><br><br>
            <a href="/news/content/{{$news->id}}">
                <span>經典小鎮升級3.0正式開跑　小鎮逗鎮趣 集章抽好禮</span>
            </a>
            <h5>{{$news->date}}</h5>
            <h5>{{$news->content}}</h5>
            {{-- <a href="/news/edit/{{$news->id}}">
                <button>編輯</button>
            </a>
            <a class="btn" href="/news/delete/{{$news->id}}">
                <button class="delete btn" data-href="/news/delete/{{$news->id}}">刪除</button>
            </a> --}}
        </div>
    </div>   
    <hr>
    @endforeach
<section>


@endsection

@section('js')

{{-- <script>
    document.querySelectorAll('.delete').forEach(function (btn)){
        btn.addEventListener('click',function (){
            if(confirm('確定要刪除嗎')) {
                location.href= this.getAttribute('data-href');
            }
        })
    });
</script> --}}

@endsection