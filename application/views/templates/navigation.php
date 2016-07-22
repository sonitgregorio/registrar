<?php
  /*$result   = getEmpInfo($_SESSION['id']);
  $row      = mysql_fetch_row($result);
  $name     = $row[2]." ".$row[4];*/
 ?>
<div class="container-fluid main-body">

    <!-- ============================== header & navigation ============================ -->
    <div class="row">
        <nav class="navbar navbar-inverse nav-head" role="navigation">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#header1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div>
                        <img class="img-logo" src="<?php echo base_url('assets/images/LC Logo.jpg'); ?>"><h2 class="hd-title"><a class="title" href="<?php echo base_url(); ?>">Registrar Management System</a></h2>
                    </div>
                </div>

                <div class="collapse navbar-collapse pull-right" id = "header1">
                    <ul class="nav navbar-nav top-sign navbar-right">
                        <li class="logout"><a href="<?php echo base_url('index.php/logout'); ?>">Logout</a></li>
                    </ul>
                    <p class="navbar-text top-sign2 navbar-right">SY: &nbsp;&nbsp;&nbsp;&nbsp; Term:</p>
                  <p class="navbar-text top-sign2 navbar-right">Signed in as 
                      <a href="index.php?page=home" class="navbar-link"><?php //echo $_SESSION['uname']; ?></a>
                    </p>
                  <p class="navbar-text navbar-right">
                    <img src="<?php echo base_url('assets/images/sample.jpg'); ?>" alt="<?php //echo $name; ?>" class="img-rounded profile_pic">
                  </p>
                </div>
            </div>
        </nav>
    </div>
    
    <div class="row">
        <div class="col-md-3 side-bar-menu hidden-print">
            <div class="collapse navbar-collapse" >
                <div class="panel-heading" style="border-radius:0px"><h4><?php echo "Dashboard"?></h4></div>
                              
                  <li class="list-group-item">
                      <a class="menu" href="index.php?page=deanTeachingLoad">
                          <span class="glyphicon glyphicon-tasks"></span>&nbsp; &nbsp; Teaching Load
                      </a>
                  </li>
                  <li class="list-group-item">
                      <a class="menu" href="index.php?page=deanPreEnrolment">
                          <span class="glyphicon glyphicon-comment"></span>&nbsp; &nbsp; Pre-Enrolment Evaluation
                      </a>
                  </li>
            </div>
        </div>
    </div>

    <!-- =============================================================================== -->
    <!-- changing semester modal -->
    