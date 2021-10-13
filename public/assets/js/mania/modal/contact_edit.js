/*
 * @title		ì—°ë½ì²˜ ìˆ˜ì •
 * @author		ê¹€í˜„ì§„
 * @date		2012.04.19
 * @update
 * @description
 */

function _init() {

    $.extend($('#slctContact')[0], {
        view_count : 4
    });
    $.extend($('#user_mobileA')[0], {
        view_count : 4
    });

    $('#user_mobileA')[0].nodeList.css('width', '45px');

    var frm = $('#frmContact');
    var checker = new _form_checker(frm);
    checker.add({
        custom : function() {
            if ($(this).find('input[name="user_password"]').val().isEmpty()) {
                alert('ë¹„ë°€ë²ˆí˜¸ë¥¼ ìž…ë ¥í•´ì£¼ì„¸ìš”.');
                $(this).find('input[name="user_password"]').focus();
                return false;
            }
            if ($(this).find('input[name="security_type"]').val() == "secret_card") {
                if ($(this).find('input[name="security_code_c"]').val().isEmpty()) {
                    alert('ê²°ì œë³´ì•ˆë²ˆí˜¸ë¥¼ ìž…ë ¥í•´ì£¼ì„¸ìš”.');
                    $(this).find('input[name="security_code_c"]').focus();
                    return false;
                }
                if ($(this).find('input[name="security_code_c"]').val().length != 4) {
                    alert('ê²°ì œë³´ì•ˆë²ˆí˜¸ë¥¼ ì •í™•ížˆ ìž…ë ¥í•˜ì„¸ìš”.');
                    $(this).find('input[name="security_code_c"]').val('');
                    $(this).find('input[name="security_code_c"]').focus();
                    return false;
                }
                $(this).find('input[name="security_code"]').val($(this).find('input[name="security_code_c"]').val());
                $(this).find('input[name="security_number"]').val($(this).find('input[name="security_number_c"]').val());
            } else if ($(this).find('input[name="security_type"]').val() == "secret_password") {
                if ($(this).find('input[name="security_number_p"]').val().length < 6) {
                    alert('ë¹„ë°€ë²ˆí˜¸ë¥¼ ì •í™•ížˆ ìž…ë ¥í•´ì£¼ì„¸ìš”.');
                    $(this).find('input[name="security_number_p"]').focus();
                    return false;
                }
                $(this).find('input[name="security_number"]').val($(this).find('input[name="security_number_p"]').val());
            } else if ($(this).find('input[name="security_type"]').val() == "motp") {
                if ($(this).find('input[name="security_number_p"]').val().length < 8) {
                    alert('MOTP ì¸ì¦ë²ˆí˜¸ë¥¼ ìž…ë ¥í•´ì£¼ì„¸ìš”.');
                    $(this).find('input[name="security_number_p"]').focus();
                    return false;
                }
                $(this).find('input[name="security_number"]').val($(this).find('input[name="security_number_p"]').val());
            }
            if($('#slctContact')[0].getValue() != 'N') {
                if ($(this).find('input[name="user_contactB"]').val().isEmpty()) {
                    alert('ì—°ë½ì²˜ë¥¼ ìž…ë ¥í•´ì£¼ì„¸ìš”.');
                    $(this).find('input[name="user_contactB"]').focus();
                    return false;
                }
                if ($(this).find('input[name="user_contactC"]').val().isEmpty()) {
                    alert('ì—°ë½ì²˜ë¥¼ ìž…ë ¥í•´ì£¼ì„¸ìš”.');
                    $(this).find('input[name="user_contactC"]').focus();
                    return false;
                }
            }
            if ($('#slctMobile_type')[0].getValue()!="N") {
                if ($(this).find('input[name="user_mobileB"]').val().isEmpty()) {
                    alert('íœ´ëŒ€í° ë²ˆí˜¸ë¥¼ ìž…ë ¥í•´ì£¼ì„¸ìš”.');
                    $(this).find('input[name="user_mobileB"]').focus();
                    return false;
                }
                if ($(this).find('input[name="user_mobileC"]').val().isEmpty()) {
                    alert('íœ´ëŒ€í° ë²ˆí˜¸ë¥¼ ìž…ë ¥í•´ì£¼ì„¸ìš”.');
                    $(this).find('input[name="user_mobileC"]').focus();
                    return false;
                }
            }
            fnCheckContact();
            return false;
        }
    });
    _form.protect.number(frm.find('input[name*="user_contact"]'));
    _form.protect.number(frm.find('input[name*="user_mobile"]'));

    _form.autotab(frm.find('input[name="user_contactB"]'), frm.find('input[name="user_contactC"]'));
    _form.autotab(frm.find('input[name="user_mobileB"]'), frm.find('input[name="user_mobileC"]'));

    if($('#slctMobile_type')[0].getValue() == 'N') {
        setMobileMode($('#slctMobile_type')[0].getValue());
    }
    if($('#slctContact')[0].getValue() == 'N') {
        setContactMode($('#slctContact')[0].getValue());
    }
}

