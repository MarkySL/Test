<?php

require '../Connection/connect.php';

if (isset($_POST['add_items'])) {
    $itemname=$_POST['i_name']; //this data should match the name in the div form-group
    $category=$_POST['i_category']; //this data should match the name in the div form-group
    $stocks=$_POST['stocks']; //this data should match the name in the div form-group
    $expiration=$_POST['expiration']; //this data should match the name in the div form-group

    $sql="insert into item_inventory(i_name,i_category,stocks,expiration) values('$itemname','$category','$stocks','$expiration')"; // insert into will have the table column names and the value will have the dataname

    $result=mysqli_query($conn,$sql); //it will have the passing parameters which will be the connection data variable and the sql variable

    if ($result) 
    {
        header('location:display_inventory.php');
    } 
    else
    {
        echo("Failed Adding Data");
    }
  }

?>

<!Doctype HTML>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="../MyStyles/petinfostyle.css" type="text/css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!--Latest/Update Kit Fontawesome-->
  <script src="https://kit.fontawesome.com/acd6544335.js" crossorigin="anonymous"></script>

  <!--Stylesheet for Div Content-->
  <style type="text/css">
    
    label {
      display: inline-block;
      text-align: right;
      width: 100px;
      padding-top: 10px;
      padding-bottom: 10px;
      color: black;
    }

    h1 {
      color: wheat;
    }

    .content {
      background-color: whitesmoke;
      width: 400px;
      box-shadow: 0px 5px 10px skyblue;
    }
  </style>
</head>


<body>
	
	<div id="mySidenav" class="sidenav">
	<p class="logo"><span>P</span>et-Allies</p>
  <a href="../Content/admin.php" class="icon-a"><i class="fa fa-dashboard icons"></i> &nbsp;&nbsp;Dashboard</a>
  <a href="../PetInformation/petinfodisplay.php"class="icon-a"><i class="fa-solid fa-paw icons"></i> &nbsp;&nbsp;Pet Information</a>
  <a href="../PetMonitoring/monitoring.php"class="icon-a"><i class="fa-solid fa-staff-snake icons"></i> &nbsp;&nbsp;Pet Monitoring</a>
  <a href="../SalesRep/monthlySR.php"class="icon-a"><i class="fa-solid fa-money-bill icons"></i> &nbsp;&nbsp;Sales Report</a>
  <a href="display_inventory.php"class="icon-a"><i class="fa fa-tasks icons"></i> &nbsp;&nbsp;Inventory</a>
  <a href="../Login/logout.php"class="icon-a"><i class="fa fa-user icons"></i> &nbsp;&nbsp;Logout</a>

</div>
<div id="main">

	<div class="head">
		<div class="col-div-6">
<span style="font-size:30px;cursor:pointer; color: white;" class="nav"  >&#9776; Dashboard</span>
<span style="font-size:30px;cursor:pointer; color: white;" class="nav2"  >&#9776; Dashboard</span>
</div>
	
	<div class="col-div-6">
	<div class="profile">

		<img src="../Content/Chanel.jpg" class="pro-img" />
		<p>Chanel<span>Pawministrator</span></p>
	</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>

  $(".nav").click(function(){
    $("#mySidenav").css('width','70px');
    $("#main").css('margin-left','70px');
    $(".logo").css('visibility', 'hidden');
    $(".logo span").css('visibility', 'visible');
     $(".logo span").css('margin-left', '-10px');
     $(".icon-a").css('visibility', 'hidden');
     $(".icons").css('visibility', 'visible');
     $(".icons").css('margin-left', '-8px');
      $(".nav").css('display','none');
      $(".nav2").css('display','block');
  });

$(".nav2").click(function(){
    $("#mySidenav").css('width','300px');
    $("#main").css('margin-left','300px');
    $(".logo").css('visibility', 'visible');
     $(".icon-a").css('visibility', 'visible');
     $(".icons").css('visibility', 'visible');
     $(".nav").css('display','block');
      $(".nav2").css('display','none');
 });

</script>

<div class="container">
    <center>
      <h1>PET ALLIES Animal Clinic</h1>
    <div class="content">
      <form action="#" method="POST">

        <div class="form-group">
          <label>Item Name:</label>
          <input type="text" class="form-control" placeholder="Enter item name" name="i_name">
        </div>

        <div class="form-group">
          <label>Category:</label>
          <input type="text" class="form-control" placeholder="Enter item category" name="i_category">
        </div>

        <div class="form-group">
          <label>Stocks:</label>
          <input type="number" class="form-control" placeholder="#55" name="stocks">
        </div>

        <div class="form-group">
          <label>Expiration:</label>
          <input type="date" class="form-control" name="expiration">
        </div>

        <button type="submit" class="btn btn-primary" name="add_items">Add Item</button>
      </form>
    </div>
    </center>
  </div>

</body>

</html>
