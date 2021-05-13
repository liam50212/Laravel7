@extends('layouts.app')

@section('css')

@endsection

@section('main')
    <form action="/admin/products/update/{{$news->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="type_id">類型</label>
            <select id="type_id" name="type_id">
                @foreach ($productTypes as $productType)
                   <option value="{{$productType->id}}" @if ($productType->id == $news->type_id) selected @endif>{{$productType->name}}</option> 
                @endforeach
            </select>    
        </div>
        <div class="form-group">
            <label for="name">名字</label>
            <input type="text" id="name" name="name" value="{{$news->name}}">
        </div>
        <div class="form-group">
            <label for="">圖片</label>
            <input type="file" accept="image/*" id="img" name="img" value="{{asset($news->img)}}">
        </div>
        <div class="form-group">
            <label for="">價錢</label>
            <input type="text" id="price" name="price" value="{{$news->price}}">
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