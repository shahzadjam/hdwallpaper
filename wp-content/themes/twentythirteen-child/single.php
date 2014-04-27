<?php
/**
 * The template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

<div class="bodyArea">
                    	<div class="bodyInner clearfix">
                        	
                            	<div class="lftBar fLeft clearfix">
                            		  <?php get_sidebar( 'left' ); ?>
                                      <?php /* The loop */ ?>
								<?php 
								global $post;
								while ( have_posts() ) : the_post(); 
								
								?>
                              <div class="bannerOuter fRight">
                              <div class="recentpost clearfix recentpost-Categories">
                                	<div ><a href="#"><?php the_title(); ?></a></div>
                                  
                                </div>
                              
                    
                              
                              	<div class="product-main-baner">
                           	    <?php the_post_thumbnail('slider-thumb');
								 $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'slider-thumb');
								  $large_image_full = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full');
								
								?>
                                
                                <a class="fileDownloadPromise" href="<?php echo $large_image_url[0];?>">Download</a>
                                
                       
                                	
                                </div>
                                <div class="extra-links">
                                <ul>

                                <li class="facebook-disply"><a href="#">Set as Facebook Display Picture</a></li>
                                <li><a href="#">Set as Facebook Cover</a></li>
                                <li><a href="#">Set as Google plus</a></li>
                                <li><a href="#">Set as Twitter</a></li>
                               </ul>
                               </div>
                               <div class="clr"></div>
                               <div class="extra-cont">
                               <div class="extra-produtct laft-content-extra">
                                <P>Standard 4:3</P>
                               <P>Standard 5:4</P>
                               <P>Wide 16:10</P>
                               <P>Wide 5:3</P>
                               </div>
                               <div class="extra-produtct right">
                               <P><a href="<?php echo get_template_directory_uri(); ?>-child/timthumb.php?src=<?php echo $large_image_full[0];?>&w=800&h=600&a=t">800x600</a> <a href="<?php echo get_template_directory_uri(); ?>-child/timthumb.php?src=<?php echo $large_image_full[0];?>&w=1024&h=786&a=t">1024x768</a> <a href="<?php echo get_template_directory_uri(); ?>-child/timthumb.php?src=<?php echo $large_image_full[0];?>&w=1152&h=864&a=t">1152x864</a> <a href="<?php echo get_template_directory_uri(); ?>-child/timthumb.php?src=<?php echo $large_image_full[0];?>&w=1280&h=960&a=t">1280x960</a> <a href="<?php echo get_template_directory_uri(); ?>-child/timthumb.php?src=<?php echo $large_image_full[0];?>&w=1400&h=1050&a=t">1400x1050</a> <a href="<?php echo get_template_directory_uri(); ?>-child/timthumb.php?src=<?php echo $large_image_full[0];?>&w=1440&h=1080&a=t">1440x1080</a> <a href="<?php echo get_template_directory_uri(); ?>-child/timthumb.php?src=<?php echo $large_image_full[0];?>&w=1600&h=1200&a=t">1600x1200</a></P>
                                 <p><a href="<?php echo get_template_directory_uri(); ?>-child/timthumb.php?src=<?php echo $large_image_full[0];?>&w=1280&h=1024&a=t">1280x1024</a></p>
                               <p><a href="<?php echo get_template_directory_uri(); ?>-child/timthumb.php?src=<?php echo $large_image_full[0];?>&w=960&h=600&a=t">960x600</a> <a href="<?php echo get_template_directory_uri(); ?>-child/timthumb.php?src=<?php echo $large_image_full[0];?>&w=1152&h=720&a=t">1152x720</a> <a href="<?php echo get_template_directory_uri(); ?>-child/timthumb.php?src=<?php echo $large_image_full[0];?>&w=1280&h=800&a=t">1280x800</a> <a href="<?php echo get_template_directory_uri(); ?>-child/timthumb.php?src=<?php echo $large_image_full[0];?>&w=1440&h=900&a=t">1440x900</a> <a href="<?php echo get_template_directory_uri(); ?>-child/timthumb.php?src=<?php echo $large_image_full[0];?>&w=1680&h=1050&a=t">1680x1050</a> <a href="<?php echo get_template_directory_uri(); ?>-child/timthumb.php?src=<?php echo $large_image_full[0];?>&w=1920&h=1200&a=t">1920x1200</a></p>
                                 <p>
                                     <a href="<?php echo get_template_directory_uri(); ?>-child/timthumb.php?src=<?php echo $large_image_full[0];?>&w=800&h=480&a=t">800x480</a> <a href="<?php echo get_template_directory_uri(); ?>-child/timthumb.php?src=<?php echo $large_image_full[0];?>&w=1280&h=786&a=t">1280x768</a> </p>
                               </div>
                               </div>
      						<?php the_content(); ?>
                          
                          <div class="recentpost clearfix">
                                	<div class="recentpost-product"><a href="#">Recent Posts</a></div>
                                	
                                  
                                </div>
                       
                                <div class="recentpostOuter">
                           
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
                               
                              
                              
                                
                                
                                <div class="chrismis clearfix">
                               <?php							   
				$my_query = new WP_Query("post_type=post&cat=".$categor->cat_ID."&showposts=3&orderby=rand");
				
				if ( $my_query->have_posts() ) { 
				 while ( $my_query->have_posts() ) { 
					$my_query->the_post();?>
                               
                               
                                <div class="chrismisBox fLeft">
                        
                       <?php 
									if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
									 ?>
                                      <a href="<?php echo the_permalink();?>">
                                      <?php 
									  the_post_thumbnail('homepage-thumb');
									  ?>
                                      </a>
                                      <?php
									} 
									?>
                        <h5><a href="<?php echo the_permalink();?>"><?php echo the_title();?></a></h5>
                      
                        
                      
                        
                       </div>
                        
                        <?php
				 }
						?>
                        
                                </div>
                                
                                
                              
                              
                             
                               <?php
				 
				}
				}
				wp_reset_postdata();
				?> </div>
                                <?php endwhile; ?> 
                              </div>
                            
                           </div>
                            
                            </div>
                            
                            
                            
                            
                            
                            
                            
                            <?php get_sidebar( 'right' ); ?>
                            
                        </div>
                    </div>
<?php get_footer(); ?>