
<?php
// Check if session is not registered, redirect back to main page. 
// Put this code in first line of web page. 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "test";
	$tbl_name="user"; // Table name 

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);

    session_start();

	if(isset($_SESSION['myusername']) && isset($_SESSION['mypassword'])){

       
        
         echo "<h1> Sucessfully login </h1>";
        
        echo '<a href="logout.php"><button>logout</button></a>';

       echo "<br> <hr>";

		$sql = "SELECT * FROM students";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
		  echo "<table><tr><th>Name</th><th>Action</th></tr>";
		  // output data of each row
		  while($row = $result->fetch_assoc()) {
		  	$id =  $row["student_id"];
		    echo "<tr><td>".$row["name"]."</td><td>   <a href='enterResult.php?id=".$id."'> <button>Enter Result</button></a> <a href='viewResult.php?id=".$id."'><button>View Result</button></a>   </td></tr>";
		  }
		  echo "</table>";
		} else {
		  echo "0 results";
		}

         
	} 
	else {
		header("location:main_login.php");
	}



?>

