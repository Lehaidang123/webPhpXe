<?php include_once("/model/pdo.php"); 

class danhmuc{



    public static function getAlldm()
    {
        $sql = "select * from danhmuc";
        $result = pdo_query($sql);
        return $result;
    }
}








?>
