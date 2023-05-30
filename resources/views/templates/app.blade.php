<!-- resources/views/app.blade.php -->

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Meta tags, title, and CSS links here -->
    
        
        <!-- Add Bootstrap CSS here, you can use CDN for simplicity -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    </head>
    <body>
        @include('templates.layouts.navbar')

        <main>
            @yield('content')
        </main>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        @yield('scripts')
    </body>
</html>