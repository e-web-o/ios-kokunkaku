<?php 
	$id = 'worcation';
	get_header(null, $id);
?>
<article>
    <h1 class="heading for_sp"><a href="/">【公式】ながめの館 光雲閣 | 福島 岳温泉</a></h1>
    <section class="mv">
        <img src="<?= get_template_directory_uri() ?>/images/worcation/img00_header.jpg" class="for_pc" alt="ワーケーションイメージ">
        <img src="<?= get_template_directory_uri() ?>/images/worcation/img00_header_sp.jpg" class="for_sp" alt="ワーケーションイメージ">
    </section>

    <section id="intro" class="intro">
        <div class="inner showup">
            <h2>ワーケーション<span>Worcation</span></h2>
            <div class="sp-inner">
                <h3><img src="<?= get_template_directory_uri() ?>/images/worcation/img01_intro_text_01.svg" alt="季節の食に興じる雲光雲閣でワーケーション上の幸福" width="100px"></h3>
                <img src="<?= get_template_directory_uri() ?>/images/worcation/img01_intro_01.png" class="img for_pc" alt="ワーケーションイメージ">
                <img src="<?= get_template_directory_uri() ?>/images/worcation/img01_intro_01_sp.png" class="img for_sp" alt="ワーケーションイメージ">
            </div>
            <p >ワーケーションとは仕事（work）と休暇（vacation）を両立する<br class="for_pc">ライフスタイルのことです。<br>光雲閣には仕事ができるワーケーションスペースがあり、専用のル<br class="for_pc">ーターを完備しています。<br>デスクの目の前にある窓からは自然を見渡すことができ、リラック<br class="for_pc">スしながら仕事ができます。</p>
        </div>
        <div class="layer"></div>
    </section>

    <section id="vip" class="vip">
        <div class="inner showup">
            <h2>VIPルーム<span>VIP room</span></h2>
            <div class="img">
                <img src="<?= get_template_directory_uri() ?>/images/worcation/img02_vip_01.jpg" alt="">
                <img src="<?= get_template_directory_uri() ?>/images/worcation/img02_vip_02.jpg" alt="">
            </div>
            <p>2階 VIPルームのワーケーションスペースです。専用のルーターを完備しておりますので、安心してお仕事をしていただくことが<br class="for_pc">可能です。</p>
            <div class="mark"><img src="<?= get_template_directory_uri() ?>/images/worcation/img02_vip_text_01.svg" alt="専用ルーター完備"></div>
        </div>
    </section>

    <section id="meeting" class="meeting">
        <div class="inner showup">
            <div class="text">
                <h2>会議室<span>Meeting room</span></h2>
                <p>4階 会議室もワーケーションスペースとしてご利用<br class="for_pc">いただけます。</p>
                <div class="link white"><a href="/facility/#meeting">会議室の詳細はこちら</a></div>
            </div>
            <img src="<?= get_template_directory_uri() ?>/images/worcation/img03_meeting_01.jpg" alt="">
        </div>
    </section>

</article>
<?php get_template_part('include/_footer'); ?>
<?php get_footer(); ?>