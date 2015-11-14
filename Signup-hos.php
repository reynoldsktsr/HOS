<?php
//Template Name: Signup page

get_header();?>
<style>
div#signuppage{ background-image: <?php echo get_template_directory_uri();?>/url(Albert_Bridge,_London_-_Oct_2012.jpg)}
div#login{ background-attachment:fixed; background-image:url(Albert_Bridge,_London_-_Oct_2012.jpg);}
div#signuppage1 {width:35px; background-color:#3b8ced; vertical-align:middle; margin-left:40%; border-left: 2px solid #3b8ced; border-left-radius:20px; float:left;}

.icon{width:35px;}
.input{height:35px; width:200px;}

</style>

<div id="signuppage">

<div  style="color:blue; width:1024; text-align:center; background-color:#CCC; font-size:50px;">
   START APPLYING TODAY
</div>
<form method="post" action="">
<div id="login">
<img src="<?php echo get_template_directory_uri();?>/url(Albert_Bridge,_London_-_Oct_2012.jpg)"/>

<br />
    <div id="signuppage1">
 <img src="<?php echo get_template_directory_uri();?>/user64pxcopy.png" class="icon"/></div>
    <input type="text" placeholder="username" name="username" class="input"/>
    </span><br><br />
    
    <div id="signuppage1">
 <img src="<?php echo get_template_directory_uri();?>/mail64px.png" class="icon" /></div>
    <input type="password" placeholder="password" name="pass" class="input">
    <br><br />
    
    <input type="submit" value="Sign Up" style="background-color:#3b8ced; font-size:16px; color:white;">
</div>

</form>
</div>

  <?php get_footer();?>

