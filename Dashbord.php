<?php
include "config.php";

$sqlchild = "SELECT COUNT(id) AS count FROM child";
$resultchild = $conn->query($sqlchild);

$sqldonation = "SELECT COUNT(donarId) AS count FROM donation";
$resultdonation = $conn->query($sqldonation);

$sqllabor = "SELECT COUNT(id) AS count FROM labor";
$resultlabor = $conn->query($sqllabor);

$sqlstaff = "SELECT COUNT(nic) AS count FROM staff";
$resultstaff = $conn->query($sqlstaff);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="./Case Study.css">

</head>

<body>
  <div class="header">
    <header class="headerSet">
      <h3>SAMADHI CHILDREN HOME</h3>
    </header>
  </div>

  <div class="sideBar">
    <a href="./Overview.php">
      <i class="fa fa-tachometer" aria-hidden="true"></i>
      <span style="padding-left: 8px">OverView</span>
    </a>
    <button class="dropdownBtn">
      <i class="fa fa-money" aria-hidden="true"></i>
      <span style="padding-left: 4px">Donations</span>
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdownList">
      <a href="./Add Donation.php">Add Donations</a>
      <a href="./View Donation.php">View Donations</a>
    </div>
    <button class="dropdownBtn">
      <i class="fa fa-users" aria-hidden="true"></i>
      <span style="padding-left: 4px">Staff</span>
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdownList">
      <a href="./Add Staff.php">Add Staff</a>
      <a href="./View Staff.php">View Staff</a>
    </div>
    <button class="dropdownBtn">
      <i class="fa fa-child" aria-hidden="true"></i>
      <span style="padding-left: 10px">Child</span>
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdownList">
      <a href="./Add Child.php">Add Child</a>
      <a href="./View Child.php">View Child</a>
    </div>
    <button class="dropdownBtn">
      <i class="fa fa-male" aria-hidden="true"></i>
      <span style="padding-left: 13px">Labours</span>
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdownList">
      <a href="./Add Labor.php">Add Labours</a>
      <a href="./View Labor.php">View Labours</a>
    </div>
    <a href="#contact">
      <i class="fa fa-power-off" aria-hidden="true"></i>
      <span style="padding-left: 9px">Log Out</span>
    </a>
  </div>

  <div id="section1" class="section1">
    <br><br><br>
    <a class="cardlink" href="./View Child.php">
      <div class="card">
        <div class="card-text">
          <h1>Children&nbsp;&nbsp;:&nbsp;&nbsp;<?php echo $resultchild->fetch_assoc()['count']; ?></h1>
        </div>
      </div>
    </a>
    <a class="cardlink" href="./View Donation.php">
      <div class="card">
        <div class="card-text">
          <h1>Donations&nbsp;&nbsp;:&nbsp;&nbsp;<?php echo $resultdonation->fetch_assoc()['count']; ?></h1>
        </div>
      </div>
    </a>
    <a class="cardlink" href="./View Labor.php">
      <div class="card">
        <div class="card-text">
          <h1>Labors&nbsp;&nbsp;:&nbsp;&nbsp;<?php echo $resultlabor->fetch_assoc()['count']; ?></h1>
        </div>
      </div>
    </a>
    <a class="cardlink" href="./View Staff.php">
      <div class="card">
        <div class="card-text">
          <h1>Staff&nbsp;&nbsp;:&nbsp;&nbsp;<?php echo $resultstaff->fetch_assoc()['count']; ?></h1>
        </div>
      </div>
    </a>

  </div>
  <script src="script.js"></script>
</body>

</html>