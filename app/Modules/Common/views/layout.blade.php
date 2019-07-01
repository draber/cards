<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Della+Respira&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/cards.css">
    @if(env('CARDS_PRINT_PREVIEW'))
        <link rel="stylesheet" href="css/print-preview.css">
    @endif
</head>
<body>
<main class="grid-container">
    @yield('content')
</main>
</body>
</html>
