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

    <title>Get Into Job - Job Update Form</title>
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
    <img   src="../../../img/postf3.jpg" class="img-fluid" alt="Responsive image"><img   src="../../../img/postf3.jpg" class="img-fluid" alt="Responsive image"><img   src="../../../img/postf3.jpg" class="img-fluid" alt="Responsive image"><img   src="../../../img/postf3.jpg" class="img-fluid" alt="Responsive image"><img   src="../../../img/postf3.jpg" class="img-fluid" alt="Responsive image">
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
      <h3 class="text-center">November</h3>
      <td style="color: white;" class="navbar-dark bg-primary text-center" colspan="2"><h5>Job Update Form</h5></td>
    </tr>
    
  </tbody>
</table>

      <form  method="post" action="jobform.php">
        <?php include('errors.php'); ?>
  <div class="form-group">
    <label for="exampleInputEmail1">Department Name</label>
    <input type="text" class="form-control" name="deptname">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Job Name</label>
    <input type="text" class="form-control" name="jobname">
  </div>

  <h5 style=" margin-top: 15px; padding: 5px; color: white;" class="text-center navbar-dark bg-primary">Application Fee </h5>

  <div class="row">
    <div class="col">
      <label for="exampleInputPassword1">Application Fee (line 1)</label>
      <input type="text" class="form-control" name="appfee1">
    </div>
    <div class="col">
      <label for="exampleInputPassword1">Application Fee (line 2)</label>
      <input type="text" class="form-control" name="appfee2">
    </div>
  </div>

  <div class="row">
    <div class="col">
      <label for="exampleInputPassword1">Application Fee (line 3)</label>
      <input type="text" class="form-control" name="appfee3">
    </div>
    <div class="col">
      <label for="exampleInputPassword1">Application Fee (line 4)</label>
      <input type="text" class="form-control" name="appfee4">
    </div>
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

   <div class="row">
    <div class="col">
      <label for="exampleInputPassword1">Date (line 5)</label>
      <input type="text" class="form-control" name="date5">
    </div>
    <div class="col">
      <label for="exampleInputPassword1">Date (line 6)</label>
      <input type="text" class="form-control" name="date6">
    </div>
  </div>

   <div class="row">
    <div class="col">
      <label for="exampleInputPassword1">Date (line 7)</label>
      <input type="text" class="form-control" name="date7">
    </div>
    <div class="col">
      <label for="exampleInputPassword1">Date (line 8)</label>
      <input type="text" class="form-control" name="date8">
    </div>
  </div>

   <div class="row">
    <div class="col">
      <label for="exampleInputPassword1">Date (line 9)</label>
      <input type="text" class="form-control" name="date9">
    </div>
    <div class="col">
      <label for="exampleInputPassword1">Date (line 10)</label>
      <input type="text" class="form-control" name="date10">
    </div>
  </div>

  <h5 style=" margin-top: 15px; padding: 5px; color: white;" class="text-center navbar-dark bg-primary">Payment Mode</h5>

   <div class="row">
    <div class="col">
      <label for="exampleInputPassword1">Payment (line 1)</label>
      <input type="text" class="form-control" name="pay1">
    </div>
    <div class="col">
      <label for="exampleInputPassword1">Payment (line 2)</label>
      <input type="text" class="form-control" name="pay2">
    </div>
  </div>

  <h5 style=" margin-top: 15px; padding: 5px; color: white;" class="text-center navbar-dark bg-primary">Age Limit</h5>

  <div class="row">
    <div class="col">
      <label for="exampleInputPassword1">Age Limit (Line 1)</label>
      <input type="text" class="form-control" name="age1">
    </div>
    <div class="col">
      <label for="exampleInputPassword1">Age Limit (Line 2)</label>
      <input type="text" class="form-control" name="age2">
    </div>
  </div>

  <div class="row">
    <div class="col">
      <label for="exampleInputPassword1">Age Limit (Line 3)</label>
      <input type="text" class="form-control" name="age3">
    </div>
    <div class="col">
      <label for="exampleInputPassword1">Age Limit (Line 4)</label>
      <input type="text" class="form-control" name="age4">
    </div>
  </div>

  <h5 style=" margin-top: 15px; padding: 5px; color: white;" class="text-center navbar-dark bg-primary">Vacancy Details / Eligibility</h5>


  <div class="row">
    <div class="col">
      <label for="exampleInputPassword1">Post Name 1</label>
      <input type="text" class="form-control" name="post1">
    </div>
    <div class="col">
      <label for="exampleInputPassword1">Total Post 1 </label>
      <input type="text" class="form-control" name="totalpost1">
    </div>
    <div class="col">
      <label for="exampleInputPassword1">Eligibility Post 1 </label>
      <input type="text" class="form-control" name="elig1">
    </div>
  </div>

  <div class="row">
    <div class="col">
      <label for="exampleInputPassword1">Post Name 2</label>
      <input type="text" class="form-control" name="post2">
    </div>
    <div class="col">
      <label for="exampleInputPassword1">Total Post 2 </label>
      <input type="text" class="form-control" name="totalpost2">
    </div>
    <div class="col">
      <label for="exampleInputPassword1">Eligibility Post 2 </label>
      <input type="text" class="form-control" name="elig2">
    </div>
  </div>

  <div class="row">
    <div class="col">
      <label for="exampleInputPassword1">Post Name 3</label>
      <input type="text" class="form-control" name="post3">
    </div>
    <div class="col">
      <label for="exampleInputPassword1">Total Post 3 </label>
      <input type="text" class="form-control" name="totalpost3">
    </div>
    <div class="col">
      <label for="exampleInputPassword1">Eligibility Post 3 </label>
      <input type="text" class="form-control" name="elig3">
    </div>
  </div>

  <div class="row">
    <div class="col">
      <label for="exampleInputPassword1">Post Name 4</label>
      <input type="text" class="form-control" name="post4">
    </div>
    <div class="col">
      <label for="exampleInputPassword1">Total Post 4 </label>
      <input type="text" class="form-control" name="totalpost4">
    </div>
    <div class="col">
      <label for="exampleInputPassword1">Eligibility Post 4 </label>
      <input type="text" class="form-control" name="elig4">
    </div>
  </div>

  <div class="row">
    <div class="col">
      <label for="exampleInputPassword1">Post Name 5</label>
      <input type="text" class="form-control" name="post5">
    </div>
    <div class="col">
      <label for="exampleInputPassword1">Total Post 5 </label>
      <input type="text" class="form-control" name="totalpost5">
    </div>
    <div class="col">
      <label for="exampleInputPassword1">Eligibility Post 5</label>
      <input type="text" class="form-control" name="elig5">
    </div>
  </div>

  <div class="row">
    <div class="col">
      <label for="exampleInputPassword1">Post Name 6</label>
      <input type="text" class="form-control" name="post6">
    </div>
    <div class="col">
      <label for="exampleInputPassword1">Total Post 6 </label>
      <input type="text" class="form-control" name="totalpost6">
    </div>
    <div class="col">
      <label for="exampleInputPassword1">Eligibility Post 6 </label>
      <input type="text" class="form-control" name="elig6">
    </div>
  </div>

  <div class="row">
    <div class="col">
      <label for="exampleInputPassword1">Post Name 7</label>
      <input type="text" class="form-control" name="post7">
    </div>
    <div class="col">
      <label for="exampleInputPassword1">Total Post 7</label>
      <input type="text" class="form-control" name="totalpost7">
    </div>
    <div class="col">
      <label for="exampleInputPassword1">Eligibility Post 7 </label>
      <input type="text" class="form-control" name="elig7">
    </div>
  </div>

  <div class="row">
    <div class="col">
      <label for="exampleInputPassword1">Post Name 8</label>
      <input type="text" class="form-control" name="post8">
    </div>
    <div class="col">
      <label for="exampleInputPassword1">Total Post 8 </label>
      <input type="text" class="form-control" name="totalpost8">
    </div>
    <div class="col">
      <label for="exampleInputPassword1">Eligibility Post 8 </label>
      <input type="text" class="form-control" name="elig8">
    </div>
  </div>

  <div class="row">
    <div class="col">
      <label for="exampleInputPassword1">Post Name 9</label>
      <input type="text" class="form-control" name="post9">
    </div>
    <div class="col">
      <label for="exampleInputPassword1">Total Post 9 </label>
      <input type="text" class="form-control" name="totalpost9">
    </div>
    <div class="col">
      <label for="exampleInputPassword1">Eligibility Post 9</label>
      <input type="text" class="form-control" name="elig9">
    </div>
  </div>

  <div class="row">
    <div class="col">
      <label for="exampleInputPassword1">Post Name 10</label>
      <input type="text" class="form-control" name="post10">
    </div>
    <div class="col">
      <label for="exampleInputPassword1">Total Post 10 </label>
      <input type="text" class="form-control" name="totalpost10">
    </div>
    <div class="col">
      <label for="exampleInputPassword1">Eligibility Post 10 </label>
      <input type="text" class="form-control" name="elig10">
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
     <div class="col">
    <div class="form-group">
      <label for="inputState">Select Click</label>
      <select  name="click1" class="form-control">
        <option></option>
        <option>Click Here</option>
      </select>
    </div>
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
    <div class="col">
    <div class="form-group">
      <label for="inputState">Select Click</label>
      <select  name="click2" class="form-control">
        <option></option>
        <option>Click Here</option>
      </select>
    </div>
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
     <div class="col">
    <div class="form-group">
      <label for="inputState">Select Click</label>
      <select  name="click3" class="form-control">
        <option></option>
        <option>Click Here</option>
      </select>
    </div>
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
     <div class="col">
    <div class="form-group">
      <label for="inputState">Select Click</label>
      <select  name="click4" class="form-control">
        <option></option>
        <option>Click Here</option>
      </select>
    </div>
    </div>
    
  </div>

   <div class="row">
    <div class="col">
      <label for="exampleInputPassword1">Link Name 5</label>
      <input type="text" class="form-control" name="linkname5">
    </div>
    <div class="col">
      <label for="exampleInputPassword1">Link Value 5</label>
      <input type="text" class="form-control" name="linkvalue5">
    </div>
     <div class="col">
    <div class="form-group">
      <label for="inputState">Select Click</label>
      <select  name="click5" class="form-control">
        <option></option>
        <option>Click Here</option>
      </select>
    </div>
    </div>
    
  </div>
 


  <div style="margin-top: 15px; margin-bottom: 15px;" class="text-center">
  <button type="submit" name="submit" value="insert" class="btn btn-primary">Submit</button>
</div>
</form>



    </div>

<div class="col-sm-2 dis">
<img   src="../../../img/postf3.jpg" class="img-fluid" alt="Responsive image"><img   src="../../../img/postf3.jpg" class="img-fluid" alt="Responsive image"><img   src="../../../img/postf3.jpg" class="img-fluid" alt="Responsive image"><img   src="../../../img/postf3.jpg" class="img-fluid" alt="Responsive image"><img   src="../../../img/postf3.jpg" class="img-fluid" alt="Responsive image">
<!-- Place for Add-->
  ../
</div>
</div>
</div>
</section>
<!--Latest Jobs End-->

<!--Latest Jobs Start-->




<section >
 

 <section >
              <div   style="margin-top: 0px;" class="container-fluid text-center ">
        <div  class="row">
          <div class="col-sm">
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