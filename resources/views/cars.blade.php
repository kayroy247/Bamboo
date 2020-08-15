<!doctype html>

<html>

<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">



    <title>Cars</title>

    <link rel="stylesheet" href="https://unpkg.com/tachyons@4.10.0/css/tachyons.min.css" />

</head>

<body>

    <div class="mw6 center pa3 sans-serif">

        <h1 class="mb4">Cars</h1>



        @foreach($cars as $car)

        <div class="pa2 mb3 striped--near-white">

            <header class="b mb2">{{ $car->make }}</header>

            <div class="pl2">

                <p class="mb2">model: {{ $car->model }}</p>

                <p class="mb2">year: {{ $car->year }}</p>

                <p class="mb2">owner: {{ $car->name }}</p>

                <p class="mb2">email: {{ $car->email }}</p>

            </div>

        </div>

        @endforeach

    </div>

</body>

</html>