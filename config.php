<?php

	// $servername = "mysql57-bf63.euw2.cloud.ametnes.com      ";
        // $username = "zVSJVoyhml";
        // $password = "ZdZnjE3KAwsM33GsrHV1";
        // $database = "db";

        $servername = "localhost";
        $username = "root";
        $password = "rootroot";
        $database = "test";

// Create connection
        $conn = mysqli_connect($servername, $username, $password, $database);

	if(!$conn){
		die("Unable to connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>
