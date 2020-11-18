<!DOCTYPE html>
<html>

<head>
    <title>Transaction History</title>
    <?php include('style.php'); ?>
</head>

<body>
    <h1>Transaction History</h1>
    <div id="navbar">
        <a class="hi" href="index.php">Home</a>
        <a class="hello" href="details.php">View all Customers</a>
        <a class="bye" href="history.php">Transaction History</a>
    </div>
    <?php include 'connection.php' ?>

    <table class="middle">
        <thead>
            <tr>
                <th>Sender</th>
                <th>Receiver</th>
                <th>Amount</th>
            </tr>
        </thead>
        <tbody>



            <?php $sql = "SELECT Sender, Receiver, Amount FROM transaction_history";
            $result = mysqli_query($conn, $sql); ?>
            <?php while ($row = mysqli_fetch_assoc($result)) : ?>

                <tr>
                    <!--Each table column is echoed in to a td cell-->
                    <td><?php echo $row['Sender']; ?></td>
                    <td><?php echo $row['Receiver']; ?></td>
                    <td><?php echo $row['Amount']; ?></td>
                </tr>
            <?php endwhile ?>
        </tbody>
    </table>




</body>

</html>