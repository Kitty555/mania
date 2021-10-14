searchList.ajaxUrl = 'ajax_list_search.php';
searchList.formSubmit = function() {
    $('#frm_search').attr('action', '/buy/list_search.html');
    $('#frm_search').submit();
};

function elementFromListData(tradeItem) {
    if (tradeItem == null) {
        return '';
    }

    var today = new Date();
    today.setHours(0, 0, 0, 0);

    var bluepen = tradeItem.blue_end_time.split(' ');
    var blueDate = bluepen[0].split('-');
    var boldpen = tradeItem.bold_end_time.split(' ');
    var boldDate = boldpen[0].split('-');
    var expression = {
        blue: (new Date(blueDate[1] + '/' + blueDate[2] + '/' + blueDate[0] + ' ' + bluepen[1]) > today),
        bold: (new Date(boldDate[1] + '/' + boldDate[2] + '/' + boldDate[0] + ' ' + boldpen[1]) > today)
    };

    var listHtml = '<li ' + (tradeItem.trade_state == 'p' ? 'class="link_block"' : '') + '>' +
        '               <div class="col_01"><span class="credit_mark ' + (tradeItem.credit_name_en) + '"></span></div>';

    listHtml += '       <div class="col_02' + ((tradeItem.trade_state === 'a') ? ' active' : '') + '">';
    listHtml += '	        <a href="' + ((tradeItem.user_buyer === 'true') ? '/myroom/buy/buy_regist_view.html?id=' + tradeItem.trade_id : 'javascript:searchList.application(\'' + tradeItem.trade_id + '\',\'' + tradeItem.trade_state + '\')') + '">';
    listHtml += '	            <div class="mulline">';
    if (tradeItem.ea_range !== '' && tradeItem.ea_range !== null) {
        listHtml += '   		    <span class="unit">[' + tradeItem.ea_range + ']</span><br />';
    }
    if (tradeItem.trade_kind == '6') {
        listHtml += '   		    <span class="unit">' + tradeItem.character_subject + '</span><br />';
    }
    listHtml += '	    	        <span class="title' + (expression.blue ? ' title_green' : '') + (expression.bold ? ' f_bold' : '') + '">' + tradeItem.trade_subject + '</span>' + (tradeItem.screenshot === 'Y' ? ' <span class="hasScreenshot"></span>' : '') +
        '	                    </div>';
    listHtml += '	        </a>';

    // í€µì•„ì´ì½˜ ë“±ë¡
    if (tradeItem.quickicon) {
        listHtml += '	        <div class="view_detail_quick" trade-id="' + tradeItem.trade_id + '"></div>';
    }

    listHtml += '	    </div>' +
        '               <div class="col_03">' +
        '	                <div class="mulline">';

    if (tradeItem.ea_trade_money !== '') {
        listHtml += '		    ' + tradeItem.ea_trade_money + '<br />';
    }

    listHtml += '   		    <span>' + (tradeItem.min_trade_money) + 'ì›</span>' +
        '	                </div>' +
        '               </div>' +
        '               <div class="col_04">' +
        '	                <i class="list_sprite icon_good' + (tradeItem.trade_show_time === 'Y' ? ' active_icon' : '') + '">ìš°ìˆ˜ì¸ì¦</i>' +
        '	                <i class="list_sprite icon_direct' + (tradeItem.trade_class === 'd' ? ' active_icon' : '') + '">ì¦‰ì‹œêµ¬ë§¤</i>' +
        '               </div>' +
        '               <div class="col_05">' + (tradeItem.trade_state == 'p' ? 'ê±°ëž˜ì¢…ë£Œ' : tradeItem.reg_date) + '</div>' +
        '           </li>';
    return listHtml;
}

function listOptionClick() {
    var order = $(this).attr('data-type');
    if (order == '1') {
        $('[name="trade_state"][value="2"]').prop('checked', true);
    } else {
        $('[name="trade_state"][value="1"]').prop('checked', true);
    }
    $('#order').val(order);
    searchList.formSubmit();
}

