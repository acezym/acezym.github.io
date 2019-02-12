<?php /*Template Name: Storyboard*/ ?>

<?php get_header(); ?>
<section class="section section-lg">
  <section class="section">
<!--main content-->
    <div class="container align-items-center">
      <div class="row">
        <div class="col-lg-6 col-md-6">
          <h1 class="profile-title text-left">不停步</h1>
          <h3 class="text-on-back">进步</h3>
          <blockquote class="blockquote">
            <h4 class="text-white text-left">
            本赛季的接连胜利让王蔷收获了更多球迷的喜爱和他人的关注。<br><br>
            但网球是非常残酷的运动，多种因素的综合成就了今天的王蔷。<br><br>
            从体制外的“个体户”到如今能够独当一面、代表国家的新一姐，<br><br>
            她潜伏多年、耐心等待，厚积薄发，终于迎来自己的登场时刻。<br></h4>
          </blockquote>
          <div class="intro-button mx-auto text-center">
            <a class="btn btn-success btn-simple" href="#storymap">
            蔷 薇 盛 开 之 路  <i class="tim-icons icon-send"></i></a>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row align-items-center">
            <img src="<?php bloginfo("template_url"); ?>/assets/pics/sharp_image/wangqiang_light_square.png" alt="Circle image" class="img-fluid floating">
          </div>
        </div>
      </div>
    </div>

  <section class="section section-lg">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12" id="storymap">
              <iframe src="https://uploads.knightlab.com/storymapjs/7092ae589dfdc9d8ae4f3d2442e5a564/wq-career-history/draft.html" frameborder="0" width="100%" height="600"></iframe>
        </div>
      </div>
    </div>
  </section>

	</section>
</section>
<?php get_footer(); ?>