@extends('layouts-mania.app')

@section('head_attach')
<link type="text/css" rel="stylesheet" href="/mania/_css/_comm.min.css?v=210317">
<link type="text/css" rel="stylesheet" href="/mania/_head_tail/css/_head_comm.css?v=211007">
<link type="text/css" rel="stylesheet" href="/mania/_banner/css/banner_module.css?v=210422">
<link type="text/css" rel="stylesheet" href="/mania/sell/css/index_view.css?v=190220">
<script type="text/javascript" src="/mania/advertise/advertise_code_head.js?v=200727"></script>
<script type="text/javascript" src="/mania/_banner/js/banner_module.js?v=210209"></script>
@endsection

@section('foot_attach')
<script type="text/javascript" src="/mania/_js/_jquery3.js?v=190220"></script>
<script type="text/javascript" src="/mania/_js/_comm.min.js?v=21100516"></script>
<script type="text/javascript" src="/mania/_js/_gs_control_200924.min.js?v=21100816"></script>
<script type="text/javascript" src="/mania/_js/_common_initialize_new.min.js?v=21050316"></script>
@endsection

@section('content')
<!--▼▼▼ 캐릭터 등롤 알리미 ▼▼▼ -->
<div class="g_container" id="g_CONTENT">
    <div class="aside">
        <div class="title_blue">알아두기</div>
        <div class="menu_know">
            <p>판매물품 쉽게 등록하기</p> <img src="http://img2.itemmania.com/new_images/sell/sell_left_know.gif" width="192" height="224" alt="팝니다 쉽게 등록하기">
            <p>판매물품 등록 시 알아둘 점</p>
            <ul class="g_list">
                <li>등록자는 등록한 물품의 문제 발생 시 민/형사상의 모든 책임을 질 것에 동의하는 것으로 간주됩니다.</li>
                <li>현재 연락처로 꼭 수정해주세요.
                    <br>연락처가 불분명 시 거래에 불이익을 받으실 수 있습니다.</li>
                <li>[나만의 검색메뉴]를 이용하시면 간편하게 물품등록을 할 수 있습니다.</li>
            </ul>
        </div>
    </div>
    <div class="g_content">
        <div class="g_title_blue"> 팝니다 <span>등록</span>
            <ul class="g_path">
                <li>홈</li>
                <li class="select">판매등록</li>
            </ul>
        </div>
        <div class="box6"> <span class="reg_icon"></span>
            <p class="complete_txt">물품이 정상적으로 등록되었습니다.</p> 현재 연락처로 꼭 수정해주세요!
            <br> 연락처가 불분명 시 거래에 불이익을 받을 수 있습니다. </div>
        <div class="g_subtitle">물품정보</div>
        <table class="g_blue_table">
            <colgroup>
                <col width="130">
                <col>
                <col width="130">
                <col>
            </colgroup>
            <tr>
                <th>카테고리</th>
                <td colspan="3">AFK삼국지 > 기타 > 기타</td>
            </tr>
            <tr>
                <th>제목</th>
                <td colspan="3">기타 팝니다.</td>
            </tr>
            <tr>
                <th>거래번호</th>
                <td>#2021101311248963</td>
                <th>등록일시</th>
                <td>2021-10-13 20:52:47</td>
            </tr>
            <tr>
                <th>물품종류</th>
                <td>기타</td>
                <th>거래유형</th>
                <td>일반판매</td>
            </tr>
            <tr>
                <th>판매수량</th>
                <td>-</td>
                <th>판매금액</th>
                <td>3,000원</td>
            </tr>
            <tr>
                <th>
                    <br>신용등급별
                    <br>물품등록정보
                    <br>&nbsp;</th>
                <td colspan="3"> 21시까지 해당 ID로 9개 / IP에서 19개까지 추가등록 가능합니다.
                    <br>(추가등록 가능한 횟수에는 재등록도 포함됩니다.) <a href="/myroom/coupon/add_reg.html" class="btn_blue3 add_reg">물품추가 등록권 구매하기</a> </td>
            </tr>
        </table>
        <div id="btn_list" class="g_btn_wrap btn_list" style="display: block;">
            <a href="/myroom/sell/sell_regist_view.html?id=2021101311248963"><img src="http://img3.itemmania.com/new_images/btn/btn_sell_veiw.gif" width="190" height="46" alt="등록 물품보기"></a>
            <a href="/sell/list_search.html?pinit=1&continue=YTozNzp7czo5OiJnYW1lX2NvZGUiO3M6NDoiNDczMiI7czoxMToic2VydmVyX2NvZGUiO3M6NToiMTc5NjAiO3M6OToiZ2FtZV9uYW1lIjtzOjMwOiJBRkslRUMlODIlQkMlRUElQjUlQUQlRUMlQTclODAiO3M6MTE6InNlcnZlcl9uYW1lIjtzOjE4OiIlRUElQjglQjAlRUQlODMlODAiO3M6MTI6InNlYXJjaF9nb29kcyI7czozOiJldGMiO3M6MTE6InNlYXJjaF93b3JkIjtzOjA6IiI7czo0OiJ0eXBlIjtOO3M6MTI6InNlYXJjaF9vcmRlciI7czoxOiIyIjtzOjE0OiJzZWFyY2hfcmVmZXJlciI7czoxNToiaW5kZXhfdmlldy5odG1sIjtzOjExOiJ0cmFkZV9zdGF0ZSI7czoxOiIxIjtzOjg6InJlZ190aW1lIjtzOjE6IjEiO3M6MTE6ImNyZWRpdF90eXBlIjtzOjE6IjEiO3M6MTA6Imdvb2RzX3R5cGUiO3M6MToiMSI7czo2OiJjb21wZW4iO047czoxMToic2VsbF9jb21wZW4iO047czo3OiJkaXNjb250IjtOO3M6Nzoib3ZlcmxhcCI7TjtzOjk6ImV4Y2VsbGVudCI7TjtzOjc6ImFtb3VudDEiO3M6MToiMSI7czo3OiJhbW91bnQyIjtzOjg6Ijk5OTk5OTk5IjtzOjc6ImFtb3VudDMiO3M6MToiMSI7czo3OiJhbW91bnQ0IjtzOjg6Ijk5OTk5OTk5IjtzOjEyOiJzZWFyY2hfdHlwZTEiO047czoxMjoic2VhcmNoX3R5cGUyIjtOO3M6MTU6Im1vbmV5X2xpc3Rfcm93cyI7TjtzOjEzOiJnZW5fbGlzdF9yb3dzIjtOO3M6MTY6InNyY2hfaXRlbV9kZXB0aDEiO047czoxNjoic3JjaF9pdGVtX2RlcHRoMiI7TjtzOjE2OiJzcmNoX2l0ZW1fZGVwdGgzIjtOO3M6MTY6InNyY2hfaXRlbV9kZXB0aDQiO047czo2OiJkaXJlY3QiO047czoxMjoiYWNjb3VudF90eXBlIjtOO3M6MTM6InB1cmNoYXNlX3R5cGUiO047czoxNzoicGF5bWVudF9leGlzdGVuY2UiO047czoxMjoibXVsdGlfYWNjZXNzIjtOO3M6MTU6InNyY2hfY2hhcl9hbGFybSI7TjtzOjk6ImJMaW5lYWdlTSI7YjowO30="><img src="http://img3.itemmania.com/new_images/btn/btn_sell_list.gif" width="190" height="46" alt="팝니다 물품리스트 보기"></a>
            <a href="/index.html"><img src="http://img4.itemmania.com/new_images/btn/btn_main.gif" width="190" height="46" alt="메인으로"></a>
            <a href="/myroom/sell/sell_regist.html"><img src="http://img4.itemmania.com/new_images/btn/btn_myroom.gif" width="190" height="46" alt="마이룸으로 가기"></a>
        </div>
    </div>
    <div class="g_finish"></div>
</div>
<!-- ▲ 컨텐츠 영역 //-->
@endsection
