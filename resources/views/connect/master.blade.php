<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <!-- Instalar https://stylus-lang.com/
    Get styling with Stylus
    npm install stylus -g
    *****////*******/*/*/**** */ */
    para cargar ejecutar el comando
    stylus connect.styl -c -w
    -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href={{ url('/static/css/connect.css?v='.time())  }}">

    <title>Ecommers</title>
</head>
<body>
    @yield('content')
</body>
</html>
