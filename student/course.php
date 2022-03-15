<?php
session_start();
if((isset($_SESSION['userstud'])&&isset($_SESSION['passstud']))||(isset($_SESSION['userteach'])&&isset($_SESSION['passteach'])) )
{

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> eschool</title>
	    <link rel="stylesheet" type="text/css" href="../informcss.css">

</head>
<body class="information">


  <div class="content">
  	<p>  مدرسة الكترونية  </p> 
     <span> eSchool </span> 
  </div>

  <div>
    <form action="plogstud.php" method="POST"enctype="multipart/form-data">
      <input type="submit" value="تسجيل خروج " name="logout" 
      style="font-size:18px; background:#e64673;position:relative;width:100px;top:20px; 
      padding:10px; float:left; margin-left:-40px;">
    </form>
  </div>


   <div class="add_list">

   <ul>
    <a href="sexam.php" ><li> الامتحانات</li></a>
    <a href="shomwork.php" ><li> الواجب البيتي  </li></a>
    <a href="course.php" ><li class="active"> الدورات و المسابقات </li></a>
    <a href="entert.php" ><li> منوعات </li></a>
   
  </ul>

 </div> 
 	
      <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "db_school";

            $conn = mysqli_connect($servername, $username, $password, $dbname);
            mysqli_set_charset($conn, "utf8");

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            $sql = "SELECT * FROM course";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                $datee = strtotime($row["dateadd"]);
                $type = $row["type"];
                if( $type == 1)
                { 
                  $type ="مسابقة ";
                } 
                else
                  $type="دورة ";
                  ?>  
              
              <div class="work" style="position:relative;top:150px;right:180px;">
                  <h2  id="id_head"><?php echo $type; ?> </h2>
                  <p id="id_date"><?php echo date('h:m:Y', $datee); ?> </p>
                  <p id="id_cont"><?php echo $row["content"];?></p>
                  <p style="font-size:18px;position:relative;top:86px;right:-254px;display:inline;">  
                  ----------------
                </p>
                  </div>
                  <?php
                }
            } 
            else {
            echo"<p style='color:#e64673;font-size:30px;text-align:center;margin-top:200px'>لا توجد مسابقات او دورات </p>";
            }

            $conn->close();
            ?>


  <footer style="position:relative;margin-top:909px;height:100px; background:linear-gradient(155deg, #e60073,#6699ff);">
    <p style="position:relative; text-align:center;padding-top:20px;"> &copy Manar Ali </p>
    
        <img src='../img/fac.png' width="35" style="position:relative;margin-left:400px;">
        <img src='../img/g.png' width="35">
        <img src='../img/inst.png'width="35">
        <img src='../img/wa.png'width="35">
      
   </div>
  
</footer>


</body>

</html>
<?php
}
else
header('location:../indexhtml.html');
?>