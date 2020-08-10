<?php 
    session_start();
    $value = $_SESSION['username'];

    if (!isset($_SESSION['username'])) {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
    }

    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header("location: adminlogin.php");
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
    <link href = "../../img/g.png" rel="icon" type="image/gif">
<link rel="stylesheet" href="css/index.css">
<link rel="stylesheet" href="css/test.css">


<style type="text/css">

  .fun a:hover{
    background-color: #039BE5  ;
  }
  textarea {
   resize: none;
}
  
  @media only screen and (max-width: 600px) {
  .dis {
    display: none;
    background-color: lightblue;
  }
  .display1{
    width: 100%;
    height: auto;
  
}
}
@media only screen and (min-width: 600px) {
  .dis1 {
    display: none;
    background-color: lightblue;
  
  }

.display{
  width:100%; 
  height:550px;
}
}
</style>

    <title>Get Into Job - Forms</title>
  </head>
  <body>
   
    
<!--Navbar Start-->
<section style="margin-bottom: 80px;">
          <nav style="padding-top: 0px; padding-bottom: 0px; background-color: #150734;" class="navbar navbar-expand-lg navbar-dark bg-primar nav mar fixed-top">
        <a class="navbar-brand" href="../../index.php"><img src="../../img/get.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li  class="nav-item fun">
              <a style="color: white; padding-right: 20px; padding-left: 20px;" class="nav-link" href="../../index.php">Home </a>
            </li>
            <li class="nav-item fun">
              <a style="color: white; padding-right: 20px; padding-left: 20px;" class="nav-link fun" href="../../jobs/jobs.php">Latest Jobs </a>
            </li>
            <li class="nav-item fun">
              <a style="color: white; padding-right: 20px; padding-left: 20px;" class="nav-link" href="../../admitcards/admitcards.php"> Admit Cards</a>
            </li>
            <li class="nav-item fun">
              <a style="color: white; padding-right: 20px; padding-left: 20px;" class="nav-link" href="../../answerkeys/answerkeys.php">Answer Keys</a>
            </li>
            <li class="nav-item fun">
              <a style="color: white; padding-right: 20px; padding-left: 20px;" class="nav-link" href="../../results/results.php">Results</a>
            </li>
            <li class="nav-item fun">
              <a style="color: white; padding-right: 20px; padding-left: 20px;" class="nav-link" href="../contact/contact.php">Contact</a>
            </li>
          </ul>
         
        </div>
      </nav>
</section>
<!--Navbar End-->

<!--Latest Jobs Start-->
<section >
              <div   style="margin-top: 0px;" class="container-fluid text-center">
        <div  class="row">
          <div class="col-sm bdr">
           <img   src="../../img/upperwhite1.jpg" class="img-fluid" alt="Responsive image">
            <!-- Place for Add-->
          </div >
          
          
        </div>
      </div>
</section>


<section>
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-2 dis">
      <img   src="../../img/postf3.jpg" class="img-fluid" alt="Responsive image"><img   src="../../img/postf3.jpg" class="img-fluid" alt="Responsive image">
   <!-- Place for Add-->
  </div>

    <div style="padding-top: 0px; padding-bottom: 50px;" class="col-sm-8">

      <!-- notification message -->
        <?php if (isset($_SESSION['success'])) : ?>
            <div class="error success" >
                <h3>
                    <?php 
                        echo $_SESSION['success']; 
                        unset($_SESSION['success']);
                    ?>
                </h3>
            </div>
        <?php endif ?>


        <?php
            $conn = mysqli_connect('sql207.epizy.com', 'epiz_25468334', 'Wog8pxAxXt', 'epiz_25468334_admindatabase','3306');
            // Check connection
            if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            }

           $query = "SELECT * FROM admininfo WHERE username='$value' ";
            $results = mysqli_query($conn, $query);
            
           // $row = mysqli_fetch_row($results);
            $row = mysqli_fetch_assoc($results);
           
            ?>


        <!-- logged in user information -->
        <?php  if (isset($_SESSION['username'])) : ?>
           <!--<h5 class="text-center">Welcome <strong><?php echo $row['name']; ?></strong></h5>-->
           
        <?php endif ?>


      <table style="margin-bottom: 50px;" class="table text-center">
  <thead>
    <tr>
      <td class="navbar-dark bg-primary text-center" colspan="4" scope="col"><h5 style="color: white;" class="text-center">Welcome <strong><?php echo $row['name']; ?></strong></h5></td>
    </tr>
  </thead>
 
