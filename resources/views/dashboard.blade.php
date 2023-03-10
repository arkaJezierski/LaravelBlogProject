@extends('layouts.template')
@section('content')

    <div id="main">
        <div class="container">
            <div class="row">

                <div class="col-md-9">
                    <div class="col-md-12 page-body">
                        <div class="row">


                            <div class="sub-title">
                                <h2>About Me</h2>
                                <a href="{{ url("/contact") }}"><i class="icon-envelope"></i></a>
                            </div>


                            <div class="col-md-12 content-page">
                                <div class="col-md-12 blog-post">


                                    <!-- My Intro Start -->
                                    <div class="post-title margin-bottom-30">
                                        <h1>Hi, I am <span class="main-color">Me MEMEM</span></h1>

                                        <ul class="knowledge">
                                            <li class="bg-color-1">Web Designer</li>
                                            <li class="bg-color-4">Web Developer</li>
                                            <li class="bg-color-6">Freelancer</li>
                                            <li class="bg-color-5">Consultant</li>
                                        </ul>

                                    </div>

                                    @foreach($posts as $post)
                                        <h1>{{$post->title}}</h1>
                                        <h2>{{$post->post_text}}</h2>
                                        <h3>{{$post->user->name}}</h3>
                                    @endforeach

                                    <p>I am in the website field since 2004 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin at quam at orci commodo hendrerit vitae nec eros. Vestibulum neque est, imperdiet nec tortor nec, tempor semper metus. <b>I am a developer</b>, et accumsan nisi. Duis laoreet pretium ultricies. Curabitur rhoncus auctor nunc congue sodales. Sed posuere nisi ipsum, eget dignissim nunc dapibus eget. Aenean elementum sollicitudin sapien ut sapien fermentum aliquet mollis. Curabitur ac quam orci sodales quam ut tempor. suspendisse, gravida in augue in, interdum <b><a href="{{ url("/work") }}" data-toggle="tooltip" data-placement="top" title="Check out my work.">Work</a></b> bibendum dui. Suspendisse sit amet justo sit amet diam fringilla commodo. Praesent ac magna at metus malesuada tincidunt non ac arcu. Nunc gravida eu felis vel elementum. Vestibulum sodales quam ut tempor tempor Donec sollicitudin imperdiet nec tortor nec, tempor semper metus..</p>


                                    <div class="video-box margin-top-40 margin-bottom-80">
                                        <div class="video-tutorial">
                                            <a class="video-popup" href="https://www.youtube.com/watch?v=O2Bsw3lrhvs" title="My Thought">
                                                <img src="{{ asset("/images/pic/my-pic.png") }}" alt="">
                                            </a>
                                        </div>
                                        <p>Take a look about my thought on website design.</p>
                                    </div>

                                    <div class="post-title">
                                        <h1>My <span class="main-color">Services</span></h1>
                                    </div>

                                    <div class="list list-style-2 margin-top-30">
                                        <ul>
                                            <li>Website Design</li>
                                            <li>Website Development</li>
                                            <li>Wordpress Theme Development</li>
                                            <li>Mobile Apps UI/UX Design</li>
                                            <li>Online Software Development</li>
                                            <li>E-commerce Development</li>
                                            <li>UI/UX Consulting</li>
                                        </ul>
                                    </div>


                                </div>

                                <div class="col-md-12 text-center">
                                    <a href="{{ url("/contact") }}" data-toggle="tooltip" data-placement="top" title="Visit on my contact page for hire me." class="load-more-button">Hire</a>
                                </div>

                            </div>

                        </div>



                        <div class="col-md-8 col-md-offset-2">
                            <form id="mc-form" method="post" action="http://uipasta.us14.list-manage.com/subscribe/post?u=854825d502cdc101233c08a21&amp;id=86e84d44b7">

                                <div class="subscribe-form margin-top-20">
                                    <input id="mc-email" type="email" placeholder="Email Address" class="text-input">
                                    <button class="submit-btn" type="submit">Submit</button>
                                </div>
                                <p>Subscribe to my weekly newsletter</p>
                                <label for="mc-email" class="mc-label"></label>
                            </form>

                        </div>


                    </div>



                    <div class="col-md-12 page-body margin-top-50 footer">
                        <footer>
                            <ul class="menu-link">
                                <li><a href="{{ url("/") }}">Home</a></li>
                                <li><a href="{{ url("/about") }}">About</a></li>
                                <li><a href="{{ url("/work") }}">Work</a></li>
                                <li><a href="{{ url("/contact") }}">Contact</a></li>
                            </ul>

                            <p>© Copyright 2016 DevBlog. All rights reserved</p>


                            <!-- UiPasta Credit Start -->
                            <div class="uipasta-credit">Design By <a href="http://www.uipasta.com" target="_blank">UiPasta</a></div>
                            <!-- UiPasta Credit End -->


                        </footer>
                    </div>
                    <!-- Footer End -->


                </div>
                <!-- About Me (Right Sidebar) End -->

            </div>
        </div>
    </div>

@endsection
