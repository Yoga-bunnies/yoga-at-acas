<?php
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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["firstname"])) {
    $nameErr = "First name is required";
  } else {
    $name = test_input($_POST["firstname"]);
  }
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["lastname"])) {
      $nameErr = "Last name is required";
    } else {
      $name = test_input($_POST["lastname"]);
    }
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }

  if (empty($_POST["telephone"])) {
    $website = "";
  } else {
    $website = test_input($_POST["telephone"]);
  }

  if (empty($_POST["commitment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["commitment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}
?>
echo "Thankyou! <a href='form.html' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
?>
