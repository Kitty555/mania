/*
 * @title		êµ¬ë§¤ì‹ ì²­
 * @author		ê¹€ë³´ëžŒ
 * @date		2012.03.20
 * @update		ìˆ˜ì •ë‚ ì§œ(ìˆ˜ì •ìž)
 * @description
 */

/*
 *	id			: ê±°ëž˜ë²ˆí˜¸
 *	subject		: ì œëª©
 *	price		: ê°€ê²©
 *	coupon		: ì¿ í°
 *	coupon_price: ì¿ í°ê°€ê²©
 *	node		: ì¿ í°ì•„ì´ë””ë¥¼ ì €ìž¥í•  ë…¸ë“œ
 *	nodePrice	: ì¿ í°ê°€ê²©ì„ ì¶œë ¥í•  ë…¸ë“œ
 *	OnSelect	: ì‚¬ìš©ìž ì •ì˜í•¨ìˆ˜(ì¿ í°ì„ íƒì‹œ ì‹¤í–‰ë  í•¨ìˆ˜ ì§€ì •)
 */

var g_trade_info = {
    id: null,
    sale: 'general',
    goods: 'money',
    curr_mileage: null,
    subject: null,
    price: null,
    trade_kind: null,
    trade_money: null,
    event_check: false,
    event_money: 0,
    coupon: null,
    coupon_price: null,
    node: null,
    nodePrice: null,
    div_loop: 0,
    div_default: 0,
    div_unit: null,
    min_unit: null,
    max_unit: null,
    curr_unit: null,
    min_quantity: null,
    max_quantity: null,
    discount_use: null,
    discount_start: null,
    discount_cnt: null,
    discount_money: null,
    payment_price: 0,
    compensation_price: 0,
    OnSelect: applyCoupon,
    cardCode: null
};

var g_event_info = {
    rate: 1.5,
    min: 500,
    max: 14900
};

