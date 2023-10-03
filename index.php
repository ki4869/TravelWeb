<?php
require 'db_connect.php';

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
        <link rel="stylesheet" href="/travelweb/css/style.css">
</head>

<body>
<?php require 'header.php';
  ?>

    <!-- navigation bar

    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Travelz</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled"></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav> -->

    <!-- form controls -->

    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            <form class="row g-4 mt-5 ml-5" style="margin-left:70px;" method="get" action="search.php">
                <div class="col-sm-6 col-md-6 col-xl-5">
                    <div class="input-group-icon">
                        <!-- <label class="form-label visually-hidden" for="inputAddress1">From</label> -->
                        <label>From</label>
                        <input class="form-control input-box form-voyage-control" id="inputAddress1" type="search" name="search"
                            placeholder="From where" /><span class="nav-link-icon text-800 fs--1 input-box-icon"><i
                                class="fas fa-map-marker-alt"></i></span>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-xl-5">
                    <div class="input-group-icon">
                        <!-- <label class="form-label visually-hidden" for="inputAddress2">To</label> -->
                        <label>To</label>
                        <input class="form-control input-box form-voyage-control" id="inputAddress2" type="search"
                            placeholder="To where" name="search1" /><span class="nav-link-icon text-800 fs--1 input-box-icon"><i
                                class="fas fa-map-marker-alt"> </i></span>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-xl-5">
                    <div class="input-group-icon">
                        <label>Travelling Date</label>
                        <input class="form-control input-box form-voyage-control" id="inputdateOne" type="date" name="search2" /><span
                            class="nav-link-icon text-800 fs--1 input-box-icon"><i class="fas fa-calendar"></i></span>
                    </div>
                </div>
                
                 <!-- <div class="col-sm-6 col-md-6 col-xl-5">
                    <div class="input-group-icon">
                        <label class="form-label visually-hidden" for="inputPersonOne">Adults</label>
                        <p>Adults</p>
                        <span class="minus">-</span>
                        <span class="num" >01</span>
                        <span class="plus">+</span>
                    </div>
                </div> -->
                <div class="col-12 col-xl-10 col-lg-12 d-grid mt-6">
                    <button class="btn btn-secondary" type="submit">Search Packages</button>
                </div>
            </form>
        </div>


        <!-- travel details cards -->
        <div class="container">

            <!-- fetch records -->

            <?php   
        //     $sql = "SELECT * FROM `package_details`";
        //     $result = mysqli_query($conn, $sql); 
        //     while($row = mysqli_fetch_assoc($result)){

        //       $pkg_name = $row['pkg_name'];
        //       $pkg_desc = $row['pkg_desc'];
        //       $pkg_price = $row['pkg_price'];
        //       $sno = $row['sno'];
            
              
          
        //       echo '<div class="row row-cols-2 row-cols-md-3 g-4 mt-1">
        //       <div class="col">
        //           <div class="card" style="width:18rem;">
        //               <img src="/travelweb/img/'.$sno.'.jpg" class="card-img-top" alt="...">
        //               <div class="card-body">
        //                   <h5 class="card-title">'.$pkg_name.'</h5>
        //                   <p class="card-text">'.$pkg_desc.'</p>
        //                   <p>•3 Nights • 4 Days</p>
        //                   <p>Rs.'.$pkg_price.'/- per person</p>
        //               </div>
        //               <a href="/travelweb/gujurat.php?id='.$sno.'">Read More</a>
        //           </div>
        //       </div>
        //     ';
              
        //   }  


?>


            <!-- <div class="col">
                    <div class="card">
                        <img src="/travelweb/img/goacover.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Goa Package</h5>
                            <p class="card-text">Escape on a fun-filled holiday with our Goa tour package that promises
                                you the most memorable time of your life. Your Goa tour itinerary will let you explore
                                the gems of North Goa and the calm and serene South Goa. As Goa is all about sun, sand,
                                and spices, you have everything to indulge in a vacation of your dreams. Set off for a
                                remarkable trip of your life by choosing a Goa vacation. </p>
                        </div>
                        <p>Rs.5000/- per person</p>
                        <p>•3 Nights • 4 Days</p>
                        <a href="#">Read More</a>
                    </div>
                </div> -->
            <!-- <div class="col">
    <div class="card">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div> -->
        </div>
    </div>

 
 

    <script src="/travelweb/js/index.js">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    
</body>

</html>