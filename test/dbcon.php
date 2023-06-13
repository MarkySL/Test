<?php
session_start();

$con = mysqli_connect('localhost','root', '', 'user');

if ($con == false) {
    die("Connection Error");
}

?>