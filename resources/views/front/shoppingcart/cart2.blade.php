<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">

    <style>
        * {
            box-sizing: border-box;
        }

        svg {
            width: 50px;
            height: 50px;
        }

        .foot-b {
            width: 30px;
            height: 30px;
            margin-top: 10px;
        }

        .main {
            background-color: gray;
            width: 100%;
            height: auto;
        }

        .menu {
            max-width: 1024px;
            height: 100%;
            background-color: whitesmoke;
        }

        .badge {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            text-align: center;
            line-height: 40px;
            background-color: #ffffff;
            color: black;
            font-size: 20px;
        }

        .progress {
            position: absolute;
            left: 55px;
            top: 20px;
        }

        .section-bar {
            margin-left: 100px;
        }

        .text {
            position: absolute;
            margin-top: 5px;
        }

        .total1-span {
            margin-right: 135px;
        }

        .dropdown-menu {
            /* left: 1100px; */
            left: 70%;
            top: 70px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light p-4" style="font-size:20px" ;>
        <div class="container">
            <a class="navbar-brand px-3" href="./bootstrap-w.html" style="width: 120px;">
                <img src="./img/logo.svg" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active ">
                        <a class="nav-link " href="#">Blog <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Portfolio <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">About <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Contact <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a href="./cart.html" class="nav-link" href="#">
                            <i class="bi bi-cart-fill"></i>
                        </a>
                    </li>
                    <a class="nav-link text-body" href="" id="navbarDropdownMenuLink" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="bi bi-person-circle"></i>
                    </a>
                    <div class="dropdown-menu position-absolute" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="./log-in.html">Login</a>
                    </div>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        <div class="main pt-5 py-5 mb-5">
            <div class="container menu ">
                <h2 class="pt-5 ml-5 mb-4">購物車</h2>
                <div class="section-bar d-flex position-relative">
                    <span class="badge text-white" style="background-color:#10B981">1</span>
                    <div class="progress" style="max-width: 180px; width: 180px; height: 10px">
                        <div class="progress-bar bg-success" role="progressbar" style="width:100%;" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span class="badge position-absolute text-white"
                        style="left: 250px; background-color:#10B981">2</span>
                    <div class="progress " style="max-width: 180px;width: 180px; height: 10px; left: 310px;">
                        <div class="progress-bar bg-success" role="progressbar" style="width:40%;" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span class="badge position-absolute" style="left: 500px;">3</span>
                    <div class="progress " style="max-width: 180px;width: 180px; height: 10px; left: 560px;">
                        <div class="progress-bar bg-success" role="progressbar" style="width:0%;" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span class="badge position-absolute" style="left: 750px;">4</span>
                </div>
                <div class="section-text d-flex position-relative">
                    <span class="text" style="left: 80px">確認購物車</span>
                    <span class="text" style="left: 320px">付款與運送方式</span>
                    <span class="text" style="left: 595px">填寫資料</span>
                    <span class="text" style="left: 845px">完成訂購</span>
                </div>
                <hr class="mt-5">
                <h2 class="pt-3 ml-5 mb-4">付款方式</h2>
                <div class="pay-input mb-5 ml-5">
                    <input type="radio" name="color">
                    <span>信用卡付款</span>
                </div>
                <hr>
                <div class="pay-input mb-5 ml-5">
                    <input type="radio" name="color">
                    <span>網路 ATM</span>
                </div>
                <hr>
                <div class="pay-input mb-5 ml-5">
                    <input type="radio" name="color">
                    <span>超商代碼</span>
                </div>
                <hr>
                <h2 class="pt-3 ml-5 mb-4">運送方式</h2>
                <div class="pay-input mb-5 ml-5">
                    <input type="radio" name="color2">
                    <span>黑貓宅配</span>
                </div>
                <hr>
                <div class="pay-input mb-4 ml-5">
                    <input type="radio" name="color2">
                    <span>超商店到店</span>
                </div>
                <hr>
                <div class="total">
                    <div class="total-1 text-right mr-5">
                        <span class="total1-span">數量:</span>
                        <span>3</span>
                    </div>
                    <div class="total-2 text-right mr-5">
                        <span class="mr-5">小計:</span>
                        <span class="ml-5">$24.90</span>
                    </div>
                    <div class="total-3 text-right mr-5">
                        <span class="mr-5">運費:</span>
                        <span class="ml-5">$24.90</span>
                    </div>
                    <div class="total-4 text-right mr-5">
                        <span class="mr-5">總計:</span>
                        <span class="ml-5">$24.90</span>
                    </div>
                    <hr style="width: 880px;">
                </div>
                <div class="section-next d-flex justify-content-between px-4 mb-5">
                    <div class="return mb-5">
                        <a href="./cart_v02.html">
                            <button type="button" class="btn btn-primary bg-white text-primary">上一步</button>
                        </a>
                    </div>
                    <div class="next">
                        <a href="./cart3.html">
                            <button type="button" class="btn btn-primary">下一步</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <div class="footer-Top mb-5 text-center">
            <div class="container">
                <div class="row ">
                    <div class="col-md-3">
                        <svg class="w-10 h-10 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40">
                            <defs>
                                <style>
                                    .cls-1 {
                                        fill: #162446;
                                    }

                                    .cls-2 {
                                        fill: #fff;
                                    }
                                </style>
                            </defs>
                            <title>資產 2</title>
                            <g id="圖層_2" data-name="圖層 2">
                                <g id="圖層_1-2" data-name="圖層 1">
                                    <circle class="cls-1" cx="20" cy="20" r="20"></circle>
                                    <path class="cls-2"
                                        d="M20,7l7.13,4.11a7.91,7.91,0,0,1,3.95,6.84v6.8l-8.61-5V18.32l7.37,4.26V18.63a7.89,7.89,0,0,0-3.95-6.85L21.28,9.1V33.25L9,26.14V13.35l5.89,3.4a7.91,7.91,0,0,1,3.95,6.85v4.76l-1.23-.71V24.31a7.92,7.92,0,0,0-4-6.85l-3.42-2v9.94L20,31.11Z">
                                    </path>
                        </svg>
                        <h6 class="d-inline">數位方塊</h6>
                        <p>Air plant banjo lyft occupy retro adaptogen indego</p>
                    </div>
                    <div class="col-md-3">
                        <p>CATEGORIES</p>
                        <h6>First Link</h6>
                        <h6>Second Link</h6>
                        <h6>Third Link</h6>
                        <h6>Fourth Link</h6>
                    </div>
                    <div class="col-md-3">
                        <p>CATEGORIES</p>
                        <h6>First Link</h6>
                        <h6>Second Link</h6>
                        <h6>Third Link</h6>
                        <h6>Fourth Link</h6>
                    </div>
                    <div class="col-md-3">
                        <p>CATEGORIES</p>
                        <h6>First Link</h6>
                        <h6>Second Link</h6>
                        <h6>Third Link</h6>
                        <h6>Fourth Link</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-B d-flex" style="background-color: #f3f4f6;">
            <div class="col d-flex align-items-center" style="width: 100%; height: 50px;">
                <p style="margin:0; margin-left: 30px;">© 2020 Tailblocks —</p>
            </div>
            <span style="margin-right: 100px;">
                <a href="">
                    <svg color="gray" fill="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" class="foot-b" viewBox="0 0 24 24">
                        <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                    </svg>
                </a>
                <a href="">
                    <svg color="gray" fill="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" class="foot-b" viewBox="0 0 24 24">
                        <path
                            d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                        </path>
                    </svg>
                </a>
                <a href="">
                    <svg color="gray" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" class="foot-b" viewBox="0 0 24 24">
                        <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                        <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                    </svg>
                </a>
                <a href="">
                    <svg color="gray" fill="currentColor" stroke="currentColor" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="0" class="foot-b" viewBox="0 0 24 24">
                        <path stroke="none"
                            d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z">
                        </path>
                        <circle cx="4" cy="4" r="2" stroke="none"></circle>
                    </svg>
                </a>
            </span>
        </div>
    </footer>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
        integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF"
        crossorigin="anonymous"></script>
</body>

</html>