<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Hobnobs</title>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Hobnobs
                </div>

                <div class="links">
                    <a href="https://benargo.com" title="benargo.com">Ben Argo</a>
                    <a href="http://www.harrietcody.com" title="harrietcody.com">Harriet Cody</a>
                    <a href="http://dushyantkanungo.com" title="dushyantkanungo.com">Dushyant Kanungo</a>
                    <a href="http://gunnarpetzall.com" title="gunnarpetzall.com">Gunnar Petzäll</a>
                </div>
            </div>
        </div>
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>
        <script type="text/javascript">
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
            ga('create', 'UA-23790873-10', 'auto');
            ga('send', 'pageview');
        </script>
        <!-- Photo credit: https://www.flickr.com/photos/kristoffer-trolle/21095656222/ -->
    </body>
</html>
