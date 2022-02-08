<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Lista di persone</h1>

    @forelse ($people as $person)
        <div>{{ $person }}</div>
    @empty
        <div>Nessuna persona nella lista</div>
    @endforelse

    <nav>
        <a href="{{ route('about') }}">About us</a>
        <a href="{{ route('products')}}">Our products</a>
    </nav>
</body>
</html>