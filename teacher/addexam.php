<?php
session_start();
if(isset($_SESSION['userteach'])&&isset($_SESSION['passteach']))
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
    <form action="plogteach.php" method="POST"enctype="multipart/form-data">
      <input type="submit" value="تسجيل خروج " name="logout" 
      style="font-size:18px; background:#e64673;position:relative;width:100px;top:20px; 
      padding:10px; float:left; margin-left:-40px;">
    </form>
  </div>

  <div class="add_list">

    <ul>
       <a href="add.php" ><li> اضافة طالب </li></a>
      <a href="addexam.php" ><li class="active"> اضافة موعد امتحان  </li></a>
      <a href="addwork.php" ><li> أضافة واجب  </li></a>
      <a href="addcours.php" ><li> اضافة دورة او مسابقة   </li></a>
    
    </ul>

 </div> 
  
 
  <div  style=" background: linear-gradient(45deg, #e60073,#6699ff); margin-top: 0px;
      width: 420px; height: 224px;position: relative;top:160px; margin-left:auto;margin-right:auto; padding: 40px;">
    
    <form action="paddexam.php" method="POST" enctype="multipart/form-data">      
       <select name="namesubject"
       style="padding-bottom:10px;padding-top:10px; width:260px ;position: relative;top:45px; left:85px">
           <option name="namesubject" value="لغة عربية ">لغة عربية </option>
           <option name="namesubject" value="اسلامية">اسلامية  </option>
           <option name="namesubject" value="لغة انكليزية">لغة انكليزية </option>
           <option  name="namesubject" value="رياضيات">رياضيات </option>
           <option name="namesubject" value="حياء">احياء </option>
           <option name="namesubject" value="كمياء">كمياء </option>
           <option name="namesubject" value="فيزياء "> فيزياء  </option>
           <option name="namesubject" value="تأريخ"> تأريخ  </option>
           <option name="namesubject" value="جغرافية">  جغرافية  </option>
           <option name="namesubject" value="وطنية"> وطنية  </option>
           <option name="namesubject" value="لغة فرنسية">  لغة فرنسية  </option>
    
       <input type="date" name="date" max="now()"  required
       style="width:260px;padding-bottom:10px;padding-top:10px;position: relative;top: 67px; left:85px">
       

       <input type="submit" value="  login" name="save" 
           style="font-size:22px; color: black; opacity:0.8;position:relative;width:122px; top:135px;left:-42px;">
    
     </form>
  </div>


  <footer style="position:relative;margin-top:439px;height:100px; background:linear-gradient(155deg, #e60073,#6699ff);">
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