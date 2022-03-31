<?php  
   
    // Create connection
    


    class sp{
        
        public $tensp;
        
public $gia;
public $img;
public $mota;
        public function __construct($ten,$gia,$img,$mota){
            $this->tensp = $ten;
            $this->gia = $gia;
            $this->img=$img;
            $this->mota=$mota;
           
        }

        public function save(){
          
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
    
    $sql = "INSERT INTO sanpham ( Tensp,Gia,Img,Mota)
    VALUES ('$this->tensp','$this->gia','$this->img','$this->mota')";
    
    if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
    mysqli_close($conn);
        }

      
    }
?>