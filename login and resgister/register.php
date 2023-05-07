<?php
require_once '../config.php';
// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Get the form data
  $name = $_POST['name'];
  $phone_number = $_POST['phone'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $confirmPassword = $_POST['confirmPassword'];

  // Validate the form data
  $errors = array();
  if (empty($name)) {
    $errors[] = "Name is required.";
  }
  if (empty($phone_number)) {
    $errors[] = "Phone number is required.";
  }
  if (empty($email)) {
    $errors[] = "Email is required.";
  } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Email is invalid.";
  }
  if (empty($password)) {
    $errors[] = "Password is required.";
  }
  if (empty($confirmPassword)) {
    $errors[] = "Confirm password is required.";
  } elseif ($password != $confirmPassword) {
    $errors[] = "Passwords do not match.";
  }

  // If there are no errors, insert the user data into the database
  if (empty($errors)) {

    // Insert the user data into the database
    $sql = "INSERT INTO users (name, phone_number, email, password) VALUES ('$name', '$phone_number', '$email', '$password')";
    if (!mysqli_query($conn, $sql)) {
      die('Could not insert user data: ' . mysqli_error($conn));
    }

    // Close the database connection
    mysqli_close($conn);

    // Redirect the user to a success page
    header('Location: loginform.php');
    exit;
  }
}
?>