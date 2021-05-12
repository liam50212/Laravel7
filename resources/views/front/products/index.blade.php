<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        html {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        html,
        body {
            width: 100%;
            height: 100%;
            margin: 0;
        }

        body {
            background-image: url("https://images.unsplash.com/photo-1493552152660-f915ab47ae9d?ixlib=rb-1.2.1&auto=format&fit=crop&w=934&q=80");
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            display: flex;
            justify-content: center;
            font-family: -apple-system, BlinkMacSystemFont, Roboto, Helvetica Neue, Helvetica, Arial, sans-serif;
            color: var(--grey-text);
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            margin: 0;
            line-height: 1.2
        }

        .inline-block {
            display: inline-block;
        }

        .product-card {
            width: 270px;
            min-width: 200px;
            height: 680px;
            border-radius: 5px;
            background-color: white;
            margin: 20px;
            overflow: scroll;
            padding: 20px 45px;
            padding-top: 0px;
            position: relative;
        }

        .product-card p {
            margin: 0;
            line-height: 1.6;
            font-size: 14px;
        }

        .product-card .top {
            z-index: 100;
            position: sticky;
            top: 0;
            padding-top: 10px;
            height: 50px;
            display: flex;
            align-items: center;
            padding-bottom: 10px;
            background-color: white;
        }

        .product-card .top p {
            margin-left: auto;
        }

        .product-card svg {
            width: 25px;
        }

        .product-card .top path {
            fill: var(--grey-text);
        }


        .main {
            margin-top: 10px
        }

        .main img {
            width: 100%;
            height: 330px;
            object-fit: cover;
            /*   float: left; */
        }

        .main .price {
            width: 70px;
            height: 70px;
            background-color: var(--green);
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            margin-top: -40px;
            margin-left: -10px;
            margin-bottom: 20px;
            z-index: 100;
            position: relative;
        }

        .main h2 {
            color: var(--dark-text);
        }

        .main h3 {
            font-size: .9rem;
            padding: 5px 0px;
            font-weight: 500;
            color: var(--green);
        }

        .main .price {
            font-size: 18px;
        }

        .main img.small {
            animation: image-shrink .4s forwards;
        }

        .main img.large {
            animation: image-grow .4s forwards;
        }

        .main .price.small {
            display: none;
        }

        .details {
            margin: 30px 0px 60px 0px;
        }

        .details.small {
            margin: 30px 0px;
        }

        .detail {
            display: flex;
            align-items: center;
            margin: 15px 0px;
            font-weight: 500;
        }

        .detail .type {
            color: var(--light-grey-text)
        }

        .detail .description {
            margin-left: auto;
            color: var(--dark-text)
        }

        .detail svg {
            vertical-align: middle;
            width: 25px;
            height: 25px;
            margin-right: 8px;
        }

        .detail path {
            fill: var(--very-light-text);
        }
        button.buy {
            margin: auto;
            display: block;
            width: 100%;
            height: 60px;
            font-size: 16px;
            background-color: var(--green);
            border: none;
            color: white;
            font-family: -apple-system, BlinkMacSystemFont, Roboto, Helvetica Neue, Helvetica, Arial, sans-serif;
            font-weight: 500;
        }
    </style>
</head>

<body>
    @foreach ($newsData as $news)
    <div class="product-card" id="product-card1">
        <div class="top">
            <svg viewBox="0 0 24 24">
                <path fill="#000000" d="M4,5V7H21V5M4,11H21V9H4M4,19H21V17H4M4,15H21V13H4V15Z" />
            </svg>
            <a href="/">
                <p>Product</p>
            </a>
        </div>
        <div class="main">
            <img src="{{$news->img}}"
                alt="bird of paradise plant" id="main-image1">
            <div class="price" id="price1" style="position: absolute; top:400px">${{$news->price}}</div>
            <div class="inline-block">
                <h2>{{$news->name}}</h2>
            </div>
        </div>
        <div class="detail">
            <p class="type">{{$news->content}}</p>
            <p class="description"></p>
            <a href="/products/content/{{$news->id}}">
                <button class="buy" style="position: absolute;left:0px; top:700px;color:blue">More</button>
            </a>
        </div>  
    </div>
    @endforeach
</body>

</html>