function _init() {
    //	g_fnSECURITY2();

    // ì¿ í° ì ìš© ë…¸ë“œ
    g_trade_info.node = $('[name="use_coupon"]');
    g_trade_info.nodePrice = $('#use_coupon_price');

    /* â–¼ í¼ì²´í¬ */
    var frm = document.forms.frmSell;
    var formCheck = new FormChecker('frmSell');
    var strType = 'mileage';
    if(g_trade_info.trade_kind !== "character"){
        formCheck.add({
            name: 'user_character',
            msg: 'ë¬¼í’ˆì„ ì „ë‹¬ ë°›ìœ¼ì‹¤ ìºë¦­í„°ëª…ì„ ìž…ë ¥í•´ì£¼ì„¸ìš”.'
        });
    }
    if (g_trade_info.sale === 'division') {
        formCheck.add({
            name: 'buy_quantity',
            msg: 'êµ¬ë§¤ìˆ˜ëŸ‰ì„ ìž…ë ¥í•´í•´ì£¼ì„¸ìš”.'
        });
        formCheck.add({
            custom: function() {
                var buyQuan = frm.buy_quantity;
                var buyQuanCnt = buyQuan.value.numeric();

                if ((buyQuanCnt * g_trade_info.div_unit) > g_trade_info.curr_unit) {
                    alert('êµ¬ë§¤ìˆ˜ëŸ‰ì´ í˜„ìž¬ ë³´ìœ  ìˆ˜ëŸ‰ë³´ë‹¤ ë§ŽìŠµë‹ˆë‹¤. êµ¬ë§¤ìˆ˜ëŸ‰ì„ ë‹¤ì‹œ ìž…ë ¥í•´ì£¼ì„¸ìš”.');
                    buyQuan.focus();
                    return false;
                }

                if (buyQuanCnt < g_trade_info.min_quantity) {
                    alert('ìµœì†Œêµ¬ë§¤ìˆ˜ëŸ‰(' + g_trade_info.min_quantity + 'ë²ˆ) ë¯¸ë§Œì˜ ë¬¼í’ˆì€ ì‹ ì²­í•  ìˆ˜ ì—†ìŠµë‹ˆë‹¤.');
                    buyQuan.focus();
                    return false;
                } else if (buyQuanCnt > g_trade_info.max_quantity) {
                    alert('ìµœëŒ€êµ¬ë§¤ìˆ˜ëŸ‰(' + g_trade_info.max_quantity + 'ë²ˆ) ì´ˆê³¼ì˜ ë¬¼í’ˆì€ ì‹ ì²­í•  ìˆ˜ ì—†ìŠµë‹ˆë‹¤.');
                    buyQuan.focus();
                    return false;
                }

                var tradePrice = $('.trade_money1').text().numeric();
                if (tradePrice < 3000) {
                    alert('ê±°ëž˜ëŠ” 3,000ì› ì´ìƒë¶€í„° ê°€ëŠ¥í•©ë‹ˆë‹¤.');
                    return false;
                }

                return true;
            }
        });
    }
    Form.protect.price(frm.use_mileage);
    /* â–² í¼ì²´í¬ */


    $('#buy_quantity').on('keyup', buyQuantity);
    $('[name="payment_type"]').on('click', fnPaymentCheck);

    if (g_trade_info.sale === 'division') {
        $('#buy_quantity').val(g_trade_info.quantity);
        buyQuantity();
    }
    fnAddPay(strType);


    $('input[name="creditcard_tmp"]').on({
        change: function() {
            $('select[name="creditcard_tmp"] option:eq(0)').prop('selected', true);
        }
    });

    $('select[name="creditcard_tmp"]').on({
        change: function() {
            $('input[name="creditcard_tmp"]').prop('checked', false);

            if (this.value === 'kb') {
                $('select[name="creditcard_tmp"] option:eq(0)').prop('selected', true);

                g_nodeSleep.enable($('#layer_kb'));
            }
        }
    });

    /* â–¼ ë˜ì „ì•¤íŒŒì´í„° í†µí•©ì„œë²„ ì²˜ë¦¬ */
    if (frm.game_code.value === '281') {
        var userCharacter = document.getElementById('user_character');
        new ServerList(document.getElementById('dfServerList'), {
            autoComplete: '#df_server_code_text',
            allView: false,
            gameCode: '281',
            exceptCode: ['12189'],
            hidden_use: {
                code: '[name="df_server_code"]',
                text: ''
            }
        });

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

        formCheck.add({
            name: 'user_character',
            msg: 'ë¬¼í’ˆì„ ì „ë‹¬ ë°›ìœ¼ì‹¤ ìºë¦­í„°ëª…ì„ ìž…ë ¥í•´ì£¼ì„¸ìš”.'
        });
    }
    /* â–² ë˜ì „ì•¤íŒŒì´í„° í†µí•©ì„œë²„ ì²˜ë¦¬ */

    // í‹°ìºì‹œ ì¶©ì „ ë°”ë¡œê°€ê¸°
    $('#btn_tcash_charge').on({
        click: function() {
            var nWidth = 740,
                nHeight = 660,
                nLeft = (screen.width - nWidth) / 2,
                nTop = (screen.height - nHeight) / 2,
                status = 'toolbar=no,directories=no,scrollbars=no,resizable=no,status=no,menubar=no,width=' + nWidth + ',height=' + nHeight + ',top=' + nTop + ',left=' + nLeft;

            if ($('#tcash_payment_phone').val() === '') {
                alert('í‹°ìºì‹œ ê°„íŽ¸ê²°ì œ ì •ë³´ ë“±ë¡ í›„ ì´ìš©í•´ ì£¼ì„¸ìš”.');

                _window.open('tcash_reg', '/myroom/payment/tcash/tcash_reg.html?reg_type=reg_tcash', 500, 500);

                return;
            }

            tcash_charge = window.open('', 'tcash_charge', status);

            $('#tcash_frm').submit();
        }
    });


    $('.credit_close').click(function() {
        $('.credit_banner').addClass('closed');
    });

    $('#use_sell_compensation').click(function(e) {
        if (this.checked == true) {
            var message = "200% êµ¬ë§¤ë³´ìƒ"+ ((g_trade_info.trade_kind === 'character') ? "[ìºë¦­í„°]":"")+" ì„œë¹„ìŠ¤ë¥¼ ì‹ ì²­ í•˜ì‹œê² ìŠµë‹ˆê¹Œ?\në‹¨, í•´ë‹¹ë¬¼í’ˆì€ ë§ˆì¼ë¦¬ì§€ ê²°ì œë§Œ ê°€ëŠ¥í•©ë‹ˆë‹¤.";
            if (!confirm(message)) {
                e.preventDefault();
                return;
            } else {
                $("#rd_mileage").prop('checked', true).ready(fnPaymentCheck);
                $('#rd_creditcard, #rd_mobile, #rd_tcash, #rd_samsung').prop('disabled', true);
            }
        } else {
            $('#rd_creditcard, #rd_mobile, #rd_tcash,  #rd_samsung').prop('disabled', false);
        }

        if(g_trade_info.sale === 'division') {
            buyQuantity();
        } else {
            g_trade_info.payment_price -= g_trade_info.compensation_price;
            fnCompensation();
            setTradePriceValue();
        }
    });

    //ì•ˆì‹¬ë²ˆí˜¸, ì•ˆì‹¬ë²ˆí˜¸ í”ŒëŸ¬ìŠ¤
    SafetyNumber();
}

