<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Final Project Group 3: Gilbert, Khaled, Pedro, Pragya, Ehmet</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->

    <style>
        .link {
            background-color: azure;
            color: brown;
            width:100%;
            height: 200%;
            border: 2px red solid;
            border-radius: 10px;
        }

        body {
            font-family: 'Nunito', sans-serif;
            background-color: lightblue;
            display: flex;
        }
        
        #title {
            color: red;
            font-weight: bold;
        }
        
        #main-page {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        #main-frame{
            background-color: lightblue;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin: auto;
        }
    </style>
</head>

<body id="main-page">
    <div id="main-frame">
        
        <h1 id="title">Final Project Group 3: Gilbert, Khaled, Pedro, Pragya, Ehmet</h1>
        @if (Route::has('login'))
            <div>
                @auth
                    <a class="link" href="{{ url('/dashboard') }}">Dashboard</a>
                @else
                    <a class="link" href="{{ route('login') }}">Log in</a>
                    @if (Route::has('register'))
                        <a class="link" href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        @endif
    </div>

    </div>
</body>

</html>
