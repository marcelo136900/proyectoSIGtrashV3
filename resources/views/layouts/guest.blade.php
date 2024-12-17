<!-- guest-layout.blade.php -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Estilos CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-blue-500 to-indigo-600 h-screen flex items-center justify-center">

    <!-- Slot para contenido -->
    <div class="w-full max-w-md">
        {{ $slot }}
    </div>
    
</body>
</html>
