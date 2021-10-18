@extends('layouts-mania.app')

@section('head_attach')
    <link type="text/css" rel="stylesheet" href="/mania/_css/_comm.min.css?v=210317">
    <link type="text/css" rel="stylesheet" href="/mania/_head_tail/css/_head_comm.css?v=211007">
    <link type="text/css" rel="stylesheet" href="/mania/_banner/css/banner_module.css?v=210422">
    <link type="text/css" rel="stylesheet" href="/mania/_banner/css/_banner.css?v=210107" />
    <link type="text/css" rel="stylesheet" href="/mania/buy/css/list_search.css?v=21051210" />
    <script type="text/javascript" src="/mania/advertise/advertise_code_head.js?v=200727"></script>
    <script type="text/javascript" src="/mania/_banner/js/banner_module.js?v=210209"></script>
@endsection

@section('foot_attach')
    <script type="text/javascript" src="/mania/_js/_jquery3.js?v=190220"></script>
    <script type="text/javascript" src="/mania/_js/_comm.js?v=21100516"></script>
    <script type="text/javascript" src="/mania/_js/_gs_control_200924.js?v=21100816"></script>
    <script type="text/javascript" src="/mania/_js/_common_initialize_new.js?v=21050316"></script>
    <script type="text/javascript" src="/mania/buy/js/list.js?21051210"></script>
    <script type="text/javascript" src="/mania/buy/js/list_search.js?v=210512"></script>
@endsection

