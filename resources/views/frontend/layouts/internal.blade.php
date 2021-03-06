<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta property="og:description" content="页面描述">

    <title>未来编程学院</title>

    <!-- Meta -->
    <meta name="description" content="硅谷侠">
    <meta name="author" content="@yield('meta_author', 'Anthony Rappa')">
    @yield('meta')

    <!-- Styles -->
    @yield('before-styles')

    <!-- Check if the language is set to RTL, so apply the RTL layouts -->
    <!-- Otherwise apply the normal LTR layouts -->

    <style type="text/css" link="css/frontend.css"></style>

    @yield('after-styles')

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
            ]); ?>
        </script>
        <script src="/js/jquery.min.js"></script>
        <script src="https://res.wx.qq.com/open/js/jweixin-1.2.0.js"></script>

        <style type="text/css">
        textarea {
            width: 40%;
            height: 400px;
        }
        iframe{
            width: 40%;
            height: 400px;
        }
    </style>
</head>
<body id="app-layout">
    <div style="display:none;"><img src="http://guiguxia.liunar.com/img/1.jpg" width="300" height="300"></div>        <div id="app">
        @include('includes.partials.logged-in-as')


        <div class="container">
            {{--@include('includes.partials.messages')--}}
            @yield('content')
        </div><!-- container -->
    </div><!--#app-->

    <!-- Scripts -->
    @yield('before-scripts')
    @yield('after-scripts')

    @include('includes.partials.ga')
</body>
</html>