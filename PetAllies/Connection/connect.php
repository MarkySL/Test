<?php
session_start();

$conn=new mysqli('localhost','root','','petalliesadmin');

if ($conn==false) 
{
  die("Connection Error");
}


?>