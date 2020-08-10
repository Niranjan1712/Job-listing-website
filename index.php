<?php include('connect.php') ?>
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
  
  @media only screen and (max-width: 999px) {
  .dis {
    display: none;
    background-color: lightblue;
  }
  .display1{
    width: 100%;
    height: auto;
  
}
.poster{
  background: url(img/poster3.png);
  background-repeat: no-repeat;
  background-size: 100%;

}
.fnt{
  font-size: 20px;
}
.fm{
  width: 90%;
  padding-left: 15%
}
    
}
@media only screen and (min-width: 1000px) {
  .dis1 {
    display: none;
    background-color: lightblue;
  }

.display{
  width:100%; 
  height:550px;
}
.poster{
  background: url(img/poster3.png);
  background-repeat: no-repeat;
  background-size: 100%;

}
.fnt{
  font-size: 60px;
}
.fm{
  width: 70%;
  padding-left: 25%
}

}




</style>

    <title>Get Into Job - Home</title>
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

<div style="padding-left: 0px; padding-right: 0px; padding-top: 65px;" class="container-fluid text-center">
   <img class="display display1" src="img/poster3.png" alt="...">
</div>

<div style="margin-top: 0px; margin-bottom: 10px; background-image: linear-gradient(90deg,rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 

0.6)),url(https://images.pexels.com/photos/1851415/pexels-photo-1851415.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940); background-size: cover; width: 100%;" class="container-fluid text-center job-ser">
  <div class="row text-center">
    <div class="col-sm-7 text-center">
      <h4  style="color: yellow; padding-top: 5%;">Subscribe Us For Updates</h4>
      <p style="color: white;" >Find out what you like doing best and get someone to pay you for doing it.</p>

<form action="index.php" method="post" class="fm" style=" padding-bottom: 5%;">
  <?php include('errors.php'); ?>
   <div id="success_fail_info"></div>
  <div class="form-group">
    <label style="color: white;">Username:</label>
    <input type="text" name="username" class="form-control"placeholder="Enter Your Username">
    
  </div>
  <div class="form-group">
    <label style="color: white;">Email Address:</label>
    <input type="email" name="email" class="form-control" placeholder="Enter Your Email Address">
  </div>
  
  <button name = "reg_user" type="submit" class="btn btn-primary">Subscribe Now</button>
</form>

    </div>
    <div class="col-sm-5 job-ser-in">
     <img style="height: auto; width:auto;  margin-top:18%; " class="job-ser-imag img-responsive "src="img/sub.png">
    </div>
  </div>
</div>




<div class="container dis text-center">
   <h1 class="text-center mb-3">What We Provide?</h1>
<div class="card-deck">
  <div class="card">
    <a href="jobs/jobs.php"><img src="img/jo-card1.png" class="card-img-top" alt="..."></a>
    <div class="card-body">
      <h5 class="card-title"><a href="jobs/jobs.php">Latest Jobs</a></h5>
      <p class="card-text">Find a job you enjoy doing, and you will never have to work a day in your life.</p>
      
    </div>
  </div>
  <div class="card">
    <a href="admitcards/admitcards.php"><img src="img/admit-card2.png" class="card-img-top" alt="..."></a>
    <div class="card-body">
      <h5 class="card-title"><a href="admitcards/admitcards.php">Admit Cards</a></h5>
      <p class="card-text">The whole purpose of education is to turn mirrors into windows.</p>
    
    </div>
  </div>
  <div class="card">
    <a href="answerkeys/answerkeys.php"><img src="img/answer-key2.png" class="card-img-top" alt="..."></a>
    <div class="card-body">
      <h5 class="card-title"><a href="answerkeys/answerkeys.php">Answer Key</a></h5>
      <p class="card-text">Judge a man by his questions rather than by his answers.</p>
    
    </div>
  </div>
  <div class="card">
    <a href="results/results.php"><img src="img/results.png" class="card-img-top" alt="..."></a>
    <div class="card-body">
      <h5 class="card-title"><a href="results/results.php"> Results</a></h5>
      <p class="card-text">Growth is never by mere chance; it is the result of forces working together.</p>
     
    </div>
  </div>
</div>
</div>






    <div class="container dis1 text-center">
  <h1 class="text-center mb-3">What We Provide?</h1>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner row w-100 mx-auto">
      <div class="carousel-item col-md-4 active">
        <div class="card">
          <a href="jobs/jobs.php"><img class="card-img-top img-fluid" src="img/jo-card1.png" alt="Card image cap"></a>
          <div class="card-body text-center">
            <a class="text-center" href="jobs/jobs.php"><h4 class="card-title">Latest Jobs</h4></a>
            <p class="card-text">Find a job you enjoy doing, and you will never have to work a day in your life.</p>
           
          </div>
        </div>
      </div>
      
      <div class="carousel-item col-md-4">
        <div class="card">
          <a href="admitcards/admitcards.php"><img class="card-img-top img-fluid" src="img/admit-card2.png" alt="Card image cap"></a>
          <div class="card-body">
            <a href="admitcards/admitcards.php"><h4 class="card-title">Admit Card</h4></a>
            <p class="card-text">The whole purpose of education is to turn mirrors into windows.</p>
            
          </div>
        </div>
      </div>
      <div class="carousel-item col-md-4">
        <div class="card">
          <a href="answerkeys/answerkeys.php"><img class="card-img-top img-fluid" src="img/answer-key2.png" alt="Card image cap"></a>
          <div class="card-body">
            <a href="answerkeys/answerkeys.php"><h4 class="card-title">Answer Key</h4></a>
            <p class="card-text">Judge a man by his questions rather than by his answers.</p>
            
          </div>
        </div>
      </div>
      <div class="carousel-item col-md-4">
        <div class="card">
          <a href="results/results.php"><img class="card-img-top img-fluid" src="img/results.png" alt="Card image cap"></a>
          <div class="card-body">
            <a href="results/results.php"><h4 class="card-title">Result</h4></a>
            <p class="card-text">Growth is never by mere chance; it is the result of forces working together.</p>
            
          </div>
        </div>
      </div>
      
      
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon rounded-circle" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon rounded-circle" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<div style="margin-top: 20px; background-image: linear-gradient(90deg,rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 

0.6)),url(img/back3.jpg); background-size: cover; width: 100%;" class="container-fluid job-ser">
  <div class="row">
    <div class="col-sm-7" style="padding-left: 18%; padding-top: 3%;">
      <h4  style="color: white;">Millions Of Jobs. Find<br>The One That's Right For You.</h4>
      <p style="color: white;" >Our greatest weakness lies in giving up. The most certain way to succeed is always to try just one more time.</p>
      <div style="padding-top: 10%; padding-bottom: 5%;">
      <button style=" margin-top: 10px;" type="button" class="btn btn-primary"><a style="text-decoration: none; color: white;" href="jobs/jobs.php"> Search Job</a></button>
    </div>
  </div>
    <div class="col-sm-5 job-ser-in" style="padding-left: 10%;">
     <img style="height: auto; width:auto;  margin-top:50px; " class="job-ser-imag img-responsive "src="img/girl.png">
    </div>
  </div>
