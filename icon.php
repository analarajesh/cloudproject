
<?php
$conn=mysqli_connect("localhost","root","");
$db=mysqli_select_db($conn,"stud");
if($db)
{
echo "connected succesfully";
}
else{
echo "not connected";
}
?>

<?php
$usn=$_GET['username'];
?>






<!DOCTYPE html>
<html>

<style>
    .a1{
position:absolute;
margin-right:-12%;
margin-left:-26% ;

margin-top:38%;
margin-bottom:0% ;
}

.a2{
position:absolute;
margin-right:-26%;
margin-left:-34% ;

margin-top:38%;
margin-bottom:0% ;
}

.fa-lock{
position:absolute;
margin-top:3%;
margin-left:1%;
color:blue;
font-size: 40px;
}



mark{
background:cornflowerblue;
}


</style>
    
   

<head>
  <link href="https://use.fontawesome.com/releases/v5.0.7/css/all.css" rel="stylesheet">

<title>Icon-page</title> 
</head>

<body id="body-color" style="background:url(b4.jpeg); background-repeat:no-repeat;background-size:500% 500%" >

    <a href="attendance.php?username=<?php echo $usn?>">
        <img src="att.jpg" alt="Attendance" style="width:450px;height:400px;border:0;">
      </a>
      <b><mark class="a1">ATTENDANCE</mark></b>


 
     <a href="report.php?username=<?php echo $usn?>">
        <img src="rep.png" alt="Report"  style="width:450px;height:360px;border:0; margin-right: 10%; margin-left: 10%;">
      </a>

        <b><mark class="a2">REPORT</mark></b>

      <a href="login.php"><i class="fas fa-lock" onclick="show()"></i></a></legend>
      

      <script>
        function show()
        {
            alert("Logout Successfull");
        }
    </script>



      
</body>
