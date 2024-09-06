<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Bill_Payment</title>
	<!--CSS-->
	<link rel="stylesheet" type="text/css" href="css/billPayment.css">
	<!--JavaScript-->
	<script src="js/RightClickDisable.js"></script>
</head>
<body>
<?php
$I1=$_POST["I1"];
$I2=$_POST["I2"];
$I3=$_POST["I3"];
$I4=$_POST["I4"];
$I5=$_POST["I5"];
$I6=$_POST["I6"];
$I7=$_POST["I7"];
$I8=$_POST["I8"];
$I9=$_POST["I9"];
$I10=$_POST["I10"];

$Q1=$_POST["Q1"];
$Q2=$_POST["Q2"];
$Q3=$_POST["Q3"];
$Q4=$_POST["Q4"];
$Q5=$_POST["Q5"];
$Q6=$_POST["Q6"];
$Q7=$_POST["Q7"];
$Q8=$_POST["Q8"];
$Q9=$_POST["Q9"];
$Q10=$_POST["Q10"];

$P1=$_POST["P1"];
$P2=$_POST["P2"];
$P3=$_POST["P3"];
$P4=$_POST["P4"];
$P5=$_POST["P5"];
$P6=$_POST["P6"];
$P7=$_POST["P7"];
$P8=$_POST["P8"];
$P9=$_POST["P9"];
$P10=$_POST["P10"];

$t1=$P1*$Q1;
$t2=$P2*$Q2;
$t3=$P3*$Q3;
$t4=$P4*$Q4;
$t5=$P5*$Q5;
$t6=$P6*$Q6;
$t7=$P7*$Q7;
$t8=$P8*$Q8;
$t9=$P9*$Q9;
$t10=$P10*$Q10;

$dis=$_POST["dis"];
$tot=$t1+$t2+$t3+$t4+$t5+$t6+$t7+$t8+$t9+$t10;
$Ndis=$tot*$dis/100;
$Ntot=$tot-$Ndis;

echo"<div class='pricing-area'>";
	echo"<div class='container'>";
		echo"<div class='row'>";
			echo"<div class='col-mod-4'>";
				echo"<div class='single-price'>";
					echo"<div class='deal-top'>";
						echo"<h2>Item list</h2>";
					echo"</div>";
					echo"<div class='deal-bottom'>";
						echo"<table>";
						  
	                       echo"<tr><td>1.<input type='text' name='I1' value='$I1'></td></tr>";
	                       echo"<tr><td>2.<input type='text' name='I2' value='$I2'></td></tr>";
	                       echo"<tr><td>3.<input type='text' name='I3' value='$I3'></td></tr>";
	                       echo"<tr><td>4.<input type='text' name='I4' value='$I4'></td></tr>";
	                       echo"<tr><td>5.<input type='text' name='I5' value='$I5'></td></tr>";
	                       echo"<tr><td>6.<input type='text' name='I6' value='$I6'></td></tr>";
	                       echo"<tr><td>7.<input type='text' name='I7' value='$I7'></td></tr>";
	                       echo"<tr><td>8.<input type='text' name='I8' value='$I8'></td></tr>";
	                       echo"<tr><td>9.<input type='text' name='I9' value='$I9'></td></tr>";
	                      echo" <tr><td>10.<input type='text' class='t' name='$I10' value='I10'></td></tr>";
	                      
                        echo"</table>";
					echo"</div>";
				echo"</div>";
			echo"</div>";
			echo"<div class='col-mod-4'>";
				echo"<div class='single-price'>";
					echo"<div class='deal-top'>";
						echo"<h2>Price list</h2>";
					echo"</div>";
					echo"<div class='deal-bottom'>";
						echo"<table>";
						  
	                       echo"<tr><td>1.<input type='text' name='P1' value='$P1'></td></tr>";
	                       echo"<tr><td>2.<input type='text' name='P2' value='$P2'></td></tr>";
	                       echo"<tr><td>3.<input type='text' name='P3' value='$P3'></td></tr>";
	                       echo"<tr><td>4.<input type='text' name='P4' value='$P4'></td></tr>";
	                       echo"<tr><td>5.<input type='text' name='P5' value='$P5'></td></tr>";
	                       echo"<tr><td>6.<input type='text' name='P6' value='$P6'></td></tr>";
	                       echo"<tr><td>7.<input type='text' name='P7' value='$P7'></td></tr>";
	                       echo"<tr><td>8.<input type='text' name='P8' value='$P8'></td></tr>";
	                       echo"<tr><td>9.<input type='text' name='P9' value='$P9'></td></tr>";
	                       echo"<tr><td>10.<input type='text' class='t' name='$P10' value='$P10'></td></tr>";
                          
                        echo"</table>";
					echo"</div>";
				echo"</div>";
			echo"</div>";
			echo"<div class='col-mod-4'>";
				echo"<div class='single-price'>";
					echo"<div class='deal-top'>";
						echo"<h2>Quantity</h2>";
					echo"</div>";
					echo"<div class='deal-bottom'>";
						echo"<table>";
						  
	                       echo"<tr><td>1.<input type='text' name='Q1' value='$Q1'></td></tr>";
	                       echo"<tr><td>2.<input type='text' name='Q2' value='$Q2'></td></tr>";
	                       echo"<tr><td>3.<input type='text' name='Q3' value='$Q3'></td></tr>";
	                       echo"<tr><td>4.<input type='text' name='Q4' value='$Q4'></td></tr>";
	                       echo"<tr><td>5.<input type='text' name='Q5' value='$Q5'></td></tr>";
	                       echo"<tr><td>6.<input type='text' name='Q6' value='$Q6'></td></tr>";
	                       echo"<tr><td>7.<input type='text' name='Q7' value='$Q7'></td></tr>";
	                       echo"<tr><td>8.<input type='text' name='Q8' value='$Q8'></td></tr>";
	                       echo"<tr><td>9.<input type='text' name='Q9' value='$Q9'></td></tr>";
	                       echo"<tr><td>10.<input type='text' class='t' name='Q10' value='$Q10'></td></tr>";
	                      
                        echo"</table>";
					echo"</div>";
				echo"</div>";
			echo"</div>";
		echo"</div>";
	echo"</div>";
echo"</div>";
echo"<div class='c'>";
echo"<input type='button' value='Bill Payment' onclick= location.href='Bill_Payment.html'>";
echo"</div>";
echo"<div class='c'>";
echo"<input type='text' name='dis' value='$dis' >";
echo"</div>";
echo"<div class='c'>";
echo"<input type='text' name='tot' value='$Ntot'>";
echo"</div>";

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