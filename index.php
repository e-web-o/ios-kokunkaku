<?php 
	$id = 'index';
	get_header(null, $id);
?>
<article>
	<section id="mv_i">
		<div class="swiper-container_fv">
			<ul class="swiper-wrapper">
				<li class="swiper-slide mv01">
					<div class="img"><!-- <img src="images/index/mv01.jpg" alt=""> --></div>
				</li>
				<li class="swiper-slide mv02">
					<div class="img"><!-- <img src="images/index/mv02.jpg" alt=""> --></div>
				</li>
				<li class="swiper-slide mv03">
					<div class="img"><!-- <img src="images/index/mv03.jpg" alt=""> --></div>
				</li>
				<li class="swiper-slide mv04">
					<div class="img"><!-- <img src="images/index/mv04.jpg" alt=""> --></div>
				</li>
				<li class="swiper-slide mv05">
					<div class="img"><!-- <img src="images/index/mv04.jpg" alt=""> --></div>
				</li>
				<li class="swiper-slide mv06">
					<div class="img"><!-- <img src="images/index/mv04.jpg" alt=""> --></div>
				</li>
			</ul>
			<!-- <div class="swiper-pagination_fv"></div> -->
			<h1 class="for_sp">
				福島県二本松 ながめの館 光雲閣
			</h1>
			<div class="cc">
				<img src="<?php echo get_template_directory_uri(); ?>/images/index/cc.png" alt="">
			</div>
			<div class="mv-bnr">
				<div>
					<a href="/withcorona/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/index/bn_important.png" alt="新型コロナウィルス対策につきまして"></a>
				</div>
				<div>
					<a href="<?php echo get_template_directory_uri(); ?>/images/cp/flyer_subscription202104-01.jpg" rel="lightbox[ls_group]"><img src="<?php echo get_template_directory_uri(); ?>/images/index/bn_subscription.png" alt="100名様限定温泉にサブスクで入り放題"></a>
				</div>
			</div>
		</div>
	</section>

		<div id="rsv_i" class="cb4">
			<div class="rsvtop mainw">
				<h3 class="ttl">空室検索</h3>
				<div id="search_489ban"><script src="https://reserve.489ban.net/client/kounkaku/0/plan/searchjs?search_stay=1&search_guest_types=2&search_room=1&search_date_type=2&link_target=0" type="text/javascript" charset="utf-8"></script></div>
				<ul class="member">
					<li class="for_sp">
						<a href="plan/">宿泊プラン</a>
					</li>
					<li>
						<a href="https://reserve.489ban.net/client/kounkaku/0/plan" target="_blank">日付から検索する</a>
					</li>
					<li><a href="https://reserve.489ban.net/client/kounkaku/0/booked/login" target="_blank">予約確認・変更・キャンセル</a></li>
				</ul>
			</div>
			<div class="tel">
				<p><a href="tel:0243-24-2101">0243-24-2101</a>【受付時間】8:00〜19:00</p>
			</div>
		</div>


	<section id="benefits" class="animsition cb">
		<div class="mainw cflex">
			<h3><img src="<?php echo get_template_directory_uri(); ?>/images/index/ttl_benefits.svg" alt="公式サイトご予約特典"></h3>
			<ul class="cflex">
				<li class="showup">
					<a href="/charge/">
						<img src="<?php echo get_template_directory_uri(); ?>/images/icon_no1.svg" alt="" class="icon">
						<div class="b_inner">
							<div class="txt">
								<h4>ミツバチハニーコース</h4>
								<p>蜂蜜の油（ハニークリーム）＋熟成プロポリスキャンディープレゼント</p>
							</div>
							<div class="img">
								<img src="<?php echo get_template_directory_uri(); ?>/images/index/img_benefits1.jpg" alt="ミツバチハニーコース">
							</div>
						</div>
					</a>
				</li>
				<li class="showup uv2">
					<a href="/charge/">
						<img src="<?php echo get_template_directory_uri(); ?>/images/icon_no2.svg" alt="" class="icon">
						<div class="b_inner">
							<div class="txt">
								<h4>会津塗りコース</h4>
								<p>福島の伝統工芸 会津塗りを<br class="for_pc">ご人数分プレゼント！</p>
							</div>
							<div class="img">
								<img src="<?php echo get_template_directory_uri(); ?>/images/index/img_benefits2.jpg" alt="会津塗りコース">
							</div>
						</div>
					</a>
				</li>
				<li class="showup uv3">
					<a href="/charge/">
						<img src="<?php echo get_template_directory_uri(); ?>/images/icon_no3.svg" alt="" class="icon">
						<div class="b_inner">
							<div class="txt">
								<h4>貸切風呂半額コース</h4>
								<p>通年「貸切風呂」露天風呂<br class="for_pc">「山の湯」利用料金が半額に！</p>
							</div>
							<div class="img">
								<img src="<?php echo get_template_directory_uri(); ?>/images/index/img_benefits3.jpg" alt="貸切風呂半額コース">
							</div>
						</div>
					</a>
				</li>
			</ul>
		</div>
	</section>

	<section id="plan" class="animsition cb2">
		<h3 class="ch3">光雲閣のおすすめご宿泊プラン<br><span>Plan</span></h3>

	<div class="tabs">

		<ul class="cmenu cate-tab mainw">
			<li><a href="#dinnerplan">お食事プラン</a></li>
			<li><a href="#dayuseplan">日帰りプラン</a></li>
			<li><a href="#singleplan">お一人様向け</a></li>
			<li><a href="#f_cplan" class="long">ファミリー・カップル<br class="for_sp">向け</a></li>
		</ul>

		<div id="dinnerplan" class="mainw planwrap">
			<ul class="cflex plan3">
				<li class="showup">
					<a href="" target="_blank">
						<div class="img">
							<img src="<?php echo get_template_directory_uri(); ?>/images/index/img_plan_dinner1.jpg" alt="1泊2食付きプラン">
						</div>
						<div class="txt">
							<p>夕食・朝食付き</p>
							<h4>1泊2食付プラン<br><span>Standard</span></h4>
						</div>
					</a>
				</li>
				<li class="showup uv2">
					<a href="" target="_blank">
						<div class="img">
							<img src="<?php echo get_template_directory_uri(); ?>/images/index/img_plan_dinner2.jpg" alt="創作会席プラン">
						</div>
						<div class="txt">
							<p>料理長自慢！</p>
							<h4>創作会席プラン<br><span>Original meal</span></h4>
						</div>
					</a>
				</li>
				<li class="showup uv3">
					<a href="" target="_blank">
						<div class="img">
							<img src="<?php echo get_template_directory_uri(); ?>/images/index/img_plan_dinner3.jpg" alt="1泊朝食プラン">
						</div>
						<div class="txt">
							<p>夕食無しでお手頃</p>
							<h4>1泊朝食プラン<br><span>Breakfast</span></h4>
						</div>
					</a>
				</li>
				<li class="showup">
					<a href="" target="_blank">
						<div class="img">
							<img src="<?php echo get_template_directory_uri(); ?>/images/index/img_plan_dinner4.jpg" alt="特選料理プラン">
						</div>
						<div class="txt">
							<p>厳選された地元産の食材</p>
							<h4>特選料理プラン<br><span>Special meal</span></h4>
						</div>
					</a>
				</li>
				<li class="showup uv2">
					<a href="" target="_blank">
						<div class="img">
							<img src="<?php echo get_template_directory_uri(); ?>/images/index/img_plan_dinner5.jpg" alt="地酒飲み比べプラン">
						</div>
						<div class="txt">
							<p>日本酒大好き！</p>
							<h4>地酒飲み比べプラン<br><span>Local sake</span></h4>
						</div>
					</a>
				</li>
			</ul>
		</div>

		<div id="dayuseplan" class="mainw planwrap">
			<ul class="cflex plan3">
				<li class="showup">
					<a href="" target="_blank">
						<div class="img">
							<img src="<?php echo get_template_directory_uri(); ?>/images/index/img_plan_dayuse1.jpg" alt="日帰り入浴プラン">
						</div>
						<div class="txt">
							<p>シンプルに温泉を楽しむ</p>
							<h4>日帰り入浴プラン<br><span>Hot spring</span></h4>
						</div>
					</a>
				</li>
				<li class="showup uv2">
					<a href="" target="_blank">
						<div class="img">
							<img src="<?php echo get_template_directory_uri(); ?>/images/index/img_plan_dayuse2.jpg" alt="日帰り宴会プラン">
						</div>
						<div class="txt">
							<p>3つのコースから選べる</p>
							<h4>日帰り宴会プラン<br><span>Banquet</span></h4>
						</div>
					</a>
				</li>
			</ul>
		</div>

		<div id="singleplan" class="mainw planwrap">
			<ul class="cflex plan3">
				<li class="showup">
					<a href="" target="_blank">
						<div class="img">
							<img src="<?php echo get_template_directory_uri(); ?>/images/index/img_plan_single1.jpg" alt="のんびりプラン">
						</div>
						<div class="txt">
							<p>贅沢なひととき</p>
							<h4>のんびりプラン<br><span>Relax</span></h4>
						</div>
					</a>
				</li>
				<li class="showup uv2">
					<a href="" target="_blank">
						<div class="img">
							<img src="<?php echo get_template_directory_uri(); ?>/images/index/img_plan_single2.jpg" alt="ワーケーションプラン">
						</div>
						<div class="txt">
							<p>静かな環境で仕事も捗る</p>
							<h4>ワーケーションプラン<br><span>Banquet</span></h4>
						</div>
					</a>
				</li>
			</ul>
		</div>

		<div id="f_cplan" class="mainw planwrap">
			<ul class="cflex plan3">
				<li class="showup">
					<a href="" target="_blank">
						<div class="img">
							<img src="<?php echo get_template_directory_uri(); ?>/images/index/img_plan_f_c1.jpg" alt="ゆったりふたり旅プラン">
						</div>
						<div class="txt">
							<p>夫婦・カップルで</p>
							<h4>ゆったりふたり旅プラン<br><span>Couple</span></h4>
						</div>
					</a>
				</li>
				<li class="showup uv2">
					<a href="" target="_blank">
						<div class="img">
							<img src="<?php echo get_template_directory_uri(); ?>/images/index/img_plan_f_c2.jpg" alt="お祝い・記念日プラン">
						</div>
						<div class="txt">
							<p>おめでとうを伝えよう</p>
							<h4>お祝い・記念日プラン<br><span>Anniversary</span></h4>
						</div>
					</a>
				</li>
				<li class="showup uv3">
					<a href="" target="_blank">
						<div class="img">
							<img src="<?php echo get_template_directory_uri(); ?>/images/index/img_plan_f_c3.jpg" alt="ベビープラン">
						</div>
						<div class="txt">
							<p>赤ちゃん安心♪温泉デビュー</p>
							<h4>ベビープラン<br><span>Baby</span></h4>
						</div>
					</a>
				</li>
			</ul>
		</div>

	</div><!-- end class="tabs" -->

		<div class="mainw" id="grouppet">
			<ul class="cflex">
				<li class="showup">
					<a href="" target="_blank">
						<div class="txt">
							<p>グループ旅行にぴったり</p>
							<h4>グループ・団体<br class="for_sp">プラン<br><span>Group</span></h4>
						</div>
						<div class="img">
							<img src="<?php echo get_template_directory_uri(); ?>/images/index/img_plangroup.jpg" alt="グループ・団体プラン">
						</div>
					</a>
				</li>
				<li class="showup uv2">
					<a href="" target="_blank">
						<div class="txt">
							<p>ペットも一緒に温泉旅行</p>
							<h4>ペットプラン<br><span>Pet</span></h4>
						</div>
						<div class="img">
							<img src="<?php echo get_template_directory_uri(); ?>/images/index/img_planpet.jpg" alt="ペットプラン">
						</div>
					</a>
				</li>
			</ul>
		</div>
	</section>

	<section id="news" class="animsition cb2">
		<h3 class="ch3">お知らせ<br><span>News</span></h3>
		<ul class="mainw showup">
			<li>
				<p class="date">
					2021/05/28
				</p>
				<p class="newsttl">
					<a href="">ホームページをリニューアルしました</a>
				</p>
			</li>
			<li>
				<p class="date">
					2021/04/08
				</p>
				<p class="newsttl">
					<a href="">日帰り入浴開始のお知らせ</a>
				</p>
			</li>
			<li>
				<p class="date">
					2021/04/01
				</p>
				<p class="newsttl">
					<a href="">【おすすめ】料理長自慢！創作会席プラン</a>
				</p>
			</li>
		</ul>
			<a href="" class="btn">もっと見る</a>
	</section>

	<section id="greetings" class="animsition">
		<div class="bggreetings showup">
			<h3 class="ch3">ご挨拶<br><span>Greetings</span></h3>
			<div class="mainw">
				<p>
					ながめの館 光雲閣は、<br>福島県二本松市の岳温泉の最も高台に佇む、まさに「ながめの館」。<br>阿武隈山系を一望する絶景の客室、<br>源泉掛け流し100％の酸性泉、<br>季節の食に興じる雲上の幸福を<br class="for_sp">ご堪能いただけるお料理、<br>高台の静かな一軒宿で<br class="for_sp">寛ぎのひとときをお過ごしください。
				</p>
			</div>
		</div>
	</section>

	<section id="cuisine" class="animsition">
		<div class="inwrap showup">
			<div class="signboard">
				<h3 class="ttl">
					<img src="<?php echo get_template_directory_uri(); ?>/images/index/img_sboard_cuisine.svg" alt="四季折々の滋味" class="for_pc">
					<img src="<?php echo get_template_directory_uri(); ?>/images/index/img_sboard_cuisine_sp.svg" alt="四季折々の滋味" class="for_sp">
				</h3>
				<div class="pagelink">
					<a href="./dinner/">お料理について</a>
				</div>
			</div>
		</div>
	</section>

	<section id="hotspring" class="animsition">
		<div class="inwrap showup">
			<div class="signboard">
				<h3 class="ttl">
					<img src="<?php echo get_template_directory_uri(); ?>/images/index/img_sboard_hotspring.svg" alt="時を超えて美人の湯" class="for_pc">
					<img src="<?php echo get_template_directory_uri(); ?>/images/index/img_sboard_hotspring_sp.svg" alt="時を超えて美人の湯" class="for_sp">
				</h3>
				<div class="pagelink">
					<a href="./spa/">温泉について</a>
				</div>
			</div>
		</div>
	</section>

	<section id="rooms" class="animsition">
		<div class="inwrap showup">
			<div class="signboard">
				<h3 class="ttl">
					<img src="<?php echo get_template_directory_uri(); ?>/images/index/img_sboard_rooms.svg" alt="眺望の寛ぎ空間" class="for_pc">
					<img src="<?php echo get_template_directory_uri(); ?>/images/index/img_sboard_rooms_sp.svg" alt="眺望の寛ぎ空間"class="for_sp">
				</h3>
				<div class="pagelink">
					<a href="./room/">客室について</a>
				</div>
			</div>
		</div>
	</section>

	<!-- <div id="modal" class="mfp-hide w1100"> -->
<!-- 		<h3>新型コロナ対策について</h3>
		<p>平素よりご利用いただきまして誠にありがとうございます。引き続き変わらぬご愛顧賜りますようお願い申し上げます。</p> -->
	<!-- </div> -->

</article>
<?php get_template_part('include/_footer'); ?>
<?php get_footer(null, $id); ?>