// 200% êµ¬ë§¤ë³´ìƒ
function fnCompensation() {

    var calcCheck = $('#use_sell_compensation').is(':checked') || $('#event_price').length > 0;
    if (calcCheck == true) {
        if(g_trade_info.trade_kind == 'character') {
            if (g_trade_info.price < 1000000) {
                g_trade_info.compensation_price = g_trade_info.price * 0.05;
            } else if (g_trade_info.price >= 1000000 && g_trade_info.price < 5000000) {
                g_trade_info.compensation_price = g_trade_info.price * 0.1;
            } else if (g_trade_info.price >= 5000000) {
                g_trade_info.compensation_price = g_trade_info.price * 0.15;
            }
        }else{
            if (g_trade_info.price < 100000) {
                g_trade_info.compensation_price = g_trade_info.price * 0.01;
            } else if (g_trade_info.price >= 100000 && g_trade_info.price < 1000000) {
                g_trade_info.compensation_price = g_trade_info.price * 0.02;
            } else if (g_trade_info.price >= 1000000) {
                g_trade_info.compensation_price = g_trade_info.price * 0.03;
            }
        }

        if(g_trade_info.compensation_price%10 > 0) {
            g_trade_info.compensation_price = Math.floor(g_trade_info.compensation_price/10) * 10;
        }

        $('#event_price').text(g_trade_info.compensation_price.currency());
        $('#reward_price').text((g_trade_info.compensation_price * 0.2).currency());
    }


    if($('#use_sell_compensation').is(':checked') == false) {
        g_trade_info.compensation_price = 0;
    }

    g_trade_info.payment_price += g_trade_info.compensation_price;

    $('#pay_compensation').text(g_trade_info.compensation_price.currency() + " ì›");
    $('#sell_mileage').text(g_trade_info.price.currency() + " ì›");

}

function fnAddPay(strType) {
    var useMileage = $('#use_mileage'),
        paymentPrice = Number(g_trade_info.payment_price);

    if (strType === 'mileage') {
        if (g_trade_info.curr_mileage < paymentPrice) {
            useMileage.val((g_trade_info.curr_mileage).currency());
            $('#add_pay').text((paymentPrice - g_trade_info.curr_mileage).currency());
            $('#add_charge').removeClass('g_hidden');
            $('#mile_check1').show();
            $('#mile_check2').hide();
        } else {
            useMileage.val(paymentPrice.currency());
            $('#add_charge').addClass('g_hidden');
            $('#mile_check1').hide();
            $('#mile_check2').show();
        }
    } else {
        useMileage.val(0);
        $('#add_pay').text(paymentPrice.currency());
        $('#add_charge').removeClass('g_hidden');
    }
}

