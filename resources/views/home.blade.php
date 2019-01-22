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
        <div id="pop-evt4" class="pop-evt">
            <a href="#" class="pop-evt-close"></a>
            <div class="pop-evt-swiper">
               <div class="pop-evt-t4"></div>
                <div class="pop-rs-nav">
                    <span class="active">◆歡天喜地慶開服◆</span>
                    <span>◆每日簽到領豪禮◆</span>
                    <span>◆每周豪禮領不停◆</span>
                    <span>◆每日抽籤好運到◆</span>
                    <span>◆宗派福利領不停◆</span>
                    <span>◆戰力排行爭奪戰◆</span>
                    <span>◆預先儲值享返利◆</span>
                    <span>◆累計儲值加碼送◆</span>
                </div>
                <div class="pop-rs-wrap">
                    <div class="pop-rs-item active">
                        <h2>歡天喜地慶開服</h2>
                        <h3>【活動時間】</h3>
                        新服開服後~永久
                        <h3>【活動方式】</h3>
                        每日登入遊戲可領取奬勵。<br>(依次領取，首次登入領取第一天奬勵，次日未登入，第三日登入領取第二天奬勵)
                        <h3>【活動奬勵】</h3>
                        <table>
                            <tr>
                                <th>第一天</th>
                                <td>200000綁定靈石 x 1</td>
                            </tr>
                            <tr>
                                <th>第二天</th>
                                <td>蘊靈石 x 10、引魂石 x 10、銀纓羊(7天) x 1</td>
                            </tr>
                            <tr>
                                <th>第三天</th>
                                <td>乾卦碎片 x 1、坤掛碎片 x 1、100綁定元寶 x 1</td>
                            </tr>
                            <tr>
                                <th>第四天</th>
                                <td>震卦碎片 x 1、撰掛碎片 x 1、100綁定元寶 x 1</td>
                            </tr>
                            <tr>
                                <th>第五天</th>
                                <td>3級金剛石 x 1、太昊令 x 2、300綁定元寶 x 1</td>
                            </tr>
                            <tr>
                                <th>第六天</th>
                                <td>傳承石 x 1、暴靈丹 x 3、300綁定元寶 x 1</td>
                            </tr>
                            <tr>
                                <th>第七天</th>
                                <td>蒼穹周卡 x 1、蒼穹會員(3天) x 1、幽冥令 x 2</td>
                            </tr>
                        </table>
                        <h3>【活動辦法】</h3>
                        <ol>
                            <li>玩家登入遊戲後可在"運營活動-成長七日禮"中領取每日奬勵。</li>
                            <li>玩家每天只能領取一次，依次領取。</li>
                            <li>每日奬勵凌晨6點刷新。</li>
                        </ol>
                       <h3>【注意事項】</h3>
                        <ol>
                            <li>以上活動奬勵不可要求兌換成現金或其他有價、無價的物品，如因不可抗拒之因素，本公司有權更換等值商品之權利。</li>
                            <li>活動時間內若遇伺服器斷線或其他不可抗拒之因素而無法參加活動，將不給予任何賠償及活動補辦。</li>
                            <li>參加本活動即同意接受本活動注意事項之規範，如有違反本活動注意事項之行為，主辦單位得取消其參加或得奬資格，並對於任何破壞本活動之行為保留相關法律追訴權。</li>
                        </ol>
                    </div>
                    <div class="pop-rs-item">
                        <h2>每日簽到領豪禮</h2>
                        <h3>【活動時間】</h3>
                        新服開服後~永久
                        <h3>【活動方式】</h3>
                        達成一定簽到次數可領取對應奬勵。
                        <h3>【活動奬勵】</h3>
                        <table>
                            <tr>
                                <th>簽到2次</th>
                                <td>50000綁定靈石 x 1、素真丹 x 1</td>
                            </tr>
                            <tr>
                                <th>簽到5次</th>
                                <td>80000綁定靈石 x 1、素真丹 x 2、氣血葫蘆(小) x 1</td>
                            </tr>
                            <tr>
                                <th>簽到8次</th>
                                <td>60000綁定靈石 x 2、素真丹 x 2、<br>鍛體丹 x 2、蘊靈石 x 10</td>
                            </tr>
                            <tr>
                                <th>簽到15次</th>
                                <td>60000綁定靈石 x 3、素真丹 x 3、<br>安魂石 x 2、蘊靈石 x 10</td>
                            </tr>
                            <tr>
                                <th>簽到25次</th>
                                <td>300000綁定靈石 x 1、素真丹 x 5、<br>蘊靈石 x 15、傳承石 x 1、白澤奔原獸(7日) x 1</td>
                            </tr>
                        </table>
                        <h3>【活動辦法】</h3>
                        <ol>
                            <li>玩家登入遊戲後可在"奬勵領取-福利大廳-簽到奬勵"中進行簽到，達成一定簽到次數可領取對應奬勵。</li>
                            <li>每日凌晨6點後可簽到當天。</li>
                        </ol>
                       <h3>【注意事項】</h3>
                        <ol>
                            <li>以上活動奬勵不可要求兌換成現金或其他有價、無價的物品，如因不可抗拒之因素，本公司有權更換等值商品之權利。</li>
                            <li>活動時間內若遇伺服器斷線或其他不可抗拒之因素而無法參加活動，將不給予任何賠償及活動補辦。</li>
                            <li>參加本活動即同意接受本活動注意事項之規範，如有違反本活動注意事項之行為，主辦單位得取消其參加或得奬資格，並對於任何破壞本活動之行為保留相關法律追訴權。</li>
                        </ol>
                    </div>
                    <div class="pop-rs-item">
                        <h2>每周豪禮領不停</h2>
                        <h3>【活動時間】</h3>
                        新服開服後~永久
                        <h3>【活動方式】</h3>
                        按自然週循環，每日簽到可領取對應奬勵。
                        <h3>【活動奬勵】</h3>
                        <table>
                            <tr>
                                <th>星期一</th>
                                <td>100000綁定靈石 x 1</td>
                            </tr>
                            <tr>
                                <th>星期二</th>
                                <td>蘊靈石 x 10</td>
                            </tr>
                            <tr>
                                <th>星期三</th>
                                <td>100綁定元寶 x 1</td>
                            </tr>
                            <tr>
                                <th>星期四</th>
                                <td>引魂石 x 10</td>
                            </tr>
                            <tr>
                                <th>星期五</th>
                                <td>蒼穹會員(3天) x 1</td>
                            </tr>
                            <tr>
                                <th>星期六</th>
                                <td>強化洗鍊包 x 1<br>(內含：蘊靈石 x 10、引魂石 x 10)</td>
                            </tr>
                            <tr>
                                <th>星期日</th>
                                <td>隨機坐騎禮包 x 1<br>(內含：四合踏雪羊(7天) x 1、狴犴戰天虎(7天) x 1、<br>玄冥疾風龜(7天) x 1，隨機一隻)</td>
                            </tr>
                        </table>
                        <h3>【活動辦法】</h3>
                        <ol>
                            <li>玩家登入遊戲後可在"運營活動-周簽到"中領取每週對應奬勵。</li>
                            <li>該奬勵每週循環。</li>
                            <li>該奬勵當天未領取，隔天則錯過奬勵。</li>
                            <li>每日奬勵凌晨6點刷新。</li>
                        </ol>
                       <h3>【注意事項】</h3>
                        <ol>
                            <li>以上活動奬勵不可要求兌換成現金或其他有價、無價的物品，如因不可抗拒之因素，本公司有權更換等值商品之權利。</li>
                            <li>活動時間內若遇伺服器斷線或其他不可抗拒之因素而無法參加活動，將不給予任何賠償及活動補辦。</li>
                            <li>參加本活動即同意接受本活動注意事項之規範，如有違反本活動注意事項之行為，主辦單位得取消其參加或得奬資格，並對於任何破壞本活動之行為保留相關法律追訴權。</li>
                        </ol>
                    </div>
                    <div class="pop-rs-item">
                        <h2>每日抽籤好運到</h2>
                        <h3>【活動時間】</h3>
                        新服開服後~永久
                        <h3>【活動方式】</h3>
                        每日上線1小時可獲得一次免費抽奬機會。
                        <h3>【活動奬勵(隨機1種)每週更新】</h3>
                        <table>
                            <tr>
                                <td>蘊靈石 x 5</td>
                                <td>引魂石 x 2</td>
                                <td>啤酒 x 10</td>
                                <td>素真丹(300天修為) x 1</td>
                            </tr>
                            <tr>
                                <td>29000綁定靈石 x 1</td>
                                <td>素真丹(80天修為) x 1</td>
                                <td>流光玉符 x 2</td>
                                <td>50000綁定靈石 x1</td>
                            </tr>
                        </table>
                        <h3>【活動辦法】</h3>
                        <ol>
                            <li>玩家登入遊戲後累積在線時間1小時，可在"奬勵領取-福利大廳-線上抽奬"中進行抽奬。</li>
                            <li>一天只可獲得1次免費抽奬。</li>
                            <li>連續獲得免費抽奬機會為4次，第5次開始需消耗元寶。</li>
                        </ol>
                       <h3>【注意事項】</h3>
                        <ol>
                            <li>以上活動奬勵不可要求兌換成現金或其他有價、無價的物品，如因不可抗拒之因素，本公司有權更換等值商品之權利。</li>
                            <li>活動時間內若遇伺服器斷線或其他不可抗拒之因素而無法參加活動，將不給予任何賠償及活動補辦。</li>
                            <li>參加本活動即同意接受本活動注意事項之規範，如有違反本活動注意事項之行為，主辦單位得取消其參加或得奬資格，並對於任何破壞本活動之行為保留相關法律追訴權。</li>
                        </ol>
                                </div>
                    <div class="pop-rs-item">
                        <h2>宗派福利領不停</h2>
                        <h3>【活動時間】</h3>
            新服開服後~永久
            <h3>【活動方式】</h3>
            到達一定宗派貢獻點數可領取對應奬勵。
            <h3>【活動奬勵】</h3>
            <table>
                <tr>
                    <th>加入宗派</th>
                    <td>50綁定元寶 x 1、七明芝丹 x 1、宗派權杖(貢獻) x 3</td>
                </tr>
                <tr>
                    <th>貢獻達200點</th>
                    <td>50綁定元寶 x 1、炫酷座騎禮包(3天)(隨機座騎) x 1、七明芝丹 x 1</td>
                </tr>
                <tr>
                    <th>貢獻達1500點</th>
                    <td>50綁定元寶 x 2、靚麗時裝禮包(3天)(隨機時裝) x 1、暴靈丹 x 5</td>
                </tr>
                <tr>
                    <th>貢獻達2700點</th>
                    <td>50元綁定元寶 x 2、4級化瘀水 x 20、4級活絡水 x 20、<br>和風暖圖譜 x 1、倚清秋圖譜 x 1</td>
                </tr>
                <tr>
                    <th>貢獻達4500點</th>
                    <td>50元綁定元寶 x 2、5級化瘀水 x 20、5級活絡水 x 20、<br>強骨丹 x 1、道行球 x 1</td>
                </tr>
                <tr>
                    <th>貢獻達13000點</th>
                    <td>50元綁定元寶 x 4、5級化瘀水 x 50、5級活絡水 x 50、<br>煉骨丹 x 1、道行球 x 1</td>
                </tr>
            </table>
            <h3>【活動辦法】</h3>
            <ol>
                <li>玩家到達一定宗派貢獻點數後，可在"奬勵領取-福利大廳-宗派福利"中進行領奬。</li>
                <li>每個階段完成後，奬勵僅可領取1次。</li>
            </ol>
                   <h3>【注意事項】</h3>
            <ol>
                <li>以上活動奬勵不可要求兌換成現金或其他有價、無價的物品，如因不可抗拒之因素，本公司有權更換等值商品之權利。</li>
                <li>活動時間內若遇伺服器斷線或其他不可抗拒之因素而無法參加活動，將不給予任何賠償及活動補辦。</li>
                <li>參加本活動即同意接受本活動注意事項之規範，如有違反本活動注意事項之行為，主辦單位得取消其參加或得奬資格，並對於任何破壞本活動之行為保留相關法律追訴權。</li>
            </ol>
                    </div>
                    <div class="pop-rs-item">
                        <h2>戰力排行爭奪戰</h2>
                        <h3>【活動時間】</h3>
            新服開服後14日內，2019/1/17 17:00 ~ 2019/1/30 23:59
            <h3>【活動方式】</h3>
            活動結束時，榮譽排行-戰力排名前10的玩家可領取對應奬勵。
            <h3>【活動奬勵】</h3>
            <table>
                <tr>
                    <th>第1名</th>
                    <td>九霄應龍坐騎(永久) x 1、九鳳帝凰坐騎(永久) x 1、仙緣寶盒 x 1</td>
                </tr>
                <tr>
                    <th>第2-3名</th>
                    <td>九鳳帝凰坐騎(永久) x 1、仙緣寶盒 x 1</td>
                </tr>
                <tr>
                    <th>第4-10名</th>
                    <td>仙緣寶盒 x 1</td>
                </tr>
                <tr>
                    <th>綜合戰力達70000</th>
                    <td>稱號-出類拔萃(7日)</td>
                </tr>
            </table>
            <h3>【活動辦法】</h3>
            <ol>
                <li>最終結果以遊戲中「榮譽排行-戰力排行」為準。</li>
                <li>排名奬勵透過遊戲中郵件進行發放。</li>
                <li>官方保證，全服唯一坐騎，不會再透過其他途徑產出。</li>
            </ol>
                   <h3>【注意事項】</h3>
            <ol>
                <li>以上活動奬勵不可要求兌換成現金或其他有價、無價的物品，如因不可抗拒之因素，本公司有權更換等值商品之權利。</li>
                <li>活動時間內若遇伺服器斷線或其他不可抗拒之因素而無法參加活動，將不給予任何賠償及活動補辦。</li>
                <li>參加本活動即同意接受本活動注意事項之規範，如有違反本活動注意事項之行為，主辦單位得取消其參加或得奬資格，並對於任何破壞本活動之行為保留相關法律追訴權。</li>
            </ol>
                    </div>
                    <div class="pop-rs-item">
                        <h2>歡天喜地慶開服</h2>
                        <h3>【活動時間】</h3>
            新服開服後~永久
            <h3>【活動方式】</h3>
            首次儲值50元台幣(100元寶)，即可領取奬勵。
            <h3>【活動奬勵】</h3>
            <table>
                <tr>
                    <td>200000綁定靈石 x 1</td>
                    <td>200綁定元寶 x 1</td>
                    <td>暴靈丹 x 2</td>
                    <td>蒼穹會員(7天) x 1</td>
                    <td>璧月流雲翼 x 1</td>
                </tr>
            </table>
            <h3>【活動辦法】</h3>
            <ol>
                <li>首儲奬勵僅可領取1次。</li>
                <li>首儲奬勵不會重置刷新。</li>
                <li>每個角色只能參與一次(同一個帳號下多個角色都可參與)</li>
            </ol>
                   <h3>【注意事項】</h3>
            <ol>
                <li>以上活動奬勵不可要求兌換成現金或其他有價、無價的物品，如因不可抗拒之因素，本公司有權更換等值商品之權利。</li>
                <li>活動時間內若遇伺服器斷線或其他不可抗拒之因素而無法參加活動，將不給予任何賠償及活動補辦。</li>
                <li>參加本活動即同意接受本活動注意事項之規範，如有違反本活動注意事項之行為，主辦單位得取消其參加或得奬資格，並對於任何破壞本活動之行為保留相關法律追訴權。</li>
            </ol>
                    </div>
                    <div class="pop-rs-item">
                        <h2>歡天喜地慶開服</h2>
                        <h3>【活動時間】</h3>
                        新服開服後~永久
                        <h3>【活動方式】</h3>
                        累計儲值達對應元寶，即可領取奬勵。
                        <h3>【活動奬勵】</h3>
                        <table>
                            <tr>
                                <th>累積兌換500元寶</th>
                                <td>60,000綁定靈石 x 1、素真丹 x 1、<br>傳承石 x 1、煉骨丹 x 1</td>
                            </tr>
                            <tr>
                                <th>累積兌換1,000元寶</th>
                                <td>100,000靈石 x 1、靈獸寶袋 x 1、<br>靈犀佩(7天) x 1、酷炫坐騎禮包(3天)(隨機坐騎) x 1</td>
                            </tr>
                            <tr>
                                <th>累積兌換5,000元寶</th>
                                <td>500,000靈石 x 1、蘊靈石 x 20、<br>引魂石 x 30、初級妖丹 x 50</td>
                            </tr>
                            <tr>
                                <th>累積兌換10,000元寶</th>
                                <td>良緣金縷衣(30天) x 1、氣血葫蘆(大) x 1、<br>還魂丹 x 20、幻靈麟(30天) x 1</td>
                            </tr>
                            <tr>
                                <th>累積兌換20,000元寶</th>
                                <td>幽冥血戰禮包 x 1、靈根兌換券 x 15、<br>3級金剛石 x 3、稱號-豪氣沖天(30天) x 1</td>
                            </tr>
                            <tr>
                                <th>累積兌換50,000元寶</th>
                                <td>蘊靈石 x 200、引魂石 x 200、仙獸寶袋 x 4、<br>火精木 x 2、冰靈葉 x 2</td>
                            </tr>
                            <tr>
                                <th>累積兌換100,000元寶</th>
                                <td>寒龍冥火裝(30天) x 1、5倍元嬰紫府丹 x 100、5級金剛石 x 2、<br>火精木 x 5、玉橡木 x 5</td>
                            </tr>
                            <tr>
                                <th>累積兌換200,000元寶</th>
                                <td>嫦娥的祝福(30天) x 1、靈根兌換券 x 45、5級金剛石 x 2、<br>玉橡木 x 5、金磁木 x 2</td>
                            </tr>
                        </table>
                        <h3>【活動辦法】</h3>
                        <ol>
                            <li>每檔奬勵僅可領取1次。</li>
                            <li>累計儲值奬勵不會重置刷新。</li>
                        </ol>
                               <h3>【注意事項】</h3>
                        <ol>
                            <li>以上活動奬勵不可要求兌換成現金或其他有價、無價的物品，如因不可抗拒之因素，本公司有權更換等值商品之權利。</li>
                            <li>活動時間內若遇伺服器斷線或其他不可抗拒之因素而無法參加活動，將不給予任何賠償及活動補辦。</li>
                            <li>參加本活動即同意接受本活動注意事項之規範，如有違反本活動注意事項之行為，主辦單位得取消其參加或得奬資格，並對於任何破壞本活動之行為保留相關法律追訴權。</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div id="pop-evt3" class="pop-vip">
            <a href="#" class="pop-evt-close"></a>
            <div class="pop-evt-swiper">
               <div class="pop-evt-t3"></div>
                <div class="pop-rs-wrap">
                    <div class="pop-rs-item active">
                        <h2>活動規則</h2>
                        <ol>
                            <li>任何金額皆可儲值，但單筆NTD$3,000以上方有額外獎勵。</li>
                            <li>若單筆儲值滿NTD$3,000以上，除等值點數外，將可獲得額外獎項。</li>
                            <li>獎項內容物請與小仙子聯繫或至官網查詢。</li>
                            <li>每月將會更改額外獎項內容，當月儲值方可獲得，獎項不得跨月領取。</li>
                            <li>額外獎項將分為三種：3000級距、6000級距及9000級距，每級距內有3種選擇。</li>
                            <li>獎項或禮品，皆無法要求更換與折現，發放完畢後亦同。</li>
                            <li>若使用者因違反遊戲管理規範遭停權，官方將有權暫停、取消或終止提供LINE@小天使會員服務。</li>
                            <li>若本服務遇不可抗力之因素，而無法執行時，本公司有權終止、修改、暫停本服務。</li>
                        </ol>
                        <h2>聯繫小天使</h2>
                        <img src="images/qr.jpg" alt="">
                        <p>LINE ID：@aus0209z</p>
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
                    <a href="http://smarturl.it/TSCQ_download" title="《吞噬蒼芎》客戶端極速下載" target="_blank">極速下載吞噬蒼芎客戶端</a>
                </div>
                <div class="head-gift">
                    <div class="head-video-btn">
                        <img src="images/mov00.jpg" alt="遊戲展示">
                    </div>
                </div>
                <div class="head-reg-iframe">
                    <a href="https://www.oasisgames.com.tw/users/sign_up" target="_blank" title="帳號註冊">帳號註冊</a>
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
