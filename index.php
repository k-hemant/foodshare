<html>

<title>foodshare</title>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="style.css">



<center>
<div class="header">


<h2>
<a style="text-decoration:none;color:black;" href="index.php">FoodShare</a>
</h2>


</div>
</center>




<br><br><br><br>





<div>





<center>

<div style="width:80%">








<div style="width:63%;">

<div class="left">

<h2>CrowdSourcing of Food</h2>

Find Food that are Left at the Shopkeeper <br> or in parties in their closing Time at <br> Cheap Price or For Free.
<P>

<button class="share" onclick="location.href = 'share.php';">Share Food</button>



</div>

<div class="right">
<img src="image.png" width="300px">
</div>

<div style="clear:both;"></div>

</div>





<form method="POST">

<input class="input" type="search" name="food" placeholder="food" >

<select class="select" name="city" >

<option value="Bhilai">Bhilai</option>
<option  value="Durg">Durg</option>
<option  value="Raipur">Raipur</option>
</select>

<button class="button"  >Search</button>

</form>



<div class="show">




<?php

if(isset($_POST["city"])){
	
$food = $_POST["food"];	 	
$city = $_POST["city"];	
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "foodshare";

echo "<center>
<h3 class='no'>All Available Results</h3>
</center>

<br>";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * from foodshare WHERE city='$city' OR food='$food' ORDER By id desc";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

  while($row = $result->fetch_assoc()) {
    echo "<fieldset class='card'>
	<div>
	<div class='cardleft'>
	<br>
	<font size='5'>".$row["name"]." - <span style='color:#ff9f1a;'>".$row["place"]."</span></font>
	<br>
	<font size='2'>
	<span style='color:#ff9f1a;'>Posted on</span> - ".$row["date"]."
	</font>
	<p>
	
	<span style='color:#ff9f1a;'>Food</span> - ".$row["food"]."&nbsp <span style='color:#ff9f1a;'>Price</span> - ".$row["price"]." <b>Rs</b>&nbsp <span style='color:#ff9f1a;'>Closing Time</span> - ".$row["time"]." ".$row["period"]." 
	</div>
	<div class='cardright'>
	
	<img src='location.png' align='center'>&nbsp".$row["city"]."
	<p>
	<a class='google' href='https://www.google.com/search?q=".$row["place"]." ".$row["city"]."' target='_blank'>Verify in Google</a>
	<p>
	<a class='whatsapp' href='https://wa.me/91".$row["whatsapp"]."/?text=Hello i want to know about your posting on foodshare.' target='_blank'>  WhatsApp  </a>
	
	</div>
	<div style='clear:both;'></div>
	</div>
	

	
	
	
	
	
	
	</fieldset><br><br>";
	
	
	
	
  }
} else {
  echo "<h2 class='no'>0 Results Found.</h2>";
}
$conn->close();
}
else{
	
}
?>

</div>


<br><br><br><br><br><br><br><br>



<font style="    font-family: 'Josefin Sans', sans-serif;">

Illustration by <a style ="color:#ffa801;text-decoration:none;" href="https://icons8.com/illustrations/author/5c3c1a17569980000ee8cf05">Aleksey Chizhikov</a> from <a style="color:#ffa801;text-decoration:none;" href="https://icons8.com/illustrations">Ouch!</a>

<p><P>

Developed by Team Hierarchy

</font>



</div>

</center>

</div>
















	<?php
	///delete post older than 24 hrs
	
	$connect=mysqli_connect("localhost","root","","foodshare");
	$query="DELETE FROM foodshare WHERE timestamp <= NOW() - INTERVAL 1 DAY";
	$result = mysqli_query($connect, $query);
	
	?>



</html>