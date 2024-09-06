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
    $Item_price=$_POST["Item_price"];
    $Available_quantity=$_POST["Available_quantity"];
    $Stock_balance=$_POST["Stock_balance"];
    $Stock_level=$_POST["Stock_level"];
    $Last_date_of_transaction=$_POST["Last_date_of_transaction"];

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
    $sql = 'INSERT INTO stockmf (Item_code,Item_name,Item_price,Available_quantity,Stock_balance,Stock_level,Last_date_of_transaction)
    VALUES ("'.$Item_code.'", "'.$Item_name.'","'.$Item_price.'","'.$Available_quantity.'","'.$Stock_balance.'","'.$Stock_level.'","'.$Last_date_of_transaction.'")';

    if (mysqli_query($conn, $sql)) {
       echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
	?>
    <br><a href="stock_main_window.html">Back to Store</a>

</body>
</html>
