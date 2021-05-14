@extends('layouts.app')

@section('css')
    <style>
        .img-area{
            display: flex;
            flex-wrap: wrap;
        }

        .img {
            width: 200px;
            height: 200px;
            background-size: cover;
            background-position: center;
            margin-right: 10px;
            margin-bottom: 10px;
            border: 1px solid #000;
        }
    </style>
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
            <img src="{{$news->img}}" alt="" width="80px"> 
            <input type="file" accept="image/*" id="img" name="img" value="{{asset($news->img)}}">
        </div>
        <div class="form-group other-imgs">
            <label for="imgs">其他圖片</label>
            <div class="img-area">
                @foreach ($news->productImgs as $img) 
                    <div class="img-wrapper" style="position: relative; margin:0px 0px 5px 15px">
                        <div class="img" style="background-image: url('{{asset($img->img)}}')"></div>
                        <div class="del-btn img-delete" data-id="{{$img->id}}" style="position: absolute; left:200px; top:-10px">X</div>
                    </div>
                    <input type="file" accept="image/*" id="imgs" name="" style="margin:0px 0px 5px 15px" multiple>
                    <hr>
                @endforeach
            </div>
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
        // document.querySelector('.other-imgs').addEventListener('click', function(e){
        //     console.log(1);
        //     if(e.target && e.target.matches('.img-delete')){
        //         var test = e.target.closest('.img-wrapper');
        //         test.style.display = 'none';
        //         test.innerHTML = "";
        //     }
        // });

        btns = document.querySelectorAll('.del-btn');
        btns.forEach(function(btn) {
            btn.addEventListener('click',function(){
                if(confirm('sure?')){
                    var imgId = this.getAttribute('data-id');
                    var formData = new FormData();

                    formData.append('id', imgId);
                    formData.append('_token', '{{ csrf_token() }}');
                    var delbtn = this;
                    fetch('/admin/products/delete_img', {
                        method: 'POST',
                        body: formData
                    })
                    .then(function(response){
                        return response.text();
                    })
                    .then(function(result){
                        if(result == 'success'){
                            delbtn.parentElement.romove();
                        }
                    })
                }
            });
        });    
    </script>
@endsection