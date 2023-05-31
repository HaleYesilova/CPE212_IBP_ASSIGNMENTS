<?php
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $message = $_POST['message'];

    echo "Submitted Message (POST): " . $message;
  } 
  elseif ($_SERVER['REQUEST_METHOD'] === 'GET') {
    
    $name = $_GET['name'];
    $email = $_GET['email'];

    echo "Submitted Name (GET): " . $name . "<br>";
    echo "Submitted Email (GET): " . $email;
  }
  else {
    echo "Invalid form submission method";
  }
?>