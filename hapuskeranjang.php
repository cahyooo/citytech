<?php 
	session_start();
	$id_produk = $_GET["id"];
	unset($_SESSION['keranjang'][$id_produk]);

	echo "<script> alert(' Produk dihapus Dari Keranjang ');</script>";
	echo "<script>location='index.php';</script>";
 ?>
 
 
