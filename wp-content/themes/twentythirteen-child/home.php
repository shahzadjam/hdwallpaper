<?php
/**
 * Template Name: Home Page
  *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each specific one. For example, Twenty Thirteen
 * already has tag.php for Tag archives, category.php for Category archives,
 * and author.php for Author archives.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
 get_header();
 ?>

   <!--  bodyArea start  -->
             
             			<div class="bodyArea">
                    	<div class="bodyInner clearfix">
                        	
                            	<div class="lftBar fLeft clearfix">
                            	<div class="categories fLeft">
                                	
                                  <div class=" by clearfix">
                                 <div class="byboxesImg fLeft"><img src="<?php echo get_template_directory_uri(); ?>-child/images/boxesImg.jpg" width="14" height="14" alt="" /></div>
                                 <div class="bytext fLeft">
                                 	<p>Search By Categories</p>
                                 </div>
                                 </div>
                                 
                                 <div class=" threed clearfix">
                                 <div class="byboxesImg fLeft"><img src="<?php echo get_template_directory_uri(); ?>-child/images/arrow.jpg" width="14" height="14" alt="" /></div>
                                 <div class="three fLeft">
                                 	<p>3D</p>
                                 </div>
                                 </div>
                                 
                                 <div class="alfa">
                                 	<ul>
                                    <?php
                                    $args = array(
										'type'                     => 'post',
										'child_of'                 => 0,
										'parent'                   => '',
										'orderby'                  => 'name',
										'order'                    => 'ASC',
										'hide_empty'               => 1,
										'hierarchical'             => 1,
										'exclude'                  => '',
										'include'                  => '',
										'number'                   => '',
										'taxonomy'                 => 'category',
										'pad_counts'               => false 
									
									); 
									
									
									 $categories = get_categories( $args ); 
									
									foreach($categories as $categor)
									{
									?>
                                    	<li> <?php							   
					   $my_query = new WP_Query("post_type=post&cat=".$categor->cat_ID."&showposts=1&orderby=date&order=DESC");
					   
					   if ( $my_query->have_posts() ) { 
						 while ( $my_query->have_posts() ) { 
							$my_query->the_post();
							if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
											  the_post_thumbnail(array(40));
											} 
							
						 }
						}?>
                                   	   
                                        	<p><a href="<?php echo $categor->slug;?>"><?php echo $categor->name;?></a></p>
                                        </li>
                                        <?php
									}
										?>
                                  
                                         <li>
                                   	    <img src="<?php echo get_template_directory_uri(); ?>-child/images/3dimg9.jpg" width="40" height="27" alt="" /> 
                                        	<p><a href="#">See more</a></p>
                                        </li>
                                    </ul>
                                    
                                    
                                     <div class="filter">
                                     	<h4>Filter by</h4>
                                     </div>
                                     
                                     <div class=" resolation clearfix">
                                     <div class="resolationbutton fLeft">
                                     	<a href="#">Aspect Ratio</a>
                                       
                                        </div>
                                        <div class="resolationbutton2 fLeft">
                                     	<a href="#">Resolution</a>
                                       
                                        </div>
                                     </div>
                                    
                                    <div class="Resolutions">
                                     	<h4>Resolutions</h4>
                                     </div>
                                    
                                    <div class="hdwide">
                                 	<ul>
                                    	<li>
                                   	    <img width="40" height="27" alt="" src="<?php echo get_template_directory_uri(); ?>-child/images/arrow.jpg"> 
                                        	<p><a href="#">Wide</a></p>
                                        </li>
                                        <li>
                                   	    <img width="40" height="27" alt="" src="<?php echo get_template_directory_uri(); ?>-child/images/arrow.jpg"> 
                                        	<p><a href="#">HD</a></p>
                                        </li>
                                        <li>
                                   	    <img width="40" height="27" alt="" src="<?php echo get_template_directory_uri(); ?>-child/images/arrow.jpg"> 
                                        	<p><a href="#">Standard</a></p>
                                        </li>
                                        <li>
                                   	    <img width="40" height="27" alt="" src="<?php echo get_template_directory_uri(); ?>-child/images/arrow.jpg"> 
                                        	<p><a href="#">Mobile Ratio</a></p>
                                        </li>
                                         <li>
                                   	    <img width="40" height="27" alt="" src="<?php echo get_template_directory_uri(); ?>-child/images/arrow.jpg"> 
                                        	<p><a href="#">Iphone Brands </a></p>
                                        </li>
                                         <li>
                                   	    <img width="40" height="27" alt="" src="<?php echo get_template_directory_uri(); ?>-child/images/arrow.jpg"> 
                                        	<p><a href="#">Dual</a></p>
                                        </li>
                                         <li>
                                   	    <img width="40" height="27" alt="" src="<?php echo get_template_directory_uri(); ?>-child/images/arrow.jpg"> 
                                        	<p><a href="#">Other</a></p>
                                        </li>
                                       
                                    </ul>
                                    
                                    
                                     
                                    
                                 </div>
                                 
                                 
                                 <div class=" topwallpaper clearfix">
                                 <div class="byboxesImg fLeft"><img width="14" height="14" alt="" src="<?php echo get_template_directory_uri(); ?>-child/images/wightboxes.jpg"></div>
                                 <div class="bytext fLeft">
                                 	<p>Top Wallpapers</p>
                                 </div>
                                 </div>
                                 
                                 
                                 <div class="beautiful">
                                 
                                 
                                 	 <?php if ( is_active_sidebar( 'my-top-posts-box' ) ) : ?>
                                        <ul id="my-top-posts-box-sidebar">
                                            <?php dynamic_sidebar( 'my-top-posts-box' ); ?>
                                        </ul>
                                     <?php endif; ?>
                                 
                                 	
                                    
                                    
                                     
                                    
                                 </div>
                                 
                                 
                                 
                                 
                                 
                                 
                                    
                                 </div>
                                 
                                
                                 
                                </div>
                              <div class="bannerOuter fRight">
                              
                              	<div class=" banner">
                           	    <img src="<?php echo get_template_directory_uri(); ?>-child/images/banner.jpg" width="569" height="303" alt="" /></div>
                                
                                <div class="boxer">
                                	<h2>2014 Porche Boxer by TechArt 2 Wallpapers</h2>
                                    <p>HD Wallpapers Inn Provides Best PC, Desktop and High Definition Wallpapers. We Upload a Great Collection Of HD Wallpapers 1080p Everyday in High Resolutions.</p>
                                </div>
   <?php
  
                               
									$args = array(
										'type'                     => 'post',
										'child_of'                 => 0,
										'parent'                   => '',
										'orderby'                  => 'name',
										'order'                    => 'ASC',
										'hide_empty'               => 1,
										'hierarchical'             => 1,
										'exclude'                  => '',
										'include'                  => '',
										'number'                   => '',
										'taxonomy'                 => 'category',
										'pad_counts'               => false 
									
									); 
									
									
									 $categories = get_categories( $args ); 
									
									foreach($categories as $categor)
									{
										?>
                                        <div class="recentpostOuter">
												
                                                  <div class="recentpost clearfix">
														<div class="recentbutton fLeft"><a href="#">Recent Posts</a></div>
														
													  <div class="socialButton fRight">
                                                      <?php echo do_shortcode('[hupso]');?>
														  
													</div>
													</div>
                                                    <div class='chrismis clearfix'>
                                        <?php							   
					   $my_query = new WP_Query("post_type=post&cat=".$categor->cat_ID."&showposts=3&orderby=date&order=DESC");
					   
					   if ( $my_query->have_posts() ) { 
						 while ( $my_query->have_posts() ) { 
							$my_query->the_post();?>
                                            
											<div class="chrismisBox fLeft">
											
											<?php 
											if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
											  the_post_thumbnail('homepage-thumb');
											} 
											?>
                                            
											
											<h5><a href="<?php echo the_permalink();?>"><?php echo the_title();?></a></h5>
											<p><?php echo the_date();?></p>
											
											</div>												
					   <?php
							   
						   }
					   }
					   ?>
                       </div>
                       </div>	                      
                       <?php
						}
					   wp_reset_postdata();
					   ?>
                             <div class="postbottom">
                             
                             
                             
                               
                               
                               <div class="peginate clearfix">
                               		<div id="paginationdemo" class="demo">
              
                <div id="p1" class="pagedemo _current"></div>
				<div id="p2" class="pagedemo"></div>
				<div id="p3" class="pagedemo"></div>
				<div id="p4" class="pagedemo"></div>
				<div id="p5" class="pagedemo"></div>
				<div id="p6" class="pagedemo"></div>
				<div id="p7" class="pagedemo"></div>
				<div id="p8" class="pagedemo"></div>
				<div id="p9" class="pagedemo"></div>
				<div id="p10" class="pagedemo"></div>
				<div id="demo5">                   
                </div>
            
                               
                               </div>
                               </div>
                             
                             </div>  
                               
                              </div>
                            
                           </div>
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            <div class="rightBar fRight">
                            
                            	<div class="youCanLogin fLeft">
                                 <?php if ( is_user_logged_in() ) {  echo "<h4>Welcome</h4>"; }else{ echo "<h4>You Can Login here</h4>";} ?>
                                </div>
                          <div class="login fLeft">
                                
                                 <?php if ( is_active_sidebar( 'my-login-box' ) ) : ?>
                                    <ul id="lang-sidebar">
                                        <?php dynamic_sidebar( 'my-login-box' ); ?>
                                    </ul>
               					 <?php endif; ?>	
                                 
                                    <?php if ( !is_user_logged_in() ) { ?>
                                    <div class="signup fLeft">
                                    	<a href="<?php echo site_url();?>/wp-login.php?action=register">Sign Up</a>
                                    </div>
                                    <?php } ?>
                                </div>
                                
                                <div class="addChoices">
                           	    <img src="<?php echo get_template_directory_uri(); ?>-child/images/add.jpg" width="308" height="444" alt="" />
                                
                                 <div class="addborder"></div>
                                 
                                 
                                 
                                 
                                 
                                </div>
                               
                               
<div class="findus clearfix">
                                 	<div class="findlft fLeft">
                                    	<h3>Find Us On </h3>
                                    </div>
                                    
                                    
                                    <div class="findright fRight"><img src="<?php echo get_template_directory_uri(); ?>-child/images/pettran.jpg"  alt="" /></div>
                                    
                                    
                                    
                                    
                              </div>
                              
                              
                              <div class="fbicon clearfix">
                           	  <img src="<?php echo get_template_directory_uri(); ?>-child/images/fbImg.jpg" width="307" height="270" alt="" />
                              
                           
                              </div>
                                 <div class="findus02 clearfix">
                                 	<div class="findlft02 fLeft">
                                   	  <h3>Find Us On </h3>
                                    </div>
                                    
                                    
                                    <div class="findright02 fRight"><img src="<?php echo get_template_directory_uri(); ?>-child/images/pettran.jpg"  alt="" /></div>
                                    
                                   
                                    
                                    
                              </div> 
                              
                               <div class="socialIcone clearfix">
                               
                       		  <a href="#"> <img src="<?php echo get_template_directory_uri(); ?>-child/images/facebook.jpg"  alt="" /></a>
                              
                              <a href="#"> <img src="<?php echo get_template_directory_uri(); ?>-child/images/twitter.jpg"  alt="" /></a>
                              <a href="#"> <img src="<?php echo get_template_directory_uri(); ?>-child/images/d.jpg"  alt="" /></a>
                              <a href="#"> <img src="<?php echo get_template_directory_uri(); ?>-child/images/youtube.jpg"  alt="" /></a>
                              <a href="#"> <img src="<?php echo get_template_directory_uri(); ?>-child/images/Be.jpg"  alt="" /></a>
                               
                               
                               </div>
                               
                               
                               <div class="findus03 clearfix">
                                 	<div class="findlft03 fLeft">
                                   	  <h3>Advertisement</h3>
                                    </div>
                                    
                                    
                                    <div class="findright03 fRight"><img src="<?php echo get_template_directory_uri(); ?>-child/images/pattren2.jpg"  alt="" /></div>
                                    
                                   
                                    
                                    
                              </div>
                              
                              
                              <div class="sweetmessage clearfix">
                              
                              <img src="<?php echo get_template_directory_uri(); ?>-child/images/sweetImg.jpg" width="307" height="270" alt="" />
                              </div>
                              
                              
                          <div class="findus04 clearfix">
                                 	<div class="findlft04 fLeft">
                                    	<h3>News in Pictures</h3>
                                    </div>
                                    
                                    
                                    <div class="findright04 fRight"><img src="<?php echo get_template_directory_uri(); ?>-child/images/pattren3.jpg"  alt="" /></div>
                                    
                                   
                                    
                                    
                              </div>
                              
                              
                              <div class="news clearfix">
                              <div class="newsIn">
                              	<ul>
                                	<li><img src="<?php echo get_template_directory_uri(); ?>-child/images/newspic.jpg" alt="" /></li>
                                    <li><img src="<?php echo get_template_directory_uri(); ?>-child/images/newspic.jpg" alt="" /></li>
                                    <li><img src="<?php echo get_template_directory_uri(); ?>-child/images/newspic.jpg" alt="" /></li>
                                    <li><img src="<?php echo get_template_directory_uri(); ?>-child/images/newspic.jpg" alt="" /></li>
                                    <li><img src="<?php echo get_template_directory_uri(); ?>-child/images/newspic.jpg" alt="" /></li>
                                    <li><img src="<?php echo get_template_directory_uri(); ?>-child/images/newspic.jpg" alt="" /></li>
                                    <li><img src="<?php echo get_template_directory_uri(); ?>-child/images/newspic.jpg" alt="" /></li>
                                    <li><img src="<?php echo get_template_directory_uri(); ?>-child/images/newspic.jpg" alt="" /></li>
                                    <li><img src="<?php echo get_template_directory_uri(); ?>-child/images/newspic.jpg" alt="" /></li>
                                    <li><img src="<?php echo get_template_directory_uri(); ?>-child/images/newspic.jpg" alt="" /></li>
                                    <li><img src="<?php echo get_template_directory_uri(); ?>-child/images/newspic.jpg" alt="" /></li>
                                    <li><img src="<?php echo get_template_directory_uri(); ?>-child/images/newspic.jpg" alt="" /></li>
                                </ul>
                               
                                </div>
                                
                                 <div class="addborder02"></div>
                              </div>
                               
                          </div>
                            
                        </div>
                    </div>
             	 <!--  bodyArea End  -->
  <?php //get_sidebar(); ?>
<?php 
get_footer(); 


?>
