<?php
include "config.php";

$sql = "Select * from child";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="">

<head>
  <title></title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
    <div class="container">
      <h2>Children</h2>
      <a class="btn btn-primary" style="float:right" href="Add Child.php">Add New Child</a>

      <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Full Name</th>
            <th>Birthday</th>
            <th>Gender</th>
            <th>Image</th>
            <th>InitialName</th>
          </tr>
        </thead>

        <tbody>
          <?php
          while ($row = $result->fetch_assoc()) {
          ?>

            <tr>
              <td><?php echo $row['id'] ?></td>
              <td><?php echo $row['fullname'] ?></td>
              <td><?php echo $row['dob'] ?></td>
              <td><?php echo $row['gender'] ?></td>
              <td><?php echo $row['image'] ?></td>
              <td><?php echo $row['initialname'] ?></td>
              <td><a class="btn btn-danger" href="Delete Child.php?id=<?php echo $row['id']; ?>">Delete</a></td>
            </tr>

          <?php
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>
  <script src="script.js"></script>
</body>

</html>