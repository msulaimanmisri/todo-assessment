<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo App - Assestment</title>
    @include('layouts.app-styles')
</head>

<body class="bg-light">
    @yield('content')
    @include('layouts.app-scripts')
</body>

</html>
