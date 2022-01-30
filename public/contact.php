<?php
//A session is started
session_start();
//connect functions.php file
include '../includes/functions.php';

$shouldShowSubmission = shouldShowSubmissionData();
//Press the save button to show the result.
//define Error
$firstNameError = getErrorFromSession('first_name');
$lastNameError = getErrorFromSession('last_name');
$emailError = getErrorFromSession('email');
$phoneError = getErrorFromSession('phone');
$websiteError = getErrorFromSession('website');
$commentError = getErrorFromSession('comment');
//define submission
$firstNameSubmission = getSubmissionFromSession('first_name');
$lastNameSubmission = getSubmissionFromSession('last_name');
$emailSubmission = getSubmissionFromSession('email');
$phoneSubmission = getSubmissionFromSession('phone');
$websiteSubmission = getSubmissionFromSession('website');
$commentSubmission = getSubmissionFromSession('comment');

// Set session variables
$_SESSION['errors'] = [];
$_SESSION['submission'] = [];

// var_dump($_SESSION);

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <title>Multi-page PHP site</title>
</head>
<body>
<div id="container">
    <header>
        <h1 class="hidden">logo</h1>
        <section id="top">
            <?php
            include '../includes/partials/headers.php'
            ?>
      <!-- Connect the commonly used part by making a different page. -->
          
             <?php
            include '../includes/partials/navigation.php'
            ?>
        </section>
    </header>
    <main>
        <h2 class="subtitle">GET IN TOUCH</h2>
        <section class="contactCon">
            <div><img src="images/mail.svg" alt="mailImage"></div>
            <div class="formCon">
            <!-- When the user writes the summary and clicks the Submit button, the form data is sent. The data is transmitted in an HTTP POST scheme. -->
                <form action="../includes/submit.php" method="POST">
                    <input type="text" name="first_name" placeholder="First Name" value="<?php echo $firstNameSubmission; ?>">
                    <?php echo $firstNameError; ?>
                    <!-- If the first name is more than 3, save it, and if it is wrong, it shows an error message. -->
                    <input type="text" name="last_name" placeholder="Last Name" value="<?php echo $lastNameSubmission; ?>">
                    <?php echo $lastNameError; ?>
             <!-- If the last name is more than 3, save it, and if it is wrong, it shows an error message. -->

                    <input type="text" name="phone" placeholder="Your phone number" value="<?php echo $phoneSubmission; ?>">
                    <?php echo $phoneError; ?>
     <!-- If the phone number is more than 12, save it, and if it is wrong, it shows an error message. -->

                    <input type="text" name="email" placeholder="Your E-mail" value="<?php echo $emailSubmission; ?>">
                    <?php echo $emailError; ?>
    <!-- If the email is valid, save it, and if it is wrong, it shows an error message. -->

                    <input type="text"name="website" placeholder="What's your website?" value="<?php echo $websiteSubmission; ?>">
                    <?php echo $websiteError; ?>
         <!-- If the URL is valid, save it, and if it is wrong, it shows an error message. -->

                    <textarea name="comment" id="comment" cols="30" rows="10" placeholder="Your Message" value="<?php echo $commentSubmission; ?>"></textarea>
                    <?php echo $commentError; ?>
    <!-- If the comment is more than 12, save it, and if it is wrong, it shows an error message. -->
<!-- send an mail -->
                    <div class="buttonCon">
                         <button class="button circle" type="submit">Send</button>
                    </div>
                </form>
          
            </div>
        </section>
    </main>
    <!-- Connect the commonly used part by making a different page. -->
    <?php
     include '../includes/partials/footers.php'
     ?>
     </div>
</body>
</html>