</table>
<h4 class="text-center">June Forms</h4>

     <div style="margin-bottom: 20px;" class="card text-center">
  <div class="card-header">

  </div>
  <div class="card-body">
    <h5 class="card-title">Job Update Form</h5>
    <p class="card-text">Fill the form carefully ! and leave fields empty which are unknown.</p>
    <a href="../../forms/juneforms/jobs/jobform.php" class="btn btn-primary">Fill Form Now</a>
  </div>
  <div class="card-footer text-muted">
  
  </div>
</div>

<div style="margin-bottom: 20px;" class="card text-center">
  <div class="card-header">
  
  </div>
  <div class="card-body">
    <h5 class="card-title">Admit Card Update Form</h5>
    <p class="card-text">Fill the form carefully ! and leave fields empty which are unknown.</p>
    <a href="../../forms/juneforms/admitcards/admitcardform.php" class="btn btn-primary">Fill Form Now</a>
  </div>
  <div class="card-footer text-muted">
  
  </div>
</div>

<div style="margin-bottom: 20px;" class="card text-center">
  <div class="card-header">
  
  </div>
  <div class="card-body">
    <h5 class="card-title">Answer Key Update Form</h5>
    <p class="card-text">Fill the form carefully ! and leave fields empty which are unknown.</p>
    <a href="../../forms/juneforms/answerkey/answerkeyform.php" class="btn btn-primary">Fill Form Now</a>
  </div>
  <div class="card-footer text-muted">
  
  </div>
</div>

<div  class="card text-center">
  <div class="card-header">
  
  </div>
  <div class="card-body">
    <h5 class="card-title">Result Update Form</h5>
    <p class="card-text">Fill the form carefully ! and leave fields empty which are unknown.</p>
    <a href="../../forms/juneforms/results/resultform.php" class="btn btn-primary">Fill Form Now</a>
  </div>
  <div class="card-footer text-muted">
  
  </div>
</div>
  
    </div>

    <div class="col-sm-2 dis">
     <img   src="../../img/postf3.jpg" class="img-fluid" alt="Responsive image"><img   src="../../img/postf3.jpg" class="img-fluid" alt="Responsive image">
   <!-- Place for Add-->
  </div>

  </div>

</div>

</section>

<section >
              <div   style="margin-top: 0px;" class="container-fluid text-center">
        <div  class="row">
          <div class="col-sm bdr">
           <img   src="../../img/upperwhite1.jpg" class="img-fluid" alt="Responsive image">
            <!-- Place for Add-->
          </div >
          
          
        </div>
      </div>
</section>


<!-- Footer -->
<footer style="background-color: #150734; ;" class="page-footer font-small">

  
  <!-- Footer Elements -->

  <!-- Copyright -->
  <div style="padding-left: 5%; color: #BFC9CA;" class="footer-copyright py-3 text-center navbar-dark bg-primar">Copyright ©2020 All rights reserved by 
    <a style=" color: white;" href="../../index.php">getintojob</a>
    <a href='https://www.counters-free.net/'>Counters-Free</a> <script type='text/javascript' src='https://www.freevisitorcounters.com/auth.php?id=50dd9fd0179937e9dd9ef3bd98ad7e07d6a7305d'></script>
<script type="text/javascript" src="https://www.freevisitorcounters.com/en/home/counter/654669/t/5"></script>
  </div>
  <!-- Copyright -->
    
</footer>
<!-- Footer -->
</section>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>