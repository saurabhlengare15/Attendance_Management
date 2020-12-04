<?php
  session_start();
  $isIndex = 0;
  if(!(array_key_exists('teacher_id',$_SESSION) && isset($_SESSION['teacher_id']))) {
    session_destroy();
    if(!$isIndex) header('Location: index.php');
  }
?>
<?php include 'php/node_class.php'; ?>
<html>
 <head>
  <link rel="stylesheet" href="css/profile.css"/>

  <title>Profile</title>
  <script src="js/jquery.min.js"></script>
  <script src="js/profile.js"></script>
  
 </head>
 <body>
        <ul>
          <li style="float:left"><a href="index.php">Attendance Management System</a></li>
          <li><a href="logout.php">Logout</a></li>
          <li><a href="statistics.php">Satistics</a></li>
          <li class="active"><a href="profile.php">Profile</a></li>
          <li><a href="teacher.php">Dashboard</a></li>
        </ul>
  
  </br></br></br></br>
  
    <?php
      $name = $_SESSION['name'];
      $phone = $_SESSION['phone'];
      $email = $_SESSION['email'];
      $classes = $_SESSION['classes'];
      $teacher_id = $_SESSION['teacher_id'];
      echo '<h2>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
       Welcome , '.$name.'</h2>';
      echo '<h3>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
      Edit your profile here.</h3><br>';
    ?>
    <!-- <div class="wrapper">
      <dl class="dl-horizontal">
        <dt>Name : </dt>
        <dd>
          <div class="input-group">
          <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
          <input class="form-control" name="name" placeholder="Enter your name" value="<?php echo $name; ?>">
          </div>
        </dd>
        <dt>Phone : </dt>
        <dd>
          <div class="input-group">
          <span class="input-group-addon"><span class="glyphicon glyphicon-phone"></span></span>
          <input class="form-control" name="phone" placeholder="Enter your phone" value="<?php echo $phone; ?>">
          </div>
        </dd>
        <dt>Email : </dt>
        <dd>
          <div class="input-group">
          <span class="input-group-addon">@</span>
          <input class="form-control" name="email" placeholder="Enter your email"  value="<?php echo $email; ?>">
          </div>
        </dd>
        <dt>Classes : </dt>
        <dd><?php echo $classes == 0? 0 : count($classes); ?></dd>
     </dl>
     <button class="btn btn-success update-profile">Save</button>
    </div> -->

  <div class="info">

  <center>
  <!-- <?php echo '<h2>Welcome , '.$name.'</h2>';
      echo '<h3>Edit your profile here.</h3><br>';?> -->

    <label>Name: </label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    <input type="text" placeholder="Enter your name"  name="name" value="<?php echo $name; ?>" required><br><br>

    <label>Contact No: </label>&nbsp
    <input type="text" placeholder="Enter your phone"  name="phone" value="<?php echo $phone; ?>" required><br><br>

    <label>Email: </label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    <input type="email" placeholder="Enter your email"  name="email" value="<?php echo $email; ?>" required><br><br>

    <label>Classes: </label>&nbsp
    <?php echo $classes == 0? 0 : count($classes); ?><br><br>

    <center><button class="update-profile">Save</button></center>
  </div>
</center>
 </body>
</html>
