<!DOCTYPE html>

<html>

<head>
  <title>Home</title>
  <?php include('style.php'); ?>
</head>

<body>
  <?php include 'connection.php' ?>
  <h1>Basic Banking System</h1>
  <div id="navbar">
    <a class="hi" href="#home">Home</a>
    <a class="hello" href="details.php">View all Customers</a>
    <a class="bye" href="history.php">Transaction History</a>
  </div>
  <h5><i>Money transfer got EASY "TRANSFER YOUR MONEY WITH EASE"</i></h5>
  <div class="container">
    <button><a href="process.php">Money Transfer</a></button>
  </div>
  <h3>why this website?</h3>
  <form method="get">
    <input type="submit" name="button1" class="button" value="show less.." />
    <input type="submit" name="button2" class="button" value="show more.." />
  </form>
  <?php
  if (array_key_exists('button1', $_GET)) {
    button1();
  } else if (array_key_exists('button2', $_GET)) {
    button2();
  }
  function button1()
  {
    echo "<h3>The Spark Foundation Internship Task1 done by Abarna M. This is about..</h3>";
  }
  function button2()
  {
    echo "<h3>The Spark Foundation Internship Task1 done by Abarna M. This is about..Start with creating a dummy data in database for upto 10 customers.Database used: Mysql. Customers table will have basic fields such as name, email, current balance etc. Transfers table will record all transfers happened.◇ Flow: Home Page > View all Customers > Select and View one Customer > Transfer Money > Select customer to transfer to > View all Customers .◇ No Login Page. No User Creation. Only transfer of money between multiple users.◇ Host the website at any other free hosting provider.</h3>";
  }
  ?>

</body>

</html>