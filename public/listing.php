<?php
//Define the data to be sorted
    $myData = [
        [
            'title' => 'Oksil Joo',
            'image' => 'images/oksiljoo.jpg',
            'descrioption' => 'The initials of the JOS log were derived from the first letter of the name, and the shape of the circle was emphasized using O. In particular, the colour represents personality, yellow-green symbolizes nature as a lear-like colour of a plant, means harmony of self-control, and light rose pink represents a calm personality as a color of healing and relaxation.'
        ],
        [
            'title' => 'Korean Food',
            'image' => 'images/korean.jpg',
            'descrioption' => 'Bibimbap is famous among the foods representing Korean food. This menu is also served by Korean Air. This bibimbap is a food eaten with rice, vegetables, eggs, and red pepper paste sauce in an earthen pot, and yellow means eggs, red means red pepper paste, and brown means earthen pot to represent this food.'
        ],
        [
            'title' => 'Alexander Keith',
            'image' => 'images/alexander.jpg',
            'descrioption' => 'The name of Alexander Keith beer comes from the founders name. Therefore, it is easier to understand the brand name and can help you understand the word mark by showing the founders face.'
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
        <h1 class="hidden">mainTitle</h1>
        <p class="subtitle">PORTFOLIO</p>
        <section class="listCon">
           <div class="workData">
           <!-- The foreach loop works only on arrays, and is used to loop through each key/value pair in an array. -->
                <?php
                    foreach ($myData as $data) {
                ?>
                <!-- Imports image data from mydata. -->
                    <img src="<?php echo $data['image']; ?>" alt="LogoDesign">
                <!-- Imports title data from mydata. -->
                    <h2><?php echo $data['title']; ?> </h2>
                <!-- Imports descrioption data from mydata. -->
                    <p><?php echo $data['descrioption'];?>  </p>

                <?php
                    }
                ?>  
           </div>
        </section>
    </main>
    <!-- Connect the commonly used part by making a different page. -->
        <?php
            include '../includes/partials/footers.php'
        ?>
</body>
</html>