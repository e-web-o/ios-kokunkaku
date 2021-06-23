<?php 
	$id = 'pet';
	get_header(null, $id);
?>
<article>

    <section id="mv">
        <img src="<?= get_template_directory_uri() ?>/images/pet/mv.jpg" class="for_pc" alt="ペットハウス">
        <img src="<?= get_template_directory_uri() ?>/images/pet/mv_sp.jpg" class="for_sp" alt="ペットハウス">
    </section>

    <section id="p1">
        <div class="mainw" id="p1_1">
            <h2 class="ch2">ペットハウス<br><span>Pet House</span></h2>
            <h3 class="imgfade1 for_pc showup"><img src="<?= get_template_directory_uri() ?>/images/pet/intro_cc.svg" alt="ペットハウスがご利用いただけます"></h3>
            <h3 class="for_sp">ペットハウスが<br>ご利用いただけます</h3>
            <p class="mainp imgfade2 for_pc showup"><img src="<?= get_template_directory_uri() ?>/images/pet/intro_txt.svg" alt="当館ではワンちゃんなど、ペットちゃんとご一緒に旅をしていただくためにペットハウスを併設しております。"></p>
            <p class="mainp for_sp">当館ではワンちゃんなど、ペットちゃんと<br>ご一緒に旅をしていただくために<br>ペットハウスを併設しております。<br>大切なペットを他所に預けたり、<br>さびしく家に残してお出かけになること<br>などの心配がなくなります。<br>ごゆっくりとお過ごしいただき、<br>是非ペットちゃんとの旅の楽しい思い出を<br>お作りくださいませ。</p>
            <img src="<?= get_template_directory_uri() ?>/images/pet/img1.jpg" class="imgfade3 for_pc showup" alt="ペットハウス"><img src="<?= get_template_directory_uri() ?>/images/pet/img1_sp.jpg" class="imgfade3 for_sp showup" alt="ペットハウス">
        </div>
        <div class="loopslider" rel="loopleft">
        <ul class="cf" id="p1_2">
            <li><img src="<?= get_template_directory_uri() ?>/images/pet/img2_1.jpg" alt="ペットハウス"></li>
            <li><img src="<?= get_template_directory_uri() ?>/images/pet/img2_2.jpg" alt="ペットハウス"></li>
            <li><img src="<?= get_template_directory_uri() ?>/images/pet/img2_3.jpg" alt="ペットハウス"></li>
            <li><img src="<?= get_template_directory_uri() ?>/images/pet/img2_4.jpg" alt="ペットハウス"></li>
            <li><img src="<?= get_template_directory_uri() ?>/images/pet/img2_5.jpg" alt="ペットハウス"></li>
        </ul>
    </div>
    </section>

    <section id="p2">
        <div class="mainw">
            <h3 class="ch3">ペットハウスについて<br><span>About Pet House</span></h3>
            <div class="ti cf">
                <img src="<?= get_template_directory_uri() ?>/images/pet/img3.jpg" class="img imgfade1 showup" alt="ペットハウス">
                <div class="txt">
                    <h4><img src="<?= get_template_directory_uri() ?>/images/pet/ttl_fee.svg" alt="ペットハウス使用料"></h4>
                    <table class="ctable">
                        <tr>
                            <th>種類</th><th>ケージ大きさ</th><th>料　金</th>
                        </tr>
                        <tr>
                            <th>小動物</th><td>350×600mm</td><td>￥1,650 （税込）</td>
                        </tr>
                        <tr>
                            <th>小型犬</th><td>550×600mm</td><td>￥2,200（税込）</td>
                        </tr>
                        <tr>
                            <th>中型犬</th><td>600×1200mm</td><td>￥3,300（税込）</td>
                        </tr>
                        <tr>
                            <th class="last">大型犬</th><td class="last">600×1200mm</td><td class="last">￥4,400（税込）</td>
                        </tr>
                    </table>
                    <p>※超大型犬も受入可能です。超大型ケージ￥5,500（税込）</p>
                </div>
            </div>
            <div class="unit">
                <h4><img src="<?= get_template_directory_uri() ?>/images/pet/ttl_eq.svg" alt="ペットハウス備品"></h4>
                <p>共用フェイスタオル/バスタオル/ペット用リンスインシャンプー/ペット用ブラシ/ペット用イオンドライヤー/水、エサ入れ/ペットシート/トリミング台 </p>
            </div>
            <div class="unit">
                <h4><img src="<?= get_template_directory_uri() ?>/images/pet/ttl_bath.svg" alt="ペットバスルーム使用料"></h4>
                <p><strong>1匹 ¥1,100（税込）</strong><br>ご宿泊の方でペットハウスをご利用のお客様はバスルーム使用料が無料になります。</p>
            </div>
            <div>
            <a href="https://reserve.489ban.net/client/kounkaku/0/plan" target="_blank" class="bn_plan"><img src="<?= get_template_directory_uri() ?>/images/pet/bn_plan.jpg" class="for_pc" alt="ペットハウス料金を含んだお得なペットプランはこちらから"><img src="<?= get_template_directory_uri() ?>/images/pet/bn_plan_sp.jpg" class="for_sp" alt="ペットハウス料金を含んだお得なペットプランはこちらから"></a>
            </div>
        </div>
    </section>

    <section id="p3" class="mainw">
        <h3 class="ch3">注意事項<br><span>Important Points</span></h3>
        <div class="ti">
            <div class="txt">
                <ul>
                    <li>チェックイン時、狂犬病予防接種証明書及びワクチン接種証明書をご提示下さい。（コピー可）</li>
                    <li>小動物につきましてはケージ持参とさせていただきます。</li>
                    <li>ペットハウス出入り時間は基本24:00までとなります。翌朝6:00から出入り可能です。</li>
                    <li>18:00以降出入り希望のお客様は予めフロントにお申し出下さい。</li>
                    <li>ペットの館内及び客室のご同行は不可となります。</li>
                    <li>ペットハウスと当館は隣接されておりますが、入り口は別となります。 <br>ペットが苦手なお客様もいらっしゃいますので、ご協力をお願いいたします。</li>
                    <li>ペット専用バスルームをご利用の際はフロントにお声がけ下さい。</li>
                    <li>ペットハウスはペットの為の部屋を提供するものであり、ペットをお預かりするものではございません。ペットの食事・排泄物・散歩・入浴等、すべてお客様にて管理願います。</li>
                    <li>共有フロアーでの排泄及びマーキングをしてしまった場合、ハウス内に用意した清掃用具で飼い主様に掃除をして頂きますようお願いいたします。</li>
                    <li>万一、当ペットハウスのご利用時に不測の事故に遭われましても、当館は一切の責任を負いかねます。<br>また、面会・散歩時のトラブル、事故、ペットに起因するお客様同士のトラブルにつきましても同様に責任を負いかねます。</li>
                    <li>当ペットハウスをご利用のお客様には、ご注意をよくご覧の上、利用規約同意書へのご記入をお願いしております。チェックイン時にご提出ください。<br>利用規約同意書は右記よりPDFでダウンロードいただけます。</li>
                </ul>
            </div>
            <div class="img">
                <img src="<?= get_template_directory_uri() ?>/images/pet/img_points.png" alt="資格認定証" class="imgfade1 showup">
                <a href="<?= get_template_directory_uri() ?>/images/pet/pet_kiyaku.pdf" target="_blank" class="btn_pdf"><img src="<?= get_template_directory_uri() ?>/images/pet/btn_pdf.jpg" class="for_pc" alt="利用規約同意書はこちらから（PDF）"><img src="<?= get_template_directory_uri() ?>/images/pet/btn_pdf_sp.jpg" class="for_sp" alt="利用規約同意書はこちらから（PDF）"></a>
            </div>
        </div>
        <a href="https://www.nihonpet.co.jp/?did=777709&bid=709008" target="_blank" class="bn_hoken"><img src="<?= get_template_directory_uri() ?>/images/pet/bn_pet.png" alt="いぬとねこの保険"></a>
    </section>

</article>
<?php get_template_part('include/_footer'); ?>
<?php get_footer(); ?>
