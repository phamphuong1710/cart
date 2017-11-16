<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cây cảnh</title>
	<style>
		*{
			margin: 0;
			padding: 0;
		}
		h1{
			color: #ba001e;
			width: 100%;
			text-align: center;
			margin-top: 40px;
    		margin-bottom: 15px;
		}
		h2{
			width: 100%;
			text-align: center;
			color: #8c0057;
		}
		h2>a{
			text-decoration: none;
			color: #8c0057;
		}
		h2>a:hover{
			color: #000;
		}
		.info{
			width: 30%;
			float: left;
			text-align: center;
			margin-top: 50px;
    		margin-bottom: 20px;

		}
		.info img{
			width: 280px;
			height: 250px;
		}
		.info h3{
			color:#ba001e ;
			padding: 5px;
		}
		.price{
			padding:5px;
			font-size: 18px;
		}
		.info a{
			text-decoration: none;
			color: #737373;
		}
		.button{
			width: 40%;
			height: 30px;
			padding-top: 10px;
			margin-left: 120px;
			background-color: #85c7c0;
			border-radius: 20px;
		}
		.info a:hover{
			color: #8c0057;
		}
	</style>
</head>
<body>
	<h1>CÁC LOẠI CÂY TRANG TRÍ</h1>
	<?php
		require_once "list_product.php";
		$sum=0;
		if(isset($_SESSION['cart']) && $_SESSION['cart'] != null){
			foreach ($_SESSION['cart'] as $key => $value) {
				$sum=$sum+$value['quantity'];
			}
		}
		echo "<h2>Bạn có <a href="."viewer.php".">".$sum." </a> sản phẩm trong giỏ</h2>";
		for ($i=0; $i <count($list_product) ; $i++) { 
			echo "<div class='info'>";
				echo "<a href="."><img src=".$list_product[$i]['image']."></a>";
				echo "<h3>".$list_product[$i]['name']."</h3>";
				echo "<p class= 'price'>".$list_product[$i]['price']."<sup>đ</sub></p>";
				echo "<a href="."insert_cart.php?id=".$list_product[$i]['id']."><p class = 'button'>MUA SẢN PHẨM</p></a>";
			echo "</div>";
		}
	 ?>
</body>
</html>