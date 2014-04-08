<?php
/**
Template Name: Sidebar Right
 */
?>
<?php    /* Widgetized sidebar, if you have the plugin installed. */
if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar Right') ) : ?>
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
<?php endif; ?>