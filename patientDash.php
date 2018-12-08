<!DOCTYPE html>
<html lang="en">
<head>
    <title>EMIS Patient</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
    /* Remove the navbar's default margin-bottom and rounded borders */
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }

    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}

    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #E0F0E2;
      height: 100%;
    }

    /* Set black background color, white text and some padding */
    footer {
      background-color: #E0F0E2;
      color: white;
      padding: 15px;
    }

    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;}
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">EMIS</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="10.100.118.103/patientDash">Home</a></li>
                <li><a href="10.100.118.103">Make Appointment</a></li>
                <li><a href="#">Records</a></li>
                <li><a href="billing.html">Billing</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid text-center">
    <div class="row content">
        <div class="col-sm-2 sidenav">
            <p><a href="#">My Account</a></p>
        </div>
        <div class="col-sm-8 text-left">
            <h1>Welcome back, user</h1>
            <p>The Electronic Medical Information System is made to help you manage your account easier!
            If you wish to edit your personal infromation, you can find it under 'My Account'. Other options
            include making an appointment, viewing your records, and seting up your billing information. We
            hope you enjoy rhis new experience!</p>
            <hr>
            <h3>Test</h3>
            <p>Aditional options, disclaimers...</p>
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

