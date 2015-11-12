<?php
//Template Name: Signup page

get_header();?>
<style>
div#signuppage{}
div#signuppage1 {width:15px; background-color:#3b8ced; margin-left:50px; border-left: 2px solid #3b8ced; border-radius:5px; float:left;}

.icon{width:25px;}

</style>

<div id="signuppage">
<div  style="color:blue; width:1024; text-align:center; background-color:#CCC; font-size:50px;">
   START APPLYING TODAY
</div>
<form method="post" action="">
<div id="login">


    <div id="signuppage1">
 <img src="<?php echo get_template_directory_uri();?>/user64pxcopy.png" class="icon"/></div>
    <input type="text" placeholder="username" name="username" style="height:25px;" />
    </span><br>
    
    <div id="signuppage1">
 <img src="<?php echo get_template_directory_uri();?>/mail64px.png" class="icon" /></div>
    <input type="password" placeholder="password" name="pass" style="height:25px;"><br>
    
    <input type="submit" value="Sign Up" style="background-color:#3b8ced; font-size:16px; color:white;">
</div>

</form>
</div>

  <?php get_footer();?>

