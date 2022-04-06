
<?php
    include("/entities/sanpham.php");
?>
<?php
if (isset($_GET['Masp']) && $_GET['Masp'] != NULL) {
    $id = $_GET['Masp'];
} else {
    echo "<script>window.location = 'listspAdmin.php'</script>";
}

$sanpham = new Sanpham();
	if ($_SERVER['REQUEST_METHOD'] === 'POST'){
		$Tensp =  $_POST['tensp'];
        $gia = $_POST['gia'];
        $img = $_POST['img'];
        $mota = $_POST['mota'];
        $madm = $_POST['madm'];
        $update_sp = $sanpham->update_sp($id,$Tensp,$gia,$img,$mota,$madm);
        header("Location:listspAdmin.php");
	}

?>
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Update sản phẩm </h2>
               <div class="block copyblock"> 
               <?php
            if (isset($update_sp)) {
                echo $update_sp;
            }
            ?>
           <?php 
              $pords =Sanpham::SelectId($id);
              
              $result = $pords;
              foreach($result as $item)
              {
                  extract($item);
                  echo ' <form action="" method="POST">
                  <table class="form">
                      <tr>
                          <td>
                              <input type="text" name="MaDM" value="'.$Masp.'" class="medium" disabled />
                          </td>
                          <td>
                              <input type="text" name="tensp" value="'.$Tensp.'" class="medium" />
                          </td>
                          <td>
                          <input type="text" name="gia" value="'.$Gia.'" class="medium" />
                      </td>
                      <td>
                      <input type="text" name="img" value="'.$Img.'" class="medium" />
                  </td>
                  <td>
                  <input type="text" name="mota" value="'.$Mota.'" class="medium" />
              </td>
              <td>
              <input type="text" name="madm" value="'.$MaDanhmuc.'" class="medium" />
          </td>
                      </tr>
                      <tr>
                          <td>
                              <input type="submit" name="submit" Value="Save" />
                          </td>
                      </tr>
                  </table>
              </form>
     ' ;
              }
           
           
           ?>
                   
            
            
            <a href="listspAdmin.php">Sản phẩm</a>
                </div>
            </div>
        </div>