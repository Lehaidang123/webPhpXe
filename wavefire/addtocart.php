
<?php
require ("/entities/cart.php");
include("/entities/sanpham.php");
 $data = array();
$errors = array();

$is_update_action = false;

  $is_update_action = true;

  
if (!empty($_GET['id'])){
$po = Sanpham::SelectId($_GET['id']);

foreach($po as $item)
{

    extract($item);

    $data['pro_id'] = $Masp;

$data['pro_name'] = $Tensp;
$data['IMG'] = $Img;
$data['pro_gia'] = $Gia;

$data['Soluong']=  1;
if (empty($errors)){
  updateStudent($data['pro_id'], $data['pro_name'], $data['pro_gia'],$data['IMG']);
  header("Location:viewCart.php");
}

}


}

?>
