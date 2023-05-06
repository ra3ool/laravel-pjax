<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'turbo')</title>
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

        .nav {
            display: flex;
            list-style: none;
            flex-wrap: nowrap;
            padding: 15px 35px;
            box-shadow: 0px 5px 15px gray;
        }

        .nav li {
            margin-right: 20px;
        }

        .nav li a:link {
            text-decoration: none;
            color: #840000;
        }

        .nav li a:visited {
            text-decoration: none;
            color: #840000;
        }

        .nav li a:hover {
            text-decoration: underline;
            color: #008416;
        }

        .nav li a:active {
            text-decoration: underline;
            color: #008416;
        }

        .loading{
            display: flex;
            justify-content: center;
            align-items: center;
            position: absolute;
            inset: 0;
            background-color: #d4d4d49e;
        }
    </style>


</head>

<body>
    <div class="container">
        <ul class="nav">
            <li><a data-pjax href="{{ route('home') }}">home</a></li>
            <li><a data-pjax href="{{ route('foo') }}">foo</a></li>
            <li><a data-pjax href="{{ route('bar') }}">bar</a></li>
            <li><a data-pjax href="{{ route('delay') }}">delay</a></li>
        </ul>
        <div class="loading" id="loading" style="display: none">
            <div>Loading...</div>
        </div>
        <center>
            <div id="pjax-container">
                @yield('content')
            </div>
        </center>
    </div>

    <script src="/js/jquery.min.js"></script>
    <script src="/js/jquery.pjax.min.js"></script>
    @yield('script')
</body>

</html>
