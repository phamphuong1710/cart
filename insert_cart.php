<?php
	session_start();
	require_once "list_product.php";
	$id_product=$_GET['id'];
	$new_product=[];
	foreach ($list_product as $key => $value) {
	 	$new_product[$value['id']]=$value;
	} 
	echo $id_product;
	echo "<pre>";
	print_r($new_product);
	if(!isset($_SESSION['cart']) || $_SESSION['cart'] == null){
		$new_product[$id_product]['quantity']=1;
		$_SESSION['cart'][$id_product]=$new_product[$id_product];
	}
	else{
		if (array_key_exists($id_product,$_SESSION['cart'])) {
			$_SESSION['cart'][$id_product]['quantity'] +=1;
		}
		else{
			$_SESSION['cart'][$id_product]=$new_product[$id_product];
			$_SESSION['cart'][$id_product]['quantity'] = 1;
		}
	}
	echo "<pre>";
	print_r($_SESSION['cart']);
	header("location:info_product.php");
 ?>