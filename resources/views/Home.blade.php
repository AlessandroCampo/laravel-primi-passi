<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>

<body class="bg-[#121212] text-white">
    <nav>
        <ul class="flex gap-2 justify-center py-6 text-xl">
            :@foreach ($navbar_voices as $key => $voice)
                <li>
                    <a href="{{ $voice['link'] }}
                    ">
                        {{ $key }}
                    </a>

                </li>
            @endforeach
        </ul>

    </nav>
    <h1 class="text-3xl text-pink-700">
        Welcome in the home page!
    </h1>
</body>

</html>
