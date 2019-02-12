<?php /*Template Name: Interview */ ?>
<?php get_header(); ?>

<section class="section section-lg">

  <section class="section">
    <div class="container">
        <div class="row">
<!--posts-->
          <div class="col-md-12">
			  <?php if(have_posts()) : ?>
			  <?php while(have_posts()): the_post(); ?>
            <div class="card card-coin card-plain">
              <div class="card-header">
                <img src="<?php bloginfo("template_url"); ?>/assets/pics/wq_icon5.png" class="img-center img-fluid rounded-circle">
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12 text-center">
                    <h3 class="text-white"><?php the_title();?></h3>
                    <span><?php the_date(); ?></span>
                    <hr class="line-success">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                  <p class="text-white text-left"><?php the_content(); ?></p>
                </div>
                </div>
              </div>
            </div>
			<?php endwhile; ?>
				<?php else : ?>
				<p>
					<?php __('No posts found.'); ?>
				</p>
				<?php endif; ?>
          </div>
		</div><!--end row-->
	  </div>
  </section>

<!--返回-->
<div class="col-lg-12 content-center">
            <center><a class="btn btn-success btn-simple" href="/index.php/news/report"> 返 回 近 期 新 闻</a></center>
</div>
<div class="col-lg-12 content-center">
            <center><a class="btn btn-success btn-simple" href="/index.php/news/report"> 返 回 深 度 报 道</a></center>
</div>

</section><!--end section-lg--> 
<?php get_footer(); ?>