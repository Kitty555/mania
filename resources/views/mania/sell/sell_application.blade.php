@extends('layouts-mania.app')

@section('head_attach')
    <link type="text/css" rel="stylesheet" href="/mania/_css/_comm.min.css?v=210317">
    <link type="text/css" rel="stylesheet" href="/mania/_head_tail/css/_head_comm.css?v=211007">
    <link type="text/css" rel="stylesheet" href="/mania/_banner/css/banner_module.css?v=210422">
    <link type="text/css" rel="stylesheet" href="/mania/sell/css/application.css?v=201221">
    <link type="text/css" rel="stylesheet" href="/mania/myroom/buy/css/buy_pay_wait_view.css?v=210427">
    <script type="text/javascript" src="/mania/advertise/advertise_code_head.js?v=200727"></script>
    <script type="text/javascript" src="/mania/_banner/js/banner_module.js?v=210209"></script>
@endsection

@section('foot_attach')
    <script type="text/javascript" src="/mania/_js/_jquery3.js?v=190220"></script>
    <script type="text/javascript" src="/mania/_js/_comm.js?v=21100516"></script>
    <script type="text/javascript" src="/mania/_js/_gs_control_200924.js?v=21100816"></script>
    <script type="text/javascript" src="/mania/_js/_common_initialize_new.js?v=21050316"></script>
    <script type='text/javascript' src='/mania/sell/js/application.js?v=210802'></script>
    <script type='text/javascript'>
        g_trade_info.curr_mileage = Number(12000);
        g_trade_info.sale	= 'general';
        g_trade_info.goods	= 'etc';
        g_trade_info.id		= '2021101408177351';
        g_trade_info.subject= '기타 팝니다.';
        g_trade_info.price	= 3000;
        g_trade_info.payment_price	= 3000;
        g_trade_info.trade_kind	= 'etc';
        g_trade_info.trade_money = 3000;
    </script>
@endsection

