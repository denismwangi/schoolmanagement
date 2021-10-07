<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
     

      <!-- search form (Optional) -->
     
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header"> Dashboard</li>
        <!-- Optionally, you can add icons to the links -->
        <!-- <li class="active"><a href="#"><i class="fa fa-link"></i> <span>Link</span></a></li>
        <li><a href="#"><i class="fa fa-link"></i> <span>Another Link</span></a></li>-->
        <li id="stat"><a href="./dashboard.php"><i class="fa fa-bar-chart-o"></i> <span>Statistics</span> </a></li>

        <?php if($_SESSION['role']=='teacher'){ ?>
        <li id="new"><a href="./student.php"><i class="fa fa-users"></i> <span>Student</span> </a></li>
        <li id="teacher"><a href="./teacher.php"><i class="fa  fa-black-tie"></i> <span>Teacher</span> </a></li>
         <li id="parent"><a href="./accountant.php"><i class="fa  fa-male"></i> <span>Accountant</span> </a></li>
        <li id="parent"><a href="./parent.php"><i class="fa  fa-female"></i> <span>Parents</span> </a></li>
        <li id="finance"><a href="./finance.php"><span><i class="fa fa-credit-card-alt" aria-hidden="true"></i> <span>Fees</span> </a></li>

        <li id="subject"><a href="./subject.php"><i class="fa fa-book"></i> <span>Courses</span> </a></li>
        <li id="class"><a href="./class.php"><i class="fa fa-bank"></i> <span>Class Room</span> </a></li>
        <li id="schedule"><a href="./schedule.php"><i class="fa fa-calendar-o"></i> <span>Schedule</span> </a></li>
        <li id="attendance"><a href="./attendance.php"><i class="fa  fa-check"></i> <span>Attendance</span> </a></li>
        <li id="exam"><a href="./exam.php"><i class="fa fa-line-chart"></i> <span>Exam</span> </a></li>
         <li id="examresults"><a href="./examresults.php"><i class="fa fa-graduation-cap"></i> <span>Exam Results</span> </a></li>
        <li id="user"><a href="./user.php"><i class="fa fa-user-plus"></i> <span>Users</span> </a></li>
        <li id="notice"><a href="./notice.php"><i class="fa fa-envelope-o"></i> <span>Notice</span> </a></li>
           <li id="uploads"><a href="./uploads.php"><i class="fa fa-archive" aria-hidden="true"></i> <span>Uploads</span> </a></li>
              <li id="tutorials"><a href="./tutorials.php"><i class="fa fa-video-camera" aria-hidden="true"></i> <span>Tutorials</span> </a></li>
      <?php }elseif ($_SESSION['role']=='parent') {
          ?>
      <li id="student-par"><a href="./student-par.php"><i class="fa fa-users"></i> <span>Student</span> </a></li>
      <li id="notice-role"><a href="./notice-role.php"><i class="fa fa-envelope-o"></i> <span>Notice</span> </a></li>
      <li id="examresults-par"><a href="./examresults-par.php"><i class="fa fa-graduation-cap"></i> <span>Exam Results</span> </a></li>
          <?php

      }elseif ($_SESSION['role']=='student') { ?>

      <li id="notice-role"><a href="./notice-role.php"><i class="fa fa-envelope-o"></i> <span>Notice</span> </a></li>
      <li id="examresults-stu"><a href="./examresults-stu.php"><i class="fa fa-graduation-cap"></i> <span>Exam Results</span> </a></li>   
      <li id="schedule-stu"><a href="./schedule-stu.php"><i class="fa fa-calendar-o"></i> <span>Schedule</span> </a></li>


<?php}
    elseif ($_SESSION['role']=='finance') { ?>

      
      <li id="finance"><a href="./finance.php"><i class="fa fa-credit-card-alt" aria-hidden="true"></i> <span>Fees</span> </a></li>

<?php

      }?>
      


      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>