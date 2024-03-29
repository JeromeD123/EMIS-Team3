<html>
	<head>
		<title>Sign-up</title>
	</head>

	<center>
		<body>
			<h1><strong>Welcome, Sign Up Here</strong></h1>
		</body>
	</center>

	<style>
					html, body {
						width: 100%;
						height: 100%;
						font-family: "Helvetica Neue", Helvetica, sans-serif;
						color: #444;
						-webkit-font-smoothing: antialiased;;
				}
					.container{
							width: 90%;
							margin: 0 auto;
					}

					header{
							background: #E0F0E2;
					}

					header::after{
							content: '';
							display: table;
							clear: both;
					}

					.logo{
							color: dimgrey;
							float: left;
							font-size: 30px;
							padding: 10px 0;
					}

					nav{
							float: right;
					}

					nav ul{
							margin: 0;
							padding: 0;
							list-style: none;
					}

					nav li{
							display: inline-block;
							margin-left: 70px;
							padding-top: 20px;

							position: relative;
					}

					nav a {
							color: dimgrey;
							text-decoration: none;
							text-transform: uppercase;
					}

					nav a:hover{
							color: black;
					}

					nav a::before{
							content: '';
							display:  block;
							height: 5px;
							background-color: dimgrey;

							position: absolute;
							top: 0;
							width: 0;

							transition: all ease-in-out 200ms;
					}

					nav a:hover::before{
							width: 100%;
					}

			</style>

	<head>
			<title>New User</title>
	</head>

	<body>
	<header>

			<div class="container">
					<a href="#" class="logo">EMIS</a>

					<nav>
							<ul>
									<li><a href="#">Home</a></li>
							</ul>
					</nav>
			</div>
	</header>

	<center>
	<p><font size = "+4"><strong>Sign Up</strong></font></p>
	<p>Please fill out the forms to create an account</p>
	</center>

<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

button:hover {
    opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
    padding: 16px;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}
</style>
<body>

	<form action="signup.php" method = "POST">
		<div class="container">

			<label for="First Name"><b>First Name</b></label>
			<input type="text" placeholder="Enter First Name" name="FirstName" required>

			<label for="Last Name"><b>Last Name</b></label>
			<input type="text" placeholder="Enter Last Name" name="LastName" required>

			<label for="email"><b>Email</b></label>
			<input type="text" placeholder="Enter Email" name="email" required>

			<label for="psw"><b>Password</b></label>
			<input type="password" placeholder="Enter Password" name="psw" required>

			<label for="psw-repeat"><b>Repeat Password</b></label>
			<input type="password" placeholder="Repeat Password" name="psw-repeat" required>

			<p>By creating an account you agree to our <a href="/terms.php" style="color:dodgerblue">Terms & Conditions</a>.</p>

			<div class="clearfix">
				<button type="button" class="cancelbtn"<a href="SignUp.php">>Cancel</a></button>
				<button type="submit" class="signupbtn"><a href="patientDash.php"i>Sign Up</a></button>
			</div>
		</div>
	</form>
</body>
</html>
