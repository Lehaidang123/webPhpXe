<?php 
include("/entities/oderlist.php");
?>




<div class="grid_10">
	<div class="box round first grid">
		<h2>Danh Sách oder</h2>
		<div class="block">
			<?php

			?>
        

			<a href="index.php">Trang chủ</a>
            <a href="excelfile.php" >Xuất file excel</a>
			<table class="data display datatable" id="example">
				<thead>
					<tr>
						<th>idoder</th>
						<th>Ngày</th>
						<th>Địa chỉ</th>
						<th>Tên KH</th>
						<th>Sđt</th>
						<th>mail</th>

                        <th>ID</th>
                        <th>Số lượng</th>
                        <th>Giá</th>
                        <th>Mã sản phẩm</th>
                    
						<th>Action</th>
					</tr>
				</thead>

				<tbody>
				<?php
            	$p = oderlist::Get_all_oder();
                foreach($p as $item)
                {
                    
                    extract($item);
                    echo ' <tr class="odd gradeX">
                    <td>'.$Idoder.'</td>
                             <td>'.$Ngay.'</td>
                             <td>'.$Diachi.'</td>
                             <td>'.$TenKh.'</td>
                             <td>'.$Sdt.'</td>
                             <td>'.$Mail.'</td>
                             <td>'.$ID.'</td>
                             <td>'.$Soluong.'</td>
                             <td>'.$Gia.'</td>
                             <td>'.$Masp.'</td>
                             </tr>
                    ';
                   
                    
                 
                 
              
        
                }
                ?>
							
				</tbody>
			</table>


	
		</div>
	</div>
</div>

<style>

table, th, td {
  border: 1px solid;
}
th,td{

	text-align: center;
}
th{

	color:red;
	margin: 3px;
}
</style>