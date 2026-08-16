<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $title ?? 'Guest Page' }}</title>
    <link rel="stylesheet" href="/backend/dist/css/style.min.css">
    @stack('styles')
</head>
<body>
    {{ $slot }}
    <script src="/backend/dist/libs/jquery/dist/jquery.min.js"></script>
    <script src="/backend/dist/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')
</body>
</html>
