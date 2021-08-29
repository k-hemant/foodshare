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


Share Food that are Left at your Shop <br> or in your party in closing Time at <br> Cheap Price or For Free.
<P>
Your Post will get automatically delete after 24 hours.




</div>


<div class="right">
<img src="image.png" width="200px">
</div>

<div style="clear:both;"></div>

</div>



<P>

<center><h2 style="font-family: 'Josefin Sans', sans-serif;">Submit your Food</h2></center>

<P>

<form method="POST">

<input class="input" type="text" name="name" placeholder="Enter Your Name :" required>

<p>
<input class="input" type="text" name="place" placeholder="Enter Place Name : ( Hall, Shop Name )" required>

<p>
<input class="input" type="text" name="food" placeholder="Dish Name :" required>

<p>

<input class="input" type="number" name="price" placeholder="Price of Food:" required>

<p>


<input class="input" type="number" name="whatsapp" placeholder="Your Whatsapp Number:" required>

<P>

<font style="    font-family: 'Josefin Sans', sans-serif; 
    border-radius:5px;
	font-size: 19;">
Closing Time  : <input class="time" type="time" name="time">
</font>

<select name="period" CLASS="period">
<option>AM</option>
<option>PM</option>

</select>


<p>

<h3  style="    font-family: 'Josefin Sans', sans-serif;">City :

<select class="select" name="city" >

<option value="Bhilai">Bhilai</option>
<option  value="Durg">Durg</option>
<option  value="Raipur">Raipur</option>
</select>
 </h3>
<P>

<button class="button"  >Submit</button>

</form>






<br><br><br><br><br>



<font style="    font-family: 'Josefin Sans', sans-serif;">

Illustration by <a style ="color:#ffa801;text-decoration:none;" href="https://icons8.com/illustrations/author/5c3c1a17569980000ee8cf05">Aleksey Chizhikov</a> from <a style="color:#ffa801;text-decoration:none;" href="https://icons8.com/illustrations">Ouch!</a>

<p><P>

Developed by Team Hierarchy

</font>

</div>

</center>

</div>



<?php

if(isset($_POST["food"])){
	
	
$name=$_POST["name"];
$place=$_POST["place"];
$food=$_POST["food"];	
$price=$_POST["price"];
$whatsapp=$_POST["whatsapp"];
$time=$_POST["time"];
$period=$_POST["period"];
$city=$_POST["city"];
	
$date=date_default_timezone_set("Asia/Calcutta");
$date=date('l jS \of F Y h:i:s A');	
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "foodshare";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO foodshare (name, place, food, price, whatsapp,time,period,city,date,timestamp)
VALUES ('$name', '$place', '$food','$price','$whatsapp','$time','$period','$city','$date',CURRENT_TIMESTAMP())";

if (mysqli_query($conn, $sql)) {
  echo '<script>alert("Succesfully Submitted.")</script>';
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


	
}
else{
	echo "";
	
}	


?>








</html>