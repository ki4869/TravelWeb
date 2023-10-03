<?php
require 'db_connect.php';

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}

?>

<?php
 include 'header.php'; 

// $id = $_GET['id'];
$sql = "SELECT * FROM `book`;";
$result = mysqli_query($conn, $sql); 
while($row = mysqli_fetch_assoc($result)){

  $pkg_name = $row['pkg_name'];
  
  $status =$row['status'];

  
  
 }

?>

<!--  </td>
  <td>  -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
       .container{
        margin-top:64px;
       }
      </style>
</head>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Package Name</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql = "SELECT DISTINCT pkg_name,status FROM `book`;";
    $result = mysqli_query($conn, $sql); 
   // $num = mysqli_num_rows($result);
    while($row = mysqli_fetch_assoc($result)){

        
            echo"<tr>
            <th scope='row'>1</th>
            <td>".$row['pkg_name']."</td>
            <td>".$row['status']."</td>
            </tr>";
        
    
    //   $pkg_name = $row['pkg_name'];
    //   $status =$row['status'];

      
    
      
      
     }
    
    
      
    ?>
    
    
  </tbody>
</table>
<?php
// $newDate = date("d-m-Y", strtotime($pkg_fromdate));
// $newDate1 = date("d-m-Y", strtotime($pkg_todate));
// echo'<div class="container mt-10">
// <div class="card" style="width: 18rem;">
//   <div class="card-body">
//     <p class="card-text">'.$pkg_name.' </p>
//     <p>Booked</p>
    
//     <p>'.$newDate.' to '.$newDate1.'</p>
//   </div>
// </div>
// </div>';


// echo'<div class="container mt-10">
// <div class="card" style="width: 18rem;">
//   <div class="card-body">
//     <p class="card-text">'.$pkg_name.' </p>
//     <p>Booked</p>
    
//     <p>'.$newDate.' to '.$newDate1.'</p>
//   </div>
// </div>
// </div>';

?>

    
</body>
</html>