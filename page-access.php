<?php 
	$id = 'access';
	get_header(null, $id);
?>
<article>

    <section id="mv">
        <img src="<?= get_template_directory_uri() ?>/images/access/mv.jpg" class="for_pc" alt="アクセス">
        <img src="<?= get_template_directory_uri() ?>/images/access/mv_sp.jpg" class="for_sp" alt="アクセス">
    </section>

    <section id="p1">
        <div class="mainw">
            <h2 class="ch2">アクセス<br><span>Access</span></h2>
            <h3><img src="<?= get_template_directory_uri() ?>/images/access/intro_cc.svg" alt="温泉街の一番高台 自然に囲まれた一軒宿"></h3>
            <p>温泉街から300mほど、スキー場に向かって上った高台。<br>一軒だけ静かな緑に囲まれた眺めが自慢の宿です。</p>
            <ul class="cmenu cf">
                <li><a href="#gmap">マップ</a></li>
                <li><a href="#p2">アクセス方法</a></li>
                <li><a href="#p3">送迎について</a></li>
            </ul>
        </div>
        <div id="gmap"><div id="map-canvas"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3160.7588033024895!2d140.35009131560068!3d37.60783522951917!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f8a9fe93ec6747b%3A0x7fd6637c39f3a37a!2z5YWJ6Zuy6Zaj!5e0!3m2!1sja!2sjp!4v1536136870863" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen=""></iframe></div></div>
        <div class="hotelinfo mainw imgfade">
            <img src="<?= get_template_directory_uri() ?>/images/access/appearance.jpg" alt="ながめの館 光雲閣" class="imgfade1">
            <div class="txt">
                <a href="https://goo.gl/maps/Zt1Mb7tg3R52" target="_blank" class="cbtn">大きな地図でMapを確認する</a>
                <img src="<?= get_template_directory_uri() ?>/images/access/hotelname.svg" alt="ながめの館 光雲閣">
                <dl class="cdl cf">
                    <dt>住所</dt><dd>〒964-0074　福島県二本松市岳温泉1－85</dd>
                    <dt>TEL ／ FAX</dt><dd>0243-24-2101／ 0243-24-2760</dd>
                    <dt>加盟団体</dt><dd>国観連 ／ 日観連 ／ 全旅連 ／ 地域旅館組合</dd>
                    <dt>開業</dt><dd>明治39年 日野屋旅館として開業、昭和38年 別館光雲閣として設立</dd>
                    <dt>建物</dt><dd>鉄筋（平成元年全面増改築）</dd>
                </dl>
            </div>
        </div>
    </section>

    <section id="p2" class="mainw">
        <h3 class="ch3">アクセス方法<br><span>How to access</span></h3>
        <div id="root_car" class="root">
            <h4><img src="<?= get_template_directory_uri() ?>/images/access/ttl_car.svg" alt="お車をご利用の方"></h4>
            <p>東北自動車道二本松ICからR459経由で約15分。無料駐車場がございます（100台収容可能／予約不要）。</p>
            <img src="<?= get_template_directory_uri() ?>/images/access/root_car.svg" class="imgfade1 for_pc showup" alt="お車をご利用の方">
            <img src="<?= get_template_directory_uri() ?>/images/access/root_car_sp.svg" class="for_sp showup" alt="お車をご利用の方">
            <img src="<?= get_template_directory_uri() ?>/images/access/root_car2_sp.svg" class="for_sp showup" alt="お車をご利用の方">
        </div>
        <div id="root_train" class="root">
            <h4><img src="<?= get_template_directory_uri() ?>/images/access/ttl_train.svg" alt="電車をご利用の方"></h4>
            <p>東北新幹線郡山駅下車、東北本線下り乗り換え、二本松駅から路線バスで岳温泉のバス停まで約20分です。</p>
            <img src="<?= get_template_directory_uri() ?>/images/access/root_train.svg" class="imgfade1 for_pc showup" alt="電車をご利用の方">
            <img src="<?= get_template_directory_uri() ?>/images/access/root_train_sp.svg" class="imgfade1 for_sp showup" alt="電車をご利用の方">
        </div>
        <div id="root_plane" class="root">
            <h4><img src="<?= get_template_directory_uri() ?>/images/access/ttl_plane.svg" alt="飛行機をご利用の方"></h4>
            <p>福島空港から車で約70分です。</p>
            <img src="<?= get_template_directory_uri() ?>/images/access/root_plane.svg" class="imgfade1 for_pc showup" alt="飛行機をご利用の方">
            <img src="<?= get_template_directory_uri() ?>/images/access/root_plane_sp.svg" class="imgfade1 for_sp showup" alt="飛行機をご利用の方">
        </div>
        
    </section>

    <section id="p3" class="cf">
        <div id="bus">
        <img src="<?= get_template_directory_uri() ?>/images/access/img1.jpg" alt="ながめの館 光雲閣" class="imgfade1 showup">
        
        <div class="txt">
            <h3><img src="<?= get_template_directory_uri() ?>/images/access/ttl_bus.svg" alt="送迎について"></h3>
            <p>福島県内の送迎を承っております。受付人数は15名様以上からです。お気軽にご相談・お問い合わせ下さい。<br>前日17：00迄の<strong>完全予約制</strong>となりますので、お電話もしくはフロント迄ご連絡下さい。<br>※二本松駅までの送迎が少人数でも可能になりました。</p>
            <table class="ctable2">
                <tr>
                    <th>送迎時刻</th><td>二本松駅発 15：30<br>光雲閣発 9：20</td>
                </tr>
                <tr>
                    <th>料金</th><td>無料</td>
                </tr>
            </table>
            
        </div>
        </div>
    </section>

</article>
<?php get_template_part('include/_footer'); ?>
<?php get_footer(); ?>
