<?php
class Db {
    
    protected static $connection;

    public function connect($queryString,$queryString1){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "dcxemay";
        
        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        // Check connection
        if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
        }
        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
          } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
          }
          
          mysqli_close($conn);
              
    }

  
    
}
?>