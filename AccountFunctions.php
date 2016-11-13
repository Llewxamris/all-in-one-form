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
    $confirmPass = trim($_POST[confirmPass]);    
    $success = TRUE;

    if(validateExists($firstName) == FALSE)
    {
        $errorMessage = "First name is empty. Please enter a proper value.";
    }

    if(validateExists($lastName) == FALSE)
    {
        $errorMessage = "Last name is empty. Please enter a proper value.";
    }
 }

function validateExists($data) {
    if($data != '') {
        return TRUE;
    } else {
        return FALSE;
    }
}
