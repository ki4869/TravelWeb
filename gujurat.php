<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Travelz</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans&family=Roboto:wght@100&display=swap" rel="stylesheet">
</head>
<style>
*{
    font-family: 'Noto Sans', sans-serif;

}
    </style>

<body>

    <!-- navigation bar -->

    <?php

     require 'db_connect.php';
     require 'header.php';  
  ?>

    <?php
$id = $_GET['id'];
$sql = "SELECT * FROM `package_details` WHERE sno=$id;";
$result = mysqli_query($conn, $sql); 
while($row = mysqli_fetch_assoc($result)){

  $pkg_name = $row['pkg_name'];
  $pkg_details =$row['pkg_details'];
  $pkg_fromdate =$row['pkg_fromdate'];
  $pkg_todate =$row['pkg_todate'];
  $sno = $row['sno'];
  $day_one =$row['day_one'];
  $day_two =$row['day_two'];
  $day_three =$row['day_three'];
  $day_four =$row['day_four'];
  $images =$row['images'];
  $images1 =$row['images1'];
  $images2 =$row['images2'];
  $images3 =$row['images3'];
  $images4 =$row['images4'];
  $plane =$row['plane'];
  $flight_info=$row['flight_info'];
  $hotelname=$row['hotelname'];

  //  echo '<img src="/travelweb/img/gujuratday'.$sno.'.jpg" alt="" style="width:100px;">';



  $_SESSION['pkg_name'] =  $pkg_name;



  

}

  
  
  ?>
    <div class="container">
        <h2><?php echo $pkg_name; ?></h2>

        <p><?php  ?></p>
        <!-- <img src="/travelweb/img/flight.jpg"  alt=""> -->

        <!-- <img src="/travelweb/img/swift.jpg" alt="" style="width:100px;"> -->
        <div class="row">
            <div class="col-4">
                <div id="list-example" class="list-group">
                      <a class="list-group-item list-group-item-action" href="#list-item-1"><?php echo $pkg_details;?></a>
                     <!-- <a class="list-group-item list-group-item-action" href="#list-item-2"></a>
                     <a class="list-group-item list-group-item-action" href="#list-item-3"></a>   -->
                    <a class="list-group-item list-group-item-action" href="#list-item-3"><?php 
                     $newDate = date("d-m-Y", strtotime($pkg_fromdate));
                    echo 'Package Starts From ';
                    echo $newDate;?><br>to<br> <?php $newDate = date("d-m-Y", strtotime($pkg_todate)); 
                    echo $newDate; ?></a>
                   <?php echo' <a href="/travelweb/book.php?id='.$sno.'"  style="margin-top: 20px;margin-left:22px;border:2px solid black;text-decoration:none;width:124px;background-color:#5a5adb;color:white;">Book Now</a>'; ?>
                    <!-- <a href="#" alt=" " style="margin-top: 20px;margin-left: 22px;" >Book Now</a> -->
                </div>
            </div>
            <div class="col-8">
                <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-smooth-scroll="true"
                    class="scrollspy-example" tabindex="0">
                    <h4 id="list-item-1"></h4>



                    
</div>


                    <!-- <?php //echo '<img src="/travelweb/img/'.$images.'" alt="" style="width:700px;">'; ?> -->
                    <p style="font-size:40px;"><?php echo $flight_info; ?></p>
                    <p><?php echo $day_one; ?></p>


                    <!-- <div class="card" style="width: 18rem;"> -->
                     <!-- <?php// echo '<img src="/travelweb/img/'.$images4.'" class="card-img-top" alt="" style="width:285px;">'; ?>  -->
         <!-- <div class="card-body">
      <p class="card-text">
    </div> -->
<!-- </div> -->

<div class="container">
  <div class="row justify-content-end">
    <div class="col-md-6">
<div class="card" style="width: 18rem; margin-top:-273px;">
             <!-- <?php// echo '<img src="/travelweb/img/'.$images3.'" class="card-img-top" alt="" style="width:285px;">'; ?> -->
         <div class="card-body">
      <p class="card-text"><h4><?php echo $hotelname; ?></h4>
                    <p></p></p>
    </div>
</div>
</div>
</div>
</div>
                  

                    
                    <!-- <?php //echo '<img src="/travelweb/img/'.$images3.'" alt="" style="width:300px;">'; ?> -->

                    <h4 id="list-item-2"></h4>
                    <!-- <?php// echo '<img src="/travelweb/img/'.$images1.'" alt="" style="width:700px;">'; ?> -->
                    <p><?php echo $day_two;?></p>
                    <h4 id="list-item-3"></h4>
                    <!-- <?php //echo '<img src="/travelweb/img/'.$images2.'" alt="" style="width:700px;">'; ?> -->
                    <p>
                    <p><?php echo $day_three;?></p>
                    <p><?php echo $day_four;?></p>


                </div>
            </div>
        </div>










    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>