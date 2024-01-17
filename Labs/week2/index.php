<!doctype html>
<html>
  <head>
    
    <title>PHP and Creating Output</title>
    
  </head>
  <body>
  
   <?php echo ' <h1>PHP and Creating Output</h1>';?>
  
    <p>The PHP echo command can be used to create output.</p>

    <p>When creating output using echo and PHP, quotes can often cause problems. There are several solutions to using quotes within an echo statement:</p>
    
    <ul>
        <li>Use HTML special characters</li>
        <li>Alternate between single and double quotes</li>
        <li>Use a backslash to escape quotes</li>
    </ul>
    
    <h2>More HTML to Convert</h2>

    <p>PHP says "Hello World!"</p>

    <?php echo'<p>Can you display a sentence with \' and "?</p>';?>
    <?php $url="https://www.google.com/";?>

<a href="<?php echo $url;?>">
    <img src="<?php echo 'https://placehold.co/600x400/png';?>">
</a>

<!-- PHP Variables -->
<?php
    
    $linkName = 'Codecademy';
    $linkURL = 'https://www.codecademy.com/';
    $linkImage = 'codecademy.png';
    $linkDescription = 'Learn to code interactively, for free.';
    
    

    $person['first'] = 'Jane';
    $person['last'] = 'Doe';
    $person['email'] = 'jane.doe@email.com';
    $person['age'] = 30;
    
   

    ?>
  </body>
  <h1><?php echo $linkName;?></h1>

  <?php echo '<h1>Hello, '.$person['first']. ' ' .$person['last'].'</h1>'; ?>
</html>