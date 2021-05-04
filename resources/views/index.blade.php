@extends('layouts.template')

@section('css')
{{-- <link rel="stylesheet" href="{{ asset('css/XXX.css') }}">
<style>
</style> --}}
@endsection

@section('main')
<div class="container-fluid mb-5 px-0">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('./img/annas-hummingbird-6146187_1920.jpg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('./img/annas-hummingbird-6146187_1920.jpg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('./img/annas-hummingbird-6146187_1920.jpg') }}" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<div class="section1 mb-5">
    <div class="container">
        <div class="row">
            <div class="col text-center mb-5">
                <h2>Raw Denim Heirloom Man Braid</h2>
                <p>Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo
                    juice </p>
                <p>poutine, ramps microdosing banh mi pug.</p>
                <hr style="border: 2px solid rgb(99, 102, 241); width: 5%; border-radius: 5px;">
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row text-center">
            <div class="col-md-4 mb-5">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="2" class="sm:w-16 sm:h-16 w-10 h-10" viewBox="0 0 24 24">
                    <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                </svg>
                <h2>Shooting Stars</h2>
                <p>Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo
                    juice poutine, ramps microdosing banh mi pug VHS try-hard. </p>
                <p style="color: blue;">Learn More
                    <svg style="width: 20px; height:20px; color:blue;" fill="none" stroke="currentColor"
                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2"
                        viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                    </svg>
                </p>
            </div>
            <div class="col-md-4">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="2" class="sm:w-16 sm:h-16 w-10 h-10" viewBox="0 0 24 24">
                    <circle cx="6" cy="6" r="3"></circle>
                    <circle cx="6" cy="18" r="3"></circle>
                    <path d="M20 4L8.12 15.88M14.47 14.48L20 20M8.12 8.12L12 12"></path>
                </svg>
                <h2>The Catalyzer</h2>
                <p>Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo
                    juice poutine, ramps microdosing banh mi pug VHS try-hard.</p>
                <p style="color: blue;">Learn More
                    <svg style="width: 20px; height:20px; color:blue;" fill="none" stroke="currentColor"
                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2"
                        viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                    </svg>
                </p>
            </div>
            <div class="col-md-4">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="2" class="sm:w-16 sm:h-16 w-10 h-10" viewBox="0 0 24 24">
                    <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                    <circle cx="12" cy="7" r="4"></circle>
                </svg>
                <h2>Neptune</h2>
                <p>Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo
                    juice poutine, ramps microdosing banh mi pug VHS try-hard. </p>
                <p style="color: blue;">Learn More
                    <svg style="width: 20px; height:20px; color:blue;" fill="none" stroke="currentColor"
                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2"
                        viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                    </svg>
                </p>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <a class="btn btn-primary mx-auto" href="#" role="button">Button</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section2 mb-5 text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Master Cleanse Reliac Heirloom</h2>
                <h2>Heirloom</h2>
            </div>
            <div class="col-md-6">
                <p>Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile poke
                    farm-to-table. Franzen you probably haven't heard of them man bun deep jianbing selfies
                    heirloom.</p>
            </div>
        </div>
    </div>
</div>

