<?php
/*
Plugin Name: JB Social Icons Widget
Plugin URI: http://jb-themes.com/plugins/jb-social-icons-widget
Description: Add unlimited social icons into your widget. It supports facebook, twitter, google plus, instagram, pinterest and lots more. There are four icons style.
Version: 1.1.3
Author: jbthemes
Author URI: https://jb-themes.com
License: GPLv2 or later
Text Domain: jbthemes
*/


// Call Plugin Styles

function jb_social_icons_widget_style_and_scripts(){
	
	// Call Font Awesome
	wp_enqueue_style('jb-social-icons-font-awesome', plugins_url( '/css/font-awesome.min.css', __FILE__ ));
	wp_enqueue_style('jb-social-icons-style', plugins_url( '/css/jb-style.css', __FILE__ ));
	
}
add_action('wp_enqueue_scripts', 'jb_social_icons_widget_style_and_scripts');

// Call css for Widget Admin
function jb_social_icons_widget_admin_style(){
	
	wp_enqueue_style('jb-social-icons-style', plugins_url( '/css/jb_admin.css', __FILE__ ));
	
}
add_action('admin_enqueue_scripts', 'jb_social_icons_widget_admin_style');



class JB_Social_Icons_Widget extends WP_Widget {
	
	// Register Widget Title and Description
	public function __construct(){
	
		parent::__construct('jb_social_icons_widget', 'JB Social Icons', array(
			'classname' 	=> 'jb_social_icons_widget', 
			'description' 	=> 'Add Social Icons into any of your widget area'
		));
	
	}
	
