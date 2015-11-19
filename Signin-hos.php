<?php
//Template Name: Signup page

get_header();?>
<style>
div#signuppage{}

div#signuppage1 {width:35px; color:white; font-size:25px; background-color:#3b8ced; vertical-align:middle; margin-left:41%; border-left: 2px solid #3b8ced; border-left-radius:20px; float:left;}

div#login{background-image: url(<?php echo get_template_directory_uri();?>/backgroundsignin.png); background-repeat:no-repeat; background-position:center;  -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover; height:400px;}

div#header{color:white; text-align:center; font-size:50px;}

div#link{color:white; text-align:center; font-size:25px; float:left; margin-left:21%;}

.icon{width:35px;}
.input{height:35px; width:200px;}
.submit{background-color:#3b8ced; font-size:16px; color:white; height:35px; width:200px; margin-left:42%;}

a:link, a:visited {
    color: white;
    text-align: center;
    text-decoration: none;
}

a:hover, a:active {
    color: #3b8ced;
}

</style>

<div id="signuppage">

<form method="post" action="">
<div id="login">
<div id="header"> 
HiredOn
</div>

<br /><br /><br />
    <div id="signuppage1">
 <img src="<?php echo get_template_directory_uri();?>/user64pxcopy.png" class="icon"/></div>
    <input type="text" placeholder="username" name="username" class="input"/>
    </span><br><br />
    
    <div id="signuppage1">
 <img src="<?php echo get_template_directory_uri();?>/password64px.png" class="icon" /></div>
    <input type="password" placeholder="password" name="pass" class="input">
    <br><br />
    
    <input type="submit" value="Login" class="submit">
    <br/> <br /><br /><br />
    <div id="link">
 <a href=" " target=" k">Forgot Username</a> 
 
	</div>
    <div id="link">
    <a href=" " target=" ">Forgot Password</a>
    </div>
</div>

</form>
</div>

  <?php get_footer();?>

