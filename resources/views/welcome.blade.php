@extends('layouts.master')




@section('content')

    <!-- Hero Section-->
    <section style="background: url(img/hero.jpg); background-size: cover; background-position: center center" class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <h1>Welcome to the Official Website of IOT Club MACE</h1><a href="{{ route('register') }}" class="hero-link">Become a part of IOT MACE</a>
                </div>
            </div><a href=".intro" class="continue link-scroll"><i class="fa fa-long-arrow-down"></i> Scroll Down</a>
        </div>
    </section>
    <!-- Intro Section-->
    <section class="intro">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h2 class="h3">What we do here ?</h2>
                    <p class="text-big">We <strong>build</strong> prototypes.. try new methods of establishing a connected world where we can control any device with any device. Make mistakes and learn from them.. find new and easy ways to do our everyday jobs in ways we never imagined. and most of all have fun!!</p>
                    <br/>
                    <h2 class="h3">How this will help you ?</h2>
                    <p class="text-big">This will help you to gain a better understanding of how hardware works.Also help you to under stand how to use hardware to do things and also bring your ideas to real world.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="featured-posts no-padding-top">
        <div class="container">
            <h2>Announcements</h2>
            <hr/>



            @foreach($mssg as $msg)

            <div class="row d-flex align-items-stretch">
            @if($msg['id']%2==0)
                    <div class="image col-lg-5"><img src="img/featured-pic-1.jpeg" alt="..."></div>
            @endif
                <div class="text col-lg-7">
                    <div class="text-inner d-flex align-items-center">
                        <div class="content">
                            <header class="post-header">
                            <div class="category">
                             <a href="#">IOT</a><a href="#">MACE</a></div><a href="post.blade.php">
                <h2 class="h4">
            {{ $msg->header }}
                </h2></a></header>
                            <p>{{ $msg->message }}</p>
                                     <footer class="post-footer d-flex align-items-center"><a href="#" class="author d-flex align-items-center flex-wrap">
                                    <div class="avatar"><img src="img/avatar-1.jpg" alt="..." class="img-fluid"></div>
                                    <div class="title"><span>
            {{ $msg->user->name }}

            </span></div></a>
                                <div class="date"><i class="icon-clock"></i>{{ $msg->created_at }}</div>
                            </footer>
                        </div>
                    </div>
                </div>

            @if($msg['id']%2!=0)
                <div class="image col-lg-5"><img src="img/featured-pic-1.jpeg" alt="..."></div>
            @endif
                </div>
            @endforeach


        </div>
    </section>
    <!-- Divider Section-->
    <section style="background: url(img/divider-bg.jpg); background-size: cover; background-position: center bottom" class="divider">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</h2><a href="#" class="hero-link">View More</a>
                </div>
            </div>
        </div>
    </section>



    <!-- Latest Posts -->
    <section class="latest-posts">
        <div class="container">
            <header>
                <h2>Latest from the blog</h2>
                <p class="text-big">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </header>
            <div class="row">

                @foreach($mssg as $msg)
                <div class="post col-md-4">
                    <div class="post-thumbnail"><a href="post.blade.php"><img src="img/blog-1.jpg" alt="..." class="img-fluid"></a></div>
                    <div class="post-details">
                        <div class="post-meta d-flex justify-content-between">
                            <div class="date">{{ $msg->created_at }}</div>
                            <div class="category"><a href="#">Business</a></div>
                        </div><a href="post.blade.php">
                            <h3 class="h4">{{ $msg->header }}</h3></a>
                        <p class="text-muted">{{ $msg->message }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Gallery Section-->
    <section class="gallery no-padding">
        <div class="row">
            <div class="mix col-lg-3 col-md-3 col-sm-6">
                <div class="item"><a href="img/gallery-1.jpg" data-fancybox="gallery" class="image"><img src="img/gallery-1.jpg" alt="..." class="img-fluid">
                        <div class="overlay d-flex align-items-center justify-content-center"><i class="icon-search"></i></div></a></div>
            </div>
            <div class="mix col-lg-3 col-md-3 col-sm-6">
                <div class="item"><a href="img/gallery-2.jpg" data-fancybox="gallery" class="image"><img src="img/gallery-2.jpg" alt="..." class="img-fluid">
                        <div class="overlay d-flex align-items-center justify-content-center"><i class="icon-search"></i></div></a></div>
            </div>
            <div class="mix col-lg-3 col-md-3 col-sm-6">
                <div class="item"><a href="img/gallery-3.jpg" data-fancybox="gallery" class="image"><img src="img/gallery-3.jpg" alt="..." class="img-fluid">
                        <div class="overlay d-flex align-items-center justify-content-center"><i class="icon-search"></i></div></a></div>
            </div>
            <div class="mix col-lg-3 col-md-3 col-sm-6">
                <div class="item"><a href="img/gallery-4.jpg" data-fancybox="gallery" class="image"><img src="img/gallery-4.jpg" alt="..." class="img-fluid">
                        <div class="overlay d-flex align-items-center justify-content-center"><i class="icon-search"></i></div></a></div>
            </div>
        </div>
    </section>



@endsection