

<?php

$servername = "localhost";
$username = "root";
$password = "";
$databasename = "detectivescode";
$conn = new mysqli($servername, $username, $password, $databasename);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// $servername = "localhost";
// $username = "detectivescode_rsdecode";
// $password = "1G~}zj95b{gF";
// $databasename = "detectivescode_rsdecode";

// $conn = new mysqli($servername, $username, $password, $databasename);
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }
$dataFromStorage = $_POST['dataFromStorage'];
 

//  echo $dataFromStorage;
$sql = "INSERT INTO infos (networkname, imei, brandname, modal,email, payment,trems )
VALUES ('$dataFromStorage[networkName]', '$dataFromStorage[ingresarIMEI]', '$dataFromStorage[brandNameItem]', '$dataFromStorage[brandNameItemModal]', '$dataFromStorage[email]','$dataFromStorage[cardPayment]','$dataFromStorage[tremsPolicy]')";
// print_r($sql);
// die();

if ($conn->query($sql) === TRUE) {
  echo 1;
} else {
  echo 0;
}


$conn->close();
?>

