<?php
/**
 * The template for displaying Search Results pages
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>


<!--  bodyArea start  -->
             
<div class="bodyArea">
	<div class="bodyInner clearfix">
    <div class="lftBar fLeft clearfix">
                            	
<?php get_sidebar('left'); ?>



    <div class="bannerOuter fRight">
    
    
    <div class="recentpostOuter">
                                  
     <?php 
	 
	 if ( get_query_var('paged') ) { $paged = get_query_var('paged'); }
	 elseif ( get_query_var('page') ) { $paged = get_query_var('page'); }
	 else { $paged = 1; }
	 query_posts('posts_per_page=36&paged=' . $paged); 
	 if ( have_posts() ) : ?>
    <div class="Categories">
    
    <div class="recentpost clearfix">
        <div class="recentpost-Categories"><a href="#"><?php printf( __( 'Search Results for: %s', 'twentythirteen' ), get_search_query() ); ?></a></div>
        
      
    </div>
  
    
    
    
    </div>
    <?php /* The loop */ ?>
    <div id="jpages-table">
                <?php /* The loop */ ?>
			<?php 
			$i=1;
				$j=0;
			
			while ( have_posts() ) : the_post(); 
			if($i > 3 || $j==0)
			{
				$i=1;
				$j=1;
			?>
				<div class="chrismis clearfix">
			<?php
			}
				?>
				<?php get_template_part( 'content', get_post_format() ); ?>
			<?php 
			 if($i==3)
				{
					$i++;
				?>
					</div>
				<?php
				}
				else
				{
					$i++;
				}
			
			
			endwhile; ?>

</div>
		
                 </div>
            
    
    </div>
    
   
    
   
    <?php else : ?>
    <?php get_template_part( 'content', 'none' ); ?>
    <?php endif; ?>
    </div>

    		<?php echo wpbeginner_numeric_posts_nav();?>
                                   
    
    </div>
    </div>
    
    </div>
    
    
    
    
    <script type="text/javascript">
		jQuery(document).ready(function($){
			
			
			
			
			$("#demo5").paginate({
				count 		: 1,
				start 		: 1,
				display     : 3,
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
    
    
    <?php get_sidebar('right'); ?>
    
    </div>
    </div>
    <!--  bodyArea End  -->
    <!-- #primary -->
<?php get_footer(); ?>

