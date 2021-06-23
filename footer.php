<!-- <link rel="stylesheet" href="js/jquery.bxslider/jquery.bxslider.css" type="text/css" />
<script src="js/jquery.bxslider/jquery.bxslider.min.js" type="text/javascript"></script> -->


<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/swiper.min.css" type="text/css">
<script src="<?php echo get_template_directory_uri(); ?>/js/swiper.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/magnific-popup.css">
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/<?= $id ?>.js"></script>
<!-- <script src="./js/jquery-1.12.0.min.js"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<?php if ($id === 'index'): ?>
<script>
	$('.tabs').tabs();
</script>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/lightbox.css">
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/lightbox.js"></script>
<?php endif; ?>
<script type="text/javascript">
	$('#head_spnav #btn_plan_sp').attr('href','#plan');
	$('#reqdocument a:nth-of-type(2)').attr('href','#plan');
</script>

</body>  
</html>