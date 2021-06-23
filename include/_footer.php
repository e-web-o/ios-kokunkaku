
	<footer id="footer">
		<div class="cflex">
			<div id="footer_info">
				<div class="footer_info_in">
					<div class="hotel_info">
						<div class="cflex">
							<h2><a href="/">福島県二本松 ながめの館 光雲閣</a></h2>
						</div>
						<address><p>〒964-0074　<br class="for_pc">福島県二本松市岳温泉1-85<br>TEL:0243-24-2101　<br class="for_pc">FAX:0243-24-2760</p></address>
					</div>
					<ul id="sns">
						<li id="sns_i"><a href="https://www.instagram.com/nagamenoyakata.kounkaku/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
						<li id="sns_f"><a href="https://www.facebook.com/kounkaku" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li id="sns_t"><a href="https://www.tripadvisor.jp/Hotel_Review-g780854-d1083919-Reviews-Kounkaku-Nihonmatsu_Fukushima_Prefecture_Tohoku.html" target="_blank"><i class="fa fa-tripadvisor" aria-hidden="true"></i></a></li>
						<li id="sns_y"><a href="" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
					</ul>
				</div>
			</div>
			<div id="footer_nav">
				<div class="footmain">
					<div id="footnav">
						<nav class="cflex for_pc">
							<ul>
								<li><a href="/">トップページ</a></li>
								<li><a href="/dinner/">料理</a></li>
								<li><a href="/spa/">温泉</a></li>
								<li><a href="/room/">お部屋</a></li>
								<li><a href="/facility/">館内案内</a></li>
							</ul>
							<ul>
								<li><a href="/stay/">過ごし方</a></li>
								<li><a href="/sightseeing/">周辺観光</a></li>
								<li><a href="/access/">アクセス</a></li>
								<li><a href="https://reserve.489ban.net/client/kounkaku/0/plan" target="_blank">宿泊プラン</a></li>
								<li><a href="/yugoromo/">温泉化粧品</a></li>
							</ul>
							<ul>
								<li><a href="/charge/">基本料金表</a></li>
								<li><a href="/faq/">よくあるご質問</a></li>
								<li><a href="/privacypolicy/">プライバシーポリシー</a></li>
								<li>
										<script type="text/javascript">
										<!--
										function converter(M){
										var str="", str_as="";
										for(var i=0;i<M.length;i++){
										str_as = M.charCodeAt(i);
										str += String.fromCharCode(str_as + 1);
										}
										return str;
										}
										function mail_to(k_1,k_2)
										{eval(String.fromCharCode(108,111,99,97,116,105,111,110,46,104,114,101,102,32,
										61,32,39,109,97,105,108,116,111,58) 
										+ escape(k_1) + 
										converter(String.fromCharCode(104,109,101,110,63,106,110,116,109,106,96,106,116,45,98,110,45,105,111,
										62,114,116,97,105,100,98,115,60)) 
										+ escape(k_2) + "'");} 
										document.write('<a href=JavaScript:mail_to("","")>お問い合わせ<\/a>');
										//-->
										</script>
								</li>
							</ul>
						</nav>
					</div>
					<div class="yugoromo">
						<a href="/yugoromo/"><img src="<?php echo get_template_directory_uri(); ?>/images/bn_yugoromo.jpg" alt="温泉化粧品 湯ごろも"></a>
					</div>
				</div>
				<p class="copy">Copyright &copy; Kounkaku Co.,Ltd. All Rights Reserved.</p>
			</div>
		</div>
	</footer>
	<div id="page-top"><a href="#top"><img src="<?php echo get_template_directory_uri(); ?>/images/pagetop.svg" alt="TOP"></a></div>

</div><!-- End class="wrap" -->

<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.easing.min.js"></script>
<?php if ($id === 'index'): ?>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.smoothScroll.js"></script>
<?php endif; ?>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.inview.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.transform.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.animsition.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/common<?= $id === 'index' ? '' : '2' ?>.js"></script>

<!-- <link href="https://fonts.googleapis.com/css?family=Noto+Serif+JP&display=swap" rel="stylesheet"> -->
<link href="https://fonts.googleapis.com/css?family=Questrial&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

<!-- <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Questrial"> 
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">-->

<!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous"> -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<!-- <link href="https://fonts.googleapis.com/css2?family=Jost&display=swap" rel="stylesheet"> -->

<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1/i18n/jquery.ui.datepicker-ja.min.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/redmond/jquery-ui.css" >

<script type="text/javascript">
  $(document).ready(function($) {
	if (window.matchMedia( '(max-width: 750px)' ).matches) {
        $('head').prepend('<meta name="viewport" content="width=device-width, initial-scale=1.0">');
    } else {
        $('head').prepend('<meta name="viewport" content="width=1300">');
    }
  });
</script>

