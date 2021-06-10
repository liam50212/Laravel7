<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.16.6/sweetalert2.min.css"
        integrity="sha512-/D4S05MnQx/q7V0+15CCVZIeJcV+Z+ejL1ZgkAcXE1KZxTE4cYDvu+Fz+cQO9GopKrDzMNNgGK+dbuqza54jgw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

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
    @foreach ($newsData as $product)
    <div class="product-card" id="product-card1">
        <div class="top">
            <svg viewBox="0 0 24 24">
                <path fill="#000000" d="M4,5V7H21V5M4,11H21V9H4M4,19H21V17H4M4,15H21V13H4V15Z" />
            </svg>
            <a href="/shopping_cart/list">
                <p>前往購物車頁面</p>
            </a>
        </div>
        <div class="main">
            <img src="{{$product->img}}" alt="bird of paradise plant" id="main-image1">
            <div class="price" id="price1" style="position: absolute; top:400px">${{$product->price}}</div>
            <div class="inline-block">
                <h2>{{$product->name}}</h2>
            </div>
        </div>
        <div class="detail">
            <p class="type">{!! $product->content !!}</p>
            <p class="description"></p>

            <button class="buy add-btn create-btn" data-id="{{$product->id}}"
                style="position: absolute;left:0px; top:500px;color:blue">加入購物車</button>
            </a>
        </div>
    </div>
    @endforeach

    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.16.6/sweetalert2.min.js"
        integrity="sha512-CrNI25BFwyQ47q3MiZbfATg0ZoG6zuNh2ANn/WjyqvN4ShWfwPeoCOi9pjmX4DoNioMQ5gPcphKKF+oVz3UjRw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        document.querySelectorAll('.add-btn').forEach(function (addBtn) {
            addBtn.addEventListener('click',function () {
                var productId = this.getAttribute('data-id');

                var formData = new FormData();
                formData.append('_token','{{ csrf_token() }}');
                formData.append('productId',productId);

                fetch('/shopping_cart/add',{
                    'method':'POST',
                    'body':formData
                }).then(function (response) {
                    return response.text();
                }).then(function (data){
                    if(data == 'success'){
                        Swal.fire({
                            icon: 'success',
                            title: '成功加入購物車',
                            showConfirmButton: false,
                            timer: 700
                        })
                    }
                })
            });
        });
        // document.querySelectorAll('.create-btn').forEach(function (btn) {
        // btn.addEventListener('click', function () {
        //     var id = this.getAttribute('data-id');
        //     if(confirm('已經新增')){
        //         document.querySelector(id).submit();
        //     }
        // });
    </script>

    @if (Session::get('message'))
        <script>
            Swal.fire({
                icon: 'warning',
                title: '{{Session::get("message")}}',
            });
        </script>
    @endif


</body>

</html>