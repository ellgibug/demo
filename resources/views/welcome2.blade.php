<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>Welcome2</title>
    <link href="{{ asset('css/fullpage.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom-welcome-page.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,900" rel="stylesheet">

    <!--[if IE]>
    <script type="text/javascript">
        var console = { log: function() {} };
    </script>
    <![endif]-->

    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/parallax.js') }}"></script>
    <script src="{{ asset('js/fullpage.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            // Initializing fullpage.js
            initialize(false);
            function initialize(hasScrollBar){
                $('#myContainer').fullpage({
                    anchors: ['firstPage', 'secondPage', '3rdPage', '4thpage'],
                    menu: '#menu',
                    slidesNavigation: true,
                    parallax: true,
                    parallaxKey: 'YWx2YXJvdHJpZ28uY29tXzlNZGNHRnlZV3hzWVhnPTFyRQ==',
                    parallaxOptions: {
                        type: 'reveal', //cover
                        percentage: 62,
                        property: 'translate'
                    },
                    scrollingSpeed: 1000,
                    autoScrolling: true, //hasScrollBar
                    scrollBar: false,
                    fitToSection:false
                });
            }
        });
    </script>

    <style>
        h1{
            font-weight: 900;
            font-size: 8em;
            -webkit-text-shadow: 0 .3rem .9rem rgba(0,0,0,.4);
            text-shadow: 0 0.3rem 0.9rem rgba(0,0,0,.4);
            letter-spacing: -3px;
        }
        h1,
        .intro p{
            color: #fff;
            font-family: 'Source Sans Pro', sans-serif;
        }
        .intro p{
            text-shadow: -1px 1px 8px rgba(0,0,0,.8);
        }
        #section1 h1{
            -webkit-text-shadow: none;
            text-shadow: none;
        }
        #slide1-1 h1{
            color: #444;
        }
        /*
        * Setting the backgrounds for each section / slide
        */
        #section4 .fp-bg:before,
        #section2 .fp-bg:before{
            content: '';
            position: absolute;
            display: block;
            background: rgba(173, 173, 173, 0.2);
            top:0;
            bottom:0;
            height: 100%;
            width: 100%;
        }
        .fp-bg{
            background-size: cover;
            transform: translate3d(0,0,0);
            -webkit-backface-visibility: hidden; /* Chrome, Safari, Opera */
            backface-visibility: hidden;
        }
        #slide1-1 .fp-bg{
            background-image: url('https://photofiles.alphacoders.com/181/18113.jpg');
            background-position: center 80%;
        }
        #slide1-2 .fp-bg{
            background-image: url('');
        }
        #slide1-3 .fp-bg{
            background-image: url('');
        }

        #section2 .fp-bg{
            background-image: url('http://oboi.cc/uploads/11_05_2013/view/201209/oboik.ru_35414.jpg');
            background-position: center 60%;
        }
        #section2 h1{
            color: #fff;
        }
        #slide3-1 .fp-bg{
            background-image: url('http://annenoise.com/wallpapers/photos/Nature/QyGnULR.jpg');
            background-position: 50% 65%;
        }
        #slide3-2 .fp-bg{
            background-image: url('imgs/parallax/parallax-3-2.jpg');
        }
        #slide3-3 .fp-bg{
            background-image: url('imgs/parallax/parallax-3-3.jpg');
        }
        #slide3-4 .fp-bg{
            background-image: url('imgs/parallax/parallax-3-4.jpg');
        }
        #section4 .fp-bg{
            background-image: url('imgs/parallax/parallax-4.jpg');
        }
        .button a.button-purchase:hover {
            background-color: #3cc63c !important;
            color: #fff !important;
        }
        .button-purchase{
            background: #fff !important;
            color: #000 !important;
        }
        .documentation a{
            font-size: 13px;
            margin: 20px 0;
            padding: 0;
            color: #222;
        }
        #menu ul li{
            border: 2px solid white;
            padding: 5px 8px;
            margin:8px 5px 8px 0px;
            box-sizing: border-box;
        }
        #menu ul li a{
            text-decoration: none;
            color: #fff;
            font-weight: 600;
        }
        #menu ul li:hover{
            background-color: rgba(255, 255, 255, 0.2);
            transition: background-color 0.5s;
            cursor: pointer;
        }

        #menu .main-items{
            float: left;
        }
        #menu .auth{
            float: right;
        }
        .navbar-toggler{
            border: 2px solid white;
            border-radius: none;
        }
    </style>
</head>

<body>


<div id="menu">
    @include('layouts.navbar')

</div>


</div>
{{--<div class="" id="navbar">--}}
    {{--<ul id="menu">--}}
        {{--<li data-menuanchor="firstPage"><a href="#firstPage">First slide</a></li>--}}
        {{--<li data-menuanchor="secondPage"><a href="#secondPage">Second slide</a></li>--}}
        {{--<li data-menuanchor="3rdPage"><a href="#3rdPage">Third slide</a></li>--}}
        {{--<li data-menuanchor="4thpage"><a href="#4thpage">Fourth slide</a></li>--}}
        {{--<li ><a href="#">Login</a></li>--}}
    {{--</ul>--}}

{{--</div>--}}




<div id="myContainer">

    <div class="section" id="section1">
        <div class="slide" id="slide1-1">
            <div class="fp-bg"></div>
            <h1>PARALLAX</h1>
            <p>Use `parallax: true`. Made easy.</p>
            <div class="button" id="download">
                <a href="https://gum.co/fullpageParallax" class="button-purchase">I want it!</a>
            </div>
            <p class="documentation">
                <a href="https://github.com/alvarotrigo/fullPage.js/wiki/Extension---Parallax">Documentation</a>
            </p>

        </div>
        <div class="slide" id="slide1-2">
            <div class="fp-bg"></div>
            <div class="intro">
                <h1>fullPage.js</h1>
                <img src="imgs/parallax/trusted.png" />
            </div>
        </div>
        <div class="slide" id="slide1-3">
            <div class="fp-bg"></div>
            <div class="intro">
                <h1>Free support</h1>
                <p>Extension issues are supported at no extra cost!</p>
            </div>
        </div>
    </div>
    <div class="section" id="section2">
        <div class="fp-bg" id="section2"></div>
        <div class="intro">
            <h1>FLEXIBLE</h1>
            <p>Put not limits to yourself</p>
            <p>Use parallax even without scroll bar!</p>
        </div>
    </div>
    <div class="section" id="section3">
        <div class="slide" id="slide3-1">
            <div class="fp-bg"></div>
            <div class="intro">
                <h1>TAKE CONTROL</h1>
                <p>Totally configurable.</p>
                <p>For sections & slides! </p>
            </div>
        </div>
        <div class="slide" id="slide3-2">
            <div class="fp-bg"></div>
            <div class="intro">
                <h1>GUARRANTEE</h1>
                <p>30 days money back guarratee if no domain was activated.</p>
            </div>
        </div>
        <div class="slide" id="slide3-3">
            <div class="intro">
                <div class="fp-bg"></div>
                <h1>TRUSTED</h1>
                <p>Join thoudands of other developers who trusted fullPage.js extensions!</p>
            </div>
        </div>
        <div class="slide" id="slide3-4">
            <div class="fp-bg"></div>
            <div class="intro">
                <h1>DOCUMENTED</h1>
                <p>If fullPage.js is known for one thing it's for its great documentation!</p>
            </div>
        </div>
    </div>
    <div class="section" id="section4">
        <div class="fp-bg"></div>
        <div class="intro">
            <h1>IMPRESS</h1>
            <p>Take it to the next level!</p>
        </div>
    </div>

</div>


</body>
</html>
