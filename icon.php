
<?php

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
$usn=$_GET['usn'];
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

    <a href="attendance.php?usn=<?php echo $usn?>">
        <img src="att.jpg" alt="Attendance" style="width:450px;height:400px;border:0;">
      </a>
      <b><mark class="a1">ATTENDANCE</mark></b>


 
     <a href="report.php?usn=<?php echo $usn?>">
        <img src="rep.png" alt="Report"  style="width:450px;height:360px;border:0; margin-right: 10%; margin-left: 10%;">
      </a>

        <b><mark class="a2">REPORT</mark></b>

      <a href="index.php"><i class="fas fa-lock" onclick="show()"></i></a></legend>
      

      <script>
        function show()
        {
            alert("Logout Successfull");
        }
    </script>



      
</body>
