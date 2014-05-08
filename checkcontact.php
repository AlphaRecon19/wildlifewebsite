<?php
//======================================================================
//   Copyright 2014 @AlphaRecon19
//
//   Licensed under the Apache License, Version 2.0 (the "License");
//   you may not use this file except in compliance with the License.
//   You may obtain a copy of the License at
//
//       http://www.apache.org/licenses/LICENSE-2.0
//
//   Unless required by applicable law or agreed to in writing, software
//   distributed under the License is distributed on an "AS IS" BASIS,
//   WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
//   See the License for the specific language governing permissions and
//   limitations under the License.
//
//======================================================================
header('Content-Type:text/json'); //Sets the header of the document to json so that it can be read via the javacript
if (isset($_POST['email'])) {
    // validation to check if expected data exists
    if (!isset($_POST['first_name']) || !isset($_POST['last_name']) || !isset($_POST['email']) || !isset($_POST['telephone']) || !isset($_POST['comments'])) {
        $data['data'] = "error";
        echo json_encode($data); //return an error
        
        exit;
    }
    
    $first_name = $_POST['first_name']; //Required
    $last_name  = $_POST['last_name']; //Required
    $email_from = $_POST['email']; //Required
    $telephone  = $_POST['telephone']; //Not required
    $comments   = $_POST['comments']; //Required
    
    $error_message = ""; //Starts the $error_message variable
    $email_exp     = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/'; //Sets the validaion for the email - a valid email address
    if (!preg_match($email_exp, $email_from)) { //Validates the email provided
        $error_message .= '<li>The Email Address you entered does not appear to be valid.</li>'; //Adds this to the $error_message variable if there was a problem
    }
    $string_exp = "/^[A-Za-z .'-]+$/"; //Sets the validaion for the names - Contains only letters A-Z&a-z
    if (!preg_match($string_exp, $first_name)) { //Validates the first name provided
        $error_message .= '<li>The First Name you entered does not appear to be valid.</li>'; //Adds this to the $error_message variable if there was a problem
    }
    if (!preg_match($string_exp, $last_name)) { //Validates the last name provided
        $error_message .= '<li>The Last Name you entered does not appear to be valid.</li>'; //Adds this to the $error_message variable if there was a problem
    }
    if (strlen($comments) < 2) { //Validates the message - Must be more that 2 characters long
        $error_message .= '<li>The Message you entered do not appear to be valid.</li>'; //Adds this to the $error_message variable if there was a problem
    }
    if (strlen($error_message) > 0) { //If there is any errors then
        $data['data'] = $error_message;
        echo json_encode($data); //returns the error
        exit;
    }
    //So there was no errors, now all that is left to do is return the keyword success and everything will be good
    $data['data'] = 'success';
    echo json_encode($data);
    exit;
}

?>