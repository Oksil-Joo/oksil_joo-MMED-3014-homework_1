<?php

session_start();

include '../includes/functions.php';

$shouldShowSubmission = shouldShowSubmissionData();

$firstNameError = getErrorFromSession('first_name');
$lastNameError = getErrorFromSession('last_name');
$emailError = getErrorFromSession('email');

$firstNameSubmission = getSubmissionFromSession('first_name');
$lastNameSubmission = getSubmissionFromSession('last_name');
$emailSubmission = getSubmissionFromSession('email');

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
        <form action="../includes/submit.php" method="POST">
        <input type="text" name="first_name" value="<?php echo $firstNameSubmission; ?>">
        <?php echo $firstNameError; ?>
        <br>
        <input type="text" name="last_name" value="<?php echo $lastNameSubmission; ?>">
        <?php echo $lastNameError; ?>
        <br>
        <input type="text" name="email" value="<?php echo $emailSubmission; ?>">
        <?php echo $emailError; ?>
        <br>
        <textarea name="comments" id="comments" cols="30" rows="10"></textarea>
        <input type="text" name="phone">
        <button type="submit">submit</button>
    </form>
    
    <?php
        if ($shouldShowSubmission) {
    ?>
    
    <div>
        <h2>Your submission</h2>
        <p>
            <?php
                echo $firstName;
            ?>
        </p>
        <p>
             <?php
                echo $lastName;
            ?>
        </p>
        <p>
            <?php
                echo $email;
            ?>
        </p>
        <p>
            <?php
                echo $comments;
            ?>
        </p>
        <p>
            <?php
                echo $phone;
            ?>
        </p>
    </div>

    <?php
        }
    ?>
        </section>
    </main>
    <?php
     include '../includes/partials/footers.php'
     ?>
     </div>
</body>
</html>