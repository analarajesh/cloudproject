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
    if(isset($_GET['usn'])){
      $usn = $_GET['usn'];
 }else{
      $usn = "USN not set in GET Method";
 }

  $query = "SELECT * FROM att where usn='$usn';";
  $result=pg_query($conn,$query);
  $resultcheck=pg_num_rows($result);

  ?>





<!DOCTYPE html>
<html>
<head>
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

#customers tr{background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: rgb(65, 121, 158);
  color: white;
}

.b2{
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
  border: 1px solid rgb(74, 74, 187);
  border-width: 2px 2px 5px;
  margin-bottom:10px;
  margin-top:5%;
  margin-left:5%;
}

.b2:hover
{
  background:rgb(133, 193, 221);
}

.navbar {
  overflow: hidden;
  background-color: #333;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: cornflowerblue	;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}



</style>
</head>
<body id="body-color" style="background:url(b4.jpeg); background-repeat:no-repeat;background-size:500%500%">

    <div class="navbar">
        <a href="index.php">Logout</a> 
        <a href="icon.php">Back</a>
        <div class="dropdown">
          <!-- <button class="dropbtn">View
            <i class="fa fa-caret-down"></i>
          </button> -->
<!--           <div class="dropdown-content">
            <a href="#">Sem 1</a>
            <a href="#">Sem 2</a>
            <a href="#">Sem 3</a>
            <a href="#">Sem 4</a>
            <a href="#">Sem 5</a>
            <a href="#">Sem 6</a>
            <a href="#">Sem 7</a>
            <a href="#">Sem 8</a>
          </div> -->
        </div> 
      </div>

    <h1>ATTENDANCE RECORD</h1>

<table id="customers">
  <tr>
    <th>Subject</th>
    <th>Classes Held</th>
    <th>Classes Attended</th>
    <th>Percentage</th>
  </tr>
  
  <?php
  

 
  if(($resultcheck)>0){
  while($rows=pg_fetch_assoc($result))
  {
   ?>
   
  <tr>
    <td><?php echo $rows['sub'];?></td>
    <td><?php echo $rows['class'];?></td>
    <td><?php echo $rows['classatt'];?></td>
    <td><?php echo $rows['percentage'];?></td>
	<?php
  }
  }
  ?>
    
  </tr>
  

</body>
</html>
