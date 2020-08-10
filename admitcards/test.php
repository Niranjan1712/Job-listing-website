<?php 
    session_start();
    $value = $_SESSION['jobname'];

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title><?php echo $_SESSION['jobname']; ?> | Home</title>

    <style type="text/css">
  .nav{
    padding-left: 50px;
    padding-right: 50px;
    padding-top: 15px;
    padding-bottom: 15px;
  }
  .fun a:hover{
    background-color: #33AAFF;
  }
  .bdr{
    width: 740px;
    height: 100px;
  }
</style>

  </head>
  <body>

    <!--Navbar Start-->
<section>
          <nav  class="navbar navbar-expand-lg navbar-dark bg-primary nav">
        <a class="navbar-brand" href="#">Company Logo</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li  class="nav-item fun">
              <a style="color: white; padding-right: 20px; padding-left: 20px;" class="nav-link" href="#">Home </a>
            </li>
            <li class="nav-item fun">
              <a style="color: white; padding-right: 20px; padding-left: 20px;" class="nav-link fun" href="#">Latest Jobs </a>
            </li>
            <li class="nav-item fun">
              <a style="color: white; padding-right: 20px; padding-left: 20px;" class="nav-link" href="#">Latest Admit Cards</a>
            </li>
            <li class="nav-item fun">
              <a style="color: white; padding-right: 20px; padding-left: 20px;" class="nav-link" href="#">Latest Results</a>
            </li>
          </ul>
         
        </div>
      </nav>
</section>
<!--Navbar End-->

<!--Header add Start-->
<section >
              <div   style="margin-top: 0px;" class="container-fluid border border-primary ">
        <div  class="row border">
          <div class="col-sm border border-primary bdr">
            Place for Add
          </div >
          <div class="col-sm border border-primary bdr">
            Place for Add
          </div>
          
        </div>
      </div>
</section>
<!--Header add End-->

