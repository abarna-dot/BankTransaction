<!DOCTYPE html>
<html>

<head>
	<title>send money</title>

	<?php include('style.php'); ?>
</head>

<body>
	<h1>Transaction Process</h1>
	<div id="navbar">
		<a class="hi" href="index.php">Home</a>
		<a class="hello" href="details.php">View all Customers</a>
		<a class="bye" href="history.php">Transaction History</a>
	</div>
	<div class="container">
		<form action="transfer.php" method="get">
			<label><b>Sender </b></label>
			<input list="names" type="text" name="sender_name" , placeholder="Enter name here" required>
			<datalist id="names">
				<option value="Liam"></option>
				<option value="Noah"></option>
				<option value="Oliver"></option>
				<option value="William"></option>
				<option value="Lucas"></option>
				<option value="Olivia"></option>
				<option value="Emma"></option>
				<option value="Ava"></option>
				<option value="Miah"></option>
				<option value="Isabella"></option>

			</datalist>
			</br>
			<label><b>Receiver </b></label>
			<input list="namess" type="" name="receiver_name" placeholder="Enter email here" required>
			<datalist id="namess">
				<option value="Liam"></option>
				<option value="Noah"></option>
				<option value="Oliver"></option>
				<option value="William"></option>
				<option value="Lucas"></option>
				<option value="Olivia"></option>
				<option value="Emma"></option>
				<option value="Ava"></option>
				<option value="Miah"></option>
				<option value="Isabella"></option>

			</datalist>
			</br>
			<label><b>Amount </b></label>
			<input type="" name="amount" placeholder="Enter amount here" required>
			<input class="click" type="submit" name="" value="Transfer">

		</form>
	</div>


</body>

</html>