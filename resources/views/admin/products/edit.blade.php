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
            <label for="">主要圖片</label>
            <input type="file" accept="image/*" id="img" name="img" value="{{asset($news->img)}}">
        </div>
        <div class="form-group other-imgs">
            <label for="imgs">其他圖片</label>
            {{-- {{dd($news->productImgs)}} --}}
            @foreach ($news->productImgs as $img) 
                <div class="img-wrapper">
                    <img src="{{$img->img}}" alt="" width="80px">   
                    <div class="img-delete" data-img="{{$img->id}}">X</div>
                </div>
                <input type="file" accept="image/*" id="imgs" name="imgs[]" multiple>
                {{-- <button class="del" onclick="clean();" >X</button> --}}
            @endforeach
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
    <script>
        document.querySelector('.other-imgs').addEventListener('click', function(e){
            console.log(1);
            if(e.target && e.target.matches('.img-delete')){
                var test = e.target.closest('.img-wrapper');
                test.style.display = 'none';
                test.innerHTML = "";
                // console.log(1);
                // e.style.display = 'none';
            }
        });

    </script>
@endsection