<?php elsayed_redirect_user_to_admin();
global $base_url;?>   
<header id="home">
	<section class="top-nav hidden-xs">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="top-left">
						<ul>
							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-vk" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-6">
					<div class="top-right">
						<p>Location:<span>Main Street 2020, City 3000</span></p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div id="main-nav" style="margin-bottom: 10px;">
		<nav class="navbar">
			<div class="container">
				<div class="navbar-header">
					<a href="<?php echo $base_url;?>" class="navbar-brand" style="padding:0px;background-color:transparent;">
						<img src="<?php echo $base_url.'/'.path_to_theme().'/images';?>/common/logo.png" />
					</a>
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#ftheme">
						<span class="sr-only">Toggle</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div class="navbar-collapse collapse" id="ftheme">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#home">home</a></li>
						<li><a href="#about">About Me</a></li>
						<li><a href="#service">services</a></li>
						<li><a href="#portfolio">portfolio</a></li>
						<li><a href="#contact">contact</a></li>
						<li class="hidden-sm hidden-xs">
							<a href="#" id="ss"><i class="fa fa-search" aria-hidden="true"></i></a>
						</li>
					</ul>
				</div>
				<div class="search-form">
					<form>
						<input type="text" id="s" size="40" placeholder="Search..." />
					</form>
				</div>
			</div>
		</nav>
	</div>
</header>