<?php
  session_start();
  $isIndex = 1;
  if(array_key_exists('teacher_id',$_SESSION) && isset($_SESSION['teacher_id'])) {
   header('Location: teacher.php');
  } else {
    if(!$isIndex) header('Location: index.php');
  }
?>
<!DOCTYPE html>
<html>
 <head>
  <link rel="stylesheet" href="css/index.css"/>
  
  <title>Student Attendance</title>
  
  <script src="js/jquery.min.js"></script>
  
  <script src="js/login.js"></script>
   <!-- Custom styles for this template -->
    <link href="navbar-fixed-top.css" rel="stylesheet">
 </head>
 <body>
 
    <!-- Fixed navbar -->
    <ul>
        <li style="float:left"><a href="#">Attendance Management System</a></li>
    </ul>
  <div class="container">
    <h2>For Students</h2>
    <center><h3>Click here for <a href="student.php">Student Dashboard</a></h3></center>
    <hr>
    <h2>For Faculty</h2>
    <div class="alert alert-warning hidden">
      <span></span>
      <button type="button" class="close" onclick="$('.alert').addClass('hidden');">&times;</button>
    </div>

    <div class="login">
        <form id="login">
            <label>Email ID</label><br>
            <input type="email" placeholder="Email"  name="email" required><br><br>

            <label>Password</label><br>
            <input type="password" placeholder="Password"  name="password" required><br><br>

            <!-- <h5><a href="signup.php">Don't have Account? Register</h5> -->

            <center><button type="submit">Submit</button></center>
        </form>
    </div>

    <div class="signup">
        <form id="signup">
            <label>Name</label><br>
            <input type="text" placeholder="Name"  name="name" required><br><br>

            <label>Phone</label><br>
            <input type="text" placeholder="Phone"  name="phone" required><br><br>
            
            <label>Email ID</label><br>
            <input type="email" placeholder="Email"  name="email" required><br><br>

            <label>Password</label><br>
            <input type="password" placeholder="Password"  name="password" required><br><br>

            <label>Confirm Password</label><br>
            <input type="password" placeholder="Confirm Password"  name="password2" required><br><br>

            <!-- <h5><a href="index.php">Already have Account? Login</a></h5> -->

            <center><button type="submit" name="signupbtn">Submit</button></center>
        </form>
    </div>

    <!-- <table>
      <thead>
        <tr>
          <th>Login</th>
          <th>Sign Up</th>
        </tr>
      </thead>

      <tbody>
        <tr>
          <td>
            <form id="login">
              <div class="form-group">
                <label>Email ID</label>
                <input class="form-control" placeholder="Email" type="email" name="email" required>
              </div>
              <div class="form-group">
                <label>Password</label>
                <input class="form-control" placeholder="Password" type="password" name="password" required>
              </div>
              <button class="btn btn-primary pull-right">Login</button>
            </form>
          </td>

          <td>
            <form id="signup">
              <div class="form-group">
                <label>Name</label>
                <input class="form-control" placeholder="Name" type="text" name="name" required>
              </div>
              <div class="form-group">
                <label>Phone Number</label>
                <input class="form-control" placeholder="Phone" type="text" name="phone" required>
              </div>
              <div class="form-group">
                <label>Email ID</label>
                <input class="form-control" placeholder="Email" type="email" name="email" required>
              </div>
              <div class="form-group">
                <label>Password</label>
                <input class="form-control" placeholder="Password" type="password" name="password" required>
                <span class="help-block">Password should be 6 characters long.</span>
              </div>
              <div class="form-group">
                <label>Re-type Password</label>
                <input class="form-control" placeholder="Re-type Password" type="password" name="password2" required>
              </div>
              <button class="btn btn-primary pull-right">Sign Up</button>
            </form>
          </td>

        </tr>
      </tbody>
      
    </table> -->
  </div>


 </body>
</html>
