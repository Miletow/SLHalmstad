<?php

session_start();
if(isset($_POST['loginSubmit'])){

  include 'dbh.inc.php';

  $uid = mysqli_real_escape_string($conn, $_POST['uid']);
  $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

    $CorrectPWD = "League123";
  //Error handlers
  //Check if inputs are empty
  if(empty($uid)|| empty($pwd)){
    header("Location: ../Admin.php?login=empty1");
    exit();
  }else if($pwd != $CorrectPWD){
            header("Location: ../Admin.php?login=error3");
            exit();
          }elseif($pwd == $CorrectPWD){
            //Login the user here
            $_SESSION['id'] = $uid;
            $_SESSION['u_uid'] = $pwd;
            header("Location: ../Admin.php?login=success");
            exit();
          }
  
}else{
    header("Location: ../Admin.php?login=error4");
    exit();
  }
