<html>
<head>
	<title>Add Data</title>
  <!--JavaScript-->
  <script src="js/RightClickDisable.js"></script>
</head>
<body>
	<h1><center>Add Data</center></h1>
   <?php
    $servername = "localhost:3308"; //3308 for WAMPSERVER
    $username = "root";
    $password = "";
    $dbname = "s&i_software_solutions";

    $Item_code=$_POST["Item_code"];
    $Item_name=$_POST["Item_name"];
    $Transaction_type=$_POST["Transaction_type"];
    $Transaction_quantity=$_POST["Transaction_quantity"];
    $Transaction_amount=$_POST["Transaction_amount"];
    $New_stock_balance=$_POST["New_stock_balance"];

    // Create connection
    $conn = @mysqli_connect($servername, $username, $password,$dbname); //@mysqli for WAMPSERVER

    // Check connection
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }else{
        echo "Connected successfully";
    }
    echo "<br>";
    // sql insert command
    $sql = 'INSERT INTO transpf (Item_code,Item_name,Transaction_type,Transaction_quantity,Transaction_amount,New_stock_balance)
    VALUES ("'.$Item_code.'", "'.$Item_name.'","'.$Transaction_type.'","'.$Transaction_quantity.'","'.$Transaction_amount.'","'.$New_stock_balance.'")';

    if (mysqli_query($conn, $sql)) {
       echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
	?>
    <br><a href="stock_main_window.html">Back to Store</a>

</body>
</html>
