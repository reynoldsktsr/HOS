<?php
//Template Name: Signup page

get_header();?>
<style>
div#signuppage{}
div#signuppage1 {width:35px; color:white; font-size:36px; background-color:#3b8ced; vertical-align:middle; margin-left:40%; border-left: 2px solid #3b8ced; border-left-radius:20px; float:left;}
div#login{background-image: url(<?php echo get_template_directory_uri();?>/backgroundsignin.png); background-repeat:no-repeat; background-position:center;  -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover; height:400px;}

.icon{width:35px;}
.input{height:35px; width:200px;}
.submit{background-color:#3b8ced; font-size:16px; color:white; height:35px; width:200px; margin-left:42%;

</style>

<div id="signuppage">

<form method="post" action="">
<div id="login">
HiredOn

<br /><br /><br /><br /><br />
    <div id="signuppage1">
 <img src="<?php echo get_template_directory_uri();?>/user64pxcopy.png" class="icon"/></div>
    <input type="text" placeholder="username" name="username" class="input"/>
    </span><br><br />
    
    <div id="signuppage1">
 <img src="<?php echo get_template_directory_uri();?>/mail64px.png" class="icon" /></div>
    <input type="password" placeholder="password" name="pass" class="input">
    <br><br />
    
    <input type="submit" value="Login" class="submit">
</div>

</form>
</div>

  <?php get_footer();?>