<div class="section3 mb-5">
    <div class="container">
        <div class="row">
            <div class="col-6 px-3">
                <div class="row">
                    <div class="col-6 px-2"><img src="{{ asset('./img/500x300.png') }}" class="w-100" alt=""></div>
                    <div class="col-6 px-2"><img src="{{ asset('./img/501x301.png') }}" class="w-100" alt=""></div>
                </div>
                <div class="row mt-3">
                    <div class="col px-2"><img src="{{ asset('./img/600x360.png') }}" class="w-100" alt=""></div>
                </div>

            </div>

            <div class="col-6 px-3">
                <div class="row mb-3">
                    <div class="col px-2"><img src="{{ asset('./img/601x361.png') }}" class="w-100" alt=""></div>
                </div>
                <div class="row">
                    <div class="col-6 px-2"><img src="{{ asset('./img/502x302.png') }}" class="w-100" alt=""></div>
                    <div class="col-6 px-2"><img src="{{ asset('./img/503x303.png') }}" class="w-100" alt=""></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section4 mb-5">
    <div class="container ">
        <div class="row">
            <div class="col text-center">
                <h2>Pricing</h2>
                <p>Banh mi cornhole echo park skateboard authentic crucifix neutra tilde lyft biodiesel artisan
                    direct trade</p>
                <p> mumblecore 3 wolf moon twee</p>
            </div>
        </div>
    </div>
    <div class="container overflow-auto">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Plan</th>
                    <th scope="col">speed</th>
                    <th scope="col">Stronge</th>
                    <th scope="col">Price</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Start</th>
                    <td>5 Mb/s</td>
                    <td>15 GB</td>
                    <td>Free</td>
                    <td><input name="plan" type="radio"></td>
                </tr>
                <tr>
                    <th scope="row">Pro</th>
                    <td>25 Mb/s</td>
                    <td>25 GB</td>
                    <td>$24</td>
                    <td><input name="plan" type="radio"></td>
                </tr>
                <tr>
                    <th scope="row">Business</th>
                    <td>36 Mb/s</td>
                    <td>40 GB</td>
                    <td>$50</td>
                    <td><input name="plan" type="radio"></td>
                </tr>
                <tr>
                    <th scope="row">Exclusive</th>
                    <td>48 Mb/s</td>
                    <td>120 GB</td>
                    <td>$72</td>
                    <td><input name="plan" type="radio"></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <p style="color: blue;">Learn More
                    <svg style="width: 20px; height:20px; color:blue;" fill="none" stroke="currentColor"
                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2"
                        viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                    </svg>
                </p>
            </div>
            <div class="col text-right">
                <a class="btn btn-primary " href="#" role="button">Button</a>
            </div>
        </div>
    </div>
</div>

<div class="section5 mb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Pitchfork Kickstarter Taxidermy</h2>
                <hr style="border: 2px solid rgb(99, 102, 241); width: 15%; border-radius: 5px;" align="left">
            </div>
            <div class="col-md-6 text-center">
                <p>Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile poke
                    farm-to-table. Franzen you probably haven't heard of them man bun deep jianbing selfies
                    heirloom prism food truck ugh squid celiac humblebrag.</p>
            </div>
        </div>
    </div>
</div>

<div class="section6 mb-5">
    <div class="container">
        <div class="row">
            <div class="col-md bg-light px-4 mx-3">
                <img class="card-img-top" src="{{ asset('./img/720x400.png') }}" alt="Card image cap">
                <h6>SUBTITLE</h6>
                <h5>Chichen Itza</h5>
                <p class="card-text">Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon
                    disrupt edison bulbche.</p>
            </div>
            <div class="col-md bg-light px-3 mx-3">
                <img class="card-img-top" src="{{ asset('./img/721x401.png') }}" alt="Card image cap">
                <h6>SUBTITLE</h6>
                <h5>Colosseum Roma</h5>
                <p class="card-text">Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon
                    disrupt edison bulbche.</p>
            </div>
            <div class="col-md bg-light px-3 mx-3">
                <img class="card-img-top" src="{{ asset('./img/722x402.png') }}" alt="Card image cap">
                <h6>SUBTITLE</h6>
                <h5>Great Pyramid of Giza</h5>
                <p class="card-text">Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon
                    disrupt edison bulbche.</p>
            </div>
            <div class="col-md bg-light px-3 mx-3">
                <img class="card-img-top" src="{{ asset('./img/723x403.png') }}" alt="Card image cap">
                <h6>SUBTITLE</h6>
                <h5>San Francisco</h5>
                <p class="card-text">Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon
                    disrupt edison bulbche.</p>
            </div>
        </div>
    </div>
</div>

