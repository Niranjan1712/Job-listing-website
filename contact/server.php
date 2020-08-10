<?php 
	session_start();

	// variable declaration
	$name = "";
	$email = "";
	$message = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('sql207.epizy.com', 'epiz_25468334', 'Wog8pxAxXt', 'epiz_25468334_contact','3306');

	// REGISTER USER
	if (isset($_POST['submit'])) {
		// receive all input values from the form

		$name = mysqli_real_escape_string($db, $_POST['name']);
		$email  = mysqli_real_escape_string($db, $_POST['email']);
		$message = mysqli_real_escape_string($db, $_POST['message']);
		
	


		// form validation: ensure that the form is correctly filled
		if (empty($name)) { array_push($errors, "name is required"); }
		if (empty($email)) { array_push($errors, "Email is required"); }
		if (empty($message)) { array_push($errors, "Message is required"); }
		
	

		
		// register user if there are no errors in the form
		if (count($errors) == 0) {
			//$password = md5($password_1);//encrypt the password before saving in the database
			$query = "INSERT INTO comments (name, email, message) 
					  VALUES('$name', '$email', '$message')";

			

			mysqli_query($db, $query);

			array_push($errors, "Thank You! Your response have been submitted");

			//$_SESSION['username'] = $username;
			//$_SESSION['success'] = "You are now logged in";
			//header('location: index.php');
		
		}
		else{
				array_push($errors, "submission Failed");
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