<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <title>Registration Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="css/style2.css">
</head>
<body>
  <div class="wrapper" style="background-image: url('12.jpg');">
      <div class="inner bg-dark">
        <div class="image-holder">
          <img src="1.jpg" style="height: 500px" alt="">
        </div>
          <form method="post" action="register.php">
          <?php include('errors.php'); ?>
          <h3>Registration Form</h3>
         <div class="form-group">
            <input type="text" name="fname" id="fname" placeholder="First Name" class="form-control">
            <input type="text" name="lname"  id="lname" placeholder="Last Name" class="form-control">
          </div>
          <div class="form-wrapper">
            <input type="email" name="email" placeholder="Email Address" class="form-control" value="<?php echo $email; ?>">
            <i class="zmdi zmdi-email"></i>
          </div>
          <div class="form-wrapper">
            <select name="gender" id="" class="form-control">
              <option value="" disabled selected>Gender</option>
              <option value="male">Male</option>
              <option value="femal">Female</option>
            </select>
            <i class="zmdi zmdi-caret-down" style="font-size: 17px"></i>
          </div>
          <div class="form-wrapper">
            <input type="password" name="password_1" placeholder="Password" class="form-control">
            <i class="zmdi zmdi-lock"></i>
          </div>
          <div class="form-wrapper">
            <input type="password" name="password_2" placeholder="Confirm Password" class="form-control">
            <i class="zmdi zmdi-lock"></i>
          </div>
          <button type="submit" class="btn" name="reg_user">Register</button><br>
          <center><p>
          Already a member? <a href="login.php">Sign in</a>
        </p></center>
        </form>
      </div>
    </div>
  </form>
</body>
</html>