<?php
//A session is started
session_start();
//connect files
include 'validation.php';
include 'functions.php';
// Set session variables
$_SESSION['errors'] = [];
//valiate URL
if(! array_key_exists('HTTP_REFERER', $_SERVER)) {
    die;
}
//ensure there's a place for the user to be redirected back to
//If the page is directed, HTTP_REFERER is empty, 
// check the array for the specified key, 
// return true if the key is present, 
// and false if the key is not present.

// ensure the user has actually submitted data
if (count($_POST) <= 0) {
    //If HTTP_REFERER number of elements in the array is less than or equal to 0
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    //terminate the current script
    die;
}

$_SESSION['submission'] = $_POST;
//to access submission from POST method
//define postData
$firstName = getPostData('first_name');
$lastName = getPostData('last_name');
$email = getPostData('email');
$phone = getPostData('phone');
$website = getPostData('website');
$comment = getPostData('comment');
//define error
$errors = [];
// If the value of the first name is cleared, it leaves an error message.
if (! isFirstNameValid($firstName)) {
    $errors['first_name'] = 'Your first name is not valid';
}
// If the value of the last name is cleared, it leaves an error message.
if (! isLastNameValid($lastName)) {
    $errors['last_name'] = 'Your last name is not valid';
}
// If the value of the phone is cleared, it leaves an error message.
if (! isPhoneValid($phone)) {
    $errors['phone'] = 'Please enter the number without "-"';
}
// If the addres of the email is cleared, it leaves an error message.
if (! isEmailValid($email)) {
    $errors['email'] = 'Your email is not valid';
}
// If the address of the URL is cleared, it leaves an error message.
if (! isWebsiteValid($website)) {
    $errors['website'] = 'Your URL is not valid';
}
// If the value of the comments are cleared, it leaves an error message.
if (! isCommentValid($comment)) {
    $errors['comment'] = 'Please write at least 12 words.';
}

if (count($errors) > 0) {
    $_SESSION['errors'] = $errors;
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    //HTTP_REFERER: Returns the complete URL of the current page

    die;
}


//my information
$to = "o_Joo@fanshaweonline.ca";
$subject = "Sending mail";
$message = "Thank you for sending mail. I will contact you as soon as possible";
//got user's information
$message .= "Firstname: " . $firstName . "\r\n";
$message .= "Lastname: " . $lastName . "\r\n";
$message .= "Phone: " . $phone . "\r\n";
$message .= "Email: " . $email . "\r\n";
$message .= "Website: " . $website . "\r\n";
$message .= "Comment: " . $comment . "\r\n";
//send the mail
mail($to, $subject, $message);
//save
$_SESSION['submission'] = [];
// var_dump('here');
// die;

header('Location: ' . $_SERVER['HTTP_REFERER']);
//The header() function sends a raw HTTP header to a client.