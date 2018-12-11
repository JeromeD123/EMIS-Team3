<!DOCTYPE html>
<html lang="en">
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
    <title>Patient Home</title>
</head>

<body>
<header>

    <div class="container">
        <a href="10.100.118.103/patientDash.php" class="logo">EMIS</a>

        <nav>
            <ul>
                <li><a href="10.100.118.103/patientDash.php">Home</a></li>
                <li><a href="10.100.118.103/patientInfo.php">My Account</a></li>
                <li><a href="10.100.118.103/bookAppointment.php">Make Appointent</a></li>
                <li><a href="#">Records</a></li>
                <li><a href="10.100.118.103/billing.php">Billing</a></li>
                <li><a href="10.100.118.103/SignIn.php">Logout</a></li>
            </ul>
        </nav>
    </div>
</header>
</body>

<div class="container-fluid text-center">
    <div class="row content">
        <div class="col-sm-8 text-left">
            <h1>Welcome back, John!</h1>
            <h3>The Electronic Medical Information System is made to help you manage your account easier!
            If you wish to edit your personal infromation, you can find it under 'My Account'. Other options
            include making an appointment, viewing your records, and paying towards your balance. We
            hope you enjoy this new experience!</h3>
        </div>
        <div class="col-sm-2 sidenav">
        </div>
    </div>
</div>

<footer class="container-fluid text-center">
    <h4>For any additional information, please contact us!</h4>
</footer>

</body>
</html>
