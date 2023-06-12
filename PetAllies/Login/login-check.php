<?php

error_reporting(0); //No error output in the website
session_start(); 


$host="localhost";  
$user="root";
$password="";
$db="petalliesadmin";

$data=mysqli_connect($host,$user,$password,$db); //this lets us connect to our database in mysql

if ($data==false) 
{
    die("connection error");
}

    if ($_SERVER["REQUEST_METHOD"]=="POST") //POST method is used because we are sending data to the server for processing and may modify the server's state
    {
        //This checks whatever the user type in the login page
        $name = $_POST['username'];

        $pass = $_POST['password'];
        // Whether they match to the database or not
        $sql="select * from user where username='".$name."' AND password='".$pass."' ";

        $result=mysqli_query($data,$sql); //this check whether they match the database

        $row=mysqli_fetch_array($result); //this gets the specific data in the table

        //Check the data if the its match the result in the database
        if ($row["usertype"]=="Administrator") 
        {
            $_SESSION['username']=$name; //This prevents the system from getting access using the localhost url only

            $_SESSION['usertype']="Administrator"; //This will help to pass only the specific data in the web

            header("location:../Content/admin.php");
        } 

        else if ($row["usertype"]=="SuperAdministrator") 
        {
            $_SESSION['username']=$name; //This prevents the system from getting access using the localhost url only
            
            $_SESSION['usertype']="SuperAdministrator"; //This will help to pass only the specific data in the web

            header("location:../Content/superadmin.php");
        }

        else {
            
            $message= "Username or password do not match";

            $_SESSION['loginMessage']=$message;

            header("location:login.php");
        }
    } 

?> 