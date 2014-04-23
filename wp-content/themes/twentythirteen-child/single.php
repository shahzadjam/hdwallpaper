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
								
								?>
                                
                                <a class="fileDownloadPromise" href="<?php echo $large_image_url[0];?>"><?php echo $large_image_url[0];?></a>
                                
                       
                                	
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
                               <P>800x600 1024x768 1152x864 1280x960 1400x1050 1440x1080 1600x1200</P>
                                 <p>1280x1024</p>
                               <p>960x600 1152x720 1280x800 1440x900 1680x1050 1920x1200</p>
                                 <p>
                                     800x480 1280x768 </p>
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