<?php
require 'db_connect.php';

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}

 $pkg_name = $_SESSION['pkg_name'];
?>




<?php
//  $id=$_GET['id'];
//  $sql = "SELECT * FROM `package_details` WHERE sno=$id;";
//  //echo $sql;
//  $result = mysqli_query($conn, $sql); 

// while($row = mysqli_fetch_assoc($result)){

//   $pkg_name = $row['pkg_name'];
//   $sno = $row['sno'];
// //  $pkg_details =$row['pkg_details'];
// //   $pkg_fromdate =$row['pkg_fromdate'];
// //   $pkg_todate =$row['pkg_todate'];
// //   $day_one =$row['day_one'];
// //    $day_two =$row['day_two'];
// //    $day_three =$row['day_three'];
// //   $images =$row['images'];
// //    $images1 =$row['images1'];
// //    $images2 =$row['images2'];
// //   $images3 =$row['images3'];
// //   $images4 =$row['images4'];
// //   $plane =$row['plane'];
// //  $pkg_from = $row['pkg_from'];
// // $pkg_after = $row['pkg_after'];


//  }

 ?>






<?php
$showAlert = false;
$showError = false;
error_reporting(0);

if($_SERVER["REQUEST_METHOD"] == "POST"){


    $pname = $_POST["pname"];
    $page = $_POST["page"];
    $pkg_name = $_POST["pack_name"];
    $lname =$_POST["pname1"];
    $gender = $_POST["gender"];
    $no=0;
    
    
    
    
   



    foreach($pname as $index => $pnames)
    {
        $p_name = $pnames;
        $p_age = $page[$index];
       $package_name=$pkg_name[$index];
       $last_name = $lname[$index];
       $genders = $gender[$index];
       $no++;
       
        
       
        
        

        $sql = "INSERT INTO `book` (`pname`,`lname`,`gender`, `page`,`status`,`pkg_name`,`cust_id`) VALUES ('$p_name','$last_name','$genders','$p_age','booked','$package_name','$no')";
       $result = mysqli_query($conn, $sql);
    }

    if($result){
        header("location: confirmation.php");
        $showAlert=true;

        
        

        
    }
    else{
        $showError="Not Submitted data";
    }



       
}

    
      
//     //   $sql = "INSERT INTO `book` (`pname`, `page`) VALUES ('".$_POST['pname'][$i]."','".$_POST['page'][$i]."')";
//     //   $result = mysqli_query($conn, $sql);
      

//     }
    


?>







<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="/travelweb/css/style.css">
    <style>
    .survey_options {
        padding: 10px;
        margin: 10px auto;
        display: block;
        border-radius: 5px;
        border: 1px solid lightgrey;
        background: none;
        width: 274px;
        color: black;

    }

    form{
        border: 2px solid black;
        border-radius: 10px;
        width:100%;
}

.wrapper {
  width: 1200px;
  margin: 10px auto;
  padding: 10px;
  border-radius: 5px;
  background: white;
  box-shadow: 0px 10px 40px 0px rgba(47,47,47,.1);
}

/* #pname1{
    float:left;
}
#pname{
    float:left;
}
#page{
    float:left;
} */
    
    </style>



</head>

<body>
    <?php  require 'header.php';?>

    <?php  
    //
    
    ?>
    <?php  
  if($showAlert==true){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success!</strong> You have successfully booked your  tour package.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div> ';
    }
    if($showError==true){
      echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Error!</strong> '. $showError.'
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">×</span>
          </button>
      </div> ';
      }


