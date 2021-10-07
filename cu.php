<?php

 
try {
     
    $db = new mysqli("localhost", "root", "" , "contact_us");


} catch (Exception $exc) {
    echo $exc->getTraceAsString();
}

if(isset($_POST['Name']) && isset($_POST['Email'])  && isset($_POST['Comment'])  ) {

$Name = ($_POST['Name']);
$Email = ($_POST['Email']);
$Comment = ($_POST['Comment']);



 $is_insert =  $db->query("INSERT INTO `data`(`Name`, `Email`, `Comment`) VALUES ('$Name','$Email','$Comment')");

 if($is_insert == TRUE){

    echo " <h2> We will Contact U SOON!! </h2>";
    exit();


 }
}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="Cu.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript"></script>
  </head>
  <body>
    <form action="" method="post">
      <div class="color">
        <div class="container contact">
          <div class="row">
            <div class="col-md-3">
              <div class="contact-info">
                <img src="https://image.ibb.co/kUASdV/contact-image.png" alt="image" />
                <h2>Contact Us</h2>
                <h4>We would love to hear from you !</h4>
              </div>
            </div>
            <div class="col-md-9">
              <div class="contact-form">
                <div class="form-group">
                  <label class="control-label col-sm-2" for="lname"> Name:</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" placeholder="Enter Last Name" name="Name" />
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2" for="email">Email:</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="Email" />
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2" for="comment">Comment:</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" rows="5" id="comment" name="Comment"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <input type="submit" value="Submit" class="btn btn-default">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
  </body>
</html>