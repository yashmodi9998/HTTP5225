<!doctype html>
<html>
    <head>
        <title>PHP If Statements</title> 
    </head>
    <body>

        <h1>PHP If Statements</h1> 

        <p>Use PHP echo and variables to output the following link information, use if statements to make sure everything outputs correctly:</p>

        <?php

        // **************************************************
        // Do not edit this code

        // Generate a random number (1, 2, or 3)
        $randomNumber = ceil(rand(1,3));

        // Display the random number
        echo '<p>The random number is '.$randomNumber.'.</p>';

        // Based on the random number PHP will define four variables and fill them with information about Codecademy, W3Schools, or MDN
        
        // The random number is 1, so use Codecademy
        if ($randomNumber == 1)
        {

            $linkName = 'Codecademy';
            $linkURL = '';
            $linkCTA = 'codeacedemy.com/';
            $linkImage = '';
            $linkDescription = 'Learn to code interactively, for free.';

        }

        // The random number is 2, so use W3Schools
        elseif ($randomNumber == 2)
        {

            $linkName = 'W3schools';
            $linkURL = 'https://www.w3schools.com/';
            $linkCTA = 'w3schools.com/';
            $linkImage = 'w3schools.png';
            $linkDescription = 'W3Schools is optimized for learning, testing, and training.';

        }

        // The random number is 3, so use MDN
        else
        {

            $linkName = 'Mozilla Developer Network';
            $linkURL = 'www.moziladevelopernetwork.com';
            $linkCTA = 'MDN.com/';
            $linkImage = 'mozilla.png';
            $linkDescription = 'The Mozilla Developer Network (MDN) provides information about Open Web technologies.';

        }

        // **************************************************

        // Beginning of the exercise, place all of your PHP code here
        // Upload this page (or use your localhost) and refresh the page, the h2 below will change
        echo '<h2>'.$linkName.'</h2>';
        if($linkURL){
        echo '<a href="'.$linkURL.'">'. $linkName .'</a>';}
        else{
            echo '<h6>'.$linkCTA.'</h6>';  
        }
        
     
        echo '<img src="'.$linkImage.'"/>';

        echo '<p>'.$linkDescription.'</p>';

        $grade = "";
        $marks = ceil(rand(1,100));
        if($marks <=60){
            echo '<h1>Sorry,You have failed in the exam</h1>';
            $grade ="F";
        }
        elseif ($marks >=61 && $marks <=70) {
            echo '<h1>You barely Passed the exam</h1>';
            $grade ="E";
        }
        elseif ($marks >=71 && $marks <=75) {
            echo '<h1>You Passed the exam</h1>';
            $grade ="D";
        }
        elseif ($marks >=76 && $marks <=80) {
            echo '<h1>You Passed the exam with good grades.</h1>';
            $grade ="C";
        }
        
        elseif ($marks >=81 && $marks <=85) {
            echo '<h1>You Passed the exam with distinction.</h1>';
            $grade ="B";
        }
        
        elseif ($marks >= 86 && $marks <=90) {
            $grade ="A";
        }
        else{
            echo '<h1>You Passed with flying colors.</h1>';
            $grade = "A+";
        }
        echo '<h2>You have scored '.$marks.'</h2>';
        echo '<p>Your grade is '.$grade.'</p>';

        $day = ceil(rand(1,7));
        switch ($day) {
            case 1:
                echo '<h2>Today is Sunday.</h2>';
                break;
            case 2:
                echo '<h2>Today is Monday.</h2>';
                break;
            case 3:
                echo '<h2>Today is Tuesday.</h2>';
                break;
            case 4:
                echo '<h2>Today is Wednesday.</h2>';
                break;
            case 5:
                echo '<h2>Today is Thursday.</h2>';
                break;
            case 6:
                echo '<h2>Today is Friday.</h2>';
                break;
            case 7:
                echo '<h2>Today is Saturday.</h2>';
                break;                
            
            default:
                echo '';
                break;
        }
        ?>

    </body>
</html>
