<!DOCTYPE HTML>
<html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="./style.css" type="text/css" />
    <title>Register a New Account</title>

</head>

<body>
    <?php
    include_once './AccountFunctions.php';
    ?>
        <header>
            <h1>Register a New Account!</h1>
            <h2>Your almost ready to use our fabulous product, just fill out this form!</h2>
        </header>
        <hr />
        <div id="errorWords">
        <?php
        if (isset($_POST['submit'])) {
            main();
            echo $errorMessage;
        }
        ?>
        <br />
        </div>
        <form action='' method="post">
            <input type="text" name="firstName" id="firstName" value="" placeholder="First Name"
                class="error">
            <br /><br />

            <input type="text" name="lastName" id="lastName" value="" placeholder="Last Name">
            <br /><br />

            <input type="text" name="street" id="street" value="" placeholder="Street">
            <br /><br />

            <input type="type" name="city" id="city" value="" placeholder="City">
            <br /><br />

            <select name="province" id="province">
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

            <input type="text" name="postalCode" id="postalCode" value="" placeholder="Postal Code">
            <br /><br />

            <input type="text" name="email" id="email" value="" placeholder="E-mail Address">
            <br /><br />

            <input type="text" name="telephone" id="teleponge" value="" placeholder="Phone Number">
            <br /><br />

            <input type="password" name="pass" id="pass" value="" placeholder="Password">
            <br /><br />

            <input type="password" name="confirmPass" id="confirmPass" value="" placeholder="Confirm Password">
            <br /><br />

            <input type="submit" name="submit" id="submit" value="Register Now!">
        </form>
        <hr />
        <p>&#169; 2016</p>
</body>

</html>
