<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Fjalla+One|Montserrat:300,400,700,800|Open+Sans:300');
        body {
            background-image:url("https://images.unsplash.com/photo-1493552152660-f915ab47ae9d?ixlib=rb-1.2.1&auto=format&fit=crop&w=934&q=80");
            height:100%;
            margin: 0;
            background-position: center;
            background-size: cover;
            /* background-repeat: no-repeat;
            background-attachment: fixed; */
        }

        main{
            max-width: 720px;
            margin: 5% auto;
        }

        .card{
            box-shadow: 0 6px 6px rgba(#000, 0.3);
            transition: 200ms;
            background: #fff;
        }

        .card__title{
            display: flex;
            align-items: center;
            padding: 30px 40px;
        }

        .card__title > h3{
            flex: 0 1 200px;
            text-align: right;
            margin: 0;
            color: #252525;
            font-family: sans-serif;
            font-weight: 600;
            font-size: 20px;
            text-transform: uppercase;
        }

        .icon{
            flex: 1 0 10px;
            background: #115dd8;
            color: #fff;
            padding: 10px 10px;
            transition: 200ms;
            font-size: 2rem
        }

        .icon > a {
            color: #fff;
        }

        .card__body{
            padding: 0 40px;
            display: flex;
            flex-flow: row no-wrap;
            margin-bottom: 25px;
        } 

        .card__body > .half{
            box-sizing: border-box;
            padding: 0 15px;
            flex: 1 0 50%;
        }

        .featured_text > h1{
            margin: 0;
            padding: 0;
            font-weight: 800;
            font-family: "Montserrat", sans-serif;
            font-size: 64px;
            line-height: 50px;
            color: #181e28;
        }

        .featured_text > p{
            margin: 0;
            padding: 0;
        }

        .image{
            padding-top: 15px;
            width: 100%; 
        }

        img{
            display: block;
            max-width: 100%;
            height: auto;
        }

        .description{
            margin-bottom: 25px; 
        }

        .description > p{
            margin: 0;
            /* font-family: "Open Sans", sans-serif; */
            font-weight: 300;
            line-height: 27px;
            font-size: 20px;
            color: #555;
        }

        span .stock{
            font-family: "Montserrat", sans-serif;
            font-weight: 600;
            color: #a1cc16;
        }

        .card__footer{
            padding: 30px 40px;
            display: flex;
            flex-flow: row;
            align-items: center;
            position: relative;
        } 

        .recommend{
            flex: 1 0 10px;     
        }

        .recommend > p{
            margin: 0;
            font-family: "Montserrat", sans-serif;
            text-transform: uppercase;
            font-weight: 600;
            font-size: 14px;
            color: #555;
        }

        .recommend > h3{
            margin: 0;
            font-size: 20px;
            font-family: "Montserrat", sans-serif;
            font-weight: 600;
            text-transform: uppercase;
            color: #115dd8;
        } 

        button{
            cursor: pointer;
            border: 1px solid #115dd8;
            padding: 14px 30px;
            border-radius: 200px;
            color: #fff;
            background: #115dd8;
            font-family: "Open Sans", sans-serif;
            font-size: 16px;
            transition: 200ms;
        }

        button:hover{
          background: #fff;
          color: #115dd8;
        }
    } 
    </style>
</head>
<body>
    <main>
        <div class="card" style="width: 850px;">
          <div class="card__title">
            <div class="icon">
              <a href="/products"><i class="bi bi-arrow-left-short"></i></a>
            </div>
            <h3>New products</h3>
          </div>
          <div class="card__body">
            <div class="half">
              <div class="featured_text">
                <h1 class="mb-2">{{$newsDetail->name}}</h1>
                {{-- <p class="sub">Office Chair</p> --}}
                <p class="price">${{$newsDetail->price}}</p>
              </div>
              <div class="image">
                <img src="{{$newsDetail->img}}" alt="">
              </div>
            </div>
            <div class="half">
              <div class="description">
                <p>{{$newsDetail->content}}</p>
              </div>
            </div>
          </div>
          <div class="card__footer">
            <div class="recommend">
              <p>Recommended by</p>
              <h3>Andrew Palmer</h3>
            </div>
            <div class="action">
              <button type="button">Add to cart</button>
            </div>
          </div>
        </div>
      </main>
</body>
</html>