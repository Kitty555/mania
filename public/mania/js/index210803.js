// íŒë§¤ìœ í˜•
var e_sale = {
    'general': 'ì¼ë°˜íŒë§¤',
    'division': 'ë¶„í• íŒë§¤',
    'bargain': 'í¥ì •íŒë§¤'
};

// íŒë§¤ìœ í˜• íƒ€ìž…ê°’
var e_sale_type = {
    'general': 0,
    'division': 1,
    'bargain': 2
};

var e_goods_text = {
    '': 'ê²Œìž„ë¨¸ë‹ˆ',
    'money': 'ê²Œìž„ë¨¸ë‹ˆ',
    'item': 'ì•„ì´í…œ',
    'character': 'ìºë¦­í„°',
    'etc': 'ê¸°íƒ€'
};

// í˜„ìž¬ì„ íƒëœ íƒ€ìž…
var e_select = {
    sale: 'general',
    goods: ''
};

// í˜„ìž¬ì„ íƒëœ ë‹¨ìœ„
var g_unit = '';

var e_use = {
    premium: 0,
    highlight: 0,
    quickIcon:0,
    rereg: 0
};

// í”„ë¦¬ë¯¸ì—„ ë ˆì´ì–´ í™œì„±í™”
var bPremiumLayer = false;
if (history.state !== null && history.state !== undefined && history.state.back == true) {
    document.querySelector('[name="user_goods_type"]').checked = true;
}

var lastListEl = '';
var regGameServer;

var tagList;

function _init() {

    var bargain = $('#bargain');

    var regGameServerEl = document.getElementById('reg_gameserver');
    regGameServer = new GameServerList(document.getElementById('reg_gameserver_list'), {
        containerWrapper: regGameServerEl,
        toggleContainer: regGameServerEl.getElementsByClassName('initial_screen')[0],
        formElement: '#frmSell',
        game: {
            autoComplete: '#searchRegGameServer',
            hidden_use: {
                code: '[name="game_code"]',
                text: '[name="game_code_text"]'
            },
            onCustomChange: function() {
                e_select.goods = '';

                $('.favorite').removeClass('on');

                if ($('.item_detail_opts').hasClass('g_hidden') == true) {
                    $('.item_detail_opts').removeClass('g_hidden');
                    $('#user_title').prop('readonly', false);
                }

                SafetyNumber();
                getFreeUse();
            }
        },
        server: {
            use: true,
            allView: false,
            hidden_use: {
                code: '[name="server_code"]',
                text: '[name="server_code_text"]'
            }
        },
        goods: {
            use: true,
            hidden_use: {
                code: '[name="user_goods"]',
                text: ''
            },
            onCustomChange: function(el, e) {

                $('.favorite_icon').removeClass('on');
                if (_myService.mySearchXml === null) {
                    _myService.getFavorite(mySearchListCheck);
                } else {
                    mySearchListCheck();
                }

                if (this.getValue().code === 'money') {
                    $('#division').removeClass('g_hidden');
                    if (bargain.hasClass('g_hidden') === false) {
                        bargain.addClass('g_hidden');
                    }
                } else {
                    bargain.removeClass('g_hidden');
                    if (this.getValue().code === 'character') {
                        if ($('#division').hasClass('g_hidden') === false) {
                            $('#division').addClass('g_hidden');
                        }
                    } else {
                        $('#division').removeClass('g_hidden');
                    }
                }
                if (e_select.goods !== this.getValue().code) {
                    e_select.goods = this.getValue().code;
                    if (lastListEl == '') {
                        document.querySelectorAll('[name="user_goods_type"]')[0].checked = true;
                    }
                }

                changeTemplate();

                /* â–¼ 200% ë³´ìƒ */
                if (g_compensation == 'Y') {
                    if (e_select.goods == 'money' || e_select.goods == 'item') {
                        $('#compensation').show();
                    } else {
                        $('#compensation').hide();
                    }
                }
                /* â–² 200% ë³´ìƒ */

                if (e !== undefined) {
                    var m = this;
                    setTimeout(function() {
                        m.onClose();
                    }, 100);
                }
            }
        }
    });

    // gameServer.onCustomCloseBefore = function() {
    // 	if (this.gameList.selected && !this.serverList.selected) {
    // 		alert('ì„œë²„ë¥¼ ì„ íƒí•´ì£¼ì„¸ìš”.');
    // 		return false;
    // 	}
    // 	return true;
    // };

    $('[name="user_goods_type"]').on('click', changeTemplate);
    // document.querySelectorAll('[name="user_goods_type"]').addEventListener('click', changeTemplate);

    // ë¬¼í’ˆê¸°ë³¸ê°’ì ìš©
    document.getElementById('fixed_trade_subject').addEventListener('click', function() {
        var strFixTag = document.getElementById('trade_sign_txt').innerHTML;
        if (strFixTag.isEmpty() === true) {
            if (confirm('ë¬¼í’ˆì œëª© ê¸°ë³¸ê°’ìœ¼ë¡œ ì„¤ì •ëœ ê°’ì´ ì—†ìŠµë‹ˆë‹¤.\në¬¼í’ˆ ì œëª© ê¸°ë³¸ê°’ì„ ì„¤ì •í•˜ì‹œê² ìŠµë‹ˆê¹Œ?')) {
                _window.open('fixed_title', 'fixed_trade_subject.html', 500, 300);
            }
            this.checked = false;
            return;
        }
        strFixTag += ' ';
        if (this.checked === true) {
            document.getElementById('user_title').value = strFixTag + document.getElementById('user_title').value;
        } else {
            document.getElementById('user_title').value = document.getElementById('user_title').value.replace(strFixTag, '');
        }
    });

    /* â–¼ ìƒì„¸ì„¤ëª… ë¬¸êµ¬ì„ íƒ */
    $("[name='text_select']").on('click', function() {
        var userTextObj = document.getElementById('user_text');

        if (this.value === '1') {
            userTextObj.value = '';
            userTextObj.readOnly = false;
        } else {
            setDefaultText();
        }
    });
    /* â–² ìƒì„¸ì„¤ëª… ë¬¸êµ¬ì„ íƒ */

    document.getElementById('d_template').addEventListener('click', function(e) {
        if (e.target.name === 'gamemoney_unit') {
            var unit = e.target.value;
            if (e.target.value === '1') {
                unit = '';
            }
            $('.unit').text(unit);
        }
    });

    document.getElementById('user_premium_time').addEventListener('change', function() {
        chargePremiumService();
        chargeServiceCalc();
    });
    document.getElementById('rereg_count').addEventListener('change', function() {
        chargePremiumService();
        var result = chargeServiceCalc.call(this);
        if (result === true) {
            var setVal = ['0íšŒ', '0ë¶„'];
            if (this.value.isEmpty() === false) {
                setVal[0] = this.value + 'íšŒ';
                setVal[1] = document.getElementById('rereg_time').value + 'ë¶„';
            }
            document.getElementById('rereg_cnt').innerHTML = setVal[0];
            document.getElementById('minute').innerHTML = setVal[1];
        }
    });
    document.getElementById('user_icon_use').addEventListener('change', function() {
        chargePremiumService();
        chargeServiceApply.call(this, 'f_bold');
    });

    document.getElementById('user_bluepen_use').addEventListener('change', function() {
        chargePremiumService();
        chargeServiceApply.call(this, 'f_blue1');
    });
    document.getElementById('user_quickicon_use').addEventListener('change', function() {
        chargePremiumService();
        chargeServiceCalc();
        //chargeServiceApply.call(this, 'f_blue1');
    });

    document.getElementById('pop_user_premium_time').addEventListener('change', function() {
        $('#user_premium_time').val(this.value);
        chargePremiumService();
        chargeServiceCalc();
    });

    document.getElementById('premium_btn').addEventListener('click', premiumSet);

    if (document.getElementById('compen_guide') !== null) {
        LayerControl({
            el: document.getElementById('compen_guide'),
            layer: document.getElementById('compen_layer'),
            mask: false,
            type: 'style'
        });
    }

    document.addEventListener('click', function(e) {
        if (e.target.name === 'power_regist') {
            fnpoweruse.call(e.target);
        }
    });

    if (document.getElementById('wideview') !== null) {
        document.getElementById('wideview').addEventListener('click', function() {
            var detail = document.getElementById('user_text');
            if (detail.classList.contains('wide') == true) {
                detail.classList.remove('wide');
                this.innerHTML = 'íŽ¼ì³ë³´ê¸°â–¼';
            } else {
                detail.classList.add('wide');
                this.innerHTML = 'íŽ¼ì¹¨ë‹«ê¸°â–²';
            }
        });
    }

    if (document.getElementById('myLastList') !== null) {
        document.getElementById('myLastList').addEventListener('click', myLastListCall);
    }

    if (document.getElementById('credit_benefit') !== null) {
        document.getElementById('credit_benefit').addEventListener('click', getCreditBenefit);
    }

    LayerControl({
        layer: document.getElementById('dvPopup'),
        close_btn: document.getElementById('dvPopup').querySelector('.close_w'),
        type: 'style'
    });

    if (document.getElementById('lastList') !== null) {
        LayerControl({
            layer: document.getElementById('lastList'),
            close_btn: document.getElementById('lastList').querySelector('.close'),
            mask: false,
            type: 'style'
        });
    }

    changeTemplateAddCheck();

    new FileStyleVer2(document.querySelectorAll('[name="user_screen[]"]'));
}

function getFreeUse() {
    var gameCode = regGameServer.gameList.getValue().code;
    ajaxRequest({
        url: '/_include/_get_free_use.php',
        dataType: 'JSON',
        type: 'POST',
        data: 'game_code=' + gameCode,
        success: function(res) {
            e_use.premium = res.premium;
            e_use.quickIcon = res.quickicon;
            e_use.highlight = res.highlight;
            $('#user_premium_time').val('');
            $('#user_icon_use').val('');
            $('#user_bluepen_use').val('');
            $('#user_quickicon_use').val('');
            chargeServiceCalc();
        }
    });
}

/**
 * ì‹ ìš©ë“±ê¸‰ í˜œíƒë°›ê¸°
 */
