<?php

require '../Connection/connect.php';

?>

<!Doctype HTML>
<html>

<head>
  <title></title>
  <link rel="stylesheet" href="../MyStyles/adminstyle.css" type="text/css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!--Latest/Update Kit Fontawesome-->
  <script src="https://kit.fontawesome.com/acd6544335.js" crossorigin="anonymous"></script>

  <style type="text/css">
    .btn {
      padding: 5px;
      text-decoration: none;
    }

    .btn-danger {
      background-color: lightcoral;
    }

    .btn-primary {
      background-color: lightskyblue;
    }

    .text-light {
      text-decoration: none;
      color: #fff;
    }

  </style>
</head>

<body>

  <div id="mySidenav" class="sidenav">
    <p class="logo"><span>P</span>et-Allies</p>
    <a href="../Content/admin.php" class="icon-a"><i class="fa fa-dashboard icons"></i> &nbsp;&nbsp;Dashboard</a>
    <a href="../PetInformation/petinfodisplay.php" class="icon-a"><i class="fa-solid fa-paw icons"></i> &nbsp;&nbsp;Pet Information</a>
    <a href="../PetMonitoring/monitoring.php" class="icon-a"><i class="fa-solid fa-staff-snake icons"></i> &nbsp;&nbsp;Pet Monitoring</a>
    <a href="../SalesRep/monthlySR.php" class="icon-a"><i class="fa-solid fa-money-bill icons"></i> &nbsp;&nbsp;Sales Report</a>
    <a href="display_inventory.php" class="icon-a"><i class="fa fa-tasks icons"></i> &nbsp;&nbsp;Inventory</a>
    <a href="../Login/logout.php" class="icon-a"><i class="fa fa-user icons"></i> &nbsp;&nbsp;Logout</a>

  </div>
  <div id="main">

    <div class="head">
      <div class="col-div-6">
        <span style="font-size:30px;cursor:pointer; color: white;" class="nav">&#9776; Dashboard</span>
        <span style="font-size:30px;cursor:pointer; color: white;" class="nav2">&#9776; Dashboard</span>
      </div>

      <div class="col-div-6">
        <div class="profile">

          <img src="../Content/Chanel.jpg" class="pro-img" />
          <p>Chanel<span>Pawministrator</span></p>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
          $(".nav").click(function() {
            $("#mySidenav").css('width', '70px');
            $("#main").css('margin-left', '70px');
            $(".logo").css('visibility', 'hidden');
            $(".logo span").css('visibility', 'visible');
            $(".logo span").css('margin-left', '-10px');
            $(".icon-a").css('visibility', 'hidden');
            $(".icons").css('visibility', 'visible');
            $(".icons").css('margin-left', '-8px');
            $(".nav").css('display', 'none');
            $(".nav2").css('display', 'block');
          });

          $(".nav2").click(function() {
            $("#mySidenav").css('width', '300px');
            $("#main").css('margin-left', '300px');
            $(".logo").css('visibility', 'visible');
            $(".icon-a").css('visibility', 'visible');
            $(".icons").css('visibility', 'visible');
            $(".nav").css('display', 'block');
            $(".nav2").css('display', 'none');
          });
        </script>

        <div class="container">
          <button class="btn btn-primary"><a href="add_items.php" class="text-light">Add Items</a>
          </button>
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Item Name</th>
                <th scope="col">Category</th>
                <th scope="col">Stocks</th>
                <th scope="col">Expiration</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $sql = "select * from `item_inventory`"; //this selects all the data from mysql table with the table name petinfo
              $result = mysqli_query($conn, $sql); //this selects the data from the table
              if ($result) {
                /*This will print all the data available in the database*/
                while ($row = mysqli_fetch_assoc($result)) {
                  $id = $row['id'];
                  $itemname = $row['i_name'];
                  $category = $row['i_category'];
                  $stocks = $row['stocks'];
                  $expiration = $row['expiration'];
                  /* This is the data for the whole table */
                  echo '<tr>
                <th scope="row">' . $id . '</th> 
                <td>' . $itemname . '</td>
                <td>' . $category . '</td>
                <td>' . $stocks . '</td>
                <td>' . $expiration . '</td>
                <td>
                <button class="btn btn-primary"><a href="update.php? updateid=' . $id . '" class="text-light">Update</a></button>
                <button class="btn btn-danger" ><a href="delete.php? deleteid=' . $id . '" class="text-light">Delete</a></button>
                </td>
                </tr>';
                }
              }
              ?>

            </tbody>
          </table>
        </div>

</body>

</html>