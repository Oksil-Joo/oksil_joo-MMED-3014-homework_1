<?php

session_start();

include '../includes/functions.php';

$shouldShowSubmission = shouldShowSubmissionData();

$firstNameError = getErrorFromSession('first_name');
$lastNameError = getErrorFromSession('last_name');
$emailError = getErrorFromSession('email');
$phoneError = getErrorFromSession('phone');
$websiteError = getErrorFromSession('website');
$commentError = getErrorFromSession('comment');

$firstNameSubmission = getSubmissionFromSession('first_name');
$lastNameSubmission = getSubmissionFromSession('last_name');
$emailSubmission = getSubmissionFromSession('email');
$phoneSubmission = getSubmissionFromSession('phone');
$websiteSubmission = getSubmissionFromSession('website');
$commentSubmission = getSubmissionFromSession('comment');

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
            
             <?php
            include '../includes/partials/navigation.php'
            ?>
        </section>
    </header>
    <main>
        <section class="mainCon">
        <div class="formCon">
            <form action="../includes/submit.php" method="POST">
            <p class="subtitle">GET IN TOUCH</p>
                <input type="text" name="first_name" placeholder="First Name" value="<?php echo $firstNameSubmission; ?>">
                <?php echo $firstNameError; ?>
                <input type="text" name="last_name" placeholder="Last Name" value="<?php echo $lastNameSubmission; ?>">
                <?php echo $lastNameError; ?>
                <input type="text" name="phone" placeholder="Your Phone number" value="<?php echo $phoneSubmission; ?>">
                <input type="text" name="email" placeholder="Your E-mail" value="<?php echo $emailSubmission; ?>">
                <?php echo $emailError; ?>
                <input type="text"name="website" placeholder="What's your website?" value="<?php echo $websiteSubmission; ?>">
                <textarea name="comment" id="comment" cols="30" rows="10" placeholder="Your Message" value="<?php echo $commentSubmission; ?>"></textarea>
                <br>
                <button type="submit">submit</button>
            </form>
          
        </div>
        </section>
    </main>
    <?php
     include '../includes/partials/footers.php'
     ?>
     </div>
</body>
</html>