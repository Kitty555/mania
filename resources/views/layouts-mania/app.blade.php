<!DOCTYPE html>
<html lang="ko">
    <head>
        <title>아이템매니아</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="keywords" content="디아블로3 블레이드앤소울 DK온라인 트로이온라인 반온라인 리그오브레전드 리니지 던전앤파이터 아이온 메이플스토리 리니지2 바람의나라 테라 서든어택 마구마구 월드오브크래프트 마비노기 다크에덴 마비노기영웅전 삼국지W 야구9단 SD삼국지 리프트 파인딩네버랜드 구검온라인 룰더스카이 삼국지천하제패W 아이모 엘가드 카오스베인 컴투스프로야구2012 사이퍼즈 모나크 영웅시대30 청풍명월 반온라인 신선도 구검온라인 아이탬매니아 아이템 아이템매니아 아이템메니아 와우 테일즈위버">
        <meta name="description" content="아이템거래 No.1 아이템매니아 아이템매니아(itemmania) 온라인 게임 아이템거래 중개사이트, 리니지, 리니지2, 던파, 메이플스토리, 바람의나라, wow 등 팝니다 및 삽니다 게임머니, 게임별 시세제공, 즉시입출금, 이벤트, 게임뉴스, 24시간 안전거래, 랭키닷컴 1위 아이템매니아.">
        <meta name="google-site-verification" content="K0la0dZHi2DlUBqr4vrHlE2xa4_gGSv1QhLZMD6FOIo">
        <link rel="shortcut icon" href="http://img1.itemmania.com/images/icon/favicon.ico">

        @if(in_array(request()->route()->getName(), ['index']))
        <link type="text/css" rel="stylesheet" href="/assets/css/mania/main/_banner.css">
        <?php $stylePath = "main"; ?>
        @elseif(in_array(request()->route()->getName(), ['sell', 'buy']))
        <?php $stylePath = "sell"; ?>
        @elseif(in_array(request()->route()->getName(), ['character']))
        <?php $stylePath = "chr"; ?>
        @elseif(in_array(request()->route()->getName(), ['myroom']))
        <?php $stylePath = "myroom"; ?>
        @elseif(in_array(request()->route()->getName(), ['event']))
        <?php $stylePath = "event"; ?>
        @elseif(in_array(request()->route()->getName(), ['guide']))
        <?php $stylePath = "guide"; ?>
        @endif

        <link type="text/css" rel="stylesheet" href="/assets/css/mania/{{$stylePath}}/_comm.css">
        <link type="text/css" rel="stylesheet" href="/assets/css/mania/{{$stylePath}}/_head_comm.css">
        <link type="text/css" rel="stylesheet" href="/assets/css/mania/{{$stylePath}}/banner_module.css">
        <link type="text/css" rel="stylesheet" href="/assets/css/mania/{{$stylePath}}/index.css">

        <script type="text/javascript" src="/assets/js/mania/banner_module.js"></script>
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.js"></script>
        <script type="text/javascript" src="/assets/js/mania/_comm.js"></script>
        <script type="text/javascript" src="/assets/js/mania/_gs_control.js"></script>
        <script type="text/javascript" src="/assets/js/mania/_common_initialize_new.js"></script>
        <script type="text/javascript" src="/assets/js/mania/{{$stylePath}}/index.js"></script>
        <script type="text/javascript">
            var _LOGINCHECK = '1';
            _initialize();
        </script>
    </body>
</html>
