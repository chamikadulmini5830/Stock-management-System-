<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Stock_search</title>
	<!--CSS-->
	<link rel="stylesheet" type="text/css" href="css/Stock_search.css">
	<!--JavaScript-->
	<script src="js/RightClickDisable.js"></script>
</head>
<body>
	<!--Back Button-->

	<input type="button" name="btn_Back" class="bb" value="<<< Stock Form" onclick= location.href='stock_main_window.html'>
	<?php
	$servername = "localhost:3308"; //3308 for WAMPSERVER
    $username = "root";
    $password = "";
    $dbname = "s&i_software_solutions";

    $Supplier_number=$_POST["Supplier_number"];

    // Create connection
    $conn = @mysqli_connect($servername, $username, $password,$dbname); //@mysqli for WAMPSERVER

    // Check connection
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }else{
        echo "";
    }
    echo "<br>";
    //sql select command
    $sql = "SELECT * FROM supplier where Supplier_number like '$Supplier_number'"; //for WAMSERVER (like)
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result)>=1){
      // output data of each row
      
      while($row = mysqli_fetch_assoc($result)) {

      	echo"<table>";
      	
      	echo"<tr><td colspan='2' class='title'><center><b><h3> Supplier Search</h3></b></center></td></tr>";

      	echo"<tr><td>Supplier number: </td>";
      	echo"<td>";
      	echo'<input type="text" class="no-outline" value='.$row['Supplier_number'].'>';
      	echo"</td></tr>";

      	echo"<tr><td>Supplier name: </td>";
      	echo"<td>";
      	echo'<input type="text" class="no-outline" value='.$row['Supplier_name'].'>';
      	echo"</td></tr>";

      	echo"<tr><td>Item type: </td>";
      	echo"<td>";
      	echo'<input type="text" class="no-outline" value='.$row['Item_type'].'>';
      	echo"</td></tr>";

      	echo"<tr><td>Contact no: </td>";
      	echo"<td>";
      	echo'<input type="text" class="no-outline" value='.$row['Contact_no'].'>';
      	echo"</td></tr>";

      	echo"<tr><td>Email address: </td>";
      	echo"<td>";
      	echo'<input type="text" class="no-outline" value='.$row['Email_address'].'>';
      	echo"</td></tr>";

      	echo"<tr><td >Registration date: </td>";
      	echo"<td>";
      	echo'<input type="text" class="no-outline" value='.$row['Registration_date'].'>';
      	echo"</td></tr>";

      	echo"</table>";

      }
      
    } else {
      echo "";
    }

	
?>

<!--Footer-->

<footer>
	&copy;<script>document.write(new Date().getFullYear());</script> All rights reserved. by S & I Software Solutions
	<br> Designed by Ishan Pathirana | Developed by Shehan Ranasinghe

	<!-- Date and Time -->

	<div class="c">
	<script>
		document.write("Date : ");document.write(new Date().getFullYear());document.write("-");
		document.write(new Date().getMonth()+1);document.write("-");
		document.write(new Date().getDate());
		document.write("    |    ");
		document.write("Time : ");document.write(new Date().getHours());document.write(":");
		document.write(new Date().getMinutes());document.write(":");
		document.write(new Date().getSeconds());
	</script>
	</div>

</footer>

</body>
</html>