<div class="section7 mb-5">
    <div class="container">
        <div class="row">
            <div class="col123">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="2" class="sm:w-16 sm:h-16 w-10 h-10" viewBox="0 0 24 24">
                    <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                </svg>
            </div>
            <div class="col">
                <h5>Shooting Stars</h5>
                <h6>Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy.</h6>
                <h6>Gastropub indxgo juice poutine.</h6>
                <p style="color: blue;">Learn More
                    <svg style="width: 20px; height:20px; color:blue;" fill="none" stroke="currentColor"
                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2"
                        viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                    </svg>
                </p>
            </div>
        </div>
        <hr>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <h5>The Catalyzer</h5>
                <h6>Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy.</h6>
                <h6>Gastropub indxgo juice poutine.</h6>
                <p style="color: blue;">Learn More
                    <svg style="width: 20px; height:20px; color:blue;" fill="none" stroke="currentColor"
                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2"
                        viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                    </svg>
                </p>
            </div>
            <div class="col123">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="2" class="sm:w-16 sm:h-16 w-10 h-10" viewBox="0 0 24 24">
                    <circle cx="6" cy="6" r="3"></circle>
                    <circle cx="6" cy="18" r="3"></circle>
                    <path d="M20 4L8.12 15.88M14.47 14.48L20 20M8.12 8.12L12 12"></path>
                </svg>
            </div>
        </div>
        <hr>
    </div>
    <div class="container">
        <div class="row">
            <div class="col123">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="2" class="sm:w-16 sm:h-16 w-10 h-10" viewBox="0 0 24 24">
                    <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                    <circle cx="12" cy="7" r="4"></circle>
                </svg>
            </div>
            <div class="col">
                <h5>The 400 Blows</h5>
                <h6>Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy.</h6>
                <h6>Gastropub indxgo juice poutine.</h6>
                <p style="color: blue;">Learn More
                    <svg style="width: 20px; height:20px; color:blue;" fill="none" stroke="currentColor"
                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2"
                        viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                    </svg>
                </p>
            </div>
        </div>
    </div>
    <div class="container text-center">
        <div class="row">
            <div class="col">
                <a class="btn btn-primary mx-auto" href="#" role="button">Button</a>
            </div>
        </div>
    </div>
</div>

<div class="section8 mb-5">
    <div class="container mb-5">
        <div class="row">
            <div class="col-md-3 ">
                <img class="w-100" src="{{ asset('./img/420x260.png') }}" alt="">
                <h6>CATEGORY</h6>
                <h5>The Catalyzer</h5>
                <h6>$16.00</h6>
            </div>
            <div class="col-md-3">
                <img class="w-100" src="{{ asset('./img/421x261.png') }}" alt="">
                <h6>CATEGORY</h6>
                <h5>Shooting Stars</h5>
                <h6>$21.15</h6>
            </div>
            <div class="col-md-3">
                <img class="w-100" src="{{ asset('./img/422x262.png') }}" alt="">
                <h6>CATEGORY</h6>
                <h5>Neptune</h5>
                <h6>$12.00</h6>
            </div>
            <div class="col-md-3">
                <img class="w-100" src="{{ asset('./img/423x263.png') }}" alt="">
                <h6>CATEGORY</h6>
                <h5>The 400 Blows</h5>
                <h6>$18.40</h6>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <img class="w-100" src="{{ asset('./img/424x264.png') }}" alt="">
                <h6>CATEGORY</h6>
                <h5>The Catalyzer</h5>
                <h6>$16.00</h6>
            </div>
            <div class="col-md-3">
                <img class="w-100" src="{{ asset('./img/425x265.png') }}" alt="">
                <h6>CATEGORY</h6>
                <h5>Shooting Stars</h5>
                <h6>$21.15</h6>
            </div>
            <div class="col-md-3">
                <img class="w-100" src="{{ asset('./img/427x267.png') }}" alt="">
                <h6>CATEGORY</h6>
                <h5>Neptune</h5>
                <h6>$12.00</h6>
            </div>
            <div class="col-md-3">
                <img class="w-100" src="{{ asset('./img/428x268.png') }}" alt="">
                <h6>CATEGORY</h6>
                <h5>The 400 Blows</h5>
                <h6>$18.40</h6>
            </div>
        </div>
    </div>
</div>

