<?php

session_start();

    if (!isset($_SESSION['username'])) 
    {
        header("location:../Login/login.php");
    }
    /* This prevents any usertype to access the superadmin 
    from changing the url localhost link because they will be redirected to the login page*/
    elseif ($_SESSION['usertype']=='Administrator') 
    {
        header("location:../Login/login.php");  
    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Admin</title>
</head>
<body>
    
    <h1>I am the Super Admin</h1>
    
    <a href="../Login/logout.php">Logout</a>

</body>
</html>