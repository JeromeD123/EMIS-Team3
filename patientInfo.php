
<!DOCTYPE html>

<html>
<head>
  <title>Patient Info</title>
</head>

<center>
  <body>
    <h1><strong>Patient Information</strong></h1>
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
        <a href="#" class="logo">EMIS</a>

        <nav>
            <ul>
                <li><a href="patientDash.php">Home</a></li>
                <li><a href="patientInfo.php">My Account</a></li>
                <li><a href="bookAppointment.php">Make Appointent</a></li>
                <li><a href="patientRecords.php">Records</a></li>
                <li><a href="billing.php">Billing</a></li>
                <li><a href="10.100.118.103/SignIn.php">Logout</a></li>
            </ul>
        </nav>
    </div>
</header>
<body>
<div id="PreRegistrationForm" enctype="multipart/form-data">        <h1>Patient Information</h1>
        <p>
            Please fill out the form below
        </p>
          <form>
            <fieldset id="patient-info" style="background: #E0F0E2;">
                <legend class="sr-visible" style="padding:20px 0; font-size:20px;"> Patient Info </legend>
                <fieldset class="flex-container">
                    <legend class="sr-visible">Identification</legend>

                    <div>
                        <div>
                            <div>
                                <div id="patient-first-name" class="form-field">
                                    <label for="PatientFirstName">Patient First Name *</label>
                                    <input id="PatientFirstName" name="PatientFirstName" type="text" value="John" />
                                </div>
                            </div>
                        </div>
                        <div>
                            <div>
                                <div id="patient-middle-initial" class="form-field">
                                    <label for="PatientMiddleInitial">Patient Middle Initial</label>
                                    <input id="PatientMiddleInitial" name="PatientMiddleInitial" type="text" value="" />
                                </div>
                            </div>
                        </div>
                    </div>


                    <div>
                        <div>
                            <div>
                                <div id="patient-last-name" class="form-field">
                                    <label for="PatientLastName">Patient Last Name *</label>
                                    <input id="PatientLastName" name="PatientLastName" type="text" value="Doe" />
                                </div>
                            </div>
                        </div>
                    </div>


                    <div>
                        <div>
                            <div>
                                <div id="state-of-birth" class="form-field">
                                    <label for="StateOfBirth">State of Birth *</label>
                                    <select id="StateOfBirth" name="StateOfBirth">
                                            <option value="Please Select a State">Please Select a State</option>
                                            <option value="Alabama">Alabama</option>
                                            <option value="Alaska">Alaska</option>
                                            <option value="Arizona">Arizona</option>
                                            <option value="Arkansas">Arkansas</option>
                                            <option value="California">California</option>
                                            <option value="Colorado">Colorado</option>
                                            <option value="Connecticut">Connecticut</option>
                                            <option value="Delaware">Delaware</option>
                                            <option value="Florida">Florida</option>
                                            <option value="Georgia">Georgia</option>
                                            <option value="Hawaii">Hawaii</option>
                                            <option value="Idaho">Idaho</option>
                                            <option value="Illinois">Illinois</option>
                                            <option value="Indiana">Indiana</option>
                                            <option value="Iowa">Iowa</option>
                                            <option value="Kansas">Kansas</option>
                                            <option value="Kentucky">Kentucky</option>
                                            <option value="Louisiana">Louisiana</option>
                                            <option value="Maine">Maine</option>
                                            <option value="Maryland">Maryland</option>
                                            <option value="Massachusetts">Massachusetts</option>
                                            <option value="Michigan">Michigan</option>
                                            <option value="Minnesota">Minnesota</option>
                                            <option value="Mississippi">Mississippi</option>
                                            <option value="Missouri">Missouri</option>
                                            <option value="Montana">Montana</option>
                                            <option value="Nebraska">Nebraska</option>
                                            <option value="Nevada">Nevada</option>
                                            <option value="New Hampshire">New Hampshire</option>
                                            <option value="New Jersey">New Jersey</option>
                                            <option value="New Mexico">New Mexico</option>
                                            <option value="New York">New York</option>
                                            <option value="North Carolina">North Carolina</option>
                                            <option value="North Dakota">North Dakota</option>
                                            <option value="Ohio">Ohio</option>
                                            <option value="Oklahoma">Oklahoma</option>
                                            <option value="Oregon">Oregon</option>
                                            <option value="Pennsylvania">Pennsylvania</option>
                                            <option value="Rhode Island">Rhode Island</option>
                                            <option value="South Carolina">South Carolina</option>
                                            <option value="South Dakota">South Dakota</option>
                                            <option value="Tennessee">Tennessee</option>
                                            <option selected="selected" value="Texas">Texas</option>
                                            <option value="Utah">Utah</option>
                                            <option value="Vermont">Vermont</option>
                                            <option value="Virginia">Virginia</option>
                                            <option value="Washington">Washington</option>
                                            <option value="West Virginia">West Virginia</option>
                                            <option value="Wisconsin">Wisconsin</option>
                                            <option value="Wyoming">Wyoming</option>
                                    </select>
                                </div>
                                <div id="outside-of-us" class="form-field checkbox">
                                    <input id="BirthOutsideOfUS" name="BirthOutsideOfUS" type="checkbox" value="true" /><input name="BirthOutsideOfUS" type="hidden" value="false" />
                                    <label for="BirthOutsideOfUS">Outside of U.S.</label>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div>
                        <div>
                            <div>
                                <div id="patient-dob" class="form-field">
                                    <label for="PatientDob">Patient DOB *</label>
                                    <input id="PatientDob" name="PatientDob" type="text" value="12/12/1962" />
                                    <div class="sfExample">mm/dd/yyyy</div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div>
                                <div id="patient-ssn" class="form-field">
                                    <label for="PatientSsn">Patient SSN *</label>
                                    <input id="PatientSsn" name="PatientSsn" type="text" value="999-99-9999" />
                                    <div class="sfExample">999-99-9999</div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div>
                        <div>
                            <div>
                                <div id="ethnicity" class="form-field">
                                    <label for="Ethnicity">Ethnicity *</label>
                                    <select id="Ethnicity" name="Ethnicity">
                                            <option value="Please Select an Ethnicity">Please Select an Ethnicity</option>
                                            <option value="Hispanic">Hispanic</option>
                                            <option value="Non-Hispanic">Non-Hispanic</option>
                                            <option selected="selected" value="Unknown ">Unknown </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div>
                                <div id="preferred-language" class="form-field">
                                    <label for="PreferredLanguage">Preferred Language *</label>
                                    <select id="PreferredLanguage" name="PreferredLanguage">
                                            <option value="Please Select a Preferred Language">Please Select a Preferred Language</option>
                                            <option selected="selected" value="English">English</option>
																						<option value="Spanish">Spanish</option>
                                            <option value="French">French</option>
                                            <option value="German">German</option>
                                            <option value="Hindi">Hindi</option>
                                            <option value="Japanese">Japanese</option>
																						<option value="Chinese">Chinese</option>
                                            <option value="Portuguese">Portuguese</option>
                                            <option value="Russian">Russian</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>


                        <div>
                            <div>
                                <div id="select-gender" class="form-field">
                                    <label for="SelectGender">Gender *</label>
                                    <select id="SelectGender" name="SelectGender">
                                            <option value="Please Select a Gender">Please Select a Gender</option>
                                            <option value="Female">Female</option>
                                            <option value="Male">Male</option>
                                    </select>
                                </div>
                            </div>
                        </div>



                    <div>
                        <div>
                            <div>
                                <div id="marital-status" class="form-field">
                                    <label for="MaritalStatus">Marital Status *</label>
                                    <select id="MaritalStatus" name="MaritalStatus">
                                            <option value="Please Select a Marital Status">Please Select a Marital Status</option>
                                            <option value="Divorced">Divorced</option>
                                            <option value="Life Partner">Life Partner</option>
                                            <option value="Married">Married</option>
                                            <option value="Separated">Separated</option>
                                            <option value="Single">Single</option>
                                            <option selected="selected" value="Unknown">Unknown</option>
                                            <option value="Widowed">Widowed</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div>
                                <div id="race" class="form-field">
                                    <label for="Race">Race *</label>
                                    <select id="Race" name="Race">
                                            <option value="Please Select a Race">Please Select a Race</option>
                                            <option value="African-American">African-American</option>
                                            <option value="Asian">Asian</option>
                                            <option value="Caucasian">Caucasian</option>
                                            <option value="Native American">Native American</option>
                                            <option value="Other">Other</option>
                                            <option value="Pacific Islander">Pacific Islander</option>
                                            <option selected="selected" value="Unknown">Unknown</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </fieldset>

                <fieldset style="background: #E0F0E2;">
                    <legend class="sr-visible">Contact information</legend>

                    <div>
                        <div>
                            <div>
                                <div id="patient-address" class="form-field">
                                    <label for="PatientAddress">Patient Address *</label>
                                    <input id="PatientAddress" name="PatientAddress" type="text" value="1234 Unknown Blvd" />
                                </div>
                            </div>
                        </div>
                        <div>
                            <div>
                                <div id="patient-city" class="form-field">
                                    <label for="PatientCity">City *</label>
                                    <input id="PatientCity" name="PatientCity" type="text" value="Unknown" />
                                </div>
                            </div>
                        </div>
                    </div>


                    <div>
                        <div>
                            <div>
                                <div id="patient-state" class="form-field">
                                    <label for="PatientState">State *</label>
                                    <select id="PatientState" name="PatientState">
                                            <option value="Please Select a State">Please Select a State</option>
                                            <option value="Alabama">Alabama</option>
                                            <option value="Alaska">Alaska</option>
                                            <option value="Arizona">Arizona</option>
                                            <option value="Arkansas">Arkansas</option>
                                            <option value="California">California</option>
                                            <option value="Colorado">Colorado</option>
                                            <option value="Connecticut">Connecticut</option>
                                            <option value="Delaware">Delaware</option>
                                            <option value="Florida">Florida</option>
                                            <option value="Georgia">Georgia</option>
                                            <option value="Hawaii">Hawaii</option>
                                            <option value="Idaho">Idaho</option>
                                            <option value="Illinois">Illinois</option>
                                            <option value="Indiana">Indiana</option>
                                            <option value="Iowa">Iowa</option>
                                            <option value="Kansas">Kansas</option>
                                            <option value="Kentucky">Kentucky</option>
                                            <option value="Louisiana">Louisiana</option>
                                            <option value="Maine">Maine</option>
                                            <option value="Maryland">Maryland</option>
                                            <option value="Massachusetts">Massachusetts</option>
                                            <option value="Michigan">Michigan</option>
                                            <option value="Minnesota">Minnesota</option>
                                            <option value="Mississippi">Mississippi</option>
                                            <option value="Missouri">Missouri</option>
                                            <option value="Montana">Montana</option>
                                            <option value="Nebraska">Nebraska</option>
                                            <option value="Nevada">Nevada</option>
                                            <option value="New Hampshire">New Hampshire</option>
                                            <option value="New Jersey">New Jersey</option>
                                            <option value="New Mexico">New Mexico</option>
                                            <option value="New York">New York</option>
                                            <option value="North Carolina">North Carolina</option>
                                            <option value="North Dakota">North Dakota</option>
                                            <option value="Ohio">Ohio</option>
                                            <option value="Oklahoma">Oklahoma</option>
                                            <option value="Oregon">Oregon</option>
                                            <option value="Pennsylvania">Pennsylvania</option>
                                            <option value="Rhode Island">Rhode Island</option>
                                            <option value="South Carolina">South Carolina</option>
                                            <option value="South Dakota">South Dakota</option>
                                            <option value="Tennessee">Tennessee</option>
                                            <option selected="selected" value="Texas">Texas</option>
                                            <option value="Utah">Utah</option>
                                            <option value="Vermont">Vermont</option>
                                            <option value="Virginia">Virginia</option>
                                            <option value="Washington">Washington</option>
                                            <option value="West Virginia">West Virginia</option>
                                            <option value="Wisconsin">Wisconsin</option>
                                            <option value="Wyoming">Wyoming</option>
                                    </select>
                                </div>
                                <div id="patient-outside-of-us" class="form-field checkbox">
                                    <input id="PatientOutsideOfUS" name="PatientOutsideOfUS" type="checkbox" value="true" /><input name="PatientOutsideOfUS" type="hidden" value="false" />
                                    <label for="PatientOutsideOfUS">Outside of U.S.</label>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div>
                                <div id="patient-zip-code" class="form-field">
                                    <label for="PatientZipCode">Zip Code *</label>
                                    <input id="PatientZipCode" name="PatientZipCode"  type="text" value="78345" />
                                </div>
                            </div>
                        </div>
                    </div>


                    <div>
                        <div>
                            <div>
                                <div id="patient-telephone-number" class="form-field">
                                    <label for="PatientTelephoneNumber">Telephone Number *</label>
                                    <input id="PatientTelephoneNumber" name="PatientTelephoneNumber"  type="text" value="999-999-9999" />
                                    <div class="sfExample">999-999-9999</div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div>
                                <div id="patient-cell-phone-number" class="form-field">
                                    <label for="PatientCellPhoneNumber">Cell Phone Number</label>
                                    <input id="PatientCellPhoneNumber" name="PatientCellPhoneNumber" type="text" value="999-999-9999" />
                                    <div class="sfExample">999-999-9999</div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div>
                        <div>
                            <div>
                                <div id="patient-email-address" class="form-field">
                                    <label for="PatientEmailAddress">Email Address *</label>
                                    <input id="PatientEmailAddress" name="PatientEmailAddress" type="text" value="JohnDoe@example.com" />
                                </div>
                                <div id="patient-email-address-na" class="form-field checkbox">
                                    <input id="PatientEmailAddressNA" type="checkbox" />
                                    <label for="PatientEmailAddressNA">Not Applicable</label>

                                </div>
                            </div>
                        </div>
                    </div>


                    <div>
                        <div>
                            <div>
                                <fieldset>
                                    <legend>Best way to contact you?</legend>
                                    <div id="best-way-to-contact" class="form-field checkbox">
                                        <input id="BestWayToContactYouPhone" name="BestWayToContactYouPhone" type="checkbox" value="true" /><input name="BestWayToContactYouPhone" type="hidden" value="false" />
                                        <label for="BestWayToContactYouPhone">Phone</label>
                                        <input id="BestWayToContactYouEmail" name="BestWayToContactYouEmail" type="checkbox" value="true" /><input name="BestWayToContactYouEmail" type="hidden" value="false" />
                                        <label for="BestWayToContactYouEmail">Email</label>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </fieldset>

                <div class="form-group">
  <div>
    <button type="submit" class="btn" >Send </button>
  </div>
</div>
</body>
</html>