@section('content')
<!--▼▼▼ 캐릭터 등롤 알리미 ▼▼▼ -->
<div class="g_container" id="g_CONTENT">
    <div id="TA0002_552" class="layer_module"><span class="layer_close_btn black"></span>
        <div class="layer_image_wrapper">
            <a href="http://www.itemmania.com/event/event_ing/game_invigoration_event/?event_id=e211008_diablo2" target="_blank"> <img src="http://img2.itemmania.com/new_images/banner_manager/20211007/20211007161324_LtCH0.png" alt=""> </a>
        </div>
        <div class="layer_module_check_wrapper">
            <input type="checkbox" id="TA0002_552_inptDeny" class="g_checkbox" ">
            <label for="TA0002_552_inptDeny ">오늘 열지 않음</label>
        </div>
    </div>
    <script>
        var module =  new Layer_module("TA0002_552 ");
        document.querySelector(".layer_close_btn ").onclick = function(){
            module.closeLayer();
        }
        document.querySelector("#TA0002_552_inptDeny ").onchange = function(){
            module.addCookie();
        }
    </script>    <!--▼▼▼ 리스트 게임 코드 배너 ▼▼▼ -->
    <div class="spacer_bottom_20 "></div>
    <!--▲▲▲ 리스트 게임 코드 배너 ▲▲▲ -->
    <a name="search_top "></a>
    <div class="g_title_green ">
        <div class="g_left ">
            <ul class="trade_sub_title ">
                <li>삽니다</li>
                <li class="game_name ">
                    <span>AOS레전드_기타</span>
                    <span id="favorite " class="favorite offfav "></span>
                </li>
                <li class="quotation " id="quotation ">
                    <span id="ag_quotation "></span>
                    <a href="javascript:_window.open( 'game_money', '/game_info/money/index.html?win=pop&gamecode=3492&servercode=13667', 800, 900); ">더보기 +</a>
                </li>
            </ul>
        </div>
        <div class="g_right ">
            <a href="/buy/?game=3492&server=13667 " class="btn_reg ">구매등록 +</a>
        </div>
    </div>
    <!-- ▼ 메뉴탭 //-->
    <div class="g_tab ">
        <div class=" " value="money ">게임머니</div>
        <div class=" " value="item ">아이템</div>
        <div class=" " value="character ">캐릭터<span class="icon_new "></span></div>
        <div class="selected " value="etc ">기타</div>
        <div class="side ">
            <ul class="search_word ">
                <li>
                    <input type="text " class="g_text " name="word " id="word " value=" " placeholder="물품제목 " maxlength="5 "/>
                </li>
                <li>
                    <span class="list_sprite btn_search ">검색</span>
                </li>
            </ul>
        </div>
    </div>
    <div class="g_finish "></div>
    <!-- ▲ 메뉴탭 //-->


    <!-- ▼ 팝니다 등록 검색 //-->
    <div id="detail_search " class="detail_search ">
        <form id="frm_search " name="frm_search " method="POST ">
            <input type="hidden " name="game_code " id="game_code " value="3492 "/>
            <input type="hidden " name="server_code " id="server_code " value="13667 "/>
            <input type="hidden " name="search_game " id="search_game " value="3492 "/>
            <input type="hidden " name="search_server " id="search_server " value="13667 "/>
            <input type="hidden " name="search_game_text " id="search_game_text " value="AOS레전드 "/>
            <input type="hidden " name="search_server_text " id="search_server_text " value="기타 "/>
            <input type="hidden " name="search_goods " id="search_goods " value="etc "/>
            <input type="hidden " name="search_word " id="search_word " value=" "/>
            <input type="hidden " name="search_type " id="search_type " value="buy "/>
            <input type="hidden " name="money_listOrder " id="money_listOrder " value=" ">
            <input type="hidden " name="good_listOrder " id="good_listOrder " value=" ">
            <input type="hidden " name="srch_item_depth1 " id="srch_item_depth1 " value=" ">
            <input type="hidden " name="srch_item_depth2 " id="srch_item_depth2 " value=" ">
            <input type="hidden " name="srch_item_depth3 " id="srch_item_depth3 " value=" ">
            <input type="hidden " name="srch_item_depth4 " id="srch_item_depth4 " value=" ">
            <input type="hidden " name="order " id="order " value="2 ">
            <input type="hidden " name="srch_char_alarm " id="srch_char_alarm " value=" ">

            <div class="search_box ">
                <div class="search_reset ">초기화</div>
                <div class="search_row ">
                    <div class="search_tit ">물품유형</div>
                    <ul id="goods ">
                        <li>
                            <label><input type="radio " name="goods_type " value="1 " class="g_btn_white2_radio " checked/>전체</label>
                        </li>
                        <li>
                            <label><input type="radio " name="goods_type " value="2 " class="g_btn_white2_radio " />일반</label>
                        </li>
                        <li>
                            <label><input type="radio " name="goods_type " value="3 " class="g_btn_white2_radio " />분할</label>
                        </li>
                    </ul>
                    <div class="search_tit ">거래상태</div>
                    <ul id="state ">
                        <li>
                            <label><input type="radio " name="trade_state " value="1 " class="g_btn_white2_radio " checked/>전체</label>
                        </li>
                        <li>
                            <label><input type="radio " name="trade_state " value="2 " class="g_btn_white2_radio " />거래대기</label>
                        </li>
                        <li>
                            <label><input type="radio " name="trade_state " value="3 " class="g_btn_white2_radio " />거래종료</label>
                        </li>
                    </ul>
                </div>
                <div class="search_row ">
                    <div class="search_tit ">신용등급</div>
                    <ul id="credit ">
                        <li>
                            <label><input type="radio " name="credit_type " value="1 " class="g_btn_white2_radio " checked/>전체</label>
                        </li>
                        <li>
                            <label><input type="radio " name="credit_type " value="2 " class="g_btn_white2_radio " />VIP 이상</label>
                        </li>
                        <li>
                            <label><input type="radio " name="credit_type " value="4 " class="g_btn_white2_radio " />플래티넘 이상</label>
                        </li>
                        <li>
                            <label><input type="radio " name="credit_type " value="5 " class="g_btn_white2_radio " />골드 이상</label>
                        </li>
                        <li>
                            <label><input type="radio " name="credit_type " value="6 " class="g_btn_white2_radio " />실버 이상</label>
                        </li>
                    </ul>
                    <div class="search_tit ">기타조건</div>
                    <ul id="etc ">
                        <li>
                            <label><input type="checkbox " name="direct " id="direct " class="g_checkbox " > 즉시구매 물품</label>
                        </li>
                        <li>
                            <label><input type="checkbox " name="excellent " id="excellent " class="g_checkbox " > 우수인증 물품</label>
                        </li>
                        <li>
                            <label><input type="checkbox " name="overlap " id="overlap " class="g_checkbox " > 중복물품제외</label>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="toggleer "></div>
        </form>
    </div>
    <!-- ▲ 팝니다 등록 검색 //-->
    <div class="g_subtitle ">
        <div class="g_left ">프리미엄</div>
        <div class="g_right ">
            <a href="javascript:_window.open( 'premium_guide', '/sell/premium_guide.html?t=buy',628, 630); " class="premium_info ">프리미엄 등록안내</a>
        </div>
    </div>
    <ul class="search_list search_list_premium "></ul>
    <div class="loading "></div>

    <div class="g_subtitle ">
        <div class="g_left ">물품리스트<a name="list_top "></a>
            <ul class="opt_list " id="opt_list ">
                <li data-type="2 " class="active ">최근등록순</li>
                <li data-type="1 ">최고가격순</li>
            </ul>
        </div>
        <div class="g_right list_info " id="list_info ">
            <div>물품정보안내</div>
            <i class="list_sprite icon_info "></i><i class="list_sprite icon_refresh "></i>
            <div class="info_layer ">
                <div class="il_title ">물품정보안내란?</div>
                <div class="list_sprite il_close "></div>
                <div class="il_row ">
                    <div class="il_btn "><i class="list_sprite il_btn_good "></i>우수인증</div>
                    휴대폰, 이메일, 출금계좌가 모두 인증된 회원
                </div>
                <div class="il_row il_row_s ">
                    <div class="il_btn "><i class="list_sprite il_btn_drt "></i>즉시구매</div>
                    입금대기 없이 바로 결제처리가 되는<br>
                    즉시구매가 가능한 물품
                </div>
            </div>
        </div>
    </div>
    <div class="g_finish "></div>
    <ul class="search_list list_head ">
        <li>
            <div class="col_01 ">등급</div>
            <div class="col_02 ">물품제목</div>
            <div class="col_03 ">구매금액</div>
            <div class="col_04 ">물품정보</div>
            <div class="col_05 ">등록시간</div>
        </li>
    </ul>
    <ul class="search_list search_list_normal "></ul>
    <div class="loading "></div>
    <div class="load_more ">+ 50개 더보기</div>

    <div class="g_layer green item_regInfo " id="item_regInfo ">
        <div class="inner ">
            <div class="title ">
                물품등록정보
                <a href="javascript:; " class="close_w "></a>
            </div>
            <div class="cont ">
                <div class="subtitle first ">물품 정보</div>
                <ul class="regInfo_subcontent ">
                    <li>
                        <div class="regInfo_subcontent_label ">물품종류</div>
                        <div class="regInfo_subcontent_in " id="kind "></div>
                    </li>
                    <li>
                        <div class="regInfo_subcontent_label ">거래번호</div>
                        <div class="regInfo_subcontent_in " id="tid "></div>
                    </li>
                    <li>
                        <div class="regInfo_subcontent_label ">구매금액</div>
                        <div class="regInfo_subcontent_in " id="money "></div>
                    </li>
                </ul>
                <div class="space "></div>
                <div class="subtitle ">구매자 정보</div>
                <ul class="regInfo_subcontent ">
                    <li>
                        <div class="regInfo_subcontent_label ">신용등급</div>
                        <div class="regInfo_subcontent_in " id="credit_info "></div>
                    </li>
                    <li>
                        <div class="regInfo_subcontent_label ">거래점수</div>
                        <div class="regInfo_subcontent_in " id="credit_point "></div>
                    </li>
                    <li>
                        <div class="regInfo_subcontent_label ">인증상태</div>
                        <div class="regInfo_subcontent_in ">
                            <span class="cert_state " id="cell_auth ">휴대폰</span>
                            <span class="cert_state " id="email_auth ">이메일</span>
                            <span class="cert_state " id="account_auth ">출금계좌</span>
                        </div>
                    </li>
                </ul>
                <div class="g_btn_wrap ">
                    <a href="# " class="regInfo_btn buyapp btn_green2 " id="appBtn ">판매신청</a>
                </div>
            </div>
        </div>
    </div>

    <div class="goTopDiv ">
        <a href="#search_top "><img src="http://img3.itemmania.com/images/btn/btn_top.gif " width="32 " height="14 " alt="top " class="btn_pointer "></a>
    </div>
    <div class="g_finish "></div>

    <form id="frm_view " name="frm_view " method="post ">
        <input type="hidden " name="continue " id="continue " value="&continue=YTozNzp7czo5OiJnYW1lX2NvZGUiO3M6NDoiMzQ5MiI7czoxMToic2VydmVyX2NvZGUiO3M6NToiMTM2NjciO3M6OToiZ2FtZV9uYW1lIjtzOjEyOiJBT1ProIjsoITrk5wiO3M6MTE6InNlcnZlcl9uYW1lIjtzOjY6Iuq4sO2DgCI7czoxMjoic2VhcmNoX2dvb2RzIjtzOjM6ImV0YyI7czoxMToic2VhcmNoX3dvcmQiO047czo0OiJ0eXBlIjtzOjM6ImJ1eSI7czoxMjoic2VhcmNoX29yZGVyIjtzOjE6IjIiO3M6MTQ6InNlYXJjaF9yZWZlcmVyIjtzOjE1OiJpbmRleF92aWV3Lmh0bWwiO3M6MTE6InRyYWRlX3N0YXRlIjtzOjE6IjEiO3M6ODoicmVnX3RpbWUiO3M6MToiMSI7czoxMToiY3JlZGl0X3R5cGUiO3M6MToiMSI7czoxMDoiZ29vZHNfdHlwZSI7czoxOiIxIjtzOjY6ImNvbXBlbiI7TjtzOjExOiJzZWxsX2NvbXBlbiI7TjtzOjc6ImRpc2NvbnQiO047czo3OiJvdmVybGFwIjtOO3M6OToiZXhjZWxsZW50IjtOO3M6NzoiYW1vdW50MSI7czoxOiIxIjtzOjc6ImFtb3VudDIiO3M6ODoiOTk5OTk5OTkiO3M6NzoiYW1vdW50MyI7czoxOiIxIjtzOjc6ImFtb3VudDQiO3M6ODoiOTk5OTk5OTkiO3M6MTI6InNlYXJjaF90eXBlMSI7TjtzOjEyOiJzZWFyY2hfdHlwZTIiO047czoxNToibW9uZXlfbGlzdF9yb3dzIjtOO3M6MTM6Imdlbl9saXN0X3Jvd3MiO047czoxNjoic3JjaF9pdGVtX2RlcHRoMSI7TjtzOjE2OiJzcmNoX2l0ZW1fZGVwdGgyIjtOO3M6MTY6InNyY2hfaXRlbV9kZXB0aDMiO047czoxNjoic3JjaF9pdGVtX2RlcHRoNCI7TjtzOjY6ImRpcmVjdCI7TjtzOjEyOiJhY2NvdW50X3R5cGUiO047czoxMzoicHVyY2hhc2VfdHlwZSI7TjtzOjE3OiJwYXltZW50X2V4aXN0ZW5jZSI7TjtzOjEyOiJtdWx0aV9hY2Nlc3MiO047czoxNToic3JjaF9jaGFyX2FsYXJtIjtOO3M6OToiYkxpbmVhZ2VNIjtiOjA7fQ==">
    </form>

    <div style=" margin-top:15px;text-align:center; "><iframe src="http://vod.shoppingcall.me/ad_shoppingCallme.php?aid=377 " frameborder="0 " marginheight="0 " marginwidth="0 " scrolling="no " width="1080 " height="80 "></iframe></div>    <!--▼▼▼ 리스트 하단 배너 ▼▼▼ -->
    <p class="spacer_bottom_20 "></p>
    <div class="banner_module ">
        <div class="banner_content_wrapper ">
            <div class="banner_content ">
                <a href="http://www.itemmania.com/portal/free_coupon/index.html " target=" ">
                    <img id="TF0004 " class="banner_content_images " src="http://img4.itemmania.com/new_images/banner_manager/20210312/20210312164421_TGK5l.jpg " alt="게임쿠폰 " title="게임쿠폰 ">
                </a></div>
        </div>
    </div>    <p class="spacer_bottom_20 "></p>
    <div class="banner_module ">
        <div class="banner_content_wrapper ">
            <div class="banner_content ">
                <a href="http://www.itemmania.com/counter/survey.php?imcounter=am_con_tslistlowdn_dwm&returnUrl=https://www.dongwonmall.com/display/plan.do?seq=00000103221&utm_source=itemmania&utm_medium=display&utm_campaign=" target=" _blank ">
                    <img id="TF0005 " class="banner_content_images " src="http://img1.itemmania.com/new_images/banner_manager/20210622/20210622163736_9K60c.jpg " alt="동원몰 " title="동원몰 ">
                </a></div>
        </div>
    </div>    <p class="spacer_bottom_20 "></p>
    <!--▲▲▲ 리스트 하단 배너 ▲▲▲ -->
    <div class="g_finish "></div>
</div>
<!-- ▲ 컨텐츠 영역 //-->
@endsection
