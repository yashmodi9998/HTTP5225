<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Lara LMS</title>
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <link href="{{ asset('css/styles.css') }}" rel="stylesheet">

      <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"crossorigin="anonymous">
      <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" rel="stylesheet">
   </head>
   <body>
   <nav class="navbar navbar-expand-lg " style="background-color:#093A3E;">
        <div class="container-fluid ">
            <a class="navbar-brand heading-text" 
                style=" color: #c7e1e4;font-size: larger;font-weight: 900;font-family: 'Times New Roman', Times, serif;" 
                href="{{ url('/') }}">
                YM AGENCY
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item ">
                        <a class="nav-link" aria-current="page" href="{{ url('/fieldjob') }}">Jobs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/applicants') }}">Applicants</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="register.php">Apply For JOB</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
      <!-- <div class="container-fluid mt-5"> -->
         <!-- <div class="container"> -->
            @yield('content')
        <!-- </div> -->
      <!-- </div> -->
     
<footer class="text-light text-center py-2">
    <div class="container">
        <p>&copy; 2024 YM AGENCY | All rights reserved</p>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
   
</body>

</html>