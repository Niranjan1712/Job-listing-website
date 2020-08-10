<?php include('server.php') ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href = "../img/g.png" rel="icon" type="image/gif">
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

    <title>Get Into Job - Contact</title>
  </head>
  <body>
   
    
<!--Navbar Start-->
<section>
          <nav style="padding-top: 0px; padding-bottom: 0px; background-color: #150734;" class="navbar navbar-expand-lg navbar-dark bg-primar nav mar fixed-top">
        <a class="navbar-brand" href="../index.php"><img src="../img/get.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li  class="nav-item fun">
              <a style="color: white; padding-right: 20px; padding-left: 20px;" class="nav-link" href="../index.php">Home </a>
            </li>
            <li class="nav-item fun">
              <a style="color: white; padding-right: 20px; padding-left: 20px;" class="nav-link fun" href="../jobs/jobs.php">Latest Jobs </a>
            </li>
            <li class="nav-item fun">
              <a style="color: white; padding-right: 20px; padding-left: 20px;" class="nav-link" href="../admitcards/admitcards.php"> Admit Cards</a>
            </li>
            <li class="nav-item fun">
              <a style="color: white; padding-right: 20px; padding-left: 20px;" class="nav-link" href="../answerkeys/answerkeys.php">Answer Keys</a>
            </li>
            <li class="nav-item fun">
              <a style="color: white; padding-right: 20px; padding-left: 20px;" class="nav-link" href="../results/results.php">Results</a>
            </li>
            
          </ul>
         
        </div>
      </nav>
</section>
<!--Navbar End-->


<!--Latest Jobs Start-->
<section style="padding-top: 100px;">
<div class="container-fluid text-center">
  <div class="row">
    <div class="col-sm-2 dis">
            <img style="height: 100%; width: 90%;" src="../img/postf3.jpg" class="img-fluid" alt="Responsive image">

    <!-- Place for Add-->
      
    </div>

    <div style="padding-left: 0px; padding-right: 0px;" class="col-sm-8">

      <h2 class="text-center">Contact Us</h2>

      <form  method="post" action="contact.php" style="padding-left: 10%;padding-right: 10%; padding-top:30px;padding-bottom: 30px;">
        <?php include('errors.php'); ?>
  <div class="form-group">
    <label for="exampleInputEmail1">Name:</label>
    <input type="text" name="name" class="form-control text-center" placeholder="Enter Your Name">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Email:</label>
    <input type="email" name="email" class="form-control text-center" placeholder="Enter your Email">
  </div>
  <div class="form-group">
    <label>Your Message:</label>
    <textarea type="text" name="message" placeholder="Enter Your Message" class="form-control text-center"></textarea>
   
  </div>
  
  <button type="submit" name="submit" class="btn btn-primary">Send Message</button>
</form>

<div style="padding-bottom: 20px;" class="container">
  <h5 class="text-center">Follow Us On</h5>
   <div class="row">
    <div class="col-sm-4 dis">

    </div>
    <div class="col-sm-4 dis">
      <a href=""><img style="height: 50px; width:50px; margin-right: 10px;" src="../img/fb.png" class="img-fluid" alt="Responsive image"></a>
      <a href=""><img style="height: 50px; width:50px;" src="../img/insta.png" class="img-fluid" alt="Responsive image"></a>
    </div>
    <div class="col-sm-4 dis">
       
    </div>
  
  </div>
</div>


    </div>

<div class="col-sm-2  dis">
            <img style="height: 100%; width: 90%;" src="../img/postf3.jpg" class="img-fluid" alt="Responsive image">

<!-- Place for Add-->
  
</div>
</div>
</section>
<!--Latest Jobs End-->






</section>

 

 <section >
              <div   style="margin-top: 0px;" class="container-fluid text-center">
        <div  class="row">
          <div class="col-sm bdr">
            <img src="../img/upperwhite1.jpg" class="img-fluid" alt="Responsive image">

            <!-- Place for Add-->
          </div >
          
          
        </div>
      </div>
</section>

<section>
<!-- Footer -->
<footer style="background-color: #150734; ;" class="page-footer font-small">

  
  <!-- Footer Elements -->

  <!-- Copyright -->
  <div style="padding-left: 5%; color: #BFC9CA;" class="footer-copyright py-3 text-center navbar-dark bg-primar">Copyright ©2020 All rights reserved by 
    <a style=" color: white;" href="../index.php">careerday.in</a>
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