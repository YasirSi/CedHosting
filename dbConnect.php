<?php 
            
            class dbConnect
            {
                public $servername;
                public $username;
                public $password;
                public $dbname;
        
                public $connect;
        
                function __construct()
                {
                    $this->connect = new mysqli('localhost', 'root', '', 'CedHosting');
                    if($this->connect->connect_error)
                    {
                        die("Connection failed: " . $this->$connect->connect_error);
                    }
                }
            }




	// $servername = "localhost"; 
	// $username = "root"; 
	// $password = ""; 

	// $database = "CedHosting"; 

	// // Create a connection 
	// $conn = mysqli_connect($servername, $username, $password, $database); 


	// if($conn) { 
	// 	echo "success"; 
	// } 
	// else { 
	// 	die("Error". mysqli_connect_error()); 
    // }
?> 
