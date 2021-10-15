<?php session_start(); 


include_once 'database.php';
include_once 'header.php'; 
include_once 'sidebar.php'; 
if (!isset($_SESSION['user'])||$_SESSION['role']!='Teacher') {
  # code...
  header('Location:./logout.php');
}
?>
<?php

 $sid =$fname =$lname = $classroom = $dob = $gender = $address = $parent=" ";
              

if(isset($_GET['update'])){
  $update = "SELECT * FROM student WHERE sid='".$_GET['update']."'";
  $result = $conn->query($update);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $sid = $row['sid'];
                $fname = $row['fname'];
                $lname = $row['lname'];
                $classroom = $row['classroom'];
$email = $row['email'];
                $dob = date_format(new DateTime($row['bday']),'m/d/Y');
                //echo $dob;
                $gender = $row['gender'];
                  $address = $row['address'];
                $parent=$row['parent'];
                
    }
}
}

?>


<!DOCTYPE html>

<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Student</title><link rel="icon" href="../img/favicon2.png">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

  <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <link rel="stylesheet" href="bower_components/select2/dist/css/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-green sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
 

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Fees
        <small>Fees Details</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Fees</a></li>
        <li class="active">Details</li>
      </ol>
    </section>

    <!-- Main content -->


    <section class="content">

 <div class="row">



          
          <?php // } ?>

          <div class="col-xs-12">


          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">All Students</h3>
            </div>
            
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Student No</th>
                 
                  <th>Full Name</th>
                   <th>Course</th>
                  <th>Total Billed</th>
                  <th>Total Paid</th>
                  <th>Total Balance</th>
                  
                 
                  <th>Actions</th>
                  
                </tr>
                </thead>
                <tbody>


                  <?php

                  $sql89 = "SELECT * FROM fees";
                  $result3 = $conn->query($sql89);

                  if ($result3->num_rows > 0) {
                   // output data of each row
                     while($row = $result3->fetch_assoc()) {
                      $fid = $row["feeid"];
                      $nid = $row["sid"];
                      $suid = $row["sub_id"];
                      $total_billed = $row["total_billed"];
                      $total_paid = $row["total_paid"];
                      $total_balance = $row["total_balance"];
                       }
                    }

                    //echo $nid;

                  $sql99 = "SELECT * FROM student WHERE sid ='".$nid."'  ";
                  $resultsub = $conn->query($sql99);

                  if ($resultsub->num_rows > 0) {
                   // output data of each row
                     while($row = $resultsub->fetch_assoc()) {
                      $name = $row['fname'];
                      $lname = $row['lname'];
                      $course = $row['classroom'];

 
                      
                       }
                     }
                     


                  $sql50 = "SELECT  title FROM subject WHERE sid ='".$course."'  ";
                  $result5 = $conn->query($sql50);

                  if ($result5->num_rows > 0) {
                   // output data of each row
                     while($row = $result5->fetch_assoc()) {
                      $coname = $row['title'];
                      
                      
                       }
                     }

                  ?>
                  <tr>
                      <td><?php echo $nid ?> </td>
                      
                      <td><?php echo $name; echo $lname;  ?></td>
                      <td><?php echo $coname; ?></td>
                      <td> <?php echo  $total_billed;?></td>
                       <td><?php echo $total_paid;?></td>
                      <td><?php echo $total_balance;?></td>

                      <?php 

                  $sql = "SELECT * FROM fees";
                  $result6 = $conn->query($sql);

                  if ($result6->num_rows > 0) {
                   // output data of each row
                     while($row = $result6->fetch_assoc()) {
                      $fid = $row["feeid"];
                      echo "<td><a href='update_fees.php?update=". $row["feeid"]."'><small class='label  bg-orange'>Update</small></a></td>";
                       }
                                  }

                      ?>
                      


                      </tr>


                </tbody>
                <tfoot>
                 
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
            
          </div>
          <!-- /.box -->

          

        </div>

      <!--------------------------
        | Your Page Content Here |
        -------------------------->
   
    </section>

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
 <?php include_once 'footer.php'; ?>
  
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- Select2 -->
<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>


<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- bootstrap color picker -->
<script src="bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="plugins/timepicker/bootstrap-timepicker.min.js"></script>

<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Page script -->

<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>


<script>   $('.select2').select2()
  $('#datepicker').datepicker({
      autoclose: true
    });


        
            var r = document.getElementById("finance"); 
            r.className += "active"; 
           
    </script>
<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>
</html>