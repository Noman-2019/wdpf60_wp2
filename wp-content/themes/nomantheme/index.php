<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>zBoomMusic Free Html5 Responsive Template</title>
	<meta name="description" content="Free Html5 Templates and Free Responsive Themes Designed by Kimmy | zerotheme.com">
	<meta name="author" content="www.zerotheme.com">
	
    <!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- CSS
  ================================================== -->
  	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/zerogrid.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/responsive.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/responsiveslides.css" />
	
	<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
		<script src="js/html5.js"></script>
		<script src="js/css3-mediaqueries.js"></script>
	<![endif]-->
	
	<link href='<?php echo get_template_directory_uri() ?>/./images/favicon.ico' rel='icon' type='image/x-icon'/>
	<script src="<?php echo get_template_directory_uri() ?>/js/jquery.min.js"></script>
	<script src="<?php echo get_template_directory_uri() ?>/js/responsiveslides.js"></script>
	<script>
		$(function () {
		  $("#slider").responsiveSlides({
			auto: true,
			pager: false,
			nav: true,
			speed: 500,
			maxwidth: 962,
			namespace: "centered-btns"
		  });
		});
	</script>
</head>
<body>
<!--------------Header--------------->
<?php get_header(); ?>
<!--------------Content--------------->
<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block03">
			<div class="col-2-3">
				<div class="wrap-col">
                    <?php 
                    if(have_posts()){
                        while(have_posts()){
                            the_post();

                            
                    
                    ?>
					<article>
						<?php the_post_thumbnail() ?>
						<h2><a href="<?php the_permalink() ;?>"><?php the_title(); ?></a></h2>
						<div class="info">[By Admin on December 01, 2012 with <a href="#">01 Commnets</a>]</div>
						<p><?php the_content() ;?></p>
					</article>
					<?php 
                    
                };


            };
            
                    ?>
					<ul id="pagi">
						<li><a class="current" href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">next</a></li>
					</ul>
				</div>
			</div>
			
            
            
            
<?php  get_sidebar(); ?>



		</div>
	</div>
</section>
<!--------------Footer--------------->
<?php get_footer(); ?>

</body></html>