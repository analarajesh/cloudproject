<?php
//session_start();

    $host="ec2-3-91-112-166.compute-1.amazonaws.com";
	$dbname="d655v4qih867f8";
	$usr='swdtrrbarfqlsr';
	$port="5432";
	$password="5df0ebbc13b195435f172648d533b63b0b6d441bc7a5367a1edc270f65622b2d";
	$conn=pg_connect("host=$host dbname=$dbname user=$usr port=$port password=$password");
	
	if(!$conn)
	{
		echo "error";
		exit;
	}
	?>

<?php

if (isset($_POST['submit']))
{
$usn=$_POST['usn'];
$sub=$_POST['sub'];
$held=$_POST['held'];
$attend=$_POST['att'];
$percent=$_POST['per'];
 $sql="INSERT into att(usn,sub,class,classatt,percentage) values('$usn','$sub','$held','$attend','$percent')";
 $qry=pg_query($conn,$sql);
 if(!$qry)
echo "Error";
else
  $_SESSION['usn']=$usn;
  header('location:view.php?usn='.$usn);
echo "Success";  
}

?>

<!DOCTYPE html>
<html>

<head>


<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: rgb(76, 139, 175);
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
  width:500px;
  margin-left:750px;
}

.f1{
    width:500px;
    margin-left:750px;
margin-top:-3%;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}

.sidenav {
  height: 100%;
  width: 160px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: rgb(33, 96, 121);
  overflow-x: hidden;
  padding-top: 20px;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 25px;
  color:white;
  display: block;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.main {
  margin-left: 160px; /* Same as the width of the sidenav */
  font-size: 28px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

mark{
background:white;
}

mark1{
background:snow;
}

</style>
</head>
  <body id="body-color" style="background:url(b4.jpeg); background-repeat:no-repeat;background-size:500%500%">

<div class="sidenav">
       <br/><br/> <a href="alogin.php">Logout</a><br/><br/>
        <a href="http://guru.nmamit.in" target="_blank">Moodle</a><br/><br/>
        <a href="http://www.nmamit.nitte.edu.in" target="_blank">College Homepage</a><br/><br/>
      </div>

<form action="" method="POST">
  <div class="container"></div>
    <fieldset class="f1"><legend><b><h1>ADD DATA</h1></b></legend><br/><br/>

<label for="usn"><b>USN</b></label>
    <input type="text" placeholder="Enter USN" name="usn" required >

    <label for="sub"><b>Subjects</b></label>
    <input type="text" placeholder="Enter Subject" name="sub" required  >

    <label for="held"><b>Class Held</b></label>
    <input type="text" placeholder="Enter Class held" name="held" required>

    <label for="att"><b>Class Attended</b></label>
    <input type="text" placeholder="Enter Class Attended" name="att" required >

    <label for="per"><b>Percentage</b></label>
    <input type="text" placeholder="Enter Percentage" name="per" required >


    <div class="clearfix">
      <button type="submit" name="submit" class="signupbtn">Add</button>
	   <button type="button" class="cancelbtn" name="view" onclick="document.location = 'vform.php'">View</button>

    </div>

    </fieldset>
</form>
<script>
 


</body>
</html>
