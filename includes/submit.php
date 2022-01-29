<?php
session_start();

include 'validation.php';
include 'functions.php';

$_SESSION['errors'] = [];

if(! array_key_exists('HTTP_REFERER', $_SERVER)) {
    die;
}

if (count($_POST) <= 0) {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    die;
}
$_SESSION['submission'] = $_POST;

$firstName = getPostData('first_name');
$lastName = getPostData('last_name');
$email = getPostData('email');
$phone = getPostData('phone');
$website = getPostData('website');
$comment = getPostData('comment');

$errors = [];

if (! isFirstNameValid($firstName)) {
    $errors['first_name'] = 'Your first name is not valid';
}

if (! isLastNameValid($lastName)) {
    $errors['last_name'] = 'Your last name is not valid';
}
if (! isPhoneValid($phone)) {
    $errors['phone'] = 'Please enter the number without "-"';
}

if (! isEmailValid($email)) {
    $errors['email'] = 'Your email is not valid';
}

if (! isWebsiteValid($website)) {
    $errors['website'] = 'Your URL is not valid';
}

if (! isCommentValid($comment)) {
    $errors['comment'] = 'Please write at least 12 words.';
}

if (count($errors) > 0) {
    $_SESSION['errors'] = $errors;
    header('Location: ' . $_SERVER['HTTP_REFERER']);

    die;
}

//send the mail
$to = "o_Joo@fanshaweonline.ca";
$subject = "New message from site!";
$message = "";
$message .= "Firstname: " . $firstName . "\r\n";
$message .= "Lastname: " . $lastName . "\r\n";
$message .= "Phone: " . $phone . "\r\n";
$message .= "Email: " . $email . "\r\n";
$message .= "Website: " . $website . "\r\n";
$message .= "Comment: " . $comment . "\r\n";

// mail($to, $subject, $message);
$_SESSION['submission'] = [];
// var_dump('here');
// die;

header('Location: ' . $_SERVER['HTTP_REFERER']);