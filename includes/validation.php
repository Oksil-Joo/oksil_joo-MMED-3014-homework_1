<?php

function isEmpty($value)
{
    return $value == "";
}

function isFirstNameValid($firstName) 
{
    if (isEmpty($firstName)) {
        return false;
    }
    
    if(strlen($firstName) < 3 ) {
        return false;
    }

    return true;
}

function isLastNameValid($lastName) 
{
    if (isEmpty($lastName)) {
        return false;
    }
    
    if(strlen($lastName) < 3 ) {
        return false;
    }

    return true;
}

function isEmailValid($email) 
{
    if (isEmpty($email)) {
        return false;
    }
    
    if(strlen($email) < 6 ) {
        return false;
    }

    if (! filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return false;
    }

    return true;
}