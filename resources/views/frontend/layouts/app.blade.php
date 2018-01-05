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
        @langRTL
            {{ Html::style(getRtlCss(mix('css/frontend.css'))) }}
        @else
            {{ Html::style(mix('css/frontend.css')) }}
        @endif

        @yield('after-styles')

        <!-- Scripts -->
        <script>
            window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
            ]); ?>
        </script>
        <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://res.wx.qq.com/open/js/jweixin-1.2.0.js"></script>

        {{--<script>--}}
            {{--$(function(){--}}

                {{--document.id='normal';--}}
                {{--var iframe = $('#frame1')[0];--}}
                {{--var IDoc = iframe.contentDocument || iframe.contentWindow.document; // w/o context--}}

                {{--function addHtml(){--}}
                    {{--IDoc.open();--}}
                    {{--IDoc.write($('#html').val());--}}
                    {{--IDoc.close();--}}
                {{--}--}}

                {{--function addJS(){--}}
                    {{--var str   = $('#js').val();--}}
                    {{--//from $('xxx') to $('#frame1').contents().find('xxx');--}}
                    {{--var regex = /(\$\(('|"))([a-zA-Z0-9#>=<\[\]:'"_.-]*)(('|")\))/g;--}}
                    {{--var str= $('#js').val().replace(regex, "$('#frame1').contents().find('$3$4");--}}
                    {{--//from document to this.frames[0].document--}}
                    {{--var reg = new RegExp("document", "g");--}}
                    {{--var str2= str.replace(reg,'this.frames[0].document');--}}
                    {{--IDoc.fn = new Function(str2);--}}
                    {{--IDoc.fn();--}}
                {{--}--}}

                {{--function addStyle (){--}}
                    {{--var style = document.createElement('style');--}}
                    {{--style.type = 'text/css';--}}
                    {{--style.innerHTML =  $('#css').val();--}}
                    {{--IDoc.getElementsByTagName('head')[0].appendChild(style);--}}
                {{--}--}}

                {{--$('#go').click(function(){--}}
                    {{--addHtml();--}}
                    {{--addJS();--}}
                    {{--addStyle();--}}
                {{--});--}}
            {{--});--}}
        {{--</script>--}}
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
            @include('frontend.includes.nav')

            <div class="container">
                {{--@include('includes.partials.messages')--}}
                @yield('content')
            </div><!-- container -->
        </div><!--#app-->

        <!-- Scripts -->
        @yield('before-scripts')
        {!! Html::script(mix('js/frontend.js')) !!}
        @yield('after-scripts')

        @include('includes.partials.ga')
    </body>
</html>