?>


    <div class="wrapper-left">
        <h2 style="color:black; margin-top: 50px;
  border: 2px solid white;
  display: inline-block;
  background-color: antiquewhite;">Book your trip to <?php echo $pkg_name = $_SESSION['pkg_name'];  ?></h2>


        <div class="col-sm-6 col-md-6 col-xl-5">
            <div class="input-group-icon" style="color:black;display: inline-block;margin: 10px 250px;">
                <label class="form-label visually-hidden" for="inputPersonOne">Adults</label>
                <p>Adults</p>
                <span class="minus">-</span>
                <span class="num">01</span>
                <span class="plus">+</span>
            </div>
        </div>
    </div>


    <h1>Add Traveller Details</h1>
    <div class="wrapper">
        <form action="book.php" method="POST">
           

            <div id="survey_options">
             <input type="text" name="pack_name[]" id="pname1" class="survey_options"  size="100" value="<?php echo $pkg_name = $_SESSION['pkg_name'];?>" required>
                <input type="text" name="pname[]" id="pname" class="survey_options" size="50" placeholder="First Name" required>
                <input type="text" name="pname1[]" id="pname2" class="survey_options" size="50" placeholder="Last Name" required>
                <select name="gender[]" id="gender" class="survey_options">
             <option value="Male">Male</option>
             <option value="Female">Female</option>
              </select>
                <input type="text" name="page[]" id="page" class="survey_options" size="50" placeholder="Age" required><br>
               




            </div>

            <div class="controls">
                <a href="#" id="add_more_fields"><i class="fa fa-plus"></i></a>
                <a href="#" id="remove_fields"><i class="fa fa-plus"></i></a>
               <?php echo'<button style="margin-left:120px;" onclick="" name="submit">Submit</button>'; ?>
              




        </form>

    </div>
    </div>

    <!-- <script src="/travelweb/js/index.js"></script> -->
    <script>
    const plus = document.querySelector(".plus");
    const minus = document.querySelector(".minus");
    const num = document.querySelector(".num");
    var newField = document.createElement('input');
    var newField1 = document.createElement('input');

    let a = 1;
    plus.addEventListener("click", () => {

        a++;
        a = (a < 10) ? "0" + a : a;
        num.innerText = a;

        var newField2 = document.createElement('input');
        newField2.setAttribute('type', 'text');
        newField2.setAttribute('label', 'Package Name');
        newField2.setAttribute('name', 'pack_name[]');
        newField2.setAttribute('class', 'survey_options');
        newField2.setAttribute('size', 50);
        newField2.setAttribute('value','<?php echo $pkg_name = $_SESSION['pkg_name'];?>');
        newField2.setAttribute('style','margin-top:40px;');
        survey_options.appendChild(newField2);


        var newField = document.createElement('input');
        newField.setAttribute('type', 'text');
        newField.setAttribute('name', 'pname[]');
        newField.setAttribute('class', 'survey_options');
        newField.setAttribute('size', 50);
        newField.setAttribute('placeholder', 'First Name');
       // newField.setAttribute('style','display:flex;');
        survey_options.appendChild(newField);
   
        var newField3 = document.createElement('input');
        newField3.setAttribute('type', 'text');
        newField3.setAttribute('name', 'pname1[]');
        newField3.setAttribute('class', 'survey_options');
        newField3.setAttribute('size', 50);
        newField3.setAttribute('placeholder', 'Last Name');
       // newField.setAttribute('style','display:flex;');
        survey_options.appendChild(newField3);

        var newField4 = document.createElement('select');
        var option1 = document.createElement("option");
        var option2 = document.createElement("option");
        newField4.setAttribute('type', 'text');
        newField4.setAttribute('name', 'gender[]');
        newField4.setAttribute('class', 'survey_options');
      //  newField4.setAttribute('size', 50);
      option1.text = "Male";
      option2.text = "Female";
        option1.setAttribute('value', 'Male');
        option2.setAttribute('value', 'Female');
        newField4.add(option1);
        newField4.add(option2);
        survey_options.appendChild(newField4);

        

        
        var newField1 = document.createElement('input');
        newField1.setAttribute('type', 'text');
        newField1.setAttribute('name', 'page[]');
        newField1.setAttribute('class', 'survey_options');
        newField1.setAttribute('size', 50);
        newField1.setAttribute('placeholder', 'Age');
       // newField1.setAttribute('style','display:flex;');
        survey_options.appendChild(newField1);



    });

    minus.addEventListener("click", () => {

        if (a > 1) {

            a--;
            a = (a < 10) ? "0" + a : a;
            num.innerText = a;

        }

        var input_tags = survey_options.getElementsByTagName('input');
        var select_tags = survey_options.getElementsByTagName('select');
        if (input_tags.length > 2 && select_tags.length >=1) {
            survey_options.removeChild(input_tags[(input_tags.length) - 1]);
            survey_options.removeChild(input_tags[(input_tags.length) - 1]);
            survey_options.removeChild(input_tags[(input_tags.length) - 1]);
            survey_options.removeChild(input_tags[(input_tags.length) - 1]);
            survey_options.removeChild(select_tags[(select_tags.length) - 1]);
        
        }


    });

    // get the form element
    // const form = document.querySelector('form');

    // // add an event listener for form submission
    // form.addEventListener('submit', function(event) {
    //   // prevent the default form submission behavior
    //   event.preventDefault();

    //   // check if the form fields are valid (e.g. not empty)
    //   const name = document.querySelector('#name').value;
    //   const age = document.querySelector('#age').value;
    //   if (name && age) {
    //     // show the alert message
    //     alert('Form submitted successfully!');
    //   } else {
    //     // show an error message if the form fields are not valid
    //     alert('Please enter your name and email.');
    //   }
    // });


    //   var submit = document.querySelector(".submit");
    //   submit.addEventListener("click",()=>{

    //         var nameInput = document.getElementById("pname");
    //         var ageInput = document.getElementById("page");
    //         var nameValue = nameInput.value;
    //         var ageValue = ageInput.value;
    //        if (nameValue === "" && ageValue==="") {
    //     alert("field is empty");
    //     window.location.href = "travelweb/book.php";

    //   } 
    //   else {
    //     alert("Booking Successfull");
    //   }


    // });

    
    </script>


</body>

</html>