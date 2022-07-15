<?php
include "config.php";

if (isset($_POST['submit'])) {

  $initialName = $_POST['nameIns'];
  $fullName = $_POST['fullName'];
  $birthdate = $_POST['birthdate'];
  $gender = $_POST['gender'];

  $sql = "INSERT INTO child(fullname, dob, gender, initialname) 
    VALUES ('$fullName','$birthdate','$gender','$initialName')";

  $result = $conn->query($sql);

  if ($result == TRUE) {
    echo "New record created successfully";
    header("location: View Child.php");
  } else {
    echo "Error:" . $sql . "<br>" . $conn->error;
  }
}

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

  <script>
    function validateForm() {
      var ni = document.forms["form1"]["nameIns"].value;
      var fn = document.forms["form1"]["fullName"].value;
      var dob = document.forms["form1"]["birthdate"].value;
      var gender = document.forms["form1"]["gender"].value;

      if (ni == "") {
        alert("Name with Initials is required! ");
        return false;
      } else if (!isNaN(ni)) {
        alert(" A valid Name is required! ");
        return false;
      }

      if (fn == "") {
        alert("Full Name is required! ");
        return false;
      } else if (!isNaN(fn) || !isNaN(fn)) {
        alert(" A valid Name is required! ");
        return false;
      }

      if (dob == "") {
        alert("Birth Date is Required! ");
        return false;
      }

      if (gender == "") {
        alert("Choose your Gender! ");
        return false;
      }
    }
  </script>
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
    <form name="form1" class="form1" onsubmit="return validateForm()" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
      <div class="formtitle">Add Child</div>
      <div class="form-group">
        <label for="nameWithInitials">Name with Initials:</label>
        <input type="text" name="nameIns" id="nameIns">
      </div>
      <div class="form-group">
        <label>Full Name:</label>
        <input type="text" name="fullName">
      </div>
      <div class="form-group">
        <label>Birthdate:</label>
        <input type="date" name="birthdate">
      </div>
      <div class="form-group">
        <label>Gender:</label><br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="gender" value="male">Male
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="gender" value="female">Female
      </div>
      <div class="form-group">
        <label>Child Image:</label>
        <input type="file" name="childImage">
      </div><br>
      <input type="submit" name="submit" value="Submit">
    </form>
  </div>
  <script src="script.js"></script>
</body>

</html>