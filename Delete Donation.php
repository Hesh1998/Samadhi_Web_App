<?php
include "config.php";

if (isset($_GET['id'])) {

  $user_id = $_GET['id'];

  $sql = "Delete FROM donation where donarId = '$user_id'";

  $result = $conn->query($sql);

  if ($result == TRUE) {
    echo "Deleted successfully";
    header("location: View Donation.php");
  } else {
    echo "Error:" . $sql . "<br>" . $conn->error;
  }
}