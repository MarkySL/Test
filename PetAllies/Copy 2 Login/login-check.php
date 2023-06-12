<?php

session_start(); 

if(isset($_POST['uname']) && 
   isset($_POST['pass'])){

    include "../Login/db_con.php";

    $uname = $_POST['uname'];
    $pass = $_POST['pass'];

    $data = "uname=".$uname;
    
    if(empty($uname)){
    	$em = "User name is required";
    	header("Location:login.php?error=$em&$data");
	    exit;
    }else if(empty($pass)){
    	$em = "Password is required";
    	header("Location:login.php?error=$em&$data");
	    exit;
    }else {

    	$sql = "SELECT * FROM user WHERE username = ?";
    	$stmt = $conn->prepare($sql);
    	$stmt->execute([$uname]);

      if($stmt->rowCount() == 1){
          $user = $stmt->fetch();

          $username =  $user['username'];
          $password =  $user['password'];
          $email =  $user['email'];
          $id =  $user['id'];
          if($username === $uname){
             if(password_verify($pass, $password)){
                 $_SESSION['id'] = $id;
                 $_SESSION['email'] = $email;

                 header("Location:../Connection/admin.php");
                 exit;
             }else {
               $em = "Incorrect User name or password";
               header("Location:login.php?error=$em&$data");
               exit;
            }

          }else {
            $em = "Incorrect User name or password";
            header("Location:login.php?error=$em&$data");
            exit;
         }

      }else {
         $em = "Incorrect User name or password";
         header("Location:login.php?error=$em&$data");
         exit;
      }
    }


}else {
	header("Location:login.php?error=error");
	exit;
}

?>