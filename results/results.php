<?php include('janserver.php') ?>
<?php include('febserver.php') ?>
<?php include('marchserver.php') ?>
<?php include('aprilserver.php') ?>


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

    <title>Get Into Job - Results</title>
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
            <img src="../img/postf3.jpg" class="img-fluid" alt="Responsive image"><img src="../img/postf3.jpg" class="img-fluid" alt="Responsive image"><img src="../img/postf3.jpg" class="img-fluid" alt="Responsive image"><img src="../img/postf3.jpg" class="img-fluid" alt="Responsive image"><img src="../img/postf3.jpg" class="img-fluid" alt="Responsive image"><img src="../img/postf3.jpg" class="img-fluid" alt="Responsive image"><img src="../img/postf3.jpg" class="img-fluid" alt="Responsive image"><img src="../img/postf3.jpg" class="img-fluid" alt="Responsive image"><img src="../img/postf3.jpg" class="img-fluid" alt="Responsive image"><img src="../img/postf3.jpg" class="img-fluid" alt="Responsive image"><img src="../img/postf3.jpg" class="img-fluid" alt="Responsive image"><img src="../img/postf3.jpg" class="img-fluid" alt="Responsive image"><img src="../img/postf3.jpg" class="img-fluid" alt="Responsive image"><img src="../img/postf3.jpg" class="img-fluid" alt="Responsive image"><img src="../img/postf3.jpg" class="img-fluid" alt="Responsive image"><img src="../img/postf3.jpg" class="img-fluid" alt="Responsive image"><img src="../img/postf3.jpg" class="img-fluid" alt="Responsive image"><img src="../img/postf3.jpg" class="img-fluid" alt="Responsive image"><img src="../img/postf3.jpg" class="img-fluid" alt="Responsive image"><img src="../img/postf3.jpg" class="img-fluid" alt="Responsive image"><img src="../img/postf3.jpg" class="img-fluid" alt="Responsive image">

    <!-- Place for Add-->
      
    </div>

    <div style="padding-left: 0px; padding-right: 0px;" class="col-sm-8">

     <table class="table table-bordered dis">

  <thead>
    <tr>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      
      <td style="color: white; background-color: #880E4F;" class=" text-center" colspan="6">Latest Results</td>
    </tr>
    <tr style="background-color: #D81B60;">
      
      <td style="height: 10px;  padding: 5px; color: white;" class=" text-center" colspan="6">April 2020</td>
    </tr>
     
    <tr style="background-color:#F48FB1;" class="text-center">
      <th width="">Job Name</th>
      <th width="">Department Name</th>
      <th width="15%">Result</th>
    </tr>
      <?php
$conn = mysqli_connect('sql207.epizy.com', 'epiz_25468334', 'Wog8pxAxXt', 'epiz_25468334_april2020','3306');
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT jobname, deptname FROM results order by id desc";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
    ?>

    <tr class="text-center">
<form method="post" action="results.php">
    <?php include('errors.php'); ?>
   
<td>
  
  <textarea type="text" class="form-control no-border text-center" name="jobname" readonly="readonly" value="<?php echo $row["jobname"]; ?>"><?php echo $row["jobname"]; ?></textarea>
</td>
<td>
  
  <textarea type="text" class="form-control no-border text-center" name="deptname" readonly="readonly" value="<?php echo $row["deptname"]; ?>"><?php echo $row["deptname"]; ?></textarea>
</td>
  
<td style="padding-top: 24px;">
  <button style="background-color: #F48FB1;" type="submit" class="btn" name ="click">Check</button>
</td>
</form>
</tr>

<?php
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>

   
   </table>
  </tbody>


  


  <table class="table table-bordered dis">

  <thead>
    <tr>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      
      <td style="color: white; background-color: #880E4F;" class=" text-center" colspan="6">Before April 2020</td>
    </tr>
     
    <tr style="background-color:#F48FB1;" class="text-center">
      <th width="">Job Name</th>
      <th width="">Department Name</th>
      <th width="15%">Result</th>
    </tr>
      <?php
$conn = mysqli_connect('sql207.epizy.com', 'epiz_25468334', 'Wog8pxAxXt', 'epiz_25468334_jan2020','3306');
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT jobname, deptname FROM results order by id desc";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
    ?>

    <tr class="text-center">
<form method="post" action="results.php">
    <?php include('errors.php'); ?>
   
<td>
  
  <textarea type="text" class="form-control no-border text-center" name="jobname" readonly="readonly" value="<?php echo $row["jobname"]; ?>"><?php echo $row["jobname"]; ?></textarea>
