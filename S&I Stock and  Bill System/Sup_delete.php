<html>
<head>
	<title>Delete Data</title>
  <!--JavaScript-->
  <script src="js/RightClickDisable.js"></script>
</head>
<body>
	<h1><center>Delete Data</center></h1>
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
        echo "Connected successfully";
    }
    echo "<br>";
     //sql select command
    $sql = 'DELETE FROM supplier WHERE Supplier_number="'.$Supplier_number.'"';
    $result = mysqli_query($conn, $sql);
    echo "one record deleted successfully";
   
  

  ?>
    <br><a href="stock_main_window.html">Back to Store</a>

</body>
</html>