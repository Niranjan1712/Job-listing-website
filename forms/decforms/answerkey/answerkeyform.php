<?php include('server.php') ?>
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
    <link href = "../../../img/g.png" rel="icon" type="image/gif">
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

    <title>Get Into Job - Answer Key Update Form</title>
  </head>
  <body>
   
    
<!--Navbar Start-->
<section>
          <nav style="padding-top: 0px; padding-bottom: 0px; background-color: #150734;" class="navbar navbar-expand-lg navbar-dark bg-primar nav mar fixed-top">
        <a class="navbar-brand" href="../../../index.php"><img src="../../../img/get.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li  class="nav-item fun">
              <a style="color: white; padding-right: 20px; padding-left: 20px;" class="nav-link" href="../../../index.php">Home </a>
            </li>
            <li class="nav-item fun">
              <a style="color: white; padding-right: 20px; padding-left: 20px;" class="nav-link fun" href="../../../jobs/jobs.php">Latest Jobs </a>
            </li>
            <li class="nav-item fun">
              <a style="color: white; padding-right: 20px; padding-left: 20px;" class="nav-link" href="../../../admitcards/admitcards.php"> Admit Cards</a>
            </li>
            <li class="nav-item fun">
              <a style="color: white; padding-right: 20px; padding-left: 20px;" class="nav-link" href="../../../answerkeys/answerkeys.php">Answer Keys</a>
            </li>
            <li class="nav-item fun">
              <a style="color: white; padding-right: 20px; padding-left: 20px;" class="nav-link" href="../../../results/results.php">Results</a>
            </li>
            <li class="nav-item fun">
              <a style="color: white; padding-right: 20px; padding-left: 20px;" class="nav-link" href="../../../contact/contact.php">Contact</a>
            </li>
          </ul>
         
        </div>
      </nav>
</section>
<!--Navbar End-->

<!--Header add Start-->
<section style="margin-top: 80px;">
              <div   style="margin-top: 0px;" class="container-fluid text-center">
        <div  class="row">
          <div class="col-sm">
           <img src="../../../img/upperwhite1.jpg" class="img-fluid" alt="Responsive image">
           <!-- Place for Add-->
          </div >
          
          
        </div>
      </div>
</section>
<!--Header add End-->

<!--Latest Jobs Start-->
<section>
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-2 dis">
    <img   src="../../../img/postf3.jpg" class="img-fluid" alt="Responsive image"><img   src="../../../img/postf3.jpg" class="img-fluid" alt="Responsive image">
    <!-- Place for Add-->
      
    </div>

    <div style="padding-left: 5px; padding-right: 5px;" class="col-sm-8">

       <table class="table table-bordered ">

  <thead> 
    <tr>
      
    </tr>
  </thead>
  <tbody>
    <tr >
      <h3 class="text-center">December</h3>
      <td style="color: white;" class="navbar-dark bg-primary text-center" colspan="2"><h5>Answer Key Update Form</h5></td>
    </tr>
    
  </tbody>
</table>

      <form  method="post" action="answerkeyform.php">
        <?php include('errors.php'); ?>
  <div class="form-group">
    <label for="exampleInputEmail1">Department Name</label>
    <input type="text" class="form-control" name="deptname">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Job Name</label>
    <input type="text" class="form-control" name="jobname">
  </div>

  
  <h5 style=" margin-top: 15px; padding: 5px; color: white;" class="text-center navbar-dark bg-primary">Important Dates</h5>

  <div class="row">
    <div class="col">
      <label for="exampleInputPassword1">Date (line 1)</label>
      <input type="text" class="form-control" name="date1">
    </div>
    <div class="col">
      <label for="exampleInputPassword1">Date (line 2)</label>
      <input type="text" class="form-control" name="date2">
    </div>
  </div>

   <div class="row">
    <div class="col">
      <label for="exampleInputPassword1">Date (line 3)</label>
      <input type="text" class="form-control" name="date3">
    </div>
    <div class="col">
      <label for="exampleInputPassword1">Date (line 4)</label>
      <input type="text" class="form-control" name="date4">
    </div>
  </div>

   


  <h5 style=" margin-top: 15px; padding: 5px; color: white;" class="text-center navbar-dark bg-primary">Important Links</h5>

  <div class="row">
    <div class="col">
      <label for="exampleInputPassword1">Link Name 1</label>
      <input type="text" class="form-control" name="linkname1">
    </div>
    <div class="col">
      <label for="exampleInputPassword1">Link Value 1</label>
      <input type="text" class="form-control" name="linkvalue1">
    </div>
    
    
  </div>

   <div class="row">
    <div class="col">
      <label for="exampleInputPassword1">Link Name 2</label>
      <input type="text" class="form-control" name="linkname2">
    </div>
    <div class="col">
      <label for="exampleInputPassword1">Link Value 2</label>
      <input type="text" class="form-control" name="linkvalue2">
    </div>
    
  </div>

   <div class="row">
    <div class="col">
      <label for="exampleInputPassword1">Link Name 3</label>
      <input type="text" class="form-control" name="linkname3">
    </div>
    <div class="col">
      <label for="exampleInputPassword1">Link Value 3</label>
      <input type="text" class="form-control" name="linkvalue3">
    </div>
     
    
  </div>

   <div class="row">
    <div class="col">
      <label for="exampleInputPassword1">Link Name 4</label>
      <input type="text" class="form-control" name="linkname4">
    </div>
    <div class="col">
      <label for="exampleInputPassword1">Link Value 4</label>
      <input type="text" class="form-control" name="linkvalue4">
    </div>
     
    
  </div>

   
 
 


  <div style="margin-top: 15px; margin-bottom: 15px;" class="text-center">
  <button type="submit" name="submit" value="insert" class="btn btn-primary">Submit</button>
</div>
</form>



    </div>

<div class="col-sm-2 dis">
<img   src="../../../img/postf3.jpg" class="img-fluid" alt="Responsive image"><img   src="../../../img/postf3.jpg" class="img-fluid" alt="Responsive image">
<!-- Place for Add-->
  
</div>
</div>
</div>
</section>
<!--Latest Jobs End-->

<!--Latest Jobs Start-->




<section >
 

 <section >
              <div   style="margin-top: 0px;" class="container-fluid text-center">
        <div  class="row">
          <div class="col-sm bdr">
          <img   src="../../../img/upperwhite1.jpg" class="img-fluid" alt="Responsive image">
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
    <a style=" color: white;" href="../../../index.php">careerday.in</a>
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