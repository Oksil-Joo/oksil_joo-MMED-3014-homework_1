<?php

function shouldShowSubmissionData () {
    return count($_POST) > 0;
}
//It is shown if the number of $_POSTs is 0 or more.
function getPostData($key) {
//GetPostData with a defined $key value
    if (array_key_exists($key, $_POST)) {
//if the array for the specified key using $_POST
        return $_POST[$key];
//successful
    }

    return "";
//Returns the value in the string.

}

function getErrorFromSession($key) {
//GetErrorFromSession with a defined $key value
    if (! array_key_exists('errors', $_SESSION)) {
//if the error is not exist in the session
        return "";
//Returns the value in the string.
    }

    if (! array_key_exists($key, $_SESSION['errors'])) {
//if the array for the specified key using errors is not exist
        return "";
//Returns the value in the string.
    }    

    return $_SESSION['errors'][$key];
//successful
}

function getSubmissionFromSession($key) {
//GetSubmissionFromSession with a defined $key value
    if (! array_key_exists('submission', $_SESSION)) {
//if the error is not exist in the session

        return "";
//Returns the value in the string.
    }

    if (! array_key_exists($key, $_SESSION['submission'])) {
//if the array for the specified key is not exist
        return "";
//Returns the value in the string.
    }    

    return $_SESSION['submission'][$key];
//successful
}