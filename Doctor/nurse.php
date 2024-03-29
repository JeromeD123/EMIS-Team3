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
                <li><a href="#">patient Notes</a></li>
                <li><a href="#">Receipt</a></li>
                <li><a href="#">Records</a></li>
                <li><a href="#">Upload Files</a></li>
                <li><a href="#">Edit Info</a></li>
                <li><a href="#">Logout</a></li>
            </ul>
        </nav>
    </div>
</header>
<div class="center" style="background-color:#ddd;">
    <h2> WELCOME Doctor/nurse</h2>
    <p>
        Today is 12/3/2018
    </p>
</div>
<div id="myOverlay" class="overlay">
	<span class="closebtn" onclick="closeSearch()" title="Close Overlay">x</span>
	<div class="overlay-content">
		<form action="/nurse.php">
			<input type="text" placeholder="Search.." name="search">
			<button type="submit"><i class="fa fa-search"></i></button>
		</form>
	</div>
</div>
<h2>Fullscreen Search</h2>
<button class="openBtn" onclick="openSearch()">Open Search Box</button>

<script>
function openSearch() {
	document.getElementById("myOverlay").style.display = "block";
}

function closeSearch(){
	document.getElementById("myOverlay").style.display = "none";
}
</script>
</body>
</html>
