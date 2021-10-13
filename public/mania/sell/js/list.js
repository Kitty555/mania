// ë¦¬ìŠ¤íŠ¸ ì´ˆê¸°ê°’
var nListPage = 1;
var searchList = {
    ajaxUrl: 'ajax_list.php',
    detailView: function(tid) {

        $('#kind').html('');
        $('#tid').html('');
        $('#money').html('');
        $('#credit_name').html('');
        $('#credit_point').html('');

        $('#cell_auth').removeClass("");
        $('#public_auth').removeClass("");
        $('#email_auth').removeClass("");
        $('#account_auth').removeClass("");

        ajaxRequest({
            url: "/_include/_list_search.ajax.php",
            dataType: "json",
            type: "POST",
            data: "trade_id=" + tid + "&strTradeType=sell",
            success: function(res) {
                if (res.bExists == false) {
                    alert('í•´ë‹¹ ë¬¼í’ˆì´ ìž¬ë“±ë¡ ë˜ê±°ë‚˜ ì‚­ì œë˜ì—ˆìŠµë‹ˆë‹¤.\n[í™•ì¸] ë²„íŠ¼ í´ë¦­ ì‹œ ë¬¼í’ˆë¦¬ìŠ¤íŠ¸ë¥¼ ë‹¤ì‹œ ë¶ˆëŸ¬ì˜µë‹ˆë‹¤.');
                    location.reload();
                    return;
                }

                $('#kind').html(res.trade_kind_txt);
                $("#tid").html('#' + tid);
                $('#money').html((res.trade_money).currency() + 'ì›');
                $('#credit_info').html('<span class="credit_mark _xsm ' + (res.credit_name_en) + '"></span> <span class="seller_rank ' + (res.credit_name_en) + '_txt">' + (res.credit_name) + 'íšŒì›</span>');
                $('#credit_point').html(res.credit_point + 'ì ');

                if (res.cell_auth === '1') {
                    $('#cell_auth').addClass('on');
                }
                if (res.public_auth === '1') {
                    $('#public_auth').addClass('on');
                }
                if (res.email_auth === '1') {
                    $('#email_auth').addClass('on');
                }
                if (res.account_auth === '1') {
                    $('#account_auth').addClass('on');
                }

                $('#appBtn').attr('href', 'application.html?id=' + tid + '&pinit=' + $('#pinit').val() + $('#continue').val());
                $('#detailBtn').attr('href', 'view.html?id=' + tid + '&pinit=' + $('#pinit').val() + $('#continue').val());

                $('.item_regInfo').addClass('layer_active');
            },
            error: function() {
                alert('ë¶ˆëŸ¬ì˜¤ì§€ ëª»í–ˆìŠµë‹ˆë‹¤.\në‹¤ì‹œ ì‹œë„í•´ ì£¼ì„¸ìš”.');
                $('.item_regInfo').removeClass('layer_active');
            }
        });
    },
    view: function(tid, state) {
        if (state !== 'a') {
            return;
        }
        location.href = 'view.html?id=' + tid + '&pinit=' + $('#pinit').val() + $('#continue').val();
    },
    application: function(tid) {
        location.href = 'application.html?id=' + tid + '&pinit=' + $('#pinit').val() + $('#continue').val();
    },
    formSubmit: function() {
        $('#frm_search').attr('action', '/sell/list.html');
        $('#frm_search').submit();
    },
    serverSearch: function(server, sever_name, kind) {
        $("#search_server").val(server);
        $("#search_server_text").val(sever_name);
        $("#search_goods").val(kind);

        $("#frm_search").attr('action', '/sell/list_search.html');
        $("#frm_search").submit();
    }
};

