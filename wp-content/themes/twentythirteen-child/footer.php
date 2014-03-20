<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

  <div class="footer clearfix">
               		<div class="footerInner clearfix">
                    	<div class="footerlogo fLeft">
                   	    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>-child/images/logo.png" width="294" height="79" alt="" /></a></div>
                        
                      
                        
                        
                         <?php

				$defaults = array(
					'theme_location'  => '',
					'menu'            => 'Footer Menu',
					'container'       => 'div',
					'container_class' => 'footerMenu fRight',
					'container_id'    => '',
					'menu_class'      => '',
					'menu_id'         => '',
					'echo'            => true,
					'fallback_cb'     => 'wp_page_menu',
					'before'          => '',
					'after'           => '',
					'link_before'     => '',
					'link_after'      => '',
					'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'depth'           => 0,
					'walker'          => ''
				);
				
				wp_nav_menu( $defaults );
				
				?>
                        	<!--<ul>
                    	<li><a href="#" class="active">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Link Exchange</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Site Map</a></li>
                        <li><a href="#">Images Sitemap </a></li>
                        
                        <li class="cl"><a href="#">Contact us</a></li>
                    </ul>-->
                        
                        
                   </div>  
               </div>	
              
        </div>
       <!-- wrapper end -->
       
		<script type="text/javascript">
		$(function() {
			
			
			
			
			$("#demo5").paginate({
				count 		: 10,
				start 		: 1,
				display     : 7,
				border					: false,
				border_color			: '',
				text_color  			: '',
				background_color    	: '',	
				border_hover_color		: '',
				text_hover_color  		: '#fff',
				background_hover_color	: '#2aa3ce', 
				images					: false,
				mouse					: 'press',
				onChange     			: function(page){
											$('._current','#paginationdemo').removeClass('_current').hide();
											$('#p'+page).addClass('_current').show();
										  }
			});
		});
		</script>
<?php wp_footer(); ?>

</body>
</html>