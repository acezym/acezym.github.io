<?php /*Template Name: Rank */ ?>

<?php get_header(); ?>
<section class="section section-lg">
  <section class="section">
	  
<!--RANK CARD-->
    <img src="<?php bloginfo("template_url"); ?>/assets/img/dots.png" class="dots">
    <img src="<?php bloginfo("template_url"); ?>/assets/img/path4.png" class="path">
    <div class="container align-items-center">
      <div class="row">
        <div class="col-lg-4 col-md-6 ml-auto mr-auto">
          <div class="card card-coin card-plain">
            <div class="card-header">
              <img src="<?php bloginfo("template_url"); ?>/assets/pics/wq_icon7.png" class="img-center img-fluid rounded-circle">
				  <h4 class="title">世 界 排 名</h4>
            </div>
            <div class="card-body">
              <ul class="nav nav-pills nav-pills-primary justify-content-center">
                <li class="nav-item">
                  <a class="nav-link active" data-toggle="tab" href="#2018rank_chart">
                    2018 每 周 排 名
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#totalrank_chart">
                    职 业 生 涯 排 名
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-8 col-md-6">
          <img src="<?php bloginfo("template_url"); ?>/assets/pics/icon collect_1small.png"></img>
        </div>
      </div>

  <!--RANK LINE CHART-->
<div class="tab-content tab-subcategories">
  <div class="tab-pane active" id="2018rank_chart">
    <div class="container-fluid">
      <div class="card card-chart card-plain">
        <div class="card-header">
          <div class="row">
            <div class="col-md-6 col-sm-8 text-left">
              <hr class="line-primary">
              <h5 class="card-category">世 界 排 名</h5>
              <h2 class="card-title text-white">2018 每 周 排 名</h2>
            </div>
          </div>
        </div>
        <div class="col-md-12 col-sm-12 ml-auto mr-auto">
          <div class="container-center">
            <img src="<?php bloginfo("template_url"); ?>/data/rank_2018.png"></img>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="tab-pane" id="totalrank_chart">
    <div class="container-fluid">
      <div class="card card-chart card-plain">
        <div class="card-header">
          <div class="row">
            <div class="col-md-6 col-sm-8 text-left">
              <hr class="line-primary">
              <h5 class="card-category">世 界 排 名</h5>
              <h2 class="card-title text-white">2006-2018 职 业 生 涯 排 名</h2>
            </div>
          </div>
        </div>
        <div class="col-md-8 col-sm-12 ml-auto mr-auto">
          <div class="container-center">
            <img src="<?php bloginfo("template_url"); ?>/data/rank_year.png"></img>
          </div>
        </div>
      </div>
    </div>
  </div>
</div><!--end tab-->

</section>
</section>

<?php get_footer(); ?>