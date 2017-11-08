<?php global $sitelang; ?>
<div id="bottom-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-xs-12 text-center">
                <div class="footer-left">
                    &copy; <?php echo date('Y') . ' ' . __('All rights reserved') . '.'; ?>
                    <?php echo __('Developed by'); ?> <a hreflang="<?php echo $sitelang; ?>" href="http://www.mohamedelsayed.net" target="_blank"><?php echo __('Mohamed Elsayed'); ?></a>
                </div>
            </div>
            <div class="col-md-7 col-xs-12 text-center">
                <div class="footer-right">
                    <ul class="list-unstyled list-inline pull-right text-center">
                        <?php include 'menu.php'; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <section class="bottom-nav visible-xs text-center">
        <div class="bottom-left">
            <ul>
                <?php include 'social.php'; ?>
            </ul>
        </div>
        <?php /* <div class="col-md-6">
          <div class="top-right">
          <p>Location:<span>Main Street 2020, City 3000</span></p>
          </div>
          </div> */ ?>
    </section>
</div>
<div id="Developer" class="hidden-xs hidden-sm hidden-md hidden-lg">
    Developed by <a hreflang="<?php echo $sitelang; ?>" href="http://www.mohamedelsayed.net" target="_blank">Mohamed Elsayed</a>
</div>
<a hreflang="<?php echo $sitelang; ?>" href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<script type="text/javascript">
    jQuery(document).ready(function () {
        jQuery(".active").click(function () {
            jQuery(".collapse").toggle();
        });
    });
</script>