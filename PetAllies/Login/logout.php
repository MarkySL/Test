<?php
require '../Connection/connect.php';

session_start();
session_destroy();

header("location:login.php");

?>