function getCreditBenefit() {

    ajaxRequest({
        url: '/myroom/myinfo/credit_rating_ok.php',
        type: 'post',
        data: 'type=1',
        success: function(data) {
            var returnData = data.split(";");
            switch (returnData[0]) {
                case "Empty" :
                    alert("ìž˜ëª»ëœ ì ‘ê·¼ìž…ë‹ˆë‹¤.");
                    break;
                case "CreditNo" :
                    alert("ì‹ ìš©ë“±ê¸‰ì„ ì—…ë°ì´íŠ¸í•˜ì§€ ëª»í–ˆìŠµë‹ˆë‹¤. ê´€ë¦¬ìžì—ê²Œ ë¬¸ì˜í•´ ì£¼ì„¸ìš”.");
                    break;
                case "CreditNo2" :
                    alert("ì‹ ìš©ë“±ê¸‰ì„ ê°€ì ¸ì˜¤ì§€ ëª»í–ˆìŠµë‹ˆë‹¤. ê´€ë¦¬ìžì—ê²Œ ë¬¸ì˜í•´ ì£¼ì„¸ìš”.");
                    break;
                case "Dberror" :
                    alert("ì„œë¹„ìŠ¤ê°€ ì›í• í•˜ì§€ ì•ŠìŠµë‹ˆë‹¤. ìž ì‹œ í›„ ì´ìš©í•´ì£¼ì„¸ìš”");
                    break;
                case "Overlap" :
                    if (returnData[1] == 1) {
                        alert("ì´ë¯¸ ë¬´ë£Œì´ìš©ê¶Œì„ ë°œê¸‰ ë°›ìœ¼ì…¨ìŠµë‹ˆë‹¤.");
                    } else {
                        alert("ì´ë¯¸ ì˜¥ì…˜ìž…ì°°ê¶Œì„ ë°œê¸‰ ë°›ìœ¼ì…¨ìŠµë‹ˆë‹¤");
                    }
                    break
                case "Rowerror" :
                    alert("í”„ë¦¬ë¯¸ì—„ ì´ìš©ê¶Œì„ ì§€ê¸‰í•˜ì§€ ëª»í–ˆìŠµë‹ˆë‹¤. ë‹¤ì‹œ ì‹œë„í•´ì£¼ì„¸ìš”.");
                    break;
                case "Rowerror2" :
                    alert("ë¬¼í’ˆê°•ì¡° ì´ìš©ê¶Œì„ ì§€ê¸‰í•˜ì§€ ëª»í–ˆìŠµë‹ˆë‹¤. ë‹¤ì‹œ ì‹œë„í•´ì£¼ì„¸ìš”.");
                    break;
                case "Rowerror3" :
                    alert("ì˜¥ì…˜ìž…ì°°ê¶Œì„ ì§€ê¸‰í•˜ì§€ ëª»í–ˆìŠµë‹ˆë‹¤. ë‹¤ì‹œ ì‹œë„í•´ì£¼ì„¸ìš”.");
                    break;
                case "Rowerror4" :
                    alert("ì¶œê¸ˆ ë¬´ë£Œì´ìš©ê¶Œì„ ì§€ê¸‰í•˜ì§€ ëª»í–ˆìŠµë‹ˆë‹¤. ë‹¤ì‹œ ì‹œë„í•´ì£¼ì„¸ìš”.");
                    break;
                case "Success" :
                    alert('ë¬´ë£Œì´ìš©ê¶Œì´ ë°œê¸‰ë˜ì—ˆìŠµë‹ˆë‹¤.\n[ë¬´ë£Œì´ìš©ê¶Œë³´ê¸°]ë¥¼ í™•ì¸í•´ì£¼ì„¸ìš”.');
                    getFreeUse();
                    break;
            }
        },
        error: function() {
            alert("ì‹œìŠ¤í…œ ì ê²€ì¤‘ìž…ë‹ˆë‹¤. ìž ì‹œ í›„ ì´ìš©í•´ ì£¼ì„¸ìš”.");
        }
    });
}


/**
 * í…œí”Œë¦¿ ë³€ê²½
 */
function changeTemplate() {
    if (regGameServer.serverList.selected) {
        g_unit = regGameServer.serverList.selectedData.U;
    }

    var userGoods = document.querySelector('[name="user_goods"]').value;
    var userGoodsType = document.querySelector('[name="user_goods_type"]:checked').value;
    var gameCode = regGameServer.gameList.getValue().code;
    var serverCode = regGameServer.serverList.getValue().code;
    var integrationServer = '';
    if (document.getElementById('integration_server') !== null) {
        integrationServer = document.getElementById('integration_server').value;
    }
    e_select.goods = userGoods || 'money';
    e_select.sale = userGoodsType;


    setDefaultText();
    fnPower();

    ajaxRequest({
        url: '/sell/include/index_template.html',
        type: 'POST',
        data: {
            user_goods: userGoods,
            user_goods_type: userGoodsType,
            money: g_unit,
            game_code: gameCode,
            server_code: serverCode,
            integration_server: integrationServer
        },
        success: function(res) {
            /* ë¬¼í’ˆë“±ë¡ ì•Œë¦¬ë¯¸ */
            ajaxRequest({
                url: '/myroom/goods_alarm/_ajax_process.php',
                type: 'post',
                dataType: 'json',
                data: {
                    'mode':'game_check',
                    'game_code':gameCode
                },
                success: function(res) {

                    var data = {
                        type:userGoods,
                        gameCode:gameCode,
                        serverCode:serverCode
                    };

                    if(res.DAT == 'Y' && userGoods =='character')
                    {
                        $('#alarm_line').show();
                        getTagList(data);
                    }
                    else
                    {
                        $('#alarm_line').hide();
                    }
                }
            });

            history.pushState({back: true}, '', location.href);
            $('#d_template').html(res);
            changeTemplateAddCheck();
            if (typeof (reRegSet) === 'function') {
                reRegSet();
            }
        }
    });
}

function setDefaultText() {
    var strGoods = e_goods_text[e_select.goods];
    if (e_select.goods === 'money' && g_unit.isEmpty() === false) {
        strGoods = g_unit;
    }

    var defaultText = strGoods + ' íŒë‹ˆë‹¤.';
    var fixed_trade_subject = document.getElementById('fixed_trade_subject');
    var strFixTag = document.getElementById('trade_sign_txt').innerHTML;
    strFixTag += ' ';

    document.getElementById('user_title').value = defaultText;

    if (fixed_trade_subject.checked === true) {
        document.getElementById('user_title').value = strFixTag + defaultText;
    }

    if (document.querySelector('[name="text_select"]:checked').value === '0') {
        document.getElementById('user_text').value = defaultText;
        document.getElementById('user_text').readOnly = true;
    }
}

