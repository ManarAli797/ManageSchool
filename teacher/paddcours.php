<?php
session_start();

if($_SERVER['REQUEST_METHOD']=="POST"){
  
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_school";


$conn =mysqli_connect($servername, $username, $password, $dbname);
mysqli_set_charset($conn, "utf8");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "INSERT INTO course (type,content) 
VALUES ('".$_POST["rad"]."','".$_POST["content"]."')";



if($conn->query($sql))
  echo "تم الاضافة بنجاح  <a href='addcours.php'> اضف مرة اخرى </a>";

    
else
echo" خطأ  <a href='addcours.php'> اضف مرة اخرى   </a>";

$conn->close();
}
else
echo"Error: You can't Brwose This Page Directly ";

?>
