<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    {{-- Boxicons  css --}}
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    {{-- External css --}}
    <link rel="stylesheet" href="/css/welcome.css">
    <link rel="stylesheet" href="/css/index.css">
    <link rel="stylesheet" href="/css/ticket.css">
    <link rel="stylesheet" href="/css/create.css">
    {{--  Bootstrap styles --}}
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
    <style>
        html {
            overflow: hidden;
        }
      body {
        /* background: #F1F8E9; */
        background: rgb(246, 245, 245);
        min-height: 100vh;
        /* overflow-x: auto; */
        /* overflow: auto; */


      }
    </style>
</head>
<body>
    @yield('content')

    {{--  Bootstrap js --}}

    <script src="/javascript/script.js"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script> --}}
</body>
</html>   