/* â–¼ ê²°ì œìˆ˜ë‹¨ ì„ íƒ */
function fnPaymentCheck() {
    var rgType = ['mileage', 'samsungpay', 'creditcard', 'mobile', 'tcash'];
    var rgText = ['ë§ˆì¼ë¦¬ì§€', 'ì‚¼ì„±íŽ˜ì´', 'ì‹ ìš©ì¹´ë“œ', 'íœ´ëŒ€í°', 'TCash(í‹°ìºì‹œ)'];
    var pType = this.value;
    if (pType == undefined) {
        pType = $("input:radio[name='payment_type']").val();
    }

    var nIndex = $.inArray(pType, rgType);
    var useMileage = $('#use_mileage');

    $('.payment').not('.g_hidden').addClass('g_hidden');
    $('.payment').eq(nIndex).removeClass('g_hidden');
    if (nIndex === 3) {
        $('.pay_text').eq(0).html('TCash(í‹°ìºì‹œ)<br><a href="/event/event_ing/e160714_tcash/" target="_blank" class="g_blue1_11"><ì´ìš©ì•ˆë‚´ ìžì„¸ížˆë³´ê¸°></a>');
        $('.pay_text').eq(1).text(rgText[nIndex]);
    } else {
        $('.pay_text').text(rgText[nIndex]);
    }

    if (pType === 'creditcard') {
        $('.credit_banner').removeClass('closed');
        useMileage.removeAttr('readonly');
        useMileage.removeAttr('disabled');
        useMileage.attr('name', 'use_mileage');
        useMileage.on('blur', function() {
            useMileageCheck($(this));
        });
        useMileage.on('keyup', function() {
            fnUseMileage();
        });
        $('#other_pay').attr('name', 'use_creditcard');
        $('#sub_creditcard').removeClass('g_hidden');
        $('#sub_samsungpay').addClass('g_hidden');
    } else if (pType == 'samsungpay') {
        useMileage.removeAttr('readonly');
        useMileage.removeAttr('disabled');
        useMileage.attr('name', 'use_mileage');
        useMileage.on('blur', function() {
            useMileageCheck($(this));
        });
        useMileage.on('keyup', function() {
            fnUseMileage();
        });
        $('#other_pay').attr('name', 'use_creditcard');
        $('#sub_creditcard').addClass('g_hidden');
        $('#sub_samsungpay').removeClass('g_hidden');
    } else {
        if (pType === 'mobile' || pType === 'tcash' ) {
            useMileage.removeAttr('readonly');
            useMileage.removeAttr('disabled');
            useMileage.attr('name', 'use_mileage');
            useMileage.on('blur', function() {
                useMileageCheck($(this));
            });
            useMileage.on('keyup', function() {
                fnUseMileage();
            });
            $('#other_pay').attr('name', 'use_mobile');
        } else {
            useMileage.attr('disabled', true);
            useMileage.attr('readonly', 'readonly');
        }
        useMileage.unbind('blur', function() {
            useMileageCheck($(this));
        });
        useMileage.unbind('keyup', function() {
            fnUseMileage();
        });

        $('#sub_creditcard').addClass('g_hidden');
        $('#sub_samsungpay').addClass('g_hidden');
    }
    fnAddPay(rgType[nIndex]);
}

/* â–² ê²°ì œìˆ˜ë‹¨ ì„ íƒ */
function applyCoupon() {
    var frm = $('#frmSell');
    var paymentPrice = this.payment_price - this.coupon_price;
    var paymentCheck = $('[name="payment_type"]:checked').val();

    if (g_trade_info.event_check === true) {
        frm.find('#event_discount').text('0');
        g_trade_info.event_money = 0;
    }

    g_trade_info.payment_price = paymentPrice;
    fnAddPay(paymentCheck);
    $('#pay_mileage').text(paymentPrice.currency());

    $('#coupon_btn').attr({
        'href' : "javascript:applyCouponCancel();"
    }).text('ì ìš©ì·¨ì†Œ');
}

function applyCouponCancel() {
    var paymentCheck = $('[name="payment_type"]:checked').val(),
        paymentPrice = g_trade_info.payment_price + g_trade_info.coupon_price;

    g_trade_info.payment_price = paymentPrice;
    g_trade_info.coupon_price = 0;

    fnAddPay(paymentCheck);
    $('#pay_mileage').text(paymentPrice.currency());

    g_trade_info.node.attr('value', 0);
    g_trade_info.nodePrice.text(0);

    $('#coupon_btn').attr({
        'href' : "javascript:_window.open('coupon_select', '/payment/coupon/select.html?struct=g_trade_info&info=" + $('[name="coupon_info"]').val() + "', 660, 500);"
    }).text('ì¿ í°í™•ì¸');
}

