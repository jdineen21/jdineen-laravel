<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <script src="{{asset('js/app.js')}}" defer></script>
        <script src="{{asset('js/matrix.js')}}" defer></script>
        <head>
            <title>Joe Dineen | Web Developer</title>
            <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}" type="text/css" />
            <link rel="shortcut icon" href="css/images/Flash.ico" />
        </head>
    </head>
    <body>
        <section class="flex">
            <div class="container">
                <div class="canvas_wrapper">
                    <canvas id="matrix_canvas">
                </div>
                <div class="welcome flex">
                    <div class="text">
                        Hello, I'm <span class="highlight">Joe Dineen</span>.<br>
                        I'm a full-stack web developer.
                    </div>
                </div>
            </div>
        </section>
        <nav>

        </nav>
    </body>
</html>