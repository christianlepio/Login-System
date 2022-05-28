<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Practice | Laravel</title>
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- styles -->
        <link rel="stylesheet" href="/css/main.css">
    </head>
    <body>
        <!-- This is to import the body content/section-->
        @yield('content')
        <footer class="footers">
            <div class="content has-text-centered"><br>
            <p id="copyright">Copyright &copy; 2022 | E - Systems</p>
            </div>
        </footer>
    </body>
</html>