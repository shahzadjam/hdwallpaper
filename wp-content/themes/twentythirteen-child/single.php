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
								$categories = get_the_category($post->ID);
								
								?>
                              <div class="bannerOuter fRight">
                              <div class="recentpost clearfix recentpost-Categories">
                                	<div ><a href="#"><?php the_title(); ?></a></div>
                                  
                                </div>
                              
                              
                              	<div class="product-main-baner" id="product-main-baner">
                           	    <?php the_post_thumbnail('slider-thumb');
								 $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'slider-thumb');
								  $large_image_full = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full');
								?>
                                
                                <a href="<?php echo $large_image_url[0];?>&w=569&h=303">Download</a>
                                
                       
                                	<form id="download_photo" name="download_photo" method="post" enctype="multipart/form-data">
                                    <input type="hidden" title="hidden" name="download_photo_url" id="download_photo_url" />
                                    </form>
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
                               <!--<div class="extra-produtct laft-content-extra">
                                <P>Standard 4:3</P>
                               <P>Standard 5:4</P>
                               <P>Wide 16:10</P>
                               <P>Wide 5:3</P>
                               </div>-->
                                                             
                               <?php

$args = array(
    'orderby'       => 'name', 
    'order'         => 'ASC',
    'hide_empty'    => true, 
    'exclude'       => array(), 
    'exclude_tree'  => array(), 
    'include'       => array(),
    'number'        => '', 
    'fields'        => 'all', 
    'slug'          => '', 
    'parent'         => 0,
    'hierarchical'  => true, 
    'child_of'      => 0, 
    'get'           => '', 
    'name__like'    => '',
    'pad_counts'    => false, 
    'offset'        => '', 
    'search'        => '', 
    'cache_domain'  => 'core'
); 

$terms_p = get_terms("resolution",$args);

	 if ( !empty( $terms_p ) && !is_wp_error( $terms_p ) ){
		 
		 foreach ( $terms_p as $term_p ) {
			 $term_p = sanitize_term( $term_p, 'resolution' );

    		$term_p_link = get_term_link( $term_p, 'resolution' );
			$term_id = $term_p->term_id;
			 ?>
                <P><?php echo $term_p->name?></P>
				<?php
			 
		    $term_id = $term_p->term_id;
			$taxonomy_name = 'resolution';
			$termchildren = get_term_children( $term_id, $taxonomy_name );
			if(!empty($termchildren))
			{
				?>
                <div class="extra-produtct right">
                               <P>
                <?php
			
				foreach ( $termchildren as $child ) {
					$term = get_term_by( 'id', $child, $taxonomy_name );
					$term = sanitize_term( $term, 'resolution' );

    				$term_link = get_term_link( $term, 'resolution' );
					
					$dimention = explode("X",$term->name);
					?>
						<a href="<?php echo $large_image_full[0];?>&w=<?php echo $dimention[0];?>&h=<?php echo $dimention[1];?>"><?php echo $term->name; ?></a>
					
					<?php
					
					
				}
				echo "</p></div>";
			}
							
		 }
	 } 

?>
                               </div>
      						<?php the_content(); ?>
                          
                          <div class="recentpost clearfix">
                                	<div class="recentpost-product"><a href="#"><?php echo $categories[0]->name;?></a></div>
                                	
                                  
                                </div>
                       
                                <div class="recentpostOuter">
                           
                      
                               
                              
                              
                                
                                
                                <div class="chrismis clearfix">
                               <?php
							   $exclude_ids = $post->ID;	
							   
							   $exclude_ids = array( $post->ID);
$my_query = new WP_Query( array( 'post_type'=>'post','cat'=>$categories[0]->term_id,'showposts'=>9,'orderby'=>'rand', 'post__not_in' => $exclude_ids ) );						   
								/*$my_query = new WP_Query("post_type=post&post__not_in=".$exclude_ids."&cat=".$categories[0]->term_id."&showposts=3&orderby=rand");*/
								
								if ( $my_query->have_posts() ) { 
								 while ( $my_query->have_posts() ) { 
									$my_query->the_post();
									
									?>
                               
                               
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