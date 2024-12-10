<?php 


	include_once('config.php');

	$user_id = $_SESSION['id'];
    $product_id = $_SESSION['product_id'];
	$nr_products = $_POST['nr_items'];
	$size = $_POST['size'];

	$sql = "INSERT INTO buy(user_id, prodcut_id, nr_items, size) VALUES (:user_id, :product_id, :nr_size, :size)";

	$insertBooking = $conn->prepare($sql);

	$insertBooking->bindParam(":user_id", $user_id);
	$insertBooking->bindParam(":product_id", $product_id);
	$insertBooking->bindParam(":nr_items", $nr_items);
	$insertBooking->bindParam(":size", $size);


	$insertBooking->execute();

	header("Location: home.php");
 ?>