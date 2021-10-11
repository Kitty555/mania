@extends('layouts-mania.app')
@section('content')
<!--▼▼▼ 캐릭터 등롤 알리미 ▼▼▼ -->
<div class="g_container" id="g_CONTENT">
    <style>
        .aside .img_wrap {
            width: 214px;
            height: 98px;
            box-sizing: border-box;
            text-align: center;
            margin: 10px 0;
            border: 1px solid #E1E1E1;
        }

        .aside .img_wrap > .title {
            width: 182px;
            height: 30px;
            margin: 0 auto 10px;
            font-size: 13px;
            font-weight: bold;
            color: #636363;
            border-bottom: 1px solid #F1F1F1;
            line-height: 30px;
        }

        .aside .img_wrap > .img_mania_call {
            display: inline-block;
            width: 35px;
            height: 35px;
            background-position: -789px -545px;
            margin: 0 10px 0 15px;
        }

        .aside .img_wrap > .content {
            font-size: 12px;
            font-weight: bold;
            color: #767676;
        }

        .aside .callme {
            display: block;
            height: auto;
            padding: 15px 0;
            background-color: #EBF2F8
        }

        .aside .callme > .img_callme {
            display: inline-block;
            width: 43px;
            height: 35px;
            background-position: -826px -545px;
            margin: 0 3px 0 15px;
        }

        .aside .callme > .callme_title {
            margin-top: -2px;
            font-size: 13px;
            font-weight: bold;
            color: #0081DB;
            border: none;
            height: auto;
        }

        .aside .callme > .callme_title > span {
            font-size: 16px;
            font-weight: bold;
            color: #1D1D1D;
        }

        .aside .callme > .callme_title .go_btn {
            display: inline-block;
            width: 57px;
            height: 19px;
            margin-left: 6px;
            font-size: 11px;
            font-weight: bold;
            color: #FFF;
            background-color: #216ED7;
            text-align: center;
            line-height: 19px;
            vertical-align: text-bottom;
        }

        .ft_orange {
            color: #FF4E00;
        }
    </style>
    <div class="aside">
        <div class="nav_subject"><a href="/guide/" class="guide">이용안내</a></div>
        <div class="nav">
            <!-- ▼ 마일리지 충전 및 결제 //-->
            <div class=" nav_title">마일리지 충전 및 결제</div>
            <ul class="nav_sub g_list">
                <li> <a href="/guide/charge/mileage.html">마일리지 충전</a> </li>
                <li> <a href="/guide/charge/credit_card.html">신용카드 결제</a> </li>
                <li> <a href="/guide/charge/cell_phone.html">휴대폰 결제</a> </li>
                <li class='last'> <a href="/guide/charge/tcash.html">TCash(티캐시) 결제</a> </li>
            </ul>
            <!-- ▲ 마일리지 충전 및 결제 //-->
            <!-- ▼ 초보자가이드 //-->
            <div class=" nav_title">초보자가이드</div>
            <ul class="nav_sub g_list">
                <li> <a href="/guide/frshmn_guide/movie.html">동영상 가이드</a> </li>
                <li> <a href="/guide/frshmn_guide/howto.html">거래방법 보기</a> </li>
                <li> <a href="/guide/frshmn_guide/safe.html">안전 거래 시스템</a> </li>
                <li> <a href="/guide/frshmn_guide/trade.html">거래시 주의사항</a> </li>
                <li class='last'> <a href="/guide/frshmn_guide/fraud_srh.html">거래 사기 실시간 조회</a> </li>
            </ul>
            <!-- ▲ 초보자가이드 //-->
            <!-- ▼ 캐릭터 거래 가이드 //-->
            <div class=" nav_title">캐릭터 거래 가이드</a>
            </div>
            <ul class="nav_sub g_list">
                <li> <a href="/guide/char_trade/index.html?file=02">구글 거래 방법</a> </li>
                <li> <a href="/guide/char_trade/index.html?file=03">페이스북 거래방법</a> </li>
                <li> <a href="/guide/char_trade/index.html?file=04">게임사 거래방법</a> </li>
                <li class='last'> <a href="/guide/char_trade/index.html?file=05">게스트 거래방법</a> </li>
            </ul>
            <!-- ▲ 캐릭터 거래 가이드 //-->
            <!-- ▼ 물품 등록 알리미 //-->
            <div class=" nav_title">캐릭터 물품등록 알리미</a>
            </div>
            <ul class="nav_sub g_list">
                <li> <a href="/guide/goods_alarm/index.html?alarm=01">물품등록 알리미 서비스</a> </li>
                <li> <a href="/guide/goods_alarm/index.html?alarm=02">등록 알림 내역</a> </li>
                <li> <a href="/guide/goods_alarm/index.html?alarm=03">알림 설정 등록</a> </li>
            </ul>
            <!-- ▲ 물품 등록 알리미 //-->
            <div class=" nav_title"><a href="/guide/join/join.html">회원가입</a></div>
            <div class=" nav_title"><a href="/guide/myroom/myroom.html">마이룸</a></div>
            <div class=" nav_title"><a href="/guide/withdraw/withdraw.html">마일리지 출금</a></div>
            <div class=" nav_title"><a href="/guide/brokerage/brokerage.html">수수료</a></div>
            <div class=" nav_title"><a href="/guide/div_trade/index.html">분할거래</a></div>
            <div class=" nav_title"><a href="/guide/bar_trade/sell_reg.html">흥정거래</a></div>
            <div class=" nav_title"><a href="/guide/mobile/web.html">모바일 서비스</a></div>
            <div class=" nav_title"><a href="/guide/direct/index.html">즉시구매</a></div>
            <div class=" nav_title"><a href="/guide/cancel/cancel.html">거래취소/신고</a></div>
            <div class=" nav_title"><a href="/guide/paid/paid.html">유료등록서비스</a></div>
            <div class=" nav_title"><a href="/guide/convnce/talk_box.html">거래 편의기능</a></div>
            <div class=" nav_title"><a href="/guide/add/coupon.html">부가서비스</a></div>
            <div class=" nav_title"><a href="/guide/user/myservice.html">사용자 환경설정</a></div>
            <div class=" nav_title"><a href="/guide/safe_grade/safe_grade.html">신용등급/인증센터</a></div>
            <div class=" nav_title"><a href="/guide/protect/pay_plus.html">보안센터</a></div>
            <div class=" nav_title"><a href="/guide/compe/compe_info.html">보상제도</a></div>
        </div>
        <!-- ▼ 배너 //-->
        <div class="img_wrap">
            <p class="title">아이템매니아 고객센터</p> <span class="SpGroup img_mania_call g_left"></span>
            <p class="content"><span class="ft_orange">전화상담 1544-8278</span>
                <br/>팩스 0505-247-8278
                <br/>상담시간 : 24시간(연중무휴)</p>
        </div>
        <a href="javascript:_window.open('Callme','/customer/callme.html',500,420)" class="img_wrap callme"> <span class="SpGroup img_callme g_left"></span>
            <p class="callme_title">연락처를 남기세요.
                <br/><span>콜미 서비스</span><span class="go_btn">바로가기</span></p>
        </a>
        <!-- ▲ 배너 //-->
    </div>
    <div class="g_content">
        <div class="g_title"> 아이템매니아 서비스 완전정복! <span>고객님의 더 편하고 더 쉬운 거래를 위해 노력하겠습니다.</span> </div>
        <div class="top_box">
            <div class="guide_wrap">
                <div class="g_subtitle">처음 방문 고객을 위한 가이드</div>
                <ul class="guide_list">
                    <li class="safe_guide"> <a href="/guide/frshmn_guide/howto.html"><i class="SpGroup"></i>안전한<br>거래방법</a> </li>
                    <li class="safe_system"> <a href="/guide/frshmn_guide/safe.html"><i class="SpGroup"></i>거래안전<br>시스템</a> </li>
                    <li class="trade_notice"> <a href="/guide/frshmn_guide/trade.html"><i class="SpGroup"></i>거래 시<br>주의사항</a> </li>
                    <li class="mobile_svc"> <a href="/guide/mobile/app.html"><i class="SpGroup"></i>모바일<br>서비스</a> </li>
                </ul>
            </div>
            <div class="line"></div>
            <div class="service_qna">
                <div class="g_subtitle">서비스 이용 문의</div> <a href="/customer/report/">1:1 상담하기</a> <a href="/customer/faq/">FAQ 검색하기</a> <a href="javascript:_window.open('chat','/chat/agree.php', 580, 470);">실시간 채팅 상담</a> </div>
        </div>
        <div class="fv_menu">
            <a href="/guide/join/join.html" class="join">
                <p><span class="title">회원가입</span>
                    <br/>신규회원가입 방법</p> <span class="SpGroup icon_join"></span> </a>
            <a href="/guide/charge/mileage.html" class="charge">
                <p><span class="title">충전/결제</span>
                    <br/>다양한 방식의 결제수단</p> <span class="SpGroup icon_charge"></span> </a>
            <a href="/guide/withdraw/withdraw.html" class="payment">
                <p><span class="title">출금</span>
                    <br/>쉽고 빠른 출금서비스</p> <span class="SpGroup icon_payment"></span> </a>
            <a href="/guide/cancel/cancel.html" class="cancel">
                <p><span class="title">거래취소/신고</span>
                    <br/>거래취소 및 신고방법</p> <span class="SpGroup icon_cancel"></span> </a>
        </div>
        <!-- 주요 서비스 //-->
        <div class="g_smtitle">주요서비스 한 눈에 보기</div>
        <dl class="main_service"> <dt>회원관련</dt>
            <dd> <a href="/guide/join/join.html">회원가입</a> <a href="/guide/myroom/myroom.html">마이룸</a> <a href="/guide/safe_grade/safe_grade.html">신용등급/인증센터</a> </dd> <dt>거래관련</dt>
            <dd> <a href="/guide/cancel/cancel.html">거래취소/신고</a> <a href="/guide/brokerage/brokerage.html">수수료</a> <a href="/guide/direct/index.html">즉시구매</a> <a href="/guide/char_trade/index.html?file=02">캐릭터 거래</a> <a href="/guide/div_trade/index.html">분할거래</a> <a href="/guide/bar_trade/sell_reg.html">흥정거래</a> </dd> <dt>결제관련</dt>
            <dd> <a href="/guide/charge/mileage.html">마일리지 충전</a> <a href="/guide/charge/credit_card.html">신용카드 결제</a> <a href="/guide/charge/cell_phone.html">휴대폰 결제</a> <a href="/guide/charge/tcash.html">티캐시 결제</a> </dd> <dt>출금관련</dt>
            <dd> <a href="/guide/withdraw/withdraw.html">은행계좌 출금</a> </dd> <dt>보상관련</dt>
            <dd> <a href="/guide/compe/compe_info.html">회원보상제도</a> <a href="/guide/compe/compe_120_incident.html">200% 사고 보상</a> </dd> <dt>보안관련</dt>
            <dd> <a href="/guide/protect/pay_plus.html">로그인 플러스</a> <a href="/guide/protect/pay_login.html">로그인 도용방지</a> <a href="/guide/protect/pay_sms.html">SMS 알림</a> <a href="/guide/protect/pay_pc.html">PC등록 인증</a> <a href="/guide/protect/pay_ip.html">결제IP 인증</a> </dd> <dt>편의관련</dt>
            <dd> <a href="/guide/convnce/talk_box.html">1:1 대화함</a> <a href="/guide/convnce/hide_func.html">숨김기능</a> <a href="/guide/convnce/howto_search.html">물품 검색 방법</a> </dd> <dt>부가관련</dt>
            <dd> <a href="/guide/add/coupon.html">할인쿠폰</a> <a href="/guide/add/security_number.html">안심번호</a> <a href="/guide/add/security_number_plus.html">안심번호 플러스</a> </dd> <dt>모바일관련</dt>
            <dd> <a href="/guide/mobile/web.html">모바일웹</a> <a href="/guide/mobile/app.html">모바일앱</a> <a href="/guide/mobile/sise_app.html">시세앱</a> <a href="/guide/mobile/push.html">앱 PUSH 알림</a> </dd>
        </dl>
        <!-- 주요 서비스 //-->
    </div>
    <div class="g_finish"></div>
</div>
<!-- ▲ 컨텐츠 영역 //-->
@endsection
