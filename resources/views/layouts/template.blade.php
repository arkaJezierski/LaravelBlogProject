<!DOCTYPE html>
<html lang="pl">

<head>

    <!-- Meta Tag -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- SEO -->
    <meta name="description" content="150 words">
    <meta name="author" content="ME">
    <meta name="url" content="http://www.testBlog.com">
    <meta name="copyright" content="What the Template Company">
    <meta name="robots" content="index,follow, unavailable_after: 2023-07-13">


    <title>DevBlog - Personal Blog Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset("/images/favicon/favicon.ico") }}">
    <link rel="apple-touch-icon" sizes="144x144" type="image/x-icon" href="{{ asset("/images/favicon/apple-touch-icon.png") }}">

    <!-- All CSS Plugins -->
    <link rel="stylesheet" type="text/css" href="{{ asset("/css/plugin.css") }}">

    <!-- Main CSS Stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{ asset("/css/style.css") }}">

    <!-- Google Web Fonts  -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700">

    <!-- Syntax Highlighter  -->
    <link rel="stylesheet" type="text/css" href="{{ asset("/css/syntax/shCore.css") }}">
    <link rel="stylesheet" type="text/css" href="{{ asset("/css/syntax/shThemeDefault.css") }}">


    <!-- HTML5 shiv and Respond.js support IE8 or Older for HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>

<body>



<!-- Preloader Start -->
<div class="preloader">
    <div class="rounder"></div>
</div>
<!-- Preloader End -->



<div class="navbar">
    <a href="/">Home</a>
    <a href="/about">About</a>
    <a href="/contact">Contact</a>
    <a href="/single">Single</a>
    <a href="/work">Work</a>
    <a href="/dashboard">Dashboard</a>
    <div class="navbarauth">
        @guest
            @if (Route::has('login'))
                <a href="{{ route('login') }}">{{ __('Login') }}</a>
            @endif

            @if (Route::has('register'))
                 <a href="{{ route('register') }}">{{ __('Register') }}</a>
            @endif
        @else
            <a class="dropdown-item" href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                 document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }}
            </a>
        @endguest
    </div>
</div>

@yield('content')

<!-- Back to Top Start -->
<a href="{{ url("#") }}" class="scroll-to-top"><i class="fa fa-long-arrow-up"></i></a>
<!-- Back to Top End -->


<!-- All Javascript Plugins  -->
<script type="text/javascript" src="{{ asset("/js/jquery.min.js") }}"></script>
<script type="text/javascript" src="{{ asset("/js/plugin.js") }}"></script>

<!-- Main Javascript File  -->
<script type="text/javascript" src="{{ asset("/js/scripts.js") }}"></script>

<!-- Syntax Highlighter Javascript File  -->
<script type="text/javascript" src="{{ asset("/js/syntax/shCore.js") }}"></script>
<script type="text/javascript" src="{{ asset("/js/syntax/shBrushCss.js") }}"></script>
<script type="text/javascript" src="{{ asset("/js/syntax/shBrushJScript.js") }}"></script>
<script type="text/javascript" src="{{ asset("/js/syntax/shBrushPerl.js") }}"></script>
<script type="text/javascript" src="{{ asset("/js/syntax/shBrushPhp.js") }}"></script>
<script type="text/javascript" src="{{ asset("/js/syntax/shBrushPlain.js") }}"></script>
<script type="text/javascript" src="{{ asset("/js/syntax/shBrushPython.js") }}"></script>
<script type="text/javascript" src="{{ asset("/js/syntax/shBrushRuby.js") }}"></script>
<script type="text/javascript" src="{{ asset("/js/syntax/shBrushSql.js") }}"></script>
<script type="text/javascript" src="{{ asset("/js/syntax/shBrushVb.js") }}"></script>
<script type="text/javascript" src="{{ asset("/js/syntax/shBrushXml.js") }}"></script>

<!-- Syntax Highlighter Call Function -->
<script type="text/javascript">
    SyntaxHighlighter.config.clipboardSwf = 'js/syntax/clipboard.swf';
    SyntaxHighlighter.all();
</script>


</body>
</html>
