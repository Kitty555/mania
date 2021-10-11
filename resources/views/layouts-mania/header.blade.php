<div class="g_layer all_menu_layer" id="all_menu_layer">
    <div class="inner"> <a href="javascript:;" class="sp_icon close_r" id="menu_close">닫기</a> </div>
</div>
<div class="quickmenu_area" id="quickmenu_area">
    <div class="inner">
        <ul class="quickmenu close" id="quickmenu">
            <li><a href="javascript:;" data-type="user_info"><span class="sp_icon user_info"></span></a>
                <div><i>나의 거래정보</i></div>
            </li>
            <li><a href="javascript:;" data-type="pluszone"><span class="sp_icon pluszone"></span></a>
                <div><i>플러스존</i></div>
            </li>
            <li><a href="javascript:;" class="top_btn" id="top_btn">TOP</a></li>
        </ul>
        <div class="quickmenu_dtl" id="quickmenu_dtl"> <a href="javascript:;" class="sp_icon close" id="quickmenu_close">닫기</a>
            <div class="quickmenu_cont" id="quickmenu_cont"></div>
        </div>
    </div>
</div>
<!--▲▲▲ 거래 탑 배너 ▲▲▲ -->
<div class="g_header ">
    <div class="top_bg">
        <div class="g_snav">
            <ul class="snav_left">
                <li><a href="http://www.itemmania.com">아이템매니아 포탈</a></li>
                <li class="selected"><a href="http://trade.itemmania.com/index.html">아이템거래</a></li>
                <li class="shutcut" id="direct_icon"> 바로접속 <a href="http://trade.itemmania.com/event/event_ing/e190417_attend/" class="shortcut"><span class="sp_icon shortcut_on">바로접속</span></a>
                    <div class="direct_layer" id="direct_layer">
                        <div class="title">
                            <div class="title_txt t_on">현재 바로접속 ON상태입니다.</div>
                            <div class="close" id="direct_close">닫기</div>
                        </div>
                        <div class="info_content">
                            <div class="benefit_txt"> 바로가기 접속 고객님의 특별한 혜택
                                <br> 1. 매일매일 마일리지 지급
                                <br> - 지급된 마일리지 즉시 사용 가능
                                <br> 2. 출석일수에 따라 할인쿠폰 추가 지급
                                <br> - 지급된 할인쿠폰 즉시 사용 가능 </div>
                            <div class="how_title">바로가기로 방문하는 방법</div>
                            <ul class="direct_how">
                                <li class="direct_how1"> <a href="http://api.itemmania.liveicon.kr/GetSetupFile.api?PID=itemmania" target="_blank">바로가기 설치하기</a> </li>
                                <li class="direct_how2" id="g_STARTPAGE">시작페이지 설정하기</li>
                                <li class="direct_how3" id="g_FAVORITE">즐겨찾기 추가하기</li>
                                <li class="direct_how4"> <a href="http://www.itemmania.com" target="_blank">URL 직접 입력하기</a> </li>
                            </ul>
                            <div class="detail_go"> <a href="http://trade.itemmania.com/event/event_ing/e190417_attend/" target="_blank">혜택 상세보기 GO</a> </div>
                        </div>
                    </div>
                </li>
            </ul>
            <ul class="snav_right">
                <li><a href="http://trade.itemmania.com/customer/">고객센터</a></li>
                <li><a href="http://trade.itemmania.com/event/">이벤트</a></li>
                <li><a href="https://ssadaprice.itemmania.com/" target="_blank">싸다프라이스</a></li>
                <li><a href="http://trade.itemmania.com/myroom/pmall/">쇼핑포인트</a></li>
                <li><a href="http://trade.itemmania.com/portal/free_coupon/?game_genre=99">게임쿠폰</a></li>
                <li><a href="http://trade.itemmania.com/portal/pluszone/">플러스존</a></li>
                <li><a href="http://trade.itemmania.com/game_info/">게임정보</a></li>
                <li><a href="http://trade.itemmania.com/power/auction_ing.html">파워등록권 경매</a></li>
                <li><a href="http://trade.itemmania.com/portal/user/logout_ok.html">로그아웃</a></li>
            </ul>
        </div>
    </div>
    <div class="g_logo_area">
        <!--▼▼▼ 공통 로고 배너 ▼▼▼ -->
        <div class="logo">
            <a href="http://trade.itemmania.com"><img id="logo_img" src="http://img1.itemmania.com/new_images/common/top_logo.png?190219" width="221" height="140" alt="아이템매니아"></a>
        </div>
        <style>
            .g_header {
                background-image: url(http://img2.itemmania.com/new_images/banner_manager/20210914/20210914090916_mf6op.jpg);
                background-size: 2560px auto;
                background-position: center 30px;
                background-repeat: no-repeat;
            }

            .logo a img {
                display: none;
            }
        </style>
        <div class="g_search_top">
            <form id="g_searchbar_form" method="post" action="" onsubmit="return searchbarSubmit();">
                <input type="hidden" name="search_game" value="">
                <input type="hidden" name="search_game_text" value="">
                <input type="hidden" name="search_server" value="">
                <input type="hidden" name="search_server_text" value="">
                <input type="hidden" name="search_goods" value="">
                <div class="g_search_wrapper">
                    <div class="search_area">
                        <div class="g_trade_type">
                            <label class="radiocontainer f_blue1"> 팝니다
                                <input type="radio" name="search_type" value="sell" checked> <span class="checkmark"></span> </label>
                            <label class="radiocontainer f_green1"> 삽니다
                                <input type="radio" name="search_type" value="buy"> <span class="checkmark"></span> </label>
                        </div>
                        <input type="text" class="g_text search_gs_name" name="searchGameServer" id="searchGameServer" title="게임검색" style="ime-mode:active" placeholder="게임명 또는 서버명을 입력해주세요." autocomplete="off" data-gameserver="true"> </div>
                    <button type="submit" class="g_search_list" id="g_search_list" title="검색"> <span class="icon_search"></span> </button>
                    <div class="g_search_frame g_hidden">
                        <div class="initial_screen">
                            <div class="tab searchbar_tab">
                                <div class="active"> <a href="javascript:;" data-target="tab_lastsearch">최근검색게임</a> </div>
                                <div> <a href="javascript:;" data-target="tab_mygame">나만의 게임</a> </div>
                            </div>
                            <div class="tab_content">
                                <div class="tab_child show" data-content="tab_lastsearch">
                                    <ul class="last_search"></ul>
                                </div>
                                <div class="tab_child" data-content="tab_mygame">
                                    <ul class="g_my_search"></ul>
                                </div>
                            </div>
                            <div class="popular_game" data-popular="true">
                                <div class="popular_game_title">인기게임</div>
                                <ul class="popular_list">
                                    <li data-pgame="4714"> <em class="top_rank">1</em>디아블로2:레저렉션 </li>
                                    <li data-pgame="4696"> <em class="top_rank">2</em>오딘:발할라라이징 </li>
                                    <li data-pgame="2696"> <em class="top_rank">3</em>로스트아크 </li>
                                    <li data-pgame="138"> <em>4</em>메이플스토리 </li>
                                    <li data-pgame="281"> <em>5</em>던전앤파이터 </li>
                                    <li data-pgame="4685"> <em>6</em>블레이드앤소울2 </li>
                                    <li data-pgame="3449"> <em>7</em>리니지M </li>
                                    <li data-pgame="546"> <em>8</em>아이온 </li>
                                    <li data-pgame="4326"> <em>9</em>리니지2M </li>
                                    <li data-pgame="4322"> <em>10</em>바람의나라:연 </li>
                                </ul>
                            </div>
                        </div>
                        <div class="gs_list g_hidden" data-gslist="true"></div>
                    </div>
                </div>
            </form>
            <div class="admin_area">
                <ul class="keyword" id="keyword">
                    <li> <i></i> <a href="http://www.itemmania.com/counter/survey.php?imcounter=service_KEY_HOTGAME" target="_blank">HOT한 게임!</a> </li>
                    <li> <a href="http://trade.itemmania.com/myroom/mileage/change/culturecash/" target="_blank">#컬쳐캐쉬</a> </li>
                    <li> <a href="http://giftcard.itemmania.com/portal/giftcard/googlegift/" target="_blank">#구글카드</a> </li>
                    <li> <a href="https://ssadaprice.itemmania.com/goods/view?gcode=S2021030817134820179&amp;cgl=234&amp;cgm=&amp;cgs=" target="_blank">#스타벅스커피</a> </li>
                    <li> <a href="http://trade.itemmania.com/sell/list_search.html?search_game=4327&search_game_text=%EC%9B%94%EB%93%9C%EC%98%A4%EB%B8%8C%EC%9B%8C%ED%81%AC%EB%9E%98%ED%94%84%ED%8A%B8%3A%ED%81%B4%EB%9E%98%EC%8B%9D&search_server=16291&search_server_text=%EC%96%BC%EC%9D%8C%ED%94%BC%5B%ED%98%B8%EB%93%9C%5D-%EB%B6%88%EC%84%B1">#와우:클래식</a> </li>
                    <li> <i></i> <a href="http://trade.itemmania.com/sell/list_search.html?search_game=4714&search_game_text=%EB%94%94%EC%95%84%EB%B8%94%EB%A1%9C2%3A%EB%A0%88%EC%A0%80%EB%A0%89%EC%85%98&search_server=17860&search_server_text=%EA%B8%B0%ED%83%80">디아2:레저렉션</a> </li>
                    <li> <a href="http://trade.itemmania.com/sell/list_search.html?search_game=4685&search_game_text=%EB%B8%94%EB%A0%88%EC%9D%B4%EB%93%9C%EC%95%A4%EC%86%8C%EC%9A%B82&search_server=17787&search_server_text=-%EA%B2%BD%EA%B5%AD%EC%A7%80%EC%83%8901">#블레이드앤소울2</a> </li>
                </ul>
            </div>
        </div>
        <!--▲▲▲ 공통 로고 배너 ▲▲▲ -->
    </div>
    <div class="nav_wrap">
        <div class="content_center">
            <ul class="nav nav_highlight">
                <li class="highlight"><a href="http://trade.itemmania.com/sell/">판매등록</a></li>
                <li class="highlight"><a href="http://trade.itemmania.com/buy/">구매등록</a></li>
            </ul>
            <ul class="nav nav_ct">
                <li><a href="http://trade.itemmania.com/character/">캐릭터 거래<i class="icon_new"></i></a></li>
                <li><a href="http://trade.itemmania.com/myroom/">마이룸</a></li>
                <li><a href="http://giftcard.itemmania.com/portal/giftcard/">상품권몰</a></li>
                <li><a href="http://trade.itemmania.com/event/">이벤트</a></li>
                <!--                        <li><a href="-->
                <!--/customer/">고객센터</a></li>-->
                <li><a href="http://trade.itemmania.com/guide/">이용안내</a></li>
            </ul>
            <div class="right_icon">
                <a href="http://trade.itemmania.com/myroom/goods_alarm/alarm_sell_list.html" id="alarm_noti" class="user_noti"> <span class="sp_icon goods_alarm"></span> <span class="new_alarm">N</span> </a>
                <a href="http://trade.itemmania.com/myroom/message/" class="user_noti"> <span class="sp_icon bell"></span> <span class="icon_bubble">99+</span> </a>
                <a href="javascript:;" class="all_menu" id="all_menu"> <span class="sp_icon list"></span> </a>
            </div>
        </div>
    </div>
</div>
