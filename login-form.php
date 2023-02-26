<nav>
  <ul>
  	<li><a href="http://localhost:8888/HW2/login-form.php?">Login</a></li>
    <li><a href="http://localhost:8888/HW2/user-list.php">User List</a></li>
    <li><a href="http://localhost:8888/HW2/user-add.php">Add User</a></li>
    <li><a href="http://localhost:8888/HW2/user-details.php">User Details</a></li>
  </ul>
</nav>

<html>

	<head>

		<title>Login</title>
		
	</head>

	<body>

		<H1>Login</H1>
		<form action='somefile.php' method='post'>
			Username:<br>
			<input type='text' name='Username'><br>
			Password:<br>
			<input type='text' name='Password'><br><br>
			</form>

			<form action='http://localhost:8888/HW2/user-list.php'>
			<button class='button'>Submit</button>
			</form>
	</body>

</html>