<html>
<head>
	<title>Transaction type</title>
  <!--JavaScript-->
  <script src="js/RightClickDisable.js"></script>
</head>
<body>
  <h1><center>Transaction type</center></h1>
   <?php
    $servername = "localhost:3308"; //3308 for WAMPSERVER
    $username = "root";
    $password = "";
    $dbname = "s&i_software_solutions";

    $Item_code=$_POST["txtIC"];
    $Transaction_type=$_POST["txtTt"];

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
    $sql = 'UPDATE transpf SET Transaction_type="'.$Transaction_type.'" WHERE Item_code="'.$Item_code.'"';
    $result = mysqli_query($conn, $sql);
    echo "one record updated successfully <br>";
  	?>
    <br><a href="Transaction_type.html">Back</a>

</body>
</html>
