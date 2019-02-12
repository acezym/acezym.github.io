<?php /*Template Name: Match Data */ ?>

<?php get_header(); ?>
<!--RANK CARD-->
<section class="section section-lg">
	<section class="section">
    <img src="<?php bloginfo("template_url"); ?>/assets/img/dots.png" class="dots">
    <img src="<?php bloginfo("template_url"); ?>/assets/img/path4.png" class="path">
    <div class="container align-items-center">
      <div class="row">
        <div class="col-lg-4 col-md-6 ml-auto mr-auto">
          <div class="card card-coin card-plain">
            <div class="card-header">
              <img src="<?php bloginfo("template_url"); ?>/assets/pics/wq_icon7.png" class="img-center img-fluid rounded-circle">
              <h4 class="title">比 赛 数 据</h4>
            </div>
            <div class="card-body">
              <ul class="nav nav-pills nav-pills-warning justify-content-center" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" data-toggle="tab" href="#gs_data" role="tablist">
                    四 大 满 贯
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#this_data">
                    2018 比赛数据
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#this_insight">
                    2018 更多洞见
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-8 col-md-6">
          <img src="<?php bloginfo("template_url"); ?>/assets/pics/icon collect_2small.png"></img>
        </div>
      </div>
	</div>

  <!--RANK LINE CHART-->
<div class="tab-content tab-subcategories">
  <!--大满贯数据-->
  <div class="tab-pane active" id="gs_data">
    <div class="container-fluid">
      <div class="card card-chart card-plain">
        <div class="card-header">
          <div class="row">
            <div class="col-md-6 col-sm-8 text-left">
              <hr class="line-warning">
              <h5 class="card-category">比 赛 排 名</h5>
              <h2 class="card-title text-white">四 大 满 贯</h2>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-sm-8 ml-auto mr-auto">
          <div class="container-center">
            <div>
              <section>
                    <h1>2014-2018 四 大 满 贯 </h1>
                    <div class="tbl-header">
                      <table cellpadding="0" cellspacing="0" border="0">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>澳网</th>
                            <th>法网</th>
                            <th>温网</th>
                            <th>美网</th>
                          </tr>
                        </thead>
                      </table>
                    </div>
                    <div class="tbl-content">
                      <table cellpadding="0" cellspacing="0" border="0">
                        <tbody>
                          <tr>
                            <td>W-L</td>
                            <td>1-4</td>
                            <td>3-4</td>
                            <td>1-4</td>
                            <td>5-5</td>
                          </tr>
                          <tr>
                            <td>2018</td>
                            <td>R128</td>
                            <td>R32</td>
                            <td>R128</td>
                            <td>R32</td>
                          </tr>
                          <tr>
                            <td>2017</td>
                            <td>R128</td>
                            <td>R128</td>
                            <td>R64</td>
                            <td>R128</td>
                          </tr>
                          <tr>
                            <td>2016</td>
                            <td>R64</td>
                            <td>R64</td>
                            <td>R128</td>
                            <td>R64</td>
                          </tr>
                          <tr>
                            <td>2015</td>
                            <td>R128</td>
                            <td>R128</td>
                            <td>R128</td>
                            <td>R64</td>
                          </tr>
                          <tr>
                            <td>2014</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-R64</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </section>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--2018数据-->
  <div class="tab-pane" id="this_data">
    <div class="container-fluid">
      <div class="card card-chart card-plain">
        <div class="card-header">
          <div class="row">
            <div class="col-md-6 col-sm-8 text-left">
              <hr class="line-warning">
              <h5 class="card-category">比 赛 数 据</h5>
              <h2 class="card-title text-white">2018 比 赛 数 据</h2>
            </div>
          </div>
        </div>
        <div class="col-md-8 col-sm-12 ml-auto mr-auto">
          <div class="container-center">
            <div>
              <div class="container-center">
                <iframe class="airtable-embed" src="https://airtable.com/embed/shrw3oPTRkHN09Q7H?backgroundColor=green&viewControls=on" frameborder="0" onmousewheel="" width="100%" height="533" style="background: transparent; border: 1px solid #ccc;"></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--2018 insights-->
  <div class="tab-pane" id="this_insight">
    <div class="container-fluid">
      <div class="card card-chart card-plain">
        <div class="card-header">
          <div class="row">
            <div class="col-md-6 col-sm-8 text-left">
              <hr class="line-warning">
              <h5 class="card-category">2018 比 赛 数 据</h5>
              <h2 class="card-title text-white">更 多 洞 见</h2>
            </div>
          </div>
        </div>
          <div class="col-md-8 col-sm-3 ml-auto mr-auto">
            <div class="container-center">
              <iframe src="https://my.visme.co/embed/mxn16e1j-" height="1024" width="600" style="border: 0px;" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>

  </div><!--end tab-->
	</section>
</section>

<?php get_footer(); ?>