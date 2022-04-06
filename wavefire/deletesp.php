

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dcxemay";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$ID= $_GET["delete"];
  // sql to delete a record
  $sql = "DELETE FROM sanpham WHERE Masp=$ID";

  // use exec() because no results are returned
  $conn->exec($sql);
  echo "Record deleted successfully";
  header("Location:listspAdmin.php");
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>


