<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>FavMovies</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body class="bg-light text-dark d-flex flex-column align-items-center p-4 p-lg-5 min-vh-100">

    <header>
        <h1 class="display-3 text-center my-4">FavMovie</h1>

    </header>
    <h2>🐸🐊🦎🐍🐢🦕🦖🦗🐉</h2>
    <main class="container">
        {{$slot}}
    </main>

    <footer>
        <h2>FavMovie©</h2>
    </footer>

</body>
</html>