</div>

<h4 style="margin-top: 20px;text-align: center;">Inspirational Quotes</h4>

<div class="container quotes">
<div class="card-deck">
  <div style="height: auto;" class="card">
    
    <div class="card-body">
      <p class="card-text">"The most valuable of all talents is that of never using two words when one will do. —Thomas Jefferson."</p>
      <img style="height: 40px; width: 40px;" class="card-img-top" src="img/expert.png" alt="Card image cap"><span>-Thomas Jefferson</span>
    </div>
  </div>
  <div class="card">
   
    <div class="card-body">
      <p class="card-text">"The greatest thing in this world is not so much where we stand, as in what direction we are moving."</p>
       <img style="height: 40px; width: 40px;"class="card-img-top" src="img/expert.png" alt="Card image cap"><span>-Oliver Wendell Holmes</span>
    </div>
  </div>
  <div class="card">
    
    <div class="card-body">
      <p class="card-text">"Experience is not what happens to a man.
It is what a man does with what happens to him."</p>
      <img style="height: 40px; width: 40px;"class="card-img-top" src="img/expert.png" alt="Card image cap"><span> -Aldous Huxley</span>
    </div>
  </div>
</div>
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


















<script>
  $(document).ready(function() {
  $("#myCarousel").on("slide.bs.carousel", function(e) {
    var $e = $(e.relatedTarget);
    var idx = $e.index();
    var itemsPerSlide = 3;
    var totalItems = $(".carousel-item").length;

    if (idx >= totalItems - (itemsPerSlide - 1)) {
      var it = itemsPerSlide - (totalItems - idx);
      for (var i = 0; i < it; i++) {
        // append slides to end
        if (e.direction == "left") {
          $(".carousel-item")
            .eq(i)
            .appendTo(".carousel-inner");
        } else {
          $(".carousel-item")
            .eq(0)
            .appendTo($(this).find(".carousel-inner"));
        }
      }
    }
  });
});

</script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
   