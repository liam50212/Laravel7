@extends('layouts.app')

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection

@section('main')
    <div class="container">

        <form action="/admin/news/store" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">標題</label>
                <input type="text" id="title" name="title">
            </div>
            <div class="form-group">
                <label for="">時間</label>
                <input type="date" id="date" name="date">
            </div>
            <div class="form-group">
                <label for="">圖片</label>
                <input type="file" accept="image/*" id="img" name="img">
            </div>
            <div class="form-group">
                <label for="content">內容</label>
                <textarea name="content" id="summernote" cols="30" rows="10"></textarea>
            </div>
            {{-- <div id="summernote"><p></p></div> --}}
            <button type="submit">送出</button>
        </form>  
        
    </div>
@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote();
          });
    </script>
@endsection