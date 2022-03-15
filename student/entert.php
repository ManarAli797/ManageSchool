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
    <a href="course.php" ><li> الدورات و المسابقات </li></a>
    <a href="entert.php" ><li  class="active"> منوعات </li></a>
  

  </ul>

 </div> 

 <div class="image">
  
  <div class="img1" style="position:relative;left:79px;">
     <img src="../img/download.png" width="250">
     <p>  " ما لا يدرك كله لا يترك جله  " </p>
 </div>

   <div class="img2"  style="position:relative;left:60px;">
     <img src="../img/download.png" width="250">
     <p> كل وقت ليس لك ولا عليك  " </br>" لا يعول عليه   </p>
 
   </div>  
    <div class="img3"  style="position:relative;left:60px;">
     <img src="../img/download.png" width="250">
     <p> " لا تستصعب شيء ابدا   "</p>
   </div>
    
    <div class="img4"  style="position:relative;left:60px;">
     <img src="../img/download.png" width="250" >
     <p> " لك شيء في هذا العالم فقم "</p>
     
  </div>
    
     
 </div>
  
  

  
  <div style="clear:both;height:98px;
  background:linear-gradient(155deg, #e60073,#6699ff);"> 
    
    <p style="text-align:center; padding-top:20px;"> &copy Manar Ali </p>
    
        <img src='../img/fac.png' width="35" style="position:relative;margin-left:390px;">
        <img src='../img/g.png' width="35">
        <img src='../img/inst.png'width="35">
        <img src='../img/wa.png'width="35">
      
  </div>


	

</body>

</html>
<?php
}
else
header('location:../indexhtml.html');
?>