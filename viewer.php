<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
	*{
		    background-color: gainsboro;
		    margin: 0;
		    padding:0;
	}
		h1{
			width: 100%;
			text-align: center;
			color:#ba001e ;
			margin-top: 30px;
		}
		.adv{
			width: 100%;
			height: 300px;
		}
		.adv img{
			width: 100%;
			height: 100%;
		}
		.table{
			width: 95%;
			margin-left: 20px;
			margin-top: 20px;
		}
		.table td{
			text-align: center;
		}
		.table img{
			width: 150px;
			height: 150px;
		}
		.table a{
			text-decoration: none;
		}
	</style>
</head>
<body>
	
	<!-- <div class="adv">
		<a href="#"><img src="image/canh-dong-hoa-11.jpg" alt=""></a>
	</div> -->
	<h1>THÔNG TIN SẢN PHẨM TRONG GIỎ</h1>
	<?php
		echo "<form action= 'upload.php' method = 'POST'>";
			echo "<table class = 'table' border ='1'>";
				echo "<tr>";
					echo "<th>Hình ảnh</th>";
					echo "<th>Tên Sản phẩm</th>";
					echo "<th>Giá tiền</th>";
					echo "<th>Số lượng</th>";
					echo "<th>Thành tiền</th>";
					echo "<th>Xóa</th>";
				
					foreach ($_SESSION['cart'] as $key => $value) {
						echo "<tr>";
						echo "<td><img src=".$value['image']." ></td>";
						echo "<td>".$value['name']."</td>";
						echo "<td>".$value['price']."</td>";
						echo "<td><input type='text' name = 'qty[$key]' value =".$value['quantity']." ></td>";
						echo "<td>".number_format($value['quantity']*$value['price'])."</td>";
						echo "<td><a href="."delete.php?id=".$value['id'].">Xóa</a></td>";
					}
					echo "<tr><td colspan = '6'><input type='submit' name='submit' value='upload'></td></tr>";
			echo"</table>"; 
		echo "</form>";
 ?>
</body>
</html>