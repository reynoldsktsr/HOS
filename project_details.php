


<?php
include 'header.php';
?>


<html lang="en">
<head>
  <title>Project Details</title>
  
  <meta charset="utf-8">

    
  
    <style>

html, body {
  height: 100%;
  background-color: white;
}

body {
  font: 14px/1 'Open Sans', sans-serif;
  color: #555;
  background: white;
}

h1 {
  padding: 50px 0;
  font-weight: 400;
  text-align: center;
}

p {
  margin: 0 0 20px;
  line-height: 1.5;
}

#main {
  min-width: 320px;
  max-width: 80%;
  padding-left: 50px;
  margin-left: 10%;
  background: white;
  text-align: center;
}


input {
  display: none;
}

label {
  display: inline-block;
  margin: 0 0 -1px;
  padding: 10px 25px;
  font-weight: 400;
  text-align: center;
  color: #6d6d6d;
  border: 1px solid transparent;
}

label:before {
  font-family: fontawesome;
  font-weight: normal;
  margin-right: 10px;
}


label:hover {
  color: #3b8ced;
  cursor: pointer;
}

input:checked + label {
  color: #3b8ced;
  border: 1px solid #3b8ced;
  border-top: 2px solid #3b8ced;
  border-bottom: 1px solid #3b8ced;
}

#projectlist {
    max-width: 80%;
    height: 400px;
    margin-left: 10%;
    border: 1px solid #3b8ced;
    border-top: 1px solid #3b8ced;
    border-bottom: 1px solid #3b8ced;
}

#title {
    font-size: 20pt;
    margin-left: 10%;

    
}
   </style>
  
</head>



<body>

<div id="main">
    
  <input id="tab1" type="radio" name="tabs" >
  <label for="tab1">Account Info</label>
    
  <input id="tab2" type="radio" name="tabs" checked>
  <label for="tab2">Project Details</label>
    
  <input id="tab3" type="radio" name="tabs">
  <label for="tab3">Profile Details</label>
    
  <input id="tab4" type="radio" name="tabs">
  <label for="tab4">Video Upload</label>
  
  <input id="tab5" type="radio" name="tabs">
  <label for="tab5">Edit Account</label>
  
</div>

<br>
<br>

<div id="title">
    <p>Project Details</p>
</div>
<div id="editbox">


<div id="projectlist">
    <ol class="numberedList">
    <li></li>
<br>
<br>
    <li></li>
<br>
<br>
    <li></li>
<br>
<br>
    <li></li>
</ol>
</div>


</body>
</html>

<?php
include 'footer.php';
?>