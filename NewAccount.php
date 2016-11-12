<!DOCTYPE HTML>
<html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />

    <title>Register a New Account</title>

</head>

<body>
    <h1>Register a New Account!</h1>
    <h2>Your almost ready to use our fabulous product, just fill out this form!</h2>
    <hr />

    <form action="" method="post">
        <label for="firstName">First Name: </label>
        <input type="text" name="firstName" id="firstName" value="" placeholder="George"
        />
        <br /><br />

        <label for="lastName">Last Name: </label>
        <input type="text" name="lastName" id="lastName" value="" placeholder="Sekely"
        /><br /><br />

        <label for="street">Street: </label>
        <input type="text" name="street" id="street" value="" placeholder="123 Nowhere Ave"
        /><br /><br />

        <label for="city">City: </label>
        <input type="type" name="city" id="city" value="" placeholder="Gatineau" />
        <br /><br />

        <label for="province">Province: </label>
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

        <label for="postalCode">Postal Code: </label>
        <input type="text" name="postalCode" id="postalCode" value="" placeholder="J8Y 6T3"
        />
        <br /><br />

        <label for="email">Email: </label>
        <input type="text" name="email" id="email" value="" placeholder="gsekely@videotron.ca"
        />
        <br /><br />

        <label for="telephone">Telephone: </label>
        <input type="text" name="telephone" id="teleponge" value="" placeholder="819-778-2270"
        />
        <br /><br />

        <label for="pass">Password: </label>
        <input type="password" name="pass" id="pass" value="" />
        <br /><br />

        <label for="confirmPass">Confirm Password: </label>
        <input type="password" name="confirmPass" id="confirmPass" value="" />
        <br /><br />

        <input type="submit" name="submit" id="submit" value="Register Now!" />
    </form>
    <hr />
    <p>copyright 2016</p>
</body>

</html>
