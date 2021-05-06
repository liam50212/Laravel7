@extends('layouts.template')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index3.css') }}">

@endsection

@section('main')
<div class="section-tittle">
    <div class="tittle-top">{{$newsDetail->tittle}}</div>
    <span>發布日期：{{$newsDetail->date}}</span>
    <span>瀏覽次數:{{$newsDetail->view}}</span>
</div>
<hr>
<div class="section-text">
    {{$newsDetail->content}}
    <img src="{{ asset('./img/php-index3.jpg') }}" alt="玩遍百大經典小鎮 集章抽好禮" width="70%">
</div>

@endsection

@section('js')

@endsection