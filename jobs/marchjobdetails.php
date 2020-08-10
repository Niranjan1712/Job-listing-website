<?php 
    session_start();
    $value = $_SESSION['jobname'];

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
    <link href = "../img/g.png" rel="icon" type="image/gif">
<link rel="stylesheet" href="css/index.css">
<link rel="stylesheet" href="css/test.css">


<style type="text/css">

  .fun a:hover{
    background-color: #039BE5  ;
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

    <title>Get Into Job - Job Details</title>
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
            <li class="nav-item fun">
              <a style="color: white; padding-right: 20px; padding-left: 20px;" class="nav-link" href="../contact/contact.php">Contact</a>
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
          <div class="col-sm bdr">
            <img src="../img/upperwhite1.jpg" class="img-fluid" alt="Responsive image">

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
            <img style="height: 100%; width: 90%;" src="../img/sidedouble.jpg" class="img-fluid" alt="Responsive image">

    <!-- Place for Add-->
      
    </div>

    <div style="padding-left: 5px; padding-right: 5px;" class="col-sm-8">
    	

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

        <!-- logged in user information -->
        <?php  if (isset($_SESSION['username'])) : ?>
            <!--<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>-->
           
        <?php endif ?>

        <?php
            $conn = mysqli_connect('sql207.epizy.com', 'epiz_25468334', 'Wog8pxAxXt', 'epiz_25468334_march2020','3306');
            // Check connection
            if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            }

           $query = "SELECT * FROM jobs WHERE jobname='$value' ";
            $results = mysqli_query($conn, $query);
            
           // $row = mysqli_fetch_row($results);
            $row = mysqli_fetch_assoc($results);
           
            ?>

      <table class="table table-bordered text-center">
  <thead>
    <tr>
      <th style="color: white; background-color: #0D47A1;" colspan="4" scope="col">Department Name <span>&#8628;</span></th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <td colspan="4"><h6><?php echo $row["deptname"] ?></h6></td>
      
    </tr>
    <tr>
      <th style="color: white; background-color: #0D47A1;" colspan="4" scope="col">Job Name <span>&#8628;</span></th>
      
    </tr>
    <tr>
      <td colspan="4"><h6><?php echo $row["jobname"] ?></h6></td>
      
    </tr>



    <tr>
      <th style="color: white; background-color: #0D47A1;" colspan="4" scope="col">Important Dates<span>&#8628;</span></th>
      
    </tr>



    <?php




       if($row["date1"]!=null){
                 print "<tr>
          <td  colspan = \"2\">" . $row['date1'] . "</td>
          <td  colspan = \"2\">" . $row['date2'] . "</td>
          </tr>";
          }

      if($row["date3"]!=null){
               print "<tr>
        <td  colspan = \"2\">" . $row['date3'] . "</td>
        <td  colspan = \"2\">" . $row['date4'] . "</td>
        </tr>";
        }

        if($row["date5"]!=null){
               print "<tr>
        <td  colspan = \"2\">" . $row['date5'] . "</td>
        <td  colspan = \"2\">" . $row['date6'] . "</td>
        </tr>";
        }

        if($row["date7"]!=null){
               print "<tr>
        <td  colspan = \"2\">" . $row['date7'] . "</td>
        <td  colspan = \"2\">" . $row['date8'] . "</td>
        </tr>";
        }

        if($row["date9"]!=null){
               print "<tr>
        <td  colspan = \"2\">" . $row['date9'] . "</td>
        <td  colspan = \"2\">" . $row['date10'] . "</td>
        </tr>";
        }
        ?>

    <tr>
      <th style="color: white; background-color: #0D47A1;" colspan="4" scope="col">Application Fee<span>&#8628;</span></th>
      
    </tr>

     <?php




       if($row["appfee1"]!=null){
                 print "<tr>
          <td  colspan = \"2\">" . $row['appfee1'] . "</td>
          <td  colspan = \"2\">" . $row['appfee2'] . "</td>
          </tr>";
          }

      if($row["appfee3"]!=null){
               print "<tr>
        <td  colspan = \"2\">" . $row['appfee3'] . "</td>
        <td  colspan = \"2\">" . $row['appfee4'] . "</td>
        </tr>";
        }
        ?>

   

     <tr>
      <th style="color: white; background-color: #0D47A1;" colspan="4" scope="col">Payment Mode<span>&#8628;</span></th>
      
    </tr>
    <?php




       if($row["pay1"]!=null){
                 print "<tr>
          <td colspan = \"4\">" . $row['pay1'] . "</td>
          </tr>";
          }

        if($row["pay2"]!=null){
                 print "<tr>
          <td colspan = \"4\">" . $row['pay2'] . "</td>
          </tr>";
          }

    
        ?>



        <tr>
      <th style="color: white; background-color: #0D47A1;" colspan="4" scope="col">Age Limit<span>&#8628;</span></th>
      
    </tr>

      <?php




       if($row["appfee1"]!=null){
                 print "<tr>
          <td  colspan = \"2\">" . $row['appfee1'] . "</td>
          <td  colspan = \"2\">" . $row['appfee2'] . "</td>
          </tr>";
          }

      if($row["appfee3"]!=null){
               print "<tr>
        <td  colspan = \"2\">" . $row['appfee3'] . "</td>
        <td  colspan = \"2\">" . $row['appfee4'] . "</td>
        </tr>";
        }
        ?>

  
    <tr>
      <th style="color: white; background-color: #0D47A1;" colspan="4" scope="col">Vacancy Details | Eligibility<span>&#8628;</span></th>
      
    </tr>

    <tr style="background-color: #5DADE2;">
      <th  colspan="" scope=><h6>Post Name</h6></th>
      <th  colspan="" scope="col"><h6>Number of Post</h6></th>
      <th  colspan="" scope="col"><h6>Eligibility</h6></th>
      
    </tr>
     <?php




       if($row["post1"]!=null){
                 print "<tr>
          <td width=30%>" . $row['post1'] . "</td>
          <td width=30%>" . $row['totalpost1'] . "</td>
          <td width=40%>" . $row['elig1'] . "</td>

          </tr>";
          }

      if($row["post2"]!=null){
                 print "<tr>
          <td>" . $row['post2'] . "</td>
          <td>" . $row['totalpost2'] . "</td>
          <td>" . $row['elig2'] . "</td>

          </tr>";
          }

        if($row["post3"]!=null){
                 print "<tr>
          <td>" . $row['post3'] . "</td>
          <td>" . $row['totalpost3'] . "</td>
          <td>" . $row['elig3'] . "</td>

          </tr>";
          }

        if($row["post4"]!=null){
                 print "<tr>
          <td>" . $row['post4'] . "</td>
          <td>" . $row['totalpost4'] . "</td>
          <td>" . $row['elig4'] . "</td>

          </tr>";
          }

        if($row["post5"]!=null){
                 print "<tr>
          <td>" . $row['post5'] . "</td>
          <td>" . $row['totalpost5'] . "</td>
          <td>" . $row['elig5'] . "</td>

          </tr>";
          }
          if($row["post6"]!=null){
                 print "<tr>
          <td>" . $row['post6'] . "</td>
          <td>" . $row['totalpost6'] . "</td>
          <td>" . $row['elig6'] . "</td>

          </tr>";
          }
          if($row["post7"]!=null){
                 print "<tr>
          <td>" . $row['post7'] . "</td>
          <td>" . $row['totalpost7'] . "</td>
          <td>" . $row['elig7'] . "</td>

          </tr>";
          }
          if($row["post8"]!=null){
                 print "<tr>
          <td>" . $row['post8'] . "</td>
          <td>" . $row['totalpost8'] . "</td>
          <td>" . $row['elig8'] . "</td>

          </tr>";
          }
          if($row["post9"]!=null){
                 print "<tr>
          <td>" . $row['post9'] . "</td>
          <td>" . $row['totalpost9'] . "</td>
          <td>" . $row['elig9'] . "</td>

          </tr>";
          }
          if($row["post10"]!=null){
                 print "<tr>
          <td>" . $row['post10'] . "</td>
          <td>" . $row['totalpost10'] . "</td>
          <td>" . $row['elig10'] . "</td>
 
          </tr>";
          }
        ?>
    
    <tr>
      <th style="color: white; background-color: #0D47A1;" colspan="4" scope="col">Important Links<span>&#8628;</span></th>
      
    </tr>
     <?php




       if($row["linkname1"]!=null){
                 print "<tr>
          <td  colspan = \"2\">" . $row['linkname1'] . "</td>
          <td  colspan = \"2\"><a href='".$row['linkvalue1']."'><button>".$row['click1']."</button></a></td>
          </tr>";
          }


      if($row["linkname2"]!=null){
                 print "<tr>
          <td  colspan = \"2\">" . $row['linkname2'] . "</td>
          <td  colspan = \"2\"><a href='".$row['linkvalue2']."'><button>".$row['click2']."</button></a></td>
          </tr>";
          }

      if($row["linkname3"]!=null){
                 print "<tr>
          <td  colspan = \"2\">" . $row['linkname3'] . "</td>
          <td  colspan = \"2\"><a href='".$row['linkvalue3']."'><button>".$row['click3']."</button></a></td>
          </tr>";
          }

      if($row["linkname4"]!=null){
                 print "<tr>
          <td  colspan = \"2\">" . $row['linkname4'] . "</td>
          <td  colspan = \"2\"><a href='".$row['linkvalue4']."'><button>".$row['click4']."</button></a></td>
          </tr>";
          }

      if($row["linkname5"]!=null){
                 print "<tr>
          <td  colspan = \"2\">" . $row['linkname5'] . "</td>
          <td  colspan = \"2\"><a href='".$row['linkvalue5']."'><button>".$row['click5']."</button></a></td>
          </tr>";
          }

    
        ?>
   
    
    
    
  </tbody>
</table>


    </div>

<div class="col-sm-2 dis">
            <img style="height: 100%; width: 90%;" src="../img/sidedouble.jpg" class="img-fluid" alt="Responsive image">

<!-- Place for Add-->
  
</div>
</div>
</div>
</section>
<!--Latest Jobs End-->

<section >
 

 <section >
              <div   style="margin-top: 0px;" class="container-fluid  text-center">
        <div  class="row ">
          <div class="col-sm bdr">
            <img src="../img/upperwhite1.jpg" class="img-fluid" alt="Responsive image">

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