function fnUseMileage() {
    var frm = $('#frmSell');

    var paymentPrice = 0;
    var couponPrice = $('#use_coupon_price').text();
    var useMileage = $('#use_mileage').val();

    couponPrice = Number(couponPrice.replace(/[^0-9]/g, ''));
    useMileage = Number(useMileage.replace(/[^0-9]/g, ''));
    var nEventDiscountMoney = 0;

    if (g_trade_info.event_check === true && couponPrice < 1) {
        var nCheckDiscountMoney = Math.floor(Number((g_trade_info.price * g_event_info.rate) / 100));
        var nMinus = String(nCheckDiscountMoney).substr(String(nCheckDiscountMoney).length - 1, 1);

        nEventDiscountMoney = nCheckDiscountMoney - nMinus;

        if (nEventDiscountMoney < g_event_info.min) {
            nEventDiscountMoney = g_event_info.min;
        } else if (nEventDiscountMoney > g_event_info.max) {
            nEventDiscountMoney = g_event_info.max;
        }

        frm.event_discount.val(nEventDiscountMoney.currency());

        g_trade_info.event_money = nEventDiscountMoney;
    } else {
        if (frm.event_discount) {
            frm.event_discount.val('0');
        }

        g_trade_info.event_money = 0;
        // paymentPrice = tradeMoney - couponPrice;
    }

    if (useMileage > Number(g_trade_info.curr_mileage)) {
        alert('ì‚¬ìš©í•  ë§ˆì¼ë¦¬ì§€ê°€ ì‚¬ìš©ê°€ëŠ¥ ë§ˆì¼ë¦¬ì§€ë³´ë‹¤ ìž‘ì•„ì•¼í•©ë‹ˆë‹¤.');
        $('#use_mileage').val(0);
        $('#use_mileage').focus();

        if (couponPrice > 0) {
            $('#add_pay').text((g_trade_info.price - couponPrice).currency());
        } else {
            $('#add_pay').text((g_trade_info.price - g_trade_info.event_money).currency());
        }
        return;
    }

    if (useMileage >= g_trade_info.payment_price) {
        alert('ì‚¬ìš©í•  ë§ˆì¼ë¦¬ì§€ëŠ” ê±°ëž˜ê¸ˆì•¡ë³´ë‹¤ ìž‘ì•„ì•¼í•©ë‹ˆë‹¤.');
        $('#use_mileage').val(0);
        $('#use_mileage').focus();


        if (couponPrice > 0) {
            $('#add_pay').text((g_trade_info.price - couponPrice).currency());
        } else {
            $('#add_pay').text((g_trade_info.price - g_trade_info.event_money).currency());
        }
        return;
    }

    if (couponPrice > 0) {
        paymentPrice = g_trade_info.price - useMileage - couponPrice;
    } else {
        paymentPrice = g_trade_info.price - useMileage - g_trade_info.event_money;
    }

    if (paymentPrice < 1000) {
        var strPaymentType = $('[name="payment_type"]:checked').val();
        var strPaymentName = '';
        if (strPaymentType === 'creditcard') {
            strPaymentName = 'ì‹ ìš©ì¹´ë“œ ';
        } else if (strPaymentType === 'mobile') {
            strPaymentName = 'íœ´ëŒ€í° ';
        } else if (strPaymentType === 'tcash') {
            strPaymentName = 'TCash(í‹°ìºì‹œ) ';
        } else if (strPaymentType === 'samsungpay') {
            strPaymentName = 'ì‚¼ì„±íŽ˜ì´ ';
        }

        alert(strPaymentName + 'ê²°ì œ ê¸ˆì•¡ì€ 1,000ì› ì´ìƒì´ì–´ì•¼í•©ë‹ˆë‹¤.');

        $('#use_mileage').val(0);
        $('#use_mileage').focus();
        useMileage = 0;
        if (couponPrice > 0) {
            paymentPrice = g_trade_info.price - couponPrice;
        } else {
            paymentPrice = g_trade_info.price - g_trade_info.event_money;
        }
    }

    $('#add_pay').text(paymentPrice.currency());
}

function useMileageCheck(obj) {
    var frm = $('#frmSell');

    if (obj.val().isEmpty()) {
        obj.val(0);
        return;
    }

    var couponPrice = $('#use_coupon_price').text();
    couponPrice = Number(couponPrice.replace(/[^0-9]/g, ''));

    var mileage = Number(obj.val().replace(/[^0-9]/g, ''));
    var nLen = mileage.toString().length;
    if (isNaN(mileage) || (mileage > 0 && mileage < 10) || mileage.toString().substring(nLen - 1, nLen) != '0') {
        alert('ë§ˆì¼ë¦¬ì§€ëŠ” ì¼ì›ë‹¨ìœ„ë¡œ ì‚¬ìš©í•˜ì‹¤ ìˆ˜ ì—†ìŠµë‹ˆë‹¤.');

        if (couponPrice > 0) {
            $('#add_pay').text((g_trade_info.price - couponPrice).currency());
        } else {
            $('#add_pay').text((g_trade_info.price - g_trade_info.event_money).currency());
        }

        obj.val(0);
        obj.focus();
        return;
    }
}


