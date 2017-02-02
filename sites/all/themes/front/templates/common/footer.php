<footer class="footer section-padding">
	<div class="container">
		<div class="row">
			<div style="visibility: visible; animation-name: zoomIn;" class="col-sm-12 text-center wow zoomIn">
				<h3><?php echo __('تابعنا');?></h3>
				<div class="footer_social">
					<ul>
						<?php if(variable_get('facebook_url') != ''){?>
							<li>
								<a target="_blank" class="f_facebook" href="<?php echo variable_get('facebook_url');?>">
									<i class="fa fa-facebook"></i>
								</a>
							</li>
						<?php }?>
						<?php if(variable_get('twitter_url') != ''){?>
							<li>
								<a target="_blank" class="f_twitter" href="<?php echo variable_get('twitter_url');?>">
									<i class="fa fa-twitter"></i>
								</a>
							</li>
						<?php }?>
						<?php if(variable_get('google_plus_url') != ''){?>
							<li>
								<a target="_blank" class="f_google" href="<?php echo variable_get('google_plus_url');?>">
									<i class="fa fa-google-plus"></i>
								</a>
							</li>
						<?php }?>
						<?php if(variable_get('linkedin_url') != ''){?>
							<li>
								<a target="_blank" class="f_linkedin" href="<?php echo variable_get('linkedin_url');?>">
									<i class="fa fa-linkedin"></i>
								</a>
							</li>
						<?php }?>
					</ul>
				</div>																
			</div>
		</div>
	</div>
</footer>
<div class="footer-bottom">
	<div class="container">
		<div style="visibility: visible; animation-name: zoomIn;" class="col-md-12 text-center wow zoomIn">
			<div class="footer_copyright">
				<p>© <?php echo date('Y').' '.__('جميع الحقوق محفوظة');?>.</p>					
				<div class="credits">
              </div>
			</div>
		</div>
	</div>
</div>    
<div id="Developer">
    Developed by <a href="http://www.mohamedelsayed.net" target="_blank">Mohamed Elsayed</a>
</div>
<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
