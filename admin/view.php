<header>
	<div class="owc-header">
		<h2 class="owc-title">
			<svg height="88" width="60">
				<defs>
					<linearGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="0%">
						<stop offset="0%" style="stop-color: rgb(0,0,0);stop-opacity:1"></stop>
						<stop offset="100%" style="stop-color:rgb(0,0,0);stop-opacity:1"></stop>
					</linearGradient>
				</defs>
				<ellipse cx="30" cy="42" rx="24" ry="15" fill="url(#grad1)"></ellipse>
				<text fill="#ffffff" font-size="12" font-family="Verdana" x="15" y="48"><?php echo esc_html('OWC','olivewp-companion');?></text>
			</svg>
			<?php echo esc_html('OliveWP Companion','olivewp-companion');?>
		</h2>
		<p><?php echo esc_html__('The most innovative, intuitive and lightning fast WordPress theme. Build your next web project visually, in no time.','olivewp-companion');?></p>
	</div>
	
	<div class="tab">
	<?php 
	if(!function_exists('olivewp_plus_activate')){?>
		<button class="tablinks active" onclick="olivewp_companion_opentab(event, 'Home')"><?php echo esc_html__('Home','olivewp-companion');?></button>

		<button class="tablinks" onclick="olivewp_companion_opentab(event, 'Extensions')" ><?php echo esc_html__('Extensions','olivewp-companion');?></button>

		<button class="tablinks" onclick="olivewp_companion_opentab(event, 'recommended_actions')"><?php echo esc_html__('Recommended Plugin','olivewp-companion');?></button>
		
		<button class="tablinks" onclick="olivewp_companion_opentab(event, 'Changelog')"><?php echo esc_html__('Changelog','olivewp-companion');?></button>
	<?php }
	else { ?>
		<button class="tablinks active" onclick="olivewp_companion_opentab(event, 'Extensions')" ><?php echo esc_html__('Extensions','olivewp-companion');?></button>
	<?php } ?>
	</div>
