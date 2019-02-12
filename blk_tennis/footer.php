 <!--footer-->
  <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-3">
          <h1 class="title">Wang Qiang</h1>
        </div>
        <div class="col-md-3 col-sm-3">
          <ul class="nav">
            <li class="nav-item">
              <a href="/index.php" class="nav-link">
                首页
              </a>
            </li>
            <li class="nav-item">
              <a href="/index.php/know/profile" class="nav-link">
                基本信息
              </a>
            </li>
            <li class="nav-item">
              <a href="/index.php/know/storyboard" class="nav-link">
                职业生涯
              </a>
            </li>
            <li class="nav-item">
              <a href="/index.php/data/rank" class="nav-link">
                世界排名
              </a>
            </li>
          </ul>
        </div>
        <div class="col-md-3">
          <ul class="nav">
			<li class="nav-item">
              <a href="/index.php/data/matchdata" class="nav-link">
                比赛数据
              </a>
            </li>
            <li class="nav-item">
              <a href="/index.php/media/video" class="nav-link">
                精选视频
              </a>
            </li>
            <li class="nav-item">
              <a href="/index.php/news/report" class="nav-link">
                球场前线
              </a>
            </li>
            <li class="nav-item">
              <a href="/index.php/news/interview" class="nav-link">
                深度报道
              </a>
            </li>
          </ul>
        </div>
        <div class="col-md-3">
          <h4 class="title">关注王蔷</h4>
          <div class="btn-wrapper profile">
            <a target="_blank" href="https://weibo.com/u/2083921673" class="btn btn-icon btn-neutral btn-round btn-simple" data-toggle="tooltip" data-original-title="关注微博@王蔷——小Q">
              <i class="fab fa-weibo"></i>
            </a>
            <a target="_blank" href="https://www.instagram.com/qiang.wang92/" class="btn btn-icon btn-neutral btn-round btn-simple" data-toggle="tooltip" data-original-title="关注Instagram@qiang.wang92">
              <i class="fab fa-instagram"></i>
            </a>
            <h4 class="title">联系作者</h4>
            <div class="btn-wrapper profile">
              <a target="_blank" href="https://www.weibo.com/1970951427/" class="btn btn-icon btn-neutral btn-round btn-simple" data-toggle="tooltip" data-original-title="关注微博@Winner_Ace">
                <i class="fab fa-weibo"></i>
              </a>
              <a target="_blank" href="https://www.instagram.com/winner_ace/" class="btn btn-icon btn-neutral btn-round btn-simple" data-toggle="tooltip" data-original-title="关注Instagram@Winner_Ace">
                <i class="fab fa-instagram"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-12">
          <center><p>&copy; 2018 Yiming Zhang, CUHK<p></center>
          </div>
      </div>
    </div>

  </footer>
<?php wp_footer(); ?>

<!--   Core JS Files   -->
<script src="<?php bloginfo("template_url"); ?>/assets/js/core/jquery.min.js" type="text/javascript"></script>
<script src="<?php bloginfo("template_url"); ?>/assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="<?php bloginfo("template_url"); ?>/assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php bloginfo("template_url"); ?>/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="<?php bloginfo("template_url"); ?>/assets/js/plugins/bootstrap-switch.js"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="<?php bloginfo("template_url"); ?>/assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
<!-- Chart JS -->
<script src="<?php bloginfo("template_url"); ?>/assets/js/plugins/chartjs.min.js"></script>
<!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
<script src="<?php bloginfo("template_url"); ?>/assets/js/plugins/moment.min.js"></script>
<script src="<?php bloginfo("template_url"); ?>/assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
<!-- Control Center for Black UI Kit: parallax effects, scripts for the example pages etc -->
<script src="<?php bloginfo("template_url"); ?>/assets/js/blk-design-system.min.js?v=1.0.0" type="text/javascript"></script>
<script>
  $(document).ready(function() {
    blackKit.initDatePicker();
    blackKit.initSliders();
  });

  function scrollToDownload() {

    if ($('.section-download').length != 0) {
      $("html, body").animate({
        scrollTop: $('.section-download').offset().top
      }, 1000);
    }
  }
</script>
</body>
</html>
