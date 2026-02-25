<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/form.scss')
    <title>@yield('title')</title>
</head>
<body class="{{ Route::is('show-result') ? '' : 'centered-layout' }}">
    @yield('content')
</body>
</html>