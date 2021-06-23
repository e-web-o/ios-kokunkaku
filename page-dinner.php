<?php 
	$id = 'dinner';
	get_header(null, $id);
?>
<article>
    <h1 class="heading for_sp"><a href="/">【公式】ながめの館 光雲閣 | 福島 岳温泉</a></h1>
    <section class="mv">
        <img src="<?= get_template_directory_uri() ?>/images/dinner/img00_header.jpg" class="for_pc" alt="お料理イメージ">
        <img src="<?= get_template_directory_uri() ?>/images/dinner/img00_header_sp.jpg" class="for_sp" alt="お料理イメージ">
    </section>

    <section id="intro" class="intro">
        <div class="inner showup">
            <h2>お料理<span>Cuisine</span></h2>
            <div class="sp-inner">
                <h3><img src="<?= get_template_directory_uri() ?>/images/dinner/img01_intro_text_01.svg" alt="季節の食に興じる雲上の幸福" width="100px"></h3>
                <img src="<?= get_template_directory_uri() ?>/images/dinner/img01_intro_01.png" class="img for_pc" alt="お料理イメージ">
                <img src="<?= get_template_directory_uri() ?>/images/dinner/img01_intro_01_sp2.jpg" class="img for_sp" alt="お料理イメージ">
            </div>
            <p >コースによっては、お魚またはお肉が選べるメイン料理をはじめ、<br class="for_pc">その日朝採りした地元有機野菜を使った料理などを含め、<br class="for_pc">お好きなものをセレクトいただけます。<br class="for_pc">眼下に広がる眺望に心休め、ゆったりと季節の食に興じる<br class="for_pc">雲上の幸福をご堪能ください。</p>
        </div>
        <div class="layer"></div>
    </section>

    <nav class="nav showup">
        <ul>
            <li><a href="#about">お食事について</a></li>
            <?php //<li><a href="#teppanyaki">鉄板焼き</a></li> ?>
            <li><a href="#special">特選料理プラン</a></li>
            <li class="line"><a href="#commitment">こだわりの食材</a></li>
            <li><a href="#restaurant">お食事処</a></li>
            <li class="line"><a href="#breakfast">朝食のご案内</a></li>
        </ul>
    </nav>

    <section id="about" class="about offset">
        <div class="inner showup">
            <h2>お食事について<span>About meals</span></h2>
            <h3><img src="<?= get_template_directory_uri() ?>/images/dinner/img02_about_text_01.svg" alt="四季折々の滋味" width="100px" class="for_pc"><span class="for_sp">四季折々の滋味</span></h3>
            <img src="<?= get_template_directory_uri() ?>/images/dinner/img02_about_01.png" class="img for_pc" alt="お食事についてイメージ">
            <img src="<?= get_template_directory_uri() ?>/images/dinner/img02_about_01_sp.png" class="img for_sp" alt="お食事についてイメージ">
            <p>お食事は自家製米やオリジナル味噌、旬のフルーツなど地産食材をふん<br class="for_pc">だんに使った創作和食膳となります。自慢のあだたら酵母牛のプランを<br class="for_pc">はじめ、四季折々の異なるメニューをお楽しみいただけます。</p>
        </div>
        <div id="slide_1" class="slide showup">
            <div class="slide-img"><img src="<?= get_template_directory_uri() ?>/images/dinner/img02_about_slide_01.jpg" alt=""></div>
            <div class="slide-img"><img src="<?= get_template_directory_uri() ?>/images/dinner/img02_about_slide_02.jpg" alt=""></div>
            <div class="slide-img"><img src="<?= get_template_directory_uri() ?>/images/dinner/img02_about_slide_03.jpg" alt=""></div>
            <div class="slide-img"><img src="<?= get_template_directory_uri() ?>/images/dinner/img02_about_slide_04.jpg" alt=""></div>
            <div class="slide-img"><img src="<?= get_template_directory_uri() ?>/images/dinner/img02_about_slide_05.jpg" alt=""></div>
            <div class="slide-img"><img src="<?= get_template_directory_uri() ?>/images/dinner/img02_about_slide_06.jpg" alt=""></div>
            <div class="slide-img"><img src="<?= get_template_directory_uri() ?>/images/dinner/img02_about_slide_07.jpg" alt=""></div>
            <div class="slide-img"><img src="<?= get_template_directory_uri() ?>/images/dinner/img02_about_slide_08.jpg" alt=""></div>
        </div>
        <div class="detail showup">
            <a href="<?= get_template_directory_uri() ?>/images/dinner/menu_today1804.jpg" data-lightbox="roadtrip" class="bloc card-img">
                <div class="text-area"><div class="text"><span class="icon"><img src="<?= get_template_directory_uri() ?>/images/icon_link.svg" alt="link" width="24px"></span>お品書き一例<span class="sub-text">Example of menu</span></div></div>
                <div class="img-area"><img src="<?= get_template_directory_uri() ?>/images/dinner/img02_about_02.jpg" alt="料理写真"></div>
            </a>
            <a href="<?= get_template_directory_uri() ?>/images/dinner/menu_order.jpg" data-lightbox="roadtrip" class="bloc card-img">
                <div class="text-area"><div class="text"><span class="icon"><img src="<?= get_template_directory_uri() ?>/images/icon_link.svg" alt="link" width="24px"></span>別注メニュー<span class="sub-text">Special order menu</span></div></div>
                <div class="img-area"><img src="<?= get_template_directory_uri() ?>/images/dinner/img02_about_03.jpg" alt="料理写真"></div>
            </a>
            <div class="bloc">
                <div class="text text-before-line">春夏秋冬のお品書き一例</div>
                <div class="links">
                    <a href="<?= get_template_directory_uri() ?>/images/dinner/menu2017sp.jpg" data-lightbox="roadtrip" class="link"><span class="icon"><img src="<?= get_template_directory_uri() ?>/images/icon_link.svg" alt="link" width="24px"></span>春</a>
                    <a href="<?= get_template_directory_uri() ?>/images/dinner/menu2017summer.jpg" data-lightbox="roadtrip" class="link"><span class="icon"><img src="<?= get_template_directory_uri() ?>/images/icon_link.svg" alt="link" width="24px"></span>夏</a>
                    <a href="<?= get_template_directory_uri() ?>/images/dinner/menu09.jpg" data-lightbox="roadtrip" class="link"><span class="icon"><img src="<?= get_template_directory_uri() ?>/images/icon_link.svg" alt="link" width="24px"></span>秋</a>
                    <a href="<?= get_template_directory_uri() ?>/images/dinner/menu03.jpg" data-lightbox="roadtrip" class="link"><span class="icon"><img src="<?= get_template_directory_uri() ?>/images/icon_link.svg" alt="link" width="24px"></span>冬</a>
                </div>
            </div>
        </div>
    </section>

    <section id="teppanyaki" class="teppanyaki">
        <?php 
        // <div class="inner showup">
        //     <h2>鉄板焼き<span>Teppanyaki</span></h2>
        //     <h3><img src="../images/dinner/img03_teppanyaki_text_01.svg" alt="厳選した質の良い国産牛" width="100px"></h3>
        //     <img src="../images/dinner/img03_teppanyaki_01.png" class="img" alt="鉄板焼きイメージ">
        //     <p>厳選した質の良い国産牛をシンプルな鉄板焼きで。食欲をそそる香りと、<br class="for_pc">上質な脂の弾ける音が特別な時間を演出します。人気の鉄板焼きを是非<br class="for_pc">ご堪能下さい。</p>
        // </div>
        ?>
        <div class="detail showup">
            <a href="https://reserve.489ban.net/client/kounkaku/0/plan" class="bloc card-img" target="_blank">
                <div class="text-area"><div class="text"><span class="bg-gold">国産牛プラン</span><span class="icon"><img src="<?= get_template_directory_uri() ?>/images/icon_link.svg" alt="link" width="24px"></span>上層階客室<span class="sub-text">Upper story room</span></div></div>
                <div class="img-area"><img src="<?= get_template_directory_uri() ?>/images/dinner/img03_teppanyaki_02.jpg" alt="上層階客室写真"></div>
            </a>
            <a href="https://reserve.489ban.net/client/kounkaku/0/plan" class="bloc card-img" target="_blank">
                <div class="text-area"><div class="text"><span class="bg-gold">国産牛プラン</span><span class="icon"><img src="<?= get_template_directory_uri() ?>/images/icon_link.svg" alt="link" width="24px"></span>その他客室<span class="sub-text">Other room</span></div></div>
                <div class="img-area"><img src="<?= get_template_directory_uri() ?>/images/dinner/img03_teppanyaki_03.jpg" alt="その他客室写真"></div>
            </a>
        </div>
    </section>

    <section id="special" class="special">
        <div class="inner showup">
            <h2>特選料理プラン<span>Special meal</span></h2>
            <h3><img src="<?= get_template_directory_uri() ?>/images/dinner/img04_special_text_01.svg" alt="当地素材にこだわった料理" width="100px" class="for_pc"><span class="for_sp">当地素材にこだわった料理</span></h3>
            <img src="<?= get_template_directory_uri() ?>/images/dinner/img04_special_01.png" class="img for_pc" alt="特選料理プランイメージ">
            <img src="<?= get_template_directory_uri() ?>/images/dinner/img04_special_01_sp.png" class="img for_sp" alt="特選料理プランイメージ">
            <p>福島ならではのご当地素材にこだわった料理長自慢の特選料理をご提供<br class="for_pc">します。4種類のコースからお選びいただけます。</p>
        </div>
        <div class="detail">
            <div class="bloc showup">
                <img src="<?= get_template_directory_uri() ?>/images/dinner/img04_special_02.jpg" alt="海鮮コース写真" class="img">
                <h4 class="text-title text-before-line">海鮮コース</h4>
                <p class="text-description">相馬港から上がる鮮魚を使ってのシーズン料理をご提供します。</p>
            </div>
            <div class="bloc showup uv2">
                <img src="<?= get_template_directory_uri() ?>/images/dinner/img04_special_03.jpg" alt="あだたら酵母牛コース" class="img">
                <h4 class="text-title text-before-line">あだたら酵母牛コース</h4>
                <p class="text-description">当地酪農業の国分農場で飼料に二本松の酒屋から酒粕の酵母を使い育てた酵母牛を使った料理をご提供します。</p>
            </div>
            <div class="bloc showup uv3">
                <img src="<?= get_template_directory_uri() ?>/images/dinner/img04_special_04.jpg" alt="そば膳コース" class="img">
                <h4 class="text-title text-before-line">そば膳コース</h4>
                <p class="text-description">県内産そばを地元の製粉屋で挽き、挽きたてのそばの味を大切に調理し、そば好きな方に喜んでもらえるようにご提供します。</p>
            </div>
        </div>
    </section>

    <section id="commitment" class="commitment">
        <div class="inner showup">
            <h2>こだわりの食材<span>Commitment</span></h2>
            <h3>厳選された地元産の食材</h3>
        </div>
        <div class="detail type-1">
            <div class="bloc showup">
                <img src="<?= get_template_directory_uri() ?>/images/dinner/img05_commitment_01.jpg" alt="福島県産コシヒカリ写真" class="img">
                <h4 class="text-title text-before-line">福島県産コシヒカリ</h4>
                <p class="text-description">お米を最も美味しく炊くために全て自家<br class="for_pc">精米！毎日食べるものだから特別に吟味<br class="for_pc">したい！！安心してご賞味下さい。</p>
            </div>
            <div class="bloc showup uv2">
                <img src="<?= get_template_directory_uri() ?>/images/dinner/img05_commitment_02.jpg" alt="味噌写真" class="img">
                <h4 class="text-title text-before-line">味噌</h4>
                <p class="text-description">40年以上変わらない味を守るお味噌に、<br class="for_pc">料理長がその時代に合わせて調合した<br class="for_pc">光雲閣オリジナルブレンド。</p>
            </div>
            <div class="bloc showup uv3">
                <img src="<?= get_template_directory_uri() ?>/images/dinner/img05_commitment_03.jpg" alt="旬の地産食材写真" class="img">
                <h4 class="text-title text-before-line">旬の地産食材</h4>
                <p class="text-description">くだものの王国ふくしま、デザートには<br class="for_pc">旬のくだものをアレンジ。</p>
            </div>
        </div>
        <div class="detail type-2 showup">
            <img src="<?= get_template_directory_uri() ?>/images/dinner/img05_commitment_04.jpg" alt="" class="img">
            <div class="text-area">
                <h3>二本松の4つの蔵元<span>The Four Kuramoto of Nihonmatsu</span></h3>
                <p>福島県内外で高い評価を得ている二本松市内の４つ<br class="for_pc">の蔵元。安達太良山から湧き出る水を使った地酒は、<br class="for_pc">品評会で数々の好成績を収めています。金賞受賞最<br class="for_pc">多の地酒をご体感ください。</p>
            </div>
        </div>
        <div class="detail type-3">
            <a href="http://okunomatsu.co.jp/" class="bloc card-img showup" target="_blank">
                <div class="text-area"><div class="text"><span class="icon"><img src="<?= get_template_directory_uri() ?>/images/icon_link.svg" alt="link" width="24px"></span>奥の松酒造<span class="sub-text">Okunomatsu</span></div></div>
                <div class="img-area"><img src="<?= get_template_directory_uri() ?>/images/dinner/img05_commitment_05.jpg" alt="奥の松酒造ロゴ"></div>
            </a>
            <a href="http://www.daishichi.com/" class="bloc card-img showup uv2" target="_blank">
                <div class="text-area"><div class="text"><span class="icon"><img src="<?= get_template_directory_uri() ?>/images/icon_link.svg" alt="link" width="24px"></span>大七酒造<span class="sub-text">Daishichi</span></div></div>
                <div class="img-area"><img src="<?= get_template_directory_uri() ?>/images/dinner/img05_commitment_06.jpg" alt="大七酒造ロゴ"></div>
            </a>
            <a href="http://senkonari.com/" class="bloc card-img showup" target="_blank">
                <div class="text-area"><div class="text"><span class="icon"><img src="<?= get_template_directory_uri() ?>/images/icon_link.svg" alt="link" width="24px"></span>千功成酒造<span class="sub-text">Senkonari</span></div></div>
                <div class="img-area"><img src="<?= get_template_directory_uri() ?>/images/dinner/img05_commitment_07.jpg" alt="千功成酒造ロゴ"></div>
            </a>
            <a href="http://www.ninki.co.jp/" class="bloc card-img showup uv2" target="_blank">
                <div class="text-area"><div class="text"><span class="icon"><img src="<?= get_template_directory_uri() ?>/images/icon_link.svg" alt="link" width="24px"></span>人気酒造<span class="sub-text">Ninki</span></div></div>
                <div class="img-area"><img src="<?= get_template_directory_uri() ?>/images/dinner/img05_commitment_08.jpg" alt="人気酒造ロゴ"></div>
            </a>
        </div>
        <div class="detail type-4 showup">
            <div class="text-title">お飲み物メニュー</div>
            <div class="text-title text-before-line"></div>
            <div class="inner">
                <div class="bloc">
                    <div class="text-title">ビール<span>Beer</span></div>
                    <div class="text">- アサヒスーパードライ<br>- アサヒドライゼロ（ノンアルコール）<br>-キリン一番搾り</div>
                    <div class="text-title">サワー<span>Sour</span></div>
                    <div class="text">- レモン<br>- ピーチ<br>- 巨峰<br>- 梅</div>
                    <div class="text-title">ワイン<span>Wine</span></div>
                    <div class="text">- 赤ワイン・白ワイン<br>（仕入により産地＆銘柄変更有。<br>お問い合わせ下さい）</div>
                    <div class="text-title">ウイスキー<span>Whiskey</span></div>
                    <div class="text">- アサヒスーパードライ<br>- スコッチ<br>- ニッカ（ハイボール）</div>
                </div>
                <div class="bloc">
                    <div class="text-title">麦焼酎<span>Barley shochu</span></div>
                    <div class="text">- 吉四六<br>- いいちこ<br>- おくの</div>
                    <div class="text-title">芋焼酎<span>Potato shochu</span></div>
                    <div class="text">- 光雲天竺<br>- おくの</div>
                    <div class="text-title">ソフトドリンク<span>Softdrinkt</span></div>
                    <div class="text">- ウーロン茶<br>- オレンジジュース<br>- コカコーラ<br>- ジンジャーエール<br>- サイダー<br>- 100%桃<br>- 100%林檎<br>- こだわり 有機珈琲（ホット）</div>
                </div>
                <div class="bloc">
                    <div class="text-title">地酒 奥の松<span>Okunomatsu</span></div>
                    <div class="text">- 純米生酒（冷酒）<br>- 全米吟醸（冷酒）<br>- あだたら吟醸（冷酒）<br>- 大吟醸雫酒 伊兵衛（冷酒）</div>
                    <div class="text-title">地酒 千功成<span>Senkonari</span></div>
                    <div class="text">- 生貯蔵酒（冷酒）<br>- 大吟醸袋吊り（冷酒）<br>- 純米吟醸（冷酒）</div>
                    <div class="text-title">地酒 大七<span>Daishichi</span></div>
                    <div class="text">- 生酛（冷酒）<br>- 純米大吟醸 箕輪門（冷酒）<br>- 純米吟醸 皆伝（冷酒）</div>
                </div>
            </div>
        </div>
    </section>

    <section id="restaurant" class="restaurant">
        <div class="inner type-1 showup">
            <h2>お食事処<span>Restaurant</span></h2>
            <h3><img src="<?= get_template_directory_uri() ?>/images/dinner/img06_restaurant_text_01.svg" alt="山水の間" width="100px" class="for_pc"><span class="for_sp">山水の間</span></h3>
            <img src="<?= get_template_directory_uri() ?>/images/dinner/img06_restaurant_01.png" class="img for_pc" alt="山水の間イメージ">
            <img src="<?= get_template_directory_uri() ?>/images/dinner/img06_restaurant_01_sp.png" class="img for_sp" alt="山水の間イメージ">
            <p>※山水の間4～7はカラオケはご利用いただけません。<br>※お子様もご利用いただけます。<br>※全席禁煙となっております。<br>※山水の間1～3は座敷の部屋となっております。カラオケをご利用いただけます。<br>※夕食の開始時間は17:30～となり、最終は19:30～となります。<br>※夕食のお時間に間に合わない場合はお食事処「味呂」でご利用いただけるラーメン<br>　券をお渡しさせていただきます。</p>
        </div>
        <div class="slide slide_2 showup">
            <div class="slide-img"><img src="<?= get_template_directory_uri() ?>/images/dinner/img06_restaurant_slide1_01.jpg" alt="山水の間4"></div>
            <div class="slide-img"><img src="<?= get_template_directory_uri() ?>/images/dinner/img06_restaurant_slide1_02.jpg" alt="山水の間5"></div>
            <div class="slide-img"><img src="<?= get_template_directory_uri() ?>/images/dinner/img06_restaurant_slide1_03.jpg" alt="山水の間6"></div>
            <div class="slide-img"><img src="<?= get_template_directory_uri() ?>/images/dinner/img06_restaurant_slide1_04.jpg" alt="山水の間5"></div>
        </div>
        <div id="restaurant_jyuraku" class="inner type-2 showup">
            <h3><img src="<?= get_template_directory_uri() ?>/images/dinner/img06_restaurant_text_02.svg" alt="寿楽亭" class="for_pc"><span class="for_sp">寿楽亭</span></h3>
            <div class="for_sp description">今からおよそ150年前、<br>中国の風流人の別邸を飾ってきた<br>建具や門戸をそのまま持ち込んだ<br>風格あふれる佇まい</div>
            <img src="<?= get_template_directory_uri() ?>/images/dinner/img06_restaurant_02.png" alt="寿楽亭イメージ" class="img for_pc">
            <img src="<?= get_template_directory_uri() ?>/images/dinner/img06_restaurant_02_sp.png" alt="寿楽亭イメージ" class="img for_sp">
            <p>「寿楽亭」は異国へ旅する別天地気分で、旬との出会いをお楽しみいた<br class="for_pc">だきたいとの願いから生まれました。眼下に広がる眺望に心休め、ゆっ<br class="for_pc">たりと季節の食に興じる雲上の幸福をご堪能ください。フロアー中央の<br class="for_pc">天井は吹き抜けになっており開放感たっぷり。<br><br><span class="text-detail">※恐れ入りますが、小さなお子様はご遠慮させていただいております。いらっし<br class="for_pc">ゃる場合は別プラン等小宴会場にてご用意となりますのでご了承下さいませ。<br>※全席禁煙となっております。<br>※夕食の開始時間は18:00～となり、最終は19:30～となります。<br>※夕食のお時間に間に合わない場合はお食事処「味呂」でご利用いただけるラー<br class="for_pc">メン券をお渡しさせていただきます。</span></p>
        </div>
        <div class="slide slide_2 showup">
            <div class="slide-img"><img src="<?= get_template_directory_uri() ?>/images/dinner/img06_restaurant_slide2_01.jpg" alt="寿楽亭"></div>
            <div class="slide-img"><img src="<?= get_template_directory_uri() ?>/images/dinner/img06_restaurant_slide2_02.jpg" alt="寿楽亭"></div>
            <div class="slide-img"><img src="<?= get_template_directory_uri() ?>/images/dinner/img06_restaurant_slide2_03.jpg" alt="寿楽亭"></div>
        </div>
        <div class="inner type-3 showup">
            <h3><img src="<?= get_template_directory_uri() ?>/images/dinner/img06_restaurant_text_03.svg" alt="光雲の間" class="for_pc"><span class="for_sp">光雲の間</span></h3>
            <img src="<?= get_template_directory_uri() ?>/images/dinner/img06_restaurant_03.png" alt="光雲の間イメージ" class="img for_pc">
            <img src="<?= get_template_directory_uri() ?>/images/dinner/img06_restaurant_03_sp.png" alt="光雲の間イメージ" class="img for_sp">
            <p>大宴会場「光雲の間」は1～4迄あり、ご人数に合わせてスパンで仕切<br class="for_pc">りができます。座敷宴はもちろんイステーブル席でのご宴会も承れます。<br>ご相談下さいませ。他高座椅子10脚有。<br><br><span class="bloc white">営業時間</span><span class="indent">昼宴会　　10:30～15:30</span><span class="indent">夜宴会　　17:30～21:00（内２時間～２時間半）</span><span class="indent text-detail">※忘年会等お時間スタートが遅くなる場合はご相談下さい。</span></p>
        </div>
    </section>

    <section id="breakfast" class="breakfast">
        <div class="inner showup">
            <h2>朝食のご案内<span>Breakfast</span></h2>
            <h3><img src="<?= get_template_directory_uri() ?>/images/dinner/img07_breakfast_text_01.svg" alt="30種類以上の朝食バイキン" width="100px" class="for_pc"><span class="for_sp">30種類以上の朝食バイキン</span></h3>
            <img src="<?= get_template_directory_uri() ?>/images/dinner/img07_breakfast_01.png" class="img for_pc" alt="朝食イメージ">
            <img src="<?= get_template_directory_uri() ?>/images/dinner/img07_breakfast_01_sp.png" class="img for_sp" alt="朝食イメージ">
            <p>季節により常に30種類以上の品数をお揃えしております。 福島県産コ<br class="for_pc">シヒカリを利用した自家製パンや、人にも胃にもやさしい『変わり粥』<br class="for_pc">は大人から小さなお子様にも喜ばれております。 岳温泉名物の渡辺豆腐<br class="for_pc">店『玉どうふ』も大人気！ お好みの薬味でお召し上がり下さいませ。<br class="for_pc">※お日にちにより和食膳の場合もあります。<br><br><span class="bloc white">営業時間</span><span class="indent">7:15～9:00</span></p>
        </div>
        <div class="detail showup">
            <div class="text-title">新型コロナウィルスの対策につきまして</div>
            <div class="text-title text-before-line"></div>
            <p>朝食バイキングは手指消毒用アルコールスプレーをして頂いてから会場にお入り頂いております。<br>ご自由にお使い頂けるビニール手袋をご用意しております。<br>トング等の３０分毎の交換を徹底しております。<br>ゆったりとお座り頂けるようなお席のセッティングでご用意しております。</p>
        </div>
    </section>

</article>
<?php get_template_part('include/_footer'); ?>
<?php get_footer(); ?>