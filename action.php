<?php include("db.php");?>
<?php include("getsessions.php");?>




<?php
//FORM VALIDATION
$fname = $lname = $mnumber = $email = $session ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $fname = test_input($_POST["fname"]);
  $lname = test_input($_POST["lname"]);
  $mnumber = test_input($_POST["mnumber"]);
  $email = test_input($_POST["email"]);
  $session = $_POST["session"];
}

//Data sanitization PHP
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

//SUBMIT INPUT AND INSERT TO DATABASE
if (isset($_POST['submit'])) {
  $sql = "INSERT INTO `patron_info` (firstname, lastname, mobile, email)
          VALUES ('".$_POST['fname']."', '".$_POST['lname']."', '".$_POST['mnumber']."', '".$_POST['email']."' );"
          ;

//Get Id of last inserted record
if ($con->query($sql) === TRUE) {
  $lastpatronID = $con->insert_id;
  echo "New record created successfully. Last inserted ID is: " . $lastpatronID;
} else {
  echo "Error: " . $sql . "<br>" . $con->error;
}



//(bookingID, patronID, sessionID) --> INCORRECTLY POPULATES MOVIE ID
  

  $booking = "INSERT INTO `booking_info` (patronID, sessionID) VALUES ($lastpatronID, '".$_POST['session']."')";

  if ($con->query($booking) === TRUE) {
           echo "Booking Completed!" ;
  } else {
    echo "Error: " . $sql . "<br>" . $con->error;
  }


}


$con->close();
 ?>
