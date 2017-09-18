
<?php
$serverName='localhost';
$username='root';
$password='';
$databaseName='transport'; 
$connection=mysqli_connect($serverName,$username,$password,$databaseName) or die("Could not connect !");
$fetchDataQuery="select * from bus "; ;
$result=mysqli_query($connection,$fetchDataQuery);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  body
  {
  	background-image: url("http://www.ipv6summit.ca/wp-content/uploads/2016/12/passion-of-travelling.jpg");
  	background-repeat: no-repeat;
  	background size: cover;
  }
  </style>
</head>
<body>
<center>
 <nav  class="navbar navbar-inverse" style="width:1386px;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a style="color:red;" class="navbar-brand" href="frontpage.php">SEARCH ON THE GO</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="#">TRAINS</a></li>      
      <li><a href="#">CABS</a></li>      
      <li><a href="main.php">BUSES</a></li>
      <i class="icon-large icon-cars"></i>
    </ul>
    
  </div>
</nav>  
<div class="container">
  <div style="background: red; /* For browsers that do not support gradients */
  background: -webkit-linear-gradient(left top, red, yellow); /* For Safari 5.1 to 6.0 */
  background: -o-linear-gradient(bottom right, red, yellow); /* For Opera 11.1 to 12.0 */
  background: -moz-linear-gradient(bottom right, red, yellow); /* For Firefox 3.6 to 15 */
  background: linear-gradient(to bottom right, red, yellow"; class="jumbotron">
   
<?php
$start=$_POST["source"];
$dest=$_POST["destination"];
 $rowcount=mysqli_num_rows($result);
   if($rowcount>=1)
    { 
	    echo "<h4><b><i> Hello Customer Here You Go!!!</i></b></h4> <br> <br> "; 
		while($row=mysqli_fetch_assoc($result))
		{
			 
			if($start==$row["start"]&&$dest==$row["final"])
			{
		
				
				echo "YOU SHOULD TRAVEL BY BUS NO:   ". $row["busno"] ."<br><br><br>";
			}
			elseif($start==$row["start"]&&$dest==$row["destination5"])
			{
		
			 
			echo "YOU SHOULD TRAVEL BY BUS NO:   ". $row["busno"] ."<br><br><br>";
			}
			elseif($start==$row["start"]&&$dest==$row["destination4"])
			{
		
			
			echo "YOU SHOULD TRAVEL BY BUS NO:   ". $row["busno"] ."<br><br><br>";
			}
			elseif($start==$row["start"]&&$dest==$row["destination3"])
			{
		
			
			echo "YOU SHOULD TRAVEL BY BUS NO:   ". $row["busno"] ."<br><br><br>";
			}
			elseif($start==$row["start"]&&$dest==$row["destination2"])
			{
		
			
			echo "YOU SHOULD TRAVEL BY BUS NO:   ". $row["busno"] ."<br><br><br>";
			}
			elseif($start==$row["start"]&&$dest==$row["destination1"])
			{
		
			
			echo "YOU SHOULD TRAVEL BY BUS NO:   ". $row["busno"] ."<br><br><br>";
			}
			elseif($start==$row["destination1"]&&$dest==$row["final"])
			{
		
			
			echo "YOU SHOULD TRAVEL BY BUS NO:   ". $row["busno"] ."<br><br><br>";
			}
			elseif($start==$row["destination1"]&&$dest==$row["destination5"])
			{
		
			
			echo "YOU SHOULD TRAVEL BY BUS NO:   ". $row["busno"] ."<br><br><br>";
			}
			elseif($start==$row["destination1"]&&$dest==$row["destination4"])
			{
		
			
			echo "YOU SHOULD TRAVEL BY BUS NO:   ". $row["busno"] ."<br><br><br>";
			}
			elseif($start==$row["destination1"]&&$dest==$row["destination3"])
			{
		
			
			echo "YOU SHOULD TRAVEL BY BUS NO:   ". $row["busno"] ."<br><br><br>";
			}
			elseif($start==$row["destination1"]&&$dest==$row["destination2"])
			{
		
			
			echo "YOU SHOULD TRAVEL BY BUS NO:   ". $row["busno"] ."<br><br><br>";
			}
			elseif($start==$row["destination2"]&&$dest==$row["final"])
			{
		
			 
			echo "YOU SHOULD TRAVEL BY BUS NO:   ". $row["busno"] ."<br><br><br>";
			}
			elseif($start==$row["destination2"]&&$dest==$row["destination5"])
			{
		
			 
			echo "YOU SHOULD TRAVEL BY BUS NO:   ". $row["busno"] ."<br><br><br>";
			}
			elseif($start==$row["destination2"]&&$dest==$row["destination4"])
			{
		
	 
			echo "YOU SHOULD TRAVEL BY BUS NO:   ". $row["busno"] ."<br><br><br>";
			}
			elseif($start==$row["destination2"]&&$dest==$row["destination3"])
			{
	
			
			echo "YOU SHOULD TRAVEL BY BUS NO:   ". $row["busno"] ."<br><br><br>";
			}
			elseif($start==$row["destination3"]&&$dest==$row["final"])
			{
		
			 
			echo "YOU SHOULD TRAVEL BY BUS NO:   ". $row["busno"] ."<br><br><br>";
			}
			elseif($start==$row["destination3"]&&$dest==$row["destination5"])
			{
		
			
			echo "YOU SHOULD TRAVEL BY BUS NO:   ". $row["busno"] ."<br><br><br>";
			}
			elseif($start==$row["destination3"]&&$dest==$row["destination4"])
			{
		
			
			echo "YOU SHOULD TRAVEL BY BUS NO:   ". $row["busno"] ."<br><br><br>";
			}
			elseif($start==$row["destination4"]&&$dest==$row["final"])
			{
		
			
			echo "YOU SHOULD TRAVEL BY BUS NO:   ". $row["busno"] ."<br><br><br>";
			}
			elseif($start==$row["destination4"]&&$dest==$row["destination5"])
			{
		
			
			echo "YOU SHOULD TRAVEL BY BUS NO:   ". $row["busno"] ."<br><br><br>";
			}
			elseif($start==$row["destination5"]&&$dest==$row["final"])
			{
		
			
			echo "YOU SHOULD TRAVEL BY BUS NO:   ". $row["busno"] ."<br><br><br>";
			}
			
	}
			
}
	else
	{
   		echo "SORRY CUSTOMER NO SUCH ROUTES !";
	}
?>
</div>
</div>
</center>
</body>
</html>