function buyQuantity() {
    var frm = $('#frmSell');

    var tradeMoney = 0;
    var paymentPrice = 0;
    var discountPrice = 0;
    var buyQuant = frm.find('input[name="buy_quantity"]').val().replace(/[^0-9]/g, '');

    frm.find('input[name="buy_quantity"]').val(Number(buyQuant).currency());

    if (buyQuant.isEmpty()) {
        return;
    }

    buyQuant = Number(buyQuant.replace(/[^0-9]/g, ''));

    if (buyQuant == 0 || buyQuant == '') return;

    var buyGameMoney = buyQuant * g_trade_info.div_unit;

    $('#spnQuantity').text(buyQuant);
    $('#spnQuantity_total').text(moneyUnitChange(buyGameMoney));

    if (g_trade_info.trade_kind == 'money') {
        var rgUnit = new Array('ë§Œ', 'ì–µ', 'ì¡°');
        var rgDefaultUnit = new Array(10000, 100000000, 1000000000000);

        var iUnit = 0;

        if (g_trade_info.div_loop >= 0 && g_trade_info.div_loop < 3) {
            buyGameMoney = buyGameMoney / g_trade_info.div_default;
            buyGameMoney = buyGameMoney.currency() + rgUnit[g_trade_info.div_loop];
        } else {
            buyGameMoney = buyGameMoney.currency();
        }
    }

    var couponPrice = frm.find('#use_coupon_price').text().replace(/[^0-9]/g, '');

    if (g_trade_info.discount_use == 'Y' &&
        Math.floor(buyQuant / g_trade_info.discount_cnt) > 0) {
        discountPrice = g_trade_info.discount_money * Math.floor(buyQuant / g_trade_info.discount_cnt);
    }

    tradeMoney = (g_trade_info.trade_money * buyQuant) - discountPrice;

    var nEventDiscountMoney = 0;

    if (g_trade_info.event_check == true && couponPrice < 1) {
        nCheckDiscountMoney = Math.floor(Number((tradeMoney * g_event_info.rate) / 100));

        nMinus = String(nCheckDiscountMoney).substr(String(nCheckDiscountMoney).length - 1, 1);

        nEventDiscountMoney = nCheckDiscountMoney - nMinus;

        if (nEventDiscountMoney < g_event_info.min) {
            nEventDiscountMoney = g_event_info.min;
        } else if (nEventDiscountMoney > g_event_info.max) {
            nEventDiscountMoney = g_event_info.max;
        }

        frm.event_discount.value = nEventDiscountMoney.currency();

        g_trade_info.event_money = nEventDiscountMoney;

        paymentPrice = tradeMoney - nEventDiscountMoney;
    } else {
        if (frm.event_discount) {
            frm.event_discount.value = '0';
        }

        g_trade_info.event_money = 0;
        paymentPrice = tradeMoney - couponPrice;
    }

    g_trade_info.price = tradeMoney;// paymentPrice;
    g_trade_info.payment_price = paymentPrice;

    if (g_trade_info.discount_use === 'Y') {
        frm.find('#discount_money').text(discountPrice.currency());
    }

    fnCompensation();
    setTradePriceValue();

    if (g_trade_info.max_quantity < buyQuant) {
        alert('ìµœëŒ€ êµ¬ë§¤ìˆ˜ëŸ‰ì„ ì´ˆê³¼í•˜ì˜€ìŠµë‹ˆë‹¤!');
        frm.find('input[name="buy_quantity"]').val(g_trade_info.max_quantity.currency());
        buyQuantity_reload();
    }
}

function setTradePriceValue() {
    var frm = $('#frmSell');
    var useMileage = frm.find('#use_mileage').val().replace(/[^0-9]/g, '');

    frm.find('#trade_money').text(g_trade_info.price.currency());
    frm.find('.trade_money1').text(g_trade_info.price.currency());

    frm.find('#pay_mileage').text(g_trade_info.payment_price.currency());
    frm.find('input[name="pay_mileage"]').val(g_trade_info.payment_price.currency());
    frm.find('input[name="use_creditcard"]').val((g_trade_info.payment_price - useMileage).currency());
    frm.find('input[name="use_mobile"]').val(g_trade_info.payment_price.currency());

    var realPayment = g_trade_info.payment_price - g_trade_info.curr_mileage;
    var paymentCheck = $('[name="payment_type"]:checked').val();

    if (paymentCheck === 'mileage') {
        if (realPayment > 0) {
            $('#mile_check1').show();
            $('#mile_check2').hide();
        } else {
            $('#mile_check1').hide();
            $('#mile_check2').show();
        }
    }
    fnAddPay(paymentCheck);
}

function buyQuantity_reload() {
    buyQuantity();
}


