<?php  
   
    // Create connection
    
include_once("/model/pdo.php");
class Sanpham{
 






public static function update_sp($id,$tensp,$gia,$img,$mota,$madm)
{

  $sql =  "UPDATE sanpham SET Tensp = '$tensp' , Gia='$gia', img='$img',Mota = '$mota' ,MaDanhmuc='$madm' WHERE Masp = '$id'";
    $result = pdo_execute($sql);
    return $result;
}




public static function selectIDdm($id)
{

  $sql = "SELECT `Masp`, `Tensp`, `Soluong`, `Mota`, `img`, `Gia`, `MaDanhmuc` FROM `sanpham` WHERE MaDanhmuc=$id";
$list=pdo_query($sql);
return $list;
}
public static function SelectId($id)
{
$sql = "SELECT `Masp`, `Tensp`, `Soluong`, `Mota`, `Img`, `Gia`, `MaDanhmuc` FROM `sanpham` WHERE Masp=$id";
$list=pdo_query($sql);
return $list;
}

public static function Delete($id)
{
$sql = "DELETE  FROM sanpham WHERE Masp = '$id' ";
$result= pdo_execute($sql);
return $result;

}

  public static function getall($current_page)
  {
    $item_page=2;
   
    $ofset= ($current_page-1)* $item_page;
    $sql = "SELECT Masp, Tensp,Gia ,img FROM sanpham LIMIT $item_page OFFSET $ofset";
    $total = "SELECT Masp, Tensp,Gia ,img FROM sanpham";
    $t= pdo_query( $total);
    
    $list=pdo_query($sql);
    return $list;

  }

  
  public static function getallSp()
  {
    $sql = "SELECT Masp, Tensp,Gia ,img ,Mota ,MaDanhmuc FROM sanpham";
    
  
    
    $list=pdo_query($sql);
    return $list;

  }




}
    
        
       

       
         
         
       
  
?>