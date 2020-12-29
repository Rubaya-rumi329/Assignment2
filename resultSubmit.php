<?php
 session_start();

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "test";
	$tbl_name="user"; // Table name 

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
		echo "Database Connection failed ";
        echo '<a href="main_login.php"><button>back</button></a>';
	}

	if($_SESSION['teacher_id'] == 1){
		$t1_c1_ct = $_POST['t1_c1_ct'];
		$t1_c1_final = $_POST['t1_c1_final'];
		$t1_c2_ct = $_POST['t1_c2_ct'];
		$t1_c2_final = $_POST['t1_c2_final'];
		$t1_c3_ct = $_POST['t1_c3_ct'];
		$t1_c3_final = $_POST['t1_c3_final'];

		$student_id = $_POST['student_id'];

		

		 $sql = "UPDATE students SET 
		t1_c1_ct = ".$t1_c1_ct.",
		t1_c1_final = ".$t1_c1_final.",
		t1_c2_ct = ".$t1_c2_ct.",
		t1_c2_final = ".$t1_c2_final.",
		t1_c3_ct = ".$t1_c3_ct.",
		t1_c3_final = ".$t1_c3_final."
		 WHERE student_id = ".$student_id;

		 if ($conn->query($sql) === TRUE) {
		  echo "Record updated successfully";
		} else {
		  echo "Error updating record: " . $conn->error;
		}
	}

	if($_SESSION['teacher_id'] == 2){
		$t2_c1_ct = $_POST['t2_c1_ct'];
		$t2_c1_final = $_POST['t2_c1_final'];
		$t2_c2_ct = $_POST['t2_c2_ct'];
		$t2_c2_final = $_POST['t2_c2_final'];
		$t2_c3_ct = $_POST['t2_c3_ct'];
		$t2_c3_final = $_POST['t2_c3_final'];

		$student_id = $_POST['student_id'];

		

		$sql = "UPDATE students SET 
		t2_c1_ct = ".$t2_c1_ct.",
		t2_c1_final = ".$t2_c1_final.",
		t2_c2_ct = ".$t2_c2_ct.",
		t2_c2_final = ".$t2_c2_final.",
		t2_c3_ct = ".$t2_c3_ct.",
		t2_c3_final = ".$t2_c3_final."
		 WHERE student_id = ".$student_id;

		 if ($conn->query($sql) === TRUE) {
		  echo "Record updated successfully";
		} else {
		  echo "Error updating record: " . $conn->error;
		}
	}


?>