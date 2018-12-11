<html>
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
    <title>NavBase</title>
</head>
<body>
<header>

    <div class="container">
        <a href="#" class="logo">EMIS</a>

        <nav>
            <ul>
                <li><a href="#">Appointments</a></li>
                <li><a href="#">Pay Bill</a></li>
                <li><a href="#">View Info</a></li>
                <li><a href="#">Edit Info</a></li>
                <li><a href="#">Logout</a></li>
            </ul>
        </nav>
    </div>
</header>
<div class="center" style="background-color:#ddd;">
    <h2> WELCOME John Doe</h2>
    <p>
        Today is 12/3/2018
        you have no appointments schedule for today.
    </p>
</div>
</body>
</html>
