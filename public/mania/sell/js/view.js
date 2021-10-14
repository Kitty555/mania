/*
 * @title		íŒë§¤ë¬¼í’ˆ í™•ì¸
 * @author		ì´ì£¼ì›
 * @date		2007.10.19
 * @update		ìˆ˜ì •ë‚ ì§œ(ìˆ˜ì •ìž)
 * @description
 */

var e_sale = {
    'general': 0,
    'division': 1,
    'bargain': 2
};

var e_goods = {
    'money': 0,
    'item': 1,
    'account': 2,
    'etc': 3,
    'character': 6
};

var g_trade_info = {
    goods: 'money',
    trade_money: 0,
    ba_deny_money: 0
};

var checker = null;

function _init() {
    /* â–¼ í¥ì • ê±°ëž˜ì‹œ */
    var frm = $('#frmbaRequest');

    if (frm.length > 0) {
        checker = new _form_checker(frm);
        checker.add({
            inputObj: frm.find('input[name="ba_money"]'),
            strType: 'price',
            protect: true,
            message: 'í¥ì •ì‹ ì²­ê¸ˆì•¡ì„ ìž…ë ¥í•´ì£¼ì„¸ìš”'
        });
        checker.add({
            custom: function() {
                if ($('#user_without').val() == 6) {
                    if (!confirm('ê³ ê°ë‹˜ì€ í˜„ìž¬ íšŒì›íƒˆí‡´ ì‹ ì²­ ì§„í–‰ì¤‘ìž…ë‹ˆë‹¤.\nêµ¬ë§¤ ì‹ ì²­ ì§„í–‰ ì‹œ ì‹ ì²­í•˜ì‹  íšŒì›íƒˆí‡´ ì ‘ìˆ˜ê°€ ì² íšŒë©ë‹ˆë‹¤.\nê³„ì† ì§„í–‰ í•˜ì‹œê² ìŠµë‹ˆê¹Œ?')) {
                        return;
                    }
                }

                var ba_money = $(this).find('input[name="ba_money"]').val();
                ba_money = ba_money.replace(/[,]+/g, '');
                if (Number(ba_money) < 3000) {
                    alert('í¥ì •ì‹ ì²­ê¸ˆì•¡ì„ 3,000ì› ì´ìƒ ìž…ë ¥í•´ ì£¼ì„¸ìš”.');
                    $(this).find('input[name="ba_money"]').val('').focus();
                    return;
                }

                if (ba_money < parseInt($(this).find('input[name="ba_deny_money"]').val())) {
                    alert('ìµœì†Œ í¥ì •ê°€ëŠ¥ ê¸ˆì•¡ë³´ë‹¤ í° ê¸ˆì•¡ì„ ìž…ë ¥í•´ì£¼ì„¸ìš”.');
                    $(this).find('input[name="ba_money"]').val('').focus();
                    return;
                }

                /* â–¼ ë˜ì „ì•¤íŒŒì´í„° í†µí•©ì„œë²„ ì²˜ë¦¬ */
                if ($('#dfServer').length > 0) {
                    if (document.getElementById('dfServerList').serverList.getValue().code.isEmpty()) {
                        alert('ë¬¼í’ˆì„ ì „ë‹¬ ë°›ìœ¼ì‹¤ ì„œë²„ë¥¼ ì„ íƒ í•´ì£¼ì„¸ìš”.');
                        return false;
                    }
                }
                /* â–² ë˜ì „ì•¤íŒŒì´í„° í†µí•©ì„œë²„ ì²˜ë¦¬ */

                if($('#trade_kind').val() != 6){
                    if ($('#user_character').val().isEmpty()) {
                        alert('ë¬¼í’ˆì„ ì „ë‹¬ ë°›ìœ¼ì‹¤ ìºë¦­í„°ëª…ì„ ìž…ë ¥í•´ì£¼ì„¸ìš”.');
                        $('#user_character').focus();
                        return false;
                    }
                }

                /* â–¼ ì—°ë½ì²˜ ì¤‘ë³µì²´í¬ */
                var slctContact = $('#user_contactA').val();
                var slctMobileType = $('#slctMobile_type').val();
                var params = {
                    user_id: $('#user_id').val(),
                    trade_flag: 'Y',
                    contact_yn: (slctContact == 'N') ? 'N' : 'Y',
                    mobile_yn: (slctMobileType == 'N') ? 'N' : 'Y'
                };

                if (params.contact_yn == 'Y') {
                    params.user_contactA = slctContact;
                    params.user_contactB = $('#user_contactB').val();
                    params.user_contactC = $('#user_contactC').val();
                }
                if (params.mobile_yn == 'Y') {
                    params.user_mobileA = $('#user_mobileA').val();
                    params.user_mobileB = $('#user_mobileB').val();
                    params.user_mobileC = $('#user_mobileC').val();
                }

                fnAjax('/_include/_user_contact_restrict.php', 'text', 'POST', params, {
                    complete: function(res) {
                        var rgResult = res.split('|');
                        switch (rgResult[0]) {
                            case 'S':
                                if (!confirm('í¥ì •ê±°ëž˜ë¥¼ ì‹ ì²­í•˜ê² ìŠµë‹ˆê¹Œ?')) {
                                    return;
                                }
                                $('#frmbaRequest').off('submit').submit();
                                break;
                            default:
                                alert(rgResult[1]);
                        }
                    },
                    error: function() {
                        alert('ì„œë¹„ìŠ¤ê°€ ì›í• í•˜ì§€ ì•ŠìŠµë‹ˆë‹¤. ìž ì‹œí›„ ì´ìš©í•´ ì£¼ì„¸ìš”.');
                    }
                });
                /* â–² ì—°ë½ì²˜ ì¤‘ë³µì²´í¬ */
            }
        });

        frm.find('input[name="ba_money"]').bind('blur', checkBaMoney);

        /* â–¼ ë˜ì „ì•¤íŒŒì´í„° í†µí•©ì„œë²„ ì²˜ë¦¬ */
        var userCharacter = document.getElementById('user_character');
        if ($('#dfServer').length > 0) {
            var dfServerCode = document.querySelector('[name="df_server_code"]').value;
            var dfServerList = new ServerList(document.getElementById('dfServerList'), {
                autoComplete: '#df_server_code_text',
                allView: false,
                gameCode: '281',
                serverCode: dfServerCode,
                hidden_use: {
                    code: '[name="df_server_code"]',
                    text: ''
                }
            });

            userCharacter.setAttribute('maxlength', 27);
        }
        /* â–² ë˜ì „ì•¤íŒŒì´í„° í†µí•©ì„œë²„ ì²˜ë¦¬ */
    }
    /* â–² í¥ì • ê±°ëž˜ì‹œ */

    $('#trade_fraud').find('a').click(function() {
        $('#fraud_result').find('.result').attr('class', 'result');

        var strType = $(this).attr('data-type');
        var nTrade_id = $('#FraudTrade_id').val();
        var nSearchNumber = $('#srh_txt').val();

        ajaxRequest({
            url: 'thecheat_api.php',
            type: 'post',
            dataType: 'json',
            data: {
                strType: strType,
                searchNumber: nSearchNumber,
                trade_id: nTrade_id
            },
            success: function(res) {
                if (res.result == 'SUCCESS') {
                    // res.data : Y - í”¼í•´ì‚¬ë¡€ ìžˆìŒ / N - ì—†ìŒ
                    if (res.data == 'Y') {
                        $('#fraud_result').find('.result').addClass('warn');
                    } else {
                        $('#fraud_result').find('.result').addClass('none');
                    }
                    g_nodeSleep.enable($('#fraud_result'));
                } else {
                    alert(res.msg);
                }
            },
            error: function(res) {
                alert('ì„œë²„ì™€ì˜ ì ‘ì†ì´ ì›í™œí•˜ì§€ ì•ŠìŠµë‹ˆë‹¤.\nìž ì‹œí›„ ë‹¤ì‹œ ì‹œë„í•´ì£¼ì„¸ìš”.');
                return;
            }
        });
    });

    document.getElementById('wideview').addEventListener('click', function() {
        var detail = document.getElementById('detail_info');
        if (detail.classList.contains('wide') == true) {
            detail.classList.remove('wide');
            this.innerHTML = 'íŽ¼ì³ë³´ê¸°â–¼';
        } else {
            detail.classList.add('wide');
            this.innerHTML = 'íŽ¼ì¹¨ë‹«ê¸°â–²';
        }
    });

    var screenshot = document.getElementsByClassName('screenshot');
    var scLen = screenshot.length;
    for (var i = 0; i < scLen; i++) {
        screenshot[i].getElementsByTagName('a')[0].addEventListener('click', function(evt) {
            var idx = this.getAttribute('data-idx');
            var info = document.getElementById('screenshot_info').value;
            _window.open('imgview', '/myroom/sell/image_viewer.html?idx=' + idx + '&info=' + info, 2000, 1000, 'scrollbars=yes');
        })
    }

    _form.protect.number($('#srh_txt'));
}

