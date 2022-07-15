<?php
include "config.php";

if (isset($_POST['submit'])) {

  $donarName = $_POST['donarName'];
  $contactNumber = $_POST['contactNumber'];
  $address = $_POST['permanentAddress'];
  $donationType = $_POST['donationType'];

  $sql = "INSERT INTO donation(donarName, contact, address, type) 
    VALUES ('$donarName','$contactNumber','$address','$donationType')";

  $result = $conn->query($sql);

  if ($result == TRUE) {
    echo "New record created successfully";
    header("location: View Donation.php");
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
      var donarname = document.forms["form1"]["donarName"].value;
      var contact = document.forms["form1"]["contactNumber"].value;
      var address = document.forms["form1"]["permanentAddress"].value;
      var type = document.forms["form1"]["donationType"].value;

      if (donarname == "") {
        alert(" Donor Name is required! ");
        return false;
      } else if (!isNaN(donarname)) {
        alert(" A valid Donor Name is required! ");
        return false;
      }

      if (contact == "") {
        alert("Contact Number is required!");
        return false;
      } else {
        if (contact.length < 10) {
          alert(" Contact Number is Not valid! ");
          return false;
        }
        if (contact.length > 10) {
          alert("A valid Contact Number is required.Maximum length should be 10 !!");
          return false;
        } else if (contact.length == 10) {
          return true;
        }
      }

      if (type == "") {
        alert("Choose your Donation Method! ");
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
      <div class="formtitle">Add Donation</div>
      <div class="form-group">
        <label for="donarName">Donor Name:</label>
        <input type="text" name="donarName" id="donarName">
      </div>
      <div class="form-group">
        <label>Contact Number:</label>
        <input type="text" name="contactNumber">
      </div>
      <div class="form-group">
        <label>Permanent Address:</label>
        <textarea name="permanentAddress"></textarea>
        <div class="form-group">
          <label>Post:</label>
          <select name="donationType" id="donationType">
            <option value="Cash">Cash</option>
            <option value="Items">Items</option>
            <option value="Both">Borth</option>
          </select>
        </div><br>
        <input type="submit" name="submit" value="Submit">
    </form>
  </div>
  <script src="script.js"></script>
</body>

</html>