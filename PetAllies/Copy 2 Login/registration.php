<?php 

if(isset($_POST['uname']) && 
   isset($_POST['phone']) && 
   isset($_POST['email']) &&
   isset($_POST['pass'])){

    include "../Login/db_con.php";

    $uname = $_POST['uname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
	$pass = $_POST['pass'];


    $data = "email=".$email."&uname=".$uname;
    
    if(empty($uname)){
    	$em = "User name is required";
    	header("Location:../Login/usercreate.php?error=$em&$data");
	    exit;
    }else if(empty($phone)){
		$em = "Phone is required";
		header("Location:../Login/usercreate.php?error=$em&$data");
		exit;
    }else if(empty($email)){
    	$em = "Email is required";
    	header("Location:../Login/usercreate.php?error=$em&$data");
	    exit;
	}else if(empty($pass)){
    	$em = "Password is required";
    	header("Location:../Login/usercreate.php?error=$em&$data");
	    exit;
	}else {

    	// hashing the password
    	/*$pass = password_hash($pass, PASSWORD_DEFAULT);*/

    	$sql = "INSERT INTO `user`(username, email, phone, password) 
    	        VALUES(?,?,?,?)";
    	$stmt = $conn->prepare($sql);
    	$stmt->execute([$uname, $email, $phone, $pass]);

    	header("Location:../Login/usercreate.php?success=Your account has been created successfully");
	    exit;
    }


}else {
	header("Location:../Login/usercreate.php?error=error");
	exit;
}
