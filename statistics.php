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
  <!-- <link rel="stylesheet" href="css/style.css"/> -->
  <link rel="stylesheet" href="css/statistics.css"/>
  <title>Statistics</title>
  <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
  <!-- <link rel="stylesheet" href="css/bootstrap-theme.min.css"> -->
  <script src="js/jquery.min.js"></script>
  <!-- <script src="js/bootstrap.min.js"></script> -->
  <script src="js/highcharts.js"></script>
  <script src="js/highcharts-exporting.js"></script>
  <script src="js/statistics.js"></script>
  <!-- Custom styles for this template -->
    <link href="navbar-fixed-top.css" rel="stylesheet">
 </head>
 <body>
 <ul class="header">
          <li style="float:left"><a href="index.php">Attendance Management System</a></li>
          <li><a href="logout.php">Logout</a></li>
          <li class="active"><a href="statistics.php">Satistics</a></li>
          <li><a href="profile.php">Profile</a></li>
          <li><a href="teacher.php">Dashboard</a></li>
        </ul>
  </br></br></br></br>
 
  <div class="container">
    <div class="wrapper">
      <?php
        $classes = $_SESSION['classes'];
        $teacher_id = $_SESSION['teacher_id'];
        $n = new Node;
        if($classes != 0) {
          $data = array();
          foreach($classes as $c) {
            $node = $n->retrieveObjecti($c,$teacher_id) or die("No such record");

            $key = $node->getCode().' ( '.$node->getSection().' ) ,'.$node->getYear();
          
            $total_days = $node->getDays();
           
            $data[$key] = array("total"=>$total_days,"average"=>0,"detained"=>0);
            if($total_days)  {
              $detained = array();
              $sum = 0;
              $count = 0;
              foreach($node->getRecords() as $roll => $rec) {
                $sum += $rec['present'];
                $count++;
                if($rec['present']/$total_days < 0.5)  $detained[$roll] = (100*($rec['present']/$total_days));
              }
              $data[$key]['average'] = ($sum/($count));
              $data[$key]['detained'] = $detained;
            }
          }
          echo '<script> var data = '.json_encode($data).'; </script>';
        //   echo'<ul class="nav nav-tabs">
        //   <li class="active"><a href="#graph">Average Attendance</a></li>
        //   <li><a href="#detained">Short Attendance</a></li>
        // </ul>';
          echo '<h4 class="active1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="#graph">Average Attendance</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
          <a href="#detained">Short Attendance</a></h4><hr>';
          
          echo '
          <div class="content">
            <div id="graph">
            </div>
            <div id="detained">';
          foreach($data as $class => $d) {
            echo '<div class="classes">'.$class.' <span class="badge">'.($d['detained']==0?0:count($d['detained'])).'</span> <div class="list">';
            if($d['detained'] !=0)
              foreach($d['detained'] as $roll => $percent) {
                echo '<p>'.$roll.' ( '.$percent.' % )</p>';
              }
            echo '</div></div>';
          }
          echo '
            </div>
          </div>
          ';
        }
        else {
          echo "<h3> You have no classes added yet </h3>";
        }
      ?>
    </div>
  </div>
 </body>
</html>