function moneyUnitChange(m) {
    var money = '' + m;
    var reTuenMoney = '';
    var moneyString = new Array(money.length);
    var unitString = new Array('', 'ë§Œ', 'ì–µ', 'ì¡°', 'ê²½');
    var tmpNumber = '';

    if (money.length > 4) {
        for (var i = 0; i < money.length; i++) {
            moneyString[i] = money.substr(i, 1);
        }

        var x = 1;
        var y = 0;
        for (i = money.length; i > 0; i--) {
            tmpNumber = moneyString[i - 1] + tmpNumber;

            if (x % 4 === 0) {
                if (Number(tmpNumber) > 0) {
                    reTuenMoney = (Number(tmpNumber).currency()) + unitString[y] + reTuenMoney;
                }
                tmpNumber = '';
                y++;
            }
            x++;
        }

        if (tmpNumber.length > 0) {
            reTuenMoney = (Number(tmpNumber).currency()) + unitString[y] + reTuenMoney;
        }
    } else {
        reTuenMoney = Number(money).currency();
    }

    return reTuenMoney;
}


function fnApplication(defType) {
    var frm = document.forms.frmSell;
    var result = frm.checker.send();
    if (result === false) {
        return;
    }
    /* â–¼ ê²°ì œìˆ˜ë‹¨ë³„ ì´ìš© ì œí•œ */
    var strPaymentType = $('[name="payment_type"]:checked').val();
    switch (strPaymentType) {
        case 'creditcard':// 1,3
            if (defType == 1) {
                alert('ê³ ê°ë‹˜ì€ í˜„ìž¬ ì‹ ìš©ì¹´ë“œ ê²°ì œê°€ ë¶ˆê°€ëŠ¥í•œ ìƒíƒœìž…ë‹ˆë‹¤.\nìžì„¸í•œ ì‚¬í•­ì€ 1544-8278ë¡œ ë¬¸ì˜í•´ì£¼ì‹œê¸° ë°”ëžë‹ˆë‹¤.');
                return false;
            }

            if (defType == 3) {
                alert('ê³ ê°ë‹˜ì€ í˜„ìž¬ íœ´ëŒ€í° ë˜ëŠ” ì‹ ìš©ì¹´ë“œ ê²°ì œê°€ ë¶ˆê°€ëŠ¥í•œ ìƒíƒœìž…ë‹ˆë‹¤.\nìžì„¸í•œ ì‚¬í•­ì€ 1544-8278ë¡œ ë¬¸ì˜í•´ì£¼ì‹œê¸° ë°”ëžë‹ˆë‹¤.');
                return false;
            }

            /* ì‹ ìš©ì¹´ë“œ ì„ íƒ ì²´í¬ */
            var creditcardTmp = $('input[name="creditcard_tmp"]:checked').val(),
                creditcardEtcTmp = $('select[name="creditcard_tmp"] option:selected').val();

            if (!creditcardTmp || creditcardTmp === '') {
                if (!creditcardEtcTmp || creditcardEtcTmp === '') {
                    alert('ì¹´ë“œë¥¼ ì„ íƒí•´ì£¼ì„¸ìš”.');
                    return false;
                }

                if ($('select[name="creditcard_tmp"]').val() === 'kb') {
                    alert('ë‹¤ë¥¸ ì¹´ë“œë¡œ ì§„í–‰í•´ì£¼ì„¸ìš”.');
                    return;
                }

                $('#code').val(creditcardEtcTmp);
                g_trade_info.cardCode = creditcardEtcTmp;
            } else {
                $('#code').val(creditcardTmp);
                g_trade_info.cardCode = creditcardTmp;
            }
            break;

        case 'mobile':// 2,3
            if (defType == 2) {
                alert('ê³ ê°ë‹˜ì€ í˜„ìž¬ íœ´ëŒ€í° ê²°ì œê°€ ë¶ˆê°€ëŠ¥í•œ ìƒíƒœìž…ë‹ˆë‹¤.\nìžì„¸í•œ ì‚¬í•­ì€ 1544-8278ë¡œ ë¬¸ì˜í•´ì£¼ì‹œê¸° ë°”ëžë‹ˆë‹¤.');
                return false;
            }

            if (defType == 3) {
                alert('ê³ ê°ë‹˜ì€ í˜„ìž¬ íœ´ëŒ€í° ë˜ëŠ” ì‹ ìš©ì¹´ë“œ ê²°ì œê°€ ë¶ˆê°€ëŠ¥í•œ ìƒíƒœìž…ë‹ˆë‹¤.\nìžì„¸í•œ ì‚¬í•­ì€ 1544-8278ë¡œ ë¬¸ì˜í•´ì£¼ì‹œê¸° ë°”ëžë‹ˆë‹¤.');
                return false;
            }
            break;
        case 'samsungpay' :
            var samsungTmp = $('input[name="samsungpay_tmp"]:checked').val();

            if (!samsungTmp || samsungTmp == undefined) {
                alert('ê²°ì œìˆ˜ë‹¨ì„ ì„ íƒí•´ì£¼ì„¸ìš”');
                return false;
            }

            // console.log(samsungTmp);
            $('#code').val(samsungTmp);
            g_trade_info.cardCode = samsungTmp;

            break;
    }
    /* â–² ê²°ì œìˆ˜ë‹¨ë³„ ì´ìš© ì œí•œ */

    /* â–¼ ì—°ë½ì²˜ ì¤‘ë³µì²´í¬ */
    var slctContact = $('#user_contactA').val();
    var slctMobileType = $('#slctMobile_type').val();
    var params = {
        user_id: $('#user_id').val(),
        trade_flag: 'Y',
        contact_yn: (slctContact === 'N') ? 'N' : 'Y',
        mobile_yn: (slctMobileType === 'N') ? 'N' : 'Y'
    };

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
        dataType: 'text',
        type: 'POST',
        data: params,
        success: function(res) {
            var rgResult = res.split('|');
            switch (rgResult[0]) {
                case 'S':
                    if (g_trade_info.sale === 'division') {
                        $('#layer_quantity').text($('#spnQuantity_total').text());
                        $('#layer_money').text($('#pay_mileage').text());
                    }

                    $('#layer_character').text($('input[name="user_character"]').val());

                    LayerControl.open({layer: $('#dvGoodsInfo')[0]});

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

function fnSubmit() {
    var frm = $('#frmSell');
    var payType = $('[name="payment_type"]');

    if ($('#user_without').val() === '6') {
        if (!confirm('ê³ ê°ë‹˜ì€ í˜„ìž¬ íšŒì›íƒˆí‡´ ì‹ ì²­ ì§„í–‰ì¤‘ìž…ë‹ˆë‹¤.\nêµ¬ë§¤ ì‹ ì²­ ì§„í–‰ ì‹œ ì‹ ì²­í•˜ì‹  íšŒì›íƒˆí‡´ ì ‘ìˆ˜ê°€ ì² íšŒë©ë‹ˆë‹¤.\nê³„ì† ì§„í–‰ í•˜ì‹œê² ìŠµë‹ˆê¹Œ?')) {
            return;
        }
    }

    // ë§ˆì¼ë¦¬ì§€ ë³´ìœ ê¸ˆì•¡ ì²´í¬
    ajaxRequest({
        url: '/_include/_remocon_mileage.php',
        dataType: 'xml',
        type: 'post',
        data: 'req_type=trade',
        success: function(req) {
            var xmlObj = _xml.getElement(req, 'mileage', 0);
            if (!xmlObj) {
                document.location.reload();
            }

            var curMile = $('[name="cur_mileage"]');
            var securityType = $('#security_type').val();

            curMile.val(Number(xmlObj.getAttribute('use').toString()));

            if (securityType !== 'PASS' && payType.eq(0).prop('checked') === true) {
                var payMileage = $('#pay_mileage').text();
                payMileage = payMileage.replace(/[^0-9]/g, '');

                frm.off('submit');
                if (payType.eq(0).prop('checked') === true && Number(curMile.val()) < Number(payMileage)) {
                    frm.attr({
                        target: '_self',
                        action: 'application_ok.php?list=' + $('#inputList').val()
                    }).submit();
                } else {
                    var strUrl = '';
                    if (securityType === 'MYPIN') {
                        strUrl = SSL_DOMAIN + '/myroom/myinfo/my_pin_use.html';
                    } else {
                        strUrl = '/certify/payment/user_certify.html';
                    }

                    var pop = _window.open('pay', '', 600, 400, '', true);
                    frm.attr({
                        target: 'pay',
                        action: strUrl
                    }).submit();
                    $('#dvGoodsInfo').hide();
                    $('#g_SLEEP').show();

                    var interval = setInterval(function() {
                        if (pop.closed) {
                            $('#g_SLEEP').hide();
                            clearInterval(interval);
                        }
                    }, 500);
                }
            } else {
                frm.attr({
                    target: '_self',
                    action: 'application_ok.php'
                }).submit();
            }
        },
        error: function() {
            document.location.reload();
        }
    });
}

function newSetDeny(name) {
    if ($('#' + name + '_inptDeny').length > 0 && $('#' + name).length > 0) {
        return;
    }

    var check = $('#' + name + '_inptDeny').prop('checked', true);

    if ((check || check == 'checked') && $('#' + name)) {
        _cookie.add(name, 'deny', 1);
    } else {
        _cookie.remove(name);
    }
}

function fnInfoClose() {
    g_nodeSleep.disable();
}

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