function fnajax_ag_quotation() {
    $.ajax({
        url: '/_xml/gamemoney_avg.xml.php',
        dataType: 'xml',
        type: 'GET',
        timeout: 3000,
        data: 'gamecode=' + $('#search_game').val() + '&servercode=' + $('#search_server').val() + '&count=2',
        success: function(xml) {
            if ($(xml).find('quotation').attr('result') !== 'fail') {

                $('#quotation').show();

                if ($(xml).find('data').attr('amount_type') == 'up') {
                    var font_color = 'f_red1';
                    var icon = 'â–²';
                } else if ($(xml).find('data').attr('amount_type') == 'down') {
                    var font_color = 'f_blue1';
                    var icon = 'â–¼';
                } else if ($(xml).find('data').attr('amount_type') == 'none') {
                    var font_color = 'black';
                    var icon = '-';
                }

                $('#ag_quotation').append('í‰ê· ì‹œì„¸ <span class=\'' + font_color + '\'>' + addComma($(xml).find('data').attr('price')) + '</span>ì› ( <span class=\'' + font_color + '\'>' + icon + ' ' + addComma($(xml).find('data').attr('amount')) + '</span> )');
                $('#ag_quotation').append('<span class=\'f_normal\'> (ì „ì¼ê¸°ì¤€/' + addComma($(xml).find('quotation').attr('multiple')) + ' ' + $(xml).find('quotation').attr('unit_trade') + 'ë‹¹)');
            }
        },
        error: function() {
            $('#quotation').hide();
        }
    });
}

function addComma(values) {
    var str_values = '' + values + '';
    var values = str_values.replace(/,/gi, '');
    var pattern = /(-?[0-9]+)([0-9]{3})/;
    while (pattern.test(values)) {
        values = values.replace(pattern, '$1,$2');
    }
    return values;
}

function mySearch_menu_check() {
    var game_code = $('#search_game').val();
    var server_code = $('#search_server').val();
    var goods = $('#search_goods').val();

    var goods_type = {
        all: 0,
        item: 1,
        money: 3,
        etc: 4
    };

    var rgData = {
        type: 'buy',
        game: game_code,
        server: server_code,
        goods: goods_type[goods]
    };

    ajaxRequest({
        url: '/myroom/customer/mySearchGame.php',
        type: 'POST',
        dataType: 'json',
        data: rgData,
        success: function(res) {
            if (res.result == 'SUCCESS') {
                if (res.status == 'on') {
                    $('#favorite').removeClass('offfav').addClass('onfav');
                } else if (res.status == 'off') {
                    $('#favorite').removeClass('onfav').addClass('offfav');
                }
            } else {
                alert(res.msg);
            }
        }
    });
}

$(document).ready(function() {

    //ë‚˜ë§Œì˜ ê²€ìƒ‰ë©”ë‰´ ë“±ë¡ ì²´í¬
    mySearch_menu_check();

    //ì‹œì„¸ì •ë³´
    fnajax_ag_quotation();

    /* â–¼ ë‚˜ë§Œì˜ ê²€ìƒ‰ë©”ë‰´ ì¶”ê°€ */
    $('#favorite').on('click', function() {
        var game_code = $('#search_game').val();
        var game_code_text = $('#search_game_text').val();
        var server_code = $('#search_server').val();
        var server_code_text = $('#search_server_text').val();
        var goods = $('#search_goods').val();

        var e_goods_text = {
            all: 'ë¬¼í’ˆì „ì²´',
            item: 'ì•„ì´í…œ',
            money: 'ê²Œìž„ë¨¸ë‹ˆ',
            character: 'ìºë¦­í„°',
            etc: 'ê¸°íƒ€'
        };

        var goods_type = {
            all: 0,
            item: 1,
            money: 3,
            etc: 4
        };

        var rgData = {
            type: 'buy',
            game: game_code,
            game_text: game_code_text,
            server: server_code,
            server_text: server_code_text,
            goods: goods_type[goods],
            goods_text: e_goods_text[goods]
        };

        ajaxRequest({
            url: '/myroom/customer/search_add.php',
            type: 'POST',
            dataType: 'json',
            data: rgData,
            success: function(res) {
                if (res.result == 'SUCCESS') {
                    alert('ë‚˜ë§Œì˜ ê²Œìž„ ë©”ë‰´ì— í•´ë‹¹ ê²Œìž„ì´ ì¶”ê°€ë˜ì—ˆìŠµë‹ˆë‹¤.');
                    $('#favorite').removeClass('offfav').addClass('onfav');
                } else {
                    alert(res.msg);
                }
            }
        });
    });
    /* â–² ë‚˜ë§Œì˜ ê²€ìƒ‰ë©”ë‰´ ì¶”ê°€ */
});
