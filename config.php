<?php
//replace below params with your db params 
        $servername = "sql12.freesqldatabase.com";
        $username = "sql12387057";
        $password = "brG6IXEBpN";
        $database = "sql12387057";

// Create connection
        $conn = mysqli_connect($servername, $username, $password, $database);
	if(!$conn){
		die("Unable to connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>
