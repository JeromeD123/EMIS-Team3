<!DOCTYPE html>
<html lang="en">
<head>
    <title>Billing</title>
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
                <li><a href="patientDash.html">Home</a></li>
                <li><a href="#">Make Appointment</a></li>
                <li><a href="#">Records</a></li>
                <li class="active"><a href="10.100.118.103/billing">Billing</a></li>
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
        </div>
        <div class="col-sm-8 text-left">
            <h1>Account Balance:</h1>
            <p>(retrieve account balance)</p>
            <hr>
            <h3>If you wish to make a payment, you may do so below.</h3>
            <p><div id="card-success" class="hidden">
                <i class="fa fa-check"></i>
                <p>Payment Successful!</p>
            </div>
            <div id="form-errors" class="hidden">
                <i class="fa fa-exclamation-triangle"></i>
                <p id="card-error">Card error</p>
            </div>
            <div id="form-container">

                <div id="card-front">
                    <div id="shadow"></div>
                    <div id="image-container">
                        <span id="amount">paying: <strong>(account balance)</strong></span>
                        <span id="card-image">

        </span>
                    </div>
                    <!--- end card image container --->

                    <label for="card-number">
                        Card Number
                    </label>
                    <input type="text" id="card-number" placeholder="1234 5678 9101 1112" length="16">
                    <div id="cardholder-container">
                        <label for="card-holder">Card Holder
                        </label>
                        <input type="text" id="card-holder" placeholder="e.g. John Doe" />
                    </div>
                    <!--- end card holder container --->
                    <div id="exp-container">
                        <label for="card-exp">
                            Expiration
                        </label>
                        <input id="card-month" type="text" placeholder="MM" length="2">
                        <input id="card-year" type="text" placeholder="YY" length="2">
                    </div>
                    <div id="cvc-container">
                        <label for="card-cvc"> CVC/CVV</label>
                        <input id="card-cvc" placeholder="XXX-X" type="text" min-length="3" max-length="4">
                        <p>Last 3 or 4 digits</p>
                    </div>
                    <!--- end CVC container --->
                    <!--- end exp container --->
                </div>
                <!--- end card front --->
                <div id="card-back">
                    <div id="card-stripe">
                    </div>

                </div>
                <!--- end card back --->
                <input type="text" id="card-token" />
                <button type="button" id="card-btn">Submit</button>

            </div>
            <!--- end form container --->

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
            <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
            <script src="https://use.fontawesome.com/f1e0bf0cbc.js"></script>
    </div></p>
        <div class="col-sm-2 sidenav">
        </div>
    </div>
</div>

<footer class="container-fluid text-center">
    <p>For any additional information, please contact us!</p>
</footer>

</body>
</html>