function changeTemplateAddCheck() {
    try {
        var frm = document.forms.frmSell;
        if (frm.checker) {
            frm.checker.free();
        }
        var formCheck = new FormChecker('frmSell');
        var userGoods = document.querySelector('[name="user_goods"]');
        var userGoodsType = document.querySelector('[name="user_goods_type"]:checked');
        var gameCode = regGameServer.gameList.getValue().code;

        formCheck.add({name: 'game_code', msg: 'ê²Œìž„ì„ ì„ íƒí•´ì£¼ì„¸ìš”.', focus: '#searchRegGameServer'});
        formCheck.add({name: 'server_code', msg: 'ì„œë²„ë¥¼ ì„ íƒí•´ì£¼ì„¸ìš”.', focus: '#searchRegGameServer'});
        formCheck.add({name: 'game_code_text', msg: 'ê²Œìž„ì„ ì„ íƒí•´ì£¼ì„¸ìš”.', focus: '#searchRegGameServer'});
        formCheck.add({name: 'server_code_text', msg: 'ì„œë²„ë¥¼ ì„ íƒí•´ì£¼ì„¸ìš”.', focus: '#searchRegGameServer'});
        formCheck.add({name: 'user_goods', msg: 'ë¬¼í’ˆì¢…ë¥˜ë¥¼ ì„ íƒí•´ì£¼ì„¸ìš”.', focus: '#searchRegGameServer'});
        formCheck.add({name: 'user_goods_type', msg: 'íŒë§¤ìœ í˜•ì„ ì„ íƒí•´ì£¼ì„¸ìš”.'});

        if (userGoodsType.value === 'division') {
            LayerControl({
                el: document.getElementById('discount_guide'),
                layer: document.getElementById('discount_layer'),
                mask: false,
                type: 'style'
            });

            formCheck.add({name: 'user_quantity_min', msg: 'ìµœì†Œ íŒë§¤ ìˆ˜ëŸ‰ì„ ìž…ë ¥í•´ì£¼ì„¸ìš”.', type: 'price', protect: true});
            formCheck.add({name: 'user_quantity_max', msg: 'ìµœëŒ€ íŒë§¤ ìˆ˜ëŸ‰ì„ ìž…ë ¥í•´ì£¼ì„¸ìš”.', type: 'price', protect: true});
            formCheck.add({name: 'user_division_unit', msg: 'ë¶„í• ë‹¨ìœ„ë¥¼ ìž…ë ¥í•´ ì£¼ì„¸ìš”.', type: 'price', protect: true});
            formCheck.add({
                name: 'user_division_price',
                msg: 'ê±°ëž˜ê¸ˆì•¡ì€ 100ì› ì´ìƒìœ¼ë¡œ ìž…ë ¥í•´ ì£¼ì„¸ìš”',
                type: 'price',
                protect: true,
                range: {min: 100}
            });
            formCheck.add({
                custom: function() {
                    if (frm.user_division_price.value.numeric() % 10 > 0) {
                        alert('ê±°ëž˜ê¸ˆì•¡ì— ì¼ì›ë‹¨ìœ„ëŠ” 0ì´ì™¸ì˜ ìˆ«ìžë¥¼ ìž…ë ¥í• ìˆ˜ ì—†ìŠµë‹ˆë‹¤.\n\nê±°ëž˜ê¸ˆì•¡ì„ ë‹¤ì‹œ ê¸°ìž¬í•´ ì£¼ì„¸ìš”.\n\nì˜ˆ) 12,345(ë¶ˆê°€ëŠ¥), 12,340(ê°€ëŠ¥)');
                        frm.user_division_price.value = '';
                        frm.user_division_price.focus();
                        return false;
                    }

                    var quaMin = document.getElementById('user_quantity_min');
                    var quaMax = document.getElementById('user_quantity_max');
                    var divUnit = document.getElementById('user_division_unit');
                    var divPrice = document.getElementById('user_division_price');
                    var discountUse = document.querySelector('[name="discount_use"]');
                    var quaMinVal = quaMin.value.numeric();
                    var quaMaxVal = quaMax.value.numeric();
                    var divUnitVal = divUnit.value.numeric();
                    var divPriceVal = divPrice.value.numeric();

                    if (divUnitVal > quaMinVal) {
                        alert('ë¶„í• ë‹¨ìœ„ê°€ ìµœì†Œìˆ˜ëŸ‰ë³´ë‹¤ í½ë‹ˆë‹¤.');
                        quaMin.value = '';
                        quaMin.onfocus();
                        return false;
                    }

                    if (quaMinVal > quaMaxVal) {
                        alert('ìµœì†Œìˆ˜ëŸ‰ì´ ìµœëŒ€ìˆ˜ëŸ‰ë³´ë‹¤ í½ë‹ˆë‹¤.');
                        quaMax.value = '';
                        quaMax.onfocus();
                        return false;
                    }

                    if (quaMinVal === quaMaxVal) {
                        alert('ìµœì†Œìˆ˜ëŸ‰ê³¼ ìµœëŒ€ìˆ˜ëŸ‰ì´ ê°™ìŠµë‹ˆë‹¤.\nìˆ˜ëŸ‰ì„ ë‹¤ì‹œ í™•ì¸í•´ì£¼ì„¸ìš”.');
                        quaMax.value = '';
                        quaMax.onfocus();
                        return false;
                    }

                    if (quaMinVal / divUnitVal * divPriceVal < 3000) {
                        alert('ìµœì†Œ íŒë§¤ê¸ˆì•¡ì´ 3,000ì› ë¯¸ë§Œìž…ë‹ˆë‹¤.');
                        divPrice.value = '';
                        divPrice.focus();
                        return false;
                    }

                    if (discountUse.checked === true) {
                        var discountQnt = document.getElementById('discount_quantity');
                        var disQntCnt = document.getElementById('discount_quantity_cnt');
                        var disPrice = document.getElementById('discount_price');

                        if (discountQnt.value.isEmpty()) {
                            alert('í• ì¸ì ìš© ìˆ˜ëŸ‰ì„ ìž…ë ¥í•´ ì£¼ì„¸ìš”.');
                            discountQnt.onfocus();
                            return false;
                        }
                        if (disPrice.value.isEmpty()) {
                            alert('í• ì¸ê¸ˆì•¡ì€ 100ì› ì´ìƒìœ¼ë¡œ ìž…ë ¥í•´ ì£¼ì„¸ìš”.');
                            disPrice.onfocus();
                            return false;
                        }
                        if (Math.ceil(quaMinVal / divUnitVal) > disQntCnt.value.numeric()) {
                            alert('í• ì¸ì ìš©ì€ ' + Math.ceil(quaMinVal / divUnitVal) + 'ë²ˆ ì´ìƒ ê°€ëŠ¥í•©ë‹ˆë‹¤.');
                            disQntCnt.value = Math.ceil(quaMinVal / divUnitVal);
                            disQntCnt.onfocus();
                            return false;
                        }
                        if (Math.floor(quaMaxVal / 2) < Number(disQntCnt.value.numeric() * discountQnt.value.numeric())) {
                            alert('í• ì¸ì ìš©ì€ ' + Math.floor(quaMaxVal / quaMinVal / 2) + 'ë²ˆ ê¹Œì§€ ê°€ëŠ¥í•©ë‹ˆë‹¤.');
                            disQntCnt.value = '';
                            disQntCnt.onfocus();
                            return false;
                        }
                        if (divPriceVal / 2 < disPrice.value.numeric()) {
                            alert('ìµœëŒ€ í• ì¸ê¸ˆì•¡ì„ ì´ˆê³¼í•˜ì˜€ìŠµë‹ˆë‹¤.');
                            disPrice.value = '';
                            disPrice.onfocus();
                            return false;
                        }
                    }
                    return true;
                }
            });

            frm.user_division_price.onblur = checkPrice;
            frm.user_quantity_min.onkeyup = function() {
                if (frm.discount_use.checked == true) {
                    frm.discount_use.checked = false;
                    fnRevenDiscount();
                }
            };
            frm.user_division_unit.onkeyup = function() {
                if (frm.discount_use.checked == true) {
                    frm.discount_use.checked = false;
                    fnRevenDiscount();
                }
            };

        } else {
            if (userGoods.value === '' || userGoods.value === 'money') {
                formCheck.add({name: 'user_quantity', msg: 'íŒë§¤ ìˆ˜ëŸ‰ì„ ìž…ë ¥í•´ì£¼ì„¸ìš”.', type: 'price', protect: true});
            }
            formCheck.add({name: 'user_price', msg: 'íŒë§¤ ê¸ˆì•¡ì„ ìž…ë ¥í•´ì£¼ì„¸ìš”.', type: 'price', protect: true});
            formCheck.add({
                custom: function() {
                    if (frm.user_price.value.numeric() % 10 > 0) {
                        alert('ê±°ëž˜ê¸ˆì•¡ì— ì¼ì›ë‹¨ìœ„ëŠ” 0ì´ì™¸ì˜ ìˆ«ìžë¥¼ ìž…ë ¥í• ìˆ˜ ì—†ìŠµë‹ˆë‹¤.\nê±°ëž˜ê¸ˆì•¡ì„ ë‹¤ì‹œ ê¸°ìž¬í•´ ì£¼ì„¸ìš”.\nì˜ˆ) 12,345(ë¶ˆê°€ëŠ¥), 12,340(ê°€ëŠ¥)');
                        frm.user_price.value = '';
                        frm.user_price.focus();
                        return false;
                    }
                    return true;
                }
            });

            frm.user_price.onblur = checkPrice;

            $('#game_money').find('.g_txtbtn').on({
                click: function() {
                    var userQuan = frm.user_quantity;
                    var userQuanVal = userQuan.value.numeric();
                    var clickVal = this.innerHTML.numeric();
                    if (this.innerHTML.numeric() === 0) {
                        userQuan.value = '';
                    } else {
                        var sellQuantity = parseInt(userQuanVal);
                        sellQuantity += clickVal;
                        if (sellQuantity >= 999999) sellQuantity = 999999;
                        userQuan.value = sellQuantity.currency();
                    }
                }
            });

            document.getElementById('user_price').addEventListener('keyup', function() {
                commissionCalcu.call(this);
            });

            if (userGoodsType.value === 'bargain') {
                formCheck.add({
                    custom: function() {
                        var userDenyUse = document.getElementById('user_deny_use');
                        if (userDenyUse.checked === true && frm.user_price_limit.value.isEmpty()) {
                            alert('ìµœì € í¥ì • ê°€ê²© ì„¤ì •ê¸ˆì•¡ì„ ìž…ë ¥í•´ì£¼ì„¸ìš”.');
                            frm.user_price_limit.focus();
                            return false;
                        }
                        return true;
                    }
                });

                document.getElementById('user_deny_use').addEventListener('click', function() {
                    if (this.checked === true) {
                        document.getElementById('min_user_bargain').style.display = 'block';
                    } else {
                        document.getElementById('min_user_bargain').style.display = 'none';
                        frm.user_price_limit.value = '';
                    }
                });
                frm.user_price_limit.addEventListener('keyup', function() {
                    commissionCalcu.call(this, '2');
                });

                Form.protect.price(frm.user_price_limit);
                frm.user_price_limit.onblur = getPriceLimit;

            }
        }


        if (document.getElementById('slt_item_info') !== null) {
            formCheck.add({
                custom: function() {
                    var itemInfo = document.getElementById('iteminfo_use');
                    if (itemInfo.checked === true && frm.slt_item_info.value.isEmpty() === true) {
                        alert('ì•„ì´í…œì •ë³´ë¥¼ ìž…ë ¥í•´ì£¼ì„¸ìš”.');
                        frm.iteminfo_dept1.focus();
                        return false;
                    }
                    return true;
                }
            });

            var iteminfoDept1 = document.getElementById('iteminfo_dept1');
            var rgItemInfo;
            ajaxRequest({
                url: '/_json/search_item.json',
                dataType: 'JSON',
                success: function(res) {
                    rgItemInfo = res['650'];
                    var list = rgItemInfo.list[0];
                    var newOption = '';
                    Object.keys(list.item).sort().forEach(function(t) {
                        newOption = document.createElement('option');
                        newOption.value = t;
                        newOption.text = list.item[t].name;
                        iteminfoDept1.appendChild(newOption);
                    });
                }
            });
            $(iteminfoDept1).on('change', function() {
                var iteminfoDept2 = document.getElementById('iteminfo_dept2');
                var itemTitle = document.getElementById('item_title');
                var pName = rgItemInfo.list[0].item[this.value].p_name;
                var items = rgItemInfo.list[0].item[this.value].items;
                if (pName === undefined) {
                    pName = 'ì§ì—…';
                }
                iteminfoDept2.innerHTML = '';

                var newOption = document.createElement('option');
                newOption.value = '';
                newOption.text = 'ì„ íƒ';
                iteminfoDept2.appendChild(newOption);
                Object.keys(items).forEach(function(t) {
                    newOption = document.createElement('option');
                    newOption.value = items[t].code;
                    newOption.text = items[t].name;
                    iteminfoDept2.appendChild(newOption);
                });

                itemTitle.innerHTML = pName;
            });

            document.getElementById('item_add').addEventListener('click', fnSltItemAdd);
            document.getElementById('iteminfo_use').addEventListener('click', function() {
                if (this.checked === false) {
                    var itemInfoResult = document.getElementById('item_info_result');
                    if (itemInfoResult.classList.contains('f_red1') === false) {
                        itemInfoResult.innerHTML = 'ì•„ì´í…œ ì •ë³´ë¥¼ ì„ íƒí•˜ì‹œë©´ íŒë§¤ì— ë„ì›€ì´ ë©ë‹ˆë‹¤.';
                        itemInfoResult.classList.add('f_red1');
                    }
                    iteminfoDept1.options[0].selected = true;
                    $(iteminfoDept1).trigger('change');
                    frm.slt_item_info.value = '';
                }
            });
        }

        if (document.getElementById('item_detail_srh_service') !== null) {
            formCheck.add({
                custom: function() {
                    var itemInfo = document.getElementById('iteminfo_use');
                    if (itemInfo.checked === true && frm.iteminfo_use_complete.value === 'N') {
                        alert('ì•„ì´í…œì •ë³´ ìž…ë ¥ í›„ ë“±ë¡ì´ ê°€ëŠ¥í•©ë‹ˆë‹¤.');
                        frm.iteminfo_use.focus();
                        return false;
                    }
                    return true;
                }
            });

            itemDetailSetting.checkItemData();
        }

        if (userGoods.value === 'character') {
            if (document.getElementById('compensation') !== null) {
                document.getElementById('compensation').classList.add('g_hidden');
            }
            document.getElementById('account_type').addEventListener('change', function(ev) {
                if (this.value === '1') {
                    frm.purchase_type.value = '';
                    frm.payment_existence.value = '';
                    frm.multi_access.value = '';
                    frm.character_id.value = '';
                    frm.purchase_type.disabled = true;
                    frm.payment_existence.disabled = true;
                    frm.multi_access.disabled = true;
                    frm.character_id.disabled = true;
                } else {
                    frm.purchase_type.disabled = false;
                    frm.payment_existence.disabled = false;
                    frm.multi_access.disabled = false;
                    frm.character_id.disabled = false;
                }
            });
            formCheck.add({name: 'account_type', msg: 'ìºë¦­í„° ì¢…ë¥˜ë¥¼ ì„ íƒí•´ì£¼ì„¸ìš”.'});
            formCheck.add({
                custom: function() {
                    var account_type = frm.account_type.value;
                    if (account_type !== '1') {
                        if (frm.purchase_type.value.isEmpty()) {
                            alert('ìºë¦­í„° ì •ë³´ë¥¼ ëª¨ë‘ ìž…ë ¥ í›„ ë“±ë¡ì´ ê°€ëŠ¥í•©ë‹ˆë‹¤.');
                            return false;
                        }
                        if (frm.payment_existence.value.isEmpty()) {
                            alert('ìºë¦­í„° ì •ë³´ë¥¼ ëª¨ë‘ ìž…ë ¥ í›„ ë“±ë¡ì´ ê°€ëŠ¥í•©ë‹ˆë‹¤.');
                            return false;
                        }
                        if (frm.multi_access.value.isEmpty()) {
                            alert('ìºë¦­í„° ì •ë³´ë¥¼ ëª¨ë‘ ìž…ë ¥ í›„ ë“±ë¡ì´ ê°€ëŠ¥í•©ë‹ˆë‹¤.');
                            return false;
                        }
                        if (frm.character_id.value.isEmpty()) {
                            alert('ìºë¦­í„° ì •ë³´ë¥¼ ëª¨ë‘ ìž…ë ¥ í›„ ë“±ë¡ì´ ê°€ëŠ¥í•©ë‹ˆë‹¤.');
                            return false;
                        }
                    }
                    return true;
                }
            });

        } else {
            if (document.getElementById('compensation') !== null) {
                document.getElementById('compensation').classList.remove('g_hidden');
            }

            if (gameCode === '650') {
                document.getElementById('sub_text').innerHTML = ' [ë°˜ë“œì‹œ ë°°í‹€íƒœê·¸ë¥¼ ìž…ë ¥í•´ì£¼ì„¸ìš”. ì˜ˆ) ë§¤ë‹ˆì•„#1544]';
            } else {
                document.getElementById('sub_text').innerHTML = '';
            }

            /* â–¼ ë˜ì „ì•¤íŒŒì´í„° í†µí•©ì„œë²„ ì²˜ë¦¬ */
            var dfServer = document.getElementById('dfServer');
            var dfServerCode = document.getElementById('dfServerCode');
            var userCharacter = document.getElementById('user_character');
            if (gameCode == '281') {
                if (dfServerCode === null && document.getElementById('integration_server') === null) {
                    var strHtml = '<div id="dfServerCode" class="df_server_code"><input type="hidden" name="df_server_code"><input type="text" class="g_text" name="df_server_code_text" id="df_server_code_text" placeholder="ì„œë²„ê²€ìƒ‰" autocomplete="off"><div class="gs_list_area" id="dfServerList"></div></div> ë¬¼í’ˆì„ ì „ë‹¬í•˜ì‹¤ ì„œë²„ |';
                    document.getElementById('dfServer').innerHTML = strHtml;
                }

                if(document.getElementById('dfServerList') !== null && document.getElementById('dfServerList').gameserver === undefined) {
                    new ServerList(document.getElementById('dfServerList'), {
                        autoComplete: '#df_server_code_text',
                        allView: false,
                        gameCode: '281',
                        hidden_use: {
                            code: '[name="df_server_code"]',
                            text: ''
                        }
                    });
                }

                dfServer.classList.remove('g_hidden');
                userCharacter.setAttribute('maxlength', 27);

                formCheck.add({
                    custom: function() {
                        /* â–¼ ë˜ì „ì•¤íŒŒì´í„° í†µí•©ì„œë²„ ì²˜ë¦¬ */
                        if (document.getElementById('dfServerList').serverList.getValue().code.isEmpty()) {
                            alert('ë¬¼í’ˆì„ ì „ë‹¬ í•˜ì‹¤ ì„œë²„ë¥¼ ì„ íƒ í•´ì£¼ì„¸ìš”.');
                            return false;
                        }
                        return true;
                        /* â–² ë˜ì „ì•¤íŒŒì´í„° í†µí•©ì„œë²„ ì²˜ë¦¬ */
                    }
                });

                formCheck.add({name: 'user_character', msg: 'ë¬¼í’ˆì„ ì „ë‹¬ í•˜ì‹¤ ìºë¦­í„°ëª…ì„ ìž…ë ¥í•´ì£¼ì„¸ìš”.'});
            } else {
                dfServer.classList.add('g_hidden');
                userCharacter.setAttribute('maxlength', 30);
            }
            /* â–² ë˜ì „ì•¤íŒŒì´í„° í†µí•©ì„œë²„ ì²˜ë¦¬ */
        }

        formCheck.add({name: 'user_title', msg: 'ë¬¼í’ˆì œëª©ì„ ìž…ë ¥í•´ì£¼ì„¸ìš”.'});
        formCheck.add({name: 'user_text', msg: 'ìƒì„¸ì„¤ëª…ì„ ìž…ë ¥í•´ì£¼ì„¸ìš”.'});
        formCheck.add({
            custom: function() {

                /* â–¼ ì—°ë½ì²˜ ì¤‘ë³µì²´í¬ */
                var slctContact = $('#user_contactA').val();
                var slctMobileType = $('#slctMobile_type').val();
                var params = {
                    user_id: $('#user_id').val(),
                    trade_flag: 'Y',
                    contact_yn: (slctContact === 'N') ? 'N' : 'Y',
                    mobile_yn: (slctMobileType === 'N') ? 'N' : 'Y'
                };

                if (params.contact_yn === 'N' && params.mobile_yn === 'N') {
                    alert('íœ´ëŒ€í° ë˜ëŠ” ìžíƒ ì—°ë½ì²˜ ì •ë³´ë¥¼ í†µí™” ê°€ëŠ¥í•œ ë²ˆí˜¸ë¡œ ìˆ˜ì • í›„ ì´ìš© ë°”ëžë‹ˆë‹¤.');
                    return;
                }

                if($('#tag_generator').val() != '' && $('#tag_generator').val().length < 2)
                {
                    alert('í‚¤ì›Œë“œëŠ” 2ê¸€ìž ì´ìƒ ìž…ë ¥í•´ì£¼ì„¸ìš”.')
                    return false;
                }

                if (params.contact_yn === 'Y') {
                    params.user_contactA = slctContact;
                    params.user_contactB = $('#user_contactB').val();
                    params.user_contactC = $('#user_contactC').val();
                }
                if (params.mobile_yn === 'Y') {
                    params.user_mobileA = $('#user_mobileA').val();
                    params.user_mobileB = $('#user_mobileB').val();
                    params.user_mobileC = $('#user_mobileC').val();
                }

                ajaxRequest({
                    url: '/_include/_user_contact_restrict.php',
                    type: 'POST',
                    data: params,
                    success: function(res) {
                        var rgResult = res.split('|');
                        switch (rgResult[0]) {
                            case 'S':
                                createLayerContent();
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

                return false;
            }
        });
    } catch (e) {
    }
}

function premiumSet() {
    var dvPremium = document.getElementById('dvPremium');
    LayerControl.close({layer: dvPremium});
    createLayerContent(false);
}

function createLayerContent(b) {
    if (document.activeElement) {
        document.activeElement.blur();
    }

    var frm = document.forms.frmSell;
    var dvPopup = document.getElementById('dvPopup');
    var strLayerURL = '/sell/include/reg_info.html';

    if (b !== false) {
        var dvPremium = document.getElementById('dvPremium');
        var userMile = document.getElementById('txtCurrentMileage').innerHTML.numeric();
        if (userMile > 100) {
            if ($('#user_premium_time').val().isEmpty() === true) {
                LayerControl.open({layer: dvPremium});
                return;
            }
        }
    }

    var rgData = {
        game_code: frm.game_code.value,
        game_code_text: frm.game_code_text.value,
        server_code: frm.server_code.value,
        server_code_text: frm.server_code_text.value,
        user_goods: frm.user_goods.value,
        user_goods_type: frm.querySelector('[name="user_goods_type"]:checked').value,
        user_title: frm.user_title.value,
        security_service_userinfo: frm.security_service_userinfo.value,
        security_type: frm.security_type.value,
        unit: g_unit,
        e_sale: e_sale_type[e_select.sale]
    };

    if (rgData.user_goods_type === 'division') {
        rgData.user_quantity_min = frm.user_quantity_min.value;
        rgData.user_quantity_max = frm.user_quantity_max.value;
        rgData.user_division_unit = frm.user_division_unit.value;
        rgData.user_division_price = frm.user_division_price.value;

        if (frm.discount_use.checked === true) {
            rgData.discount_use = frm.discount_use.value;
            rgData.discount_quantity = frm.discount_quantity.value;
            rgData.discount_quantity_cnt = frm.discount_quantity_cnt.value;
            rgData.discount_price = frm.discount_price.value;
        }
        if (frm.user_goods.value === 'money') {
            rgData.gamemoney_unit = frm.querySelector('[name="gamemoney_unit"]:checked').value;
        }
    } else {
        if (frm.user_goods.value === 'money') {
            rgData.gamemoney_unit = frm.querySelector('[name="gamemoney_unit"]:checked').value;
            rgData.user_quantity = frm.user_quantity.value;
        }
        if (rgData.user_goods_type === 'bargain') {
            rgData.user_deny_use = (frm.user_deny_use.checked === true) ? frm.user_deny_use.value : '';
            rgData.user_price_limit = frm.user_price_limit.value;
        }
        if (rgData.user_goods === 'character' && frm.account_type.value !== '1') {
            rgData.character_id = frm.character_id.value;
            rgData.user_cell_num = frm.user_cell_num.value;
            rgData.seller_birth = frm.seller_birth.value;
            strLayerURL = '/sell/include/reg_info_character.html';
        }
        rgData.user_price = frm.user_price.value;
    }

    if (document.getElementById('slt_item_info') !== null) {
        rgData.slt_item_info = $('#item_info_result').text().replace(/\(x\)/g, "");
    }

    if (document.getElementById('item_info_txt') !== null) {
        rgData.item_info_txt = document.getElementById('item_info_txt').innerHTML;
    }

    ajaxRequest({
        url: strLayerURL,
        type: 'POST',
        data: rgData,
        success: function(res) {
            $('#dvPopup').find('.cont').html(res);
            LayerControl.open({layer: dvPopup});

            /** [ITM-10872] ìºë¦­í„° ê±°ëž˜ ì‹ ê·œ ì„œë¹„ìŠ¤ ì‚½ë‹ˆë‹¤ ì¶”ê°€ by 20200720 KBR */
            if (rgData.user_goods === 'character' && frm.account_type.value !== '1') {
                document.getElementById('dvPopup').classList.add('reg_info_character');
                document.getElementById('dvPopup').getElementsByClassName('title')[0].innerHTML = 'ì „ìžê³„ì•½ì„œ';
                document.getElementById('reg_submit').addEventListener('click', function() {
                    if ($("#user_without").val() == '6') {
                        if (!confirm('ê³ ê°ë‹˜ì€ í˜„ìž¬ íšŒì›íƒˆí‡´ ì‹ ì²­ ì§„í–‰ì¤‘ìž…ë‹ˆë‹¤.\níŒë§¤ ë“±ë¡ ì§„í–‰ ì‹œ ì‹ ì²­í•˜ì‹  íšŒì›íƒˆí‡´ ì ‘ìˆ˜ê°€ ì² íšŒë©ë‹ˆë‹¤.\nê³„ì† ì§„í–‰ í•˜ì‹œê² ìŠµë‹ˆê¹Œ?')) {
                            return;
                        }
                    }

                    if ($("#account_type").val() != 1) {
                        _window.open('contract', '', 650, 550);
                        frm.target = 'contract';
                        frm.action = '/certify/payment/user_certify.html';
                        frm.submit();
                    } else {
                        frm.onsubmit = null;
                        frm.target = '_self';
                        frm.action = 'index_ok.php';
                        frm.submit();
                    }

                });
            } else {
                document.getElementById('dvPopup').classList.remove('reg_info_character');
                document.getElementById('dvPopup').getElementsByClassName('title')[0].innerHTML = 'ë¬¼í’ˆë“±ë¡ì •ë³´';
                document.getElementById('reg_submit').addEventListener('click', function() {
                    if ($("#user_without").val() == '6') {
                        if (!confirm('ê³ ê°ë‹˜ì€ í˜„ìž¬ íšŒì›íƒˆí‡´ ì‹ ì²­ ì§„í–‰ì¤‘ìž…ë‹ˆë‹¤.\níŒë§¤ ë“±ë¡ ì§„í–‰ ì‹œ ì‹ ì²­í•˜ì‹  íšŒì›íƒˆí‡´ ì ‘ìˆ˜ê°€ ì² íšŒë©ë‹ˆë‹¤.\nê³„ì† ì§„í–‰ í•˜ì‹œê² ìŠµë‹ˆê¹Œ?')) {
                            return;
                        }
                    }
                    frm.onsubmit = null;
                    frm.action = 'index_ok.php';
                    frm.submit();
                });
            }
            document.getElementById('cancel_submit').addEventListener('click', function() {
                LayerControl.close({layer: dvPopup});
            });
        }
    });
}

/* â–¼ ë‚˜ë§Œì˜ ê²€ìƒ‰ë©”ë‰´ ì„ íƒ */
function fnSearchSelect(game, gname, server, sname, goods, self) {
    var strGoods;

    switch (goods) {
        case '1' :
            strGoods = 'item';
            break;
        case '3' :
        default :
            strGoods = 'money';
            break;
        case '4' :
            strGoods = 'etc';
            break;
        case '6' :
            strGoods = 'character';
            break;
    }

    if (regGameServer.gameList.getValue().code == game && regGameServer.serverList.getValue().code == server && regGameServer.goodsList.getValue().code == strGoods) {
        if (self) {
            changeTemplate();
        }
        return;
    }

    regGameServer.gameList.gameCode = game;
    regGameServer.serverList.serverCode = server;
    regGameServer.goodsList.goodsCode = strGoods;

    regGameServer.changeAction = true;
    regGameServer.gameList.createList();
}
/* â–² ë‚˜ë§Œì˜ ê²€ìƒ‰ë©”ë‰´ ì„ íƒ */

/* â–¼ ë‚˜ë§Œì˜ ê²€ìƒ‰ë©”ë‰´ ì¶”ê°€ */
function fnSearchAdd() {
    var game_code = $('#game_code').val();
    var game_code_text = $('#game_code_text').val();
    var server_code = $('#server_code').val();
    var server_code_text = $('#server_code_text').val();
    var user_goods = $('#user_goods').val();

    var goods_text = "";
    var goods_code = 0;
    switch (user_goods) {
        case 'item' :
            goods_text = "ì•„ì´í…œ";
            goods_code = 1;
            break;
        case 'money' :
            goods_text = "ê²Œìž„ë¨¸ë‹ˆ";
            goods_code = 3;
            break;
        case 'character' :
            goods_text = "ìºë¦­í„°";
            goods_code = 6;
            break;
        case 'etc' :
            goods_text = "ê¸°íƒ€";
            goods_code = 4;
            break;
    }

    if (game_code == "") {
        alert('ê²Œìž„ì„ ì„ íƒí•´ ì£¼ì„¸ìš”.');
        return;
    }

    if (server_code == "") {
        alert('ì„œë²„ë¥¼ ì„ íƒí•´ ì£¼ì„¸ìš”.');
        return;
    }

    if (user_goods == "") {
        alert('ë¬¼í’ˆíƒ€ìž…ì„ ì„ íƒí•´ ì£¼ì„¸ìš”.');
        return;
    }

    var addMessage = confirm("ê²€ìƒ‰í•˜ì‹  ê²Œìž„ì„ ë‚˜ë§Œì˜ ê²Œìž„ì— ì¶”ê°€í•˜ì‹œê² ìŠµë‹ˆê¹Œ?");
    if (addMessage == true) {
        var rgData = {
            type: 'sell',
            game: game_code,
            game_text: game_code_text,
            server: server_code,
            server_text: server_code_text,
            goods: goods_code,
            goods_text: goods_text
        };
        _myService.addFavorite(rgData, function(res) {
            var mygame_id = res.mygameID;
            if (document.getElementById('mygame_info').children[0].classList.contains('empty') === true) {
                $('#mygame_info').html('');
            }
            var addMygame = "<li id=\"mygame_" + mygame_id + "\">" +
                "<a href=\"javascript:fnSearchSelect('" + game_code + "','" + game_code_text + "','" + server_code + "','" + server_code_text + "','" + goods_code + "')\">" + game_code_text + " > " + server_code_text + " > " + goods_text + "</a>" +
                "<span class=\"del_btn\" onclick=\"fnSearchDel('" + mygame_id + "')\"></span>" +
                "</li>";
            $('#mygame_info').append(addMygame);

            alert("í•´ë‹¹ ì¹´í…Œê³ ë¦¬ê°€ ë‚˜ë§Œì˜ê²€ìƒ‰ë©”ë‰´ì— ì¶”ê°€ë˜ì—ˆìŠµë‹ˆë‹¤.");
            $('.favorite_icon').addClass('on');
            _myService.getFavorite();
        });
    }
}
/* â–² ë‚˜ë§Œì˜ ê²€ìƒ‰ë©”ë‰´ ì¶”ê°€ */

/* â–¼ ë‚˜ë§Œì˜ ê²€ìƒ‰ë©”ë‰´ ì‚­ì œ */
function fnSearchDel(id) {
    var delMessage = confirm("í•´ë‹¹ ì¹´í…Œê³ ë¦¬ë¥¼ ì‚­ì œí•˜ì‹œê² ìŠµë‹ˆê¹Œ?");
    if (delMessage == true) {
        _myService.deleteFavorite(id, function() {
            var mygame_id = "mygame_" + id;
            $('#' + mygame_id).remove();
            alert("í•´ë‹¹ ì¹´í…Œê³ ë¦¬ê°€ ì‚­ì œë˜ì—ˆìŠµë‹ˆë‹¤.");
            $('.favorite_icon').removeClass('on');
            _myService.getFavorite();

            if (document.getElementById('mygame_info').children[0] === undefined) {
                document.getElementById('mygame_info').innerHTML = '<li class="empty">ê²Œìž„ì„œë²„ ê²€ìƒ‰ í›„ ìš°ì¸¡ â˜…í‘œë¥¼ í´ë¦­í•˜ì‹œë©´ í•´ë‹¹ë¬¼í’ˆì´ ë‚˜ë§Œì˜ê²€ìƒ‰ë©”ë‰´ë¡œ ë“±ë¡ë©ë‹ˆë‹¤.</li>';
            }
        });
    }
}
/* â–² ë‚˜ë§Œì˜ ê²€ìƒ‰ë©”ë‰´ ì‚­ì œ */

/* â–¼ ë‚˜ë§Œì˜ ê²€ìƒ‰ë©”ë‰´ ì²´í¬ */
function mySearchListCheck() {

    $('.favorite_icon').removeClass('on');

    if(_myService.mySearchXml === null) {
        return;
    }

    var rgItem = _xml.getElements(_myService.mySearchXml, 'item');
    var itemCount = rgItem.length;
    if (itemCount < 1) {
        return;
    }

    var gameCode = regGameServer.gameList.getValue().code;
    var serverCode = regGameServer.serverList.getValue().code;
    var goodsCode = regGameServer.goodsList.getValue().code;

    for (var i = 0; i < itemCount; i++) {
        var item = $(rgItem[i]);
        if (item.attr('type') !== 'sell') {
            continue;
        }

        var nodeGame = item.find('game');
        var nodeServer = item.find('server');
        var nodeGoodtype = item.find('goods_type');

        if (gameCode == nodeGame.attr('id') && serverCode == nodeServer.attr('id') && (nodeGoodtype.attr('id') == 'all' || goodsCode == nodeGoodtype.attr('id'))) {
            $('.favorite_icon').addClass('on');
            break;
        }
    }
}
/* â–² ë‚˜ë§Œì˜ ê²€ìƒ‰ë©”ë‰´ ì²´í¬ */

function checkPrice() {
    var val = this.value;
    if (val.isEmpty() || val == '0') {
        return false
    }
    var last = val.substring(val.length - 1, val.length);
    if (last != '0') {
        alert('ê±°ëž˜ê¸ˆì•¡ì— ì¼ì›ë‹¨ìœ„ëŠ” 0ì´ì™¸ì˜ ìˆ«ìžë¥¼ ìž…ë ¥í• ìˆ˜ ì—†ìŠµë‹ˆë‹¤.\n\nê±°ëž˜ê¸ˆì•¡ì„ ë‹¤ì‹œ ê¸°ìž¬í•´ ì£¼ì„¸ìš”.\n\nì˜ˆ) 12,345(ë¶ˆê°€ëŠ¥), 12,340(ê°€ëŠ¥)');
        this.value = '';
        this.focus();
        commissionCalcu.call(this);
        return false;
    }

    var nCheckPrice = 0;
    if (e_sale[e_select.sale] == e_sale.division) {
        nCheckPrice = 100;
    } else {
        nCheckPrice = 3000;
    }

    if ((arguments.length < 1 || arguments[0] !== true) && parseInt(val.replace(/[^0-9]/g, "")) < Number(nCheckPrice)) {
        alert('ê±°ëž˜ê¸ˆì•¡ì€ ' + Number(nCheckPrice).currency() + 'ì› ì´ìƒìœ¼ë¡œ ìž…ë ¥í•´ì£¼ì„¸ìš”.');
        this.value = '';
        this.focus();
        return false;
    }

    return true;
}

//ìžë™ê±°ë¶€ ê¸ˆì•¡ ì²´í¬
function getPriceLimit() {
    var val = this.value;
    if (val.isEmpty() || val == '0') {
        return false;
    }

    var objDenyUse = $("[name='user_deny_use']");
    var objPrice = $("#user_price");
    var objPriceLimit = $("[name='user_price_limit']");

    if (!objDenyUse || !objPrice || !objPriceLimit) {
        return
    }

    var nPrice = Number(objPrice.val().replace(/[^0-9]/g, ""));
    var nPriceLimit = Number(val.replace(/[^0-9]/g, ""));

    if (objDenyUse.val() == "1") {
        if (nPrice <= nPriceLimit) {
            alert("ìµœì €í¥ì •ê°€ê²©ì€ ì¦‰ì‹œíŒë§¤ê¸ˆì•¡ë³´ë‹¤ ìž‘ì•„ì•¼í•©ë‹ˆë‹¤.");
            this.value = '';
            this.focus();
            return false;
        }
    }

    var last = val.substring($(this).val().length - 1, $(this).val().length);
    if (last != '0') {
        alert('ê±°ëž˜ê¸ˆì•¡ì— ì¼ì›ë‹¨ìœ„ëŠ” 0ì´ì™¸ì˜ ìˆ«ìžë¥¼ ìž…ë ¥í• ìˆ˜ ì—†ìŠµë‹ˆë‹¤.\n\nê±°ëž˜ê¸ˆì•¡ì„ ë‹¤ì‹œ ê¸°ìž¬í•´ ì£¼ì„¸ìš”.\n\nì˜ˆ) 12,345(ë¶ˆê°€ëŠ¥), 12,340(ê°€ëŠ¥)');
        this.value = '';
        this.focus();
        return false;
    }
    if ((arguments.length < 1 || arguments[0] !== true) && parseInt(val.replace(/[^0-9]/g, "")) < 3000) {
        alert('ê±°ëž˜ê¸ˆì•¡ì€ 3,000ì› ì´ìƒìœ¼ë¡œ ìž…ë ¥í•´ì£¼ì„¸ìš”.');
        this.value = '';
        this.focus();
        return false;
    }
}

/* â–¼ ìˆ˜ìˆ˜ë£Œê³„ì‚° */
function commissionCalcu(t) {
    var comsArea = document.getElementById('coms_area');
    if (t === '2') {
        comsArea = document.getElementById('coms_area2');
    }

    if (comsArea == null) {
        return;
    }

    if (this.value === '0' || this.value.isEmpty() === true) {
        comsArea.style.display = 'none';
        return;
    }

    comsArea.style.display = 'block';

    var strPrice = this.value;
    var nPrice = Number(strPrice.replace(/[^0-9]/g, ''));
    var nCommission = 5;
    var nComPrice = 0;
    var nReceivePrice = 0;

    // ìµœëŒ€ ìˆ˜ìˆ˜ë£Œ ë³€ê²½
    var nMaxCommission = 29800;
    var dtCheckDate = new Date(2020, 4, 1, 0, 0, 0, 0);
    var dtDate = new Date();
    if (dtDate.getTime() >= dtCheckDate.getTime()) {
        nMaxCommission = 47000;
    }

    if (!strPrice.isEmpty() && nPrice >= 3000) {
        nComPrice = Math.floor(nPrice * nCommission / 100);

        if (nComPrice % 10 !== 0) {
            nComPrice -= (nComPrice % 10);
        }

        /* â–¼ ìµœì €/ìµœëŒ€ìˆ˜ìˆ˜ë£Œ */
        if (nComPrice < 1000) {
            nComPrice = 1000;
        } else if (nComPrice > nMaxCommission) {
            nComPrice = nMaxCommission;
        }
        /* â–² ìµœì €/ìµœëŒ€ìˆ˜ìˆ˜ë£Œ */

        nReceivePrice = nPrice - nComPrice;
    }

    if (t === '2') {
        $('#commission_price2').html(nComPrice.currency());
        $('#receive_price2').html(nReceivePrice.currency());
    } else {
        $('#commission_price').html(nComPrice.currency());
        $('#receive_price').html(nReceivePrice.currency());
    }
}

/* â–² ìˆ˜ìˆ˜ë£Œê³„ì‚° */

/* â–¼ ë§ˆì¼ë¦¬ì§€ ê²°ì œê¸ˆì•¡ */
function chargeServiceCalc() {

    var userPremiumUseHidden = document.getElementById('user_premium_use');
    var userQuickIconUseHidden = document.getElementById('user_quick_icon_use');
    var userPremiumTime = document.getElementById('user_premium_time').value.numeric();
    var userIconUse = document.getElementById('user_icon_use').value.numeric();
    var userBluepenUse = document.getElementById('user_bluepen_use').value.numeric();
    var userQuickIcon = document.getElementById('user_quickicon_use').value.numeric();
    var reregCount = document.getElementById('rereg_count').value.numeric() / 3;
    var highlightTotalTime = (userIconUse + userBluepenUse) / 12;
    var currentMileage = document.getElementById('txtCurrentMileage').innerHTML.numeric();
    var plusMile = 0;

    if (userPremiumTime > 0) {
        userPremiumUseHidden.value = '1';
        if (userPremiumTime > Number(e_use.premium)) {
            plusMile += (userPremiumTime - Number(e_use.premium)) * 100;
        }
    } else {
        userPremiumUseHidden.value = '';
    }

    if (userQuickIcon > 0) {
        userQuickIconUseHidden.value = '1';
        if (userQuickIcon > Number(e_use.quickIcon)) {
            plusMile += (userQuickIcon - Number(e_use.quickIcon)) * 100;
        }
    } else {
        userQuickIconUseHidden.value = '';
    }

    if (highlightTotalTime > Number(e_use.highlight)) {
        plusMile += (highlightTotalTime - Number(e_use.highlight)) * 100;
    }

    plusMile += (reregCount * 100);

    if (currentMileage < plusMile) {
        alert('ë§ˆì¼ë¦¬ì§€ ìž”ì•¡ì´ ë¶€ì¡±í•©ë‹ˆë‹¤.');
        return false;
    }

    if (userPremiumTime > 0 || highlightTotalTime > 0 || reregCount > 0) {
        document.getElementById('user_charge').value = '1';
    } else {
        document.getElementById('user_charge').value = '';
    }

    document.getElementById('total_charge_money').innerHTML = plusMile.currency() + 'ì›';
    return true;
}

/* â–² ë§ˆì¼ë¦¬ì§€ ê²°ì œê¸ˆì•¡ */

/* â–¼ ìœ ë£Œë“±ë¡ ì„œë¹„ìŠ¤ */
function fnChargeService(userCharge) {
    if (userCharge == '1') {
        document.getElementById('user_charge').value = '1';
    } else {
        document.getElementById('user_charge').value = '';
    }
}

function chargeServiceApply(strClass) {
    var bCheck = chargeServiceCalc();
    if (bCheck === true) {
        var chargeApply = document.getElementById('charge_apply');
        if (this.value.isEmpty() === true && chargeApply.classList.contains(strClass) === true) {
            chargeApply.classList.remove(strClass);
        } else if (this.value.isEmpty() === false && chargeApply.classList.contains(strClass) === false) {
            chargeApply.classList.add(strClass);
        }
    }
}

function chargePremiumService() {
    if (bPremiumLayer == false) {
        LayerControl.open({
            layer: document.getElementById('premium_layer'),
            close_btn: document.getElementById('premium_layer').querySelector('.close'),
            mask: false,
            type: 'style'
        });

        document.getElementById('premium_close').addEventListener('click', function() {
            LayerControl.close({layer: document.getElementById('premium_layer')});
        });

        bPremiumLayer = true;
    }
}

/* â–² ìœ ë£Œë“±ë¡ ì„œë¹„ìŠ¤ */

var power_date_use, power_date;

/* â–¼ íŒŒì›Œë“±ë¡ê¶Œ ì„œë¹„ìŠ¤ */
function fnpoweruse() {
    if (this.checked === true) {
        $("#power_use").html(power_date_use);
    } else {
        $("#power_use").html(power_date);
    }
}

function fnPower() {
    var game_code = $('#game_code').val();
    var server_code = $('#server_code').val();

    $("#dv_power").html("");
    var paramsValue = "game_code=" + game_code + "&server_code=" + server_code;
    fnAjax('/power/_AJAX_power_check.php', 'html', 'post', paramsValue, {
        complete: function(request) {

            var returnData = request.split("|");
            if (returnData[0] == true) {

                power_date = '<span class="f_blue1">ì„ íƒì‹œ ì„œë¹„ìŠ¤ ì´ìš© ê°€ëŠ¥í•©ë‹ˆë‹¤.</span>';
                power_date_use = '<span class="f_blue1">' + returnData[1] + ' ~ ' + returnData[2] + ' ê¹Œì§€ ë“±ë¡ ê°€ëŠ¥í•©ë‹ˆë‹¤.</span>';

                var createDIV = '<div class="g_left"><label class="f_bold"><input type="checkbox" name="power_regist" value="y" > íŒŒì›Œ ë“±ë¡ ì‚¬ìš© </label></div>';
                var createtxt2 = '<div class="g_left" id="power_use"></div>';

                $('#dv_power').removeClass('g_hidden').append(createDIV, createtxt2);
                $("#power_use").html(power_date);

            } else {
                $("#dv_power").html("").addClass('g_hidden');
            }
        },
        error: function() {
            $("#dv_power").addClass('g_hidden');
        }
    });
}

/* â–² íŒŒì›Œë“±ë¡ê¶Œ ì„œë¹„ìŠ¤ */

/* â–¼ ë³µìˆ˜êµ¬ë§¤í• ì¸ */
function fnRevenDiscount() {
    var bCharge = $("input[name='discount_use']")[0].checked;
    if (bCharge) {
        $("#reven_discount").find("input").prop("disabled", false);

        var divUnit = $('#user_division_unit');
        var quanMin = $('#user_quantity_min');
        var quanMax = $('#user_quantity_max');
        var divPrice = $('#user_division_price');

        if (quanMin.val().isEmpty()) {
            alert('ìµœì†Œìˆ˜ëŸ‰ì„ ìž…ë ¥í•´ì£¼ì„¸ìš”.');
            $("#discount_use").prop("checked", false);
            $("#reven_discount").find("input").prop("disabled", true).val("");
            quanMin.focus();
            return;
        }

        if (quanMax.val().isEmpty()) {
            alert('ìµœëŒ€ìˆ˜ëŸ‰ì„ ìž…ë ¥í•´ì£¼ì„¸ìš”.');
            $("#discount_use").prop("checked", false);
            $("#reven_discount").find("input").prop("disabled", true).val("");
            quanMax.focus();
            return;
        }

        if (divUnit.val().isEmpty()) {
            alert('ë¶„í• ë‹¨ìœ„ë¥¼ ìž…ë ¥í•´ì£¼ì„¸ìš”.');
            $("#discount_use").prop("checked", false);
            $("#reven_discount").find("input").prop("disabled", true).val("");
            divUnit.focus();
            return;
        }

        if (divPrice.val().isEmpty()) {
            alert('íŒë§¤ê¸ˆì•¡ì„ ìž…ë ¥í•´ì£¼ì„¸ìš”.');
            $("#discount_use").prop("checked", false);
            $("#reven_discount").find("input").prop("disabled", true).val("");
            divPrice.focus();
            return;
        }

        var disQnt = $("#discount_quantity");
        var disQntCnt = $("#discount_quantity_cnt");
        var disPrice = $("#discount_price");

        $("#reven_discount").find("input").on('keyup', function() {
            divUnit.val(Number(divUnit.val().replace(/[^0-9]/g, "")));
            disQnt.val(Number(disQnt.val().replace(/[^0-9]/g, "")));
            disQntCnt.val(Number(disQntCnt.val().replace(/[^0-9]/g, "")));
            disPrice.val(Number(disPrice.val().replace(/[^0-9]/g, "")));
        });

        disPrice.on('blur', function() {
            var discount_price = Number($(this).val().replace(/[^0-9]/g, ""));
            var userDivPrice = $('#user_division_price').val();
            var user_div_price = Number(userDivPrice.replace(/[^0-9]/g, ""));
            var last = $(this).val().substring($(this).val().length - 1, $(this).val().length);
            if (discount_price > 0 && discount_price < 100) {
                alert("í• ì¸ê¸ˆì•¡ì€ 100ì› ì´ìƒìœ¼ë¡œ ìž…ë ¥í•´ì£¼ì„¸ìš”.");
                $(this).val('');
                $(this).focus();
                $(this).keyup();
                return;
            }

            if (discount_price > user_div_price / 2) {
                alert("ìµœëŒ€ í• ì¸ê¸ˆì•¡ì„ ì´ˆê³¼í•˜ì˜€ìŠµë‹ˆë‹¤.");
                $(this).val('');
                $(this).focus();
                $(this).keyup();
                return;
            }

            if (last != 0) {
                alert("í• ì¸ê¸ˆì•¡ì€ 10ì›ë‹¨ìœ„ë¡œ ìž…ë ¥ì´ ê°€ëŠ¥í•©ë‹ˆë‹¤.");
                $(this).val('');
                $(this).focus();
                $(this).keyup();
                return;
            }
        });
        $("#reven_discount").find("input:disabled").prop("disabled", false);
        disQnt.val(divUnit.val());
        if (disQntCnt.val().isEmpty()) disQntCnt.val(Math.ceil(quanMin.val() / divUnit.val()));
        disQntCnt.focus().keyup();
    } else {
        $("#reven_discount").find("input").prop("disabled", true).val("");
    }
}

/* â–² ë³µìˆ˜êµ¬ë§¤í• ì¸ */

function myLastListCall() {

    var tbody = document.getElementById('lastListTbody');

    if (tbody.innerHTML != '') {
        document.getElementById('lastList').style.display = 'block';
        return;
    }

    ajaxRequest({
        url: '/sell/ajax_recent_list.php',
        type: 'POST',
        dataType: 'JSON',
        success: function(res) {

            if (res.result !== 'SUCCESS') {
                alert('ë“±ë¡í•œ ë¬¼í’ˆì„ ë¶ˆëŸ¬ì˜¤ì§€ ëª»í•˜ì˜€ìŠµë‹ˆë‹¤.');
                return;
            }

            var list = res.data;
            var len = list.length;
            var sHtml = '';
            if (len < 1) {
                var tr = document.createElement('tr');
                sHtml = '<tr><td colspan="5">ìµœê·¼ì— ë“±ë¡í•˜ì‹  ë¬¼í’ˆì´ ì—†ìŠµë‹ˆë‹¤.</td></tr>';
                tr.innerHTML = sHtml;
                tbody.appendChild(tr);
            } else {
                for (var i = 0; i < len; i++) {

                    var cont = list[i];
                    var tr = document.createElement('tr');
                    var date = cont.trade_reg_date.replace(' ', '<br>');
                    var trade_money = '<span class="f_blue3">' + cont.min_trade_money + 'ì›</span>';
                    var ea_range = '';
                    if (cont.ea_range) {
                        ea_range = '<span class="f_blue3">[' + cont.ea_range + ']</span><br>';
                    }
                    if (cont.ea_trade_money != '') {
                        trade_money = cont.ea_trade_money + '<br>' + trade_money;
                    }
                    var compen = (cont.trade_class == '4' || cont.trade_class == '5') ? '<span class="f_blue3">200% ë³´ìƒ</span>' : '-';
                    sHtml = '<td>' + date + '</td><td>' + cont.game_name + '<br>' + cont.server_name + '</td><td class="left">' + ea_range + '<div class="txt_ellipsis">' + cont.trade_subject + '</div></td><td class="right">' + trade_money + '</td><td>' + compen + '</td>';
                    tr.innerHTML = sHtml;
                    tbody.appendChild(tr);
                    $.data(tr, cont);
                    (function(i) {
                        tr.addEventListener('click', function() {
                            if (!confirm('í•´ë‹¹ ë“±ë¡ì •ë³´ë¥¼ ë¶ˆëŸ¬ì˜µë‹ˆë‹¤.\n' +
                                'ë“±ë¡ì •ë³´ëŠ” í™•ì¸ í›„ ë“±ë¡íŽ˜ì´ì§€ì—ì„œ ìˆ˜ì • ê°€ëŠ¥í•©ë‹ˆë‹¤.')) {
                                return;
                            }
                            lastListEl = this;

                            if (list[i].trade_category == '1') {
                                document.querySelector('[name="user_goods_type"][value="general"]').checked = true;

                            } else if (list[i].trade_category == '2') {
                                document.querySelector('[name="user_goods_type"][value="division"]').checked = true;

                            } else if (list[i].trade_category == '3') {
                                document.querySelector('[name="user_goods_type"][value="bargain"]').checked = true;
                            }

                            fnSearchSelect(list[i].game_code, list[i].game_name, list[i].server_code, list[i].server_name, list[i].trade_kind, true);
                            document.getElementById('lastList').style.display = 'none';
                        }, false);
                    }(i));
                }
            }

            document.getElementById('lastList').style.display = 'block';
        },
        error: function() {

        }
    });
}

function reRegSet() {
    if (lastListEl == '') {
        return;
    }

    var data = $.data(lastListEl);
    var frm = document.forms.frmSell;

    switch (data.trade_default_unit) {
        case '10000':
            var defaultUnit = 'ë§Œ';
            break;
        case '100000000':
            var defaultUnit = 'ì–µ';
            break;
        default  :
            var defaultUnit = '1';
    }

    if (data.trade_default_unit == '0') {
        data.trade_default_unit = 1;
    }

    //trade_default_unit
    if (data.trade_category == '1') {
        if (data.trade_kind == '3') {
            document.querySelector('[name="gamemoney_unit"][value="' + defaultUnit + '"]').click();
            frm.user_quantity.value = (data.trade_quantity / data.trade_default_unit).currency();
        }
        frm.user_price.value = data.trade_money.currency();


    } else if (data.trade_category == '2') {
        if (data.trade_kind == '3') {
            document.querySelector('[name="gamemoney_unit"][value="' + defaultUnit + '"]').click();
        }
        frm.user_quantity_min.value = (data.min_quantity / data.trade_default_unit).currency();
        frm.user_quantity_max.value = (data.max_quantity / data.trade_default_unit).currency();
        frm.user_division_unit.value = (data.trade_quantity / data.trade_default_unit).currency();
        frm.user_division_price.value = data.trade_money.currency();
    }

    document.querySelector('[name="text_select"][value="1"]').click();
    frm.user_title.value = data.trade_subject;
    frm.user_text.value = data.trade_content;


    if (frm.use_compensation != null) {
        if (data.trade_class === '4' || data.trade_class === '5') {
            frm.use_compensation.checked = true;
        } else {
            frm.use_compensation.checked = false;
        }
    }

    lastListEl = '';
}

// ì•„ì´í…œì •ë³´ ì¶”ê°€
function fnSltItemAdd() {
    var rgIdept = [];
    var rgIdeptTxt = [];
    var itemInfo = document.getElementById('slt_item_info');
    var itemInfoResult = document.getElementById('item_info_result');
    if (itemInfo.value.isEmpty() === false) {
        var rgTmp = itemInfo.value.split(',');
        for (var i = 0; i < rgTmp.length; i++) {
            if (rgTmp[i].isEmpty() === false) {
                rgIdept.push(rgTmp[i]);
            }
        }

        if (rgIdept.length > 3) {
            alert('ìµœëŒ€ ì„¤ì • ì •ë³´ëŠ” 4ê°œìž…ë‹ˆë‹¤.');
            return;
        }
    }

    var idept1 = document.getElementById('iteminfo_dept1');
    var idept2 = document.getElementById('iteminfo_dept2');
    if (idept1.value.isEmpty() === true || idept2.value.isEmpty() === true) {
        alert('ì•„ì´í…œ ì •ë³´ë¥¼ ì„ íƒí•˜ì„¸ìš”');
        return;
    }

    var idept1Txt = idept1.options[idept1.selectedIndex].text;
    var idept2Txt = idept2.options[idept2.selectedIndex].text;
    var idept = idept1.value + idept2.value;
    var ideptTxt = idept1Txt + '[' + idept2Txt + ']';
    if (rgIdept.join(',').indexOf(idept + '_' + ideptTxt) < 0) {
        rgIdept.push(idept + '_' + ideptTxt);
    }

    for (var i = 0; i < rgIdept.length; i++) {
        rgTmp = rgIdept[i].split('_');
        rgIdeptTxt.push("<a href='#' onclick=\"fnSltItemRm('" + rgIdept[i] + "')\">" + rgTmp[1] + '(x)</a>');
    }

    itemInfo.value = rgIdept.join(',');
    itemInfoResult.classList.remove('f_red1');
    itemInfoResult.innerHTML = rgIdeptTxt.join(',');
}

// ì•„ì´í…œì •ë³´ ì‚­ì œ
function fnSltItemRm(idept) {
    var rgIdeptTxt = [];
    var itemInfo = document.getElementById('slt_item_info');
    var itemInfoResult = document.getElementById('item_info_result');
    var rgIdept = itemInfo.value.replace(idept, '').split(',');
    for (var i = 0; i < rgIdept.length; i++) {
        if (rgIdept[i].isEmpty() === true) {
            continue;
        }
        var rgTmp = rgIdept[i].split('_');
        rgIdeptTxt.push("<a href='#' onclick=\"fnSltItemRm('" + rgIdept[i] + "')\">" + rgTmp[1] + '(x)</a>');
    }

    itemInfo.value = rgIdept.join(',');
    itemInfoResult.innerHTML = rgIdeptTxt.join(',');
    if (i < 2) {
        itemInfoResult.classList.add('f_red1');
        itemInfoResult.innerHTML = 'ì•„ì´í…œ ì •ë³´ë¥¼ ì„ íƒí•˜ì‹œë©´ íŒë§¤ì— ë„ì›€ì´ ë©ë‹ˆë‹¤.';
    }
}

var itemDetailSetting = {
    detailItemInfo: null,
    itemInfoTach: null,
    checkItemData: function() {
        if (this.detailItemInfo === null) {
            ajaxRequest({
                url: '/lineagem/_ajax_item_all.php',
                dataType: 'json',
                success: function(data) {
                    if (data.manage === false) {
                        return;
                    }

                    itemDetailSetting.detailItemInfo = data;
                    itemDetailSetting.setItemInfo();
                }
            });
        } else {
            itemDetailSetting.setItemInfo();
        }

        document.getElementById('suc_btn').addEventListener('click', function() {
            var check = itemDetailSetting.itemSelectCheck();
            if (check === false) {
                return;
            }

            var item_name = $('#item_name').val();
            var enchant = $('#enchant').val();
            var state = $('#state').val();
            var attribute = $('#attribute').val();
            var attr_enchant = $('#attr_enchant').val();

            if (enchant === '' || enchant === '0') {
                enchant = '';
            } else {
                enchant = '+' + enchant;
            }

            if (attr_enchant.isEmpty() === false) {
                attr_enchant += 'ë‹¨';
            }

            if (state.isEmpty() === false) {
                state += 'ë°›ì€';
            }

            var rgGoods = [];
            rgGoods.push(state);
            rgGoods.push(attribute);
            rgGoods.push(attr_enchant);
            rgGoods.push(enchant);
            rgGoods.push(item_name);
            rgGoods = rgGoods.filter(function(s) {
                return s != '';
            });

            var strGoods = rgGoods.join(' ');

            $('#item_can').removeClass('g_hidden');
            $('#item_suc, #item_detail_wrap, #add_detail_wrap').addClass('g_hidden');
            $('#item_info_txt').text(strGoods);
            $('#user_title').val('(' + strGoods + ') íŒë‹ˆë‹¤.');

            ajaxRequest({
                url: '/lineagem/_ajax_item_desc.php',
                type: 'post',
                dataType: 'json',
                data: {
                    category: $('#category').val(),
                    kind: $('#kind').val(),
                    item_name: $('#item_name').val()
                },
                success: function(res) {
                    if (res.FAIL === 'true') {
                        if (res.message) {
                            alert(res.message);
                        }
                        return;
                    }
                    $('#user_text').val(res.message);
                    $('#iteminfo_use_complete').val('Y');
                }
            });
        });

        document.getElementById('can_btn').addEventListener('click', function() {
            $('#item_suc, #item_detail_wrap, #add_detail_wrap').removeClass('g_hidden');
            $('#item_can').addClass('g_hidden');
            $('#item_info_txt').text('');
            $('#iteminfo_use_complete').val('N');
            itemDetailSetting.detailItemInfoReset();
        });

        document.getElementById('iteminfo_use').addEventListener('click', function() {
            $('#rd_text_default').trigger('click');
            $('#item_can').find('a').trigger('click');
            itemDetailSetting.detailItemInfoReset(this.checked);
        });

        $('#item_detail_search select').on('change', function() {
            var closest = $(this).closest('li');
            if (this.id != 'enchant') {
                closest.nextAll().find('select').prop('disabled', true).find('option[value=""]').prop('selected', true);
                $('#add_detail_wrap select').prop('disabled', true).find('option[value=""]').prop('selected', true);
            }

            if (this.value.isEmpty() === true) {
                return;
            }

            if (this.id === 'category' || this.id === 'kind') {
                var nextEl = $(this).closest('li').next().find('select').prop('disabled', false)[0].id;
                itemDetailSetting.changeItem('#' + nextEl, itemDetailSetting.detailItemInfo[nextEl][this.value]);
            } else if (this.id === 'item_name') {
                var category = $('#category').val();
                if (category != 'ìŠ¤í‚¬ë¶' && category != 'ê¸°íƒ€') {
                    closest.next().find('select').prop('disabled', false).find('option[value="0"]').prop('selected', true);
                }

                if (category === 'ë¬´ê¸°') {
                    $('#add_detail_wrap').find('select').slice(0, 2).prop('disabled', false);
                } else {
                    $('#add_detail_wrap').find('select').slice(0, 1).prop('disabled', false);
                }
            } else if (this.id === 'enchant') {
                if (closest.prev().find('select').val().isEmpty()) {
                    alert('ì•„ì´í…œì„ ì„ íƒí•´ì£¼ì„¸ìš”.');
                    $('#enchant').prop('disabled', false).find('option[value=""]').prop('selected', true);
                    $('#add_detail_wrap > select').prop('disabled', true).find('option[value=""]').prop('selected', true);
                    return;
                }
            }
        });

        $('#add_detail_wrap select').on('change', function() {
            var closest = $(this).closest('li');
            if (this.id === 'attr_enchant' && closest.prev().find('select').val().isEmpty()) {
                alert('ì†ì„±ì„ ì„ íƒí•´ì£¼ì„¸ìš”.');
                $('#attr_enchant').find('option[value=""]').prop('selected', true);
                return;
            }
            if (this.id === 'attribute') {
                if (this.value.isEmpty()) {
                    $('#attr_enchant').prop('disabled', true).find('option[value=""]').prop('selected', true);
                    return;
                }
                $('#attr_enchant').prop('disabled', false).find('option[value="1"]').prop('selected', true);
            }
        });
    },
    setItemInfo: function() {
        if (this.detailItemInfo.manage.length < 1 || this.detailItemInfo.manage.visible != 'Y') {
            return;
        }

        this.detailItemInfoReset();

        var manage = this.detailItemInfo.manage;
        var rgEnchnt = [];

        $('#category').find('option:eq(0)').text('ì„ íƒí•˜ì„¸ìš”');
        itemDetailSetting.changeItem('#category', this.detailItemInfo.category);

        for (var i = manage.enchant_min; i <= manage.enchant_max; i++) {
            rgEnchnt.push('<option value="' + i + '">+' + i + '</option>');
        }
        $('#enchant').append(rgEnchnt.join(''));

        rgEnchnt = [];
        for (var i = manage.attr_enchant_min; i <= manage.attr_enchant_max; i++) {
            rgEnchnt.push('<option value="' + i + '">' + i + 'ë‹¨</option>');
        }
        $('#attr_enchant').append(rgEnchnt.join(''));

        if (this.detailItemInfo.manage.attr_enchant_visible === 'Y') {
            $('#add_detail_wrap').removeClass('g_hidden');
        } else {
            $('#add_detail_wrap').addClass('g_hidden');
        }
    },
    changeItem: function(el, data) {
        $(el).find('option:gt(0)').remove();

        if (data === undefined || data.length < 1) {
            return;
        }
        var rgHtml = [];
        for (var i = 0, len = data.length; i < len; i++) {
            rgHtml.push('<option value="' + data[i] + '">' + data[i] + '</option>');
        }
        $(el).append(rgHtml.join(''));
    },
    detailItemInfoReset: function(use) {
        $('#item_detail_srh').find('option[value=""]').prop('selected', true);
        $('#category').trigger('change');
        $('#item_suc').removeClass('g_hidden');
        $('#item_can').addClass('g_hidden');
        if (use === false) {
            $('#item_detail_srh').addClass('g_hidden');
            $('#item_guide_txt, .item_detail_opts').removeClass('g_hidden');
            $('#user_title, #user_text').prop('readonly', false).val(e_goods_text[e_select.goods] + ' íŒë‹ˆë‹¤.');
        } else {
            $('#item_detail_srh').removeClass('g_hidden');
            $('#item_guide_txt, .item_detail_opts').addClass('g_hidden');
            $('#user_title, #user_text').prop('readonly', 'readonly').val(e_goods_text[e_select.goods] + ' íŒë‹ˆë‹¤.');
        }
    },
    itemSelectCheck: function() {
        var iteminfo_use = $('#iteminfo_use');
        if (iteminfo_use[0].checked === true) {
            var category = $('#category').val();
            var kind = $('#kind').val();
            var item_name = $('#item_name').val();
            var enchant = $('#enchant').val();
            var state = $('#state').val();
            var attribute = $('#attribute').val();
            var attr_enchant = $('#attr_enchant').val();

            if (category.isEmpty()) {
                alert('ë¶„ë¥˜ë¥¼ ì„ íƒí•´ì£¼ì„¸ìš”.');
                return false;
            }
            if (kind.isEmpty()) {
                alert('ì¢…ë¥˜ë¥¼ ì„ íƒí•´ì£¼ì„¸ìš”.');
                return false;
            }
            if (item_name.isEmpty()) {
                alert('ì•„ì´í…œì„ ì„ íƒí•´ì£¼ì„¸ìš”.');
                return false;
            }
            if ($('#enchant').prop('disabled') === false && enchant.isEmpty()) {
                alert('ì¸ì±ˆíŠ¸ ìƒíƒœë¥¼ ì„ íƒí•´ì£¼ì„¸ìš”.');
                return false;
            }

            if ($('#attr_enchant').prop('disabled') === false && attribute.isEmpty() === false && attr_enchant.isEmpty() === true) {
                alert('ì†ì„± ì¸ì±ˆíŠ¸ë¥¼ ì„ íƒí•´ì£¼ì„¸ìš”.');
                return false;
            }
        }
        return true;
    }
};

function SafetyNumber(){
    ajaxRequest({
        url: '/_include/_SafetyNumber_Category_Check_AJAX.html',
        type: 'post',
        data: {
            gamecode: $('#game_code').val(),
        },
        success: function(res) {
            if (res === 'true') {
                $('.SafetyNumber_plus').show();
                $('.SafetyNumber').hide();
            } else{
                $('.SafetyNumber_plus').hide();
                $('.SafetyNumber').show();
            }

        }
    });
}

//ITM-11901 ë¬¼í’ˆë“±ë¡ì•Œë¦¬ë¯¸ ë“±ë¡ë°©ì‹ ì¶”ê°€
function getTagList(data){
    /* ë¬¼í’ˆë“±ë¡ ì•Œë¦¬ë¯¸ */
    ajaxRequest({
        url: '/myroom/goods_alarm/_ajax_process.php',
        type: 'post',
        dataType: 'json',
        data: {
            'mode':'keywords',
            'trade_type':1,
            'game_code':data.gameCode,
            'server_code':data.serverCode
        },
        success: function(res) {
            $('.tag_list').empty();
            if(res.RST)
            {
                if(res.DAT.length == 0 || res.DAT == undefined)
                {
                    $('.tag_list').append('<span class="no_keyword">ë“±ë¡ëœ ì•Œë¦¼í‚¤ì›Œë“œê°€ ì—†ìŠµë‹ˆë‹¤.</span>');
                    tagList = []
                }
                else
                {
                    $('.tag_wrapper').show();
                    tagList = res.DAT
                }

                if(tagList.length>10)
                {
                    for(var i=0; i<10; i++)
                    {
                        $('.tag_list').append('<span class="tag" data-text="'+tagList[i]+'">#'+tagList[i]+'</span>');
                    }

                    $('.tag_list').append('<button id="tag_more" class="btn_white1" type="button">ë”ë³´ê¸°</button>');

                    $('#tag_more').click(function(){
                        $(this).remove();
                        for(var i=10; i<tagList.length; i++)
                        {
                            $('.tag_list').append('<span class="tag" data-text="'+tagList[i]+'">#'+tagList[i]+'</span>');
                        }
                        tagAction()
                    })
                }
                else
                {
                    for(var i=0; i<tagList.length; i++)
                    {
                        $('.tag_list').append('<span class="tag" data-text="'+tagList[i]+'">#'+tagList[i]+'</span>');
                    }
                }

                tagAction()
            }
            else
            {
                $('.tag_wrapper').hide();
                alert(res.MSG)
            }
        },
    });
}

function tagAction(){
    $('.tag').click(function(){
        if($('input[name="noti_keyword"]').val() != $(this).attr('data-text'))
        {
            $('input[name="noti_keyword"]').val($(this).attr('data-text'))
        }
    })
}
