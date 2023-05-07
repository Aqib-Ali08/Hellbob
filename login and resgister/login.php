<?php
require_once '../config.php';
// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  
  // Get the user input from the login form
  $email = $_POST['email'];
  $password = $_POST['password'];

  // Validate user input (you can add your own validation rules)
  $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) == 1) {
    
    // Store user information in the session
    $_SESSION['email'] = $email;
    $_SESSION['loggedin'] = true;
    $_SESSION['name'] = 'sk aqib ali';

    // Redirect to a protected page
    header('Location: ../index.php');
    exit;

  } else {

    // Display an error message if the login information is incorrect
    $error_message = 'Invalid email or password';

  }

}

mysqli_close($conn);

?>

