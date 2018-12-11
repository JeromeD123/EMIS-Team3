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

        #amount {
  font-size: 12px;
}

#amount strong {
  font-size: 14px;
}

#card-back {
  top: 40px;
  right: 0;
  z-index: -2;
}

#card-btn {
  background-color: rgba(251, 251, 251, 0.8);
  color: #ffb242;
  position: absolute;
  bottom: -55px;
  right: 0;
  width: 150px;
  border-radius: 8px;
  height: 42px;
  font-size: 12px;
  font-family: lato, 'helvetica-light', 'sans-serif';
  text-transform: uppercase;
  letter-spacing: 1px;
  font-weight: 400;
  outline: none;
  border: none;
  cursor: pointer;
}

#card-btn:hover {
  background-color: rgba(251, 251, 251, 1);
}

#card-cvc {
  width: 60px;
  margin-bottom: 0;
}

#card-front,
#card-back {
  position: absolute;
  background-color: #498ee4;
  width: 390px;
  height: 250px;
  border-radius: 6px;
  padding: 20px 30px 0;
  box-sizing: border-box;
  font-size: 10px;
  letter-spacing: 1px;
  font-weight: 300;
  color: white;
}

#card-image {
  float: right;
  height: 100%;
}

#card-image i {
  font-size: 40px;
}

#card-month {
  width: 45% !important;
}

#card-number,
#card-holder {
  width: 100%;
}

#card-stripe {
  width: 100%;
  height: 55px;
  background-color: #3d5266;
  position: absolute;
  right: 0;
}

#card-success {
  color: #00b349;
}

#card-token {
  display: none;
}

#card-year {
  width: 45%;
  float: right;
}

#cardholder-container {
  width: 60%;
  display: inline-block;
}

#cvc-container {
  position: absolute;
  width: 110px;
  right: -115px;
  bottom: -10px;
  padding-left: 20px;
  box-sizing: border-box;
}

#cvc-container label {
  width: 100%;
}

#cvc-container p {
  font-size: 6px;
  text-transform: uppercase;
  opacity: 0.6;
  letter-spacing: .5px;
}

#form-container {
  margin: auto;
  width: 500px;
  height: 290px;
  position: relative;
}

#form-errors {
  color: #eb0000;
}

#form-errors,
#card-success {
  background-color: white;
  width: 500px;
  margin: 0 auto 10px;
  height: 50px;
  border-radius: 8px;
  padding: 0 20px;
  font-weight: 400;
  box-sizing: border-box;
  line-height: 46px;
  letter-spacing: .5px;
  text-transform: none;
}

#form-errors p,
#card-success p {
  margin: 0 5px;
  display: inline-block;
}

#exp-container {
  margin-left: 10px;
  width: 32%;
  display: inline-block;
  float: right;
}

.hidden {
  display: none;
}

#image-container {
  width: 100%;
  position: relative;
  height: 55px;
  margin-bottom: 5px;
  line-height: 55px;
}

#image-container img {
  position: absolute;
  right: 0;
  top: 0;
}

input {
  border: none;
  outline: none;
  background-color: #5a9def;
  height: 30px;
  line-height: 30px;
  padding: 0 10px;
  margin: 0 0 25px;
  color: white;
  font-size: 10px;
  box-sizing: border-box;
  border-radius: 4px;
  font-family: lato, 'helvetica-light', 'sans-serif';
  letter-spacing: .7px;
}

input::-webkit-input-placeholder {
  color: #fff;
  opacity: 0.7;
  font-family: lato, 'helvetica-light', 'sans-serif' letter-spacing: 1px;
  font-weight: 300;
  letter-spacing: 1px;
  font-size: 10px;
}

input:-moz-placeholder {
  color: #fff;
  opacity: 0.7;
  font-family: lato, 'helvetica-light', 'sans-serif' letter-spacing: 1px;
  font-weight: 300;
  letter-spacing: 1px;
  font-size: 10px;
}

input::-moz-placeholder {
  color: #fff;
  opacity: 0.7;
  font-family: lato, 'helvetica-light', 'sans-serif' letter-spacing: 1px;
  font-weight: 300;
  letter-spacing: 1px;
  font-size: 10px;
}

input:-ms-input-placeholder {
  color: #fff;
  opacity: 0.7;
  font-family: lato, 'helvetica-light', 'sans-serif' letter-spacing: 1px;
  font-weight: 300;
  letter-spacing: 1px;
  font-size: 10px;
}

input.invalid {
  border: solid 2px #eb0000;
  height: 34px;
}

label {
  display: block;
  margin: 0 auto 7px;
}

#shadow {
  position: absolute;
  right: 0;
  width: 284px;
  height: 214px;
  top: 36px;
  background-color: #000;
  z-index: -1;
  border-radius: 8px;
  box-shadow: 3px 3px 0 rgba(0, 0, 0, 0.1);
  -moz-box-shadow: 3px 3px 0 rgba(0, 0, 0, 0.1);
  -webkit-box-shadow: 3px 3px 0 rgba(0, 0, 0, 0.1);
}

  </style>
    <head>
        <title>Billing</title>
    </head>
<body>

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

<div class="container-fluid text-center">
    <div class="row content">
        <div class="col-sm-2 sidenav">
        </div>
        <div class="col-sm-8 text-left">
            <h1>Account Balance:</h1>
            <p>$0.00</p>
            <hr>
            <h4><strong>Make a Payment:</h4>
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

</body>
</html>
<<<<<<< HEAD
=======



>>>>>>> d35c28ab34eb0a21246e09d528b09cbb744e7d44
