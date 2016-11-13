<?php
$errorMessage = '';

 function main() {
    global $errorMessage; 
    $firstName = trim($_POST[firstName]);    
    $lastName = trim($_POST[lastName]);    
    $street = trim($_POST[street]);    
    $city = trim($_POST[city]);    
    $province = trim($_POST[province]);    
    $postalCode = trim($_POST[postalCode]);    
    $email = trim($_POST[email]);    
    $telephone = trim($_POST[telephone]);    
    $pass = trim($_POST[pass]);    
    $confirmPass = trim($_POST[confirm]);    
    $success = TRUE;
    $errorEnding = " Please enter a proper value \n";

    if(validateExists($firstName) == FALSE) {
        $errorMessage = "First name is empty." . $errorEnding;
        $success = FALSE;
    }

    if(validateExists($lastName) == FALSE) {
        $errorMessage = "Last name is empty." . $errorEnding; 
        $success = FALSE;
    }

    if(validateExists($street) == FALSE) {
        $errorMessage = "Street is empty." . $errorEnding; 
        $success = FALSE;
    }
    
    if(validateExists($city) == FALSE) {
        $errorMessage = "City is empty." . $errorEnding;
        $success = FALSE;
    }

    if(validateExists($postalCode) == FALSE) {
        $errorMessage = "Postal Code is empty." . $errorEnding;
        $success = FALSE;
    } else {
        if(!validatePostalCode($postalCode)) {
            $errorMessage = "Postal Code is not formatted correctly (A1A 1A1)." . $errorEnding;
            $success = FALSE;
        }
    }   

    if (!validateExists($email)) {
        $errorMessage = "Email is empty." . $errorEnding;
        $success = FALSE;
    } else  {
        if (!validateEmail($email)) {
            $errorMessage = "Email is not formatted correctly. (abc@xyz.hjk)" . $errorEnding;
            $success = FALSE;
        }
    }

    if (!validateExists($telephone)) {
        $errorMessage = "Phone number is empty." . $errorEnding;
        $success = FALSE;
    } else {
        if (!validatePhone($telephone)) {
            $errorMessage = "Phone number is not formatted correctly (###-###-####)" . $errorEnding;
            $success = FALSE;
        } 
    }

    if (!validateExists($pass) OR !validateExists($confirmPass)) {
        $errorMessage = "Password is empty." . $errorEnding;
        $success = FALSE;
    } else {
        if(!validatePass($pass, $confirmPass)) {
            $errorMessage = "Passwords do not match." . $errorEnding;
            $success = FALSE;
        } 
    }

    if ($success) {
       return ''; 
    } else {
        return '';
    }
}
 

function validateExists($data) {
    if($data != '') {
        return TRUE;
    } else {
        return FALSE;
    }
}

function validatePostalCode($pCode) {
    $expression = '/^[a-zA-Z][\d][a-zA-Z] [\d][a-zA-Z][\d]$/';
    
    if(preg_match($expression, $pCode)) {
        return true;
    } else {
        return false;
    }

}

function validateEmail($email) {
    $expression = '/^(/w)@(/w)\.(.){3}$/';

    if(preg_match($expression, $email)) {
        return true;
    } else {
        return false;
    }

}

function validatePhone($phone) {
    $expression = '/^(\d){3}-(\d){3}-(\d){4}$/';

    if(preg_match($expression, $phone)) {
        return true;
    } else {
        return false;
    }
}

function validatePass($pass, $cPass) {
    if($pass == $cPass) {
        return true;
    } else {
        return false;
    }
}