function elementFromListData(tradeItem, getPremium) {
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
    }
    var rgGameServer = tradeItem.gs_name.split('|');

    var listHtml = '<li ' + (tradeItem.trade_state == 'p' ? 'class="link_block"' : '') + '>' +
        '               <div class="col_01"><a href="javascript:searchList.serverSearch(\'' + tradeItem.server_code + '\', \'' + rgGameServer[1] + '\', \'' + tradeItem.trade_kind + '\')">' + rgGameServer[1] + '</a></div>';

    listHtml += '       <div class="col_02' + ((tradeItem.trade_state === 'a') ? " active" : "") + '">';
    listHtml += '	        <a href="' + ((tradeItem.user_seller === 'true') ? "/myroom/sell/sell_regist_view.html?id=" + tradeItem.trade_id : "javascript:searchList.view('" + tradeItem.trade_id + "','" + tradeItem.trade_state + "')") + '">';
    listHtml += '	            <div class="mulline">';
    if (tradeItem.ea_range !== '' && tradeItem.ea_range !== null) {
        listHtml += '   		    <span class="unit">[' + tradeItem.ea_range + ']</span><br />';
    }
    if (tradeItem.trade_category === '3') {
        listHtml += '               <span class="icon_bargain">í¥ì •</span>';
    }
    if(tradeItem.trade_kind == "6"){
        listHtml += '   		    <span class="unit">' + tradeItem.character_subject + '</span><br />';
    }
    if (tradeItem.trade_category === '3' && tradeItem.trade_kind != "6") {
        listHtml += '               <br>';
    }
    listHtml += '	    	        <span class="title' + (expression.blue ? ' title_blue' : '') + (expression.bold ? ' f_bold' : '') + '">' + tradeItem.trade_subject + '</span>' + (tradeItem.screenshot === 'Y' ? ' <span class="hasScreenshot"></span>' : '') +
        '	                    </div>';
    listHtml += '	        </a>';
    if(tradeItem.quickicon)
    {
        listHtml += '	        <div class="view_detail_quick '+(tradeItem.quickicon?'on':'')+'" trade-id="' + tradeItem.trade_id + '"></div>';
    }
    else
    {
        listHtml += '	        <div class="view_detail" trade-id="' + tradeItem.trade_id + '"></div>';
    }
    listHtml += '	        </div>' +
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
        '	                <i class="list_sprite icon_200' + (tradeItem.trade_class === '4' || tradeItem.trade_class === '5' ? ' active_icon' : '') + '">200%ë³´ìƒ</i>' +
        '	                <i class="list_sprite icon_200_buy' + (tradeItem.trade_class === '6' || tradeItem.trade_class === '7' ? ' active_icon' : '') + '">200%êµ¬ë§¤ë³´ìƒ</i>' +
        '	                <i class="list_sprite icon_dc' + (tradeItem.multidiscount_use === 'Y' ? ' active_icon' : '') + '">í• ì¸</i>' +
        '               </div>' +
        '               <div class="col_05">' + (tradeItem.trade_state == 'p' ? 'ê±°ëž˜ì¢…ë£Œ' : tradeItem.reg_date) + '</div>' +
        '           </li>';
    return listHtml;
}

function listOptionClick() {
    $('[name="goods_type"]').val($(this).attr("data-type"));
    searchList.formSubmit();
}

