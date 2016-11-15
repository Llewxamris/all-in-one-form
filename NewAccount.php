<!DOCTYPE HTML>
<html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="./style.css" type="text/css" />
    <title>Register a New Account</title>

</head>

<body>
    <?php
    // Import AccountFunctions.inc to get access to the main function
    include_once './AccountFunctions.inc';
    ?>
        <header>
            <h1>Register a New Account!</h1>
            <h2>Your almost ready to use our fabulous product, just fill out this form!</h2>
        </header>
        <hr />
        <?php
            if (isset($_POST['submit'])) {
                // Run the following if the form has previously been submitted
                $success = main();
                echo "<div id=\"errorWords\" style=\"display: hidden\">";
                echo $errorMessage;
                echo "</div>";
            }
            
            if(!$success) {
                // If the form did not pass validation (or its the first time running), end the PHP script.
            ?>
            <br />
            <!-- Values is set to the users input if the input was valid, and '' if it was not.
                 If it retuned as '', set the class to error.  -->
            <form action='' method="post">
                <input type="text" name="firstName" id="firstName" value="<?php echo $values['firstName'] ?>"
                    placeholder="First Name" class="<?php if (isset($_POST['submit'])) { echo hasError($values['firstName']);} ?>">
                <br /><br />

                <input type="text" name="lastName" id="lastName" value="<?php echo $values['lastName'] ?>"
                    placeholder="Last Name" class="<?php if (isset($_POST['submit'])) { echo hasError($values['lastName']);} ?>">
                <br /><br />

                <input type="text" name="street" id="street" value="<?php echo $values['street'] ?>"
                    placeholder="Street" class="<?php if (isset($_POST['submit'])) { echo hasError($values['street']); } ?>">
                <br /><br />

                <input type="type" name="city" id="city" value="<?php echo $values['city'] ?>"
                    placeholder="City" class="<?php if (isset($_POST['submit'])) { echo hasError($values['city']); } ?>">
                <br /><br />

                <select name="province" id="province" class="<?php if (isset($_POST['submit'])) { echo hasError($values['province']); } ?>">
                    <option value="" disabled="disabled" selected="selected">Please choose you province</option>
                    <option value="ON">Ontario</option> 
                    <option value="QC">Quebec</option>
                    <option value="BC">British Columbia</option>
                    <option value="AB">Alberta</option>
                    <option value="MB">Manitoba</option>
                    <option value="SK">Saskatchewan</option>
                    <option value="NS">Nova Scotia</option>
                    <option value="NB">New Brunswick</option>
                    <option value="NL">Newfoundland and Labrador</option>
                    <option value="PE">Prince Edward Island</option>
                    <option value="NT">Northwest Territories</option>
                    <option value="YK">Yukon</option>
                    <option value="NV">Nunavut</option>
        </select>
                <br /><br />

                <input type="text" name="postalCode" id="postalCode" value="<?php echo $values['postalCode'] ?>"
                    placeholder="Postal Code" class="<?php if (isset($_POST['submit'])) { echo hasError($values['postalCode']);} ?>">
                <br /><br />

                <input type="text" name="email" id="email" value="<?php echo $values['email'] ?>"
                    placeholder="E-mail Address" class="<?php if (isset($_POST['submit'])) { echo hasError($values['email']); } ?>">
                <br /><br />

                <input type="text" name="telephone" id="telephone" value="<?php $values['telephone'] ?>"
                    placeholder="Phone Number" class="<?php if (isset($_POST['submit'])) { echo hasError($values['telephone']); } ?>">
                <br /><br />

                <input type="password" name="pass" id="pass" value="" placeholder="Password" class="<?php if (isset($_POST['submit'])) { echo hasError($values['pass']); } ?>">
                <br /><br />

                <input type="password" name="confirmPass" id="confirmPass" value="" placeholder="Confirm Password"
                    class="<?php if (isset($_POST['submit'])) { echo hasError($values['confirmPass']); } ?>">
                <br /><br />

                <input type="submit" name="submit" id="submit" value="Register Now!">
            </form>
            <?php
            } else {
            echo "<p>Thanks for registering! You will recieve an email when your account is ready.</p>";
            }
?>
                <hr />
                <p>&#169; 2016</p>
</body>

</html>
