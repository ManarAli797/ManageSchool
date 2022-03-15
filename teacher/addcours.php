<?php
session_start();

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
      <a href="addexam.php" ><li> اضافة موعد امتحان  </li></a>
      <a href="addwork.php" ><li> أضافة واجب  </li></a>
      <a href="addcours.php" ><li class="active"> اضافة دورة او مسابقة   </li></a>
    
    </ul>

 </div> 
  
  <div  style=" background: linear-gradient(45deg, #e60073,#6699ff); margin-top: 0px;
    width: 500px; height: 324px;position: relative;top:160px; margin-left:auto;margin-right:auto; padding: 40px;">
    
    <form action="paddcours.php" method="POST" enctype="multipart/form-data">

     <p style="font-size:22px; display:inline; margin-left:20px;"> اختر واحد  </p>  
       <input type="radio" name="rad" value="1" required>
        <p style="font-size:22px; display:inline;margin-left:30px;">مسابقة </p>
        
       <input type="radio" name="rad" value="2" required> 
       <p style="font-size:22px; display:inline;margin-left:120px;">دورة  </p>           
       

        <textarea rows="13" cols="52" name="content"   
       style="padding-bottom:10px;padding-top:10px;position: relative; top: 41px; left:60px">
       ادخل النص 
       </textarea>
      
       <input type="submit" value="  login" name="save" 
           style="font-size:22px; color: black; opacity:0.8;position:relative;width:122px; top:55px;left:325px;">
    
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