<?php /*Template Name: Report*/?>
<?php get_header(); ?>

<section class="section section-lg">
  <section class="section">
<!--headernotes-->
    <img src="<?php bloginfo("template_url"); ?>/assets/img/path3.png" class="path">
    <img src="<?php bloginfo("template_url"); ?>/vassets/img/dots.png" class="dots">
    <div class="container align-items-center">
      <div class="row">
        <div class="col-lg-4 col-md-4">
		<h1 class="profile-title text-left text-success">球 场 风 采</h1>
		<h3 class="text-on-back">NEWS</h3>
        </div>
        <div class="col-md-6">
          <div class="row align-items-center">
            <img src="<?php bloginfo("template_url"); ?>/assets/pics/wq_icon8.png" class="img-fluid rounded-circle floating">
          </div>
        </div>
      </div>
    </div>

<!--past news-->
<section id="past" class="section section-lg">
    <img src="<?php bloginfo("template_url"); ?>/assets/img/path2.png" class="path"></img>
    <div class="container">
        <div class="row">
          <div class="col-md-12">
              <div class="card-body">
				  <?php if(have_posts()) : ?>
				<?php while(have_posts()) : the_post(); ?>
            <div class="card card-coin card-plain">
                <div class="row">
                  <div class="col-md-12 text-center">
                    <h2 class="text-white"><?php the_title(); ?></h2>
                    <span><?php the_date(); ?></span>
                    <hr class="line-success">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                  <p class="description text-left"><?php the_content(); ?></p>
                </div>
                </div>
              </div>
				  <?php endwhile; ?>
			  <?php else: ?>
			  <p>
				  <?php __('No posts found.'); ?>
			  </p>
			  <?php endif; ?>
            </div> 
          </div>
        </div>
      </div>
	  			
</section>
     

    <div class="col-lg-12 center">
		<a class="btn btn-success btn-simple" href="/index.php/news/report"> 球 场 前 线 </a>
		<a class="btn btn-success btn-simple" href="/index.php/news/interview"> 深 度 报 道 </a>
    </div>

    </section>
  </section><!--end section-lg-->
<?php get_footer(); ?>