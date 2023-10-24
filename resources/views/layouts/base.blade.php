<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page.title', 'laravel')</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.2/css/bootstrap.rtl.min.css">
</head>
<body>
    
<div class="d-flex flex-column justify-content-berwen min-vh-100 text-center">

    @include('includes.header')
    
    
    <main class="flex-grow-1 py-3">
    
       @yield('content')
    
    </main>
    
    @include('includes.footer')
   

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.2/js/bootstrap.esm.min.js"></script>
</body>
</html>