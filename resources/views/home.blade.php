@extends('layouts.app')

@section('content')

	   <!-- 弹窗1 -->
        <div class="pop pop-video">
            <a href="#" class="video-close">x</a>
            <div class="pop-in" id="video">
                <iframe allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
       <!-- 弹窗2 -->
        <div id="pop-evt1" class="pop-evt">
            <a href="#" class="pop-evt-close"></a>
            <div class="pop-evt-swiper">
               <div class="pop-evt-t1"></div>
                <div class="pop-rs-nav">
                    <span class="active">◆預約累積獎勵◆</span>
                    <span>◆按讚累積獎勵◆</span>
                    <span>◆注意事項◆</span>
                </div>
                <div class="pop-rs-wrap">
                    <div class="pop-rs-item active">
                        <h2>事前預約人數累積獎勵</h2>
                        <p>事前預約人數累積達到1,000、3,000、5,000、10,000將會給予對應獎勵</p>
                        <table>
                            <tr>
                                <th>事前預約目標人數</th>
                                <th>活動獎勵</th>
                            </tr>
                            <tr>
                                <td>1,000</td>
                                <td>1萬綁定靈石、50綁定元寶、蘊靈石x5</td>
                            </tr>
                            <tr>
                                <td>3,000</td>
                                <td>5萬綁定靈石、100綁定元寶、蘊靈石x10、引魂石 x5</td>
                            </tr>
                            <tr>
                                <td>5,000</td>
                                <td>10萬綁定靈石、100綁定元寶、蘊靈石x10、<br>引魂石x10、鍛體丹x1</td>
                            </tr>
                            <tr>
                                <td>10,000</td>
                                <td>20萬綁定靈石、100綁定元寶、蘊靈石x20、<br>引魂石x15、雲錦鍛體丹x1</td>
                            </tr>
                        </table>
                    </div>
                    <div class="pop-rs-item">
                        <h2>粉絲團按讚累積獎勵</h2>
                        <p>粉絲團累積按讚達到1,000、3,000、5,000、10,000將會給予對應獎勵</p>
                        <table>
                            <tr>
                                <th>粉絲團人氣</th>
                                <th>活動獎勵</th>
                            </tr>
                            <tr>
                                <td>1,000</td>
                                <td>1萬綁定靈石、3級活血丹x5、3級疏經丹x5、爆靈丹x1</td>
                            </tr>
                            <tr>
                                <td>3,000</td>
                                <td>5萬綁定靈石、3級活血丹x5、3級疏經丹x5、<br>爆靈丹x1、流光玉符x3</td>
                            </tr>
                            <tr>
                                <td>5,000</td>
                                <td>10萬綁定靈石、 3級活血丹x5、3級疏經丹x5、<br>爆靈丹x3、流光玉符x5</td>
                            </tr>
                            <tr>
                                <td>10,000</td>
                                <td>20萬綁定靈石、氣血葫蘆(小)、爆靈丹x5、流光玉符x5</td>
                            </tr>
                        </table>
                    </div>
                    <div class="pop-rs-item">
                        <h2>注意事項</h2>
                        <ol>
                            <li>獎勵將於遊戲正式上線後，角色登入透過系統信件發放，發放時間截止於2019/01/24 維護前。</li>
                            <li>以上活動獎勵不可要求兌換成現金或其他有價、無價的物品，，如因不可抗拒之因素，本公司有權更換等值商品之權利。</li>
                            <li>活動時間內若遇伺服器斷線或其他不可抗拒之因素而無法參加活動，將不給予任何賠償及活動補辦。</li>
                            <li>參加本活動即同意接受本活動注意事項之規範，如有違反本活動注意事項之行為，主辦單位得取消其參加或得獎資格，並對於任何破壞本活動之行為保留相關法律追訴權。</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div id="pop-evt2" class="pop-evt">
            <a href="#" class="pop-evt-close"></a>
            <div class="pop-evt-swiper">
               <div class="pop-evt-t2"></div>
                <div class="pop-rs-nav">
                    <span class="active">◆衝等送豪禮◆</span>
                    <span>◆吞噬臭蟲戰◆</span>
                    <span>◆戰力大比拚◆</span>
                    <span>◆宗派齊心◆</span>
                    <span>◆太昊大合照◆</span>
                    <span>◆珍寶閣試賣◆</span>
                    <span>◆預先儲值享返利◆</span>
                    <span>◆注意事項◆</span>
                </div>
                <div class="pop-rs-wrap">
                    <div class="pop-rs-item active">
                        <h2>衝等送豪禮</h2>
                        <p>封測期間內，玩家提升角色等級至以下說明的等級門檻即可在活動結束後，透過註冊填寫的信箱獲得獎勵序號!(序號可在遊戲正式上線後進行使用)</p>
                        <table>
                            <tr>
                                <th>角色等級門檻</th>
                                <th>活動獎勵</th>
                            </tr>
                            <tr>
                                <td>30級 ~ 34級</td>
                                <td>20級百仙榮耀令x1</td>
                            </tr>
                            <tr>
                                <td>35級 ~ 39級</td>
                                <td>20級百仙榮耀令x1、30級百仙榮耀令x1</td>
                            </tr>
                            <tr>
                                <td>40級以上</td>
                                <td>20級百仙榮耀令x1、30級百仙榮耀令x1、40級百仙榮耀令x1</td>
                            </tr>
                        </table>
                        <table>
                            <tr>
                                <th>道具</th>
                                <th>道具說明</th>
                            </tr>
                            <tr>
                                <td>20級百仙榮耀令</td>
                                <td>50萬綁定靈石、坤掛碎片x2、乾卦碎片x2、引魂石x15</td>
                            </tr>
                            <tr>
                                <td>30級百仙榮耀令</td>
                                <td>太昊令x5、傳承石x1、安魂石x13</td>
                            </tr>
                            <tr>
                                <td>40級百仙榮耀令</td>
                                <td>震卦碎片x3、撰卦碎片x2、氣血葫蘆(大)x1</td>
                            </tr>
                        </table>
                    </div>
                    <div class="pop-rs-item">
                        <h2>吞噬臭蟲戰</h2>
                        <p>封測期間內，邀請各位道友一同協助除蟲活動，使用客服系統並依指定格式進行回報，經確認為官方尚未測出且為首次回報的BUG，將會依程度判定提供對應獎勵。</p>
                        <table>
                            <tr>
                                <th>BUG嚴重程度</th>
                                <th>範圍說明</th>
                                <th>活動獎勵</th>
                            </tr>
                            <tr>
                                <td>輕微</td>
                                <td>文字說明錯誤…等</td>
                                <td>100綁定元寶</td>
                            </tr>
                            <tr>
                                <td>中度</td>
                                <td>遊戲系統異常、任務接取錯誤…等</td>
                                <td>500綁定元寶</td>
                            </tr>
                            <tr>
                                <td>重度</td>
                                <td>修改遊戲資料、影響遊戲平衡…等</td>
                                <td>1000綁定元寶</td>
                            </tr>
                        </table>
                        <ol>
                            <h3>特別事項</h3>
                            <li>官方審核需一定時間，請玩家耐心等候審核結果。</li>
                            <li>若有重複提交相同Bug問題，則以第一個提交的玩家獲得獎勵。</li>
                            <li>為了便於Bug核實，請玩家盡可能提供Bug詳細資訊。例如：附圖、發生時間點，以及問題說明。</li>
                            <li>Bug的判定將以遊戲綠洲官方人員測試後為準則。</li>
                            <li>利用遊戲Bug進行活動並影響公平性之玩家，將喪失活動參與及得獎資格。</li>
                        </ol>
                    </div>
                    <div class="pop-rs-item">
                        <h2>戰力大比拚</h2>
                        <p>封測期間內，透過體驗遊戲機制達成角色整體戰力排行前50名的玩家可獲得以下說明對應門檻的獎勵，獎勵將於活動結束後，透過註冊填寫的信箱獲得獎勵序號!(序號可在遊戲正式上線後進行使用)</p>
                        <table>
                            <tr>
                                <th>戰力排名</th>
                                <th>活動獎勵</th>
                            </tr>
                            <tr>
                                <td>排名第1名</td>
                                <td>蒼穹會員(30天)x1、五行蘊靈寶盒x20</td>
                            </tr>
                            <tr>
                                <td>排名第2名</td>
                                <td>蒼穹會員(7天)x1、五行蘊靈寶盒x10</td>
                            </tr>
                            <tr>
                                <td>排名第3名</td>
                                <td>蒼穹會員(7天)x1、五行蘊靈寶盒x5</td>
                            </tr>
                            <tr>
                                <td>排名第4至10名</td>
                                <td>五行蘊靈寶盒x3</td>
                            </tr>
                            <tr>
                                <td>排名第11至50名</td>
                                <td>五行蘊靈寶盒x1</td>
                            </tr>
                        </table>
                        <table>
                            <tr>
                                <th>道具</th>
                                <th>道具說明</th>
                            </tr>
                            <tr>
                                <td>蒼穹會員</td>
                                <td>獲得遊戲內各便利服務及功能</td>
                            </tr>
                            <tr>
                                <td>五行蘊靈寶盒</td>
                                <td>蘊靈石x10、3萬靈石</td>
                            </tr>
                        </table>
                    </div>
                    <div class="pop-rs-item">
                        <h2>宗派齊心</h2>
                        <p>封測期間內，創立宗派並擁有15名以上成員，宗主及其15名成員即可在封測結束後續，透過註冊填寫的信箱獲得獎勵序號!(序號可在遊戲正式上線後進行使用)</p>
                        <p>活動獎勵：幸運兔(15天)、良緣金縷衣(7天)</p>
                        <ol>
                            <h3>特別事項</h3>
                            <li>宗派成員的判定將以遊戲封測時間截止後，以綠洲官方人員查詢為準則。</li>
                            <li>封測期間內，如有退出或加入其他宗派導致不符合活動資格，官方將不予以負責。</li>
                        </ol>
                    </div>
                    <div class="pop-rs-item">
                        <h2>太昊大合照</h2>
                        <p>2019年01月06日晚上08：00，將於「太昊城」地圖九霄應龍後方階梯(座標：921,859)進行封測玩家大合照紀念，屆時將派遣GM在指定位置等候各位，同時也會跟玩家進行其他互動，不見不散!</p>
                    </div>
                    <div class="pop-rs-item">
                        <h2>珍寶閣試賣</h2>
                        <p>封測期間內，將進行全服發放元寶給予參與封測的帳號，元寶將透過遊戲內系統郵件方式發放，屆時請玩家隨時留意郵件內容，預祝各位遊戲愉快。</p>
                        <table>
                            <tr>
                                <th>元寶發放時間</th>
                                <th>發放內容</th>
                            </tr>
                            <tr>
                                <td>中午12：00</td>
                                <td>5000元寶</td>
                            </tr>
                            <tr>
                                <td>下午18：00</td>
                                <td>10000元寶</td>
                            </tr>
                        </table>
                    </div>
                    <div class="pop-rs-item">
                        <h2>預先儲值享返利</h2>
                        <p>封測期間內，預先儲值Mycard點數至「吞噬蒼穹」遊戲並全數提取為元寶，<br>
                        即可在封測結束後續，透過註冊填寫的信箱獲得獎勵序號!<br>
                        (序號可在遊戲正式上線後進行使用)</p>
                        <table>
                            <tr>
                                <th>儲值門檻</th>
                                <th>活動獎勵</th>
                            </tr>
                            <tr>
                                <td>累積儲值Mycard點數100~499點並提取進遊戲</td>
                                <td>300綁定元寶</td>
                            </tr>
                            <tr>
                                <td>累積儲值Mycard點數500~999點並提取進遊戲</td>
                                <td>1500綁定元寶</td>
                            </tr>
                            <tr>
                                <td>累積儲值Mycard點數1000以上並提取進遊戲</td>
                                <td>3000綁定元寶</td>
                            </tr>
                        </table>
                    </div>
                    <div class="pop-rs-item">
                        <h2>注意事項</h2>
                        <ol>
                            <li>以上活動獎勵不可要求兌換成現金或其他有價、無價的物品，如因不可抗拒之因素，本公司有權更換等值商品之權利。</li>
                            <li>活動時間內若遇伺服器斷線或其他不可抗拒之因素而無法參加活動，將不給予任何賠償及活動補辦。</li>
                            <li>參加本活動即同意接受本活動注意事項之規範，如有違反本活動注意事項之行為，主辦單位得取消其參加或得獎資格，並對於任何破壞本活動之行為保留相關法律追訴權。</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="popbg"></div>

    <nav class="navbar">
      <div class="container-fluid">
        <a class="navbar-brand" href="https://www.oasisgames.com.tw/" target="_blank">
          <img class="img-fluid" src="/images/oasis_nav_logo.png" />
        </a>

        <div id="navbar">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="https://www.oasisgames.com.tw/explore" target="_blank">關於綠洲遊戲</a>
            </li>
          </ul>
          <ul class="navbar-nav">
            <li>
              <a class="nav-link btn btn-danger" href="https://www.oasisgames.com.tw/shop" target="_blank">儲值</a>
            </li>
              <li class="nav-item">
            <a class="nav-link" href="https://www.oasisgames.com.tw/users/sign_up" target="_blank">註冊</a>
          </li>
          <li>
            <a class="nav-link" href="https://www.oasisgames.com.tw/issue_tickets/new" target="_blank">客服回報</a>
          </li>
      </ul>
        </div>
      </div>
    </nav>

    <div class="wrap">
       <div class="media-footer float-on">
                <div class="media-footer-reg media-footer-btn">
                    <a href="https://www.oasisgames.com.tw/users/sign_up" title="加入會員" target="_blank">
                    加入會員<p>搶先預約註冊拿滿禮</p>
                    </a>
                </div>
                <div class="media-footer-down media-footer-btn">
                    <a href="http://smarturl.it/TSCQ_download" title="主程式下載" target="_blank">
                    主程式下載<p>登入送888大禮包</p>
                    </a>
                </div>
        </div>
        <header class="content">
            <div class="main">
                <div class="logo">
                    <a href="/">
                        <img src="images/logo.png" alt="吞噬蒼穹">
                    </a>
                </div>
                <div class="banner-swiper">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        @foreach($banner as $val)
                        <div class="swiper-slide">
                            <a href="{{ $val->url }}" title="{{ $val->description }}" target="_blank">
                            <img src="{{ $val->img }}" alt="{{ $val->description }}">
                            </a>
                        </div>
                        @endforeach
                    </div>
              </div>

              <div class="swiper-pagination banner-nav"></div>
              <div class="swiper-button-prev banner-prev"></div>
              <div class="swiper-button-next banner-next"></div>

              </div>
                <div class="head-down-btn">
                    <a href="http://smarturl.it/TSCQ_download" title="《吞噬蒼穹》客戶端極速下載" target="_blank">極速下載吞噬蒼穹客戶端</a>
                </div>
				 <div class="head-reg-iframe">
                        <div class="reg-tab">
                            <div class="reg-btn"><a href="https://www.oasisgames.com.tw/users/sign_up" target="_blank"></a></div>
                        </div>
                    </div>
                    <div class="head-gift">
                        <div class="head-video-btn">
                            <img src="images/mov00.jpg" alt="遊戲展示">
                        </div>
                    </div>
            </div>
        </header>
        <div class="content-wrap">
            <div class="topbtn" title="回頁首"></div>
            <div class="content welfare">
                <div class="main">
				<div class="welfare-items">
                   <a class="welfare-item">
                        <div class="welfare-front">
                            <div class="event"></div>
                        </div>
                        <div class="welfare-back">
                            <div class="event"></div>
                        </div>
                    </a>
                    <a class="welfare-item">
                        <div class="welfare-front">
                            <div class="event"></div>
                        </div>
                        <div class="welfare-back">
                            <div class="event"></div>
                        </div>
                    </a>
                </div>
                </div>

            </div>
            <div class="content feture">
                <div class="main">
                    <div class="feture-nav">
                        <span class="on">3D仙俠大世界</span>
                        <span>全空間立體空戰</span>
                        <span>全天候自由戰鬥</span>
                        <span>全體系原味修仙</span>
                        <span>全裝備屬性傳承</span>
                    </div>
                    <div class="feture-swiper">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="images/md01.jpg" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="images/md02.jpg" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="images/md03.jpg" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="images/md04.jpg" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="images/md05.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                        <div class="swiper-button-prev febtn-prev"></div>
                        <div class="swiper-button-next febtn-next"></div>
                    </div>
                </div>
            </div>
            <div class="content career">
                <div class="main clearfix">
                    <div class="career-info">
                        <ol>
                            <li>
                                <h2><img src="images/career01.png" alt=""></h2>
                                <div><div class="career01-item">
                                <a href="#" class="career-mov mov01"><img src="images/mov01.jpg" alt=""></a>
                                </div></div>
                            </li>
                            <li>
                                <h2><img src="images/career02.png" alt=""></h2>
                                <div><div class="career02-item">
                                <a href="#" class="career-mov mov02"><img src="images/mov02.jpg" alt=""></a>
                                </div></div>
                            </li>
                            <li>
                                <h2><img src="images/career03.png" alt=""></h2>
                                <div><div class="career03-item">
                                <a href="#" class="career-mov mov03"><img src="images/mov03.jpg" alt=""></a>
                                </div></div>
                            </li>
                            <li>
                                <h2><img src="images/career04.png" alt=""></h2>
                                <div><div class="career04-item">
                                <a href="#" class="career-mov mov04"><img src="images/mov04.jpg" alt=""></a>
                                </div></div>
                            </li>
                            <li>
                                <h2><img src="images/career05.png" alt=""></h2>
                                <div><div class="career05-item">
                                <a href="#" class="career-mov mov05"><img src="images/mov05.jpg" alt=""></a>
                                </div></div>
                            </li>
                        </ol>
                    </div>
                </div>
                </div>
            </div>
            <div class="content media">
                <div class="main">
                    <div class="media-message clearfix">
                        <div class="media-news">
                            <div class="news-wrap">
                                <div class="news-nav clearfix">
                                    <ul>
                                        <li class="active">最新</li>
                                        <li>系統</li>
                                        <li>活動</li>
                                        <li>攻略</li>
                                    </ul>
                                    <a href="/bulletin/list/1" class="news-more" title="查看更多《吞噬蒼穹》新闻公告"></a>
                                </div>

                                @foreach($list as $k => $val)
                                @php
                                    $active = ($k == 0) ? 'active' : '';
                                @endphp
                                <ul class="news-item-wrap {{ $active }}">
                                    @foreach($val as $i => $v)
                                    @if($i == 0)
                                    <a href="/bulletin/info/{{ $v->id }}" class="news-tag-title" title="【{{ $type_list[ $k + 1 ] }}】{{ $v->title }}">【{{ $type_list[ $k + 1 ] }}】{{ $v->title }}</a>
                                    @else
                                    <li class="clearfix">
                                        <div class="news-link">
                                            <a href="/bulletin/info/{{ $v->id }}" title="【{{ $type_list[ $k + 1 ] }}】{{ $v->title }}">【{{ $type_list[ $k + 1 ] }}】{{ $v->title }}</a>
                                        </div>
                                        <span>{{ substr($v->date, 5, 10) }}</span>
                                    </li>
                                    @endif
                                    @endforeach
                                </ul>
                                @endforeach
                            </div>
                        </div>
                        <div class="media-data media-rotate">
                            <div class="media-rotate-front">
                                <img src="images/data-icon.png" alt="遊戲資料">
                            </div>
                            <div class="media-rotate-back clearfix">
                                <a class="media-back-item1" href="#" onclick="javascript:alert('敬請期待')" target="_blank" title="新手指南">
                                    <img src="images/icon-forum.png" alt="新手指南">
                                    <p>新手指南</p>
                                </a>
                                <a class="media-back-item2" href="#" onclick="javascript:alert('敬請期待')" target="_blank" title="精彩活動">
                                    <img src="images/data-fish.png" alt="精彩活動">
                                    <p>精彩活動</p>
                                </a>
                                <a class="media-back-item3" href="#" onclick="javascript:alert('敬請期待')" target="_blank" title="特色玩法">
                                    <img src="images/data-career.png" alt="特色玩法">
                                    <p>特色玩法</p>
                                </a>
                                <a class="media-back-item4" href="#" onclick="javascript:alert('敬請期待')" target="_blank" title="高手進階">
                                    <img src="images/data-action.png" alt="高手進階">
                                    <p>高手進階</p>
                                </a>
                            </div>
                        </div>
                        <div class="media-contact media-rotate">
                            <div class="media-rotate-front">
                                <img src="images/contact-icon.png" alt="社群討論">
                            </div>
                            <div class="media-rotate-back media-rotate-back2 clearfix">
                                <a class="media-back-item1" href="https://www.facebook.com/TSCQOnline/?epa=SEARCH_BOX"  title="官方粉絲團">
                                    <img src="images/icon-fb.png" alt="官方粉絲團">
                                    <p>官方粉絲團</p>
                                </a>
                                <a class="media-back-item2" href="https://forum.gamer.com.tw/A.php?bsn=26711" target="_blank" title="巴哈姆特">
                                    <img src="images/icon-bh.png" alt="巴哈姆特">
                                    <p>巴哈姆特</p>
                                </a>
                                <a class="media-back-item3" href="https://www.gamebase.com.tw/forum/76571/thread/ALL" target="_blank" title="遊戲基地">
                                    <img src="images/icon-gb.png" alt="遊戲基地">
                                    <p>遊戲基地</p>
                                </a>
                                <a class="media-back-item4" href="https://www.oasisgames.com.tw/issue_tickets/new" target="_blank" title="客服中心">
                                    <img src="images/icon-server.png" alt="客服中心">
                                    <p>客服中心</p>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

	@section('js')
    <script>
        //banner
        var swiper1 = new Swiper('.banner-swiper .swiper-container', {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            autoplay: 3000,
            pagination: '.banner-nav',
            paginationClickable: true,
            prevButton: '.banner-prev',
            nextButton: '.banner-next',
        });

        //feature
        var swiper2 = new Swiper('.feture-swiper .swiper-container', {
            watchSlidesProgress: true,
            slidesPerView: 'auto',
            centeredSlides: true,
            loop: true,
            loopedSlides: 5,
            // autoplay: 3000,
            prevButton: '.febtn-prev',
            nextButton: '.febtn-next',
            pagination: '.feture-nav',
            paginationClickable: true,
            paginationBulletRender: function (swiper, index, className) {
                if (index === 0) {
                    return '<span class="' + className + '">◆3D仙俠大世界◆</span>';
                }
                if (index === 1) {
                    return '<span class="' + className + '">◆全空間立體空戰◆</span>';
                }
                if (index === 2) {
                    return '<span class="' + className + '">◆全天候自由戰鬥◆</span>';
                }
                if (index === 3) {
                    return '<span class="' + className + '">◆全體系原味修仙◆</span>';
                }
                if (index === 4) {
                    return '<span class="' + className + '">◆全裝備屬性傳承◆</span>';
                }
            },
            onProgress: function (swiper, progress) {
                for (i = 0; i < swiper.slides.length; i++) {
                    var slide = swiper.slides.eq(i);
                    var slideProgress = swiper.slides[i].progress;
                    modify = 1;
                    if (Math.abs(slideProgress) > 1) {
                        modify = (Math.abs(slideProgress) - 1) * 0.3 + 1;
                    }
                    translate = slideProgress * modify * 260 + 'px';
                    scale = 1 - Math.abs(slideProgress) / 5;
                    zIndex = 999 - Math.abs(Math.round(10 * slideProgress));
                    slide.transform('translateX(' + translate + ') scale(' + scale + ')');
                    slide.css('zIndex', zIndex);
                    slide.css('opacity', 1);
                    if (Math.abs(slideProgress) > 3) {
                        slide.css('opacity', 0);
                    }
                }
            },
            onSetTransition: function (swiper, transition) {
                for (var i = 0; i < swiper.slides.length; i++) {
                    var slide = swiper.slides.eq(i)
                    slide.transition(transition);
                }

            },
            //处理分页器bug
            onSlideChangeStart: function (swiper) {
                if (swiper.activeIndex == 4) {
                    swiper.bullets.eq(9).addClass('swiper-pagination-bullet-active');
                    console.log(swiper.bullets.length);
                }
            }
        });
    </script>
    @stop

@endsection
