<?php 
	$id = 'facility';
	get_header(null, $id);
?>
<div id="modal-overlay"></div>
<article>
    <h1 class="heading for_sp"><a href="/">【公式】ながめの館 光雲閣 | 福島 岳温泉</a></h1>
    <section class="mv">
        <img src="<?= get_template_directory_uri() ?>/images/facility/img00_header.jpg" alt="館内案内イメージ" class="for_pc">
        <img src="<?= get_template_directory_uri() ?>/images/facility/img00_header_sp.jpg" alt="館内案内イメージ" class="for_sp">
    </section>

    <section id="intro" class="intro">
        <div class="inner">
            <h2 class="showup">館内案内<span>Facilities</span></h2>
            <div class="sp-inner">
            <h3 class="showup"><img src="<?= get_template_directory_uri() ?>/images/facility/img01_intro_text_01.svg" alt="寛ぎのひととき 高台の静かな一軒館"></h3>
            <img src="<?= get_template_directory_uri() ?>/images/facility/img01_intro_01.png" alt="館内案内イメージ" class="img for_pc showup">
            <img src="<?= get_template_directory_uri() ?>/images/facility/img01_intro_01_sp.png" alt="館内案内イメージ" class="img for_sp showup">
            </div>
            <p class="showup">岳温泉街の最も高台に位置する当館は、<br class="for_pc">自然に包まれた落ち着いた佇まい。眺めの良さが自慢です。<br class="for_pc">素晴らしい眺望に恵まれた館内には、お食事処や宴会場、温泉、<br class="for_pc">リラクゼーションなど、癒しの空間が広がります。<br>用途に合わせた心尽くしのおもてなしで、お客様をお迎えいたします。</p>
            <div class="movie movie-area">
                <div class="movie-img">
                    <img src="<?= get_template_directory_uri() ?>/images/facility/img01_intro_03.jpg" alt="" class="for_pc">
                    <img src="<?= get_template_directory_uri() ?>/images/facility/img01_intro_03_sp.jpg" alt="" class="for_sp">
                </div>
                <div class="text">※お客様のドローンでの撮影は禁止とさせていただいております。</div>
                <video class="video" muted>
                    <source src="<?= get_template_directory_uri() ?>/movies/facility.mp4" type="video/mp4" class="for_pc"></source>
                    <source src="<?= get_template_directory_uri() ?>/movies/facility_1.mp4" type="video/mp4" class="for_sp"></source>
                </video>
            </div>
        </div>
        <div class="layer"></div>
    </section>

    <section id="elevation" class="elevation">
        <div class="inner">
            <h2 class="showup">館内立面図<span>Elevation view of the building</span></h2>
            <h3 class="showup">館内全てが絶景、居心地の良い空間</h3>
            <div class="floor-table showup">
                <div class="stay-floor-area">
                    <div class="title">宿泊フロア</div>
                    <div class="floor-text-area">
                        <div class="floor-text-bloc white">
                            <div class="floor-text-title">
                                <div class="text-inner">
                                    <div class="text-floor"><span>5</span>階</div>
                                    <div class="text-floor-sub">The fifth floor</div>
                                </div>
                            </div>
                            <div class="floor-text-guide"><div class="text-inner"><span>客室（521～533、512、514）</span><span>喫煙所</span></div></div>
                        </div>
                        <div class="floor-text-bloc">
                            <div class="floor-text-title">
                                <div class="text-inner">
                                    <div class="text-floor"><span>4</span>階</div>
                                    <div class="text-floor-sub">The fourth floor</div>
                                </div>
                            </div>
                            <div class="floor-text-guide"><div class="text-inner"><span>客室（421～432）</span><span><a href="#meeting">会議室</a></span><span>喫煙所</span><span><a href="#banquet">バンケットホール「清風」</a></span></div></div>
                        </div>
                        <div class="floor-text-bloc white">
                            <div class="floor-text-title">
                                <div class="text-inner">
                                    <div class="text-floor"><span>3</span>階</div>
                                    <div class="text-floor-sub">The third floor</div>
                                </div>
                            </div>
                            <div class="floor-text-guide"><div class="text-inner"><span>客室（322～332）</span><span>大宴会場「光雲の間」</span><span>小宴会場「山水の間」</span><span>喫煙所</span><span>IQOS専用コーナー</span><span><a href="/dinner/#restaurant_jyuraku">レストラン「寿楽亭」</a></span></div></div>
                        </div>
                        <div class="floor-text-bloc">
                            <div class="floor-text-title">
                                <div class="text-inner">
                                    <div class="text-floor"><span>2</span>階</div>
                                    <div class="text-floor-sub">The second floor</div>
                                </div>
                            </div>
                            <div class="floor-text-guide"><div class="text-inner"><span>客室（222～232、241～247）</span><span><a href="/spa/#outdoor">展望大浴場（男女）</a></span><span><a href="/spa/#private">貸切風呂</a></span><br class="for_pc"><span><a href="/spa/#after">湯上がり処「眺寿庵」</a></span><span><a href="#restaurant">ラーメン処「味呂」</a></span><span><a href="#food">クラブ「花」</a></span><br class="for_pc"><span><a href="#relaxation">リラクゼーション</a></span><span>自動販売機</span><span>喫煙所</span></div></div>
                        </div>
                    </div>
                </div>
                <div class="stay-floor-area">
                    <div class="title none">　</div>
                    <div class="floor-text-area">
                        <div class="floor-text-bloc white">
                            <div class="floor-text-title">
                                <div class="text-inner">
                                    <div class="text-floor"><span>1</span>階</div>
                                    <div class="text-floor-sub">The first floor</div>
                                </div>
                            </div>
                            <div class="floor-text-guide"><div class="text-inner"><span>フロント</span><span>売店</span><span>喫煙所</span><span><a href="#food">サロン「エル・パティオ」</a></span><br class="for_pc"><span><a href="/pet/">ペットハウス（専用風呂）</a></span></div></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="floor-comment">
                <div class="img">
                    <img src="<?= get_template_directory_uri() ?>/images/facility/img02_elevation_01.png" alt="IQOS専用コーナーマーク">
                </div>
                <p>3FにIQOS専用コーナーがございます。</p>
            </div>
            <div class="floor-comment">
                <div class="img">
                    <img src="<?= get_template_directory_uri() ?>/images/facility/img02_elevation_02.png" alt="喫煙コーナーマーク">
                </div>
                <p>各フロアに喫煙コーナーがございます。</p>
            </div>
        </div>
    </section>

    <nav class="nav showup">
        <ul>
            <li><a href="#">庭園</a></li>
            <li><a href="#">ブライダル</a></li>
            <li class="line"><a href="#">宴会場・会議場</a></li>
            <li><a href="#">飲食施設</a></li>
            <li><a href="#">リラクゼーション</a></li>
            <li class="line text-double"><a href="#">バリアフリーへの<br>取り組み</a></li>
            <li class="line"><a href="#">基本情報</a></li>
        </ul>
    </nav>

    <section id="garden" class="garden">
        <div class="inner">
            <h2 class="showup">庭園<span>Garden</span></h2>
            <p class="showup">冬には綿帽子を被り、夜には幻想的にライトアップ、四季折々の顔を見せる庭園は、<br class="for_pc">5～6月はツツジやサツキ、7月にはアジサイやヤマユリなどの木々花々が咲き乱れます。<br>静かな中庭を歩いていくと滝が流れ、奥に抜けると山の湯の露天風呂がございます。<br>星や木々を眺めながらゆったりとお過ごしください。</p>
        </div>
        <div class="inner movie-area">
            <div class="movie">
                <img src="<?= get_template_directory_uri() ?>/images/facility/img03_garden_01.jpg" alt="" class="for_pc">
                <img src="<?= get_template_directory_uri() ?>/images/facility/img03_garden_01_sp.jpg" alt="" class="for_sp">
                <div class="movie-text">※お客様のドローンでの撮影は禁止とさせていただいております。</div>
                <video class="video" muted>
                    <source src="<?= get_template_directory_uri() ?>/movies/garden1.mp4" type="video/mp4"></source>
                </video>
            </div>
            <div class="movie">
                <img src="<?= get_template_directory_uri() ?>/images/facility/img03_garden_02.jpg" alt="" class="for_pc">
                <img src="<?= get_template_directory_uri() ?>/images/facility/img03_garden_02_sp.jpg" alt="" class="for_sp">
                <div class="movie-text">※お客様のドローンでの撮影は禁止とさせていただいております。</div>
                <video class="video" muted>
                    <source src="<?= get_template_directory_uri() ?>/movies/garden2.mp4" type="video/mp4"></source>
                </video>
            </div>
        </div>
        <div id="slide" class="inner slide showup">
            <div class="slide-img"><img src="<?= get_template_directory_uri() ?>/images/facility/img03_garden_slide_01.jpg" alt=""></div>
            <div class="slide-img"><img src="<?= get_template_directory_uri() ?>/images/facility/img03_garden_slide_02.jpg" alt=""></div>
            <div class="slide-img"><img src="<?= get_template_directory_uri() ?>/images/facility/img03_garden_slide_03.jpg" alt=""></div>
            <div class="slide-img"><img src="<?= get_template_directory_uri() ?>/images/facility/img03_garden_slide_04.jpg" alt=""></div>
            <div class="slide-img"><img src="<?= get_template_directory_uri() ?>/images/facility/img03_garden_slide_05.jpg" alt=""></div>
        </div>
    </section>

    <section id="bridal" class="bridal">
        <div class="inner">
            <h2 class="showup">ブライダル<span>Bridal</span></h2>
            <h3 class="showup"><img src="<?= get_template_directory_uri() ?>/images/facility/img04_bridal_text_01.svg" alt="2人の思いを最高なカタチで" width="100px" class="for_pc"><span class="for_sp">2人の思いを最高なカタチで</span></h3>
            <img src="<?= get_template_directory_uri() ?>/images/facility/img04_bridal_01.png" class="img for_pc showup" alt="ブライダルイメージ">
            <img src="<?= get_template_directory_uri() ?>/images/facility/img04_bridal_01_sp.png" class="img for_sp showup" alt="ブライダルイメージ">
            <p class="showup">2人の想いを最高なカタチで残したい。100人いれば100通りの想いが<br class="for_pc">あるように、光雲閣ではひとりひとりそれぞれのスタイルに合った結婚<br class="for_pc">式を挙げることができます。<br>素敵な思い出をいつまでも。結婚記念日には毎年当館で、大切な人と素<br class="for_pc">敵な思い出を語り合える、そんな場所にしていただけたら幸いです。</p>
            <div class="tel-area showup">
                <img src="<?= get_template_directory_uri() ?>/images/facility/img04_bridal_text_02.svg" alt="0243-24-2101">
            </div>
            <a href="http://chayuka-w.com/" class="card-img showup" target="_blank">
                <div class="text-area"><div class="text"><span class="icon"><img src="<?= get_template_directory_uri() ?>/images/icon_link.svg" alt="link" width="24px"></span>ウェディングプランナー<span class="sub-text">Wedding produce *Chayuka*</span></div></div>
                <div class="img-area"><img src="<?= get_template_directory_uri() ?>/images/facility/img04_bridal_02.jpg" alt="ウェディングプランナーイメージ"></div>
            </a>
        </div>
    </section>

    <section id="banquet" class="banquet">
        <div class="inner">
            <h2 class="showup">バンケットホール「清風」<span>Banquet Hall “SEIFU”</span></h2>
            <h3 class="showup"><img src="<?= get_template_directory_uri() ?>/images/facility/img05_banquet_text_01.svg" alt="華やかな宴におごそかな式典に" width="100px" class="for_pc"><span class="for_sp">華やかな宴におごそかな式典に</span></h3>
            <img src="<?= get_template_directory_uri() ?>/images/facility/img05_banquet_01.png" class="img for_pc showup" alt="バンケットホール「清風」写真">
            <img src="<?= get_template_directory_uri() ?>/images/facility/img05_banquet_01_sp.png" class="img for_sp showup" alt="バンケットホール「清風」写真">
            <p class="showup">パーティや会議、さまざまな用途でご利用いただけるバンケットホール<br class="for_pc">です。お気軽にお問い合わせ・ご予約をお待ちしております。<br><span class="small">※こちらの会場は禁煙となります。</span><br><br><span class="white">立食パーティ</span><span class="indent">250名</span><span class="white">会議</span><span class="indent">180名</span><span class="white">総面積</span><span class="indent">242㎡</span><span class="white">ステージ面積</span><span class="indent">7×2m</span><span class="white">フローリング</span><span class="indent">11×11m</span><span class="white">備品</span><span class="indent comp">音響・照明・カラオケ・ビデオデッキ・カセットテープデッキ・CDデ<br class="for_pc">ッキ・ワイヤレスマイク等装備・プロジェクター（スクリーン使用可）</span></p>
            <div class="tel-area showup">
                <img src="<?= get_template_directory_uri() ?>/images/facility/img05_banquet_text_02.svg" alt="0243-24-2101">
            </div>
            <div class="mark showup">
                <img src="<?= get_template_directory_uri() ?>/images/facility/img05_banquet_text_03.svg" alt="4階">
            </div>
        </div>
    </section>

    <section id="meeting" class="meeting">
        <div class="inner">
            <h2 class="showup">会議室<span>Meeting room</span></h2>
            <h3 class="showup"><img src="<?= get_template_directory_uri() ?>/images/facility/img06_meeting_text_01.svg" alt="様々な用途でご利用可能" width="100px" class="for_pc"><span class="for_sp">様々な用途でご利用可能</span></h3>
            <img src="<?= get_template_directory_uri() ?>/images/facility/img06_meeting_01.png" class="img for_pc showup" alt="会議室写真">
            <img src="<?= get_template_directory_uri() ?>/images/facility/img06_meeting_01_sp.png" class="img for_sp showup" alt="会議室写真">
            <p class="showup">広々と使用できる会議室です。多目的にも利用が可能です。<br>お気軽にお問い合わせ・ご予約をお待ちしております。<br><br><span class="white">会議</span><span class="indent">10名～30名</span><span class="white">スクール形式</span><span class="indent">35名様</span><span class="white">総面積</span><span class="indent">80㎡</span><span class="white">備品</span><span class="indent comp">ビデオデッキ・カセットデッキ・ＤＶＤプレーヤー・マイク・プロジェ<br class="for_pc">クター・スクリーン</span></p>
            <div class="tel-area showup">
                <img src="<?= get_template_directory_uri() ?>/images/facility/img06_meeting_text_02.svg" alt="0243-24-2101">
            </div>
            <div class="mark showup">
                <img src="<?= get_template_directory_uri() ?>/images/facility/img06_meeting_text_03.svg" alt="4階">
            </div>
        </div>
    </section>

    <section id="restaurant" class="restaurant">
        <div class="inner">
            <div class="bloc type1">
                <img src="<?= get_template_directory_uri() ?>/images/facility/img07_restaurant_01.jpg" alt="">
                <div class="text-area showup">
                    <h2>お食事処 「味呂」<span>Restaurant</span></h2>
                    <p>お時間によりお蕎麦・ラーメン・餃子・生ビール・<br class="for_pc">ソフトドリンク等取り揃えております。<br><span class="small">※団体様の場合はご相談下さい。<br>※夜の営業は不定休です。お電話にてお問い合わせ下さい。</span></p>
                </div>
            </div>
            <div class="bloc type1 showup uv2">
                <div class="text-area">
                    <p><span class="white">営業時間</span><span class="indent small">- 昼　軽食コーナー<br>11:30～14:00（L.O. 13:30）<br>- 夜　ラーメンコーナー<br>1月～11月／20:00～23:00（L.O. 22:30）<br>12月／21:00～24:00（L.O. 23:30）</span></p>
                </div>
                <img src="<?= get_template_directory_uri() ?>/images/facility/img07_restaurant_text_01.svg" alt="0243-24-2101" class="tel">
            </div>
            <div class="bloc type2 showup">
                <h3><img src="<?= get_template_directory_uri() ?>/images/facility/img07_restaurant_text_02.svg" alt="日帰りお得バック"></h3>
                <div class="text-area">
                    <p><span class="gray">下記セットメニュー＋ご入浴</span><br>通常1,950円　→ <span class="text-gold big">1,750</span><span class="text-gold">円</span>（税込)<br>※事前予約も承ります。<br><br><span class="gray">合鴨汁付けそば</span><br>1,200円（税込）<br>※その他、うどん・各種軽食もございます。</p>
                </div>
                <div class="mark">
                    <img src="<?= get_template_directory_uri() ?>/images/facility/img07_restaurant_text_04.svg" alt="セットメニュー">
                </div>
            </div>
            <div class="bloc type2 showup">
                <h3><img src="<?= get_template_directory_uri() ?>/images/facility/img07_restaurant_text_03.svg" alt="昼限定味呂おむすびバイキング"></h3>
                <div class="text-area">
                    <p>バイキング＋セットメニュー・コーヒー付き＋ご入浴<br><br><span class="gray">バイキング＋天婦羅ざるそば（温・冷）＋ご入浴</span><br>通常1,950円　→ <span class="text-gold big">1,750</span><span class="text-gold">円</span>（税込)<br>※事前予約も承ります。<br>※そばアレルギーの方はうどんへ変更可能。お申し出下さい。<br><br><span class="gray">バイキング＋合鴨汁付けそば（温・冷）＋ご入浴</span><br>通常1,950円　→ <span class="text-gold big">1,750</span><span class="text-gold">円</span>（税込)<br>※事前予約も承ります。<br>※そばアレルギーの方はうどんへ変更可能。お申し出下さい。<br><br>バイキングの内容<br>—</p>
                </div>
                <div class="text-double">
                    <p><span class="text-gold">おむすび Riceball</span><br>- 昆布<br>- 梅<br>- 鮭<br>- シーチキン<br>- 明太子<br>- 焼きおむすび（醤油味・味噌味など）</p>
                    <p><span class="text-gold">生野菜 Vegetables</span><br>- 季節の物3種類（トマト・キャベツ・胡瓜など）<br><br><span class="text-gold">香の物 Pickles</span><br>- 3種類</p>
                </div>
            </div>
            <div class="bloc type2 showup">
                <h3><img src="<?= get_template_directory_uri() ?>/images/facility/img07_restaurant_text_05.svg" alt="夜のラーメンコーナー"></h3>
                <div class="text-double">
                    <p><span class="gray">下記セットメニュー＋ご入浴</span><br>通常1,950円　→ <span class="text-gold big">1,750</span><span class="text-gold">円</span>（税込)<br>※事前予約も承ります。</p>
                    <img src="<?= get_template_directory_uri() ?>/images/facility/img07_restaurant_02.jpg" alt="">
                </div>
            </div>
        </div>
    </section>

    <section id="food" class="food">
        <div class="inner">
            <h2 class="showup">飲食施設<span>Food and beverage</span></h2>
            <div class="detail">
                <div class="bloc showup">
                    <img src="<?= get_template_directory_uri() ?>/images/facility/img08_food_01.jpg" alt="クラブ「花」">
                    <h3>クラブ「花」</h3>
                    <p><span class="white">営業時間</span>20:30～23:00（L.O. 22:30）<br><span class="small">※二次会貸切の場合は要予約となります。</span></p>
                    <div class="mark">
                        <img src="<?= get_template_directory_uri() ?>/images/facility/img08_food_text_01.svg" alt="2階">
                    </div>
                </div>
                <div class="bloc showup uv2">
                    <img src="<?= get_template_directory_uri() ?>/images/facility/img08_food_02.jpg" alt="サロン「エル・パティオ」">
                    <h3>サロン「エル・パティオ」</h3>
                    <p><span class="white">営業時間</span>7:30～18:00<br><span class="white">昼</span>コーヒーサロン<br><span class="small">※二次会貸切の場合は要予約となります。</span></p>
                    <div class="mark">
                        <img src="<?= get_template_directory_uri() ?>/images/facility/img08_food_text_02.svg" alt="1階">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="relaxation" class="relaxation">
        <div class="inner type1">
            <h2 class="showup">リラクゼーション<span>Relaxation</span></h2>
            <h3 class="showup"><img src="<?= get_template_directory_uri() ?>/images/facility/img09_relaxation_text_01.svg" alt="とっておきの癒しを" width="100px" class="for_pc"><span class="for_sp">とっておきの癒しを</span></h3>
            <img src="<?= get_template_directory_uri() ?>/images/facility/img09_relaxation_01.png" class="img for_pc showup" alt="リラクゼーションイメージ">
            <img src="<?= get_template_directory_uri() ?>/images/facility/img09_relaxation_01_sp.png" class="img for_sp showup" alt="リラクゼーションイメージ">
            <p class="showup"><span class="middle">ご予約は内線またはフロントにて承ります</span>フットケア・ハンドケア・ヘッドケアは、それぞれ組み合わせると更に<br class="for_pc">効果的です。すべてオールハンドの施術になります。<br><span class="small">※こちらの会場は禁煙となります。</span><br><br><span class="white">場所</span><span class="indent">2F VIPルーム リラクゼーションコーナー</span><span class="white">時間</span><span class="indent">16:00～23:15（土日祝〜24:00）</span></p>
            <div class="mark showup">
                <img src="<?= get_template_directory_uri() ?>/images/facility/img09_relaxation_text_03.svg" alt="2階">
            </div>
        </div>
        <div class="inner type2 showup">
            <h3><img src="<?= get_template_directory_uri() ?>/images/facility/img09_relaxation_text_02.svg" alt="メニュー"></h3>
            <table>
                <tr>
                    <th></th><th><p>お試しコース</p></th><th><p>基本コース</p></th>
                </tr>
                <tr>
                    <td><p>足つぼ<br><span class="small">足つぼに刺激を与えます</span></p></td>
                    <td><p>10分<span class="big text-gold">1,100</span><span class="text-gold">円</span></p></td>
                    <td><p>45分<span class="big text-gold">4,400</span><span class="text-gold">円</span></p></td>
                </tr>
                <tr>
                    <td><p>ハンドケア<br><span class="small">手のひら・甲・肘まで</span></p></td>
                    <td><p>15分<span class="big text-gold">1,100</span><span class="text-gold">円</span></p></td>
                    <td><p>25分<span class="big text-gold">2,200</span><span class="text-gold">円</span></p></td>
                </tr>
                <tr>
                    <td><p>ヘッドケア<br><span class="small">頭・首・肩のケアです</span></p></td>
                    <td><p>20分<span class="big text-gold">2,200</span><span class="text-gold">円</span></p></td>
                    <td><p>30分<span class="big text-gold">3,300</span><span class="text-gold">円</span></p></td>
                </tr>
            </table>
            <table>
                <tr>
                    <td><p>全身もみほぐし・整体</p></td>
                    <td><p>40分<span class="big text-gold">4,400</span><span class="text-gold">円</span></p></td>
                    <td><p>50分<span class="big text-gold">5,500</span><span class="text-gold">円</span></p></td>
                    <td><p>60分<span class="big text-gold">6,600</span><span class="text-gold">円</span></p></td>
                </tr>
            </table>
            <p><span class="small">※全身もみほぐし・整体はお部屋にお伺い致します。<br>※上記料金は、すべて税込価格です。</span></p>
        </div>
    </section>

    <section id="barrierfree" class="barrierfree">
        <div class="inner type1">
            <h2 class="showup">バリアフリーへの取り組み<span>Efforts to Barrier Free</span></h2>
            <h3 class="showup"><img src="<?= get_template_directory_uri() ?>/images/facility/img10_barrierfree_text_01.svg" alt="車椅子でお過ごしいただけます" width="100px" class="for_pc"><span class="for_sp">車椅子でお過ごしいただけます</span></h3>
            <img src="<?= get_template_directory_uri() ?>/images/facility/img10_barrierfree_01.png" class="img for_pc showup" alt="バリアフリーイメージ">
            <img src="<?= get_template_directory_uri() ?>/images/facility/img10_barrierfree_01_sp.png" class="img for_sp showup" alt="バリアフリーイメージ">
            <p class="showup">当館は完全なバリアフリーまではいきませんが、車椅子でもご不自由の<br class="for_pc">無いよう設備面の充実も図ってまいりました。 館内には1センチ程度の<br class="for_pc">段差もございますがスロープ等で回避でき、どなた様でも滞在しやすい<br class="for_pc">よう心掛けております。<br><br><span class="white">貸し出し用車椅子</span><span class="indent">4台（無料）</span><span class="white">車椅子対応のお部屋</span><span class="indent">- 洋室<br>2室（洗浄器付きトイレ・バス付き）<br>- 和洋室<br>5室（洗浄器付きトイレ・バス付き5室、洗浄器付きトイレ付き3室）</span><span class="white">車椅子専用トイレ</span><span class="indent">3ヵ所（1階／3階／4階フロア）</span><span class="white">お食事場所</span><span class="indent">車椅子のままお食事ができます（ご予約時にお申し付けください）</span><span class="white">大浴場</span><span class="indent">段差あり（男女とも）</span><span class="white">貸切家族風呂</span><span class="indent">1ヵ所（スロープ有）/取り付け用手摺2ヶ有</span></p>
            <a href="/room/#barrierfree" class="card-img showup">
                <div class="text-area"><div class="text"><span class="icon"><img src="<?= get_template_directory_uri() ?>/images/icon_link.svg" alt="link" width="24px"></span>バリアフリー和洋室<span class="sub-text">Barrier-free rooms</span></div></div>
                <div class="img-area"><img src="<?= get_template_directory_uri() ?>/images/facility/img10_barrierfree_03.jpg" alt="バリアフリー和洋室写真"></div>
            </a>
            <div class="bg-mark"><img src="<?= get_template_directory_uri() ?>/images/facility/img10_barrierfree_02.png" alt=""></div>
        </div>
        <div class="inner type2 showup">
            <h3><img src="<?= get_template_directory_uri() ?>/images/facility/img10_barrierfree_text_02.svg" alt="取り組みについて"></h3>
            <p><span class="gray">お食事・ご入浴について</span><span class="indent">事前にお申し付けいただければ、お食事処は車椅子のままでもお食事ができるように対応さ<br class="for_pc">せていただきます。また2階には貸切風呂もあり、介添えの方とご一緒にご利用いただけま<br class="for_pc">す。</span><br><span class="gray">トイレ・浴室ともにバリアフリーのお部屋も</span><span class="indent">車椅子専用トイレは1階、3階、4階フロアにございます。エレベーターでご移動できます。<br>お部屋に付いているトイレ・浴室は一般サイズのため少々狭いかと存じます。2011年にリ<br class="for_pc">ニューアル致しました526号室、2012年リニューアルの431号室はトイレ・浴室ともに<br class="for_pc">バリアフリーとなっております。事前にご連絡いただければ、できるだけ便利なフロアをご<br class="for_pc">用意いたしますので遠慮なくお申し付けください。</span></p>
        </div>
    </section>

    <section id="information" class="information showup">
        <div class="inner type1">
            <h2>基本情報<span>Facility information</span></h2>
            <table>
                <tr>
                    <td>住所</td>
                    <td>〒964-0074　福島県二本松市岳温泉1-85</td>
                </tr>
                <tr>
                    <td>TEL&FAX</td>
                    <td>TEL／0243-24-2101　FAX／0243-24-2760</td>
                </tr>
                <tr>
                    <td>交通アクセス</td>
                    <td>東北自動車道二本松ICより15分インター出て信号右折200ｍ、<br clsss="for_pc">右折国道459号あとは1本道、温泉街を抜け高台にあるホテル</td>
                </tr>
                <tr>
                    <td>駐車場</td>
                    <td>無料駐車場有　１００台可　マイクロバス・トラックの駐車可<br>※大型の場合はご連絡下さい。</td>
                </tr>
                <tr>
                    <td>チェックイン</td>
                    <td>15:00 （最終チェックイン／20:00）</td>
                </tr>
                <tr>
                    <td>チェックアウト</td>
                    <td>10:00</td>
                </tr>
                <tr>
                    <td>総部屋数</td>
                    <td>VISA／JCB／American Express／Diner's Club／UC／JTB／<br clsss="for_pc">デビットカード<br>カード支払いの場合チェックイン時ご提示が必要となります。</td>
                </tr>
                <tr>
                    <td>キャンセルポリシー</td>
                    <td>当日　１２時から：宿泊料金の１００％<br>当日：宿泊料金の５０％<br>前日：宿泊料金の３０％<br>２日前から：宿泊料金の２０％<br>３日前から：宿泊料金の１０％</td>
                </tr>
                <tr>
                    <td>連絡なしの不泊</td>
                    <td>不泊については以下の通り頂戴いたします。 <br>連絡なしの不泊／不着 ：宿泊料金の１００％</td>
                </tr>
                <tr>
                    <td>バリアフリー対応</td>
                    <td>車椅子可／貸出用車椅子／バリアフリー用トイレ／<br clsss="for_pc">客室内に洋式トイレあり／大浴場浴槽に手すりあり／<br clsss="for_pc">館内に車椅子利用可能なトイレあり／高齢者用料理への対応可能／<br clsss="for_pc">アレルギーに配慮した料理への対応可能</td>
                </tr>
                <tr>
                    <td>その他</td>
                    <td class="bg-img">2014年10月1日より、<br clsss="for_pc">全室及びお食事会場が全て禁煙となります。<br>各フロアーに喫煙ブース有。<br>消防法令等の防火基準に適合。<br>AED(自動体外式除細動器)をフロントに設置。</td>
                </tr>
            </table>
        </div>
        <div class="inner banner-area">
            <a href="" class="card-img">
                <div class="text">
                    <p>ながめの宿光雲閣は<br><span class="text-gold middle">全館にてFREE Wi-Fi</span>が<br>ご利用いただけます。</p>
                </div>
                <div class="img-area"><img src="<?= get_template_directory_uri() ?>/images/facility/img11_information_02.jpg" alt="FREE Wi-Fi"></div>
            </a>
            <a href="" class="card-img">
                <div class="text">
                    <p><span class="text-gold">AED（自動対外除細動機）</span>を<br>フロントに設置いたしております。</p>
                </div>
                <div class="img-area"><img src="<?= get_template_directory_uri() ?>/images/facility/img11_information_03.png" alt=""></div>
            </a>
        </div>
    </section>

</article>
<?php get_template_part('include/_footer'); ?>
<?php get_footer(); ?>
