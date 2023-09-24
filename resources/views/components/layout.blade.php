<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        customLightViolet: 'hsl(252, 66%, 62%)',
                        customOrange: 'hsl(28, 89%, 67%)',
                        customPink: 'hsl(0, 78%, 79%)',
                        customLightRed: 'hsl(7, 77%, 66%)',
                        customTeal: 'hsl(172, 46%, 57%)',
                        customPurple: 'hsl(314, 45%, 23%)',
                        customGrey: 'hsl(30, 5%, 45%)',
                    }
                }
            }
        }
    </script>
    <title>Document</title>
    @vite('resources/js/app.js')
</head>


<body>
    <div class="main-layout px-5">
        <header>
            <x-navigation />
        </header>
        {{ $slot }}
        <footer>
            <x-navigation />
        </footer>
    </div>
    <script src="{{ asset('js/scripts.js') }}"></script>
</body>

</html>
