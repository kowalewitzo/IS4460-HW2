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
		<title>Add User</title>
	</head>
	<body>
	<H1>Add New User</H1>
	First Name:<br>
	<input type='text' name='First Name'><br>
	Last Name:<br>
	<input type='text' name='Last Name'><br>
	Email Address:<br>
	<input type='text' name='Email Address'><br>
	Address:<br>
	<input type='text' name='Address'><br>
	Job Title:<br>
	<input type='text' name='Job Title'><br><br>
	</body>
	
	<form action='http://localhost:8888/HW2/user-list.php'>
	<button class='button'>Submit</button>
	</form>	
</html>
