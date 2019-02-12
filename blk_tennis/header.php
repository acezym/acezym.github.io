<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="<?php bloginfo('description');?> ">
  <link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo("template_url"); ?>/assets/img/tennis-ball.png">
  <link rel="icon" type="image/png" href="<?php bloginfo("template_url"); ?>/assets/img/tennis_clear.png">
  <title>
    <?php bloginfo('name'); ?> | 
	  <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
  </title>
  <!--Fonts and icons-->
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="<?php bloginfo("template_url"); ?>/assets/css/nucleo-icons.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="<?php bloginfo("template_url"); ?>/assets/css/blk-design-system.css?v=1.0.0" rel="stylesheet" />

  <!--MY CSS-->
  <link href="<?php bloginfo("template_url"); ?>/assets/css/mycss/mycss.css" rel="stylesheet" />
	
<?php wp_head(); ?>
	
</head>

<body class="landing-page">
	
<!-- Navbar -->
<nav class="navbar navbar-expand-lg fixed-top navbar-transparent " color-on-scroll="100">
  <div class="container">
    <div class="navbar-translate">
      <a class="navbar-brand" href="/index.php" rel="tooltip" title="Designed and Coded by Yiming" data-placement="bottom" target="_blank">
        <span>Wang Qiang <i class="fab fa-telegram-plane"></i></span> Personal Website
      </a>
    </div>
    <div class="collapse navbar-collapse justify-content-end" id="navigation">
      <div class="navbar-collapse-header">
        <div class="row">
          <div class="col-6 collapse-brand">
            <a>
              WANG QIANG•
            </a>
          </div>
          <div class="col-6 collapse-close text-right">
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
              <i class="tim-icons icon-simple-remove"></i>
            </button>
          </div>
        </div>
      </div>
	<!--navigation elements-->
              <ul class="navbar-nav">
				  <?php
					wp_nav_menu( array(
						'theme_location'  => 'primary',
						'depth'	          => 2, // 1 = no dropdowns, 2 = with dropdowns.
						'container'       => 'div',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'bs-example-navbar-collapse-1',
						'menu_class'      => 'navbar-nav mr-auto',
						'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
						'walker'          => new WP_Bootstrap_Navwalker(),
					) );
				  ?>
              </ul>
            </div>
          </div>
        </nav>
        <!-- End Navbar -->