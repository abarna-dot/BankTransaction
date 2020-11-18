<!DOCTYPE html>
<html>

<head>
    <title>User List</title>

    <?php include('style.php'); ?>
</head>

<body>
    <h1>Customers Details</h1>
    <div id="navbar">
        <a class="hi" href="index.php">Home</a>
        <a class="hello" href="details.php">View all Customers</a>
        <a class="bye" href="history.php">Transaction History</a>
    </div>
    <?php include 'connection.php' ?>

    <table class="center">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Balance</th>
            </tr>
        </thead>
        <tbody>
            <!--Use a while loop to make a table row for every DB row-->
            <?php $sql = "SELECT Id, Name, Email, Balance FROM bank";
            $result = mysqli_query($conn, $sql); ?>
            <?php while ($row = mysqli_fetch_assoc($result)) : ?>

                <tr>
                    <!--Each table column is echoed in to a td cell-->
                    <td><?php echo $row['Id']; ?></td>
                    <td><?php echo $row['Name']; ?></td>
                    <td><?php echo $row['Email']; ?></td>
                    <td><?php echo $row['Balance']; ?></td>
                </tr>
            <?php endwhile ?>
        </tbody>
    </table>

</body>

</html>