function checkBaMoney() {
    var frm = $('#frmbaRequest');

    var ba_money = frm.find('input[name="ba_money"]').val().replace(/[,]+/g, '');

    if (ba_money.isEmpty()) {
        return;
    }

    var last = ba_money.substring(ba_money.length - 2, ba_money.length);
    if (last != '00') {
        alert('í¥ì •ì‹ ì²­ê¸ˆì•¡ì— ì‹­ì›ë‹¨ìœ„ì™€ ì¼ì›ë‹¨ìœ„ëŠ” 0ì´ì™¸ì˜ ìˆ«ìžë¥¼ ìž…ë ¥í• ìˆ˜ ì—†ìŠµë‹ˆë‹¤.\n\ní¥ì •ì‹ ì²­ê¸ˆì•¡ì„ ë‹¤ì‹œ ê¸°ìž¬í•´ ì£¼ì„¸ìš”.\n\nì˜ˆ) 12,345(ë¶ˆê°€ëŠ¥), 12,300(ê°€ëŠ¥)');
        frm.find('input[name="ba_money"]').val('').focus();
        return false;
    }

    if (g_trade_info.trade_money <= ba_money) {
        alert('ì¦‰ì‹œíŒë§¤ê¸ˆì•¡ ë³´ë‹¤ ìž‘ì€ ê¸ˆì•¡ì„ ìž…ë ¥í•´ì£¼ì„¸ìš”.');
        frm.find('input[name="ba_money"]').val('').focus();
        return;
    }

    if (g_trade_info.ba_deny_money > 0) {
        if (g_trade_info.ba_deny_money > ba_money) {
            alert('ìµœì†Œí¥ì • ê°€ëŠ¥ê¸ˆì•¡ ë³´ë‹¤ í° ê¸ˆì•¡ì„ ìž…ë ¥í•´ì£¼ì„¸ìš”.');
            frm.find('input[name="ba_money"]').val('').focus();
            return;
        }
    }
}

function fnCreditViewCheck() {
    var infoId = $('#infoId').val();
    var params = 'id=' + infoId;

    ajaxRequest({
        url: '/user/credit_ajax.php?t=' + (new Date()).getTime(),
        type: 'POST',
        data: params,
        success: function(res) {
            var rgResult = res.split('|');
            if (rgResult[0] == 'SUCCESS') {
                $('#encryptId').val(rgResult[1]);
                if (rgResult[2] && !rgResult[2].isEmpty()) {
                    $('#encryptType').val(rgResult[2]);
                }
                _window.open('credit_view', '', 570, 640);
                $('#creditForm').attr({
                    'target': 'credit_view',
                    'action': '/user/credit_view.html'
                }).submit();
            } else {
                alert(rgResult[1]);
            }
        }
    });
}
