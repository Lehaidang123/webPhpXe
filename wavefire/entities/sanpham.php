<?php  
   
    // Create connection
    
include_once("/model/pdo.php");
class Sanpham{
  public $Masp;
  public $Tensp1;
//   public Gia;
  public $mota;
  //public $soluong;
//   public img;
//   public MaDm;
  public function __construct($pro_name,$Mota){
    $this->Tensp1 = $pro_name;
    // $this->Gia = $price;
    $this->mota = $Mota;
    // $this-> soluong=$SL;
    // $this->img=$IMG;
    // $this -> MaDm= $madm;
   
}

public static function SelectId($id)
{
$sql = "SELECT `Masp`, `Tensp`, `Soluong`, `Mota`, `Img`, `Gia`, `MaDanhmuc` FROM `sanpham` WHERE Masp=$id";
$list=pdo_query($sql);
return $list;
}

public function InsertSP()
{

  $sql = "INSERT INTO sanpham ( Tensp,Mota)
  VALUES ('$this->Tensp1','$this->mota')";
  $result = pdo_execute($sql);
  return $result;
}

  public static function getall()
  {
    $sql = "SELECT Masp, Tensp,Gia ,img FROM sanpham";

    $list=pdo_query($sql);
    return $list;

  }




}
    
        
       

       
         
         
       
  
?>