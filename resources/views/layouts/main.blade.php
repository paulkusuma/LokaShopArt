<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- Judul --}}
    @yield('title')
    {{-- Style --}}
    @yield('styles')
      {{-- Bootstrap CSS --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.5.0/css/bootstrap.min.css">
      {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://kit.fontawesome.com/cc52547201.js" crossorigin="anonymous">
    {{--  --}}
    <link rel="stylesheet" href="css/style.css">
</head>
<body>  
   
    <div class="section">
        @yield('sec')
    </div>
        {{-- Style --}}
    @yield('JavaScript')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.5.0/js/bootstrap.min.js"></script>

    <script src="https://kit.fontawesome.com/cc52547201.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>
