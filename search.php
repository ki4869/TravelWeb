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
</head>

<body>

    <!-- navigation bar -->

    <?php

     require 'db_connect.php';
     require 'header.php';  
  ?>



    <!-- <h2>Search Results</h2> -->
    <!-- Search Results -->
    <div class="container my-3" id="maincontainer">
        <h1 class="py-3">Search results for <em>"<?php echo $_GET['search'],$_GET['search1']?>"</em></h1>

        <?php
$noresults = true;
$query1 = $_GET["search"];
$query2 = $_GET["search1"];
$query3=$_GET["search2"];
$sql = "select * from package_details where match (pkg_from, pkg_after) against ('$query1') AND match (pkg_from, pkg_after) against ('$query2')
AND DATE(pkg_fromdate) BETWEEN '$query3' AND '$query3';"; 
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result)){

$pkg_from = $row['pkg_from'];
$pkg_after = $row['pkg_after'];
$pkg_name = $row['pkg_name'];
$pkg_details =$row['pkg_details'];
$pkg_desc = $row['pkg_desc'];
$pkg_price = $row['pkg_price'];
$pkg_type=$row['pkg_type'];
$images=$row['images'];
 $sno = $row['sno'];
            
$noresults = false;

echo '<div class="row row-cols-2 row-cols-md-3 g-4 mt-1">
<div class="col">
    <div class="card" style="width:18rem;">
        <img src="/travelweb/img/'.$images.'.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">'.$pkg_name.'</h5>
            <p class="card-text">'.$pkg_desc.'</p>
            <p>'.$pkg_type.'</p>
            <p>Rs.'.$pkg_price.'/- per person</p>
        </div>
        <a href="/travelweb/gujurat.php?id='.$sno.'">Read More</a>
    </div>
</div>';
}
if ($noresults){
  echo 'No package available at this date found';
}        




?>







        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
        </script>

</body>

</html>