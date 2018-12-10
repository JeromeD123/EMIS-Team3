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
        <a href="patientDash.html" class="logo">EMIS</a>

        <nav>
            <ul>
                <li><a href="patientDash.html">Home</a></li>
                <li><a href="#">My Account</a></li>
                <li><a href="#">Make Appointent</a></li>
                <li><a href="#">Records</a></li>
                <li><a href="billing.html">Billing</a></li>
                <li><a href="#">Logout</a></li>
            </ul>
        </nav>
    </div>
</header>
</body>

<div class="container-fluid text-center">
    <div class="row content">
        <div class="col-sm-8 text-left">
            <h1>Welcome back, John!</h1>
            <p>The Electronic Medical Information System is made to help you manage your account easier!
            If you wish to edit your personal infromation, you can find it under 'My Account'. Other options
            include making an appointment, viewing your records, and paying towards your balance. We
            hope you enjoy this new experience!</p>
        </div>
        <div class="col-sm-2 sidenav">
        </div>
    </div>
</div>

<footer class="container-fluid text-center">
    <p>For any additional information, please contact us!</p>
</footer>

</body>
</html>

