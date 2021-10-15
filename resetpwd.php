<?php session_start(); 


include_once 'database.php';
if(isset ($_SESSION['uid'])){

if(isset($_POST['changepwd']))
{
 
    if (empty($_POST['password'])||empty($_POST['pwd2'])||empty($_POST['pwd2confirm'])){
      header("location:./resetpwd.php?error=Please fill in the above fields");
      exit();
    }
    
    else{
          if($_POST['pwd2']!== $_POST['pwd2confirm']){
              header("location:./resetpwd.php?error=The passwords do not match");
              exit();
          }
          elseif(($_POST['password']== $_POST['pwd2'])||($_POST['password']== $_POST['pwd2confirm'])){
            header("location:./resetpwd.php?error=The old password and new password should not be the same");
            exit();
          }
              else{
		$pwd1=test_input($_POST['password']);
		$pwd2=test_input($_POST['pwd2']);
    $pwd3= test_input($_POST["pwd2confirm"]);
    $activeuser=$_SESSION['email'];
    $date=date("Y-m-d h:i:sa");
		$sql = "SELECT password FROM user WHERE email= '".$activeuser."'"; 
		$result = mysqli_query($conn, $sql); 
		
		if($row=mysqli_fetch_array($result)){
            
		  if($pwd1==$row['password']){
           // $pwd2x= password_hash($pwd2,PASSWORD_DEFAULT);
              $sql2="UPDATE user SET password='".$pwd2."' WHERE email='".$activeuser."'";
              if(mysqli_query($conn, $sql2))
              {
              	header("location:./resetpwd.php?error=Update Success");
			    exit();
              }
              else{	  
                header("location:./resetpwd.php?error=Something went wrong please try again".mysqli_error($conn));
                exit();
                
              } 
		 }
		 else{	  
			header("location:./resetpwd.php?error=Incorrect details");
			exit();
			
		  }
        }
		
		
		else{
		  header("location:./resetpwd.php?error=Please Sign Up Or Log In If you have an account");
		  exit();
		}
		  
	  
	}


}
  }
}
	

else{
	
	header("location:./login.php");
	exit();
}
function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
$conn->close();
	 
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
  <title> Dashboard</title><link rel="icon" href="../img/favicon2.png">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">

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

 <!-- Main Header -->
 <?php include_once 'header.php'; ?>
  <!-- Left side column. contains the logo and sidebar -->
  <?php include_once 'sidebar.php'; ?>
  <div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  <section class="content-header">
      <h1>
       Change Password
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> School</a></li>
        <li class="active">Stat</li>
      </ol>
    </section>

    <section class="content">
    <div class="row">
        <div class="col-lg-6 m-auto">
            <div class="card bg-light mt-5">
                <div class="card-body">
                    <form method="POST" name="changepwd">
                    <input type="password" name="password" placeholder="Enter your current password" class="form-control mb-2">
                    <input type="password" name="pwd2" placeholder="Enter a new password" class="form-control mb-2">
                    <input type="password" name="pwd2confirm" placeholder="Confirm the new password" class="form-control mb-2">
                    
                    <button class="btn btn-success" name="changepwd" class="pt-3" onclick="check()">CHANGE PASSWORD</button>
                    
                </form>
                
                <?php
                    if(isset($_GET['error'])){
                    ?>
                <div class="alert alert-danger"><?php echo $_GET['error'] ?></div>
                <?php
                }				
    ?>
              
                     
                    
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>
    <?php include_once 'footer.php'; ?>
    <script> 
               function check(){
                if((document.changepwd.password.value.length=="")||(document.changepwd.pwd2.value.length=="")||(document.changepwd.pwd2confirm.value.length==""))
                {
                  alert("Please fill in all the fields");

                }
                if((document.changepwd.pwd2.value!==document.changepwd.pwd2confirm.value))
                {
                  alert("The passwords do not match");

                }

               }
     </script>  
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