$(document).ready(function() {

    function listLoad(append) {
        append = append + "&pinit=" + nListPage;

        if (whileReloading) {
            return;
        }
        var searchListPremium = $('.search_list_premium');
        var searchListNormal = $('.search_list_normal');
        ajaxRequest({
            type: 'post',
            url: searchList.ajaxUrl,
            dataType:'json',
            data: append,
            beforeSend: function() {
                whileReloading = true;
            },
            success: function(res) {

                if (res.result === 'SUCCESS') {
                    $('.loading').addClass('g_hidden');
                    if (res.data.p && res.data.p.length > 0) {
                        searchListPremium.html((res.data.p).map(function(e) {
                            return elementFromListData(e);
                        }).filter(function(e) {
                            return e !== null;
                        }).join('\n'));
                    }

                    if (res.data.power && res.data.power.length > 0) {
                        searchListPremium.html((res.data.power).map(function(e) {
                            return elementFromListData(e);
                        }).filter(function(e) {
                            return e !== null;
                        }).join('\n') + searchListPremium.html());
                    }

                    if (res.data.p === undefined && res.data.power === undefined) {
                        searchListPremium.html('<li class="empty"><div>ê²€ìƒ‰ëœ ë¬¼í’ˆì´ ì—†ìŠµë‹ˆë‹¤.</div></li>');
                    }

                    if (res.data.g && res.data.g.length > 0) {
                        searchListNormal.html(searchListNormal.html() + (res.data.g).map(function(e) {
                            return elementFromListData(e);
                        }).filter(function(e) {
                            return e !== null;
                        }).join('\n'));

                    } else {
                        if (nListPage === 1) {
                            searchListNormal.html('<li class="empty"><div>ê²€ìƒ‰ëœ ë¬¼í’ˆì´ ì—†ìŠµë‹ˆë‹¤.</div></li>');
                        } else {
                            alert('ë§ˆì§€ë§‰ ë¬¼í’ˆìž…ë‹ˆë‹¤.');
                        }
                        $('.load_more').hide();
                    }

                    nListPage++;
                } else if(res.result === 'BLOCK') {
                    alert(res.message);
                    location.href = ROOT_DOMAIN;
                    return;
                } else if(res.message !== undefined) {
                    alert(res.message);
                    return;
                }
            },
            complete: function() {
                whileReloading = false;
            }
        });
    }

    var whileReloading = false;
    var frmSearch = $('#frm_search');
    var append = $('#frm_search').serialize();
    var $listInfo = $('#list_info');

    listLoad(append);

    $('.g_tab').children('[value]').on('click', function() {
        $("#search_goods").val($(this).attr("value"));
        $("#search_word").val('');
        $("#goods_type").attr('value', '');
        searchList.formSubmit();
    });

    var word = $("#word");
    $(".btn_search").on('click', function() {
        if (word.val().isEmpty()) {
            alert("ë¬¼í’ˆì œëª©ì„ ìž…ë ¥í•´ì£¼ì„¸ìš”.");
            return false;
        }
        if (word.val().trim().length < 2) {
            alert("2ê¸€ìž ì´ìƒ 5ê¸€ìž ì´í•˜ë§Œ ê²€ìƒ‰ì´ ê°€ëŠ¥í•©ë‹ˆë‹¤.");
            return false;
        }
        $("#search_word").val(word.val());
        searchList.formSubmit();
    });

    word.on('keyup', function(e) {
        if (_event.keycode(e) === 13) {
            $('.btn_search').click();
            return;
        }
    });

    $("#opt_list li").click(listOptionClick);

    /*  begin ë¬¼í’ˆì •ë³´ ì•ˆë‚´ */
    $listInfo.find('i.icon_info').on('click', function() {
        $listInfo.find('.info_layer').toggleClass('active');
    });

    $listInfo.find('.info_layer > .il_close').on('click', function() {
        $(this).parent().removeClass('active');
    });
    /*  end ë¬¼í’ˆì •ë³´ ì•ˆë‚´ */

    $('#item_regInfo').find('a.close_w').on('click', function() {
        //$('.search_list').find('.on').removeClass('on');
        $('#item_regInfo').removeClass('layer_active');
    });

    $('#detail_search div.toggleer').on('click', function() {
        $('#detail_search div.search_box').slideToggle();
        $(this).toggleClass('down');
    });

    /* begin ë¦¬ìŠ¤íŠ¸ ìƒˆë¡œê³ ì¹¨ */
    $('.icon_refresh').on('click', function() {
        $('.search_list_premium').html('');
        $('.search_list_normal').html('');
        $('.load_more').show();

        nListPage = 1;
        listLoad(append);
    });
    /* end ë¦¬ìŠ¤íŠ¸ ìƒˆë¡œê³ ì¹¨ */

    /* â–¼ ë¦¬ìŠ¤íŠ¸ ì¶”ê°€ ë¡œë“œ */
    $('.load_more').on('click', function() {
        var search_goods = $('#search_goods').val();
        if(search_goods != 'character') {
            if (nListPage == 11) {
                $('.search_list_premium').html('');
                $('.search_list_normal').html('');

                nListPage = 1;
            }
        }
        listLoad(append);
    });
    /* â–² ë¦¬ìŠ¤íŠ¸ ì¶”ê°€ ë¡œë“œ */

    $(document).on('click', '.search_list div.view_detail, .search_list div.view_detail_quick', function() {
        $(this).parents('li').addClass('on');
        searchList.detailView($(this).attr('trade-id'));
    });

    $("#goods input, #state input, #credit input, #etc input, #account_type input, #purchase_type input, #payment_existence input, #multi_access input").on('click', function() {
        searchList.formSubmit();
    });

    $("#overlap_tmp").on('click', function() {
        var val = (this.checked === true) ? 'on' : '';
        $('#overlap').val(val);
        searchList.formSubmit();
    });

    $(".search_reset").on('click', function() {
        frmSearch.find('[class="g_text"]').val('');
        frmSearch.find('[class="g_checkbox"]').prop('checked', false);
        frmSearch.find('ul li:first-child [type="radio"]').prop('checked', true);
        searchList.formSubmit();
    });

    $("#btn_game_money").click(function() {
        _window.open('game_money', '/game_info/money/index.html?win=pop&gamecode=' + $('#search_game').val() + '&servercode=' + $('#search_server').val(), 800, 900);
    });

    $('#alarm_float').click(function(){
        if(confirm("ë¬¼í’ˆë“±ë¡ì•Œë¦¬ë¯¸ íŽ˜ì´ì§€ë¡œ\nì´ë™í•˜ì‹œê² ìŠµë‹ˆê¹Œ?")) {
            location.href = '/myroom/goods_alarm/alarm_sell_list.html'
        }
    })
});