<div class="section9 mb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img class="w-100" src="{{ asset('./img/400x400.png') }}" alt="">
            </div>
            <div class="col-md-6 mt-5">
                <div class="section9-R mb-3">
                    <h6>BRAND NAME</h6>
                    <h3>The Catcher in the Rye</h3>
                    <div class="svg-icon d-flex">
                        <svg color="blue" fill="currentColor" stroke="currentColor" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" class="star" viewBox="0 0 24 24">
                            <path
                                d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                            </path>
                        </svg>
                        <svg color="blue" fill="currentColor" stroke="currentColor" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" class="star" viewBox="0 0 24 24">
                            <path
                                d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                            </path>
                        </svg>
                        <svg color="blue" fill="currentColor" stroke="currentColor" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" class="star" viewBox="0 0 24 24">
                            <path
                                d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                            </path>
                        </svg>
                        <svg color="blue" fill="currentColor" stroke="currentColor" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" class="star" viewBox="0 0 24 24">
                            <path
                                d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                            </path>
                        </svg>
                        <svg color="blue" fill="none" stroke="currentColor" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" class="star-w" viewBox="0 0 24 24">
                            <path
                                d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                            </path>
                        </svg>
                        <p>4 Reviews</p>
                        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            class="icon" viewBox="0 0 24 24">
                            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                        </svg>
                        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            class="icon" viewBox="0 0 24 24">
                            <path
                                d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                            </path>
                        </svg>
                        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            class="icon" viewBox="0 0 24 24">
                            <path
                                d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                            </path>
                        </svg>
                    </div>
                    <p>
                    <h6>Fam locavore kickstarter distillery. Mixtape chillwave tumeric sriracha taximy chia
                        microdosing tilde DIY. XOXO fam indxgo juiceramps cornhole raw denim forage brooklyn.
                        Everyday carry +1 seitan poutine tumeric. Gastropub blue bottle austin listicle
                        pour-over, neutra jean shorts keytar banjo tattooed umami cardigan</h6>
                    </p>
                </div>
                <div class="section9-RB1 d-flex mb-4">
                    <h5 class="mr-2">Color</h5>
                    <button class="mr-2"
                        style="width: 25px; height: 25px; border-radius: 50px;  background-color: #fff;"></button>
                    <button class="mr-2"
                        style="width: 25px; height: 25px; border-radius: 50px;  background-color: #374151;"></button>
                    <button class="mr-5"
                        style="width: 25px; height: 25px; border-radius: 50px;  background-color: #6366f1;"></button>
                    <h5 class="mr-2">Size</h5>
                    <div class="dropdown show mb-4">
                        <a class="btn btn-secondary dropdown-toggle"
                            style="width: 50px; height: 40px; background-color: white; color: black;" href="#"
                            role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            SM
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="#">M</a>
                            <a class="dropdown-item" href="#">L</a>
                            <a class="dropdown-item" href="#">XL</a>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="section9-RB2 d-flex">
                    <h3>$58.00</h3>
                    <a class="btn btn-primary ml-auto" style="width: 80px; height: 40px;" href="#"
                        role="button">Button</a>
                    <svg style="width: 40px; height: 40px;" fill="currentColor" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                        <path
                            d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z">
                        </path>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section10 container-fluid mb-5 px-0 position-relative ">
    <div class="">
        <iframe class=""
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d465741.94049083797!2d120.6756895472467!3d24.220473068589154!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346917dff97922ef%3A0x87523ee47ea6447f!2z5Y-w5Lit5biC!5e0!3m2!1szh-TW!2stw!4v1617955660347!5m2!1szh-TW!2stw"
            width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
    <div class="container container-map d-flex justify-content-center justify-content-md-end position-absolute">
        <div class="p-3 bg-white">
            <form>
                <h5>Feedback</h5>
                <p class="mb-0">Post-ironic portland shabby chic echo park, banjo fashion</p>
                <p>axe</p>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text text-muted"></small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Message</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-lg btn-block btn-primary mb-2">Button</button>
                <h6 style="font-size: 5px;">Chicharrones blog helvetica normcore iceland tousled brook viral
                    artisan.</h6>
            </form>
        </div>
    </div>
</div>

@endsection

@section('js')

@endsection
