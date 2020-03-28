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

  $query = "SELECT * FROM report where usn='$usn';";
  $result=pg_query($conn,$query);
  $resultcheck=pg_num_rows($result);

  ?>
  

<!DOCTYPE html>
<html>
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

body {
  font-family: Arial, Helvetica, sans-serif;
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

/* #customers tr:nth-child(even){background-color: #f2f2f2;} */
#customers tr{background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: rgb(65, 121, 158);
  color: white;
}




/* table, td, th {  
  /* border: 1px solid #ddd; */
  /* text-align: center;
  border: 1px solid black;
}
table {
  border-collapse: collapse;
  width: 100%;
  margin-top:100px;
 
}
th, td {
  padding: 15px;
} */ 

</style>
</head>
<body>
    <body id="body-color" style="background:url(b4.jpeg); background-repeat:no-repeat;background-size:500% 500%" ></body>
    <div class="navbar">
        <a href="index.php">Logout</a> 
        <a href="icon.php">Back</a>
        <div class="dropdown">
          <button class="dropbtn">View
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-content">
            <a href="#">Sem 1</a>
            <a href="#">Sem 2</a>
            <a href="#">Sem 3</a>
            <a href="#">Sem 4</a>
            <a href="#">Sem 5</a>
            <a href="#">Sem 6</a>
            <a href="#">Sem 7</a>
            <a href="#">Sem 8</a>
          </div>
        </div> 
      </div>
      
<h2>SEMESTER END EXAM RESULTS</h2>


<table id="customers">
  <tr>
    <th>COURSE NAME</th>
    <th>COURSE CODE</th>
    <th>CIE</th>
    <th>SEE</th>
    <th>GRADE</th>
    <th>GRADE POINT</th>
  </tr>
  <?php
  

 
  if(($resultcheck)>0){
  while($rows=pg_fetch_assoc($result))
  {
   ?>
   
  <tr>
    <td><?php echo $rows['coursename'];?></td>
    <td><?php echo $rows['code'];?></td>
    <td><?php echo $rows['cie'];?></td>
    <td><?php echo $rows['see'];?></td>
    <td><?php echo $rows['grade'];?></td>
    <td><?php echo $rows['gradepoint'];?></td>
	<?php
  }
  }
  ?>
    
  </tr>

</table>

</body>
</html>
