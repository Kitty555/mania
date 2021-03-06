<!DOCTYPE html>
<html lang="ko">

<head>
    <title>아이템매니아</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <link type="text/css" rel="stylesheet" href="/assets/css/mania/sell/_comm.css">
    <link type="text/css" rel="stylesheet" href="/assets/css/mania/modal/_head_popup.css">
    <link type="text/css" rel="stylesheet" href="/assets/css/mania/modal/_table.css">
    <link type="text/css" rel="stylesheet" href="/assets/css/mania/modal/contact_edit.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.js"></script>
    <script type="text/javascript" src="/assets/js/mania/_comm.js"></script>
    <script type="text/javascript" src="/assets/js/mania/_gs_control.js"></script>
    <script type="text/javascript" src="/assets/js/mania/banner_module.js"></script>

</head>

<body>
<div id="g_SLEEP" class="g_sleep g_hidden ">
    <div id="g_OVERLAY" class="g_overlay"></div>
</div>
<div id="g_BODY">
    <div id="popup_title_bar"><img src="https://img2.itemmania.com/images/user/titlep_hp_edit.gif" width="89" height="19" alt="연락처 수정" /></div>
    <div id="g_POPUP">
        <form id="certifyForm" method="post">
            <input type="hidden" name="certify_info" value="YToyOntzOjk6ImZvcm1fbmFtZSI7czoxMDoiZnJtQ29udGFjdCI7czoxMDoic3VibWl0X3VybCI7czo1MzoiaHR0cHM6Ly90cmFkZS5pdGVtbWFuaWEuY29tL3VzZXIvY29udGFjdF9lZGl0X29rLmh0bWwiO30=">
            <input type="hidden" name="user_id" id="user_id" value="pejjwh">
            <input type="hidden" name="user_name" value="이장훈" />
            <input type="hidden" name="user_birth" value="19790607">
            <input type="hidden" name="user_gender" value="1">
            <input type="hidden" name="user_nation" value="1">
            <input type="hidden" name="user_mobile_type">
            <input type="hidden" name="user_mobileA">
            <input type="hidden" name="user_mobileB">
            <input type="hidden" name="user_mobileC"> </form>
        <form id="frmContact" action="https://trade.itemmania.com/user/contact_edit_ok.html" method="post">
            <input type="hidden" name="check" value="true">
            <input type="hidden" name="security_service_userinfo" value="N">
            <input type="hidden" name="security_type" value="none">
            <input type="hidden" name="security_code">
            <input type="hidden" name="security_number">
            <table class="g_blue_table">
                <colgroup>
                    <col width="120" />
                    <col width="" /> </colgroup>
                <tr>
                    <th>비밀번호</th>
                    <td>
                        <input type="password" name="user_password" class="g_password" maxlength="20" />
                    </td>
                </tr>
                <tr>
                    <th>자택/직장</th>
                    <td>
                        <select id="slctContact" name="user_contactA" class="g_hidden" onchange="setContactMode(arguments[0])">
                            <option value="02">02</option>
                            <option value="031">031</option>
                            <option value="032">032</option>
                            <option value="033">033</option>
                            <option value="041">041</option>
                            <option value="042">042</option>
                            <option value="043">043</option>
                            <option value="044">044</option>
                            <option value="051">051</option>
                            <option value="052">052</option>
                            <option value="053">053</option>
                            <option value="054">054</option>
                            <option value="055">055</option>
                            <option value="061">061</option>
                            <option value="062">062</option>
                            <option value="063">063</option>
                            <option value="064">064</option>
                            <option value="070">070</option>
                            <option value="N" selected>연락처없음</option>
                        </select> -
                        <input type="text" name="user_contactB" id="user_contactB" maxlength="4" class="g_text" value="" /> -
                        <input type="text" name="user_contactC" id="user_contactC" maxlength="4" class="g_text" value="" /> </td>
                </tr>
                <tr>
                    <th>휴대폰</th>
                    <td>
                        <select id="slctMobile_type" name="user_mobile_type" class="g_hidden" onchange="setMobileMode(arguments[0])">
                            <option value="1" selected>SKT</option>
                            <option value="2">KT</option>
                            <option value="3">LG U+</option>
                            <option value="4">SKT-A</option>
                            <option value="5">KT-A</option>
                            <option value="6">LG-A</option>
                            <option value="N">휴대폰없음</option>
                        </select>
                        <select id="user_mobileA" name="user_mobileA" class="g_hidden">
                            <option value="010" selected>010</option>
                            <option value="011">011</option>
                            <option value="016">016</option>
                            <option value="017">017</option>
                            <option value="018">018</option>
                            <option value="019">019</option>
                        </select> -
                        <input type="text" name="user_mobileB" id="user_mobileB" maxlength="4" class="g_text" value="4797" /> -
                        <input type="text" name="user_mobileC" id="user_mobileC" maxlength="4" class="g_text" value="3690" /> </td>
                </tr>
            </table> <span class="g_red1">※</span> <span class="g_red1_11">013으로 시작되는 번호는 연락처 등록이 불가 합니다.</span>
            <div class="g_btn">
                <input type="image" src="https://img3.itemmania.com/images/btn/btn_popup_enter.gif" class="g_image" width="63" height="34" alt="확인" /> &#160;
                <a href="#" onclick="self.close();"><img src="https://img4.itemmania.com/images/btn/btn_popup_cancel.gif" width="63" height="34" alt="취소" /></a>
            </div>
        </form>
    </div>
</div>
<script type="text/javascript" src="/assets/js/mania/modal/_form_check.js"></script>
<script type="text/javascript" src="/assets/js/mania/modal/contact_edit.js"></script>
<script type="text/javascript" src="/assets/js/mania/_window.js?v=190220"></script>
<script type="text/javascript">
    _window.resize(496, 350);
</script>
<script>
    _initialize();
</script>
</body>

</html>
