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

    $Supplier_number=$_POST["Supplier_number"];
    $Supplier_name=$_POST["Supplier_name"];
    $Item_type=$_POST["Item_type"];
    $Contact_no=$_POST["Contact_no"];
    $Email_address=$_POST["Email_address"];
    $Registration_date=$_POST["Registration_date"];

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
    $sql = 'INSERT INTO supplier (Supplier_number,Supplier_name,Item_type,Contact_no,Email_address,Registration_date)
    VALUES ("'.$Supplier_number.'", "'.$Supplier_name.'","'.$Item_type.'","'.$Contact_no.'","'.$Email_address.'","'.$Registration_date.'")';

    if (mysqli_query($conn, $sql)) {
       echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
	?>
    <br><a href="stock_main_window.html">Back to Store</a>

</body>
</html>
