<?php
elsayed_redirect_user_to_admin();
global $base_url;
?>
<?php global $sitelang; ?>
<header id="home">
    <section class="top-nav hidden-xs">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="top-left">
                        <ul>
                            <?php include 'social.php'; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div id="main-nav" style="margin-bottom: 10px;">
        <nav class="navbar">
            <div class="container">
                <div class="navbar-header">
                    <a class="link link--kumya" hreflang="<?php echo $sitelang; ?>" href="<?php echo $base_url; ?>">
                        <img src="<?php echo $base_url . '/' . path_to_theme() . '/images/common/logo1.png'; ?>" />
                    </a>
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#ftheme">
                        <span class="sr-only"><?php echo __('Toggle'); ?></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse" id="ftheme">
                    <ul class="nav navbar-nav navbar-right">
                        <?php include 'menu.php'; ?>
                        <?php /* <li class="hidden-sm hidden-xs">
                          <a href="#" id="ss"><i class="fa fa-search" aria-hidden="true"></i></a>
                          </li> */ ?>
                    </ul>
                </div>
                <?php /* <div class="search-form">
                  <form>
                  <input type="text" id="s" size="40" placeholder="<?php echo __('Search');?>..." />
                  </form>
                  </div> */ ?>
            </div>
        </nav>
    </div>
</header>