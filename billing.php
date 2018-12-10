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
        <title>Billing</title>
    </head>
<body>

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

<div class="container-fluid text-center">
    <div class="row content">
        <div class="col-sm-2 sidenav">
        </div>
        <div class="col-sm-8 text-left">
            <h1>Account Balance:</h1>
            <p>$0.00</p>
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
                        <span id="amount">paying: <strong>$0.00</strong></span>
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



