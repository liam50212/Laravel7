@extends('layouts.app')

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    
@endsection

@section('main')
    <div class="container">

        <form action="/admin/products/store" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="type_id">類型</label>
                <select id="type_id" name="type_id">
                    @foreach ($productTypes as $productType)
                        {{-- {{dd($productType)}} --}}
                       <option value="{{$productType->id}}">{{$productType->name}}</option> 
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="name">名字</label>
                <input type="text" id="name" name="name">
            </div>
            <div class="form-group">
                <label for="img">主要圖片</label>
                <input type="file" accept="image/*" id="img" name="img">
            </div>
            <div class="form-group">
                <label for="imgs">其他圖片</label>
                <input type="file" accept="image/*" id="imgs" name="imgs[]" multiple>
            </div>
            <div class="form-group">
                <label for="">價錢</label>
                <input type="text" id="price" name="price">
            </div>
            <div class="form-group">
                <label for="">內容</label>
                <textarea name="content" id="summernote" cols="30" rows="10"></textarea>
            </div>
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