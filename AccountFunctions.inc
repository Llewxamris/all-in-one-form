<?php
// errorMessage is set to empty string to start.
$errorMessage = '';
// An associative array of all of the fields on the page and their data.
$values = array("firstName" => $_POST['firstName'],
                "lastName" => $_POST['lastName'],
                "street" => $_POST['street'],
                "city" => $_POST['city'],
                "province" => $_POST['province'],
                "postalCode" => $_POST['postalCode'],
                "email" => $_POST['email'],
                "telephone" => $_POST['telephone'],
                "pass" => $_POST['pass'],
                "confirmPass" => $_POST['confirmPass']);

 function main() {
    // The main function that calls all the other functions.
    // Returns TRUE if no errors are found, and FALSE if errors are found.
    global $errorMessage; 
    global $values;
    $success = TRUE;
    $errorEnding = " Please enter a proper value" . "<br>";
    
    foreach($values as $key => $input) {
        // Trims each value
        $values[$key] = trim($input);
    } 

    if(validateExists($values['firstName']) == FALSE) {
        $errorMessage .= "First name is empty. $errorEnding";
        $values['firstName'] = "";
        $success = FALSE;
    }

    if(validateExists($values['lastName']) == FALSE) {
        $errorMessage .= "Last name is empty." . $errorEnding; 
        $values['lastName'] = "";
        $success = FALSE;
    }

    if(validateExists($values['street']) == FALSE) {
        $errorMessage .= "Street is empty." . $errorEnding; 
        $success = FALSE;
        $values['street'] = "";
    }
    
    if(validateExists($values['city']) == FALSE) {
        $errorMessage .= "City is empty." . $errorEnding;
        $success = FALSE;
        $values['city'] = "";
    }

    if(validateExists($values['postalCode']) == FALSE) {
        $errorMessage .= "Postal Code is empty." . $errorEnding;
        $success = FALSE;
        $values['postalCode'] = "";
    } else {
        if(!validatePostalCode($values['postalCode'])) {
            $errorMessage .= "Postal Code is not formatted correctly (A1A 1A1)." . $errorEnding;
            $success = FALSE;
            $values['postalCode'] = "";
        }
    }   

    if (!validateExists($values['email'])) {
        $errorMessage .= "Email is empty." . $errorEnding;
        $success = FALSE;
        $values['email'] = "";
    } else  {
        if (!validateEmail($values['email'])) {
            $errorMessage .= "Email is not formatted correctly. (abc@xyz.hjk)" . $errorEnding;
            $success = FALSE;
            $values['email'] = "";
        }
    }

    if (!validateExists($values['telephone'])) {
        $errorMessage .= "Phone number is empty." . $errorEnding;
        $success = FALSE;
        $values['telephone'] = "";
    } else {
        if (!validatePhone($values['telephone'])) {
            $errorMessage .= "Phone number is not formatted correctly (###-###-####)" . $errorEnding;
            $success = FALSE;
            $values['telephone'] = "";
        } 
    }

    if (!validateExists($values['pass']) OR !validateExists($values['confirmPass'])) {
        $errorMessage .= "Password is empty." . $errorEnding;
        $success = FALSE;
        $values['pass'] = "";
        $values['confirmPass'] = "";
    } else {
        if(!validatePass($values['pass'], $values['confirmPass'])) {
            $errorMessage .= "Passwords do not match." . $errorEnding;
            $success = FALSE;
            $values['pass'] = "";
            $values['confirmPass'] = "";
        } 
    }

    if ($success) {
        writeToFile();
        return $success; 
    } else {
        return $success;
    }
}
 

function validateExists($data) {
    // Makes sure the data is not empty.
    if($data != '') {
        return TRUE;
    } else {
        return FALSE;
    }
}

function validatePostalCode($pCode) {
    // Validates the postal code to specific regex.
    $expression = '/^[a-zA-Z][\d][a-zA-Z] [\d][a-zA-Z][\d]$/';
    if(preg_match($expression, $pCode)) {
        return true;
    } else {
        return false;
    }

}

function validateEmail($email) {
    // Validates the email address to specific regex.
    $expression = '/^[a-zA-Z0-9]+@[a-zA-Z0-9]+\.[a-zA-Z0-9]+$/';
    if(preg_match($expression, $email)) {
        return true;
    } else {
        return false;
    }

}

function validatePhone($phone) {
    // Validates the phone number to specific regex.
    $expression = '/^(\d){3}-(\d){3}-(\d){4}$/';
    if(preg_match($expression, $phone)) {
        return true;
    } else {
        return false;
    }
}

function validatePass($pass, $cPass) {
    // Validates that both passwords are the same.
    if($pass == $cPass) {
        return true;
    } else {
        return false;
    }
}

function hasError($data) {
    // Determins if the data had an error or not.
    global $values;
    if($data == "") {
        return "error";
    } else {
        return "";
    }
}

function writeToFile() {
    // Writes everything in the array $values to the file accounts.txt
    global $values;
    $textToFile = "";
    foreach ($values as $key => $input) {
        $textToFile .= $input . "~";
    }
    $textToFile .= "\r\n";
    file_put_contents("./accounts.txt", $textToFile, FILE_APPEND);
}
