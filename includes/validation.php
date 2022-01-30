<?php
//the valus is empty
function isEmpty($value)
{
    return $value == "";
    //Returns the value of string.
}

function isFirstNameValid($firstName) 
//the value of first name function
{
    if (isEmpty($firstName)) {
        return false;
    }
//if the first name is empty, is not valid
    if(strlen($firstName) < 3 ) {
        return false;
    }
//If the number of elements is less than 3, is not valid
    return true;
//If there are no errors in these two conditions, is valid
}

function isLastNameValid($lastName) 
//the value of last name function
{
    if (isEmpty($lastName)) {
    //if the last name is empty,
        return false;
    //is not valid
    }
    
    if(strlen($lastName) < 3 ) {
        //If the number of elements is less than 3, 
        return false;
        //is not valid
    }

    return true;
    //If there are no errors in these two conditions, is valid
}

function isPhoneValid($phone) 
//the value of phone function
{
    if (isEmpty($phone)) {
//if the phone is empty
        return false;
//is not valid
    }
    
    if(strlen($phone) < 9 ) {
//if the number of phone is less than 9
        return false;
// is not valid
    }
    return true;
//If there are no errors in these two conditions, is valid
}
function isEmailValid($email) 
//the value of email is
{
    if (isEmpty($email)) {
//if the email is empty
        return false;
//is not valid
    }
    
    if(strlen($email) < 6 ) {
//the number of email is less than 6
        return false;
//If there are no errors in these two conditions, is not valid
    }

    if (! filter_var($email, FILTER_VALIDATE_EMAIL)) {
// After checking that the email address is properly configured, save the error message 
//if the address format is incorrect,

        return false;
//If there are no errors in these two conditions, is not valid
    }

    return true;
//if you have a is valid
}
// The code below shows how to verify that the URL address syntax is valid. If the address is invalid, save the error message.
function isWebsiteValid($website) 
//the value of website is
{
    if (isEmpty($website)) {
//if the website is empty
        return false;
//is not valid
    }
    
    if(strlen($website) < 9 ) {
//if the number of URL address is less than 9
        return false;
//is not false
    }

    if (! filter_var($website, FILTER_VALIDATE_URL)) {
// After checking that the URL address is properly configured,
// if the URL address is not valid by the FILTER_VALIDATE_URL,  

        return false;
//is not valid.
    }

    return true;
//is valid by the FILTER_VALIDATE_URL, is valid
}

function isCommentValid($comment) 
//the value of comment function
{
    if (isEmpty($comment)) {
//if the comment is empty
        return false;
// is not valid
    }
    
    if(strlen($comment) < 11 ) {
//if the number of comment is less than 11,
        return false;
//is not valid
    }

    return true;
//is valid
}