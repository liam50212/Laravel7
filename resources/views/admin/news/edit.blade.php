@extends('layouts.app')

@section('css')

@endsection

@section('main')
    <form action="/admin/news/update/{{$news->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">標題</label>
            <input type="text" id="title" name="title" value="{{$news->title}}">
        </div>
        <div class="form-group">
            <label for="">時間</label>
            <input type="date" id="date" name="date" value="{{$news->date}}">
        </div>
        <div class="form-group">
            <label for="">圖片</label>
            <input type="file" accept="image/*" id="img" name="img" value="{{$news->img}}">
        </div>
        <div class="form-group">
            <label for="">內容</label>
            <textarea name="content" id="content" cols="30" rows="10">{{$news->content}}</textarea>
        </div>
        <button type="submit">送出</button>
    </form>


@endsection

@section('js')

@endsection