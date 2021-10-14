@extends('layouts-mania.app')

@section('head_attach')
    <link type="text/css" rel="stylesheet" href="/mania/_css/_comm.min.css?v=210317">
    <link type="text/css" rel="stylesheet" href="/mania/_head_tail/css/_head_comm.css?v=211007">
    <link type="text/css" rel="stylesheet" href="/mania/_banner/css/banner_module.css?v=210422">
    <link type='text/css' rel='stylesheet' href='/mania/sell/css/view.css?v=210104'>
    <script type="text/javascript" src="/mania/advertise/advertise_code_head.js?v=200727"></script>
    <script type="text/javascript" src="/mania/_banner/js/banner_module.js?v=210209"></script>
@endsection

@section('foot_attach')
    <script type="text/javascript" src="/mania/_js/_jquery3.js?v=190220"></script>
    <script type="text/javascript" src="/mania/_js/_comm.js?v=21100516"></script>
    <script type="text/javascript" src="/mania/_js/_gs_control_200924.js?v=21100816"></script>
    <script type="text/javascript" src="/mania/_js/_common_initialize_new.js?v=21050316"></script>
    <script type='text/javascript' src='/mania/sell/js/view.js?v=200528'></script>
    <script type='text/javascript'>
        g_trade_info.sale = 'general';
        g_trade_info.trade_money = 3000;
        function __init() {
            g_trade_info.goods='';
        }
    </script>
@endsection

