<div class="grid_10">
	<div class="box round first grid">
		<h2>Danh Sách Nhân Viên</h2>
		<div class="block">
			
            <a href="nv_add.php">Thêm Nhân Viên</a>

			<a href="index.php">Trang chủ</a>
			<table class="data display datatable" id="example">
				<thead>
					<tr>
						<th>Mã sản phẩm</th>
						<th>Tên sản phẩm</th>
						<th>giá</th>
						<th>Mã danh mục</th>
						<th>IMG</th>
						
						<th>Action</th>
					</tr>
				</thead>

				<tbody>
				<?php
				
				include_once("/entities/sanpham.php"); 


				$pords =Sanpham::getallSp();
				$result = $pords;
				foreach($result as $item)
				{

					extract($item);

					echo'
					<tr class="odd gradeX">
				   <td>'.$Masp.'</td>
				   <td>'.$Tensp.'</td>
				 
				   <td>'.$Gia.'</td>
				   <td>'.$img.'</td>
				   <td>'.$Mota.'</td>
				   <td>
				   <form action="deletesp.php" method="get">
				   
				   <button name="delete" value="'.$Masp.'" type="submit">Xóa</button>
					 </form>
				   </td>
				 
				 
				  
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