</td>
<td>
  
  <textarea type="text" class="form-control no-border text-center" name="deptname" readonly="readonly" value="<?php echo $row["deptname"]; ?>"><?php echo $row["deptname"]; ?></textarea>
</td>
  
<td style="padding-top: 24px;">
  <button style="background-color: #F48FB1;" type="submit" class="btn" name ="click">Check</button>
</td>
</form>
</tr>

<?php
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>

   
   </table>
  </tbody>

<!--Latest Reults Start-->



<table class="table table-bordered dis1">

  <thead>
    <tr>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      
      <td style="color: white; background-color: #880E4F;" class=" text-center" colspan="6">Latest Results</td>
    </tr>
    <tr style="background-color: #D81B60;">
      
      <td style="height: 10px;  padding: 5px; color: white;" class=" text-center" colspan="6">April 2020</td>
    </tr>
     
    <tr style="background-color:#F48FB1;" class="text-center">
      <th width="">Job Name</th>
      
      <th width="15%">Result</th>
    </tr>
      <?php
$conn = mysqli_connect('sql207.epizy.com', 'epiz_25468334', 'Wog8pxAxXt', 'epiz_25468334_april2020','3306');
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT jobname, deptname FROM results order by id desc";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
    ?>

    <tr class="text-center">
<form method="post" action="results.php">
    <?php include('errors.php'); ?>
   
<td>
  
  <textarea type="text" class="form-control no-border text-center" name="jobname" readonly="readonly" value="<?php echo $row["jobname"]; ?>"><?php echo $row["jobname"]; ?></textarea>
</td>

  
<td style="padding-top: 24px;">
  <button style="background-color: #F48FB1;" type="submit" class="btn" name ="click">Check</button>
</td>
</form>
</tr>

<?php
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>

   
   </table>
  </tbody>



<table class="table table-bordered dis1">

  <thead>
    <tr>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      
      <td style="color: white; background-color: #880E4F;" class=" text-center" colspan="6">Before April 2020</td>
    </tr>
     
    <tr style="background-color:#F48FB1;" class="text-center">
      <th width="">Job Name</th>
      
      <th width="15%">Result</th>
    </tr>
      <?php
$conn = mysqli_connect('sql207.epizy.com', 'epiz_25468334', 'Wog8pxAxXt', 'epiz_25468334_jan2020','3306');
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT jobname, deptname FROM results order by id desc";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
    ?>

    <tr class="text-center">
<form method="post" action="results.php">
    <?php include('errors.php'); ?>
   
<td>
  
  <textarea type="text" class="form-control no-border text-center" name="jobname" readonly="readonly" value="<?php echo $row["jobname"]; ?>"><?php echo $row["jobname"]; ?></textarea>
</td>

  
<td style="padding-top: 24px;">
  <button style="background-color: #F48FB1;" type="submit" class="btn" name ="click">Check</button>
</td>
</form>
</tr>

<?php
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>

   
   </table>
  </tbody>

    </div>

<div class="col-sm-2  dis">
             <img src="../img/postf3.jpg" class="img-fluid" alt="Responsive image"><img src="../img/postf3.jpg" class="img-fluid" alt="Responsive image"><img src="../img/postf3.jpg" class="img-fluid" alt="Responsive image"><img src="../img/postf3.jpg" class="img-fluid" alt="Responsive image"><img src="../img/postf3.jpg" class="img-fluid" alt="Responsive image"><img src="../img/postf3.jpg" class="img-fluid" alt="Responsive image"><img src="../img/postf3.jpg" class="img-fluid" alt="Responsive image"><img src="../img/postf3.jpg" class="img-fluid" alt="Responsive image"><img src="../img/postf3.jpg" class="img-fluid" alt="Responsive image"><img src="../img/postf3.jpg" class="img-fluid" alt="Responsive image"><img src="../img/postf3.jpg" class="img-fluid" alt="Responsive image"><img src="../img/postf3.jpg" class="img-fluid" alt="Responsive image"><img src="../img/postf3.jpg" class="img-fluid" alt="Responsive image"><img src="../img/postf3.jpg" class="img-fluid" alt="Responsive image"><img src="../img/postf3.jpg" class="img-fluid" alt="Responsive image"><img src="../img/postf3.jpg" class="img-fluid" alt="Responsive image"><img src="../img/postf3.jpg" class="img-fluid" alt="Responsive image"><img src="../img/postf3.jpg" class="img-fluid" alt="Responsive image"><img src="../img/postf3.jpg" class="img-fluid" alt="Responsive image"><img src="../img/postf3.jpg" class="img-fluid" alt="Responsive image"><img src="../img/postf3.jpg" class="img-fluid" alt="Responsive image">

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