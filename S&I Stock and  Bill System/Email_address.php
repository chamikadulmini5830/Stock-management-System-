<html>
<head>
	<title>E-mail address</title>
  <!--JavaScript-->
  <script src="js/RightClickDisable.js"></script>
</head>
<body>
  <h1><center>Item type</center></h1>
   <?php
    $servername = "localhost:3308"; //3308 for WAMPSERVER
    $username = "root";
    $password = "";
    $dbname = "s&i_software_solutions";

    $Supplier_number=$_POST["txtSN"];
    $Email_address=$_POST["txtEa"];

    // Create connection
    $conn = @mysqli_connect($servername, $username, $password,$dbname); //@mysqli for WAMPSERVER

    // Check connection
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }else{
        echo "Connected successfully";
    }
    echo "<br>";
    //sql update command
    $sql = 'UPDATE supplier SET Email_address="'.$Email_address.'" WHERE Supplier_number="'.$Supplier_number.'"';
    $result = mysqli_query($conn, $sql);
    echo "one record updated successfully <br>";
  	?>
    <br><a href="Email_address.html">Back</a>

</body>
</html>