</header>
<?php 
if(!function_exists('olivewp_plus_activate')){?>
<div id="Home" class="tabcontent" style="display:block;">
	<div id="getting_started" class="olivewp-tab-pane active">
		<div class="spice-container">
			<div class="spice-row">
				<div class="spice-col-1">
					<?php $olivewp_companion_name = wp_get_theme();?>
				</div>
			</div> 
			<div class="spice-row" style="margin-top: 20px;">

				<div class="spice-col-1">
				    <div class="olivewp-page" style="border: none;box-shadow: none;">
						<div class="mockup">
				    		<img src="<?php echo OLIVEWP_TEMPLATE_DIR_URI.'/admin/assets/img/mockup-lite.png';?>"  width="100%">
				    	</div>
					</div>	
				</div>	

			</div>
			
			<div class="spice-row" style="margin-top: 20px;">
				<div class="spice-col-3"> 
					<div class="olivewp-page">
						<div class="olivewp-page-top"><?php 
						/* translators: %s: theme name */
						printf( esc_html__( 'Additional features in %s Plus', 'olivewp-companion' ), esc_html($olivewp_companion_name) ); ?></div>
						<div class="olivewp-page-content">
							<ul class="olivewp-page-list-flex first">
								<li>
									<?php echo esc_html__('Header Presets','olivewp-companion'); ?>
								</li>
												
								<li>
									<?php echo esc_html__('Predefined Color Schemes','olivewp-companion'); ?>
								</li>
								
								<li>
									<?php echo esc_html__('Multiple Search Effects','olivewp-companion'); ?>
								</li>
														
								<li>
									<?php echo esc_html__('Post Navigation Styles','olivewp-companion'); ?>
								</li>

								<li>
									<?php echo esc_html__('Enhanced Footer Bar Settings','olivewp-companion'); ?>
								</li>
								
								<li>
									<?php echo esc_html__('Additional Colors & Background Features','olivewp-companion'); ?>
								</li>
														
							</ul>
							<ul class="olivewp-page-list-flex second">
								
								<li>
									<?php echo esc_html__('Multiple Blog Templates','olivewp-companion'); ?>
								</li>					
								
								<li>
									<?php echo esc_html__('Multiple Preloader Designs','olivewp-companion'); ?>
								</li>
								
								<li>
									<?php echo esc_html__('Breadcrumb Settings','olivewp-companion'); ?>
								</li>						
								
								
								<li>
									<?php echo esc_html__('Enhanced Footer Widgets Settings','olivewp-companion'); ?>
								</li>
								
								
								
								<li>
									<?php echo esc_html__('Additional Typography Features','olivewp-companion'); ?>
								</li>
								
								<li>
									<?php echo esc_html__('Enhanced Container Width Settings','olivewp-companion'); ?>
								</li>						
							</ul>
						</div>
					</div>
				</div>

				<div class="spice-col-3"> 					
					<div class="olivewp-page">
						<div class="olivewp-page-top"><?php esc_html_e( 'Useful Links', 'olivewp-companion' ); ?></div>
						<div class="olivewp-page-content">
							<ul class="olivewp-page-list-flex first">
								<li>
									<a class="olivewp-page-quick-setting-link" href="<?php echo esc_url('https://olivewp.org/starter-sites/'); ?>" target="_blank"><?php echo esc_html__('Starter Sites','olivewp-companion'); ?></a>
								</li>

							    <li> 
									<a class="olivewp-page-quick-setting-link" href="<?php echo esc_url('https://wordpress.org/support/theme/olivewp/reviews/#new-post'); ?>" target="_blank"><?php echo esc_html__('Your feedback is valuable to us','olivewp-companion'); ?></a>
								</li>
								
							    <li> 
									<a class="olivewp-page-quick-setting-link" href="<?php echo esc_url('https://olivewp.org/contact/'); ?>" target="_blank"><?php echo esc_html__('Pre-sales enquiry','olivewp-companion'); ?></a>
								</li> 

								<li> 
									<a class="olivewp-page-quick-setting-link" href="<?php echo esc_url('https://olivewp.org/olivewp-changelog/'); ?>" target="_blank"><?php echo esc_html__('Changelog','olivewp-companion'); ?></a>
								</li> 
							</ul>
							<ul class="olivewp-page-list-flex second">
								<li>
									<a class="olivewp-page-quick-setting-link" href="<?php echo esc_url('https://wordpress.org/support/theme/olivewp/'); ?>" target="_blank"><?php 
										/* translators: %s: theme name */
										printf( esc_html__('%s Theme Support','olivewp-companion'), esc_html($olivewp_companion_name) ); ?></a>
								</li>
									
								<li>
									<a class="olivewp-page-quick-setting-link" href="<?php echo esc_url('https://olivewp.org'); ?>" target="_blank"><?php 
										/* translators: %s: theme name */
										printf( esc_html__('%s Plus Details','olivewp-companion'), esc_html($olivewp_companion_name) ); ?></a>
								</li>

								<li> 
									<a class="olivewp-page-quick-setting-link" href="<?php echo esc_url('https://olivewp.org/olivewp-free-vs-plus/'); ?>" target="_blank"><?php echo esc_html__('Free vs Plus','olivewp-companion'); ?></a>
								</li> 

								 
							</ul>
						</div>
					</div>
				</div>		
			</div>

		</div>
	</div>
	<div class="owc-customizer-shortcode">
		<h2><?php echo esc_html__('Customizer Shortcuts','olivewp-companion');?></h2>

		<div class="sub-tab">		
			<h4><?php echo esc_html__('Color Options','olivewp-companion');?></h4>
			<p><?php echo esc_html__('Set the theme global colors, select the font, button and background colors.','olivewp-companion');?></p>
			<a target="_blank" href="<?php echo esc_url( admin_url( 'customize.php?autofocus[panel]=colors_back_settings' ) ); ?> 
			" class="owc-button"><?php echo esc_html__('Go to option','olivewp-companion');?></a>
		</div>

		<div class="sub-tab">		
			<h4><?php echo esc_html__('Breadcrumb','olivewp-companion');?></h4>
			<p><?php echo esc_html__('Set the theme Breadcrumb, Page Title Position, Markup and Alignment.','olivewp-companion');?></p>
			<a target="_blank" href="<?php echo esc_url( admin_url( 'customize.php?autofocus[section]=bredcrumb_section' ) ); ?> 
			" class="owc-button"><?php echo esc_html__('Go to option','olivewp-companion');?></a>
		</div>
		<div class="sub-tab">		
			<h4><?php echo esc_html__('Container Width','olivewp-companion');?></h4>
			<p><?php echo esc_html__('Set the theme Container Width, adjust also Content Width and Sidebar Width.','olivewp-companion');?></p>
			<a target="_blank" href="<?php echo esc_url( admin_url( 'customize.php?autofocus[section]=container_width_section' ) ); ?> 
			" class="owc-button"><?php echo esc_html__('Go to option','olivewp-companion');?></a>
		</div>
		<div class="sub-tab">		
			<h4><?php echo esc_html__('Sidebar Layout','olivewp-companion');?></h4>
			<p><?php echo esc_html__('Set the theme Sidebar Layout, select Blog/Archives, Single and Page Layout.','olivewp-companion');?></p>
			<a target="_blank" href="<?php echo esc_url( admin_url( 'customize.php?autofocus[section]=sidebar_layout_setting_section' ) ); ?> 
			" class="owc-button"><?php echo esc_html__('Go to option','olivewp-companion');?></a>
		</div>

		<!-- Next Row -->
		<div class="sub-tab">		
			<h4><?php echo esc_html__('Blog Options','olivewp-companion');?></h4>
			<p><?php echo esc_html__('Set the theme Blog Layout, select Blog/Archives, Single and Meta settings.','olivewp-companion');?></p>
			<a target="_blank" href="<?php echo esc_url( admin_url( 'customize.php?autofocus[panel]=olivewp_theme_panel' ) ); ?> 
			" class="owc-button"><?php echo esc_html__('Go to option','olivewp-companion');?></a>
		</div>

		<div class="sub-tab">		
			<h4><?php echo esc_html__('Theme Style Settings','olivewp-companion');?></h4>
			<p><?php echo esc_html__('Set the theme Style & Layout, Select custom color skin and theme Layout.','olivewp-companion');?></p>
			<a target="_blank" href="<?php echo esc_url( admin_url( 'customize.php?autofocus[section]=theme_style' ) ); ?> 
			" class="owc-button"><?php echo esc_html__('Go to option','olivewp-companion');?></a>
		</div>

		<div class="sub-tab">		
			<h4><?php echo esc_html__('General Settings','olivewp-companion');?></h4>
			<p><?php echo esc_html__('Set the theme General Settings, select Preloader, Sticky Header, Breadcrumb etc.','olivewp-companion');?></p>
			<a target="_blank" href="<?php echo esc_url( admin_url( 'customize.php?autofocus[panel]=olivewp_general_settings' ) ); ?> 
			" class="owc-button"><?php echo esc_html__('Go to option','olivewp-companion');?></a>
		</div>

		<div class="sub-tab">		
			<h4><?php echo esc_html__('Typography Settings','olivewp-companion');?></h4>
			<p><?php echo esc_html__('Set the theme Typography Settings, select Fonts Families, Size and Line height.','olivewp-companion');?></p>
			<a target="_blank" href="<?php echo esc_url( admin_url( 'customize.php?autofocus[panel]=olivewp_typography_setting' ) ); ?> 
			" class="owc-button"><?php echo esc_html__('Go to option','olivewp-companion');?></a>
		</div>
	</div>
	<div class="owc-support-container">
		<h2><?php echo esc_html__('Need help or advice?','olivewp-companion');?></h2>
		<p><?php echo esc_html__('Got a question or need help with the theme? You can always submit a support ticket or ask for help from our support team.','olivewp-companion');?></p>
		<a target="_blank" href="<?php echo esc_url('https://olivewp.org/support/');?>" class="owc-button" data-hover="blue" target="_blank"><?php echo esc_html__('Submit a Support Ticket','olivewp-companion');?></a> 
	</div>
</div>

<div id="Extensions" class="tabcontent">
	<div class="sub-tab">
		<h3><?php echo esc_html__('Trending Posts','olivewp-companion');?></h3>
		<p><?php echo esc_html__('Highlight your most popular posts or products based on the number of comments or reviews they have gotten in the specified period of time.','olivewp-companion');?></p>
		<div class="ct-extension-actions">
			<?php  
			if(isset($_GET["action1"])){
				$olivewp_companion_action = sanitize_text_field($_GET["action1"]);
			} else{
				$olivewp_companion_action = '';
			}
			if($olivewp_companion_action!=''){
		    update_option('trending_posts_value',$olivewp_companion_action);
		  }
			if(get_option('trending_posts_value')==null){?>
				<a id="button1" class="owc-button-primary" data-hover="white" href="<?php echo esc_url(admin_url('admin.php?page=olivewp-companion&action1=deactivate'));?>" aria-label="Activate" ><?php echo esc_html__('Activate','olivewp-companion');?></a>
			<?php }
			elseif(get_option('trending_posts_value')=='activate'){?>
					<a id="button1" class="owc-button-primary" data-hover="white" href="<?php echo esc_url(admin_url('admin.php?page=olivewp-companion&action1=deactivate'));?>" aria-label="Activate" ><?php echo esc_html__('Activate','olivewp-companion');?></a>
			<?php }
			elseif(get_option('trending_posts_value')=='deactivate'){?>
					<a id="button1" class="owc-button" data-hover="white" href="<?php echo esc_url(admin_url('admin.php?page=olivewp-companion&action1=activate'));?>" aria-label="Activate" ><?php echo esc_html__('Deactivate','olivewp-companion');?></a>
			<?php } ?>
		</div>	
	</div> 

	<div class="sub-tab">
		<h3><?php echo esc_html__('Spice Starter Sites','olivewp-companion');?></h3>
		<p><?php echo esc_html__('The plugin allows you to create professional designed pixel perfect websites in minutes. Import the stater sites to create the websites.','olivewp-companion');?></p>
		<div class="ct-extension-actions">
			<?php  
			if(isset($_GET["action2"])){
				$olivewp_companion_action = sanitize_text_field($_GET["action2"]);
			} else{
				$olivewp_companion_action = '';
			}
			if($olivewp_companion_action!=''){
		    update_option('spice_starter_sites_value',$olivewp_companion_action);
		  }
			if(get_option('spice_starter_sites_value')==null){?>
				<a id="button2" class="owc-button-primary" data-hover="white" href="<?php echo esc_url(admin_url('admin.php?page=olivewp-companion&action2=deactivate'));?>" aria-label="Activate" ><?php echo esc_html__('Activate','olivewp-companion');?></a>
			<?php }
			elseif(get_option('spice_starter_sites_value')=='activate'){?>
					<a id="button2" class="owc-button-primary" data-hover="white" href="<?php echo esc_url(admin_url('admin.php?page=olivewp-companion&action2=deactivate'));?>" aria-label="Activate" ><?php echo esc_html__('Activate','olivewp-companion');?></a>
			<?php }
			elseif(get_option('spice_starter_sites_value')=='deactivate'){?>
					<a id="button2" class="owc-button" data-hover="white" href="<?php echo esc_url(admin_url('admin.php?page=olivewp-companion&action2=activate'));?>" aria-label="Activate" ><?php echo esc_html__('Deactivate','olivewp-companion');?></a>
			<?php } ?>
		</div>	
	</div>

</div>

<?php 
	$olivewp_companion_about_page=olivewp_about_page();
	$olivewp_companion_actions = $olivewp_companion_about_page->recommended_actions;
	$olivewp_companion_actions_todo = get_option( 'recommended_actions', false );
?>
<div id="recommended_actions" class="tabcontent lite">
	<div class="action-list">
		<?php 
		if($olivewp_companion_actions): 
			foreach ($olivewp_companion_actions as $key => $olivewp_companion_val):
				if($olivewp_companion_val['id']!='install_olivewp-companion'):?>
					<div class="sub-tab" id="<?php echo esc_attr($olivewp_companion_val['id']); ?>">
						<div class="action-box">
							<div class="action-watch">
							<?php if(!$olivewp_companion_val['is_done']): ?>
								<?php if(!isset($olivewp_companion_actions_todo[$olivewp_companion_val['id']]) || !$olivewp_companion_actions_todo[$olivewp_companion_val['id']]): ?>
									<span class="dashicons dashicons-visibility"></span>
								<?php else: ?>
									<span class="dashicons dashicons-hidden"></span>
								<?php endif; ?>
							<?php else: ?>
								<span class="dashicons dashicons-yes"></span>
							<?php endif; ?>
							</div>
							<div class="action-inner">
								<h3 class="action-title"><?php echo esc_html($olivewp_companion_val['title']); ?></h3>
								<div class="action-desc"><?php echo esc_html($olivewp_companion_val['desc']); ?></div>
								<div class="ct-extension-actions"><?php echo wp_kses_post($olivewp_companion_val['link']); ?></div>
							</div>
						</div>
					</div>
				<?php
				endif; 
			endforeach; 
		endif;?>
	</div>
</div>
<div id="Changelog" class="tabcontent">
	<?php 
	$olivewp_companion_path = OWC_PLUGIN_DIR."/admin/changelog.txt";
	$olivewp_companion_file = file_get_contents($olivewp_companion_path);
	$olivewp_companion_result = htmlentities($olivewp_companion_file);?>
	<code><pre><?php echo wp_kses_post($olivewp_companion_result);?></pre></code>
</div>
<?php }
else{?>
	<div id="Extensions" class="tabcontent" style="display: block;">
	<div class="sub-tab">
		<h3><?php echo esc_html__('Trending Posts','olivewp-companion');?></h3>
		<p><?php echo esc_html__('Highlight your most popular posts or products based on the number of comments or reviews they have gotten in the specified period of time.','olivewp-companion');?></p>
		<div class="ct-extension-actions">
			<?php  
			if(isset($_GET["action1"])){
				$olivewp_companion_action = sanitize_text_field($_GET["action1"]);
			} else{
				$olivewp_companion_action = '';
			}
			if($olivewp_companion_action!=''){
		    update_option('trending_posts_value',$olivewp_companion_action);
		  }
			if(get_option('trending_posts_value')==null){?>
				<a id="button1" class="owc-button-primary" data-hover="white" href="<?php echo esc_url(admin_url('admin.php?page=extensions&action1=deactivate'));?>" aria-label="Activate" ><?php echo esc_html__('Activate','olivewp-companion');?></a>
			<?php }
			elseif(get_option('trending_posts_value')=='activate'){?>
					<a id="button1" class="owc-button-primary" data-hover="white" href="<?php echo esc_url(admin_url('admin.php?page=extensions&action1=deactivate'));?>" aria-label="Activate" ><?php echo esc_html__('Activate','olivewp-companion');?></a>
			<?php }
			elseif(get_option('trending_posts_value')=='deactivate'){?>
					<a id="button1" class="owc-button" data-hover="white" href="<?php echo esc_url(admin_url('admin.php?page=extensions&action1=activate'));?>" aria-label="Activate" ><?php echo esc_html__('Deactivate','olivewp-companion');?></a>
			<?php } ?>
		</div>	
	</div> 

	<div class="sub-tab">
		<h3><?php echo esc_html__('Spice Starter Sites','olivewp-companion');?></h3>
		<p><?php echo esc_html__('The plugin allows you to create professional designed pixel perfect websites in minutes. Import the stater sites to create the websites.','olivewp-companion');?></p>
		<div class="ct-extension-actions">
			<?php  
			if(isset($_GET["action2"])){
				$olivewp_companion_action = sanitize_text_field($_GET["action2"]);
			} else{
				$olivewp_companion_action = '';
			}
			if($olivewp_companion_action!=''){
		    update_option('spice_starter_sites_value',$olivewp_companion_action);
		  }
			if(get_option('spice_starter_sites_value')==null){?>
				<a id="button2" class="owc-button-primary" data-hover="white" href="<?php echo esc_url(admin_url('admin.php?page=extensions&action2=deactivate'));?>" aria-label="Activate" ><?php echo esc_html__('Activate','olivewp-companion');?></a>
			<?php }
			elseif(get_option('spice_starter_sites_value')=='activate'){?>
					<a id="button2" class="owc-button-primary" data-hover="white" href="<?php echo esc_url(admin_url('admin.php?page=extensions&action2=deactivate'));?>" aria-label="Activate" ><?php echo esc_html__('Activate','olivewp-companion');?></a>
			<?php }
			elseif(get_option('spice_starter_sites_value')=='deactivate'){?>
					<a id="button2" class="owc-button" data-hover="white" href="<?php echo esc_url(admin_url('admin.php?page=extensions&action2=activate'));?>" aria-label="Activate" ><?php echo esc_html__('Deactivate','olivewp-companion');?></a>
			<?php } ?>
		</div>	
	</div>

</div>
<?php } ?>

<script type="text/javascript">
	
    var d1=window.location.href;
   
    if (d1.includes("action2")) { 
    	dummyString = d1.split('&')[0];
        window.location.replace(dummyString);
    }
</script>