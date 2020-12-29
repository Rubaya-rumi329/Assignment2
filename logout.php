<?php

	session_start();
	session_destroy();
    
    echo "You have logged out. Please login again. </br>";
    echo '<a href="main_login.php"><button>Login Again</button></a>';
 ?>
