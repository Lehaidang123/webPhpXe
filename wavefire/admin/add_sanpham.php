<!DOCTYPE html>
<!--
Template Name: Wavefire
Author: <a href="https://www.os-templates.com/">OS Templates</a>
Author URI: https://www.os-templates.com/
Copyright: OS-Templates.com
Licence: Free to use under our free template licence terms
Licence URI: https://www.os-templates.com/template-terms
-->
<html lang="">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
<head>
<title>Wavefire | Pages | Gallery</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../layout/styles/admincss.css" rel="stylesheet" type="text/css" media="all">
<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
</head>
<body >


<div class="login">
  <h2 class="active">Thêm sản phẩm </h2>

  <form name="f1" method="post">
   
    

    <input type="text" class="text" name="Tensp">
     <span>Tên sản phẩm</span>

    <br>
    
    <br>

    <input type="password" class="text" name="Gia">
    <span>Giá </span>
    <br>

    <input type="text" class="text" name="mota">
     <span>Mô tả</span>

    <br>
    
    <br>

    <input type="password" class="text" name="soluong">
    <span>Số lượng </span>
    <br>

    <input type="file" class="text" name="img">
     <span></span>

    <br>
    
    <br>

    <input type="text" class="text" name="Madm">
    <span>Mã Danh mục </span>
    <br>

  
    <button class="signin" type="submit" name="btsubmit">   
      Thêm
    </button>


    <hr>

    <a href="#">Forgot Password?</a>
  </form>
 
  





</div>

<?php  include_once("/entities/sanpham.php"); ?>
<?php
   

    if(isset($_POST["btsubmit"])){

        $productName = $_POST["Tensp"];
        $Gia = $_POST["Gia"];
        $mota = $_POST["mota"];
        $soluong = $_POST["soluong"];
        $img = $_POST["img"];
        $madm = $_POST["Madm"];
        $sanpham = new Sanpham( $productName,$Gia ,$mota, $soluong, $img,$madm );

        $result = $sanpham ->InsertSP();
        if(!$result)
        {
           echo " thành công";
        }
        else {
           
        }
    }
?>
</body>
</html>