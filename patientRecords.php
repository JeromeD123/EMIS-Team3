
<!DOCTYPE html>

<html>
<head>
  <title>Patient Records</title>
</head>

<center>
  <body>
    <h1><strong>Patient Records</strong></h1>
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

        @import "compass/css3";

        .flex-container {
        padding: 0;
        margin: 0;
        list-style: none;

        display: -webkit-box;
        display: -moz-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;

        -webkit-flex-flow: row wrap;
        justify-content: space-around;
        }

        .form-field {
        }

    </style>

<head>
    <title>NavBase</title>
</head>

<body>
<header>

    <div class="container">
        <a href="patientDash.php" class="logo">EMIS</a>

        <nav>
            <ul>
                <li><a href="patientDash.php">Home</a></li>
                <li><a href="patientRecords.php">My Account</a></li>
                <li><a href="bookAppointment.php">Make Appointent</a></li>
                <li><a href="patientRecords.php">Records</a></li>
                <li><a href="billing.php">Billing</a></li>
                <li><a href="SignIn.php">Logout</a></li>
            </ul>
        </nav>
    </div>
</header>
<body>
<div id="PreRegistrationForm" enctype="multipart/form-data">        <h1>Patient Records</h1>
        <p>
        </p>
          <form>
            <fieldset id="patient-Records" style="background: #E0F0E2;">
                <legend class="sr-visible" style="padding:20px 0; font-size:20px;"> Patient Records </legend>
                <fieldset class="flex-container">
                    <legend class="sr-visible">Identification</legend>

                    <div>
                        <div>
                            <div>
                                <div id="patient-first-name" class="form-field">
                                    <label for="PatientFirstName">Patient First Name: John</label>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div>
                                <div id="patient-middle-initial" class="form-field">
                                    <label for="PatientMiddleInitial">Patient Middle Initial: </label>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div>
                        <div>
                            <div>
                                <div id="patient-last-name" class="form-field">
                                    <label for="PatientLastName">Patient Last Name Doe</label>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div>
                        <div>
                            <div>
                                <div id="state-of-birth" class="form-field">
                                    <label for="StateOfBirth">State of Birth: Texas*</label>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div>
                        <div>
                            <div>
                                <div id="patient-dob" class="form-field">
                                    <label for="PatientDob">Patient DOB: "12/12/1962"</label>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div>
                                <div id="patient-ssn" class="form-field">
                                    <label for="PatientSsn">Patient SSN: 999-99-9999 *</label>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div>
                        <div>
                            <div>
                                <div id="ethnicity" class="form-field">
                                    <label for="Ethnicity">Ethnicity: Unknown</label>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div>
                                <div id="preferred-language" class="form-field">
                                    <label for="PreferredLanguage">Preferred Language: English</label>
                                </div>
                            </div>
                        </div>
                    </div>


                        <div>
                            <div>
                                <div id="select-gender" class="form-field">
                                    <label for="SelectGender">Gender: Male *</label>
                                </div>
                            </div>
                        </div>



                    <div>
                        <div>
                            <div>
                                <div id="marital-status" class="form-field">
                                    <label for="MaritalStatus">Marital Status: Unknown</label>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div>
                                <div id="race" class="form-field">
                                    <label for="Race">Race: Unknown</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </fieldset>

                <fieldset style="background: #E0F0E2;">
                    <legend class="sr-visible">Contact Information</legend>

                    <div>
                        <div>
                            <div>
                                <div id="patient-address" class="form-field">
                                    <label for="PatientAddress">Patient Address: 1234 Unknown Blvd</label>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div>
                                <div id="patient-city" class="form-field">
                                    <label for="PatientCity">City: Unknown</label>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div>
                        <div>
                            <div>
                                <div id="patient-state" class="form-field">
                                    <label for="PatientState">State: Texas</label>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div>
                                <div id="patient-zip-code" class="form-field">
                                    <label for="PatientZipCode">Zip Code: 78345</label>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div>
                        <div>
                            <div>
                                <div id="patient-telephone-number" class="form-field">
                                    <label for="PatientTelephoneNumber">Telephone Number: 999-999-9999</label>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div>
                                <div id="patient-cell-phone-number" class="form-field">
                                    <label for="PatientCellPhoneNumber">Cell Phone Number: 999-999-9999</label>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div>
                        <div>
                            <div>
                                <div id="patient-email-address" class="form-field">
                                    <label for="PatientEmailAddress">Email Address: JohnDoe@example.com</label>
                            </div>
                        </div>
                    </div>

                    <fieldset style="background: #E0F0E2;">
                    <legend>Doctor notes:</legend>
                    <div id="Doctor Notes" class="form-field">
                        <div class="Note">No Doctor notes for John Doe</div>
                    </div>
                    </fieldset>

</div>
</body>
</html>
