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
//mysqli_connect('localhost','root','') or die(mysqli_error());
     //mysqli_select_db('wedding') or die(mysqli_error());
     $email=$_POST['email'];
     $password=$_POST['psw'];
if($email!=''&&$password!='')
 {
   $query="select * from alogin where email='".$email."' and psw='".$password."'";
   $res=pg_query($conn,$query);
   $count=pg_affected_rows($res);
   if($count!=0)
   {
    $_SESSION['usn']=$usn;
   // header('location:add.php?usn='.$usn);
      header('Location: add.php');  

   }
   else
   {?>
<script>
    alert ("Entered Username and password is incorect");
</script>
<?php
   }
 }
 else
 {
  echo'Enter both username and password';
 }
}
?>



<!DOCTYPE html>
<html>
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
  margin-top:1%;
}

.f1{
    width:500px;
    margin-left:750px;
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

fieldset{
    background-color:snow;
    opacity:0.9;
}

</style>
  <body id="body-color" style="background:url(b4.jpeg); background-repeat:no-repeat;background-size:500%500%">

    <div class="sidenav">
       <br/><br/> <a href="alogin.php">Login</a><br/><br/>
        <a href="http://guru.nmamit.in" target="_blank">Moodle</a><br/><br/>
        <a href="http://www.nmamit.nitte.edu.in" target="_blank">College Homepage</a><br/><br/>
      </div>

<form action="" method="POST">
  <div class="container"></div>
    <fieldset class="f1"><legend><b><h1>ADMIN-LOGIN</h1></b></legend><br/><br/>

  <!-- <label for="usn"><b>USN</b></label>
    <input type="text" placeholder="Enter USN to enter or edit" name="usn" required>-->


    <label for="usn"><b>Email</b></label>
    <input type="text" placeholder="Enter email" name="email" required>


    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

  <!--<p><b>New User?</b> <a href="asign.php"><b>Signup here</b></a></p>-->

    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
 
      <button type="submit" class="signupbtn" name="submit">Login</button>

    </div>
    </fieldset>
</form>

</body>
</html>