function setMobileMode(value) {
    var frm = $("#frmContact");
    if (value=='N') {
        frm.find('input[name="user_mobileB"]').val('').attr('disabled', true);
        frm.find('input[name="user_mobileC"]').val('').attr('disabled', true);
        frm.find('#user_mobileA').unbind('click');
    } else {
        frm.find('input[name="user_mobileB"]').attr('disabled', false);
        frm.find('input[name="user_mobileC"]').attr('disabled', false);
        frm.find('#user_mobileA').bind('click', function () {
            frm.find('#user_mobileA')[0].fnClick();
        });
    }
}

function setContactMode(value){
    var frm = $('#frmContact');
    if(value=='N'){
        $('#user_contactB').val('').attr('disabled', true);
        $('#user_contactC').val('').attr('disabled', true);
    }else{
        $('#user_contactB').attr('disabled', false);
        $('#user_contactC').attr('disabled', false);
    }
}
/* â–¼ ì—°ë½ì²˜ ì¤‘ë³µì²´í¬ */
function fnCheckContact(){
    var slctContact = $('#slctContact')[0].getValue();
    var slctMobileType = $('#slctMobile_type')[0].getValue();
    var params = {
        user_id : $('#user_id').val(),
        contact_yn : (slctContact == 'N') ? 'N' : 'Y',
        mobile_yn : (slctMobileType == 'N') ? 'N' : 'Y'
    };

    if(params['contact_yn'] == 'Y') {
        params['user_contactA'] = slctContact;
        params['user_contactB'] = $('#user_contactB').val();
        params['user_contactC'] = $('#user_contactC').val();
    }
    if(params['mobile_yn'] == 'Y') {
        params['user_mobileA'] = $('#user_mobileA')[0].getValue();
        params['user_mobileB'] = $('#user_mobileB').val();
        params['user_mobileC'] = $('#user_mobileC').val();
    }

    fnAjax('/_include/_user_contact_restrict.php', 'text', 'POST', params, {
        complete:function(res){
            var rgResult = res.split('|');

            switch(rgResult[0]){
                case 'S':	$('#frmContact').off('submit').submit();
                    break;
                case 'C':
                    if(confirm(rgResult[1])) {
                        var certifyForm = $('#certifyForm');
                        certifyForm.find('[name="user_mobile_type"]').val(slctMobileType);
                        certifyForm.find('[name="user_mobileA"]').val(params['user_mobileA']);
                        certifyForm.find('[name="user_mobileB"]').val(params['user_mobileB']);
                        certifyForm.find('[name="user_mobileC"]').val(params['user_mobileC']);

                        _window.open('hp_auth', '', 420, 300);
                        certifyForm.attr({
                            'target':'hp_auth',
                            'action':'/certify/ini_hpp_contact/user_certify_form.html'
                        }).submit();
                    }
                    break;
                default:	alert(rgResult[1]);
            }

        },
        error:function(){
            alert('ì„œë¹„ìŠ¤ê°€ ì›í• í•˜ì§€ ì•ŠìŠµë‹ˆë‹¤. ìž ì‹œí›„ ì´ìš©í•´ ì£¼ì„¸ìš”.');
        }
    });
}
/* â–² ì—°ë½ì²˜ ì¤‘ë³µì²´í¬ */
