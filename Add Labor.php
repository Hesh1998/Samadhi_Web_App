<?php
include "config.php";

if (isset($_POST['submit'])) {

  $firstName = $_POST['firstName'];
  $fullName = $_POST['fullName'];
  $nameIns = $_POST['nameWithInitials'];
  $birthdate = $_POST['birthdate'];
  $nic = $_POST['nic'];
  $gender = $_POST['gender'];
  $contactNumber = $_POST['contactNumber'];
  $address = $_POST['permanentAddress'];
  $company = $_POST['company'];

  $sql = "INSERT INTO labor(firstName, fullName, initialName, dob, gender, contact, address, company) 
    VALUES ('$firstName','$fullName','$nameIns','$birthdate','$gender','$contactNumber','$address','$company')";

  $result = $conn->query($sql);

  if ($result == TRUE) {
    echo "New record created successfully";
    header("location: View Labor.php");
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
      var initname = document.forms["form1"]["nameWithInitials"].value;
      var fullname = document.forms["form1"]["fullName"].value;
      var firstname = document.forms["form1"]["firstName"].value;
      var dob = document.forms["form1"]["birthdate"].value;
      var gender = document.forms["form1"]["gender"].value;
      var contact = document.forms["form1"]["contactNumber"].value;
      var address = document.forms["form1"]["permanentAddress"];
      var company = document.forms["form1"]["company"];

      if (initname == "") {
        alert("Name with Initials is required! ");
        return false;
      } else if (!isNaN(initname)) {
        alert(" A valid Name is required! ");
        return false;
      }

      if (fullname == "") {
        alert("Full Name is required! ");
        return false;
      } else if (!isNaN(fullname)) {
        alert(" A valid Name is required! ");
        return false;
      }

      if (firstname == "") {
        alert("First Name is required! ");
        return false;
      } else if (!isNaN(firstname)) {
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

      if (contact == "") {
        alert("Contact Number is required!");
        return false;
      } else {
        if (contact.length < 10) {
          alert(" A valid Contact Number is required !! ");
          return false;
        }
        if (contact.length > 10) {
          alert("A valid Contact Number is required.Maximum length should be 10 !!");
          return false;
        }
      }

      if (address.length > 200) {
        alert("Maximum character limit is 200 !! ");
        return false;
      }

      if (company == "") {
        alert("Choose your Hiring Company! ");
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
      <div class="formtitle">Add Labor</div>
      <div class="form-group">
        <label>Name with Initials:</label>
        <input type="text" name="nameWithInitials">
      </div>
      <div class="form-group">
        <label>Full Name:</label>
        <input type="text" name="fullName">
      </div>
      <div class="form-group">
        <label for="nameWithInitials">First Name:</label>
        <input type="text" name="firstName" id="firstName">
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
        <label>Contact Number:</label>
        <input type="text" name="contactNumber">
      </div>
      <div class="form-group">
        <label>Permanent Address:</label>
        <textarea name="permanentAddress"></textarea>
      </div>
      <div class="form-group">
        <label>Company:</label>
        <select name="company" id="hiringCompany">
          <option value="Sunshine">Sunshine</option>
          <option value="Moonlight">Moonlight</option>
        </select><br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
  </div>
  <script src="script.js"></script>
</body>

</html>