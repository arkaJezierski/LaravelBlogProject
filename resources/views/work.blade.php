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





            <!-- Portfolio (Right Sidebar) Start -->
            <div class="col-md-9">
                <div class="col-md-12 page-body">
                    <div class="row">


                        <div class="sub-title">
                            <h2>My Portfolio</h2>
                            <a href="{{ url("/contact") }}"><i class="icon-envelope"></i></a>
                        </div>


                        <div class="col-md-12 content-page">
                            <div class="col-md-12 blog-post">


                                <!-- Intro Start -->
                                <div class="post-title margin-bottom-30">
                                    <h1>Let's take a look on <span class="main-color">My Work</span></h1>
                                </div>
                                <!-- Intro End -->




                                <!-- Portfolio Start -->
                                <div>


                                    <!-- Portfolio Detail Start -->
                                    <div class="row portfolio">
                                        <div class="col-sm-6 custom-pad-1">
                                            <img src="{{ asset("/images/portfolio/1.jpg") }}" class="img-responsive" alt="">
                                        </div>


                                        <div class="col-sm-6 custom-pad-2">
                                            <div class="table-responsive">
                                                <table class="table table-bordered">
                                                    <tbody>

                                                    <tr>
                                                        <td><b>Skills</b></td>
                                                        <td>HTML5 / CSS3 / JAVASCRIPT</td>
                                                    </tr>

                                                    <tr>
                                                        <td><b>Duration</b></td>
                                                        <td>20 Days</td>
                                                    </tr>

                                                    <tr>
                                                        <td><b>Cost</b></td>
                                                        <td>$5000</td>
                                                    </tr>

                                                    <tr>
                                                        <td><b>Url</b></td>
                                                        <td><a href="http://www.uipasta.com" title="uipasta">Rolling</a></td>
                                                    </tr>

                                                    <tr>
                                                        <td><b>About Project</b></td>
                                                        <td>Lorem ipsum dolor sit amet consectetur adipiscing elit Vivamus feugiat facilisis dignissim Etiam scelerisque ultricies euismod.</td>
                                                    </tr>
                                                    </tbody>
                                                </table>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- Portfolio Detail End -->



                                    <!-- Portfolio Detail Start -->
                                    <div class="row portfolio">
                                        <div class="col-sm-6 custom-pad-1">
                                            <div class="image-carousel">
                                                <img src="{{ asset("/images/portfolio/2.jpg") }}" class="img-responsive" alt="">
                                                <img src="{{ asset("/images/portfolio/3.jpg") }}" class="img-responsive" alt="">
                                            </div>
                                        </div>


                                        <div class="col-sm-6 custom-pad-2">
                                            <div class="table-responsive">
                                                <table class="table table-bordered">
                                                    <tbody>

                                                    <tr>
                                                        <td><b>Skills</b></td>
                                                        <td>HTML5 / CSS3 / JAVASCRIPT</td>
                                                    </tr>

                                                    <tr>
                                                        <td><b>Duration</b></td>
                                                        <td>20 Days</td>
                                                    </tr>

                                                    <tr>
                                                        <td><b>Cost</b></td>
                                                        <td>$5000</td>
                                                    </tr>

                                                    <tr>
                                                        <td><b>Url</b></td>
                                                        <td><a href="http://www.uipasta.com" title="uipasta">Rolling</a></td>
                                                    </tr>

                                                    <tr>
                                                        <td><b>About Project</b></td>
                                                        <td>Lorem ipsum dolor sit amet consectetur adipiscing elit Vivamus feugiat facilisis dignissim Etiam scelerisque ultricies euismod.</td>
                                                    </tr>
                                                    </tbody>
                                                </table>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- Portfolio Detail End -->



                                    <!-- Portfolio Detail Start -->
                                    <div class="row portfolio">
                                        <div class="col-sm-6 custom-pad-1">
                                            <img src="{{ asset("/images/portfolio/4.jpg") }}" class="img-responsive" alt="">
                                        </div>


                                        <div class="col-sm-6 custom-pad-2">
                                            <div class="table-responsive">
                                                <table class="table table-bordered">
                                                    <tbody>

                                                    <tr>
                                                        <td><b>Skills</b></td>
                                                        <td>HTML5 / CSS3 / JAVASCRIPT</td>
                                                    </tr>

                                                    <tr>
                                                        <td><b>Duration</b></td>
                                                        <td>20 Days</td>
                                                    </tr>

                                                    <tr>
                                                        <td><b>Cost</b></td>
                                                        <td>$5000</td>
                                                    </tr>

                                                    <tr>
                                                        <td><b>Url</b></td>
                                                        <td><a href="http://www.uipasta.com" title="uipasta">Rolling</a></td>
                                                    </tr>

                                                    <tr>
                                                        <td><b>About Project</b></td>
                                                        <td>Lorem ipsum dolor sit amet consectetur adipiscing elit Vivamus feugiat facilisis dignissim Etiam scelerisque ultricies euismod.</td>
                                                    </tr>
                                                    </tbody>
                                                </table>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- Portfolio Detail End -->



                                    <!-- Portfolio Detail Start -->
                                    <div class="row portfolio">
                                        <div class="col-sm-6 custom-pad-1">
                                            <img src="{{ asset("/images/portfolio/6.jpg") }}" class="img-responsive" alt="">
                                        </div>


                                        <div class="col-sm-6 custom-pad-2">
                                            <div class="table-responsive">
                                                <table class="table table-bordered">
                                                    <tbody>

                                                    <tr>
                                                        <td><b>Skills</b></td>
                                                        <td>HTML5 / CSS3 / JAVASCRIPT</td>
                                                    </tr>

                                                    <tr>
                                                        <td><b>Duration</b></td>
                                                        <td>20 Days</td>
                                                    </tr>

                                                    <tr>
                                                        <td><b>Cost</b></td>
                                                        <td>$5000</td>
                                                    </tr>

                                                    <tr>
                                                        <td><b>Url</b></td>
                                                        <td><a href="http://www.uipasta.com" title="uipasta">Rolling</a></td>
                                                    </tr>

                                                    <tr>
                                                        <td><b>About Project</b></td>
                                                        <td>Lorem ipsum dolor sit amet consectetur adipiscing elit Vivamus feugiat facilisis dignissim Etiam scelerisque ultricies euismod.</td>
                                                    </tr>
                                                    </tbody>
                                                </table>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- Portfolio Detail End -->

                                </div>
                                <!-- Portfolio End -->


                            </div>

                            <div class="col-md-12 text-center">
                                <a href="{{ url("javascript:void(0)") }}" id="load-more-portfolio" class="load-more-button">Load</a>
                                <div id="portfolio-end-message"></div>
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
            <!-- Portfolio (Right Sidebar) End -->

        </div>
    </div>
</div>


@endsection
