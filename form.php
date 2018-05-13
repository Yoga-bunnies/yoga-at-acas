<?php
// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $firstname = test_input($_POST["firstname"]);
  $lastname = test_input($_POST["lastname"]);
  $flexibility = test_input($_POST["flexibility"]);
  $fitness = test_input($_POST["fitness"]);
  $calmer = test_input($_POST["calmer"]);
  $strength = test_input($_POST["strength"]);
  $email = test_input($_POST["email"]);
  $commitment = test_input($_POST["commitment"]);
  $telephone = test_input($_POST["Telephone"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
