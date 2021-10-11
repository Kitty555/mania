@extends('layouts-mania.app')
@section('content')
    <!--▼▼▼ 캐릭터 등롤 알리미 ▼▼▼ -->
    <input type="hidden" name="new_except" value="">
    <div class="g_layer service_layer" id="service_layer">
        <div class="inner"> <a href="javascript:;" class="close" id="service_close">닫기</a>
            <div class="title"> 나만의 서비스 설정 <span>빠른 메뉴 설정을 위해 아이콘 8개를 선택하신 후 저장 버튼을 클릭하세요.</span>
                <div class="r_area"> <a href="javascript:;" class="btn_white2 save" id="service_save">저장</a> <a href="javascript:;" class="btn_white2 init" id="service_init">초기화</a> </div>
            </div>
            <ul class="service_list" id="service_list">
                <li class="service_list_btn">
                    <label>
                        <input type="checkbox" class="cs_checkbox" name="service[]" value="1"> <span class="tmp_checkbox"></span> <span class="SpGroup mileage"></span> 내 마일리지 </label>
                </li>
                <li class="service_list_btn on">
                    <label>
                        <input type="checkbox" class="cs_checkbox" name="service[]" value="2" checked> <span class="tmp_checkbox"></span> <span class="SpGroup counsel"></span> 상담내역보기 </label>
                </li>
                <li class="service_list_btn on">
                    <label>
                        <input type="checkbox" class="cs_checkbox" name="service[]" value="3" checked> <span class="tmp_checkbox"></span> <span class="SpGroup sell"></span> 판매관련물품 </label>
                </li>
                <li class="service_list_btn on">
                    <label>
                        <input type="checkbox" class="cs_checkbox" name="service[]" value="4" checked> <span class="tmp_checkbox"></span> <span class="SpGroup buy"></span> 구매관련물품 </label>
                </li>
                <li class="service_list_btn">
                    <label>
                        <input type="checkbox" class="cs_checkbox" name="service[]" value="5"> <span class="tmp_checkbox"></span> <span class="SpGroup payment"></span> 마일리지출금 </label>
                </li>
                <li class="service_list_btn">
                    <label>
                        <input type="checkbox" class="cs_checkbox" name="service[]" value="6"> <span class="tmp_checkbox"></span> <span class="SpGroup calc"></span> 수수료 </label>
                </li>
                <li class="service_list_btn">
                    <label>
                        <input type="checkbox" class="cs_checkbox" name="service[]" value="7"> <span class="tmp_checkbox"></span> <span class="SpGroup charge"></span> 마일리지충전 </label>
                </li>
                <li class="service_list_btn">
                    <label>
                        <input type="checkbox" class="cs_checkbox" name="service[]" value="8"> <span class="tmp_checkbox"></span> <span class="SpGroup pointmall"></span> 쇼핑포인트 </label>
                </li>
                <li class="service_list_btn on">
                    <label>
                        <input type="checkbox" class="cs_checkbox" name="service[]" value="9" checked> <span class="tmp_checkbox"></span> <span class="SpGroup credit_rating"></span> 신용등급/수수료 </label>
                </li>
                <li class="service_list_btn on">
                    <label>
                        <input type="checkbox" class="cs_checkbox" name="service[]" value="10" checked> <span class="tmp_checkbox"></span> <span class="SpGroup guide"></span> 초보자가이드 </label>
                </li>
                <li class="service_list_btn on">
                    <label>
                        <input type="checkbox" class="cs_checkbox" name="service[]" value="11" checked> <span class="tmp_checkbox"></span> <span class="SpGroup coupon"></span> 할인쿠폰현황 </label>
                </li>
                <li class="service_list_btn on">
                    <label>
                        <input type="checkbox" class="cs_checkbox" name="service[]" value="12" checked> <span class="tmp_checkbox"></span> <span class="SpGroup faq"></span> FAQ </label>
                </li>
                <li class="service_list_btn on">
                    <label>
                        <input type="checkbox" class="cs_checkbox" name="service[]" value="13" checked> <span class="tmp_checkbox"></span> <span class="SpGroup message"></span> 메시지함 </label>
                </li>
                <li class="service_list_btn">
                    <label>
                        <input type="checkbox" class="cs_checkbox" name="service[]" value="14"> <span class="tmp_checkbox"></span> <span class="SpGroup chat"></span> 실시간채팅상담 </label>
                </li>
            </ul>
        </div>
    </div>
    <div class="top_full">
        <div class="top_area">
            <!--▼▼▼ 거래 중앙 롤링 배너 ▼▼▼ -->
            <div class="carousel_module" data-code="TR0001">
                <div class="banner_in center_banner" id="center_banner">
                    <div class="banner_item" data-idx="0">
                        <a href="http://www.itemmania.com/counter/survey.php?imcounter=banner_tradebn_tmcrol_newattend&returnUrl=http://www.itemmania.com/event/event_ing/e190417_attend" target="_blank"> <img class="carousel_images" src="http://img1.itemmania.com/new_images/banner_manager/20210831/20210831164401_abT3D.jpg" alt="출석이벤트(가을)" title="출석이벤트(가을)"> </a>
                    </div>
                    <div class="banner_item" data-idx="1">
                        <a href="http://www.itemmania.com/counter/survey.php?imcounter=banner_tradebn_tmcrol_firstbuy&returnUrl=http://www.itemmania.com/event/event_ing/e200604_join_firstbuy/" target="_blank"> <img class="carousel_images" src="http://img4.itemmania.com/new_images/banner_manager/20210113/20210113161849_vfrh9.jpg" alt="첫구매이벤트" title="첫구매이벤트"> </a>
                    </div>
                    <div class="banner_item" data-idx="2">
                        <a href="http://www.itemmania.com/event/event_ing/game_invigoration_event/?event_id=e211008_diablo2" target="_blank"> <img class="carousel_images" src="http://img3.itemmania.com/new_images/banner_manager/20211007/20211007161347_01MgL.jpg" alt="디아2레저렉션 활성화 이벤트" title="디아2레저렉션 활성화 이벤트"> </a>
                    </div>
                    <div class="banner_item" data-idx="3">
                        <a href="http://www.itemmania.com/event/event_ing/reserve_event/?event_id=e211008_linW" target="_blank"> <img class="carousel_images" src="http://img4.itemmania.com/new_images/banner_manager/20211007/20211007161455_bLiBq.jpg" alt="리니지w 사전예약 이벤트" title="리니지w 사전예약 이벤트"> </a>
                    </div>
                </div>
                <div class='banner_indicate indicate'></div>
            </div>
            <script>
                var selector = document.querySelector(".carousel_module")
                new Carousel(selector, {
                    "showNavi": false,
                    "showIndicate": true,
                    "delay": 3000,
                    "random": true
                });
            </script>
            <!--▲▲▲ 거래 중앙 롤링 배너 ▲▲▲ -->
            <div class="service_wrap">
                <div class="service_set"> <a href="javascript:;" id="service_btn"><i class="sp_icon setting">설정</i></a>
                    <ul>
                        <a href="/customer/myqna/list.html" target="_self">
                            <li><span class="SpGroup counsel"></span>
                                <br>상담내역보기 </li>
                        </a>
                        <a href="/myroom/sell/sell_regist.html?strRelationType=regist" target="_self">
                            <li><span class="SpGroup sell"></span>
                                <br>판매관련물품 </li>
                        </a>
                        <a href="/myroom/buy/buy_regist.html?strRelationType=regist" target="_self">
                            <li><span class="SpGroup buy"></span>
                                <br>구매관련물품 </li>
                        </a>
                        <a href="/myroom/myinfo/credit_rating.html" target="_self">
                            <li><span class="SpGroup credit_rating"></span>
                                <br>신용등급/수수료 </li>
                        </a>
                        <a href="/guide/frshmn_guide/howto.html" target="_self">
                            <li><span class="SpGroup guide"></span>
                                <br>초보자가이드 </li>
                        </a>
                        <a href="/myroom/coupon/" target="_self">
                            <li><span class="SpGroup coupon"></span>
                                <br>할인쿠폰현황 </li>
                        </a>
                        <a href="/customer/faq/index.html" target="_self">
                            <li><span class="SpGroup faq"></span>
                                <br>FAQ </li>
                        </a>
                        <a href="/myroom/message/" target="_self">
                            <li><span class="SpGroup message"></span>
                                <br>메시지함 </li>
                        </a>
                    </ul>
                </div>
                <div class="bg_opacity"></div>
            </div>
        </div>
    </div>
    <div class="content_center">
        <div class="power_wrap">
            <div class="power_title"> <span class="power">파워물품 ZONE</span> <a href="/power/auction_ing.html" class="more2">파워등록권 경매신청 ></a> </div>
            <ul class="list" id="power_list">
                <li class="color1 ">
                    <a href="/sell/view.html?id=2021100812271890"> <em class="label"></em> <span class="game">디아블로2:레저렉션</span> <span class="sise">1개당 1,000원</span> <span class="server">기타</span> </a>
                </li>
                <li class="color2 ">
                    <a href="/sell/view.html?id=2021100812270343"> <em class="label"></em> <span class="game">디아블로2:레저렉션</span> <span class="sise">1개당 1,000원</span> <span class="server">노말</span> </a>
                </li>
                <li class="color3 ">
                    <a href="/sell/view.html?id=2021100812433102"> <em class="label"></em> <span class="game">로스트아크</span> <span class="sise">1,000당 1,390원</span> <span class="server">루페온</span> </a>
                </li>
                <li class="color4 ">
                    <a href="/sell/view.html?id=2021100812433402"> <em class="label"></em> <span class="game">로스트아크</span> <span class="sise">1,000당 1,390원</span> <span class="server">카제로스</span> </a>
                </li>
                <li class="color5 ">
                    <a href="/sell/view.html?id=2021100812433688"> <em class="label"></em> <span class="game">로스트아크</span> <span class="sise">1,000당 1,390원</span> <span class="server">아브렐슈드</span> </a>
                </li>
                <li class="color6 ">
                    <a href="/sell/view.html?id=2021100812434002"> <em class="label"></em> <span class="game">로스트아크</span> <span class="sise">1,000당 1,290원</span> <span class="server">실리안</span> </a>
                </li>
                <li class="color1 ">
                    <a href="/sell/view.html?id=2021100812470636"> <em class="label"></em> <span class="game">로스트아크</span> <span class="sise">1,000당 1,390원</span> <span class="server">아만</span> </a>
                </li>
                <li class="color2 ">
                    <a href="/sell/view.html?id=2021100812470919"> <em class="label"></em> <span class="game">로스트아크</span> <span class="sise">1,000당 1,290원</span> <span class="server">카마인</span> </a>
                </li>
                <li class="color3 ">
                    <a href="/sell/view.html?id=2021100812471191"> <em class="label"></em> <span class="game">로스트아크</span> <span class="sise">1,000당 1,390원</span> <span class="server">카단</span> </a>
                </li>
                <li class="color4 ">
                    <a href="/sell/view.html?id=2021100812471505"> <em class="label"></em> <span class="game">로스트아크</span> <span class="sise">1,000당 1,390원</span> <span class="server">니나브</span> </a>
                </li>
                <li class="color5 ">
                    <a href="/sell/view.html?id=2021100812418279"> <em class="label"></em> <span class="game">월드오브워크래프트:클래식</span> <span class="sise">100당 630원</span> <span class="server">로크홀라[호드]-불성</span> </a>
                </li>
                <li class="color6 ">
                    <a href="/sell/view.html?id=2021100812418660"> <em class="label"></em> <span class="game">월드오브워크래프트:클래식</span> <span class="sise">100당 730원</span> <span class="server">로크홀라[얼라]-불성</span> </a>
                </li>
                <li class="color1  g_hidden">
                    <a href="/sell/view.html?id=2021100812425626"> <em class="label"></em> <span class="game">메이플스토리</span> <span class="sise">1억당 2,990원</span> <span class="server">루나</span> </a>
                </li>
                <li class="color2  g_hidden">
                    <a href="/sell/view.html?id=2021100812423294"> <em class="label"></em> <span class="game">메이플스토리</span> <span class="sise">1억당 3,170원</span> <span class="server">스카니아</span> </a>
                </li>
                <li class="color3  g_hidden">
                    <a href="/sell/view.html?id=2021100812425314"> <em class="label"></em> <span class="game">메이플스토리</span> <span class="sise">1억당 2,990원</span> <span class="server">엘리시움</span> </a>
                </li>
                <li class="color4  g_hidden">
                    <a href="/sell/view.html?id=2021100812421667"> <em class="label"></em> <span class="game">바람의나라</span> <span class="sise">100만당 1,010원</span> <span class="server">연</span> </a>
                </li>
                <li class="color5  g_hidden">
                    <a href="/sell/view.html?id=2021100810597610"> <em class="label"></em> <span class="game">메이플스토리</span> <span class="sise">1억당 3,150원</span> <span class="server">오로라</span> </a>
                </li>
                <li class="color6  g_hidden">
                    <a href="/sell/view.html?id=2021100807242017"> <em class="label"></em> <span class="game">서든어택</span> <span class="sise">1,000당 2,280원</span> <span class="server">기타</span> </a>
                </li>
                <li class="color1  g_hidden">
                    <a href="/sell/view.html?id=2021100810969304"> <em class="label"></em> <span class="game">마비노기</span> <span class="sise">100만당 1,050원</span> <span class="server">류트</span> </a>
                </li>
                <li class="color2  g_hidden">
                    <a href="/sell/view.html?id=2021100812425001"> <em class="label"></em> <span class="game">메이플스토리</span> <span class="sise">1억당 3,490원</span> <span class="server">RED</span> </a>
                </li>
                <li class="color3  g_hidden">
                    <a href="/sell/view.html?id=2021100812424297"> <em class="label"></em> <span class="game">메이플스토리</span> <span class="sise">1억당 3,390원</span> <span class="server">유니온</span> </a>
                </li>
                <li class="color4  g_hidden">
                    <a href="/sell/view.html?id=2021100812424615"> <em class="label"></em> <span class="game">메이플스토리</span> <span class="sise">1억당 3,390원</span> <span class="server">이노시스</span> </a>
                </li>
                <li class="color5  g_hidden">
                    <a href="/sell/view.html?id=2021100812423914"> <em class="label"></em> <span class="game">메이플스토리</span> <span class="sise">1억당 2,720원</span> <span class="server">크로아</span> </a>
                </li>
                <li class="color6  g_hidden">
                    <a href="/sell/view.html?id=2021100812423608"> <em class="label"></em> <span class="game">메이플스토리</span> <span class="sise">1억당 3,240원</span> <span class="server">제니스</span> </a>
                </li>
                <li class="color1  g_hidden">
                    <a href="/sell/view.html?id=2021100812422960"> <em class="label"></em> <span class="game">메이플스토리</span> <span class="sise">1억당 2,890원</span> <span class="server">베라</span> </a>
                </li>
                <li class="color2  g_hidden">
                    <a href="/sell/view.html?id=2021100811336012"> <em class="label"></em> <span class="game">아이온</span> <span class="sise">100만당 1,090원</span> <span class="server">클래식-유스티엘(마족)</span> </a>
                </li>
                <li class="color3  g_hidden">
                    <a href="/sell/view.html?id=2021100812436634"> <em class="label"></em> <span class="game">마비노기영웅전</span> <span class="sise">100만당 1,120원</span> <span class="server">프리미어</span> </a>
                </li>
                <li class="color4  g_hidden">
                    <a href="/sell/view.html?id=2021100812427464"> <em class="label"></em> <span class="game">패스오브엑자일</span> <span class="sise">10당 1,500원</span> <span class="server">스탠다드</span> </a>
                </li>
                <li class="color5  g_hidden">
                    <a href="/sell/view.html?id=2021100809243731"> <em class="label"></em> <span class="game">아이온</span> <span class="sise">100만당 1,110원</span> <span class="server">클래식-유스티엘(천족)</span> </a>
                </li>
                <li class="color6  g_hidden">
                    <a href="/sell/view.html?id=2021100810265532"> <em class="label"></em> <span class="game">디아블로2:레저렉션</span> <span class="sise">1개당 5,000원</span> <span class="server">하드코어</span> </a>
                </li>
                <li class="color1  g_hidden">
                    <a href="/sell/view.html?id=2021100812448544"> <em class="label"></em> <span class="game">아이온</span> <span class="sise">1,000만당 1,380원</span> <span class="server">클래식-루미엘(마족)</span> </a>
                </li>
                <li class="color2  g_hidden">
                    <a href="/sell/view.html?id=2021100812427820"> <em class="label"></em> <span class="game">패스오브엑자일</span> <span class="sise">10당 2,000원</span> <span class="server">4개월리그</span> </a>
                </li>
                <li class="color3  g_hidden">
                    <a href="/sell/view.html?id=2021100812419694"> <em class="label"></em> <span class="game">월드오브워크래프트:클래식</span> <span class="sise">100당 760원</span> <span class="server">얼음피[호드]-불성</span> </a>
                </li>
                <li class="color4  g_hidden">
                    <a href="/sell/view.html?id=2021100812420708"> <em class="label"></em> <span class="game">월드오브워크래프트:클래식</span> <span class="sise">100당 710원</span> <span class="server">얼음피[얼라]-불성</span> </a>
                </li>
                <li class="color5  g_hidden">
                    <a href="/sell/view.html?id=2021100812421049"> <em class="label"></em> <span class="game">월드오브워크래프트:클래식</span> <span class="sise">100당 630원</span> <span class="server">라그나로스[얼라]-불성</span> </a>
                </li>
                <li class="color6  g_hidden">
                    <a href="/sell/view.html?id=2021100812429495"> <em class="label"></em> <span class="game">월드오브워크래프트</span> <span class="sise">1만당 650원</span> <span class="server">아즈샤라[호드]전쟁</span> </a>
                </li>
                <li class="color1  g_hidden">
                    <a href="/sell/view.html?id=2021100808529255"> <em class="label"></em> <span class="game">아이온</span> <span class="sise">1,000만당 1,730원</span> <span class="server">클래식-이스라펠(천족)</span> </a>
                </li>
                <li class="color2  g_hidden">
                    <a href="/sell/view.html?id=2021100811678507"> <em class="label"></em> <span class="game">마비노기</span> <span class="sise">100만당 1,050원</span> <span class="server">만돌린</span> </a>
                </li>
                <li class="color3  g_hidden">
                    <a href="/sell/view.html?id=2021100812453911"> <em class="label"></em> <span class="game">마비노기</span> <span class="sise">100만당 1,060원</span> <span class="server">하프</span> </a>
                </li>
                <li class="color4  g_hidden">
                    <a href="/sell/view.html?id=2021100812169076"> <em class="label"></em> <span class="game">던전앤파이터</span> <span class="sise">100만당 1,020원</span> <span class="server">카인</span> </a>
                </li>
                <li class="color5  g_hidden">
                    <a href="/sell/view.html?id=2021100812208272"> <em class="label"></em> <span class="game">던전앤파이터</span> <span class="sise">100만당 1,020원</span> <span class="server">디레지에</span> </a>
                </li>
                <li class="color6  g_hidden">
                    <a href="/sell/view.html?id=2021100812246200"> <em class="label"></em> <span class="game">던전앤파이터</span> <span class="sise">100만당 1,020원</span> <span class="server">시로코</span> </a>
                </li>
                <li class="color1  g_hidden">
                    <a href="/sell/view.html?id=2021100812284848"> <em class="label"></em> <span class="game">던전앤파이터</span> <span class="sise">100만당 1,020원</span> <span class="server">프레이</span> </a>
                </li>
                <li class="color2  g_hidden">
                    <a href="/sell/view.html?id=2021100812320155"> <em class="label"></em> <span class="game">던전앤파이터</span> <span class="sise">100만당 1,020원</span> <span class="server">카시야스</span> </a>
                </li>
                <li class="color3  g_hidden">
                    <a href="/sell/view.html?id=2021100812357583"> <em class="label"></em> <span class="game">던전앤파이터</span> <span class="sise">100만당 1,020원</span> <span class="server">힐더</span> </a>
                </li>
                <li class="color4  g_hidden">
                    <a href="/sell/view.html?id=2021100812393900"> <em class="label"></em> <span class="game">던전앤파이터</span> <span class="sise">100만당 1,020원</span> <span class="server">안톤</span> </a>
                </li>
                <li class="color5  g_hidden">
                    <a href="/sell/view.html?id=2021100812431600"> <em class="label"></em> <span class="game">던전앤파이터</span> <span class="sise">100만당 1,020원</span> <span class="server">바칼</span> </a>
                </li>
                <li class="color6  g_hidden">
                    <a href="/sell/view.html?id=2021100812466454"> <em class="label"></em> <span class="game">던전앤파이터</span> <span class="sise">100만당 1,020원</span> <span class="server">통합서버</span> </a>
                </li>
                <li class="color1  g_hidden">
                    <a href="/sell/view.html?id=2021100811321359"> <em class="label"></em> <span class="game">아이온</span> <span class="sise">1,000만당 1,230원</span> <span class="server">클래식-루미엘(천족)</span> </a>
                </li>
                <li class="color2  g_hidden">
                    <a href="/sell/view.html?id=2021100809881194"> <em class="label"></em> <span class="game">아이온</span> <span class="sise">1,000만당 1,490원</span> <span class="server">클래식-이스라펠(마족)</span> </a>
                </li>
                <li class="color3  g_hidden">
                    <a href="/sell/view.html?id=2021100809888239"> <em class="label"></em> <span class="game">아이온</span> <span class="sise">1,000만당 1,720원</span> <span class="server">클래식-네자칸(천족)</span> </a>
                </li>
                <li class="color4  g_hidden">
                    <a href="/sell/view.html?id=2021100809892371"> <em class="label"></em> <span class="game">아이온</span> <span class="sise">1,000만당 1,740원</span> <span class="server">클래식-네자칸(마족)</span> </a>
                </li>
                <li class="color5  g_hidden">
                    <a href="/sell/view.html?id=2021100809898227"> <em class="label"></em> <span class="game">아이온</span> <span class="sise">1,000만당 1,710원</span> <span class="server">클래식-지켈(천족)</span> </a>
                </li>
                <li class="color6  g_hidden">
                    <a href="/sell/view.html?id=2021100809907488"> <em class="label"></em> <span class="game">아이온</span> <span class="sise">1,000만당 1,560원</span> <span class="server">클래식-지켈(마족)</span> </a>
                </li>
                <li class="color1  g_hidden">
                    <a href="/sell/view.html?id=2021100809910830"> <em class="label"></em> <span class="game">아이온</span> <span class="sise">1,000만당 1,520원</span> <span class="server">클래식-바이젤(천족)</span> </a>
                </li>
                <li class="color2  g_hidden">
                    <a href="/sell/view.html?id=2021100808512438"> <em class="label"></em> <span class="game">아이온</span> <span class="sise">1,000만당 1,580원</span> <span class="server">클래식-바이젤(마족)</span> </a>
                </li>
                <li class="color3  g_hidden">
                    <a href="/sell/view.html?id=2021100800128065"> <em class="label"></em> <span class="game">아이온</span> <span class="sise">1,000만당 1,500원</span> <span class="server">클래식-트리니엘(마족)</span> </a>
                </li>
                <li class="color4  g_hidden">
                    <a href="/sell/view.html?id=2021100811095576"> <em class="label"></em> <span class="game">아이온</span> <span class="sise">1,000만당 1,520원</span> <span class="server">클래식-트리니엘(천족)</span> </a>
                </li>
                <li class="color5  g_hidden">
                    <a href="/sell/view.html?id=2021100802537244"> <em class="label"></em> <span class="game">아이온</span> <span class="sise">1,000만당 1,310원</span> <span class="server">클래식-카이시넬(천족)</span> </a>
                </li>
                <li class="color6  g_hidden">
                    <a href="/sell/view.html?id=2021100811313908"> <em class="label"></em> <span class="game">아이온</span> <span class="sise">1,000만당 1,500원</span> <span class="server">클래식-카이시넬(마족)</span> </a>
                </li>
            </ul>
            <div id="power_indicate" class="indicate"> <span class="on"></span><span></span><span></span><span></span><span></span> </div>
        </div>
        <div class="g_finish"></div>
        <!--▼▼▼ 거래 메인 랜덤 up 980x80 ▼▼▼ -->
        <div class="banner_module">
            <div class="banner_content_wrapper">
                <div class="banner_content">
                    <a href="http://www.itemmania.com/portal/free_coupon/index.html" target=""> <img id="TF0001" class="banner_content_images" src="http://img1.itemmania.com/new_images/banner_manager/20210312/20210312164330_r283Z.jpg" alt="게임쿠폰" title="게임쿠폰"> </a>
                </div>
            </div>
        </div>
        <p class="spacer_bottom_10"></p>
        <!--▲▲▲ 거래 메인 랜덤 up 980x80 ▲▲▲ -->
        <div class="sec_left">
            <div class="title">게임별 시세정보 <a href="javascript:_window.open('game_money', '/game_info/money/index.html?win=pop', 800, 900);"><i
                        class="sp_icon plus_icon">더보기</i></a> </div>
            <div id="gameChart"></div>
        </div>
        <div class="sec_right">
            <div class="title"> 마일리지 충전
                <div class="move_btn" id="chargeBtn"> <a href="javascript:;" data-type="p"><i class="sp_icon btn_prev">이전</i></a> <a href="javascript:;" data-type="n"><i class="sp_icon btn_next">다음</i></a> </div>
            </div>
            <div class="charge_wrap" id="charge_list">
                <ul class="charge_list">
                    <li> <a href="javascript:_window.open('mileage_charge', 'http://trade.itemmania.com/myroom/mileage/charge/tcash.html',700,900);"><span
                                class="c_name">티캐시</span><span class="sp_main tcash"></span></a> </li>
                    <li> <a href="javascript:_window.open('mileage_charge', 'http://trade.itemmania.com/myroom/mileage/charge/ktclip.html',700,900);"><span
                                class="c_name">카드포인트 </span><span class="sp_main ktclip"></span></a> </li>
                    <li> <a href="javascript:_window.open('mileage_charge', 'http://trade.itemmania.com/myroom/mileage/charge/onlyhpmn.html',700,900);"><span
                                class="c_name">해피머니상품권</span><span class="sp_main happy"></span></a> </li>
                    <li> <a href="javascript:_window.open('mileage_charge', 'http://trade.itemmania.com/myroom/mileage/charge/onlyculture.html',700,900);"><span
                                class="c_name">문화상품권</span><span class="sp_main culture"></span></a> </li>
                    <li> <a href="javascript:_window.open('mileage_charge', 'http://trade.itemmania.com/myroom/mileage/charge/phone_ars.html',700,900);"><span
                                class="c_name">휴대폰 ARS충전</span><span class="sp_main phone_ars"></span></a> </li>
                    <li> <a href="javascript:_window.open('mileage_charge', 'http://trade.itemmania.com/myroom/mileage/charge/bookgift.html',700,900);"><span
                                class="c_name">도서문화상품권</span><span class="sp_main book"></span></a> </li>
                </ul>
                <ul class="charge_list">
                    <li> <a href="javascript:_window.open('mileage_charge', 'http://trade.itemmania.com/myroom/mileage/charge/realaccount.html',700,900);"><span
                                class="c_name">자동이체</span><span class="sp_main realaccount"></span></a> </li>
                    <li> <a href="javascript:_window.open('mileage_charge', 'http://trade.itemmania.com/myroom/mileage/charge/onlydgcl.html',700,900);"><span
                                class="c_name">스마트문상(게임문상)</span><span class="sp_main smart"></span></a> </li>
                    <li> <a href="javascript:_window.open('mileage_charge', 'http://trade.itemmania.com/myroom/mileage/charge/cashgate.html',700,900);"><span
                                class="c_name">캐시플러스</span><span class="sp_main cashgate"></span></a> </li>
                    <li> <a href="javascript:_window.open('mileage_charge', 'http://trade.itemmania.com/myroom/mileage/charge/touchpay.html',700,900);"><span
                                class="c_name">터치페이</span><span class="sp_main touchpay"></span></a> </li>
                    <li> <a href="javascript:_window.open('mileage_charge', 'http://trade.itemmania.com/myroom/mileage/charge/teencash.html',700,900);"><span
                                class="c_name">틴캐시</span><span class="sp_main teen"></span></a> </li>
                    <li> <a href="javascript:_window.open('mileage_charge', 'http://trade.itemmania.com/myroom/mileage/charge/eggmoney.html',700,900);"><span
                                class="c_name">에그머니</span><span class="sp_main eggmoney"></span></a> </li>
                </ul>
                <ul class="charge_list">
                    <li> <a href="javascript:_window.open('mileage_charge', 'http://trade.itemmania.com/myroom/mileage/charge/tmoney.html',700,900);"><span
                                class="c_name">모바일 티머니</span><span class="sp_main tmoney"></span></a> </li>
                    <li> <a href="javascript:_window.open('mileage_charge', 'http://trade.itemmania.com/myroom/mileage/charge/pointpark.html',700,900);"><span
                                class="c_name">포인트충전</span><span class="sp_main point"></span></a> </li>
                    <li> <a href="javascript:_window.open('mileage_charge', 'http://trade.itemmania.com/myroom/mileage/charge/gpgw.html',700,900);"><span
                                class="c_name">GP쿠폰</span><span class="sp_main gpcoupon"></span></a> </li>
                    <li> <a href="javascript:_window.open('mileage_charge', 'http://trade.itemmania.com/myroom/mileage/charge/maniacoupon.html',700,900);"><span
                                class="c_name">매니아 선불</span><span class="sp_main maniacoupon"></span></a> </li>
                    <li> <a href="javascript:_window.open('mileage_charge', 'http://trade.itemmania.com/myroom/mileage/charge/funnycard.html',700,900);"><span
                                class="c_name">퍼니카드</span><span class="sp_main funny"></span></a> </li>
                    <li> <a href="javascript:_window.open('mileage_charge', 'http://trade.itemmania.com/myroom/mileage/charge/coupon.html',700,900);"><span
                                class="c_name">이벤트쿠폰</span><span class="sp_main coupon"></span></a> </li>
                </ul>
                <ul class="charge_list">
                    <li> <a href="javascript:_window.open('mileage_charge', 'http://trade.itemmania.com/myroom/mileage/charge/ars.html',700,900);"><span
                                class="c_name">ARS</span><span class="sp_main ars"></span></a> </li>
                    <li> <a href="javascript:_window.open('mileage_charge', 'http://trade.itemmania.com/myroom/mileage/charge/cashbee.html',700,900);"><span
                                class="c_name">모바일 캐시비</span><span class="sp_main cashbee"></span></a> </li>
                    <li> <a href="javascript:_window.open('mileage_charge', 'http://trade.itemmania.com/myroom/mileage/charge/creditcard.html',700,900);"><span
                                class="c_name">신용카드 충전</span><span class="sp_main creditcard"></span></a> </li>
                    <li> <a href="javascript:_window.open('mileage_charge', 'http://trade.itemmania.com/myroom/mileage/charge/okcashbag.html',700,900);"><span
                                class="c_name">OK캐시백</span><span class="sp_main okcashbag"></span></a> </li>
                    <li> <a href="javascript:_window.open('mileage_charge', 'http://trade.itemmania.com/myroom/mileage/charge/mileage.html',700,900);"><span
                                class="c_name">마일리지 상품권</span><span class="sp_main mileage"></span></a> </li>
                    <li> <a href="javascript:_window.open('mileage_charge', 'http://trade.itemmania.com/myroom/mileage/charge/index.html',700,900);"><span
                                class="c_name">전용계좌</span><span class="sp_main account"></span></a> </li>
                </ul>
                <ul class="charge_list">
                    <li> <a href="javascript:_window.open('mileage_charge', 'http://trade.itemmania.com/myroom/mileage/charge/mmileage.html',700,900);"><span
                                class="c_name">M마일리지 이용권</span><span class="sp_main mmileage"></span></a> </li>
                    <li> <a href="javascript:_window.open('mileage_charge', 'http://trade.itemmania.com/myroom/mileage/charge/im_gift.html',700,900);"><span
                                class="c_name">IM기프트</span><span class="sp_main imgift"></span></a> </li>
                    <li> <a href="javascript:_window.open('mileage_charge', 'http://trade.itemmania.com/myroom/mileage/charge/mobilepop.html',700,900);"><span
                                class="c_name">모바일팝</span><span class="sp_main mobilepop"></span></a> </li>
                    <li> <a href="javascript:_window.open('mileage_charge', 'http://trade.itemmania.com/myroom/mileage/charge/pipe.html',700,900);"><span
                                class="c_name">암호화폐 충전</span><span class="sp_main pipe"></span></a> </li>
                    <li> <a href="javascript:_window.open('mileage_charge', 'http://trade.itemmania.com/myroom/mileage/charge/paycoin.html',700,900);"><span
                                class="c_name">페이코인 충전</span><span class="sp_main paycoin"></span></a> </li>
                    <li> <a href="javascript:_window.open('mileage_charge', 'http://trade.itemmania.com/myroom/mileage/charge/kbank.html',700,900);"><span
                                class="c_name">케이뱅크 페이</span><span class="sp_main kbank"></span></a> </li>
                </ul> <i class="border_hz"></i> </div>
        </div>
        <div class="g_finish"></div>
        <!--▼▼▼ 거래 메인 랜덤 up 980x80 ▼▼▼ -->
        <p class="spacer_bottom_10"></p>
        <!--▲▲▲ 거래 메인 랜덤 up 980x80 ▲▲▲ -->
        <div class="g_finish"></div>
        <div class="sec_left recom_game">
            <div class="title"> 매니아 핫게임 <a href="/game_info/recom_game/"><i class="sp_icon plus_icon">더보기</i></a> </div>
            <ul class="hotgame_list">
                <li>
                    <a href="http://trade.itemmania.com/game_info/recom_game/"><img src="/assets/img/mania/20210802144909_1.jpg" width="106" height="130" alt=""></a> <span class="game_name">블레스언리쉬드</span>
                    <div class="btns"> <a href="http://trade.itemmania.com/game_info/recom_game/" class="btn_white2">할인쿠폰</a> <a href="/sell/list.html?search_type=sell&search_game=4673&search_game_text=%EB%B8%94%EB%A0%88%EC%8A%A4%EC%96%B8%EB%A6%AC%EC%89%AC%EB%93%9C" class="btn_blue1">거래하기</a> </div>
                </li>
                <li>
                    <a href="http://trade.itemmania.com/game_info/recom_game/"><img src="/assets/img/mania/20210427100400_1.jpg" width="106" height="130" alt=""></a> <span class="game_name">서머너즈워:백년전쟁</span>
                    <div class="btns"> <a href="http://trade.itemmania.com/game_info/recom_game/" class="btn_white2">할인쿠폰</a> <a href="/sell/list.html?search_type=sell&search_game=4702&search_game_text=%EC%84%9C%EB%A8%B8%EB%84%88%EC%A6%88%EC%9B%8C%3A%EB%B0%B1%EB%85%84%EC%A0%84%EC%9F%81" class="btn_blue1">거래하기</a> </div>
                </li>
                <li>
                    <a href="http://trade.itemmania.com/game_info/recom_game/"><img src="/assets/img/mania/20210406091243_1.jpg" width="106" height="130" alt=""></a> <span class="game_name">프로야구H3</span>
                    <div class="btns"> <a href="http://trade.itemmania.com/game_info/recom_game/" class="btn_white2">할인쿠폰</a> <a href="/sell/list.html?search_type=sell&search_game=4686&search_game_text=%ED%94%84%EB%A1%9C%EC%95%BC%EA%B5%ACH3" class="btn_blue1">거래하기</a> </div>
                </li>
                <li>
                    <a href="http://trade.itemmania.com/game_info/recom_game/"><img src="/assets/img/mania/20210122110502_1.jpg" width="106" height="130" alt=""></a> <span class="game_name">쿠키런:킹덤</span>
                    <div class="btns"> <a href="http://trade.itemmania.com/game_info/recom_game/" class="btn_white2">할인쿠폰</a> <a href="/sell/list.html?search_type=sell&search_game=4660&search_game_text=%EC%BF%A0%ED%82%A4%EB%9F%B0%3A%ED%82%B9%EB%8D%A4" class="btn_blue1">거래하기</a> </div>
                </li>
                <li>
                    <a href="http://trade.itemmania.com/game_info/recom_game/"><img src="/assets/img/mania/20210122110254_1.jpg" width="106" height="130" alt=""></a> <span class="game_name">원펀맨:최강의남자</span>
                    <div class="btns"> <a href="http://trade.itemmania.com/game_info/recom_game/" class="btn_white2">할인쿠폰</a> <a href="/sell/list.html?search_type=sell&search_game=4677&search_game_text=%EC%9B%90%ED%8E%80%EB%A7%A8%3A%EC%B5%9C%EA%B0%95%EC%9D%98%EB%82%A8%EC%9E%90" class="btn_blue1">거래하기</a> </div>
                </li>
            </ul>
        </div>
        <div class="rank_wrap g_right">
            <div class="sec_right">
                <div class="title"> 게임순위 <a href="/game_info/rank_game/index.html"><i class="sp_icon plus_icon">더보기</i></a> </div>
                <ul class="rank_list">
                    <li class="top"> <span class="num">1</span> <span class="game_name">디아블로2:레저렉션</span> <span class="sp_icon none"></span> </li>
                    <li class="top"> <span class="num">2</span> <span class="game_name">오딘:발할라라이징</span> <span class="sp_icon none"></span> </li>
                    <li class="top"> <span class="num">3</span> <span class="game_name">로스트아크</span> <span class="sp_icon none"></span> </li>
                    <li> <span class="num">4</span> <span class="game_name">메이플스토리</span> <span class="sp_icon none"></span> </li>
                    <li> <span class="num">5</span> <span class="game_name">던전앤파이터</span> <span class="sp_icon none"></span> </li>
                </ul>
                <ul class="rank_list">
                    <li> <span class="num">6</span> <span class="game_name">블레이드앤소울2</span> <span class="sp_icon none"></span> </li>
                    <li> <span class="num">7</span> <span class="game_name">아이온</span> <span class="sp_icon up"></span> </li>
                    <li> <span class="num">8</span> <span class="game_name">바람의나라:연</span> <span class="sp_icon up"></span> </li>
                    <li> <span class="num">9</span> <span class="game_name">리니지M</span> <span class="sp_icon down"></span> </li>
                    <li> <span class="num">10</span> <span class="game_name">월드오브워크래프트:클래식</span> <span class="sp_icon up"></span> </li>
                </ul>
            </div>
            <!--▼▼▼ 거래 메인 하단 980x80 ▼▼▼ -->
            <div class="banner_module">
                <div class="banner_content_wrapper">
                    <div class="banner_content">
                        <a href="http://trade.itemmania.com/counter/survey.php?imcounter=banner_tradebn_tmlow_lotto&returnUrl=http://www.itemmania.com/event/event_ing/e190408_lotto/" target="_blank"> <img id="TF0003" class="banner_content_images" src="http://img3.itemmania.com/new_images/banner_manager/20210113/20210113163201_M3DKq.jpg" alt="로또서비스" title="로또서비스"> </a>
                    </div>
                </div>
            </div>
            <p class="spacer_bottom_10"></p>
            <!--▲▲▲ 거래 메인 하단 980x80 ▲▲▲ -->
        </div>
        <div class="g_finish"></div>
        <div class="sec_bottom">
            <div class="box3 gamemania">
                <div class="title"> 게임매니아 <a href="http://www.gamemania.co.kr" target="_blank"><i class="sp_icon plus_icon">더보기</i></a> </div>
                <div class="gamemania_bn banner_in">
                    <div class="banner_item">
                        <a href="http://trade.itemmania.com/gamemania/transfer.html?SendUrl=http://mk.gamemania.co.kr" target="_blank"> <img src="http://img3.itemmania.com/new_images/banner/210707_mk_348x143.png" alt="무신의칼" title="무신의칼" /> </a>
                    </div>
                    <div class="banner_item">
                        <a href="http://trade.itemmania.com/gamemania/transfer.html?SendUrl=http://bb37.gamemania.co.kr" target="_blank"> <img src="http://img3.itemmania.com/new_images/banner/210707_bb37_348x143.jpg" alt="병법37계" title="병법37계" /> </a>
                    </div>
                    <div class="banner_item">
                        <a href="http://trade.itemmania.com/gamemania/transfer.html?SendUrl=http://flexr.gamemania.co.kr" target="_blank"> <img src="http://img4.itemmania.com/new_images/banner/210707_flexr_348x143.jpg" alt="플렉스R" title="플렉스R" /> </a>
                    </div>
                </div>
                <div class="banner_indicate indicate"></div>
            </div>
            <div class="box3 service">
                <div class="title"> 매니아서비스
                    <div class="move_btn" id="serviceBtn"> <a href="javascript:;" data-type="p"><i class="sp_icon btn_prev">이전</i></a> <a href="javascript:;" data-type="n"><i class="sp_icon btn_next">다음</i></a> </div>
                </div>
                <div id="mania_bn"> </div>
            </div>
            <div class="box3 gamenews">
                <div class="title"> 최신 게임뉴스 <a href="/portal/gamemeca/news/index.html"><i class="sp_icon plus_icon">더보기</i></a> </div>
                <ul class="g_list news_list">
                    <li><a href="/portal/gamemeca/news/view.html?seq=32957">
                            게임 나오면 흥할 넷플릭스 오리지널 콘텐츠, 뭐가 있을까?                                    <span class="comp">2021-10-07 18:09:38</span>
                        </a> </li>
                    <li><a href="/portal/gamemeca/news/view.html?seq=32961">
                            엔씨소프트 사내 성희롱 사건 발생, 사측 조사 나서                                    <span class="comp">2021-10-07 15:47:17</span>
                        </a> </li>
                    <li><a href="/portal/gamemeca/news/view.html?seq=32958">
                            독재타도 위해 싸우자, 파 크라이 6 정식 발매                                    <span class="comp">2021-10-07 15:45:27</span>
                        </a> </li>
                    <li><a href="/portal/gamemeca/news/view.html?seq=32959">
                            [순정남] 그걸로 정체가 감춰져? 의미 없는 가면 TOP 5                                    <span class="comp">2021-10-07 14:56:54</span>
                        </a> </li>
                </ul>
            </div>
            <div class="bottom_info">
                <div class="title2">전화 상담안내</div> <span class="call_num">1544-8278</span> <span class="call_txt">365일 24시간 연중무휴</span> </div>
            <div class="bottom_info2">
                <div class="title2">공지사항</div>
                <dl class="notice">
                    <dd><a href="javascript:_window.open('notice','/notice/view.html?pub=TRADE&type=all&nowPage=1&id=1955',650,500);">[안내] 스크린샷 첨부용량 하향 조정 안내</a> <img src="//img1.itemmania.com/images/icon/ico_new.gif" width="10" height="9" alt="" /></dd>
                    <dd><a href="javascript:_window.open('notice','/notice/view.html?pub=TRADE&type=all&nowPage=1&id=1954',650,500);">[당첨자발표] 캐릭터물품등록알리미 이벤..</a> <img src="//img1.itemmania.com/images/icon/ico_new.gif" width="10" height="9" alt="" /></dd>
                    <dd><a href="javascript:_window.open('notice','/notice/view.html?pub=TRADE&type=all&nowPage=1&id=1951',650,500);">[이벤트] 아이템매니아X녹스앱플레이어, ..</a> </dd>
                </dl>
            </div>
            <div class="bottom_info3">
                <ul class="center_menu">
                    <li>
                        <a href="/customer/report/index.html"> <span class="SpGroup counsel"></span> 온라인 1:1 상담 </a>
                    </li>
                    <li>
                        <a href="/customer/faq/index.html"> <span class="SpGroup faq"></span> FAQ </a>
                    </li>
                    <li>
                        <a href="/customer/myqna/list.html"> <span class="SpGroup qna"></span> 나의 질문과 답변 </a>
                    </li>
                    <li>
                        <a href="/guide/frshmn_guide/howto.html"> <span class="SpGroup guide"></span> 초보자가이드 </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="g_finish"></div>
    </div>
    <!-- ▲ 컨텐츠 영역 //-->
@endsection
