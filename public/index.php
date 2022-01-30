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
             <!-- Connect the commonly used part by making a different page. -->
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
            <h1 class="hidden">mainTitle</h1>
            <div class="open">
                <img src="images/open.svg" alt="open">
            </div>
            <div class="title">
                <p class="role">UI/UX Designer</p>
                <p class="name">OKSIL JOO</p>
                <p class="role">PORTFOLIO</p>
            </div>
            <div class="open">
                <img src="images/close.svg" alt="close">
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