@section('content')
<!--▼▼▼ 캐릭터 등롤 알리미 ▼▼▼ -->
<div class="g_container" id="g_CONTENT">
    <input type="hidden" id="screenshot_info" value="TiUzQg==">
    <div class="aside">
        <div class="title_blue">안전거래수칙</div>
        <div class="menu_know">
            <p>주의사항</p>
            <dl class="g_list"> <dt>구매 신청 시</dt>
                <dd>구매할 물품 수량 확인</dd>
                <dd>구매할 물품 내용 확인</dd>
                <dd>구매할 물품 가격 확인</dd> <dt>거래 진행 시</dt>
                <dd>입금 확인 후 판매자 연락처 확인</dd>
                <dd>등록된 연락처로만 통화하기</dd>
                <dd>예약거래 절대 하지 않기</dd>
                <dd>받은 물품 되돌려주지 않기</dd>
            </dl>
        </div>
        <div style="margin-top:15px;text-align:center;">
            <script src="https://compass.adop.cc/assets/js/adop/adopJ.js?v=14"></script><ins class="adsbyadop" _adop_zon="d7a9af59-70d9-41d8-a432-e105ad08348d" _adop_type="re" style="display:inline-block;width:200px;height:200px;" _page_url=""></ins></div>
    </div>
    <div class="g_content">
        <div class="g_title_blue"> 팝니다
            <ul class="g_path">
                <li>홈</li>
                <li class="select">팝니다</li>
            </ul>
        </div>
        <a name="top"></a>
        <form name="frmSell" id="frmSell">
            <div class="g_subtitle">물품정보 </div>
            <table class="g_blue_table">
                <colgroup>
                    <col width="160">
                    <col width="250">
                    <col width="160">
                    <col /> </colgroup>
                <tr>
                    <th>카테고리</th>
                    <td colspan="3">AuraKingdom > 기타 > 기타</td>
                </tr>
                <tr>
                    <th>물품제목</th>
                    <td colspan="3"> 기타 팝니다.
                        <!-- 퀵 아이콘 -->
                    </td>
                </tr>
                <tr>
                    <th>거래번호</th>
                    <td>#2021101408177351</td>
                    <th>등록일시</th>
                    <td>2021-10-14 14:41:55</td>
                </tr>
                <tr>
                    <th>구매금액</th>
                    <td colspan='3'>3,000원</td>
                </tr>
            </table>
        </form>
        <div class="g_subtitle"> 판매자정보
            <div class="g_right">
                <a href="javascript:fnCreditViewCheck()"><img src="http://img3.itemmania.com/images/btn/btn_credit_view.gif" width="122" height="20" alt="자세히보기"></a>
            </div>
        </div>
        <div class="certify_info">
            <div class="seller_info"> <span class="credit_mark platinum">P</span> <strong class="platinum_txt">플래티넘 회원</strong> (거래점수 : 883점) </div>
            <dl class="add_info"> <dt>인증상태</dt>
                <dd> <span class='cert_state'>우수인증</span><span class='cert_state on'>휴대폰</span><span class='cert_state'>이메일</span><span class='cert_state on'>출금계좌</span> </dd>
            </dl>
        </div>
        <div class="g_subtitle">거래 사기 실시간 조회 서비스</div>
        <div class="box6 trade_fraud" id="trade_fraud">
            <div> ※ 물품등록의 거래사기 피해사례를 확인하세요 <a href="javascript:;" data-type="user" class="srh_btn">조회</a>
                <input type="hidden" id="FraudTrade_id" value="2021101408177351"> </div>
            <div class="direct">
                <input type="text" name="srh_txt" id="srh_txt" class="g_text" placeholder="휴대폰번호/계좌번호"> <a href="javascript:;" data-type="direct" class="srh_btn">조회</a> </div>
        </div>
        <div class="g_btn_wrap">
            <a href="application.html?id=2021101408177351&continue=YTozNzp7czo5OiJnYW1lX2NvZGUiO3M6NDoiMjQxMiI7czoxMToic2VydmVyX2NvZGUiO3M6NToiMTA1NzUiO3M6OToiZ2FtZV9uYW1lIjtzOjExOiJBdXJhS2luZ2RvbSI7czoxMToic2VydmVyX25hbWUiO3M6Njoi6riw7YOAIjtzOjEyOiJzZWFyY2hfZ29vZHMiO3M6MzoiZXRjIjtzOjExOiJzZWFyY2hfd29yZCI7TjtzOjQ6InR5cGUiO3M6NDoic2VsbCI7czoxMjoic2VhcmNoX29yZGVyIjtzOjE6IjIiO3M6MTQ6InNlYXJjaF9yZWZlcmVyIjtzOjE2OiJsaXN0X3NlYXJjaC5odG1sIjtzOjExOiJ0cmFkZV9zdGF0ZSI7czoxOiIxIjtzOjg6InJlZ190aW1lIjtzOjE6IjEiO3M6MTE6ImNyZWRpdF90eXBlIjtzOjE6IjEiO3M6MTA6Imdvb2RzX3R5cGUiO3M6MToiMSI7czo2OiJjb21wZW4iO047czoxMToic2VsbF9jb21wZW4iO047czo3OiJkaXNjb250IjtOO3M6Nzoib3ZlcmxhcCI7TjtzOjk6ImV4Y2VsbGVudCI7TjtzOjc6ImFtb3VudDEiO3M6MToiMSI7czo3OiJhbW91bnQyIjtzOjg6Ijk5OTk5OTk5IjtzOjc6ImFtb3VudDMiO3M6MToiMSI7czo3OiJhbW91bnQ0IjtzOjg6Ijk5OTk5OTk5IjtzOjEyOiJzZWFyY2hfdHlwZTEiO047czoxMjoic2VhcmNoX3R5cGUyIjtOO3M6MTU6Im1vbmV5X2xpc3Rfcm93cyI7TjtzOjEzOiJnZW5fbGlzdF9yb3dzIjtOO3M6MTY6InNyY2hfaXRlbV9kZXB0aDEiO047czoxNjoic3JjaF9pdGVtX2RlcHRoMiI7TjtzOjE2OiJzcmNoX2l0ZW1fZGVwdGgzIjtOO3M6MTY6InNyY2hfaXRlbV9kZXB0aDQiO047czo2OiJkaXJlY3QiO047czoxMjoiYWNjb3VudF90eXBlIjtOO3M6MTM6InB1cmNoYXNlX3R5cGUiO047czoxNzoicGF5bWVudF9leGlzdGVuY2UiO047czoxMjoibXVsdGlfYWNjZXNzIjtOO3M6MTU6InNyY2hfY2hhcl9hbGFybSI7TjtzOjk6ImJMaW5lYWdlTSI7YjowO30="><img src="http://img2.itemmania.com/new_images/btn/btn_buy.gif" width="137" height="46" alt="구매신청"></a>
        </div>
        <!-- ▼ 상세설명 //-->
        <div class="g_subtitle"> 상세설명 <a href="javascript:;" class="wideview" id="wideview">펼쳐보기▼</a> </div>
        <div class="detail_info" id="detail_info">
            <div class="detail_text"> 기타&nbsp;팝니다.
                <br> </div>
        </div>
        <!-- ▲ 상세설명 //-->
        <div class="g_right">
            <a href='/sell/list_search.html?pinit=1&continue=YTozNzp7czo5OiJnYW1lX2NvZGUiO3M6NDoiMjQxMiI7czoxMToic2VydmVyX2NvZGUiO3M6NToiMTA1NzUiO3M6OToiZ2FtZV9uYW1lIjtzOjExOiJBdXJhS2luZ2RvbSI7czoxMToic2VydmVyX25hbWUiO3M6MTg6IiVFQSVCOCVCMCVFRCU4MyU4MCI7czoxMjoic2VhcmNoX2dvb2RzIjtzOjM6ImV0YyI7czoxMToic2VhcmNoX3dvcmQiO3M6MDoiIjtzOjQ6InR5cGUiO3M6NDoic2VsbCI7czoxMjoic2VhcmNoX29yZGVyIjtzOjE6IjIiO3M6MTQ6InNlYXJjaF9yZWZlcmVyIjtzOjE2OiJsaXN0X3NlYXJjaC5odG1sIjtzOjExOiJ0cmFkZV9zdGF0ZSI7czoxOiIxIjtzOjg6InJlZ190aW1lIjtzOjE6IjEiO3M6MTE6ImNyZWRpdF90eXBlIjtzOjE6IjEiO3M6MTA6Imdvb2RzX3R5cGUiO3M6MToiMSI7czo2OiJjb21wZW4iO047czoxMToic2VsbF9jb21wZW4iO047czo3OiJkaXNjb250IjtOO3M6Nzoib3ZlcmxhcCI7TjtzOjk6ImV4Y2VsbGVudCI7TjtzOjc6ImFtb3VudDEiO3M6MToiMSI7czo3OiJhbW91bnQyIjtzOjg6Ijk5OTk5OTk5IjtzOjc6ImFtb3VudDMiO3M6MToiMSI7czo3OiJhbW91bnQ0IjtzOjg6Ijk5OTk5OTk5IjtzOjEyOiJzZWFyY2hfdHlwZTEiO047czoxMjoic2VhcmNoX3R5cGUyIjtOO3M6MTU6Im1vbmV5X2xpc3Rfcm93cyI7TjtzOjEzOiJnZW5fbGlzdF9yb3dzIjtOO3M6MTY6InNyY2hfaXRlbV9kZXB0aDEiO047czoxNjoic3JjaF9pdGVtX2RlcHRoMiI7TjtzOjE2OiJzcmNoX2l0ZW1fZGVwdGgzIjtOO3M6MTY6InNyY2hfaXRlbV9kZXB0aDQiO047czo2OiJkaXJlY3QiO047czoxMjoiYWNjb3VudF90eXBlIjtOO3M6MTM6InB1cmNoYXNlX3R5cGUiO047czoxNzoicGF5bWVudF9leGlzdGVuY2UiO047czoxMjoibXVsdGlfYWNjZXNzIjtOO3M6MTU6InNyY2hfY2hhcl9hbGFybSI7TjtzOjk6ImJMaW5lYWdlTSI7YjowO30='><img src="http://img4.itemmania.com/images/btn/btn_list.gif" width="32" height="14" alt="목록"></a>
            <a href="#top"><img src="http://img4.itemmania.com/images/btn/btn_top.gif" width="32" height="14" alt="TOP"></a>
        </div>
        <div class="g_finish"></div>
        <div style="margin-top:15px;text-align:center;">
            <iframe src="http://vod.shoppingcall.me/ad_shoppingCallme.php?aid=433" frameborder="0" marginheight="0" marginwidth="0" scrolling="no" width="820" height="76"></iframe>
        </div>
    </div>
    <!-- ▼ 거래 사기 실시간 조회 결과 //-->
    <div id="fraud_result" class="g_popup fraud_result">
        <div class="layer_title"> 거래 사기 실시간 조회 결과
            <a href="javascript:g_nodeSleep.disable($('#fraud_result'))" class="btn_close"></a>
        </div>
        <div class="layer_content">
            <div class="result"> </div>
            <div class="info_txt"> 피해사례 게시물 내용에 대해 아이템매니아는 보증하지 않으며,
                <br> 게시물의 법적 책임은 더치트 피해사례 등록자에게 있습니다. </div>
        </div>
    </div>
    <!-- ▲ 거래 사기 실시간 조회 결과 //-->
    <form id="creditForm" name="creditForm" method="post">
        <input type="hidden" id="infoId" value="d8b16a8a27778da8792dc32e5d5aaeb7">
        <input type="hidden" name="id" id="encryptId">
        <input type="hidden" name="type" id="encryptType"> </form>
    <div class="g_finish"></div>
</div>
<!-- ▲ 컨텐츠 영역 //-->
@endsection
