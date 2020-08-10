<?php 
	session_start();

	// variable declaration
	$deptname = "";
	$jobname = "";

	$appfee1 = "";
	$appfee2 = "";
	$appfee3 = "";
	$appfee4 = "";

	$date1 = "";
	$date2 = "";
	$date3 = "";
	$date4 = "";
	$date5 = "";
	$date6 = "";
	$date7 = "";
	$date8 = "";
	$date9 = "";
	$date10 = "";

	$pay1 = "";
	$pay2 = "";
	$age1 = "";
	$age2 = "";
	$age3 = "";
	$age4 = "";


	$post1 = "";
	$post2 = "";
	$post3 = "";
	$post4 = "";
	$post5 = "";
	$post6 = "";
	$post7 = "";
	$post8 = "";
	$post9 = "";
	$post10 = "";

	$totalpost1 = "";
	$totalpost2 = "";
	$totalpost3 = "";
	$totalpost4 = "";
	$totalpost5 = "";
	$totalpost6 = "";
	$totalpost7 = "";
	$totalpost8 = "";
	$totalpost9 = "";
	$totalpost10 = "";

	$elig1 = "";
	$elig2 = "";
	$elig3 = "";
	$elig4 = "";
	$elig5 = "";
	$elig6 = "";
	$elig7 = "";
	$elig8 = "";
	$elig9 = "";
	$elig10 = "";

	$linkname1 = "";
	$linkname2 = "";
	$linkname3 = "";
	$linkname4 = "";
	$linkname5 = "";

	$linkvalue1 = "";
	$linkvalue2 = "";
	$linkvalue3 = "";
	$linkvalue4 = "";
	$linkvalue5 = "";

	$click1 = ""; 
	$click2 = "";
	$click3 = "";
	$click4 = "";
	$click5 = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('sql207.epizy.com', 'epiz_25468334', 'Wog8pxAxXt', 'epiz_25468334_may2020','3306');

	// REGISTER USER
	if (isset($_POST['submit'])) {
		// receive all input values from the form

		$deptname = mysqli_real_escape_string($db, $_POST['deptname']);
		$jobname  = mysqli_real_escape_string($db, $_POST['jobname']);

		$appfee1 =  mysqli_real_escape_string($db, $_POST['appfee1']);
		$appfee2 = mysqli_real_escape_string($db, $_POST['appfee2']);
		$appfee3 = mysqli_real_escape_string($db, $_POST['appfee3']);
		$appfee4 = mysqli_real_escape_string($db, $_POST['appfee4']);

		$date1 = mysqli_real_escape_string($db, $_POST['date1']);
		$date2 = mysqli_real_escape_string($db, $_POST['date2']);
		$date3 = mysqli_real_escape_string($db, $_POST['date3']);
		$date4 = mysqli_real_escape_string($db, $_POST['date4']);
		$date5 = mysqli_real_escape_string($db, $_POST['date5']);
		$date6 = mysqli_real_escape_string($db, $_POST['date6']);
		$date7 = mysqli_real_escape_string($db, $_POST['date7']);
		$date8 = mysqli_real_escape_string($db, $_POST['date8']);
		$date9 = mysqli_real_escape_string($db, $_POST['date9']);
		$date10 = mysqli_real_escape_string($db, $_POST['date10']);

		$pay1 = mysqli_real_escape_string($db, $_POST['pay1']);
		$pay2 = mysqli_real_escape_string($db, $_POST['pay2']);

		$age1 = mysqli_real_escape_string($db, $_POST['age1']);
		$age2 = mysqli_real_escape_string($db, $_POST['age2']);
		$age3 = mysqli_real_escape_string($db, $_POST['age3']);
		$age4 = mysqli_real_escape_string($db, $_POST['age4']);

		$post1 = mysqli_real_escape_string($db, $_POST['post1']);
		$post2 = mysqli_real_escape_string($db, $_POST['post2']);
		$post3 = mysqli_real_escape_string($db, $_POST['post3']);
		$post4 = mysqli_real_escape_string($db, $_POST['post4']);
		$post5 = mysqli_real_escape_string($db, $_POST['post5']);
		$post6 = mysqli_real_escape_string($db, $_POST['post6']);
		$post7 = mysqli_real_escape_string($db, $_POST['post7']);
		$post8 = mysqli_real_escape_string($db, $_POST['post8']);
		$post9 = mysqli_real_escape_string($db, $_POST['post9']);
		$post10 = mysqli_real_escape_string($db, $_POST['post10']); 

		$totalpost1 = mysqli_real_escape_string($db, $_POST['totalpost1']);
		$totalpost2 = mysqli_real_escape_string($db, $_POST['totalpost2']);
		$totalpost3 = mysqli_real_escape_string($db, $_POST['totalpost3']);
		$totalpost4 = mysqli_real_escape_string($db, $_POST['totalpost4']);
		$totalpost5 = mysqli_real_escape_string($db, $_POST['totalpost5']);
		$totalpost6 = mysqli_real_escape_string($db, $_POST['totalpost6']);
		$totalpost7 = mysqli_real_escape_string($db, $_POST['totalpost7']);
		$totalpost8 = mysqli_real_escape_string($db, $_POST['totalpost8']);
		$totalpost9 = mysqli_real_escape_string($db, $_POST['totalpost9']);
		$totalpost10 = mysqli_real_escape_string($db, $_POST['totalpost10']); 

		$elig1 = mysqli_real_escape_string($db, $_POST['elig1']);
		$elig2 = mysqli_real_escape_string($db, $_POST['elig2']);
		$elig3 = mysqli_real_escape_string($db, $_POST['elig3']);
		$elig4 = mysqli_real_escape_string($db, $_POST['elig4']);
		$elig5 = mysqli_real_escape_string($db, $_POST['elig5']);
		$elig6 = mysqli_real_escape_string($db, $_POST['elig6']);
		$elig7 = mysqli_real_escape_string($db, $_POST['elig7']);
		$elig8 = mysqli_real_escape_string($db, $_POST['elig8']);
		$elig9 = mysqli_real_escape_string($db, $_POST['elig9']);
		$elig10 = mysqli_real_escape_string($db, $_POST['elig10']); 

		


		$linkname1 = mysqli_real_escape_string($db, $_POST['linkname1']);
		$linkname2 = mysqli_real_escape_string($db, $_POST['linkname2']);
		$linkname3 = mysqli_real_escape_string($db, $_POST['linkname3']);
		$linkname4 = mysqli_real_escape_string($db, $_POST['linkname4']);
		$linkname5 = mysqli_real_escape_string($db, $_POST['linkname5']);

		


		$linkvalue1 = mysqli_real_escape_string($db, urldecode($_POST['linkvalue1']));
		$linkvalue2 = mysqli_real_escape_string($db, urldecode($_POST['linkvalue2']));
		$linkvalue3 = mysqli_real_escape_string($db, urldecode($_POST['linkvalue3']));
		$linkvalue4 = mysqli_real_escape_string($db, urldecode($_POST['linkvalue4']));
		$linkvalue5 = mysqli_real_escape_string($db, urldecode($_POST['linkvalue5']));

		

		$click1 = mysqli_real_escape_string($db, $_POST['click1']);
		$click2 = mysqli_real_escape_string($db, $_POST['click2']);
		$click3 = mysqli_real_escape_string($db, $_POST['click3']);
		$click4 = mysqli_real_escape_string($db, $_POST['click4']);
		$click5 = mysqli_real_escape_string($db, $_POST['click5']); 


/*
		$firstname = mysqli_real_escape_string($db, $_POST['firstname']);
		$lastname = mysqli_real_escape_string($db, $_POST['lastname']);
		$rollno = mysqli_real_escape_string($db, $_POST['rollno']);
		$college = mysqli_real_escape_string($db, $_POST['college']);
		$branch = mysqli_real_escape_string($db, $_POST['branch']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

		// form validation: ensure that the form is correctly filled
		if (empty($username)) { array_push($errors, "Username is required"); }
		if (empty($firstname)) { array_push($errors, "First Name is required"); }
		if (empty($lastname)) { array_push($errors, "Last Name is required"); }
		if (empty($rollno)) { array_push($errors, "Roll Number is required"); }
		if (empty($college)) { array_push($errors, "College Name is required"); }
		if (empty($branch)) { array_push($errors, "Branch Name is required"); }
		if (empty($password_1)) { array_push($errors, "Password is required"); }

		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}
		$query = "SELECT username FROM users WHERE username ='$username'";
		$fire = mysqli_query($db,$query) or die("Can not fire query to select username ".mysqli_query($db));

		if(mysqli_num_rows($fire)>0){
			array_push($errors, "Username is not available. Try another !!");
		}

		$query = "SELECT email FROM users WHERE email ='$email'";
		$fire = mysqli_query($db,$query) or die("Can not fire query to select username ".mysqli_query($db));

		if(mysqli_num_rows($fire)>0){
			array_push($errors, "Email is already Registered");
		}*/

		
		// register user if there are no errors in the form
		if (count($errors) == 0) {
			//$password = md5($password_1);//encrypt the password before saving in the database
			$query = "INSERT INTO jobs (deptname, jobname, appfee1, appfee2, appfee3, appfee4, date1, date2, date3, date4, date5, date6, date7, date8, date9, date10, pay1, pay2, age1, age2, age3, age4, post1, post2, post3, post4, post5, post6, post7, post8, post9, post10, totalpost1, totalpost2, totalpost3, totalpost4, totalpost5, totalpost6, totalpost7, totalpost8, totalpost9, totalpost10, elig1, elig2, elig3, elig4, elig5, elig6, elig7, elig8, elig9, elig10, linkname1, linkname2, linkname3, linkname4, linkname5, linkvalue1, linkvalue2, linkvalue3, linkvalue4, linkvalue5, click1, click2, click3, click4, click5) 
					  VALUES('$deptname', '$jobname', '$appfee1', '$appfee2', '$appfee3', '$appfee4', '$date1', '$date2', '$date3', '$date4', '$date5', '$date6', '$date7', '$date8', '$date9', '$date10', '$pay1', '$pay2', '$age1', '$age2', '$age3', '$age4', '$post1', '$post2', '$post3', '$post4', '$post5', '$post6', '$post7', '$post8', '$post9', '$post10', '$totalpost1', '$totalpost2', '$totalpost3', '$totalpost4', '$totalpost5', '$totalpost6', '$totalpost7', '$totalpost8', '$totalpost9', '$totalpost10', '$elig1', '$elig2', '$elig3', '$elig4', '$elig5', '$elig6', '$elig7', '$elig8', '$elig9', '$elig10', '$linkname1', '$linkname2', '$linkname3', '$linkname4', '$linkname5', '$linkvalue1', '$linkvalue2', '$linkvalue3', '$linkvalue4', '$linkvalue5', '$click1', '$click2', '$click3', '$click4', '$click5')";

			

			mysqli_query($db, $query);


			echo "<br/><br/><span>Data Inserted successfully...!!</span>";

			//$_SESSION['username'] = $username;
			//$_SESSION['success'] = "You are now logged in";
			//header('location: index.php');
		
		}
		else{
				echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
			}

	}

	// ... 

	// LOGIN USER
	if (isset($_POST['login_user'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['username'] = $username;
				//$_SESSION['success'] = "You are now logged in";
				header('location: index.php');
			}else {
				array_push($errors, "Wrong username/password combination");
			}
		}
	}

?>