	// Get the Output of the Widget 
	public function widget($args, $instance){
	
		echo $args['before_widget'];
		if ( ! empty( $instance['title'] ) ) {
			echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
		}
		?>
		
			<div class="jb_social_container">
				<ul style="text-align:<?php if($instance['jb_align'] == 'right'){ echo 'right';} ?><?php if($instance['jb_align'] == 'center'){ echo 'center';} ?><?php if($instance['jb_align'] == 'left'){ echo 'left';} ?>" class="jb_social_icons_widget <?php if($instance['jb_style'] == 'black'){ echo 'jb_social_icons_widget_black';} ?><?php if($instance['jb_style'] == 'rounded-black' || $instance['jb_style'] == 'rounded-colors'){ echo 'jb_social_icons_widget_rounded_colors';} ?>">
				
				<?php if(!empty($instance['jb_facebook'])) : ?>	
					<li><a href="<?php echo $instance['jb_facebook']; ?>" <?php if($instance['jb_style'] == 'colors' || $instance['jb_style'] == 'rounded-colors'){ echo 'class="facebook"';} ?>><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<?php endif; ?>	
				
				<?php if(!empty($instance['jb_youtube'])) : ?>
					<li><a href="<?php echo $instance['jb_youtube']; ?>" <?php if($instance['jb_style'] == 'colors' || $instance['jb_style'] == 'rounded-colors'){ echo 'class="youtube"';} ?>><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
				<?php endif; ?>		
				
				<?php if(!empty($instance['jb_twitter'])) : ?>	
					<li><a href="<?php echo $instance['jb_twitter']; ?>" <?php if($instance['jb_style'] == 'colors' || $instance['jb_style'] == 'rounded-colors'){ echo 'class="twitter"';} ?>><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				<?php endif; ?>		
				
				<?php if(!empty($instance['jb_linkedin'])) : ?>	
					<li><a href="<?php echo $instance['jb_linkedin']; ?>" <?php if($instance['jb_style'] == 'colors' || $instance['jb_style'] == 'rounded-colors'){ echo 'class="linkedin"';} ?>><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
				<?php endif; ?>	
				
				<?php if(!empty($instance['jb_pinterest'])) : ?>	
					<li><a href="<?php echo $instance['jb_pinterest']; ?>" <?php if($instance['jb_style'] == 'colors' || $instance['jb_style'] == 'rounded-colors'){ echo 'class="pinterest"';} ?>><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
				<?php endif; ?>	
				
				<?php if(!empty($instance['jb_googleplus'])) : ?>	
					<li><a href="<?php echo $instance['jb_googleplus']; ?>" <?php if($instance['jb_style'] == 'colors' || $instance['jb_style'] == 'rounded-colors'){ echo 'class="googleplus"';} ?>><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
				<?php endif; ?>		
				
				<?php if(!empty($instance['jb_tumblr'])) : ?>	
					<li><a href="<?php echo $instance['jb_tumblr']; ?>" <?php if($instance['jb_style'] == 'colors' || $instance['jb_style'] == 'rounded-colors'){ echo 'class="tumblr"';} ?>><i class="fa fa-tumblr" aria-hidden="true"></i></a></li>
				<?php endif; ?>	
				
				<?php if(!empty($instance['jb_instagram'])) : ?>	
					<li><a href="<?php echo $instance['jb_instagram']; ?>" <?php if($instance['jb_style'] == 'colors' || $instance['jb_style'] == 'rounded-colors'){ echo 'class="instagram"';} ?>><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
				<?php endif; ?>	
				
				<?php if(!empty($instance['jb_reddit'])) : ?>	
					<li><a href="<?php echo $instance['jb_reddit']; ?>" <?php if($instance['jb_style'] == 'colors' || $instance['jb_style'] == 'rounded-colors'){ echo 'class="reddit"';} ?>><i class="fa fa-reddit" aria-hidden="true"></i></a></li>
				<?php endif; ?>	
				
				<?php if(!empty($instance['jb_vk'])) : ?>	
					<li><a href="<?php echo $instance['jb_vk']; ?>" <?php if($instance['jb_style'] == 'colors' || $instance['jb_style'] == 'rounded-colors'){ echo 'class="vk"';} ?>><i class="fa fa-vk" aria-hidden="true"></i></a></li>
				<?php endif; ?>		
				
				<?php if(!empty($instance['jb_flickr'])) : ?>	
					<li><a href="<?php echo $instance['jb_flickr']; ?>" <?php if($instance['jb_style'] == 'colors' || $instance['jb_style'] == 'rounded-colors'){ echo 'class="flickr"';} ?>><i class="fa fa-flickr" aria-hidden="true"></i></a></li>
				<?php endif; ?>	
				
				<?php if(!empty($instance['jb_vimeo'])) : ?>	
					<li><a href="<?php echo $instance['jb_vimeo']; ?>" <?php if($instance['jb_style'] == 'colors' || $instance['jb_style'] == 'rounded-colors'){ echo 'class="vimeo"';} ?>><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
				<?php endif; ?>
				
				<?php if(!empty($instance['jb_vine'])) : ?>	
					<li><a href="<?php echo $instance['jb_vine']; ?>" <?php if($instance['jb_style'] == 'colors' || $instance['jb_style'] == 'rounded-colors'){ echo 'class="vine"';} ?>><i class="fa fa-vine" aria-hidden="true"></i></a></li>
				<?php endif; ?>	
				
				<?php if(!empty($instance['jb_meetup'])) : ?>	
					<li><a href="<?php echo $instance['jb_meetup']; ?>" <?php if($instance['jb_style'] == 'colors' || $instance['jb_style'] == 'rounded-colors'){ echo 'class="meetup"';} ?>><i class="fa fa-meetup" aria-hidden="true"></i></a></li>
				<?php endif; ?>	
				
				<?php if(!empty($instance['jb_snapchat'])) : ?>	
					<li><a href="<?php echo $instance['jb_snapchat']; ?>" <?php if($instance['jb_style'] == 'colors' || $instance['jb_style'] == 'rounded-colors'){ echo 'class="snapchat"';} ?>><i class="fa fa-snapchat" aria-hidden="true"></i></a></li>
				<?php endif; ?>	
				
				<?php if(!empty($instance['jb_soundcloud'])) : ?>	
					<li><a href="<?php echo $instance['jb_soundcloud']; ?>" <?php if($instance['jb_style'] == 'colors' || $instance['jb_style'] == 'rounded-colors'){ echo 'class="soundcloud"';} ?>><i class="fa fa-soundcloud" aria-hidden="true"></i></a></li>
				<?php endif; ?>	
				
				<?php if(!empty($instance['jb_skype'])) : ?>	
					<li><a href="<?php echo $instance['jb_skype']; ?>" <?php if($instance['jb_style'] == 'colors' || $instance['jb_style'] == 'rounded-colors'){ echo 'class="skype"';} ?>><i class="fa fa-skype" aria-hidden="true"></i></a></li>
				<?php endif; ?>	
				
				<?php if(!empty($instance['jb_wordpress'])) : ?>	
					<li><a href="<?php echo $instance['jb_wordpress']; ?>" <?php if($instance['jb_style'] == 'colors' || $instance['jb_style'] == 'rounded-colors'){ echo 'class="wordpress"';} ?>><i class="fa fa-wordpress" aria-hidden="true"></i></a></li>
				<?php endif; ?>	
				
				<?php if(!empty($instance['jb_xing'])) : ?>	
					<li><a href="<?php echo $instance['jb_xing']; ?>" <?php if($instance['jb_style'] == 'colors' || $instance['jb_style'] == 'rounded-colors'){ echo 'class="xing"';} ?>><i class="fa fa-xing" aria-hidden="true"></i></a></li>
				<?php endif; ?>	
				
				<?php if(!empty($instance['jb_stumbleupon'])) : ?>	
					<li><a href="<?php echo $instance['jb_stumbleupon']; ?>" <?php if($instance['jb_style'] == 'colors' || $instance['jb_style'] == 'rounded-colors'){ echo 'class="stumbleupon"';} ?>><i class="fa fa-stumbleupon" aria-hidden="true"></i></a></li>
				<?php endif; ?>	
				
				<?php if(!empty($instance['jb_stack_overflow'])) : ?>	
					<li><a href="<?php echo $instance['jb_stack_overflow']; ?>" <?php if($instance['jb_style'] == 'colors' || $instance['jb_style'] == 'rounded-colors'){ echo 'class="stackoverflow"';} ?>><i class="fa fa-stack-overflow" aria-hidden="true"></i></a></li>
				<?php endif; ?>	
				
				<?php if(!empty($instance['jb_github'])) : ?>	
					<li><a href="<?php echo $instance['jb_github']; ?>" <?php if($instance['jb_style'] == 'colors' || $instance['jb_style'] == 'rounded-colors'){ echo 'class="github"';} ?>><i class="fa fa-github" aria-hidden="true"></i></a></li>
				<?php endif; ?>	
				
				<?php if(!empty($instance['jb_behance'])) : ?>	
					<li><a href="<?php echo $instance['jb_behance']; ?>" <?php if($instance['jb_style'] == 'colors' || $instance['jb_style'] == 'rounded-colors'){ echo 'class="behance"';} ?>><i class="fa fa-behance" aria-hidden="true"></i></a></li>
				<?php endif; ?>	
				
				<?php if(!empty($instance['jb_dribbble'])) : ?>	
					<li><a href="<?php echo $instance['jb_dribbble']; ?>" <?php if($instance['jb_style'] == 'colors' || $instance['jb_style'] == 'rounded-colors'){ echo 'class="dribbble"';} ?>><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
				<?php endif; ?>	
				
				</ul>
			</div>
		
		<?php
		echo $args['after_widget'];
	
	}
	
