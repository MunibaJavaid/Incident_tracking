<?php 
  session_start();

  // variable declaration
  $fname = "";
  $lname = "";
  $username = "";
  $email    = "";
  $gender = "";
  $errors = array(); 
  $_SESSION['success'] = "";

  // connect to database
  $db = mysqli_connect('localhost', 'root', '', 'incident_tracking');

  // REGISTER USER
  if (isset($_POST['reg_user'])) {
    // receive all input values from the form
    $fname = mysqli_real_escape_string($db, $_POST['fname']);
    $lname = mysqli_real_escape_string($db, $_POST['lname']);
    $username=$fname.'-'.$lname;
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $gender = mysqli_real_escape_string($db, $_POST['gender']);
    $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

    // form validation: ensure that the form is correctly filled
    if (empty($fname)) { array_push($errors, "firstname is required"); }
    if (empty($lname)) { array_push($errors, "lastname is required"); }
    if (empty($email)) { array_push($errors, "Email is required"); }
    if (empty($gender)) { array_push($errors, "forgot your gender option"); }
    if (empty($password_1)) { array_push($errors, "Password is required"); }

    if ($password_1 != $password_2) {
      array_push($errors, "The two passwords do not match");
    }

    // register user if there are no errors in the form
    if (count($errors) == 0) {
      $password = md5($password_1);//encrypt the password before saving in the database
      $query = "INSERT INTO user (username, email, gender, password) 
            VALUES('$username', '$email', '$gender', '$password')";
      mysqli_query($db, $query);

      $_SESSION['username'] = $username;
      $_SESSION['success'] = "You are now logged in";
      header('location: index.php');
    }

  }

  // ... 

  // LOGIN USER
  if (isset($_POST['login_user'])) {
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    if (empty($email)) {
      array_push($errors, "email is required");
    }
    if (empty($password)) {
      array_push($errors, "Password is required");
    }

    if (count($errors) == 0) {
      $password = md5($password);
      $query = "SELECT * FROM user WHERE email ='$email' AND password='$password'";
      $results = mysqli_query($db, $query);

      if (mysqli_num_rows($results) == 1) {
        $_SESSION['email'] = $email;
        $_SESSION['success'] = "You are now logged in";
        header('location: index.php');
      }else {
        array_push($errors, "Wrong username/password combination");
      }
    }
  }

?>