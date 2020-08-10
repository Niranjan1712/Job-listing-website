<?php 
session_start();

    if (!isset($_SESSION['username'])) {
        $_SESSION['msg'] = "You must log in first";
        
    }

    

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8"><!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href = "img/g.png" rel="icon" type="image/gif">
<link rel="stylesheet" href="css/index.css">
<link rel="stylesheet" href="css/test.css">


<style type="text/css">

  .fun a:hover{
    background-color: #039BE5  ;
  }
  
  

</style>

    <title>Get Into Job - Subscribers</title>
  </head>
  <body>
   
    
<!--Navbar Start-->
<section>
          <nav style="padding-top: 0px; padding-bottom: 0px; background-color: #150734;" class="navbar navbar-expand-lg navbar-dark bg-primar nav mar fixed-top">
        <a class="navbar-brand" href="index.php"><img src="img/get.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li  class="nav-item fun">
              <a style="color: white; padding-right: 20px; padding-left: 20px;" class="nav-link" href="index.php">Home </a>
            </li>
            <li class="nav-item fun">
              <a style="color: white; padding-right: 20px; padding-left: 20px;" class="nav-link fun" href="jobs/jobs.php">Latest Jobs </a>
            </li>
            <li class="nav-item fun">
              <a style="color: white; padding-right: 20px; padding-left: 20px;" class="nav-link" href="admitcards/admitcards.php"> Admit Cards</a>
            </li>
            <li class="nav-item fun">
              <a style="color: white; padding-right: 20px; padding-left: 20px;" class="nav-link" href="answerkeys/answerkeys.php">Answer Keys</a>
            </li>
            <li class="nav-item fun">
              <a style="color: white; padding-right: 20px; padding-left: 20px;" class="nav-link" href="results/results.php">Results</a>
            </li>
            <li class="nav-item fun">
              <a style="color: white; padding-right: 20px; padding-left: 20px;" class="nav-link" href="contact/contact.php">Contact</a>
            </li>
          </ul>
         
        </div>
      </nav>
</section>
<!--Navbar End-->

<div style="padding-top: 250px; height: 700px;" class="container text-center">
  <h2>Thank You <?php echo $_SESSION['username']; ?> For Subscribing Us</h2>

  <p style="padding-top: 50px; padding-bottom: 50px;">Now You Will be getting regular updates on Latest Jobs Notification, Admit Cards Notification, Answer Key Notification and Results Declared Notification on Your Registered Email Address</p>


  <a href="index.php"><button name = "reg_user" type="submit" class="btn btn-primary">Go Back</button></a>
</div>




<!-- Footer -->
<footer style="background-color: #150734; margin-top: 20px;" class="page-footer font-small">

  
  <!-- Footer Elements -->

  <!-- Copyright -->
  <div style="padding-left: 5%; color: #BFC9CA;" class="footer-copyright py-3 text-center navbar-dark bg-primar">Copyright ©2020 All rights reserved by 
    <a style=" color: white;" href="index.php">getintojob</a>
     <a href='https://www.counters-free.net/'>Counters-Free</a> <script type='text/javascript' src='https://www.freevisitorcounters.com/auth.php?id=9246ba12a2ae72e2f50aadf3af7899f88a270798'></script>
<script type="text/javascript" src="https://www.freevisitorcounters.com/en/home/counter/657811/t/5"></script>
   </div>
  <!-- Copyright -->
    
</footer>
<!-- Footer -->



















    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
   