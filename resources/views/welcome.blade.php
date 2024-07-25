<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">

    <title>
        store
    </title>

    <!-- slider stylesheet -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{url('css/welcome.css')}}" />


</head>

<body>
<div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand" href="index.html">
          <span>
            Giftos
          </span>
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class=""> </span>
            </button>

            <div class="collapse navbar-collapse innerpage_navbar" id="navbarSupportedContent">

                <ul class="navbar-nav  ">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">
                            Shop
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{url('dashboard')}}">
                            dashboard
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{url('register')}}">register</a>
                    </li>
                </ul>
                <div class="user_option">
                    <a href="{{url('login')}}">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <span>
                Login
              </span>
                    </a>
                    <a href="">
                        <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                    </a>
                    <form class="form-inline" action="{{url('kala/serch')}}">
                        <input type="text"name="name">
                        <span></span>

                        <button class="btn nav_search-btn" type="submit">
                            <span style="margin-left: 12px"> serch </span>

                        </button>

                    </form>
                </div>
            </div>
        </nav>
    </header>
    <!-- end header section -->
    <!-- vegetable -->
    <div id="vegetable" class="vegetable">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div  class="titlepage">
                        <h2> about <strong class="llow">shop</strong> </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 ">
                    <div class="vegetable_shop">

                        <p>Our store has been around since 2000 with free shipping</p>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 ">
                    <div class="vegetable_img">
                        <figure><img src="images/v1.jpg" alt="#"/></figure>
                        <span>01</span>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 ">
                    <div class="vegetable_img margin_top">
                        <figure><img src="images/v2.jpg" alt="#"/></figure>
                        <span>02</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end vegetable -->


</div>
<!-- end hero area -->

<!-- shop section -->

<section class="shop_section layout_padding">
{{--   @foreach() @endforeach--}}

    <div class="product-container">
@foreach($kalas as $kala)


        <div class="product-card">
            <img src="/images/{{$kala->images}}" alt="محصول" class="product-image">
            <h2 class="product-name">{{$kala->name}}</h2>
            <h5 class="product-name">{{$kala->price}}</h5>
            <div class="product-details">
                <form action="{{url('addKala/'.$kala->id)}}"method="post">
                    @csrf

                <input name="number" min="5" value="5" class="product-quantity">
                <button class="product-button" type="submit">add to cart</button>
                </form>
            </div>
        </div>
@endforeach

        <!-- می‌توانید به تعداد مورد نظر کارت‌ها را تکرار کنید -->

    </div>
</section>

<!-- end shop section -->
<div id="testimonial" class="clients">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>manufaacturer</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="clients_red">
    <div class="container">
        <div id="testimonial_slider" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#testimonial_slider" data-slide-to="0" class=""></li>
                <li data-target="#testimonial_slider" data-slide-to="1" class="active"></li>
                <li data-target="#testimonial_slider" data-slide-to="2" class=""></li>
            </ul>
            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item">
                    <div class="testomonial_section">

                        <div class="full testimonial_cont">
                            <div class="row">
                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 pa_right">
                                    <div class="testomonial_img">
                                        <figure><img src="images/tes.jpg" alt="#"/></figure>
                                        <i><img src="images/test_con.png" alt="#"/></i>
                                    </div>
                                </div>
                                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 pa_left">
                                    <div class="cross_inner">
                                        <h3>Mohammad Khalil <br><strong class="ornage_color">Amarlou</strong></h3>
                                        <p>amanlo is work fud
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item active">

                    <div class="testomonial_section">

                        <div class="full testimonial_cont">
                            <div class="row">
                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 pa_right">
                                    <div class="testomonial_img">
                                        <figure><img src="images/tes.jpg" alt="#"/></figure>
                                        <i><img src="images/test_con.png" alt="#"/></i>
                                    </div>
                                </div>
                                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 pa_left">
                                    <div class="cross_inner">
                                        <h3>Mohammad Khalil<br><strong class="ornage_color">Amarlou</strong></h3>
                                        <p>Mohammad Khalil Amarloo, born in 1996, Neyshabur, Associate Semester 5
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="carousel-item">

                    <div id="testomonial" class="testomonial_section">
                        <div class="full center">
                        </div>
                        <div class="full testimonial_cont ">
                            <div class="row">
                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 pa_right">
                                    <div class="testomonial_img">
                                        <figure><img src="images/tes.jpg" alt="#"/></figure>
                                        <i><img src="images/test_con.png" alt="#"/></i>
                                    </div>
                                </div>
                                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 pa_left">
                                    <div class="cross_inner">
                                        <h3>Jomono<br><strong class="ornage_color">review</strong></h3>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and

                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>

<!-- end clients -->


<!-- info section -->
<section class="info_section  layout_padding2-top">
    <div class="social_container">
        <div class="social_box">
            <a href="">
                <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
            <a href="">
                <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
            <a href="">
                <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
            <a href="">
                <i class="fa fa-youtube" aria-hidden="true"></i>
            </a>
        </div>
    </div>
    <div class="info_container ">
        <div class="container">
            <div class="row">


                <div class="col-md-6 col-lg-3" >
                    <div class="info_form "id="new">
                        <h5>
                            contact Us
                        </h5>
                        <form action="#">
                            <input type="email" placeholder="Enter your email">
                            <button>
                                Subscribe
                            </button>
                        </form>
                    </div>
                </div>

                </div>
            </div>
        </div>
    </div>
    <!-- footer section -->
    <footer class=" footer_section">
        <div class="container">
            <p>
                &copy; <span id="displayYear"></span> develop laravel !            </p>
        </div>
    </footer>
    <!-- footer section -->

</section>

<!-- end info section -->



<script src="{{url('js/bootstrap.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
</script>

<script src="{{url('js/welcom.js')}}"></script>

</body>

</html>
