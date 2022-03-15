<?php
session_start();

if($_SERVER['REQUEST_METHOD']=="POST"){

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_school";


$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_set_charset($conn, "utf8");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

/*$sql = "CREATE TABLE loginteach(
    id INT(6) AUTO_INCREMENT PRIMARY KEY, 
    nameteach  text COLLATE utf8_unicode_ci ,
    passteach  text COLLATE utf8_unicode_ci ,
    dateadd DATETIME DEFAULT CURRENT_TIMESTAMP,
    mdate DATETIME ON UPDATE CURRENT_TIMESTAMP)";


if ($conn->query($sql) === TRUE) {
    echo "Table loginteach created successfully";
} 

else   
echo "Error creating table: " . $conn->error;
*/

if(isset($_POST['save'])){
    $username=$_POST['username'];
    $password=$_POST['password'];

    $sql="SELECT * FROM loginteach where nameteach ='$username' AND passteach ='$password'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        $_SESSION['userteach']=$username;
        $_SESSION['passteach']=$password;
        header('location:tinform.php');
    }
        
    

    if ($result->num_rows == 0) {
        header('location:logteach.html');
    }


}


else
echo "error" ." ".$conn->error;

if(isset($_POST['logout'])) {
    session_unset();
    header('location:../index.html');

}
echo "error" ." ".$conn->error;


$conn->close();
}
else
echo" Error: You can't Brwose This Page Directly ";

?>