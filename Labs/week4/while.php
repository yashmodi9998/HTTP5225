<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container-fluid">
        <div class="container">
                <div class="row">
                    <div class="col">
                        <h1 class="display-2 mt-3 mb-3">
                            PHP LOOPS
                        </h1>
                    </div>
                </div>
                <div class="row">
                    <?php
                    // function getUser(){
                        $url='https://dummyjson.com/users';
                        // $data= file_get_contents($url);
                        $json = file_get_contents($url);
                        // echo $json;
                        $json = json_decode($json);
                        print_r $json;
                    // }
                    // $user= getUser();
                    // echo '<pre>'.$user.'</pre>';
                    // for($i = 0; $i < count ($user); $i ++){
                    //     // echo $user['name'];
                        
                    // }
                    ?>
                </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>