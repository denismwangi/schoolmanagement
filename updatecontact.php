<?php session_start(); 
include_once 'database.php';
      if(isset($_POST['updatecontact'])){
      if(!empty($_POST['contact'])){
      
        $sql3="UPDATE student SET contact='".$_POST['contact']."' WHERE sid='".$_SESSION['uid']."'";
        $result3=mysqli_query($conn,$sql3);
        if($result3){
          //echo'<script>alert("Update Success")</script>';
          header("location:./dashboard.php?error=Update Success");
          exit();
        }
        else{
          header("location:./dashboard.php?error=Something went wrong please try again later");
          exit();
        }
      }
      else{
        echo'<script>alert("Please fill in the contact field")</script>';
        header("location:./dashboard.php");
      }
      }
                   ?>