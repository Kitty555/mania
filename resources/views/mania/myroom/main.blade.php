@extends('layouts-mania.app')
@section('head_attach')
<link type="text/css" rel="stylesheet" href="/mania/_css/_comm.min.css?v=210317">
<link type="text/css" rel="stylesheet" href="/mania/_head_tail/css/_head_comm.css?v=211007">
<link type="text/css" rel="stylesheet" href="/mania/_banner/css/banner_module.css?v=210422">
<link type="text/css" rel="stylesheet" href="/mania/myroom/css/common_myroom.css?210503" />
<link type="text/css" rel="stylesheet" href="/mania/myroom/css/index.css?">
<script type="text/javascript" src="/mania/advertise/advertise_code_head.js?v=200727"></script>
<script type="text/javascript" src="/mania/_banner/js/banner_module.js?v=210209"></script>
@endsection

@section('content')
<!--▼▼▼ 캐릭터 등롤 알리미 ▼▼▼ -->
<div class="g_container" id="g_CONTENT">
    <div class="mr_top">
        <!--    <div class="mr_top_left_box">-->
        <div class="mr_user_level"> <span class="credit_mark2 credit_GOLD _lg">GOLD</span> </div>
        <!--<div class="mr_title">MYROOM</div>-->
        <div class="mr_user_level_txt f_black2">
            <div class="user_level_txt f_GOLD"> GOLD </div> 구모서 회원님의 신용등급은 <span class="f_GOLD">골드 (366점)</span> 입니다.
            <div class="mr_user_benefit_btn_wrapper">
                <div class="mr_user_benefit_btn"> <a href="/myroom/myinfo/credit_rating.html">혜택보기 <i class="arr">icon</i></a> </div>
                <div class="mr_user_benefit_btn" onmouseover="$('#credit_condition').show();" onmouseout="$('#credit_condition').hide();">승급조건 <i class="arr">icon</i></div>
                <div class="credit_condition" id="credit_condition"> <span class='credit_up_platinum'>플래티넘</span>등급은 이전 3개월 합계 거래건수가 5점 이상 되어야 합니다.
                    <br><span class='credit_up_vip'>VIP</span> 등급은 이전 3개월 합계 거래건수가 10점 이상 되어야 합니다. </div>
            </div>
        </div>
        <div class="mr_user_mileage_txt">
            <div class="mileage_area">
                <div class="mileage_area_content available_mileage f_black1">사용가능 마일리지</div>
                <div class="mileage_result f_blue1"><span class="over_mile">12,000</span> <span class="won f_black2">원</span> </div>
            </div>
            <div class="mileage_area">
                <div class="mileage_area_content all_mileage f_black2">총 마일리지</div>
                <div class="mileage_all_result f_black2">12,000 <span class="won f_black2">원</span></div>
            </div>
            <div class="mileage_area mileage_btn_area">
                <div class="mileage_btn mileage_charge_btn" onclick="_window.open('mileage_charge_dlwkd1640', '/myroom/mileage/charge/tcash.html', 685, 800);"> <i class="SpGroup icon_charge">icon</i>충전하기 </div>
                <div class="mileage_btn mileage_withdraw_btn"><a href="/myroom/mileage/payment/payment_switch.html"><i class="SpGroup icon_withdraw">icon</i>출금하기</a></div>
            </div>
        </div>
        <!--        <div class="mr_user_level_sub_txt">-->
        <!--        </div>-->
    </div>
    <div class="aside">
        <div class="nav_subject"><a href="http://trade.itemmania.com/myroom/" class="myroom">MyRoom</a></div>
        <div class="nav">
            <div class="nav_title "><a href="http://trade.itemmania.com/myroom/message/">메세지함</a></div>
            <div class="nav_title "><a href="http://trade.itemmania.com/myroom/sell/sell_regist.html">판매관련</a></div>
            <div class="nav_title "><a href="http://trade.itemmania.com/myroom/buy/buy_regist.html">구매관련</a></div>
            <div class="nav_title "><a href="http://trade.itemmania.com/myroom/goods_alarm/alarm_sell_list.html">물품등록 알리미<span class="new">N</span></a></div>
            <div class="nav_title "><a href="http://trade.itemmania.com/myroom/complete/sell.html">종료내역</a></div>
            <div class="nav_title "><a href="http://trade.itemmania.com/myroom/complete/cancel_sell.html">취소내역</a></div>
            <div class="nav_title "><a href="http://trade.itemmania.com/myroom/mileage/my_mileage/">마일리지</a></div>
            <ul class='nav_sub g_list'>
                <li class=""><a href="http://trade.itemmania.com/myroom/mileage/my_mileage/">내마일리지</a></li>
                <li class=""><a href="http://trade.itemmania.com/myroom/mileage/guide/charge.html">마일리지충전</a></li>
                <li class=""><a href="http://trade.itemmania.com/myroom/mileage/payment/payment_switch.html">마일리지출금</a></li>
                <li class=""><a href="http://trade.itemmania.com/myroom/mileage/change/culturecash/">마일리지전환</a></li>
            </ul>
            <div class="nav_title "><a href="http://trade.itemmania.com/myroom/myinfo/myinfo_check.html">개인정보</a></div>
            <ul class='nav_sub g_list'>
                <li class=""><a href="http://trade.itemmania.com/myroom/myinfo/myinfo_check.html">개인정보수정</a></li>
                <li class=""><a href="http://trade.itemmania.com/myroom/myinfo/myinfo_login_sync.html">로그인연동관리</a></li>
                <li class=""><a href="http://trade.itemmania.com/myroom/myinfo/myinfo_offer_check.html">수신/동의철회</a></li>
                <li class=""><a href="http://trade.itemmania.com/myroom/myinfo/credit_rating.html">신용등급/인증</a></li>
            </ul>
            <div class="nav_title "><a href="http://trade.itemmania.com/myroom/lotto/lottopot.html">로또 추천번호</a></div>
            <div class="nav_title "><a href="http://trade.itemmania.com/myroom/pmall/spointmall.html">쇼핑포인트</a></div>
            <div class="nav_title "><a href="http://trade.itemmania.com/myroom/cash_receipt/cash_receipt_list.html">현금영수증</a></div>
            <div class="nav_title "><a href="http://trade.itemmania.com/myroom/coupon/free.html">이용권현황</a></div>
            <div class="nav_title "><a href="http://trade.itemmania.com/myroom/myinfo/myinfo_safe_settlement.html">보안센터</a></div>
            <div class="nav_title "><a href="http://trade.itemmania.com/myroom/customer/">환경설정</a></div>
            <div class="nav_title "><a href="http://trade.itemmania.com/myroom/user_leave/user_leave_form.html">회원탈퇴</a></div>
        </div>
        <div style="margin-top:15px;text-align:center;">
            <script src="https://compass.adop.cc/assets/js/adop/adopJ.js?v=14"></script><ins class="adsbyadop" _adop_zon="6838bf70-c4e4-4d67-8985-ee350b4cea65" _adop_type="re" style="display:inline-block;width:200px;height:200px;" _page_url=""></ins></div>
    </div>
    <div class="g_content">
        <div class="content_area content_coupon">
            <div class="g_subtitle">나의 쿠폰함</div>
            <div class="coupon_area_content coupon_sale"> <span class="coupon_title f_black1">할인쿠폰</span> <span class="coupon_result f_black1" onclick="_window.open('pointlist','/myroom/pmall/popup/coupon_list.html',550,570)">0</span> </div>
            <div class="coupon_area_content coupon_mobile"> <span class="coupon_title f_black1">모바일쿠폰</span> <span class="coupon_result f_black1" onclick="_window.open('pointlist','/myroom/pmall/popup/coupon_m_list.html',550,570)">0</span> </div>
            <div class="coupon_area_content coupon_shop"> <span class="coupon_title f_black1">쇼핑포인트</span> <span class="coupon_result f_black1 coupon_sp" onclick="location.href='/myroom/pmall/charge_list.html'">1,292</span> </div>
            <div class="coupon_area_content coupon_premium"> <span class="coupon_title f_black1">프리미엄</span> <span class="coupon_result f_black1" onclick="_window.open('conponlist', '/myroom/pmall/popup/free_list.html', 580, 470);">13</span> </div>
            <div class="coupon_area_content coupon_highlight"> <span class="coupon_title f_black1">물품강조</span> <span class="coupon_result f_black1" onclick="_window.open('conponlist', '/myroom/pmall/popup/free_list.html', 580, 470);">15</span> </div>
            <div class="coupon_area_content coupon_payment"> <span class="coupon_title f_black1">출금무료</span> <span class="coupon_result f_black1" onclick="_window.open('conponlist', '/myroom/pmall/popup/free_list.html', 580, 470);">0</span> </div>
            <div class="coupon_area_content coupon_payment"> <span class="coupon_title f_black1">퀵아이콘</span> <span class="coupon_result f_black1" onclick="_window.open('conponlist', '/myroom/pmall/popup/free_list.html', 580, 470);">0</span> </div>
        </div>
        <div class="content_area content_trade">
            <div class="g_subtitle">나의 거래 현황</div>
            <div class="bs_content sell_content2">
                <div class="sell_content_left">
                    <div class="icon_wrap"> <i class="SpGroup sell_icon"></i> </div>
                    <div class="product_wrap">
                        <div class="sell_product">
                            <div class="sell_title product_title">판매 등록</div>
                            <div class="sell_result trade_result"><a href="/myroom/sell/sell_regist.html?strRelationType=regist">1</a> </div>
                        </div>
                        <div class="bargain_product">
                            <div class="bargain_title product_title">흥정 신청</div>
                            <div class="bargain_result trade_result"><a href="/myroom/sell/sell_check.html?strRelationType=check">0</a> </div>
                        </div>
                    </div>
                </div>
                <div class="product_line"></div>
                <div class="sell_content_right">
                    <div class="sell_pay_wait_product product">
                        <div class="sell_pay_wait_title product_title product_title2">입금대기</div>
                        <div class="sell_pay_wait_result trade_result2"><a href="/myroom/sell/sell_pay_wait.html?strRelationType=pay">0</a> </div>
                    </div>
                    <div class="arrow_wrap"> <i class="arr2"></i> </div>
                    <div class="sell_ing_product product">
                        <div class="sell_ing_title product_title product_title2">판매중</div>
                        <div class="sell_ing_title trade_result2"><a href="/myroom/sell/sell_ing.html?strRelationType=ing">0</a> </div>
                    </div>
                    <div class="arrow_wrap"> <i class="arr2"></i> </div>
                    <div class="sell_complete_product product">
                        <div class="sell_complete_title product_title product_title2">판매종료</div>
                        <div class="complete_wrap"><a href="/myroom/complete/sell.html"><span class="btn_detail"></span></a></div>
                    </div>
                </div>
            </div>
            <div class="bs_content buy_content2">
                <div class="buy_content_left">
                    <div class="icon_wrap"> <i class="SpGroup buy_icon"></i> </div>
                    <div class="product_wrap">
                        <div class="buy_product">
                            <div class="buy_title product_title">구매 등록</div>
                            <div class="buy_result trade_result"><a href="/myroom/buy/buy_regist.html?strRelationType=regist">0</a> </div>
                        </div>
                        <div class="bargain_product">
                            <div class="bargain_title product_title">흥정 신청</div>
                            <div class="bargain_result trade_result"><a href="/myroom/buy/buy_check.html?strRelationType=check">0</a> </div>
                        </div>
                    </div>
                </div>
                <div class="product_line"></div>
                <div class="buy_content_right">
                    <div class="buy_pay_wait_product product">
                        <div class="buy_pay_wait_title product_title product_title2">입금예정</div>
                        <div class="buy_pay_wait_result trade_result2"><a href="/myroom/buy/buy_pay_wait.html?strRelationType=pay">1</a> </div>
                    </div>
                    <div class="arrow_wrap"> <i class="arr2"></i> </div>
                    <div class="buy_ing_product product">
                        <div class="buy_ing_title product_title product_title2">구매중</div>
                        <div class="buy_ing_title trade_result2"><a href="/myroom/buy/buy_ing.html?strRelationType=ing">0</a></div>
                    </div>
                    <div class="arrow_wrap"> <i class="arr2"></i> </div>
                    <div class="buy_complete_product product">
                        <div class="buy_complete_title product_title product_title2">구매종료</div>
                        <div class="complete_wrap"><a href="/myroom/complete/buy.html"><span class="btn_detail"></span></a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content_area content_recent_trade">
            <div class="g_subtitle">최근 거래내역</div>
            <div class="content_table_wrap">
                <table>
                    <colgroup>
                        <col width="50">
                        <col width="100">
                        <col width="100">
                        <col width="270">
                        <col width="120">
                        <col width="80">
                        <col width="100">
                    </colgroup>
                    <!--                <thead>-->
                    <!--                <tr>-->
                    <!--                    <th>카테고리</th>-->
                    <!--                    <th>분류</th>-->
                    <!--                    <th>제목</th>-->
                    <!--                    <th>거래금액</th>-->
                    <!--                    <th>거래종료일</th>-->
                    <!--                    <th>구분</th>-->
                    <!--                </tr>-->
                    <!--                </thead>-->
                    <tbody>
                    <tr class="tbl_sell_area">
                        <td class="td_blue"></td>
                        <td class="f_black1"> <b>던전앤파이터</b>
                            <br/> 스타트 </td>
                        <td class="f_black1">기타</td>
                        <td class="tbl_subject f_black1"> 기타 팝니다. </td>
                        <td>17,230원</td>
                        <td>01-31</td>
                        <td> <b class="tbl_success_txt">판매완료</b>
                            <br/>
                            <!--                                <div class="tbl_success_btn">-->
                            <!--</div>-->
                        </td>
                    </tr>
                    <tr height="100" class="tbl_buy_area">
                        <td colspan="7">최근 거래내역이 없습니다.</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="content_area content_area_bottom_left">
            <div class="g_subtitle">나의 보안 및 인증상태</div>
            <div class="my_security_state_wrap">
                <!--            <div class="box_line"></div>-->
                <div class="box_up">
                    <div class="box_inline">
                        <div class="security_wrap"><span class="SpGroup security_icon"></span></div>
                        <div class="security_center_go"><a href="/myroom/myinfo/myinfo_safe_settlement.html">보안센터<i class="arr3">icon</i></a></div>
                    </div>
                    <div class="box_inline box_inline2">
                        <div class="login_security_service box_font f_black1" id="login_security_service">로그인 보안 서비스 : <span class="service_state" id="login_security_state"></span></div>
                        <div class="login_alert_service box_font f_black1" id="login_alert_service">로그인 알림 서비스 : <span class="service_state" id="login_alert_state"></span></div>
                        <div class="payment_security_service box_font f_black1" id="payment_security_service">결제 보안 서비스 :<span class="service_state" id="payment_state"></span></div>
                    </div>
                </div>
                <div class="box_down ">
                    <div class="box_inline">
                        <div class="certify_wrap"><span class="SpGroup certify_icon"></span></div>
                        <div class="basic_title">인증상태</div>
                    </div>
                    <div class="box_inline box_inline2">
                        <div class="cert_excellent"></div>
                        <div class="cert_hp_on" onmouseover="$('#hppAuth').show();" onmouseout="$('#hppAuth').hide();">
                            <div id="hppAuth" class="certify">휴대폰 인증이 완료되었습니다.</div>
                        </div>
                        <input type="hidden" id="user_email" value="koomoseo@naver.co.kr">
                        <div class="cert_email" onmouseover="$('#emailAuth').show();" onmouseout="$('#emailAuth').hide();" onclick="fnemail();">
                            <div id="emailAuth" class="certify">이메일 인증이 가능합니다.</div>
                        </div>
                        <div class="cert_ipin_on" onmouseover="$('#ipinAuth').show();" onmouseout="$('#ipinAuth').hide();">
                            <div id="ipinAuth" class="certify">아이핀인증이 완료되었습니다.</div>
                        </div>
                        <div class="cert_account_on" onmouseover="$('#acAuth').show();" onmouseout="$('#acAuth').hide();">
                            <div id="acAuth" class="certify">계좌인증이 완료되었습니다.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content_area content_area_bottom_right">
            <div class="g_subtitle">나만의 전용 서비스</div>
            <div class="content_box_wrap">
                <div class="my_service_wrap">
                    <div class="content_icon"><span class="SpGroup my_service_icon"></span></div>
                    <div class="content_text my_service_text f_black1">나만의
                        <br/>서비스 메뉴</div>
                    <div class="content_btn my_service_btn f_black2"><a href="/myroom/customer/">바로가기 <i class="arr">icon</i></a></div>
                </div>
                <div class="my_service_wrap">
                    <div class="content_icon"><span class="SpGroup my_search_icon"></span></div>
                    <div class="content_text my_search_text f_black1">나만의
                        <br/>검색 메뉴</div>
                    <div class="content_btn my_search_btn f_black2"><a href="/myroom/customer/search.html">바로가기 <i class="arr">icon</i></a></div>
                </div>
                <div class="my_service_wrap">
                    <div class="content_icon"><span class="SpGroup my_setting_icon"></span></div>
                    <div class="content_text my_setting_text f_black1">개인
                        <br/>환경설정</div>
                    <div class="content_btn my_setting_btn f_black2"><a href="/myroom/customer/private.html">바로가기 <i class="arr">icon</i></a></div>
                </div>
            </div>
        </div>
        <div class="g_finish"></div>
        <div style="margin-top:15px;text-align:center;">
            <a href="https://www.itemmania.com/myroom/lotto/lottopot.html" target="_blank"> <img src="http://img3.itemmania.com/new_images/banner/210412_lottopot_820x76.jpg" width="820" height="76" alt="로또팟"> </a>
        </div>
    </div>
    <form id="reqCBAForm" name="reqCBAForm" method="post" action="/certify/ipin_auth/v3/module/ipin_request.php" target="frmTarget">
        <input type="hidden" name="wis" value="MyAuthState"> </form>
    <iframe src="about:blank" width="0" height="0" name="frmTarget" style="border:none"></iframe>
    <form id="reloadFrm" name="reloadFrm" method="post"> </form>
    <div class="g_finish"></div>
</div>
<!-- ▲ 컨텐츠 영역 //-->
@endsection

@section('foot_attach')
<script type="text/javascript" src="/mania/_js/_jquery3.js?v=190220"></script>
<script type="text/javascript" src="/mania/_js/_comm.min.js?v=21100516"></script>
<script type="text/javascript" src="/mania/_js/_gs_control_200924.min.js?v=21100816"></script>
<script type="text/javascript" src="/mania/_js/_common_initialize_new.min.js?v=21050316"></script>
<script type="text/javascript" src="/mania/js/index.js?201111"></script>
@endsection
