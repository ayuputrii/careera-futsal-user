// call the login() function if register_btn is clicked
if (isset($_POST['login_btn'])) {
	login();
}

function login(){
	global $db, $admin, $errors;

	// grap form values
	$admin = e($_POST['admin']);
	$password = e($_POST['password']);

	// make sure form is filled properly
	if (empty($admin)) {
		array_push($errors, "admin is required");
	}
	if (empty($password)) {
		array_push($errors, "Password is required");
	}

	// attempt login if no errors on form
	if (count($errors) == 0) {
		$password = md5($password);

		$query = "SELECT * FROM users WHERE admin='$admin' AND password='$password' LIMIT 1";
		$results = mysqli_query($db, $query);

		if (mysqli_num_rows($results) == 1) { // user found
			// check if user is admin or user
			$logged_in_user = mysqli_fetch_assoc($results);
			if ($logged_in_user['user_type'] == 'admin') {

				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";
				header('location: admin/home.php');		  
			}else{
				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";

				header('location: index.php');
			}
		}else {
			array_push($errors, "Wrong admin/password combination");
		}
	}
}