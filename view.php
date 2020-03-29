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


<!DOCTYPE html>
<html>
<head>
<link href="https://use.fontawesome.com/releases/v5.0.7/css/all.css" rel="stylesheet">

<style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 80%;
  margin-top:8%;
  margin-left:8%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 10px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: rgb(65, 121, 158);
  color: white;
}

.navbar {
  overflow: hidden;
  background-color: rgb(81, 88, 88);
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: cornflowerblue  ;
}

.b1{
position:relative;
display: block;
padding:8px 5px 2px 5px;
color: black;
margin: 0 auto;
background: snow;
font-size: 18px;
text-align: center;
font-style: normal;
width: 15%;
border: 1px solid black;
border-width: 2px 2px 5px;
margin-bottom:10px;
margin-top:5%;
margin-left:5%;
}

.b1:hover
{
background:lavender;
}

.fa-edit{
color:blue ;
}

</style>
</head>
<body id="body-color" style="background:url(b4.jpeg);  background-repeat:no-repeat;background-size:500%500%">

  <div class="navbar">
    <a href="alogin.php">Logout</a> 
    <!--<a href="icon.php">Back</a>-->
    </div>
<h1>ATTENDANCE RECORD</h1>

<div class="table-responsive"><!--this is used for responsive display in mobile and other devices-->  
  
  <table class="table table-bordered table-hover table-striped" style="table-layout: fixed" id="customers">  

<thead>
  <tr>
    <th>SUBJECTS</th>
    <th>CLASSES HELD</th>
    <th>CLASSES ATTENDED</th>
    <th>PERCENTAGE</th>
	<th>EDIT</th>
<!--<th>EDIT</th>-->
</thead>
  </tr>
  <?php
  if(isset($_GET['usn'])){
      $usn = $_GET['usn']; 
 }else{
      $usn = "USN not set in GET Method";
 }
  $query = "SELECT * FROM att where usn='$usn';";
  $result=pg_query($conn,$query);
  $resultcheck=pg_num_rows($result);

 
  if(($resultcheck)>0){
  while($rows=pg_fetch_assoc($result))
  {
   ?>
   
  <tr>
    <td><?php echo $rows['sub'];?></td>
    <td><?php echo $rows['class'];?></td>
    <td><?php echo $rows['classatt'];?></td>
    <td><?php echo $rows['percentage'];?></td>
	<td><a href="edit.php?id=<?php echo $rows['id'];?>"><i class="fas fa-edit" ></i></a><b>EDIT</b></a></td>
	</tr>
	<?php
  }
  }
  ?>
  
</table>
</div>
<br/><br/>
<br/><br/>

<button  class="b1" type="submit" name="submit" onclick="load()"><b>Add New Data</b></button><br/><br/>

<script>
 function load()
 {
window.location.assign('add.php');
 }

</script>
</body>
</html>
