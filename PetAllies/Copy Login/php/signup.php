<?php 

if(isset($_POST['fname']) && 
   isset($_POST['uname']) && 
   isset($_POST['pass']) &&
   isset($_POST['phone'])){

    include "../db_conn.php";

    $fname = $_POST['fname'];
    $uname = $_POST['uname'];
    $pass = $_POST['pass'];
	$phone = $_POST['phone'];


    $data = "fname=".$fname."&uname=".$uname;
    
    if (empty($fname)) {
    	$em = "Full name is required";
    	header("Location: ../index.php?error=$em&$data");
	    exit;
    }else if(empty($uname)){
    	$em = "User name is required";
    	header("Location: ../index.php?error=$em&$data");
	    exit;
    }else if(empty($pass)){
    	$em = "Password is required";
    	header("Location: ../index.php?error=$em&$data");
	    exit;
	}else if(empty($phone)){
		$em = "Password is required";
		header("Location: ../index.php?error=$em&$data");
		exit;
    }else {

    	// hashing the password
    	/*$pass = password_hash($pass, PASSWORD_DEFAULT);*/

    	$sql = "INSERT INTO users(fname, username, password, phone) 
    	        VALUES(?,?,?)";
    	$stmt = $conn->prepare($sql);
    	$stmt->execute([$fname, $uname, $pass, $phone]);

    	header("Location: ../index.php?success=Your account has been created successfully");
	    exit;
    }


}else {
	header("Location: ../index.php?error=error");
	exit;
}
