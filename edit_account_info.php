

<?php
include 'header.php';
?>


<html lang="en">
<head>
  <title>Edit Account</title>
  
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

#editbox {
    max-width: 80%;
    height: 600px;
    margin-left: 10%;
    border: 1px solid #3b8ced;
    border-top: 1px solid #3b8ced;
    border-bottom: 1px solid #3b8ced;
    padding-top: 30px;
}

#title {
    font-size: 20pt;
    margin-left: 10%;

    
}

.subhead {
    font-size: 13pt;
    padding-left: 40px;
    padding-top: 10px;
}

.information {
   padding-left: 50px; 
}




input[type="text"] {
  display: inline-block;
  margin: 0;
  width: 200px;
  font-family: sans-serif;
  font-size: 14px;
  appearance: none;
  box-shadow: none;
  border-radius: none;
}

input[type="text"] {
  outline: none;
  width: 200px;
}





.style-3 input[type="text"] {
  padding: 10px;
  border: solid 5px #c9c9c9;
  box-shadow: inset 0 0 0 1px #707070;
  transition: box-shadow 0.3s, border 0.3s;
}
.style-3 input[type="text"]:focus,
.style-3 input[type="text"].focus {
  border: solid 5px #969696;
}


.info {
    padding-left: 60px;
}


.block label {
    display: inline-block;
    width: 140px;
    text-align: right;
}


input[type=submit] {padding:5px 15px; background:#ccc; border:0 none;
    cursor:pointer;
    -webkit-border-radius: 5px;
    border-radius: 5px; }


   </style>
  
</head>



<body>

<div id="main">
    
  <input id="tab1" type="radio" name="tabs" >
  <label for="tab1">Account Info</label>
    
  <input id="tab2" type="radio" name="tabs" >
  <label for="tab2">Project Details</label>
    
  <input id="tab3" type="radio" name="tabs">
  <label for="tab3">Profile Details</label>
    
  <input id="tab4" type="radio" name="tabs">
  <label for="tab4">Video Upload</label>
  
  <input id="tab5" type="radio" name="tabs" checked>
  <label for="tab5">Edit Account</label>
  
</div>

<br>
<br>

<div id="title">
    <p>Edit Account</p>
</div>

<div id="editbox">


<form action="action_page.php">


<p class="subhead">Account Info</p>

<div class="block">
    <label>Email</label>
    <input type="text" />
</div>
<div class="block">
    <label>Username</label>
    <input type="text" />
</div>
<br>
<br>

<p class="subhead">Personal Info</p>

<div class="block">
    <label>First Name</label>
    <input type="text" />
</div>

<div class="block">
    <label>Last Name</label>
    <input type="text" />
</div>
<div class="block">
    <label>Phone Number</label>
    <input type="text" />
</div>
<br>
<br>


<p class="subhead">Address Info</p>

<div class="block">
    <label>Street</label>
    <input type="text" />
</div>
<div class="block">
    <label>City</label>
    <input type="text" />
</div>
<div class="block">
    <label>Zip Code</label>
    <input type="text" />
</div>
<div class="block">
    <label>State</label>
    <input type="text" />
</div>

    
 <input type="submit" value="Submit"/>

</form>
    
    
    
</div>


</body>
</html>

<?php
include 'footer.php';
?>