@extends('layouts-mania.app')
@section('content')
    <!--▼▼▼ 캐릭터 등롤 알리미 ▼▼▼ -->
    <div class="g_container" id="g_CONTENT">
        <div id="character_top_section">
            <div class="section_title_wrapper">
                <h2 class="section_title">캐릭터 거래 게임 리스트</h2> </div>
            <div id="character_top_section_content" class="clear_fix">
                <div class="character_menu_wrapper">
                    <ul class="character_menu_list clear_fix">
                        <li class="character_menu" data-code="4593" data-gamename="R2M">R2M</li>
                        <li class="character_menu" data-code="4553" data-gamename="DK모바일">DK모바일</li>
                        <li class="character_menu" data-code="4696" data-gamename="오딘:발할라라이징">오딘:발할라라이징</li>
                        <li class="character_menu" data-code="4685" data-gamename="블레이드앤소울2">블레이드앤소울2</li>
                        <li class="character_menu" data-code="4613" data-gamename="원신">원신</li>
                        <li class="character_menu" data-code="4322" data-gamename="바람의나라:연">바람의나라:연</li>
                        <li class="character_menu" data-code="4326" data-gamename="리니지2M">리니지2M</li>
                        <li class="character_menu" data-code="3413" data-gamename="메이플스토리M">메이플스토리M</li>
                        <li class="character_menu" data-code="4462" data-gamename="그랑사가">그랑사가</li>
                        <li class="character_menu" data-code="3799" data-gamename="검은사막모바일">검은사막모바일</li>
                        <li class="character_menu" data-code="3449" data-gamename="리니지M">리니지M</li>
                        <li class="character_menu" data-code="4629" data-gamename="세븐나이츠2">세븐나이츠2</li>
                        <li class="character_menu" data-code="4033" data-gamename="에픽세븐">에픽세븐</li>
                        <li class="character_menu" data-code="4337" data-gamename="라이즈오브킹덤즈">라이즈오브킹덤즈</li>
                        <li class="character_menu" data-code="4660" data-gamename="쿠키런:킹덤">쿠키런:킹덤</li>
                        <li class="character_menu" data-code="4342" data-gamename="V4">V4</li>
                        <li class="character_menu" data-code="4538" data-gamename="라그나로크오리진">라그나로크오리진</li>
                        <li class="character_menu" data-code="3907" data-gamename="라그나로크M">라그나로크M</li>
                        <li class="character_menu" data-code="2270" data-gamename="서머너즈워">서머너즈워</li>
                        <li class="character_menu" data-code="4268" data-gamename="로한M">로한M</li>
                    </ul>
                </div>
                <div class="character_banner_carousel">
                    <div class="carousel_module" data-code="TR0002">
                        <div class="banner_in center_banner" id="center_banner">
                            <div class="banner_item" data-idx="0">
                                <a href="http://www.itemmania.com/event/event_ing/e161012_mobile/" target="_blank"> <img class="carousel_images" src="http://img4.itemmania.com/new_images/banner_manager/20210203/20210203175731_dNX66.jpg" alt="아무게임" title="아무게임"> </a>
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
                </div>
            </div>
        </div>
        <div id="character_goods_content">
            <div class="games_goods_wrapper">
                <div class="section_title_wrapper">
                    <h2 class="section_title">오딘:발할라라이징 <span class="goods_more_btn" data-code="4696" data-gamename="오딘:발할라라이징">더보기 <img src="http://img4.itemmania.com/new_images/icon/icon_more.png" alt="" /></span></h2></div>
                <div class="games_goods_carousel">
                    <div class="carousel_module">
                        <div class="banner_in center_banner">
                            <div class="banner_item" data-idx="0">
                                <div class="goods_wrapper goods" data-goods="2021101106576300">
                                    <dl><dt class="goods_price">24,000,000<span>원</span></dt>
                                        <dd class="goods_content">Google</dd>
                                        <dd class="goods_content">3.55 74렙 스나,어쌔 3전설/전설장갑</dd>
                                        <dd class="goods_server">오딘:발할라라이징 > 이둔3</dd>
                                    </dl>
                                </div>
                                <div class="goods_wrapper goods" data-goods="2021101307088189">
                                    <dl><dt class="goods_price">19,000,000<span>원</span></dt>
                                        <dd class="goods_content">기타</dd>
                                        <dd class="goods_content">Lv.80 어쌔신 3전설 투력 39260 정리합니다.</dd>
                                        <dd class="goods_server">오딘:발할라라이징 > 오딘9</dd>
                                    </dl>
                                </div>
                                <div class="goods_wrapper goods" data-goods="2021092500027179">
                                    <dl><dt class="goods_price">12,345,670<span>원</span></dt>
                                        <dd class="goods_content">기타</dd>
                                        <dd class="goods_content">71 아크메이지 2.95투력 판매합니다.</dd>
                                        <dd class="goods_server">오딘:발할라라이징 > 오딘7</dd>
                                    </dl>
                                </div>
                                <div class="goods_wrapper goods" data-goods="2021100708348938">
                                    <dl><dt class="goods_price">10,000,000<span>원</span></dt>
                                        <dd class="goods_content">기타</dd>
                                        <dd class="goods_content">32000대 스나 처분해요</dd>
                                        <dd class="goods_server">오딘:발할라라이징 > 헤임달5</dd>
                                    </dl>
                                </div>
                            </div>
                            <div class="banner_item" data-idx="1">
                                <div class="goods_wrapper goods" data-goods="2021091901421286">
                                    <dl><dt class="goods_price">10,000,000<span>원</span></dt>
                                        <dd class="goods_content">Google</dd>
                                        <dd class="goods_content">75팔라딘 팝니다 사냥중</dd>
                                        <dd class="goods_server">오딘:발할라라이징 > 로키1</dd>
                                    </dl>
                                </div>
                                <div class="goods_wrapper goods" data-goods="2021100110246678">
                                    <dl><dt class="goods_price">10,000,000<span>원</span></dt>
                                        <dd class="goods_content">기타</dd>
                                        <dd class="goods_content">랭커 어쌔 계정 저렴히 정리(내용 가격무시)</dd>
                                        <dd class="goods_server">오딘:발할라라이징 > 로키3</dd>
                                    </dl>
                                </div>
                                <div class="goods_wrapper goods" data-goods="2021101213048663">
                                    <dl><dt class="goods_price">9,900,000<span>원</span></dt>
                                        <dd class="goods_content">Google</dd>
                                        <dd class="goods_content">72랩 전변1티어 팔라딘 전변1티어 세인트 스왑가능 구</dd>
                                        <dd class="goods_server">오딘:발할라라이징 > 로키1</dd>
                                    </dl>
                                </div>
                                <div class="goods_wrapper goods" data-goods="2021093004722406">
                                    <dl><dt class="goods_price">9,800,000<span>원</span></dt>
                                        <dd class="goods_content">Guest</dd>
                                        <dd class="goods_content">카카오완전깡통 팔라딘 투력3.4 2전설 전변1티어(pvp)전탈(가름)영날</dd>
                                        <dd class="goods_server">오딘:발할라라이징 > 기타</dd>
                                    </dl>
                                </div>
                            </div>
                            <div class="banner_item" data-idx="2">
                                <div class="goods_wrapper goods" data-goods="2021101300965887">
                                    <dl><dt class="goods_price">8,500,000<span>원</span></dt>
                                        <dd class="goods_content">기타</dd>
                                        <dd class="goods_content">토르9 71렙 3.28만 다크(전압/전탈) 처분합니다.</dd>
                                        <dd class="goods_server">오딘:발할라라이징 > 토르9</dd>
                                    </dl>
                                </div>
                                <div class="goods_wrapper goods" data-goods="2021101006483950">
                                    <dl><dt class="goods_price">8,000,000<span>원</span></dt>
                                        <dd class="goods_content">Google</dd>
                                        <dd class="goods_content">세인트 전설1티어 치유의마그니 전설 케릭 정리합니다.구</dd>
                                        <dd class="goods_server">오딘:발할라라이징 > 이둔2</dd>
                                    </dl>
                                </div>
                                <div class="goods_wrapper goods" data-goods="2021101305040631">
                                    <dl><dt class="goods_price">8,000,000<span>원</span></dt>
                                        <dd class="goods_content">기타</dd>
                                        <dd class="goods_content">pvp전설 1 디펜더 영웅탈날 777악세 팝니다 !</dd>
                                        <dd class="goods_server">오딘:발할라라이징 > 토르9</dd>
                                    </dl>
                                </div>
                                <div class="goods_wrapper goods" data-goods="2021100912319943">
                                    <dl><dt class="goods_price">8,000,000<span>원</span></dt>
                                        <dd class="goods_content">기타</dd>
                                        <dd class="goods_content">캐릭터 팝니다.</dd>
                                        <dd class="goods_server">오딘:발할라라이징 > 로키5</dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                        <div class='banner_indicate indicate'></div>
                    </div>
                </div>
            </div>
            <div class="games_goods_wrapper">
                <div class="section_title_wrapper">
                    <h2 class="section_title">바람의나라:연 <span class="goods_more_btn" data-code="4322" data-gamename="바람의나라:연">더보기 <img src="http://img1.itemmania.com/new_images/icon/icon_more.png" alt="" /></span></h2></div>
                <div class="games_goods_carousel">
                    <div class="carousel_module">
{{--                        <div class="banner_in center_banner">--}}
                        <div>
                            <div class="banner_item" data-idx="0">
                                <div class="goods_wrapper goods" data-goods="2021101304951462">
                                    <dl><dt class="goods_price">99,999,990<span>원</span></dt>
                                        <dd class="goods_content">Google</dd>
                                        <dd class="goods_content">589도적</dd>
                                        <dd class="goods_server">바람의나라:연 > 유리</dd>
                                    </dl>
                                </div>
                                <div class="goods_wrapper goods" data-goods="2021100710262266">
                                    <dl><dt class="goods_price">99,999,990<span>원</span></dt>
                                        <dd class="goods_content">Google</dd>
                                        <dd class="goods_content">600 도적팝니다</dd>
                                        <dd class="goods_server">바람의나라:연 > 연</dd>
                                    </dl>
                                </div>
                                <div class="goods_wrapper goods" data-goods="2021101307331120">
                                    <dl><dt class="goods_price">99,999,990<span>원</span></dt>
                                        <dd class="goods_content">Google</dd>
                                        <dd class="goods_content">연서버 606 전사 팝니다.</dd>
                                        <dd class="goods_server">바람의나라:연 > 연</dd>
                                    </dl>
                                </div>
                                <div class="goods_wrapper goods" data-goods="2021101304952068">
                                    <dl><dt class="goods_price">99,999,990<span>원</span></dt>
                                        <dd class="goods_content">Google</dd>
                                        <dd class="goods_content">타섭 효도 112 혈단풍 15 589도적</dd>
                                        <dd class="goods_server">바람의나라:연 > 연</dd>
                                    </dl>
                                </div>
                            </div>
                            <div class="banner_item" data-idx="1">
                                <div class="goods_wrapper goods" data-goods="2021100612632975">
                                    <dl><dt class="goods_price">99,909,990<span>원</span></dt>
                                        <dd class="goods_content">Google</dd>
                                        <dd class="goods_content">효도 145 북별 595격투가</dd>
                                        <dd class="goods_server">바람의나라:연 > 호동</dd>
                                    </dl>
                                </div>
                                <div class="goods_wrapper goods" data-goods="2021100309702934">
                                    <dl><dt class="goods_price">90,000,000<span>원</span></dt>
                                        <dd class="goods_content">기타</dd>
                                        <dd class="goods_content">577 전수 전탑 효도 100 전사 팝니다</dd>
                                        <dd class="goods_server">바람의나라:연 > 해명</dd>
                                    </dl>
                                </div>
                                <div class="goods_wrapper goods" data-goods="2021100611106696">
                                    <dl><dt class="goods_price">85,000,000<span>원</span></dt>
                                        <dd class="goods_content">Google</dd>
                                        <dd class="goods_content">캐릭터 팝니다.</dd>
                                        <dd class="goods_server">바람의나라:연 > 연</dd>
                                    </dl>
                                </div>
                                <div class="goods_wrapper goods" data-goods="2021100904791671">
                                    <dl><dt class="goods_price">80,000,000<span>원</span></dt>
                                        <dd class="goods_content">Google</dd>
                                        <dd class="goods_content">14전변 10전수 전탑풀 전사정리해요</dd>
                                        <dd class="goods_server">바람의나라:연 > 연</dd>
                                    </dl>
                                </div>
                            </div>
                            <div class="banner_item" data-idx="2">
                                <div class="goods_wrapper goods" data-goods="2021101304989416">
                                    <dl><dt class="goods_price">39,958,000<span>원</span></dt>
                                        <dd class="goods_content">Google</dd>
                                        <dd class="goods_content">607 161효도 8전변8전수15전탑 격투가 팝니다</dd>
                                        <dd class="goods_server">바람의나라:연 > 세류</dd>
                                    </dl>
                                </div>
                                <div class="goods_wrapper goods" data-goods="2021101013180519">
                                    <dl><dt class="goods_price">34,000,000<span>원</span></dt>
                                        <dd class="goods_content">Google</dd>
                                        <dd class="goods_content">구깡 601 도적 정리</dd>
                                        <dd class="goods_server">바람의나라:연 > 기타</dd>
                                    </dl>
                                </div>
                                <div class="goods_wrapper goods" data-goods="2021101013177751">
                                    <dl><dt class="goods_price">34,000,000<span>원</span></dt>
                                        <dd class="goods_content">Google</dd>
                                        <dd class="goods_content">구깡 601 도적 정리</dd>
                                        <dd class="goods_server">바람의나라:연 > 호동</dd>
                                    </dl>
                                </div>
                                <div class="goods_wrapper goods" data-goods="2021101013181482">
                                    <dl><dt class="goods_price">34,000,000<span>원</span></dt>
                                        <dd class="goods_content">Google</dd>
                                        <dd class="goods_content">구깡 601 도적 팝니다.</dd>
                                        <dd class="goods_server">바람의나라:연 > 무휼</dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                        <div class='banner_indicate indicate'></div>
                    </div>
                </div>
            </div>
            <div class="games_goods_wrapper">
                <div class="section_title_wrapper">
                    <h2 class="section_title">리니지M <span class="goods_more_btn" data-code="3449" data-gamename="리니지M">더보기 <img src="http://img4.itemmania.com/new_images/icon/icon_more.png" alt="" /></span></h2></div>
                <div class="games_goods_carousel">
                    <div class="carousel_module">
                        <div class="banner_in center_banner">
                            <div class="banner_item" data-idx="0">
                                <div class="goods_wrapper goods" data-goods="2021091607487288">
                                    <dl><dt class="goods_price">14,500,000<span>원</span></dt>
                                        <dd class="goods_content">기타</dd>
                                        <dd class="goods_content">88.65요정 팝니다.(전변 다크슬레이어,다크하딘/전인 데스나이트,데몬)</dd>
                                        <dd class="goods_server">리니지M > 라스타바드03</dd>
                                    </dl>
                                </div>
                                <div class="goods_wrapper goods" data-goods="2021091607659294">
                                    <dl><dt class="goods_price">14,500,000<span>원</span></dt>
                                        <dd class="goods_content">기타</dd>
                                        <dd class="goods_content">88.65요정 팝니다.(전변 다크슬레이어,다크하딘/전인 데스나이트,데몬)</dd>
                                        <dd class="goods_server">리니지M > 라스타바드03</dd>
                                    </dl>
                                </div>
                                <div class="goods_wrapper goods" data-goods="2021101111781962">
                                    <dl><dt class="goods_price">11,000,000<span>원</span></dt>
                                        <dd class="goods_content">Google</dd>
                                        <dd class="goods_content">88.80 6전스 전변기사 팝니다. 기사2 쉴브 기본기좋음</dd>
                                        <dd class="goods_server">리니지M > 발라카스</dd>
                                    </dl>
                                </div>
                                <div class="goods_wrapper goods" data-goods="2021101306536784">
                                    <dl><dt class="goods_price">10,500,000<span>원</span></dt>
                                        <dd class="goods_content">Google</dd>
                                        <dd class="goods_content">임의서버 88.41% 고스펙 광전사 전변 전인 전스4 컬렉41% 비각다수</dd>
                                        <dd class="goods_server">리니지M > 안타라스04</dd>
                                    </dl>
                                </div>
                            </div>
                            <div class="banner_item" data-idx="1">
                                <div class="goods_wrapper goods" data-goods="2021101013534790">
                                    <dl><dt class="goods_price">10,000,000<span>원</span></dt>
                                        <dd class="goods_content">Google</dd>
                                        <dd class="goods_content">★급처★구글깡통 88.55%달질,데스 총사(요정클체대기) 내용 必</dd>
                                        <dd class="goods_server">리니지M > 아툰</dd>
                                    </dl>
                                </div>
                                <div class="goods_wrapper goods" data-goods="2021092611247879">
                                    <dl><dt class="goods_price">10,000,000<span>원</span></dt>
                                        <dd class="goods_content">FaceBook</dd>
                                        <dd class="goods_content">82암기 판매합니다</dd>
                                        <dd class="goods_server">리니지M > 판도라07</dd>
                                    </dl>
                                </div>
                                <div class="goods_wrapper goods" data-goods="2021100605710275">
                                    <dl><dt class="goods_price">9,600,000<span>원</span></dt>
                                        <dd class="goods_content">Google</dd>
                                        <dd class="goods_content">88.71 5전스 2전변 컬렉 몸 탄탄한 기사팝니다</dd>
                                        <dd class="goods_server">리니지M > 듀크데필07</dd>
                                    </dl>
                                </div>
                                <div class="goods_wrapper goods" data-goods="2021101302382253">
                                    <dl><dt class="goods_price">7,700,000<span>원</span></dt>
                                        <dd class="goods_content">기타</dd>
                                        <dd class="goods_content">전번계 ) 88.25 6전스 8영스 2전변 요정 팝니다.</dd>
                                        <dd class="goods_server">리니지M > 아툰07</dd>
                                    </dl>
                                </div>
                            </div>
                            <div class="banner_item" data-idx="2">
                                <div class="goods_wrapper goods" data-goods="2021100413882673">
                                    <dl><dt class="goods_price">5,000,000<span>원</span></dt>
                                        <dd class="goods_content">Google</dd>
                                        <dd class="goods_content">87광전사 2전변(드슬.나슬) 팝니다</dd>
                                        <dd class="goods_server">리니지M > 파푸리온02</dd>
                                    </dl>
                                </div>
                                <div class="goods_wrapper goods" data-goods="2021091505673840">
                                    <dl><dt class="goods_price">4,750,000<span>원</span></dt>
                                        <dd class="goods_content">기타</dd>
                                        <dd class="goods_content">예약거래입니다</dd>
                                        <dd class="goods_server">리니지M > 하딘08</dd>
                                    </dl>
                                </div>
                                <div class="goods_wrapper goods" data-goods="2021091800200760">
                                    <dl><dt class="goods_price">4,500,000<span>원</span></dt>
                                        <dd class="goods_content">Google</dd>
                                        <dd class="goods_content">88렙/전변각성/4전스/5영스/뎀명151,182/덕42/축7축5</dd>
                                        <dd class="goods_server">리니지M > 라스타바드</dd>
                                    </dl>
                                </div>
                                <div class="goods_wrapper goods" data-goods="2021093005148787">
                                    <dl><dt class="goods_price">4,000,000<span>원</span></dt>
                                        <dd class="goods_content">기타</dd>
                                        <dd class="goods_content">87 98퍼 불패의군터광전사</dd>
                                        <dd class="goods_server">리니지M > 기타</dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                        <div class='banner_indicate indicate'></div>
                    </div>
                </div>
            </div>
            <div class="games_goods_wrapper">
                <div class="section_title_wrapper">
                    <h2 class="section_title">리니지2M <span class="goods_more_btn" data-code="4326" data-gamename="리니지2M">더보기 <img src="http://img3.itemmania.com/new_images/icon/icon_more.png" alt="" /></span></h2></div>
                <div class="games_goods_carousel">
                    <div class="carousel_module">
                        <div class="banner_in center_banner">
                            <div class="banner_item" data-idx="0">
                                <div class="goods_wrapper goods" data-goods="2021100711018321">
                                    <dl><dt class="goods_price">13,000,000<span>원</span></dt>
                                        <dd class="goods_content">기타</dd>
                                        <dd class="goods_content">79 초월오브 393방 4전스4전템 무기 세이크리디움 신화이력O</dd>
                                        <dd class="goods_server">리니지2M > 드비안느10</dd>
                                    </dl>
                                </div>
                                <div class="goods_wrapper goods" data-goods="2021092907911665">
                                    <dl><dt class="goods_price">7,400,000<span>원</span></dt>
                                        <dd class="goods_content">Google</dd>
                                        <dd class="goods_content">396방 79렙 (신화 이력) 라바몬드 초월 대검 15전설 ,전무</dd>
                                        <dd class="goods_server">리니지2M > 오필리아10</dd>
                                    </dl>
                                </div>
                                <div class="goods_wrapper goods" data-goods="2021101304691054">
                                    <dl><dt class="goods_price">3,650,000<span>원</span></dt>
                                        <dd class="goods_content">Google</dd>
                                        <dd class="goods_content">77.33 7전변(중복1) 2전인 영스라힐x 정탄9-1 단일 풀셋 판매합</dd>
                                        <dd class="goods_server">리니지2M > 안타라스</dd>
                                    </dl>
                                </div>
                                <div class="goods_wrapper goods" data-goods="2021092107191936">
                                    <dl><dt class="goods_price">3,500,000<span>원</span></dt>
                                        <dd class="goods_content">Google</dd>
                                        <dd class="goods_content">캐릭 팝니다 ㅍ 캐릭터 팝니다.</dd>
                                        <dd class="goods_server">리니지2M > 드비안느05</dd>
                                    </dl>
                                </div>
                            </div>
                            <div class="banner_item" data-idx="1">
                                <div class="goods_wrapper goods" data-goods="2021092107194973">
                                    <dl><dt class="goods_price">3,500,000<span>원</span></dt>
                                        <dd class="goods_content">Google</dd>
                                        <dd class="goods_content">캐릭터 팝니다.오브</dd>
                                        <dd class="goods_server">리니지2M > 리오나07</dd>
                                    </dl>
                                </div>
                                <div class="goods_wrapper goods" data-goods="2021100401583065">
                                    <dl><dt class="goods_price">3,500,000<span>원</span></dt>
                                        <dd class="goods_content">Google</dd>
                                        <dd class="goods_content">78렙이도류/5전설클래스/4+1전설아가시온/2+2전설스킬/신화클래스도전o</dd>
                                        <dd class="goods_server">리니지2M > 지그하르트01</dd>
                                    </dl>
                                </div>
                                <div class="goods_wrapper goods" data-goods="2021101113584271">
                                    <dl><dt class="goods_price">2,800,000<span>원</span></dt>
                                        <dd class="goods_content">Google</dd>
                                        <dd class="goods_content">(급처)대검,초월 자나크 78.20 (구글) 영웅9무기 4,5룬ㅍㅍㅍ</dd>
                                        <dd class="goods_server">리니지2M > 거스틴08</dd>
                                    </dl>
                                </div>
                                <div class="goods_wrapper goods" data-goods="2021100905240194">
                                    <dl><dt class="goods_price">2,500,000<span>원</span></dt>
                                        <dd class="goods_content">Google</dd>
                                        <dd class="goods_content">76렙 초월 전변 융합 전설아가시온 이도류</dd>
                                        <dd class="goods_server">리니지2M > 에리카</dd>
                                    </dl>
                                </div>
                            </div>
                            <div class="banner_item" data-idx="2">
                                <div class="goods_wrapper goods" data-goods="2021100810462887">
                                    <dl><dt class="goods_price">2,500,000<span>원</span></dt>
                                        <dd class="goods_content">Google</dd>
                                        <dd class="goods_content">캐릭터 팝니다.</dd>
                                        <dd class="goods_server">리니지2M > 안타라스01</dd>
                                    </dl>
                                </div>
                                <div class="goods_wrapper goods" data-goods="2021101107805030">
                                    <dl><dt class="goods_price">2,300,000<span>원</span></dt>
                                        <dd class="goods_content">기타</dd>
                                        <dd class="goods_content">이도 78렙84% 전변2 전인2 전스2 파밍용최강-네고(x) 다야벌이</dd>
                                        <dd class="goods_server">리니지2M > 리오나04</dd>
                                    </dl>
                                </div>
                                <div class="goods_wrapper goods" data-goods="2021100505327130">
                                    <dl><dt class="goods_price">2,000,000<span>원</span></dt>
                                        <dd class="goods_content">기타</dd>
                                        <dd class="goods_content">(급처)76.30단검 6전변 2전인 1전스 팝니다.</dd>
                                        <dd class="goods_server">리니지2M > 바츠01</dd>
                                    </dl>
                                </div>
                                <div class="goods_wrapper goods" data-goods="2021093005281050">
                                    <dl><dt class="goods_price">1,990,000<span>원</span></dt>
                                        <dd class="goods_content">Google</dd>
                                        <dd class="goods_content">급처 컬렉57% 2전변 자나크 대검팝니다.</dd>
                                        <dd class="goods_server">리니지2M > 아리아09</dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                        <div class='banner_indicate indicate'></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="g_finish"></div>
    <!-- ▲ 컨텐츠 영역 //-->
@endsection
