<?php 
	$id = 'room';
	get_header(null, $id);
?>
<article>
    <h1 class="heading for_sp"><a href="/">【公式】ながめの館 光雲閣 | 福島 岳温泉</a></h1>
    <section class="mv">
        <img src="<?= get_template_directory_uri() ?>/images/room/img00_header.jpg" alt="お部屋イメージ" class="for_pc">
        <img src="<?= get_template_directory_uri() ?>/images/room/img00_header_sp.jpg" alt="お部屋イメージ" class="for_sp">
    </section>

    <section id="intro" class="intro">
        <div class="inner showup">
            <h2>お部屋<span>Rooms</span></h2>
            <div class="sp-inner">
            <h3><img src="<?= get_template_directory_uri() ?>/images/room/img01_intro_text_01.svg" alt="眺めの空間 個性的なお部屋"></h3>
            <img src="<?= get_template_directory_uri() ?>/images/room/img01_intro_01.png" alt="お部屋イメージ" class="img for_pc">
            <img src="<?= get_template_directory_uri() ?>/images/room/img01_intro_01_sp.png" alt="お部屋イメージ" class="img for_sp">
            </div>
            <p>眼下に広がる眺望を満喫でき、しかもちょっとユニークで<br class="for_pc">個性豊かなお部屋をご用意しております。 <br>和室と洋室が一体になったお部屋やアジアンテイストあふれるお部屋、 <br class="for_pc">また、バリアフリーのお部屋などがございます。</p>
        </div>
        <div class="layer"></div>
    </section>

    <nav class="nav showup">
        <ul>
            <li><a href="#modern">和風モダンルーム</a></li>
            <li><a href="#sunroom" class="text-double">サンルーム&テラス<br>露天風呂付和洋室</a></li>
            <li class="line"><a href="#terrace">テラス付和室</a></li>
            <li><a href="#japanese">和洋室</a></li>
            <li><a href="#barrierfree">バリアフリー和洋室</a></li>
            <li class="line"><a href="#nextroom">次の間付和室</a></li>
            <li><a href="#public">一般和室</a></li>
            <li><a href="#one-day">お部屋休憩プラン</a></li>
            <li class="line"><a href="#overview">客室概要</a></li>
        </ul>
    </nav>

    <section id="modern" class="modern">
        <div class="inner showup">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="<?= get_template_directory_uri() ?>/images/room/img02_modern_slide_01.jpg" alt="525号室"></div>
                    <div class="swiper-slide"><img src="<?= get_template_directory_uri() ?>/images/room/img02_modern_slide_02.jpg" alt="526号室"></div>
                    <div class="swiper-slide"><img src="<?= get_template_directory_uri() ?>/images/room/img02_modern_slide_03.jpg" alt="527号室"></div>
                    <div class="swiper-slide"><img src="<?= get_template_directory_uri() ?>/images/room/img02_modern_slide_04.jpg" alt="528号室"></div>
                    <div class="swiper-slide"><img src="<?= get_template_directory_uri() ?>/images/room/img02_modern_slide_05.jpg" alt="529号室"></div>
                    <div class="swiper-slide"><img src="<?= get_template_directory_uri() ?>/images/room/img02_modern_slide_06.jpg" alt="530号室"></div>
                </div>
                <div class="swiper-pagination"></div>
                <div id="room_no" class="room-no-view"></div>
            </div>
        </div>
        <div class="detail showup">
            <h3><img src="<?= get_template_directory_uri() ?>/images/room/img02_modern_text_01.svg" alt="和風モダンルーム" class="for_pc"><img src="<?= get_template_directory_uri() ?>/images/room/img02_modern_text_01_sp.svg" alt="和風モダンルーム" class="for_sp"></h3>
            <p class="for_sp">最上階の展望室<br>すべて異なる六部屋<br></p>
            <p>最上階コンフォートフロアに、すべてタイプの違う6室。<br>和室・洋室、両方ございます。<br>ながめの館の最上階からの眺めはもちろん絶景です。<br>阿武隈山系の山並みと、木のぬくもり香る空間が、<br class="for_pc">極上の癒しのひとときをお届けします。<br><br><span class="bloc white">室数</span><span class="indent">6室（5F）</span><span class="bloc white">広さ</span><span class="indent">10〜12.5畳</span><span class="bloc white">定員</span><span class="indent">2名〜6名</span><span class="bloc white">備考</span><span class="indent">全室洗浄器付きトイレ付き<br>全客室は禁煙となります。</span></p>
            <div class="link-area">
                <a href="https://reserve.489ban.net/client/kounkaku/0/plan" target="_blank">ご宿泊プランを見る</a>
            </div>
        </div>
    </section>

    <section id="sunroom" class="sunroom">
        <div class="detail">
            <img src="<?= get_template_directory_uri() ?>/images/room/img03_sunroom_01.jpg" alt="サンルーム＆テラス露天風呂付和洋室イメージ" class="catch-img showup">
            <h3 class="showup"><img src="<?= get_template_directory_uri() ?>/images/room/img03_sunroom_text_01.svg" alt="サンルーム＆テラス露天風呂付和洋室" class="for_pc">
            <img src="<?= get_template_directory_uri() ?>/images/room/img03_sunroom_text_01_sp.svg" alt="サンルーム＆テラス露天風呂付和洋室" class="for_sp"></h3>
            <h4 class="for_sp showup">最上階で<br>眺めのバスタイムを</h4>
            <p class="showup">展望風呂に浸かりながらの夜景は格別です。<br>贅沢なバスタイムをお楽しみください。<br><br><span class="bloc white">室数</span><span class="indent">1室（5F）</span><span class="bloc white">広さ</span><span class="indent">10畳+ツイン</span><span class="bloc white">料金</span><span class="indent">2名様ご利用時1泊2食の場合<br>平日：25,300円～（税込）<br>休前日：27,500～（税込）<br>特殊期間はご料金アップとなります。</span><span class="bloc white">定員</span><span class="indent">2名～6名(3名様以上ご相談となります)</span><span class="bloc white">備考</span><span class="indent">源泉引き湯100％かけ流し温泉を引いております。<br>3名様以上ご利用の場合料金はご相談ください。<br>全客室は禁煙となります。</span></p>
            <div class="tel-area showup"><img src="<?= get_template_directory_uri() ?>/images/room/img03_sunroom_text_02.svg" alt="0243-24-2101"></div>
        </div>
    </section>

    <section id="terrace" class="terrace">
        <div class="detail">
            <img src="<?= get_template_directory_uri() ?>/images/room/img04_terrace_01.jpg" alt="テラス付和室イメージ" class="catch-img showup">
            <h3 class="showup"><img src="<?= get_template_directory_uri() ?>/images/room/img04_terrace__text_01.svg" alt="テラス付和室" class="for_pc"><img src="<?= get_template_directory_uri() ?>/images/room/img04_terrace__text_01_sp.svg" alt="テラス付和室" class="for_sp"></h3>
            <h4 class="for_sp showup">最上階<br>癒しのリゾート空間</h4>
            <p class="showup">最上階のアジアンテイスト癒し館。<br>お部屋の中にはバリ調の彫刻が埋め込まれており、<br class="for_pc">異国情緒を感じさせる癒しの空間です。<br><br><span class="bloc white">室数</span><span class="indent">2室（5F）</span><span class="bloc white">広さ</span><span class="indent">12畳</span><span class="bloc white">定員</span><span class="indent">5名</span><span class="bloc white">備考</span><span class="indent">テラス・洗浄器付きトイレ<br class="for_pc">全客室は禁煙となります。<br>※内1室、展望風呂付き＝温泉ではございません。</span></p>
            <div class="link-area showup">
                <a href="https://reserve.489ban.net/client/kounkaku/0/plan" target="_blank">ご宿泊プランを見る</a>
            </div>
        </div>
    </section>

    <section id="japanese" class="japanese">
        <div class="detail">
            <img src="<?= get_template_directory_uri() ?>/images/room/img05_japanese_01.jpg" alt="和洋室イメージ" class="catch-img showup">
            <h3 class="showup"><img src="<?= get_template_directory_uri() ?>/images/room/img05_japanese_text_01.svg" alt="和洋室" class="for_pc"><img src="<?= get_template_directory_uri() ?>/images/room/img05_japanese_text_01_sp.svg" alt="和洋室" class="for_sp"></h3>
            <h4 class="for_sp showup">阿武隈山系を一望する<br>絶景の客室</h4>
            <p class="showup">お部屋に入ると手前にベットが二つ、<br class="for_pc">窓際が6畳の畳スペースがございます。<br>畳スペースに布団を敷いて、5名様まで大丈夫です。<br><br><span class="bloc white">室数</span><span class="indent">2室（5F）</span><span class="bloc white">広さ</span><span class="indent">12畳</span><span class="bloc white">定員</span><span class="indent">5名</span><span class="bloc white">備考</span><span class="indent">テラス・洗浄器付きトイレ<br class="for_pc">全客室は禁煙となります。<br>※内1室、展望風呂付き＝温泉ではございません。</span></p>
            <div class="link-area showup">
                <a href="https://reserve.489ban.net/client/kounkaku/0/plan" target="_blank">ご宿泊プランを見る</a>
            </div>
        </div>
    </section>

    <section id="barrierfree" class="barrierfree">
        <div class="detail">
            <img src="<?= get_template_directory_uri() ?>/images/room/img06_barrierfree_01.jpg" alt="バリアフリー和洋室イメージ" class="catch-img showup">
            <h3 class="showup"><img src="<?= get_template_directory_uri() ?>/images/room/img06_barrierfree_text_01.svg" alt="バリアフリー和洋室" class="for_pc"><img src="<?= get_template_directory_uri() ?>/images/room/img06_barrierfree_text_01_sp.svg" alt="バリアフリー和洋室" class="for_sp"></h3>
            <h4 class="for_sp showup">どなたでも安心の<br>バリアフリー客室</h4>
            <p class="showup">バリアフリーになっておりますので、<br class="for_pc">どなたでも安心にお過ごしいただけます。<br><br><span class="bloc white">室数</span><span class="indent">1室（4F）</span><span class="bloc white">広さ</span><span class="indent">12畳</span><span class="bloc white">定員</span><span class="indent">2名～5名</span><span class="bloc white">備考</span><span class="indent">全客室は禁煙となります。</span></p>
            <div class="tel-area showup"><img src="<?= get_template_directory_uri() ?>/images/room/img06_barrierfree_text_02.svg" alt="0243-24-2101"></div>
        </div>
    </section>

    <section id="nextroom" class="nextroom">
        <div class="detail">
            <img src="<?= get_template_directory_uri() ?>/images/room/img07_nextroom_01.jpg" alt="次の間付和室イメージ" class="catch-img showup">
            <h3 class="showup"><img src="<?= get_template_directory_uri() ?>/images/room/img07_nextroom_text_01.svg" alt="次の間付和室" class="for_pc"><img src="<?= get_template_directory_uri() ?>/images/room/img07_nextroom_text_01_sp.svg" alt="次の間付和室" class="for_sp"></h3>
            <h4 class="for_sp showup">二間続き<br>大人数でも広々安心</h4>
            <p>二間続きの広々和室は、合計20畳。<br>ゆったりとしたソファーも洗面台も二つなので、人数が多くても安心です。<br>ご家族・グループでのお泊まりにおすすめです。<br><br><span class="bloc white">室数</span><span class="indent">4室（各階１室）</span><span class="bloc white">広さ</span><span class="indent">20畳</span><span class="bloc white">定員</span><span class="indent">4名～10名</span><span class="bloc white">備考</span><span class="indent">洗面台2つ、洗浄器付きトイレ・バス付き<br>全客室は禁煙となります。</span></p>
            <div class="link-area showup">
                <a href="https://reserve.489ban.net/client/kounkaku/0/plan" target="_blank">ご宿泊プランを見る</a>
            </div>
        </div>
    </section>

    <section id="public" class="public">
        <div class="detail">
            <img src="<?= get_template_directory_uri() ?>/images/room/img08_public_01.jpg" alt="一般和室イメージ" class="catch-img showup">
            <h3 class="showup"><img src="<?= get_template_directory_uri() ?>/images/room/img08_public_text_01.svg" alt="一般和室" class="for_pc"><img src="<?= get_template_directory_uri() ?>/images/room/img08_public_text_01_sp.svg" alt="一般和室" class="for_sp"></h3>
            <h4 class="for_sp showup">阿武隈山系を一望する<br>絶景の客室</h4>
            <p class="showup">全室東向きで、2階から4階のお部屋になります。<br>大きな窓からは阿武隈山系を一望できます。<br>アジアンテイストの癒し館と10畳、<br class="for_pc">もしくは12.5畳の和室がございます。<br><br><span class="bloc white">室数</span><span class="indent">26室（2F8室・3F9室・4F9室）</span><span class="bloc white">広さ</span><span class="indent">10～12.5畳</span><span class="bloc white">定員</span><span class="indent">2名～6名</span><span class="bloc white">備考</span><span class="indent">全室洗浄器付きトイレ付き（バス付き25室・バスなし1室）<br>全客室は禁煙となります。</span></p>
            <div class="link-area showup">
                <a href="https://reserve.489ban.net/client/kounkaku/0/plan" target="_blank">ご宿泊プランを見る</a>
            </div>
        </div>
    </section>

    <section id="one-day" class="one-day">
        <div class="inner">
            <h2 class="showup">お部屋休憩プラン<span>One-day use plan</span></h2>
            <h3 class="showup"><img src="<?= get_template_directory_uri() ?>/images/room/img09_one-day_text_01.svg" alt="2〜3名様向けお部屋で日帰り休憩" width="100px" class="for_pc"><span class="for_sp">2〜3名様向けお部屋で日帰り休憩</span></h3>
            <img src="<?= get_template_directory_uri() ?>/images/room/img09_one-day_01.png" class="img showup for_pc" alt="お部屋休憩プランイメージ">
            <img src="<?= get_template_directory_uri() ?>/images/room/img09_one-day_01_sp.png" class="img showup for_sp" alt="お部屋休憩プランイメージ">
            <p class="showup"><span class="bloc white">2名様利用料金</span><span class="indent">お一人様3,300円（税込）×人数</span><span class="bloc white">3名様以上 料金</span><span class="indent">お一人様2,200円（税込）×人数</span><span class="bloc white">時間</span><span class="indent">11:00～15:00</span></p>
        </div>
    </section>

    <section id="overview" class="overview">
        <div class="inner showup">
            <h2>客室概要<span>Overview</span></h2>
            <div class="description">
                <p>全客室は禁煙となります。<br>各フロアに喫煙コーナーがあり、<br class="for_pc">3Fにはアイコス専用コーナーがございます。<br>団体・個人様でご利用の際、<br class="for_pc">お休みになる時のみの追加ルームもございます。<br>詳細はお問い合わせ・ご相談くださいませ。</p>
                <p><span class="bloc glay">共通備品・アメニティ</span><span class="indent">テレビ・電話・冷蔵庫・冷暖房・洗面セット・湯沸かしポット・浴衣・バスタオル・タオル・歯ブラシ・石けん・シャンプー・リンス・ティッシュ・シェーバー・靴拭き・ハンドタオル・シャワーキャップ</span><span class="bloc glay">貸出品</span><span class="indent">ドライヤー・アイロン・加湿器</span></p>
            </div>
        </div>
    </section>

</article>
<?php get_template_part('include/_footer'); ?>
<?php get_footer(); ?>