@section('content')
<!--▼▼▼ 캐릭터 등롤 알리미 ▼▼▼ -->
<div class="g_container" id="g_CONTENT">
    <div class="aside">
        <div class="title_blue">안전거래수칙</div>
        <div class="menu_know">
            <p>결제전에 이것만은 꼭!!</p>
            <dl class="g_list"> <dt>판매자 연락처,캐릭터명 확인</dt>
                <dd>상대 거래자의 연락처, 캐릭터명을 반드시 확인합니다. 결제가 완료
                    <br>되면 마이룸에서 판매자 정보를
                    <br>확인하실 수 있습니다.</dd> <dt>게임 상에서 채팅은 금물!</dt>
                <dd>게임상에서 채팅은 금물입니다.
                    <br>전화 통화 또는 1:1 대화함으로
                    <br>거래를 하시기 바랍니다.</dd> <dt>받은 물품 되돌려 주지 않기!</dt>
                <dd>판매자가 물품을 인계한 후 다시
                    <br>물품을 돌려달라고 하는 경우,
                    <br>절대 물품을 돌려주지 마시고,
                    <br>고객감동센터로 문의해 주시기
                    <br>바랍니다.</dd> <dt>고의적 취소,직거래유도 주의</dt>
                <dd>고의적인 취소 또는 직거래를
                    <br>유도할 경우 사이트 이용에
                    <br>제한을 받으실 수 있습니다.</dd>
            </dl>
            <div class="f_blue3 f_small"> * 다른사람의 정보를 기재하거나
                <br>다른 게임 서버에 거래신청을 하여
                <br>문제가 발생할 경우, 거래신청자에게
                <br>책임이 있습니다. </div>
        </div>
    </div>
    <div class="g_content">
        <!-- ▼ 타이틀 //-->
        <div class="g_title_blue"> 구매정보 확인
            <ul class="g_path">
                <li>홈</li>
                <li class="select">팝니다</li>
            </ul>
        </div>
        <!-- ▲ 타이틀 //-->
        <form id="frmSell" name="frmSell" action="application_ok.php?list=YTozNzp7czo5OiJnYW1lX2NvZGUiO3M6NDoiMjQxMiI7czoxMToic2VydmVyX2NvZGUiO3M6NToiMTA1NzUiO3M6OToiZ2FtZV9uYW1lIjtzOjExOiJBdXJhS2luZ2RvbSI7czoxMToic2VydmVyX25hbWUiO3M6Njoi6riw7YOAIjtzOjEyOiJzZWFyY2hfZ29vZHMiO3M6MzoiZXRjIjtzOjExOiJzZWFyY2hfd29yZCI7TjtzOjQ6InR5cGUiO3M6NDoic2VsbCI7czoxMjoic2VhcmNoX29yZGVyIjtzOjE6IjIiO3M6MTQ6InNlYXJjaF9yZWZlcmVyIjtzOjE2OiJsaXN0X3NlYXJjaC5odG1sIjtzOjExOiJ0cmFkZV9zdGF0ZSI7czoxOiIxIjtzOjg6InJlZ190aW1lIjtzOjE6IjEiO3M6MTE6ImNyZWRpdF90eXBlIjtzOjE6IjEiO3M6MTA6Imdvb2RzX3R5cGUiO3M6MToiMSI7czo2OiJjb21wZW4iO047czoxMToic2VsbF9jb21wZW4iO047czo3OiJkaXNjb250IjtOO3M6Nzoib3ZlcmxhcCI7TjtzOjk6ImV4Y2VsbGVudCI7TjtzOjc6ImFtb3VudDEiO3M6MToiMSI7czo3OiJhbW91bnQyIjtzOjg6Ijk5OTk5OTk5IjtzOjc6ImFtb3VudDMiO3M6MToiMSI7czo3OiJhbW91bnQ0IjtzOjg6Ijk5OTk5OTk5IjtzOjEyOiJzZWFyY2hfdHlwZTEiO047czoxMjoic2VhcmNoX3R5cGUyIjtOO3M6MTU6Im1vbmV5X2xpc3Rfcm93cyI7TjtzOjEzOiJnZW5fbGlzdF9yb3dzIjtOO3M6MTY6InNyY2hfaXRlbV9kZXB0aDEiO047czoxNjoic3JjaF9pdGVtX2RlcHRoMiI7TjtzOjE2OiJzcmNoX2l0ZW1fZGVwdGgzIjtOO3M6MTY6InNyY2hfaXRlbV9kZXB0aDQiO047czo2OiJkaXJlY3QiO047czoxMjoiYWNjb3VudF90eXBlIjtOO3M6MTM6InB1cmNoYXNlX3R5cGUiO047czoxNzoicGF5bWVudF9leGlzdGVuY2UiO047czoxMjoibXVsdGlfYWNjZXNzIjtOO3M6MTU6InNyY2hfY2hhcl9hbGFybSI7TjtzOjk6ImJMaW5lYWdlTSI7YjowO30=" method="post">
            <input type="hidden" name="id" value="2021101408177351">
            <input type="hidden" name="use_coupon">
            <input type="hidden" name="coupon_info" value="YSUzQTYlM0ElN0JzJTNBOCUzQSUyMnRyYWRlX2lkJTIyJTNCcyUzQTE2JTNBJTIyMjAyMTEwMTQwODE3NzM1MSUyMiUzQnMlM0ExMCUzQSUyMnRyYWRlX3R5cGUlMjIlM0JzJTNBNCUzQSUyMnNlbGwlMjIlM0JzJTNBOSUzQSUyMmdhbWVfY29kZSUyMiUzQnMlM0E0JTNBJTIyMjQxMiUyMiUzQnMlM0E5JTNBJTIyZ2FtZV90ZXh0JTIyJTNCcyUzQTExJTNBJTIyQXVyYUtpbmdkb20lMjIlM0JzJTNBMTElM0ElMjJ0cmFkZV9tb25leSUyMiUzQnMlM0E0JTNBJTIyMzAwMCUyMiUzQnMlM0E5JTNBJTIyc2VsbGVyX2lkJTIyJTNCcyUzQTYlM0ElMjJwZWpqd2glMjIlM0IlN0Q=">
            <input type="hidden" name="cur_mileage" value="12000">
            <input type="hidden" name="pay_mileage" value="3000">
            <input type="hidden" id="security_type" name="security_type" value="ITEM">
            <input type="hidden" id="inputList" name="inputList" value="YTozNzp7czo5OiJnYW1lX2NvZGUiO3M6NDoiMjQxMiI7czoxMToic2VydmVyX2NvZGUiO3M6NToiMTA1NzUiO3M6OToiZ2FtZV9uYW1lIjtzOjExOiJBdXJhS2luZ2RvbSI7czoxMToic2VydmVyX25hbWUiO3M6Njoi6riw7YOAIjtzOjEyOiJzZWFyY2hfZ29vZHMiO3M6MzoiZXRjIjtzOjExOiJzZWFyY2hfd29yZCI7TjtzOjQ6InR5cGUiO3M6NDoic2VsbCI7czoxMjoic2VhcmNoX29yZGVyIjtzOjE6IjIiO3M6MTQ6InNlYXJjaF9yZWZlcmVyIjtzOjE2OiJsaXN0X3NlYXJjaC5odG1sIjtzOjExOiJ0cmFkZV9zdGF0ZSI7czoxOiIxIjtzOjg6InJlZ190aW1lIjtzOjE6IjEiO3M6MTE6ImNyZWRpdF90eXBlIjtzOjE6IjEiO3M6MTA6Imdvb2RzX3R5cGUiO3M6MToiMSI7czo2OiJjb21wZW4iO047czoxMToic2VsbF9jb21wZW4iO047czo3OiJkaXNjb250IjtOO3M6Nzoib3ZlcmxhcCI7TjtzOjk6ImV4Y2VsbGVudCI7TjtzOjc6ImFtb3VudDEiO3M6MToiMSI7czo3OiJhbW91bnQyIjtzOjg6Ijk5OTk5OTk5IjtzOjc6ImFtb3VudDMiO3M6MToiMSI7czo3OiJhbW91bnQ0IjtzOjg6Ijk5OTk5OTk5IjtzOjEyOiJzZWFyY2hfdHlwZTEiO047czoxMjoic2VhcmNoX3R5cGUyIjtOO3M6MTU6Im1vbmV5X2xpc3Rfcm93cyI7TjtzOjEzOiJnZW5fbGlzdF9yb3dzIjtOO3M6MTY6InNyY2hfaXRlbV9kZXB0aDEiO047czoxNjoic3JjaF9pdGVtX2RlcHRoMiI7TjtzOjE2OiJzcmNoX2l0ZW1fZGVwdGgzIjtOO3M6MTY6InNyY2hfaXRlbV9kZXB0aDQiO047czo2OiJkaXJlY3QiO047czoxMjoiYWNjb3VudF90eXBlIjtOO3M6MTM6InB1cmNoYXNlX3R5cGUiO047czoxNzoicGF5bWVudF9leGlzdGVuY2UiO047czoxMjoibXVsdGlfYWNjZXNzIjtOO3M6MTU6InNyY2hfY2hhcl9hbGFybSI7TjtzOjk6ImJMaW5lYWdlTSI7YjowO30=">
            <input type="hidden" name="trade_kind_code" id="trade_kind_code" value="etc">
            <input type="hidden" name="code" id="code">
            <input type="hidden" name="user_without" id="user_without" value="1">
            <input type="hidden" name="game_code" id="game_code" value="2412">
            <!-- ▼ 안심번호서비스 //-->
            <input type="hidden" name="user_cell_auth" id="user_cell_auth" value="1">
            <input type="hidden" name="user_cell_num" id="user_cell_num" value="010-2424-0956">
            <input type="hidden" name="user_safety_type" id="user_safety_type" value="2">
            <input type="hidden" name="safety_using_flag" id="safety_using_flag" value="true">
            <!-- ▼ 안심번호서비스 //-->
            <!-- 마일리지 결제 인증 변수 -->
            <input type="hidden" id="certify_pay" name="certify_pay" value="YTo1OntzOjEwOiJjZXJ0aWZ5X2xjIjtzOjM6InBheSI7czo5OiJmb3JtX25hbWUiO3M6NzoiZnJtU2VsbCI7czoxMToic3VibWl0X3R5cGUiO3M6MToiMSI7czoxMDoidXNlcl9wcmljZSI7aTozMDAwO3M6MTA6InN1Ym1pdF91cmwiO3M6MTI1ODoiL3NlbGwvYXBwbGljYXRpb25fb2sucGhwP2xpc3Q9WVRvek56cDdjem81T2lKbllXMWxYMk52WkdVaU8zTTZORG9pTWpReE1pSTdjem94TVRvaWMyVnlkbVZ5WDJOdlpHVWlPM002TlRvaU1UQTFOelVpTzNNNk9Ub2laMkZ0WlY5dVlXMWxJanR6T2pFeE9pSkJkWEpoUzJsdVoyUnZiU0k3Y3pveE1Ub2ljMlZ5ZG1WeVgyNWhiV1VpTzNNNk5qb2k2cml3N1lPQUlqdHpPakV5T2lKelpXRnlZMmhmWjI5dlpITWlPM002TXpvaVpYUmpJanR6T2pFeE9pSnpaV0Z5WTJoZmQyOXlaQ0k3VGp0ek9qUTZJblI1Y0dVaU8zTTZORG9pYzJWc2JDSTdjem94TWpvaWMyVmhjbU5vWDI5eVpHVnlJanR6T2pFNklqSWlPM002TVRRNkluTmxZWEpqYUY5eVpXWmxjbVZ5SWp0ek9qRTJPaUpzYVhOMFgzTmxZWEpqYUM1b2RHMXNJanR6T2pFeE9pSjBjbUZrWlY5emRHRjBaU0k3Y3pveE9pSXhJanR6T2pnNkluSmxaMTkwYVcxbElqdHpPakU2SWpFaU8zTTZNVEU2SW1OeVpXUnBkRjkwZVhCbElqdHpPakU2SWpFaU8zTTZNVEE2SW1kdmIyUnpYM1I1Y0dVaU8zTTZNVG9pTVNJN2N6bzJPaUpqYjIxd1pXNGlPMDQ3Y3pveE1Ub2ljMlZzYkY5amIyMXdaVzRpTzA0N2N6bzNPaUprYVhOamIyNTBJanRPTzNNNk56b2liM1psY214aGNDSTdUanR6T2prNkltVjRZMlZzYkdWdWRDSTdUanR6T2pjNkltRnRiM1Z1ZERFaU8zTTZNVG9pTVNJN2N6bzNPaUpoYlc5MWJuUXlJanR6T2pnNklqazVPVGs1T1RrNUlqdHpPamM2SW1GdGIzVnVkRE1pTzNNNk1Ub2lNU0k3Y3pvM09pSmhiVzkxYm5RMElqdHpPamc2SWprNU9UazVPVGs1SWp0ek9qRXlPaUp6WldGeVkyaGZkSGx3WlRFaU8wNDdjem94TWpvaWMyVmhjbU5vWDNSNWNHVXlJanRPTzNNNk1UVTZJbTF2Ym1WNVgyeHBjM1JmY205M2N5STdUanR6T2pFek9pSm5aVzVmYkdsemRGOXliM2R6SWp0T08zTTZNVFk2SW5OeVkyaGZhWFJsYlY5a1pYQjBhREVpTzA0N2N6b3hOam9pYzNKamFGOXBkR1Z0WDJSbGNIUm9NaUk3VGp0ek9qRTJPaUp6Y21Ob1gybDBaVzFmWkdWd2RHZ3pJanRPTzNNNk1UWTZJbk55WTJoZmFYUmxiVjlrWlhCMGFEUWlPMDQ3Y3pvMk9pSmthWEpsWTNRaU8wNDdjem94TWpvaVlXTmpiM1Z1ZEY5MGVYQmxJanRPTzNNNk1UTTZJbkIxY21Ob1lYTmxYM1I1Y0dVaU8wNDdjem94TnpvaWNHRjViV1Z1ZEY5bGVHbHpkR1Z1WTJVaU8wNDdjem94TWpvaWJYVnNkR2xmWVdOalpYTnpJanRPTzNNNk1UVTZJbk55WTJoZlkyaGhjbDloYkdGeWJTSTdUanR6T2prNkltSk1hVzVsWVdkbFRTSTdZam93TzMwPSI7fQ==">
            <!-- ▼ 물품정보 //-->
            <div class="g_subtitle">물품정보</div>
            <table class="g_blue_table">
                <colgroup>
                    <col width="160">
                    <col width="250">
                    <col width="160">
                    <col>
                </colgroup>
                <tr>
                    <th>카테고리</th>
                    <td colspan="3">AuraKingdom > 기타 > 기타</td>
                </tr>
                <tr>
                    <th>물품제목</th>
                    <td colspan="3" class="table_goods_subject"> 기타 팝니다.
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
                    <td colspan="3"><span class="trade_money1">3,000</span> 원</td>
                </tr>
            </table>
            <!-- ▲ 물품정보 //-->
            <!-- ▼ 개인정보 //-->
            <style>
                .SafetyNumber_plus {
                    display: none;
                }
            </style>
            <!-- ▼ 연락처 중복 //-->
            <input type="hidden" name="user_id" id="user_id" value="dlwkd1640">
            <input type="hidden" name="user_contactA" id="user_contactA" value="070">
            <input type="hidden" name="user_contactB" id="user_contactB" value="3595">
            <input type="hidden" name="user_contactC" id="user_contactC" value="6151">
            <input type="hidden" name="slctMobile_type" id="slctMobile_type" value="3">
            <input type="hidden" name="user_mobileA" id="user_mobileA" value="010">
            <input type="hidden" name="user_mobileB" id="user_mobileB" value="2424">
            <input type="hidden" name="user_mobileC" id="user_mobileC" value="0956">
            <!-- ▲ 연락처 중복 //-->
            <div class="g_subtitle">내 거래정보</div>
            <table class="g_blue_table private_area">
                <colgroup>
                    <col width="160">
                    <col/> </colgroup>
                <tr>
                    <th>이름</th>
                    <td>구모서</td>
                </tr>
                <tr>
                    <th>구매자 캐릭터명</th>
                    <td>
                        <div class="g_left">
                            <input type="text" name="user_character" id="user_character" class="g_text" maxlength="30" tabindex="2"> 물품을 전달 받으실 본인의 캐릭터명 </div>
                        <div class="character_noti"> * 본인이 사용하는 서버/캐릭터 명 <em>미 선택 및 미 기재 시</em> 문제가 발생될 수 있으며, 거래신청자에게 책임이 있습니다. </div>
                    </td>
                </tr>
                <tr>
                    <th>연락처</th>
                    <td> <span id="spnUserPhone">
                070-3595-6151                </span> (
                        <label>
                            <input type="checkbox" class="g_checkbox" name="user_cell_check" id="user_cell_check" value="on" checked> 자택번호안내</label> ) / <span id="spnUserCell">010-2424-0956</span> <a href="javascript:_window.open('private_edit', '/user/contact_edit.html?check=true', 496, 350);" class="btn_white1 after">연락처 수정</a> </td>
                </tr>
                <tr class="SafetyNumber">
                    <th>안심번호</th>
                    <td> 개인정보보호 및 사고예방을 위해
                        <br> 고객님의 휴대폰으로 거래 시 0508로 시작하는 무료안심번호가 휴대폰으로 부여되어 상대방에게 안내됩니다.
                        <div class="safe_area"> <a href="javascript:;" class="guide_txt" id="safe_guide">안심번호란?</a>
                            <div class="g_msgbox blue" id="safe_layer" style="right:0;margin-top:-14px;">
                                <div class="title"> 안심번호란?
                                    <a href="javascript:;" class="close"></a>
                                </div>
                                <div class="cont"> 고객님의 개인정보 보호를 위해 휴대폰번호에 안심번호를 부여하여 실제 휴대폰번호 대신
                                    <br> 가상의 안심번호를 상대 거래자에게 노출시켜주는 무료 서비스 입니다.
                                    <ul class="f_red1"> <strong>안심번호 서비스 사용 시 주의사항</strong>
                                        <br> 1) 부여받은 안심번호로도 문자 수신이 가능합니다.(발신시에는 부여받은 안심번호 사용)
                                        <br> 2) 상대거래자가 안심번호 서비스를 사용하지 않는 상태에서 발신한 경우 실제 번호가 표시됩니다.
                                        <br> 3) 부여 받은 안심번호는 거래가 종료되는 시점에 자동 회수되며, 회수된 이후에는 연락이 불가능합니다.
                                        <br> 4) 안심번호 사용 후 48시간을 초과하거나 거래종료 후 문제발생 시 실제 전화번호가 노출됩니다. </ul>
                                </div>
                                <div class="btn"> <a href="/guide/add/security_number.html" class="btn_blue4">안심번호 이용안내 ></a> </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr class="SafetyNumber_plus">
                    <th>안심번호 플러스</th>
                    <td> 개인정보보호 및 사고예방을 위해
                        <br> 고객님의 휴대폰으로 거래 시 02-1234-1234 형태의 번호가 부과되어 상대방에게 안내됩니다.
                        <div class="safe_area"> <a href="javascript:;" class="guide_txt" id="safe_plus_guide">안심번호 플러스란?</a>
                            <div class="g_msgbox blue" id="safe_plus_layer" style="right:0;margin-top:-14px;">
                                <div class="title"> 안심번호 플러스란?
                                    <a href="javascript:;" class="close"></a>
                                </div>
                                <div class="cont"> 고객님의 개인정보 보호를 위해 휴대폰번호에 안심번호를 부여하여 실제 휴대폰번호 대신
                                    <br> 가상의 안심번호를 상대 거래자에게 노출시켜주는 무료 서비스 입니다.
                                    <ul class="f_red1"> <strong>안심번호 플러스 사용 시 주의사항</strong>
                                        <br> 1) 부여받은 안심번호로 통화 시 수신자에게 10초에 20원의 이용료가 부과됩니다.
                                        <br> 2) 안심번호 플러스로 문자 수신은 불가능합니다.
                                        <br> 3) 부여 받은 안심번호 플러스는 거래가 종료되는 시점에 자동 회수되며, 회수된 이후에는 연락이 불가능합니다.
                                        <br> 4) 가상 번호 사용 후 24시간을 초과하거나 거래종료 후 문제발생 시 실제 전화번호가 노출됩니다. </ul>
                                </div>
                                <div class="btn"> <a href="/guide/add/security_number_plus.html" class="btn_blue4">이용안내 ></a> </div>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
            <script>
                window.onload = function() {
                    if(document.getElementById('safe_guide') !== null) {
                        LayerControl({
                            el: document.getElementById('safe_guide'),
                            layer: document.getElementById('safe_layer'),
                            close_btn: document.getElementById('safe_layer').querySelector('.close'),
                            mask: false,
                            type: 'style'
                        });
                    }
                    if(document.getElementById('safe_plus_guide') !== null) {
                        LayerControl({
                            el: document.getElementById('safe_plus_guide'),
                            layer: document.getElementById('safe_plus_layer'),
                            close_btn: document.getElementById('safe_plus_layer').querySelector('.close'),
                            mask: false,
                            type: 'style'
                        });
                    }
                };
            </script>
            <!-- ▲ 개인정보 //-->
            <input type="hidden" name="my_mileage" value="12000">
            <input type="hidden" id="other_pay" name="use_creditcard" value="3,000">
            <input type="hidden" name="use_creditcard_original" value="3000">
            <div class="g_subtitle">결제정보</div>
            <table class="g_blue_table price_info">
                <colgroup>
                    <col width="286">
                    <col width="246">
                    <col>
                </colgroup>
                <tr>
                    <th> <span>구매금액</span> <span class="price_font" id="trade_money">3,000</span> <span class="won">원</span> </th>
                    <th class="bd_cell">
                        <div class="sale_price"> <span>쿠폰할인</span> <span class="price_font" id="use_coupon_price">0</span> <span class="won">원</span> </div>
                    </th>
                    <th> <span>총 결제금액</span> <span id="pay_mileage" class="price_font f_red1">3,000</span> <span class="won">원</span> </th>
                </tr>
                <tr>
                    <td> </td>
                    <td class="bd_cell">
                        <ul class="my_coupon">
                            <li> 보유쿠폰 <span class="f_red1 f_bold">0</span>개 <a href="javascript:_window.open('coupon_select', '/payment/coupon/select.html?struct=g_trade_info&info=YSUzQTYlM0ElN0JzJTNBOCUzQSUyMnRyYWRlX2lkJTIyJTNCcyUzQTE2JTNBJTIyMjAyMTEwMTQwODE3NzM1MSUyMiUzQnMlM0ExMCUzQSUyMnRyYWRlX3R5cGUlMjIlM0JzJTNBNCUzQSUyMnNlbGwlMjIlM0JzJTNBOSUzQSUyMmdhbWVfY29kZSUyMiUzQnMlM0E0JTNBJTIyMjQxMiUyMiUzQnMlM0E5JTNBJTIyZ2FtZV90ZXh0JTIyJTNCcyUzQTExJTNBJTIyQXVyYUtpbmdkb20lMjIlM0JzJTNBMTElM0ElMjJ0cmFkZV9tb25leSUyMiUzQnMlM0E0JTNBJTIyMzAwMCUyMiUzQnMlM0E5JTNBJTIyc2VsbGVyX2lkJTIyJTNCcyUzQTYlM0ElMjJwZWpqd2glMjIlM0IlN0Q=', 660, 530);" class="btn_white1" id="coupon_btn">쿠폰확인</a> </li>
                        </ul>
                    </td>
                    <td>
                        <dl class="my_mileage"> <dt>내 마일리지</dt>
                            <dd id="span_cur_mile">12,000 원</dd> <dt>게임 마일리지</dt>
                            <dd id="span_game_mile">0 원</dd> <dt>사용할 마일리지</dt>
                            <dd>
                                <input type="text" class="g_text" id="use_mileage" name="use_mileage" value="3,000" readonly disabled>원 </dd>
                        </dl>
                    </td>
                </tr>
            </table>
            <table class="g_blue_table payment_table">
                <colgroup>
                    <col width="160">
                    <col>
                </colgroup>
                <tr>
                    <th>결제방식</th>
                    <td>
                        <label for="rd_mileage">
                            <input type="radio" name="payment_type" class="g_radio" value="mileage" id="rd_mileage" checked>마일리지</label>
                        <label for="rd_samsung">
                            <input type="radio" name="payment_type" class="g_radio" value="samsungpay" id="rd_samsung"> <img src="http://img4.itemmania.com/images/icon/icon_news.gif" width="14" height="14" alt="N"> 삼성페이 </label>
                        <label for="rd_creditcard">
                            <input type="radio" name="payment_type" class="g_radio" value="creditcard" id="rd_creditcard">신용카드</label>
                        <label for="rd_mobile">
                            <input type="radio" name="payment_type" class="g_radio" value="mobile" id="rd_mobile">휴대폰 </label>
                        <label for="rd_tcash">
                            <input type="radio" name="payment_type" class="g_radio" value="tcash" id="rd_tcash"> 티캐시 간편결제 </label>
                        <div id="sub_samsungpay" class="sub_samsungpay g_hidden">
                            <p> ※ 결제하실 삼성페이 결제방법을 선택해 주세요.!! </p>
                            <label>
                                <input type="radio" name="samsungpay_tmp" class="g_radio" value="s">신용카드</label>
                            <label>
                                <input type="radio" name="samsungpay_tmp" class="g_radio" value="k">휴대폰</label>
                        </div>
                        <div id="sub_creditcard" class="sub_creditcard g_hidden">
                            <p> ※ 결제하실 신용카드를 선택해주세요.!! </p>
                            <label>
                                <input type="radio" name="creditcard_tmp" class="g_radio" value="si">신한</label>
                            <label>
                                <input type="radio" name="creditcard_tmp" class="g_radio" value="bc">BC</label>
                            <label>
                                <input type="radio" name="creditcard_tmp" class="g_radio" value="hd">현대</label>
                            <label>
                                <input type="radio" name="creditcard_tmp" class="g_radio" value="lt">롯데</label>
                            <label>
                                <input type="radio" name="creditcard_tmp" class="g_radio" value="hn">하나</label>
                            <label>
                                <select name="creditcard_tmp">
                                    <option value="" selected>카드사 더보기</option>
                                    <option value="wh">외환</option>
                                    <option value="wr">우리</option>
                                    <option value="nh">농협NH</option>
                                    <option value="ss">삼성</option>
                                    <option value="ct">씨티</option>
                                    <option value="gj">광주</option>
                                    <option value="jb">전북</option>
                                    <option value="jj">제주</option>
                                    <option value="sh">수협</option>
                                    <option value="su">산업</option>
                                    <option value="kb">KB국민</option>
                                </select>
                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th class="pay_text">마일리지</th>
                    <td class="mile_td">
                        <div id="payment_mileage" class="payment">
                            <div id="mile_check1" style="display:none"> <span class="g_left f_bold">* 현재 결제할 마일리지가 부족합니다.</span> <a href="javascript:_window.open('mileage_charge', '/myroom/mileage/charge/index.html', 701, 900);" class="g_right btn_gray1">마일리지 충전 ></a>
                                <ul class="g_list g_clear">
                                    <li>구매 신청 후 결제는 30분 이내에 해주셔야만 거래가 가능합니다.</li>
                                    <li>마일리지 충전을 하시려면 아래의 충전방법을 선택 후 충전이 가능합니다.</li>
                                    <li class="f_red1">거래 구매금액은 마일리지+신용카드 듀얼결제가 가능합니다.</li>
                                    <li class="f_red1">무통장입금(전용계좌) 충전 시 1천원의 수수료가 차감이 되어 적립되오니 주의 하시기 바랍니다.</li>
                                    <li class="f_red1">무통장입금(전용계좌)의 최소 입금 가능금액은 2,000원입니다.</li>
                                </ul>
                                <div class="f_bold">* 충전방법 선택</div>
                                <ul class="mile_charge">
                                    <li onclick="_window.open('mileage_charge', '/myroom/mileage/charge/tcash.html', 701, 900);">TCash 충전</li>
                                    <li onclick="_window.open('mileage_charge', '/myroom/mileage/charge/creditcard.html', 701, 900);">신용카드 충전</li>
                                    <li onclick="_window.open('mileage_charge', '/myroom/mileage/charge/phone_ars.html', 701, 900);">휴대폰 ARS충전</li>
                                    <li onclick="_window.open('mileage_charge', '/myroom/mileage/charge/realaccount.html', 701, 900);">자동이체</li>
                                    <li onclick="_window.open('mileage_charge', '/myroom/mileage/charge/ars.html', 701, 900);">전화결제(ARS)</li>
                                    <li onclick="_window.open('mileage_charge', '/myroom/mileage/charge/onlyculture.html', 701, 900);">문화상품권</li>
                                    <li onclick="_window.open('mileage_charge', '/myroom/mileage/charge/teencash.html', 701, 900);">틴캐시</li>
                                    <li onclick="_window.open('mileage_charge', '/myroom/mileage/charge/pointpark.html', 701, 900);">포인트충전</li>
                                    <li onclick="_window.open('mileage_charge', '/myroom/mileage/charge/bookgift.html', 701, 900);">도서문화 상품권</li>
                                    <li onclick="_window.open('mileage_charge', '/myroom/mileage/charge/okcashbag.html', 701, 900);">OK캐쉬백</li>
                                    <li onclick="_window.open('mileage_charge', '/myroom/mileage/charge/eggmoney.html', 701, 900);">에그머니</li>
                                    <li onclick="_window.open('mileage_charge', '/myroom/mileage/charge/mybank.html', 701, 900);">내통장결제</li>
                                    <li onclick="_window.open('mileage_charge', '/myroom/mileage/charge/gpgw.html', 701, 900);">GP쿠폰</li>
                                    <li onclick="_window.open('mileage_charge', '/myroom/mileage/charge/onlyhpmn.html', 701, 900);">해피머니상품권</li>
                                    <li onclick="_window.open('mileage_charge', '/myroom/mileage/charge/tmoney.html', 701, 900);">모바일티머니</li>
                                    <li onclick="_window.open('mileage_charge', '/myroom/mileage/charge/funnycard.html', 701, 900);">퍼니카드</li>
                                    <li onclick="_window.open('mileage_charge', '/myroom/mileage/charge/maniacoupon.html', 701, 900);">매니아 선불쿠폰</li>
                                    <li onclick="_window.open('mileage_charge', '/myroom/mileage/charge/coupon.html', 701, 900);">이벤트쿠폰</li>
                                    <li onclick="_window.open('mileage_charge', '/myroom/mileage/charge/onlydgcl.html', 701, 900);">스마트문상(게임문상)</li>
                                    <li onclick="_window.open('mileage_charge', '/myroom/mileage/charge/cashbee.html', 701, 900);">모바일캐시비</li>
                                    <li onclick="_window.open('mileage_charge', '/myroom/mileage/charge/cashgate.html', 701, 900);">캐시플러스</li>
                                    <li onclick="window.open('/portal/maniaplay/free/index.html');">무료충전소</li>
                                    <li onclick="_window.open('mileage_charge', '/myroom/mileage/charge/index.html', 701, 900);">전용계좌</li>
                                    <li onclick="_window.open('mileage_charge', '/myroom/mileage/charge/mmileage.html', 701, 900);">M마일리지 이용권</li>
                                    <li onclick="_window.open('mileage_charge', '/myroom/mileage/charge/im_gift.html', 701, 900);">IM기프트 상품권</li>
                                    <li onclick="_window.open('mileage_charge', '/myroom/mileage/charge/mobilepop.html', 701, 900);">모바일팝</li>
                                    <li onclick="_window.open('mileage_charge', '/myroom/mileage/charge/ktclip.html', 701, 900);">카드포인트 </li>
                                    <li onclick="_window.open('mileage_charge', '/myroom/mileage/charge/pipe.html', 701, 900);">암호화폐 충전
                                        <div class="icon_new"></div>
                                    </li>
                                    <li onclick="_window.open('mileage_charge', '/myroom/mileage/charge/paycoin.html', 701, 900);">페이코인 충전
                                        <div class="icon_new"></div>
                                    </li>
                                    <li onclick="_window.open('mileage_charge', '/myroom/mileage/charge/kbank.html', 701, 900);">케이뱅크 페이
                                        <div class="icon_new"></div>
                                    </li>
                                </ul>
                            </div>
                            <div id="mile_check2" style="display:block"> 결제 가능한 마일리지가 충분합니다. </div>
                        </div>
                        <div id="payment_samsungpay" class="payment g_hidden">
                            <dl class="g_list"> <dt>* 이용안내</dt>
                                <dd class="list_non">- 거래 구매금액은 마일리지 + 삼성페이 듀얼결제가 가능합니다.</dd>
                                <dd class="list_non">- 신용카드 결제 수수료는 5.5%, 휴대폰 결제이용료는 19.5%가 부과됩니다.</dd>
                            </dl>
                            <dl class="g_list"> <dt>* 결제한도</dt>
                                <dd class="list_non">- 신용카드는 각 신용카드사에서 개인에게 제공하는 한도까지 결제 가능합니다.</dd>
                                <dd class="list_non">- 휴대폰은 ID당 최대 월 60만원까지 결제 가능합니다.(각 통신사 고객등금별 소액결제 한도적용)</dd>
                            </dl>
                            <dl class="g_list"> <dt>* 인증방식</dt>
                                <dd class="list_non">- 삼성페이앱에 등록한 비밀번호, 지문, OTP등의 인증 방식이 적용됩니다.</dd>
                            </dl>
                        </div>
                        <div id="payment_creditcard" class="payment g_hidden">
                            <dl class="g_list"> <dt>* 이용안내</dt>
                                <dd class="list_non">- 거래 구매금액은 마일리지 + 신용카드 듀얼결제가 가능합니다.</dd>
                                <dd class="list_non">- 신용카드 결제 수수료는 5.5%가 부과됩니다.</dd>
                            </dl>
                            <dl class="g_list"> <dt>* 결제한도</dt>
                                <dd class="list_non">- 각 신용카드사에서 개인에게 제공하는 한도까지 결제 가능합니다.</dd>
                                <dd class="list_non">(카드사별로 1회/1일 한도가 적용될 수도 있습니다.)</dd>
                            </dl>
                            <dl class="g_list"> <dt>* 인증방식</dt>
                                <dd class="list_non">- 간편결제/안전결제/안심클릭/공인인증서/SMS 인증 방식이 카드사 별 적용됩니다.</dd>
                            </dl>
                            <!--▼▼▼ 카드결제 이벤트 배너 ▼▼▼ -->
                            <dl class="g_list"> <dt>* 이벤트</dt>
                                <dd class="list_non banner_module_card"> </dd>
                            </dl>
                            <!--▲▲▲ 카드결제 이벤트 배너 ▲▲▲ -->
                            <!-- ▼ KB국민카드 결제 안내 //-->
                            <div id="layer_kb" class="g_layer"> <img src="http://img4.itemmania.com/images/banner/20160711_kb_payment.jpg" width="480" height="530" alt="KB국민카드 결제 안내" usemap="#20160711_kb_payment">
                                <map name="20160711_kb_payment">
                                    <area shape="rect" coords="432,9,473,46" href="javascript:fnInfoClose();" title="x" />
                                    <area shape="rect" coords="114,367,366,406" href="https://play.google.com/store/apps/details?id=com.tcash.tcash" target="_blank" title="" /> </map>
                            </div>
                            <!-- ▲ KB국민카드 결제 안내 //-->
                        </div>
                        <div class="g_finish"></div>
                        <div id="payment_mobile" class="payment g_hidden">
                            <dl class="g_list"> <dt>* 결제한도</dt>
                                <dd class="list_non" class="g_hidden"> 월 이용한도는 ID당 최대 60만원까지 가능합니다.(각 통신사 고객등급별 소액결제 한도 적용)
                                    <br> ※ 휴대폰 결제 시 보유하고 계신 마일리지와 함께 결제 가능합니다. </dd>
                            </dl>
                            <dl class="g_list"> <dt>* 주의사항</dt>
                                <dd class="list_non"> 1. 휴대폰 결제시 결제대행업체(PG사)가 부과하는 19.5%의 사용수수료가 적용되오니 가급적
                                    <br> &nbsp;&nbsp;&nbsp;마일리지결제(전용계좌)를 이용해주시기 바랍니다. </dd>
                                <dd class="list_non">2. 타인의 휴대폰을 도용할 경우 고발 조치 됩니다.</dd>
                            </dl>
                            <dl class="g_list"> <dt>* 휴대폰 별 결제 취소 가능시간 안내</dt>
                                <dd class="list_non"> 1. 휴대폰 결제는 결제일로부터 10일 이내(결제일 포함), 결제 해당월 말일 24시까지만 취소가능
                                    <br> &nbsp;&nbsp;&nbsp;(ex, 1월 10일 결제분은 1월 19일까지 취소가능, 1월 25일 결제분은 1월 31일까지 취소가능) </dd>
                                <dd class="list_non">2. 위의 결제취소 가능 시기를 넘어서 취소가 될 경우에는 거래금액을 마일리지로 적립 해드립니다.</dd>
                            </dl>
                        </div>
                        <div id="payment_tcash" class="payment g_hidden">
                            <dl class="g_list"> <dt>* 아이템매니아 간편결제 이용방법</dt>
                                <dd class="list_non"> <img src="http://img4.itemmania.com/images/sell/img_tcash_use.jpg" width="450" height="100" alt="이용안내"> </dd>
                                <dd>TCash(티캐시) APP을 이용한 편리한<span class="f_red1 f_small">간편결제 서비스</span>로, APP설치와 간편결제 등록이 필요합니다. </dd>
                                <dd>TCash(티캐시) APP을 통해 <span class="f_red1 f_small">[신용카드] 및 [상품권] 충전</span>을 할 수 있습니다. </dd>
                                <dd>TCash(티캐시) APP에 충전된 캐시를<span class="underline">아이템매니아 마일리지로 충전 및 아이템 결제</span>에 사용할 수 있습니다. </dd>
                                <dd>TCash(티캐시) APP에서 설정한 비밀번호를 입력하면 <span class="f_red1 f_small">즉시 결제</span>가 완료되는 편리한 서비스입니다. </dd>
                                <dd class="tcash_charge">TCash(티캐시) 잔액이 부족한 경우 “티캐시 충전하기”를 통하여 충전할수 있습니다.&nbsp;&nbsp;&nbsp;&nbsp;<span id="btn_tcash_charge" class="btn_tcash_charge">티캐시 충전하기</span> </dd>
                            </dl>
                            <dl class="g_list"> <dt>* 결제한도</dt>
                                <dd>TCash(티캐시)에 충전된 캐시 보유금액 만큼 자유롭게 결제 가능합니다.</dd>
                            </dl>
                            <dl class="g_list"> <dt>* 설치 바로가기</dt>
                                <dd class="list_non">
                                    <a href="https://play.google.com/store/apps/details?id=com.tcash.tcash" target="_blank"> <img src="http://img4.itemmania.com/images/sell/img_down_gp.jpg" width="130" height="48" alt="Google Play"> </a>
                                    <a href="https://itunes.apple.com/kr/app/tcash/id1134866098?mt=8" target="_blank"> <img src="http://img4.itemmania.com/images/sell/img_down_ap.jpg" width="130" height="48" alt="App Store"> </a>
                                </dd>
                            </dl>
                        </div>
                    </td>
                </tr>
            </table>
            <ul class="add_charge g_hidden" id="add_charge">
                <li> <span class="bold_txt">추가 결제해야할 금액</span> </li>
                <li id="add_pay" class="price_font2">3,000</li>
                <li> <span class="bold_txt">원</span> (<span class="pay_text"></span> 방식으로 해당 추가금액을 결제합니다.) </li>
            </ul>
            <div class="g_finish"></div>
            <dl class="box6 notice_box"> <dt class="f_blue3 f_bold">※ 판매자로부터 받은 물품을 다시 돌려달라는 사기에 주의 하세요</dt>
                <dd>판매자로부터 물품 받은 후 게임머니(아이템)에 문제가 있으니 다른 것으로 바꿔 주겠다며 물품을 요구하는 경우가 있습니다.</dd>
                <dd>절대 물품을 돌려주지 마시고 판매자 또는 고객센터로 문의 주시기 바랍니다.</dd>
            </dl>
            <div class="g_btn_wrap"> <img src="http://img2.itemmania.com/new_images/btn/btn_buy.gif" width="137" height="46" alt="구매신청" id="buy_btn" onclick="fnApplication(0);">
                <a href="/sell/view.html?id=2021101408177351&continue=YTozNzp7czo5OiJnYW1lX2NvZGUiO3M6NDoiMjQxMiI7czoxMToic2VydmVyX2NvZGUiO3M6NToiMTA1NzUiO3M6OToiZ2FtZV9uYW1lIjtzOjExOiJBdXJhS2luZ2RvbSI7czoxMToic2VydmVyX25hbWUiO3M6Njoi6riw7YOAIjtzOjEyOiJzZWFyY2hfZ29vZHMiO3M6MzoiZXRjIjtzOjExOiJzZWFyY2hfd29yZCI7TjtzOjQ6InR5cGUiO3M6NDoic2VsbCI7czoxMjoic2VhcmNoX29yZGVyIjtzOjE6IjIiO3M6MTQ6InNlYXJjaF9yZWZlcmVyIjtzOjE2OiJsaXN0X3NlYXJjaC5odG1sIjtzOjExOiJ0cmFkZV9zdGF0ZSI7czoxOiIxIjtzOjg6InJlZ190aW1lIjtzOjE6IjEiO3M6MTE6ImNyZWRpdF90eXBlIjtzOjE6IjEiO3M6MTA6Imdvb2RzX3R5cGUiO3M6MToiMSI7czo2OiJjb21wZW4iO047czoxMToic2VsbF9jb21wZW4iO047czo3OiJkaXNjb250IjtOO3M6Nzoib3ZlcmxhcCI7TjtzOjk6ImV4Y2VsbGVudCI7TjtzOjc6ImFtb3VudDEiO3M6MToiMSI7czo3OiJhbW91bnQyIjtzOjg6Ijk5OTk5OTk5IjtzOjc6ImFtb3VudDMiO3M6MToiMSI7czo3OiJhbW91bnQ0IjtzOjg6Ijk5OTk5OTk5IjtzOjEyOiJzZWFyY2hfdHlwZTEiO047czoxMjoic2VhcmNoX3R5cGUyIjtOO3M6MTU6Im1vbmV5X2xpc3Rfcm93cyI7TjtzOjEzOiJnZW5fbGlzdF9yb3dzIjtOO3M6MTY6InNyY2hfaXRlbV9kZXB0aDEiO047czoxNjoic3JjaF9pdGVtX2RlcHRoMiI7TjtzOjE2OiJzcmNoX2l0ZW1fZGVwdGgzIjtOO3M6MTY6InNyY2hfaXRlbV9kZXB0aDQiO047czo2OiJkaXJlY3QiO047czoxMjoiYWNjb3VudF90eXBlIjtOO3M6MTM6InB1cmNoYXNlX3R5cGUiO047czoxNzoicGF5bWVudF9leGlzdGVuY2UiO047czoxMjoibXVsdGlfYWNjZXNzIjtOO3M6MTU6InNyY2hfY2hhcl9hbGFybSI7TjtzOjk6ImJMaW5lYWdlTSI7YjowO30="><img src="http://img2.itemmania.com/new_images/btn/btn_cancel2.gif" width="137" height="46" alt="취소하기"></a>
            </div>
        </form>
    </div>
    <!-- ▼ 확인 팝업 //-->
    <div id="dvGoodsInfo" class="g_layer blue dvGoodsInfo">
        <div class="inner">
            <div class="title"> 물품신청정보
                <a href="javascript:;" class="close_w" data-close="true"></a>
            </div>
            <div class="cont">
                <table class="g_blue_table">
                    <colgroup>
                        <col width="122">
                        <col /> </colgroup>
                    <tr>
                        <th>카테고리</th>
                        <td>AuraKingdom > 기타 > 기타</td>
                    </tr>
                </table>
                <table class="g_blue_table g_blue_table2">
                    <colgroup>
                        <col width="122">
                        <col /> </colgroup>
                    <tr>
                        <th>물품제목</th>
                        <td>기타 팝니다.</td>
                    </tr>
                    <tr>
                        <th>구매금액</th>
                        <td>3,000원</td>
                    </tr>
                    <tr>
                        <th>구매자 캐릭터명</th>
                        <td><span id="layer_character" class="f_blue3 f_bold"></span> (물품을 전달 받으실 본인의 캐릭터명)</td>
                    </tr>
                </table>
                <div class="attention">거래 사고 주의사항</div>
                <ul class="attention_box">
                    <li>1. 전달받은 <span class="deco" style="color:red">물품은 절대 돌려주지</span> 마세요.</li>
                    <li>2. 구매 등록시 <span class="deco" style="color:red">반드시 본인 정보(게임명/서버/캐릭터)</span>를 등록하세요.</li>
                    <li class="f_blue3">타인 게임정보 기재 또는, 다른 게임/서버에 구매 신청할 경우 물품신청자에게 불이익이 발생할 수 있습니다.</li>
                </ul>
                <div class="last_txt">구매 신청하시려는 물품이 위와 같습니까?</div>
                <div class="g_btn_wrap"> <img src="http://img4.itemmania.com/new_images/btn/pop_btn_ok.gif" width="63" height="35" alt="확인" onclick="fnSubmit();"> <img src="http://img4.itemmania.com/new_images/btn/pop_btn_cancel.gif" width="63" height="35" alt="취소" data-close="true"> </div>
            </div>
        </div>
    </div>
    <!-- ▲ 확인 팝업 //-->
    <form action="https://bill.tcash.co.kr/PublicWeb/TCashDeposit.aspx" method="post" target="tcash_charge" id="tcash_frm">
        <input type="hidden" name="REQUEST" value="">
        <input type="hidden" name="YMD" value="">
        <input type="hidden" name="HH24" value="">
        <input type="hidden" id="tcash_payment_phone" value=""> </form>
    <div class="g_finish"></div>
</div>
<!-- ▲ 컨텐츠 영역 //-->
@endsection
