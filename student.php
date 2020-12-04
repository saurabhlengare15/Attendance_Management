<html>
 <head>
  <link rel="stylesheet" href="css/style.css"/>
  <link rel="stylesheet" href="css/stu.css"/>
  <title>Student Attendance</title>
  <script src="js/jquery.min.js"></script>
  <script src="js/highcharts.js"></script>
  <script src="js/highcharts-exporting.js"></script>
  <script src="js/jquery.knob.js"></script>
  <script src="js/student.js"></script>
  
 </head>
 <body>
        <ul>
          <li style="float:left"><a href="index.php">Attendance Management System</a></li>
        </ul>

  </br></br></br></br></br>

 <div class="container">
  <div id="output"></div>
  <form id="getAttendance" class="fom">

      <!-- &nbsp<label>Year of course</label><br>
      <select name="year" class="form-control">
        <?php foreach(range(date('Y',time()),1983) as $r) echo '<option>'.$r.'</option>'; ?>
      </select><br><br> -->

      <b>Year of course</b><br>
      <select name="year">
      <?php foreach(range(date('Y',time()),1983) as $r) echo '<option>'.$r.'</option>'; ?>
      </select><br><br>
    
      <!-- <label>Section</label><br>
      <select name="section" class="form-control">
        <option>1</option><option>2</option><option>3</option>	
      </select><br><br> -->

      <b>Section</b><br>
      <select name="section">
        <option>1</option>
        <option>2</option>
        <option>3</option>
      </select><br><br>
    
      <!-- <label>Subject Code of Course</label><br>
      <input type="text" class="form-control" name="code" placeholder="Eg - COE-216"><br>
      <span class="help-block">DDD-NNN where D : Department , N : Number</span><br><br> -->

      <b>Subject Code of Course</b><br>
      <input type="text" name="code" placeholder="Eg - COE-216"><br>
      CCC-NNN where C : Course , N : Number<br><br>
    
      <!-- <label>Roll Number</label><br>
      <input type="text" class="form-control" name="roll" placeholder="Eg - 262/CO/12"><br>
      <span class="help-block">NNN/DD/YY where N : Number, D : Department , Y : Year</span><br><br> -->

      <b>Roll Number</b><br>
      <input type="text" name="roll" placeholder="Eg - 262/CO/12"><br>
      NNN/DD/YY where N : Number, D : Department , Y : Admission Year<br><br>

      <button class="btn btn-primary">Get Results</button>

  </form>
  </div><!-- /.container -->
   <!-- FOOTER -->
      <footer style="background:; height:;">
        <p class="pull-right"><a href="#">Back to top</a></p>
      </footer>

    
 </body>
</html>
