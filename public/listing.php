<?php

    $myData = [
        [
            'title' => 'Hello, world',
            'image' => 'http://placekitten.com/200/300',
            'descrioption' => 'here is my information1'
        ],
        [
            'title' => 'Hello, world2',
            'image' => 'http://placekitten.com/200/300',
            'descrioption' => 'here is my information2'
        ],
        [
            'title' => 'Hello, worldnumber3',
            'image' => 'http://placekitten.com/200/300',
            'descrioption' => 'here is my information3'
        ]
    ];
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
    <header id="container">
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
            <h1 class="hidden">mainTitle</h1>
            <?php
                foreach ($myData as $data) {
            ?>
            <p>
                <?php
                    echo $data['title'];
                    echo $data['image'];
                    echo $data['descrioption'];
                ?>
            </p>
            <?php
            }
            ?>  
        </section>
    </main>
    <?php
     include '../includes/partials/footers.php'
     ?>
</body>
</html>