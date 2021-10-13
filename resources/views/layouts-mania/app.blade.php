<!DOCTYPE html>
<html lang="ko">
    <head>
        <title>taxify</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="keywords" content="">
        <meta name="description" content="">

        @yield('head_attach')

        <link type="text/css" rel="stylesheet" href="/mania/dev/change.css">
        <link type="text/css" rel="stylesheet" href="/mania/dev/global.css">

    </head>

    <body>
        <div id="g_SLEEP" class="g_sleep g_hidden">
            <div id="g_OVERLAY" class="g_overlay"></div>
        </div>
        <div class="g_body" id="g_BODY">
            @include('layouts-mania.header')
            @yield('content')
            @include('layouts-mania.footer')
        </div>

        @yield('foot_attach')

        <script type="text/javascript">
            var _LOGINCHECK = '1';
            _initialize();
        </script>
    </body>
</html>
