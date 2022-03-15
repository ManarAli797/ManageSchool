<?php
session_start();

if($_SERVER['REQUEST_METHOD']=="POST"){

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_school";


$conn = mysqli_connect($servername, $username, $password, $dbname);
mysqli_set_charset($conn, "utf8");

if (! $conn) {
    die("Connection failed: " . $conn->connect_error);
}

/*$sql = "CREATE TABLE loginstud(
    id INT(6) AUTO_INCREMENT PRIMARY KEY, 
    namestud  text COLLATE utf8_unicode_ci ,
    passstud  text COLLATE utf8_unicode_ci ,
    dateadd DATETIME DEFAULT CURRENT_TIMESTAMP,
    mdate DATETIME ON UPDATE CURRENT_TIMESTAMP)";



if ($conn->query($sql) === TRUE) {
    echo "Table loginstud created successfully";
} 

else   
echo "Error creating table: " . $conn->error;
*/

if(isset($_POST['save'])){
    $username=$_POST['username'];
    $password=$_POST['password'];

    $sql="SELECT * FROM loginstud where namestud ='$username' AND passstud ='$password'";
    $run_query = mysqli_query($conn, $sql);
    
    if(mysqli_num_rows($run_query) == 1)
    {
        $_SESSION['userstud']=$username;
        $_SESSION['passstud']=$password;
        header('location:sinform.php');
    }
        
    

    if (mysqli_num_rows($run_query) == 0) {
        header('location:logstud.html');
    }


}


else
echo "error" ." ".$conn->error;

if(isset($_POST['logout'])) {
    session_unset();
    header('location:../index.html');

}

mysqli_close($conn);
}
else
echo" Error: You can't Brwose This Page Directly ";


?>