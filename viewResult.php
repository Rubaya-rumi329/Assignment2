<?php
session_start();

		$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "test";
	$tbl_name="user"; // Table name 

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
		$sql = "SELECT * FROM students WHERE student_id = ".$_GET['id'];
		// echo $sql;
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
  	$t1_c1_ct = $_POST['t1_c1_ct'];
		$t1_c1_final = $_POST['t1_c1_final'];
		$t1_c2_ct = $_POST['t1_c2_ct'];
		$t1_c2_final = $_POST['t1_c2_final'];
		$t1_c3_ct = $_POST['t1_c3_ct'];
		$t1_c3_final = $_POST['t1_c3_final'];
		$student_id = $_POST['student_id'];

    echo "id: " . $row["student_id"]. " - Name: " . $row["name"]. " " . $row["name"]. "<br>";
  }
} else {
  echo "0 results";
}



	
 ?>