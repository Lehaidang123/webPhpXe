<?php include_once("/model/pdo.php"); 
 class oderlist
 {


public static function Get_all_oder(){

    $sql= "SELECT * from oder,oderdetail";
    $result = pdo_query($sql);
    return $result;
}

 }