	// Add Widget fields
	public function form( $instance ) {
	
		$title = ! empty( $instance['title'] ) ? $instance['title'] : 'Follow Us';
		$jb_facebook = ! empty( $instance['jb_facebook'] ) ? $instance['jb_facebook'] : '';
		$jb_youtube = ! empty( $instance['jb_youtube'] ) ? $instance['jb_youtube'] : '';
		$jb_twitter = ! empty( $instance['jb_twitter'] ) ? $instance['jb_twitter'] : '';
		$jb_linkedin = ! empty( $instance['jb_linkedin'] ) ? $instance['jb_linkedin'] : '';
		$jb_pinterest = ! empty( $instance['jb_pinterest'] ) ? $instance['jb_pinterest'] : '';
		$jb_googleplus = ! empty( $instance['jb_googleplus'] ) ? $instance['jb_googleplus'] : '';
		$jb_tumblr = ! empty( $instance['jb_tumblr'] ) ? $instance['jb_tumblr'] : '';
		$jb_instagram = ! empty( $instance['jb_instagram'] ) ? $instance['jb_instagram'] : '';
		$jb_reddit = ! empty( $instance['jb_reddit'] ) ? $instance['jb_reddit'] : '';
		$jb_vk = ! empty( $instance['jb_vk'] ) ? $instance['jb_vk'] : '';
		$jb_flickr = ! empty( $instance['jb_flickr'] ) ? $instance['jb_flickr'] : '';
		$jb_vimeo = ! empty( $instance['jb_vimeo'] ) ? $instance['jb_vimeo'] : '';
		$jb_vine = ! empty( $instance['jb_vine'] ) ? $instance['jb_vine'] : '';
		$jb_meetup = ! empty( $instance['jb_meetup'] ) ? $instance['jb_meetup'] : '';
		$jb_snapchat = ! empty( $instance['jb_snapchat'] ) ? $instance['jb_snapchat'] : '';
		$jb_soundcloud = ! empty( $instance['jb_soundcloud'] ) ? $instance['jb_soundcloud'] : '';
		$jb_skype = ! empty( $instance['jb_skype'] ) ? $instance['jb_skype'] : '';
		$jb_wordpress = ! empty( $instance['jb_wordpress'] ) ? $instance['jb_wordpress'] : '';
		$jb_xing = ! empty( $instance['jb_xing'] ) ? $instance['jb_xing'] : '';
		$jb_stumbleupon = ! empty( $instance['jb_stumbleupon'] ) ? $instance['jb_stumbleupon'] : '';
		$jb_stack_overflow = ! empty( $instance['jb_stack_overflow'] ) ? $instance['jb_stack_overflow'] : '';
		$jb_github = ! empty( $instance['jb_github'] ) ? $instance['jb_github'] : '';
		$jb_behance = ! empty( $instance['jb_behance'] ) ? $instance['jb_behance'] : '';
		$jb_dribbble = ! empty( $instance['jb_dribbble'] ) ? $instance['jb_dribbble'] : '';
		$jb_style = ! empty( $instance['jb_style'] ) ? $instance['jb_style'] : 'colors';
		$jb_align = ! empty( $instance['jb_align'] ) ? $instance['jb_align'] : 'left';
		
		?>
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_attr_e( 'Title:', 'jbthemes' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>"  >
		</p>
		<h4>Align:</h4>
		<p>
			<select name="<?php echo esc_attr( $this->get_field_name( 'jb_align' ) ); ?>">
				<option value="left" <?php if($jb_align === 'left'){ echo 'selected="selected"'; } ?>>Left</option>
				<option value="right" <?php if($jb_align === 'right'){ echo 'selected="selected"'; } ?>>Right</option>
				<option value="center" <?php if($jb_align === 'center'){ echo 'selected="selected"'; } ?>>Center</option>
			</select>
		</p>
		<h4>Select a Icons Style:</h4>
		<p class="select_style">
			<label>
				<input type="radio" name="<?php echo esc_attr( $this->get_field_name( 'jb_style' ) ); ?>" value="colors" <?php if($jb_style === 'colors'){ echo 'checked="checked"'; } ?>/>
				<img src="<?php echo plugins_url('/images/colors.png', __FILE__); ?>">
			</label>
			
			<label>
				<input type="radio" name="<?php echo esc_attr( $this->get_field_name( 'jb_style' ) ); ?>" value="rounded-colors" <?php if($jb_style === 'rounded-colors'){ echo 'checked="checked"'; } ?>/>
				<img src="<?php echo plugins_url('/images/rounded-colors.png', __FILE__); ?>">
			</label>
			<label>
				<input type="radio" name="<?php echo esc_attr( $this->get_field_name( 'jb_style' ) ); ?>" value="black" <?php if($jb_style === 'black'){ echo 'checked="checked"'; } ?>/>
				<img src="<?php echo plugins_url('/images/black.png', __FILE__); ?>">
			</label>
			
			<label>
				<input type="radio" name="<?php echo esc_attr( $this->get_field_name( 'jb_style' ) ); ?>" value="rounded-black" <?php if($jb_style === 'rounded-black'){ echo 'checked="checked"'; } ?>/>
				<img src="<?php echo plugins_url('/images/rounded-black.png', __FILE__); ?>">
			</label>
			<label>
				<input type="radio" name="<?php echo esc_attr( $this->get_field_name( 'jb_style' ) ); ?>" value="black" <?php if($jb_style === 'black'){ echo 'checked="checked"'; } ?>/>
				<img src="<?php echo plugins_url('/images/black-color.png', __FILE__); ?>">
			</label>
		</p>
		
		<h4>Add your all Social Links from bellow</h4>
		
		<!-- Add Facebook Field -->
		<p class="facebook">
			<label for="<?php echo esc_attr( $this->get_field_id( 'jb_facebook' ) ); ?>">Facebook Link</label>
			<input class="widefat" type="url" placeholder="https://facebook.com/jbthemes" id="<?php echo esc_attr( $this->get_field_id( 'jb_facebook' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'jb_facebook' ) ); ?>" value="<?php echo esc_attr( $jb_facebook );?>"/>
		</p>
		
		<!-- Add Youtube Field -->
		<p class="youtube">
			<label for="<?php echo esc_attr( $this->get_field_id( 'jb_youtube' ) ); ?>">Youtube Link</label>
			<input class="widefat" type="url" placeholder="https://youtube.com/channel/jbthemes" id="<?php echo esc_attr( $this->get_field_id( 'jb_youtube' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'jb_youtube' ) ); ?>" value="<?php echo esc_attr( $jb_youtube );?>"/>
		</p>
		
		<!-- Add Twitter Field -->
		<p class="twitter">
			<label for="<?php echo esc_attr( $this->get_field_id( 'jb_twitter' ) ); ?>">Twitter Link</label>
			<input class="widefat" type="url" placeholder="https://twitter.com/jbthemes" id="<?php echo esc_attr( $this->get_field_id( 'jb_twitter' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'jb_twitter' ) ); ?>" value="<?php echo esc_attr( $jb_twitter );?>"/>
		</p>
		
		<!-- Add LinkedIn Field -->
		<p class="linkedin">
			<label for="<?php echo esc_attr( $this->get_field_id( 'jb_linkedin' ) ); ?>">LinkedIn Link</label>
			<input class="widefat" type="url" placeholder="https://www.linkedin.com/in/jbthemes" id="<?php echo esc_attr( $this->get_field_id( 'jb_linkedin' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'jb_linkedin' ) ); ?>" value="<?php echo esc_attr( $jb_linkedin );?>"/>
		</p>
		
		<!-- Add Pinterest Field -->
		<p class="pinterest">
			<label for="<?php echo esc_attr( $this->get_field_id( 'jb_pinterest' ) ); ?>">Pinterest Link</label>
			<input class="widefat" type="url" placeholder="https:/pinterest.com/jbthemes" id="<?php echo esc_attr( $this->get_field_id( 'jb_pinterest' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'jb_pinterest' ) ); ?>" value="<?php echo esc_attr( $jb_pinterest );?>"/>
		</p>
		
		<!-- Add Google plus Field -->
		<p class="googleplus">
			<label for="<?php echo esc_attr( $this->get_field_id( 'jb_googleplus' ) ); ?>">Google Plus Link</label>
			<input class="widefat" type="url" placeholder="https://plus.google.com/u/0/103089264674664302860" id="<?php echo esc_attr( $this->get_field_id( 'jb_googleplus' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'jb_googleplus' ) ); ?>" value="<?php echo esc_attr( $jb_googleplus );?>"/>
		</p>
		
		<!-- Add Tumblr Field -->
		<p class="tumblr">
			<label for="<?php echo esc_attr( $this->get_field_id( 'jb_tumblr' ) ); ?>">Tumblr  Link</label>
			<input class="widefat" type="url" placeholder="https://jb-themes.tumblr.com" id="<?php echo esc_attr( $this->get_field_id( 'jb_tumblr' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'jb_tumblr' ) ); ?>" value="<?php echo esc_attr( $jb_tumblr );?>"/>
		</p>
		
		<!-- Add Instagram Field -->
		<p class="instagram">
			<label for="<?php echo esc_attr( $this->get_field_id( 'jb_instagram' ) ); ?>">Instagram  Link</label>
			<input class="widefat" type="url" placeholder="https://instagram.com/jbthemes" id="<?php echo esc_attr( $this->get_field_id( 'jb_instagram' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'jb_instagram' ) ); ?>" value="<?php echo esc_attr( $jb_instagram );?>"/>
		</p>
		
		<!-- Add Reddit Field -->
		<p class="reddit">
			<label for="<?php echo esc_attr( $this->get_field_id( 'jb_reddit' ) ); ?>">Reddit  Link</label>
			<input class="widefat" type="url" placeholder="https://reddit.com/jbthemes" id="<?php echo esc_attr( $this->get_field_id( 'jb_reddit' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'jb_reddit' ) ); ?>" value="<?php echo esc_attr( $jb_reddit );?>"/>
		</p>
		
		<!-- Add VK Field -->
		<p class="vk">
			<label for="<?php echo esc_attr( $this->get_field_id( 'jb_vk' ) ); ?>">VK  Link</label>
			<input class="widefat" type="url" placeholder="https://vk.com/jbthemes" id="<?php echo esc_attr( $this->get_field_id( 'jb_vk' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'jb_vk' ) ); ?>" value="<?php echo esc_attr( $jb_vk );?>"/>
		</p>
		
		<!-- Add Flickr Field -->
		<p class="flickr">
			<label for="<?php echo esc_attr( $this->get_field_id( 'jb_flickr' ) ); ?>">Flickr  Link</label>
			<input class="widefat" type="url" placeholder="https://flickr.com/jbthemes" id="<?php echo esc_attr( $this->get_field_id( 'jb_flickr' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'jb_flickr' ) ); ?>" value="<?php echo esc_attr( $jb_flickr );?>"/>
		</p>
		
		<!-- Add Vimeo Field -->
		<p class="vimeo">
			<label for="<?php echo esc_attr( $this->get_field_id( 'jb_vimeo' ) ); ?>">Vimeo  Link</label>
			<input class="widefat" type="url" placeholder="https://vimeo.com/jbthemes" id="<?php echo esc_attr( $this->get_field_id( 'jb_vimeo' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'jb_vimeo' ) ); ?>" value="<?php echo esc_attr( $jb_vimeo );?>"/>
		</p>
		
		<!-- Add Vine Field -->
		<p class="vine">
			<label for="<?php echo esc_attr( $this->get_field_id( 'jb_vine' ) ); ?>">Vine  Link</label>
			<input class="widefat" type="url" placeholder="https://vine.com/jbthemes" id="<?php echo esc_attr( $this->get_field_id( 'jb_vine' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'jb_vine' ) ); ?>" value="<?php echo esc_attr( $jb_vine );?>"/>
		</p>
		
		<!-- Add Meetup Field -->
		<p class="meetup">
			<label for="<?php echo esc_attr( $this->get_field_id( 'jb_meetup' ) ); ?>">Meet Up  Link</label>
			<input class="widefat" type="url" placeholder="https://meetup.com/jbthemes" id="<?php echo esc_attr( $this->get_field_id( 'jb_meetup' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'jb_meetup' ) ); ?>" value="<?php echo esc_attr( $jb_meetup );?>"/>
		</p>
		
		<!-- Add Snapchat Field -->
		<p class="snapchat">
			<label for="<?php echo esc_attr( $this->get_field_id( 'jb_snapchat' ) ); ?>">Snapchat  Link</label>
			<input class="widefat" type="url" placeholder="https://snapchat.com/jbthemes" id="<?php echo esc_attr( $this->get_field_id( 'jb_snapchat' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'jb_snapchat' ) ); ?>" value="<?php echo esc_attr( $jb_snapchat );?>"/>
		</p>
		
		<!-- Add Soundcloud Field -->
		<p class="soundcloud">
			<label for="<?php echo esc_attr( $this->get_field_id( 'jb_soundcloud' ) ); ?>">Soundcloud  Link</label>
			<input class="widefat" type="url" placeholder="https://soundcloud.com/jbthemes" id="<?php echo esc_attr( $this->get_field_id( 'jb_soundcloud' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'jb_soundcloud' ) ); ?>" value="<?php echo esc_attr( $jb_soundcloud );?>"/>
		</p>
		
		<!-- Add skype Field -->
		<p class="skype">
			<label for="<?php echo esc_attr( $this->get_field_id( 'jb_skype' ) ); ?>">Skype  Link</label>
			<input class="widefat" type="url" placeholder="jbthemes" id="<?php echo esc_attr( $this->get_field_id( 'jb_skype' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'jb_skype' ) ); ?>" value="<?php echo esc_attr( $jb_skype );?>"/>
		</p>
		
		<!-- Add WordPress Field -->
		<p class="wordpress">
			<label for="<?php echo esc_attr( $this->get_field_id( 'jb_wordpress' ) ); ?>">WordPress  Link</label>
			<input class="widefat" type="url" placeholder="https://wordpress.com/jbthemes" id="<?php echo esc_attr( $this->get_field_id( 'jb_wordpress' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'jb_wordpress' ) ); ?>" value="<?php echo esc_attr( $jb_wordpress );?>"/>
		</p>
		
		<!-- Add Xing Field -->
		<p class="xing">
			<label for="<?php echo esc_attr( $this->get_field_id( 'jb_xing' ) ); ?>">Xing  Link</label>
			<input class="widefat" type="url" placeholder="https://xing.com/jbthemes" id="<?php echo esc_attr( $this->get_field_id( 'jb_xing' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'jb_xing' ) ); ?>" value="<?php echo esc_attr( $jb_xing );?>"/>
		</p>
		
		<!-- Add Stumbleupon Field -->
		<p class="stumbleupon">
			<label for="<?php echo esc_attr( $this->get_field_id( 'jb_stumbleupon' ) ); ?>">Stumbleupon  Link</label>
			<input class="widefat" type="url" placeholder="https://stumbleupon.com/jbthemes" id="<?php echo esc_attr( $this->get_field_id( 'jb_stumbleupon' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'jb_stumbleupon' ) ); ?>" value="<?php echo esc_attr( $jb_stumbleupon );?>"/>
		</p>
		
		<!-- Add Stack-overflow Field -->
		<p class="stack_overflow">
			<label for="<?php echo esc_attr( $this->get_field_id( 'jb_stack_overflow' ) ); ?>">Stack-overflow  Link</label>
			<input class="widefat" type="url" placeholder="https://stackoverflow.com/jbthemes" id="<?php echo esc_attr( $this->get_field_id( 'jb_stack_overflow' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'jb_stack_overflow' ) ); ?>" value="<?php echo esc_attr( $jb_stack_overflow );?>"/>
		</p>
		
		<!-- Add Github Field -->
		<p class="github">
			<label for="<?php echo esc_attr( $this->get_field_id( 'jb_github' ) ); ?>">Github  Link</label>
			<input class="widefat" type="url" placeholder="https://github.com/jbthemes" id="<?php echo esc_attr( $this->get_field_id( 'jb_github' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'jb_github' ) ); ?>" value="<?php echo esc_attr( $jb_github );?>"/>
		</p>
		
		<!-- Add Behance Field -->
		<p class="behance">
			<label for="<?php echo esc_attr( $this->get_field_id( 'jb_behance' ) ); ?>">Behance  Link</label>
			<input class="widefat" type="url" placeholder="https://behance.com/jbthemes" id="<?php echo esc_attr( $this->get_field_id( 'jb_behance' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'jb_behance' ) ); ?>" value="<?php echo esc_attr( $jb_behance );?>"/>
		</p>
		
		<!-- Add Dribbble Field -->
		<p class="Dribbble">
			<label for="<?php echo esc_attr( $this->get_field_id( 'jb_dribbble' ) ); ?>">Dribbble  Link</label>
			<input class="widefat" type="url" placeholder="https://dribbble.com/jbthemes" id="<?php echo esc_attr( $this->get_field_id( 'jb_dribbble' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'jb_dribbble' ) ); ?>" value="<?php echo esc_attr( $jb_dribbble );?>"/>
		</p>
		
		
		<?php 
	}
	

}

// Register JB Social Icons Widget
function register_jb_social_icons_widget() {
    register_widget( 'JB_Social_Icons_Widget' );
}
add_action( 'widgets_init', 'register_jb_social_icons_widget' );