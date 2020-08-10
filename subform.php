<?php include('connect.php') ?>
<div class="container">
<form action="subform.php" method="post" class="fm" style=" padding-bottom: 5%;">
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