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
        
        div.container4 {
            height: 10em;
            position: relative 
        }
        div.container4 p {
            margin: 0;
            position: absolute;
            top: 20%;
            left: 50%;
            margin-right: -50%;
            transform: translate(-50%, -50%) 
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
        
        * {box-sizing: border-box;}
        ul {list-style-type: none;}
        body {font-family: Verdana, sans-serif;}

        .month {
            padding: 70px 25px;
            width: 100%;
            background: #E0F0E2;
            text-align: center;
        }

        .month ul {
            margin: 0;
            padding: 0;
        }

        .month ul li {
            color: dimgray;
            font-size: 20px;
            text-transform: uppercase;
            letter-spacing: 3px;
        }

        .month .prev {
            float: left;
            padding-top: 10px;
        }

        .month .next {
            float: right;
            padding-top: 10px;
        }

        .weekdays {
            margin: 0;
            padding: 10px 0;
            background-color: #ddd;
        }

        .weekdays li {
            display: inline-block;
            width: 13.6%;
            color: #666;
            text-align: center;
        }

        .days {
            padding: 10px 0;
            background: #eee;
            margin: 0;
        }

        .days li {
            list-style-type: none;
            display: inline-block;
            width: 13.6%;
            text-align: center;
            margin-bottom: 5px;
            font-size:12px;
            color: #777;
        }

        .days li .active {
            padding: 5px;
            background: #E0F0E2;
            color: dimgray!important
        }

        /* Add media queries for smaller screens */
        @media screen and (max-width:720px) {
            .weekdays li, .days li {width: 13.1%;}
        }

        @media screen and (max-width: 420px) {
            .weekdays li, .days li {width: 12.5%;}
            .days li .active {padding: 2px;}
        }

        @media screen and (max-width: 290px) {
            .weekdays li, .days li {width: 12.2%;}
        }
        
    </style>

    <head>
		<title>Make Appointment</title>
	</head>
    
    <body>
    <header>
        
        <div class="container">
            <a href="patientDash.php" class="logo">EMIS</a>
            
            <nav>
                <ul>
                    <li><a href="patientDash.php">Home</a></li>
                    <li><a href="patientInfo.php">My Account</a></li>
                    <li><a href="bookAppointment.php">Make Appointent</a></li>
                    <li><a href="#">Records</a></li>
                    <li><a href="billing.php">Billing</a></li>
                    <li><a href="SignIn.php">Logout</a></li>
                </ul>
            </nav>
        </div>
    </header>
        <div class=container4>
          <p>Book Appointment
        </div>
        <div class="month">      
          <ul>
            <li class="prev">&#10094;</li>
            <li class="next">&#10095;</li>
            <li>
              August<br>
              <span style="font-size:18px">2017</span>
            </li>
          </ul>
        </div>

        <ul class="weekdays">
          <li>Mo</li>
          <li>Tu</li>
          <li>We</li>
          <li>Th</li>
          <li>Fr</li>
          <li>Sa</li>
          <li>Su</li>
        </ul>

        <ul class="days">  
          <li>1</li>
          <li>2</li>
          <li>3</li>
          <li>4</li>
          <li>5</li>
          <li>6</li>
          <li>7</li>
          <li>8</li>
          <li>9</li>
          <li><span class="active">10</span></li>
          <li>11</li>
          <li>12</li>
          <li>13</li>
          <li>14</li>
          <li>15</li>
          <li>16</li>
          <li>17</li>
          <li>18</li>
          <li>19</li>
          <li>20</li>
          <li>21</li>
          <li>22</li>
          <li>23</li>
          <li>24</li>
          <li>25</li>
          <li>26</li>
          <li>27</li>
          <li>28</li>
          <li>29</li>
          <li>30</li>
          <li>31</li>
        </ul>
    </body>
</html>
