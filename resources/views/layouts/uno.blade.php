<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- CDN FOMT AWESOME -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>@yield('titulo')</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="flex justify-center my-4 text-2xl p-2 bg-teal-200">
        @yield('cabecera')
    </div> 
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
      @yield('contenido')
        
    </div>

</html>