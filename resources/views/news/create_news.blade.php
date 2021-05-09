@extends('layouts.app')

@section('css')
    
@endsection

@section('main')
    <div class="container">

        <form action="/news/store" method="POST" class="">
            @csrf
            <div class="form-group">
                <label for="tittle">標題</label>
                <input type="text" id="tittle" name="tittle">
            </div>
            <div class="form-group">
                <label for="">時間</label>
                <input type="date" id="date" name="date">
            </div>
            <div class="form-group">
                <label for="">圖片</label>
                <input type="text" id="img" name="img">
            </div>
            <div class="form-group">
                <label for="">內容</label>
                <textarea name="content" id="content" cols="30" rows="10"></textarea>
            </div>
            <button type="submit">送出</button>
        </form>    
    </div>
@endsection

@section('js')
    
@endsection