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

<header>
  <div class="content">
    <p>  مدرسة الكترونية  </p>
     <span> eSchool </span> 

  </div>
</header>

   <div>
    <form action="plogstud.php" method="POST"enctype="multipart/form-data">
      <input type="submit" value="تسجيل خروج " name="logout" 
      style="font-size:18px; background:#e64673;position:relative;width:100px;top:20px; 
      padding:10px; float:left; margin-left:-40px;">
    </form>
  </div>

   <div class="add_list">

  <ul>
    <a href="sexam.php" ><li class="active"> الامتحانات</li></a>
    <a href="shomwork.php" ><li> الواجب البيتي  </li></a>
    <a href="course.php" ><li> الدورات و المسابقات </li></a>
    <a href="entert.php" ><li> منوعات </li></a>
   
  </ul>

 </div> 
  <aside>
 <div class="tabl" style="right:190px;">
   <table>
    <caption>جدول  الامتحانات  </caption>
    <tr>
      
       
        <th> التأريخ  </th>
         <th> اسم المادة  </th>
          <th> تسلسل  </th>
    </tr>
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
            $sql = "SELECT * FROM exam";
            $result = $conn->query($sql);
            $i=1;
            if ($result->num_rows > 0) 
            {
                // output data of each row
                while ($row = $result->fetch_assoc()) 

              {
                 $field1name = $i;
                 $field2name = $row["name"];
                 $field3name = $row["date"];
                
 
                echo '<tr> 
                  <td>'. $field3name .'</td> 
                  <td>'. $field2name .'</td> 
                  <td>'. $field1name .'</td> 

               </tr>';
               $i=$i+1;
             }

            } 
    
          else {
                echo "<p style='color:#e64673;font-size:30px; text-align:center;margin-top: 200px;'>ا يوجد امتحان </p>";
               }

            $conn->close();

            ?>

        </table>
 </div>
</aside>


 
    <footer style="position:relative;margin-top:939px;height:100px; background:linear-gradient(155deg, #e60073,#6699ff);">
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