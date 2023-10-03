<?php 
require 'db_connect.php';
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
  $loggedin= true;
}
else{
  $loggedin = false;
}


// $id=$_GET['id'];
 $sql = "SELECT * FROM `package_details`;";
 $result = mysqli_query($conn,$sql); 
 while($row = mysqli_fetch_assoc($result)){

//   $pkg_name = $row['pkg_name'];
   $sno = $row['sno'];
// //   $pkg_details =$row['pkg_details'];
//    $pkg_fromdate =$row['pkg_fromdate'];
//    $pkg_todate =$row['pkg_todate'];
// //   $day_one =$row['day_one'];
// //   $day_two =$row['day_two'];
// //   $day_three =$row['day_three'];
// //   $images =$row['images'];
// //   $images1 =$row['images1'];
// //   $images2 =$row['images2'];
// //   $images3 =$row['images3'];
// //   $images4 =$row['images4'];
// //   $plane =$row['plane'];
// //   $pkg_from = $row['pkg_from'];
// // $pkg_after = $row['pkg_after'];
// // $pname=$row['pname'];
// // $page=$row['page'];


  }


 echo '<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Travelz</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>';

    

   echo ' <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Travelz</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/travelweb/index.php">Home</a>
                    </li>';
                    
 
                    if(!$loggedin){
                   echo '<li class="nav-item">
                        <a class="nav-link" href="/travelweb/signup.php">Signup</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/travelweb/login.php">Login</a>
                    </li>';
                    }

                    if($loggedin){
                    echo '<li class="nav-item">
                        <a class="nav-link" style="margin-right:60rem;" href="/travelweb/viewtrips.php?id='.$sno.'">View Upcoming Trips</a>
                    </li>';
                    echo '<li class="nav-item">
                        <a class="nav-link"  href="#">Welcome '.$_SESSION['username'].'</a>
                    </li>';
                    echo '<li class="nav-item">
                    <a class="nav-link" href="/travelweb/logout.php">Logout</a>
                </li>';
                    }
                    
       echo   ' </ul>
            </div>
        </div>
    </nav>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>
</html>';

?>