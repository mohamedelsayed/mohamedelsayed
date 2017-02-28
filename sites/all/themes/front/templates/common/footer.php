<?php /*<div id="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="footer-heading">
					<h3><span>about</span> us</h3>
					<p>To explore strange new worlds to seek out new life and new civilizations to boldly go where no man has gone before. It's time to play the music.</p>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="footer-heading">
					<h3><span>latest</span> news</h3>
					<ul>
						<li><a href="#">Trends don't matter, but techniques do</a></li>
						<li><a href="#">Trends don't matter, but techniques do</a></li>
						<li><a href="#">Trends don't matter, but techniques do</a></li>
						<li><a href="#">Trends don't matter, but techniques do</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-4">
				<div class="footer-heading">
					<h3><span>follow</span> us on instagram</h3>
					<div class="insta">
						<ul>
							<img src="<?php echo $base_url.'/'.path_to_theme().'/images';?>/footer/footer1.jpg" alt="">
							<img src="<?php echo $base_url.'/'.path_to_theme().'/images';?>/footer/footer2.jpg" alt="">
							<img src="<?php echo $base_url.'/'.path_to_theme().'/images';?>/footer/footer3.jpg" alt="">
							<img src="<?php echo $base_url.'/'.path_to_theme().'/images';?>/footer/footer4.jpg" alt="">
							<img src="<?php echo $base_url.'/'.path_to_theme().'/images';?>/footer/footer5.jpg" alt="">
							<img src="<?php echo $base_url.'/'.path_to_theme().'/images';?>/footer/footer6.jpg" alt="">
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>*/?>
<!--bottom footer-->
<div id="bottom-footer">
	<div class="container">
		<div class="row">
			<div class="col-md-5 col-xs-12 text-center">
				<div class="footer-left">
					&copy; <?php echo date('Y').' '.__('All rights reserved').'.';?>
                	<?php echo __('Developed by');?> <a href="http://www.mohamedelsayed.net" target="_blank"><?php echo __('Mohamed Elsayed');?></a>
				</div>
			</div>
			<div class="col-md-7 col-xs-12 text-center">
				<div class="footer-right">
                    <ul class="list-unstyled list-inline pull-right text-center">
                    	<?php include 'menu.php';?>
                    </ul>
				</div>
			</div>
		</div>
	</div>
	<section class="bottom-nav visible-xs text-center">
					<div class="bottom-left">
						<ul>
							<?php include 'social.php';?>
						</ul>
					</div>
				<?php /*<div class="col-md-6">
					<div class="top-right">
						<p>Location:<span>Main Street 2020, City 3000</span></p>
					</div>
				</div>*/?>
	</section>
</div>
<div id="Developer">
    Developed by <a href="http://www.mohamedelsayed.net" target="_blank">Mohamed Elsayed</a>
</div>
<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<script type="text/javascript">
jQuery(document).ready(function(){
	jQuery(".active").click(function(){
	    jQuery(".collapse").toggle();
	});
});
</script>