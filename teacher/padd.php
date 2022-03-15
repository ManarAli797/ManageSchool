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
if($_POST["password1"] == $_POST["password2"])
{
$sql = "INSERT INTO loginstud (namestud,passstud) 
VALUES ('".$_POST["name"]."','".$_POST["password1"]."')";


if ( $conn->query($sql))
    echo "تم الاضافة بنجاح <a href='add.php'> اضف مرة اخرى </a>";
}     
else
echo" خطأ  <a href='add.php'> اضف مرة اخرى   </a>";


$conn->close();
}
else
echo"Error: You can't Brwose This Page Directly ";

?>
