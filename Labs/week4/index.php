<!doctype html>
<html>
<head>
   <title>PHP and For Loops</title> 
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<body>
    
    <h1>PHP and For Loops</h1> 
    
    <p>Use PHP echo, if statements, and loops to output all three links.</p>
        
        
    <?php

    // **************************************************
    // Do not edit this code

    // Define a multi dimensional array to store all of the links
    $links = array (
        0 => array (
          'name' => 'Codecademy',
          'url' =>'https://www.codecademy.com/',
          'image' => '',
          'description' => 'Learn to code interactively, for free.' ),
        1 => array ( 
          'name' => '',
          'url' => 'https://www.w3schools.com/',
          'image' => 'w3schools.png',
          'description' => 'W3Schools is optimized for learning, testing, and training.' ),
        2 => array (
          'name' => 'Mozilla Developer Network',
          'url' => 'https://www.codecademy.com/',
          'image' => 'mozilla.png',
          'description' => 'The Mozilla Developer Network (MDN) provides information about Open Web technologies.' )
        );
        
    // **************************************************

    // Loop through the array and display the link information
    for ($i = 0; $i < count ($links); $i ++)
    {
       
        if ($links[$i]['name'] == "")
        {
            echo '<h2>'.$links[$i]['url'].'</h2>';
        }
        else
        {
            echo '<h2>'.$links[$i]['name'].'</h2>';
        }
        if($links[$i]['url']){
            echo '<a href="'.$links[$i]['url'].'">'. $links[$i]['name'] .'</a></br>';   
        }
        if($links[$i]['image']){
            echo '<img  height=200px width=200px src="'.$links[$i]['image'].'"/></br>';  
        }
        if($links[$i]['description']){
            echo '<p>'.$links[$i]['description'].'</p>';  
        }
        echo '<hr>';
    }

    
    ?>
    
</body>
</html>