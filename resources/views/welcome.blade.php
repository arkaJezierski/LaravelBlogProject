@extends('layouts/template')
@section('content')

<div id="main">
    <div class="container">
        <div class="row">



            <!-- About Me (Left Sidebar) Start -->
            <div class="col-md-3">
                <div class="about-fixed">

                    <div class="my-pic">
                        <img src="{{ asset("/images/pic/my-pic.png") }}" alt="">
                        <a href="{{ url("javascript:void(0)") }}" class="collapsed" data-target="#menu" data-toggle="collapse"><i class="icon-menu menu"></i></a>
                        <div id="menu" class="collapse">
                            <ul class="menu-link">
                                <li><a href="{{ url("/about") }}">About</a></li>
                                <li><a href="{{ url("/work") }}">Work</a></li>
                                <li><a href="{{ url("/contact") }}">Contact</a></li>
                            </ul>
                        </div>
                    </div>



                    <div class="my-detail">

                        <div class="white-spacing">
                            <h1>Me MEMEM</h1>
                            <span>Web Developer</span>
                        </div>

                        <ul class="social-icon">
                            <li><a href="{{ url("#") }}" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="{{ url("#") }}" target="_blank" class="twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="{{ url("#") }}" target="_blank" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="{{ url("#") }}" target="_blank" class="github"><i class="fa fa-github"></i></a></li>
                        </ul>

                    </div>
                </div>
            </div>
            <!-- About Me (Left Sidebar) End -->





            <!-- Blog Post (Right Sidebar) Start -->
            <div class="col-md-9">
                <div class="col-md-12 page-body">
                    <div class="row">


                        <div class="sub-title">
                            <h2>My Blog</h2>
                            <a href="{{ url("/contact") }}"><i class="icon-envelope"></i></a>
                        </div>


                        <div class="col-md-12 content-page">


                            <!-- Blog Post Start -->
                            <div class="col-md-12 blog-post">
                                <div class="post-title">
                                    <a href="{{ url("/single") }}"><h1>How to make your company website based on bootstrap framework on localhost?</h1></a>
                                </div>
                                <div class="post-info">
                                    <span>November 23, 2016 / by <a href="{{ url("#") }}" target="_blank">Me MEMEM</a></span>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae ut ratione similique temporibus tempora dicta soluta? Qui hic, voluptatem nemo quo corporis dignissimos voluptatum debitis cumque fugiat mollitia quasi quod. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae ut ratione similique.</p>
                                <a href="{{ url("/single") }}" class="button button-style button-anim fa fa-long-arrow-right"><span>Read More</span></a>
                            </div>
                            <!-- Blog Post End -->



                            <!-- Blog Post Start -->
                            <div class="col-md-12 blog-post">
                                <div class="post-title">
                                    <a href="{{ url("/single") }}"><h1>How to design elegant e-mail newsletter in html for wish christmas to your subscribers?</h1></a>
                                </div>
                                <div class="post-info">
                                    <span>November 23, 2016 / by <a href="{{ url("#") }}" target="_blank">Me MEMEM</a></span>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae ut ratione similique temporibus tempora dicta soluta? Qui hic, voluptatem nemo quo corporis dignissimos voluptatum debitis cumque fugiat mollitia quasi quod. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae ut ratione similique.</p>
                                <a href="{{ url("/single") }}" class="button button-style button-anim fa fa-long-arrow-right"><span>Read More</span></a>
                            </div>
                            <!-- Blog Post End -->



                            <!-- Blog Post Start -->
                            <div class="col-md-12 blog-post">
                                <div class="post-image">
                                    <img src="{{ asset("/images/blog/1.jpg") }}" alt="">
                                </div>
                                <div class="post-title">
                                    <a href="{{ url("/single") }}"><h1>Make mailchimp singup form working with ajax using jquery plugin</h1></a>
                                </div>
                                <div class="post-info">
                                    <span>November 23, 2016 / by <a href="{{ url("#") }}" target="_blank">Me MEMEM</a></span>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae ut ratione similique temporibus tempora dicta soluta? Qui hic, voluptatem nemo quo corporis dignissimos voluptatum debitis cumque fugiat mollitia quasi quod. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae ut ratione similique.</p>
                                <a href="{{ url("/single") }}" class="button button-style button-anim fa fa-long-arrow-right"><span>Read More</span></a>
                            </div>
                            <!-- Blog Post End -->



                            <!-- Blog Post Start -->
                            <div class="col-md-12 blog-post">
                                <div class="post-title">
                                    <a href="{{ url("/single") }}"><h1>Develop a custom wordpress membership plugin from scratch using framework on localhost - part 1</h1></a>
                                </div>
                                <div class="post-info">
                                    <span>November 23, 2016 / by <a href="{{ url("#") }}" target="_blank">Me MEMEM</a></span>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae ut ratione similique temporibus tempora dicta soluta? Qui hic, voluptatem nemo quo corporis dignissimos voluptatum debitis cumque fugiat mollitia quasi quod. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae ut ratione similique.</p>
                                <a href="{{ url("/single") }}" class="button button-style button-anim fa fa-long-arrow-right"><span>Read More</span></a>
                            </div>
                            <!-- Blog Post End -->



                            <!-- Blog Post Start -->
                            <div class="col-md-12 blog-post">
                                <div class="post-title">
                                    <a href="{{ url("/single") }}"><h1>How to customize a wordpress theme entirely from scratch using a child theme?</h1></a>
                                </div>
                                <div class="post-info">
                                    <span>November 23, 2016 / by <a href="{{ url("#") }}" target="_blank">Me MEMEM</a></span>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae ut ratione similique temporibus tempora dicta soluta? Qui hic, voluptatem nemo quo corporis dignissimos voluptatum debitis cumque fugiat mollitia quasi quod. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae ut ratione similique.</p>
                                <a href="{{ url("/single") }}" class="button button-style button-anim fa fa-long-arrow-right"><span>Read More</span></a>
                            </div>
                            <!-- Blog Post End -->



                            <!-- Blog Post Start -->
                            <div class="col-md-12 blog-post">
                                <div class="post-image">
                                    <img src="{{ asset("/images/blog/2.jpg") }}" alt="">
                                </div>
                                <div class="post-title">
                                    <a href="{{ url("/single") }}"><h1>What makes wordpress a unique and highly customizable platform from competitors?</h1></a>
                                </div>
                                <div class="post-info">
                                    <span>November 23, 2016 / by <a href="{{ url("#") }}" target="_blank">Me MEMEM</a></span>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae ut ratione similique temporibus tempora dicta soluta? Qui hic, voluptatem nemo quo corporis dignissimos voluptatum debitis cumque fugiat mollitia quasi quod. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae ut ratione similique.</p>
                                <a href="{{ url("/single") }}" class="button button-style button-anim fa fa-long-arrow-right"><span>Read More</span></a>
                            </div>
                            <!-- Blog Post End -->



                            <!-- Blog Post Start -->
                            <div class="col-md-12 blog-post">
                                <div class="post-title">
                                    <a href="{{ url("/single") }}"><h1>What mistakes every beginner make, when they make website using bootstrap?</h1></a>
                                </div>
                                <div class="post-info">
                                    <span>November 23, 2016 / by <a href="{{ url("#") }}" target="_blank">Me MEMEM</a></span>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae ut ratione similique temporibus tempora dicta soluta? Qui hic, voluptatem nemo quo corporis dignissimos voluptatum debitis cumque fugiat mollitia quasi quod. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae ut ratione similique.</p>
                                <a href="{{ url("/single") }}" class="button button-style button-anim fa fa-long-arrow-right"><span>Read More</span></a>
                            </div>
                            <!-- Blog Post End -->


                            <div class="col-md-12 text-center">
                                <a href="{{ url("javascript:void(0)") }}" id="load-more-post" class="load-more-button">Load</a>
                                <div id="post-end-message"></div>
                            </div>

                        </div>

                    </div>



                    <!-- Subscribe Form Start -->
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
                    <!-- Subscribe Form End -->

                </div>


                <!-- Footer Start -->
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
            <!-- Blog Post (Right Sidebar) End -->

        </div>
    </div>
</div>

@endsection
