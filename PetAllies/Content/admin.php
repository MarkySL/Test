<?php
require '../Connection/connect.php';

if (!empty($_SESSION["id"])) {
  $id = $_SESSION["id"];
  $result = mysqli_query($conn,"select * from `user` where id = $id");
  $row = mysqli_fetch_assoc($result);
} else {
  header("location:../Login/login.php");
}


?>


<!Doctype HTML>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="../MyStyles/adminstyle.css" type="text/css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!--Latest/Update Kit Fontawesome-->
  <script src="https://kit.fontawesome.com/acd6544335.js" crossorigin="anonymous"></script>
</head>


<body>
	  <div id="mySidenav" class="sidenav">
      <p class="logo"><span>P</span>et-Allies</p>
      <a href="admin.php" class="icon-a"><i class="fa fa-dashboard icons"></i> &nbsp;&nbsp;Dashboard</a>
      <a href="../PetInformation/petinfodisplay.php"class="icon-a"><i class="fa-solid fa-paw icons"></i> &nbsp;&nbsp;Pet Information</a>
      <a href="../PetMonitoring/monitoring.php"class="icon-a"><i class="fa-solid fa-staff-snake icons"></i> &nbsp;&nbsp;Pet Monitoring</a>
      <a href="../SalesRep/monthlySR.php"class="icon-a"><i class="fa-solid fa-money-bill icons"></i> &nbsp;&nbsp;Sales Report</a>
      <a href="../Inventory/display_inventory.php"class="icon-a"><i class="fa fa-tasks icons"></i> &nbsp;&nbsp;Inventory</a>
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

		    <img src="Chanel.jpg" class="pro-img" />
		    <p>Chanel<span>Pawministrator</span></p>
	    </div>
      </div>
	      <div class="clearfix"></div>
      </div>

	    <div class="clearfix"></div>
	    <br/>
      <!--Card Icons-->
      <div class="col-div-3">
        <div class="box">
          <p>67<br/><span>Clients</span></p>
          <i class="fa-solid fa-paw box-icon"></i>
        </div>
      </div>
      <div class="col-div-3">
        <div class="box">
          <p>88<br/><span>Vaccines</span></p>
          <i class="fa-solid fa-syringe box-icon"></i>
        </div>
      </div>
      <div class="col-div-3">
        <div class="box">
          <p>55<br/><span>Stocks</span></p>
          <i class="fa-solid fa-warehouse box-icon"></i>
        </div>
      </div>
      <div class="col-div-3">
        <div class="box">
          <p>78<br/><span>Meds</span></p>
          <i class="fa-solid fa-suitcase-medical box-icon"></i>
        </div>
      </div>
      <div class="clearfix"></div>
      <br/><br/>
      <div class="col-div-8">
          <div class="box-8">
            <div class="content-box">
                <p>Updated List Clients<a href="#"><span>See All</span></a></p>
                <table>
                  <tr>
                    <th>Clients</th>
                    <th>Dog Name</th>
                    <th>Breed</th>
                  </tr>
                  <tr>
                    <td>Andrew Ramirez</td>
                    <td>Brownie</td>
                    <td>German Shepherd</td>
                  </tr>
                  <tr>
                    <td>Keysha Rodriguez</td>
                    <td>Truffle</td>
                    <td>Golden Retriever</td>
                  </tr>
                  <tr>
                    <td>Emman Salvacion</td>
                    <td>Trixie</td>
                    <td>Rottweiler</td>
                  </tr>
                  <tr>
                    <td>Justin Svenson</td>
                    <td>Bettle</td>
                    <td>American Bully</td>
                  </tr> 
                </table>
            </div>
	        </div>
	    </div>
      <!--Total Sales-->
      <div class="col-div-4">
             <div class="box-4">
                <div class="content-box">
                  <p>Total Sale<a href="#"><span>See All</span></a></p>

                  <div class="circle-wrap">
                    <div class="circle">
                        <div class="mask full">
                          <div class="fill"></div>
                        </div>
                        <div class="mask half">
                          <div class="fill"></div>
                        </div>
                        <div class="inside-circle"> 70% </div>
                    </div>
                  </div>
                </div>
              </div>
      </div>
        
        <div class="clearfix"></div>
    </div>


  <!--This is the Javascript for the sidebar panel click to open/close function-->
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
</body>

</html>