<?php
include '../Connection/connect.php';
/* This will delete a whole row from the table */
if (isset($_GET['deleteid'])) {
    $id=$_GET['deleteid'];

    $sql="delete from `petinfo` where id=$id";
    $result=mysqli_query($con,$sql);

    if ($result) {
    
        header("location:petinfodisplay.php");
    
    } else {
        die(mysqli_error($con));
    }
}

?>