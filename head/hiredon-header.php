<?php global $current_user ?>
<header id="header-wrapper" data-size="big">
	<div class="top-header">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 header">
					<a href="<?php echo home_url(); ?>" id="logo"><?php fre_logo('site_logo_black') ?></a>
					<div class="menu-outer-wrapper">
						<a href="javascript:void(0);" id="menu-trigger" >
							<img src="<?php echo get_template_directory_uri(); ?>/img/icon_menu.png">
						</a>
						<div class="menu-inner-wrapper" id="menu-wrapper">
							<h3>Hired On</h3>
							<?php wp_nav_menu(array('menu'=>'main_menu','container_class'=>'menu-container','container'=>'false'));?>
							<h3>Candidate</h3>
							<ul>
								<?php if(!is_user_logged_in()){ ?>
									<li><a href="/login">Login</a> or <a href="/register">Register</a></li>
								<?php } else { ?>
									<li><?php echo $current_user->display_name; ?></li>
								<?php } ?>
							</ul>
							<!-- Temporary menu -->
							<?php wp_nav_menu(array('menu'=>'main_menu','container_class'=>'menu-container','container'=>'false'));?>
							<h3>Employer</h3>
							<ul>
								<?php if(!is_user_logged_in()){ ?>
									<li><a href="/login">Login</a> or <a href="/register">Register</a></li>
								<?php } else { ?>
									<li><?php echo $current_user->display_name; ?></li>
								<?php } ?>
							</ul>
							<!-- Temporary menu -->
							<?php wp_nav_menu(array('menu'=>'main_menu','container_class'=>'menu-container','container'=>'false'));?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>