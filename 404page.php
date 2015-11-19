

<?php

include 'header.php';

?>



<html lang="en">
<head>
    <title>404 Page Not Found</title>
    
<style>
    html, body
    {
    margin: 0;
    padding: 0;
    }
    
    
    #oops {
        color: #3B8CED;
        text-align: center;
        width: 600px;
    }
    #photo {
        max-width: 60%;
        max-height: 70%;

        left:20%;
        display: block;
        margin: 0 auto;
    }
    body {
        background-color: white; 
    }
    
    #description {
        max-width: 70%;
        max-height: 100px;
        left:15%;
        display: block;
        margin: 0 auto;
        text-align: center;
        font-size: 40px;
        color:#3c4040;
        background-color: white;
    }
    
    </style>
    
</head>
<body>
   
   
      
  
   
   <div id="description">
        <p>We are sorry but we cannot find that page right now. Please user our menu to navigate to another page</p>
   </div>
   
   
    <img src="404pic.png" id="photo">
   
   
   
</body>
</html>

<?php
include 'footer.php';
?>