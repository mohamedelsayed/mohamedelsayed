<?php global $sitelang; ?>
<?php
if (isset($home_widgets['about']) && !empty($home_widgets['about'])) {
    $item = $home_widgets['about'];
    $title = '';
    $body = '';
    if (isset($item->title)) {
        $title = $item->title;
    }
    if (isset($item->body[LANGUAGE_NONE][0]['value'])) {
        $body = $item->body[LANGUAGE_NONE][0]['value'];
    }
    ?>
    <div id="aboutme" class="aboutme">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
                    <div class="about-heading">
                        <h2><?php echo $title; ?></h2>
                        <div>
                            <?php echo $body; ?>
                        </div>
                    </div>
                </div>
                <div class="view_more">
                    <a hreflang="<?php echo $sitelang; ?>" href="<?php echo $base_url . '/about-me'; ?>" class="btn btn-default view_more_btn" ><?php echo __('View More'); ?></a>
                </div>
            </div>
        </div>
        <?php /* <div class="container">
          <div class="row">
          <div class="col-xs-12 hidden-sm col-md-5">

          <div class="about-left">
          <img src="<?php echo $base_url.'/'.path_to_theme().'/images';?>/about/about1.jpg" alt="">
          </div>
          </div>
          <!--about wrapper right-->
          <div class="col-xs-12 col-md-7">
          <div class="about-right">
          <div class="about-right-heading">
          <h1>about our consulting</h1>
          </div>
          <div class="about-right-boot">
          <div class="about-right-wrapper">
          <a hreflang="<?php echo $sitelang; ?>" href="#"><h3>Boost Your Business</h3></a>
          <p>Michael Knight a young loner on a crusa champion the cause of the innocent. The helpless. powerless in a world of operate above the law.</p>
          </div>
          </div>
          <div class="about-right-best">
          <div class="about-right-wrapper">
          <a hreflang="<?php echo $sitelang; ?>" href="#"><h3>Best Business Statitics</h3></a>
          <p>Michael Knight a young loner on a crusa champion the cause of the innocent. The helpless. powerless in a world of operate above the law.</p>
          </div>
          </div>

          <div class="about-right-support">
          <div class="about-right-wrapper">
          <a hreflang="<?php echo $sitelang; ?>" href="#"><h3>24/7 Online Support</h3></a>
          <p>Michael Knight a young loner on a crusa champion the cause of the innocent. The helpless. powerless in a world of operate above the law.</p>
          </div>
          </div>
          </div>
          </div>
          </div>
          </div> */ ?>
    </div>
    <?php /* <div id="about-bg">
      <div class="container">
      <div class="row">
      <div class="about-bg-heading">
      <h1>sucessfull stats about us</h1>
      <p>what we have achieved so far</p>
      </div>
      <div class=" col-xs-12 col-md-3">
      <div class="about-bg-wrapper">
      <span class="count"><h1><span class="border">32</span>15</h1></span>
      <p>happy client</p>
      </div>
      </div>
      <div class="col-xs-12 col-md-3">
      <div class="about-bg-wrapper">
      <span class="count"><h1>2217</h1></span>
      <p>projects</p>
      </div>
      </div>
      <div class="col-xs-12 col-md-3">
      <div class="about-bg-wrapper">
      <span class="count"><h1>1522</h1></span>
      <p>branches</p>
      </div>
      </div>
      <div class="col-xs-12 col-md-3">
      <div class="about-bg-wrapper">
      <span class="count"><h1>3151</h1></span>
      <p>expert team</p>
      </div>
      </div>
      </div>
      </div>
      <div class="cover"></div>
      </div> */ ?>
    <?php
}?>