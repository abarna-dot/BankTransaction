<!DOCTYPE html>
<html>

<head>
	<title></title>

	<?php include('style.php'); ?>
</head>

<body>
	<h1></h1>
	<div id="navbar">
		<a class="hi" href="index.php">Home</a>
		<a class="hello" href="details.php">View all Customers</a>
		<a class="bye" href="history.php">Transaction History</a>
	</div>
	<?php include 'connection.php' ?>

	<?php
	$sender_name = $_GET["sender_name"];
	$receiver_name = $_GET["receiver_name"];
	$amount = $_GET["amount"];
	?>

	<?php $sql5 = "SELECT Name, Balance FROM Bank WHERE Name='$sender_name'";
	$result5 = mysqli_query($conn, $sql5);
	$row = mysqli_fetch_assoc($result5);
	$money = $row['Balance'];

	?>
	<?php $sql3 = "SELECT Name,Id  FROM Bank WHERE Name='$receiver_name' ";
	$result3 = mysqli_query($conn, $sql3);

	if (mysqli_fetch_assoc($result3) < 1) {
		include 'user.php';
	} elseif ($money < $amount) {
		include 'user3.php';
	} else {
		$sql4 = "UPDATE bank SET Balance=Balance-$amount WHERE Name='$sender_name'";
		$sql2 = "UPDATE bank SET Balance=Balance+$amount WHERE Name='$receiver_name' ";
		$result2 = mysqli_query($conn, $sql2);
		$result3 = mysqli_query($conn, $sql4);
		$sql = "INSERT INTO transaction_history VALUES ('$sender_name',                '$receiver_name',  $amount)";
		$result = mysqli_query($conn, $sql);
		include 'user1.php';
	}
	?>

</body>

</html>