<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Information -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', config('app.name'))</title>

    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Noto+Sans:300,400,600' rel='stylesheet' type='text/css'>
{{--    <link href="https://fonts.googleapis.com/css?family=Noto+Sans|Raleway&display=swap" rel="stylesheet">
--}}

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <!-- CSS -->
    <link href="{{ mix(Spark::usesRightToLeftTheme() ? 'css/app-rtl.css' : 'css/app.css') }}" rel="stylesheet">
    <style>
        /*body, html {*/
        /*    background: url('/img/spark-bg.png');*/
        /*    background-repeat: repeat;*/
        /*    background-size: 300px 200px;*/
        /*    height: 100%;*/
        /*    margin: 0;*/
        /*}*/

    </style>
</head>
<body>
    <div class="full-height flex-column">
        <nav class="links">
            <a href="/login" style="margin-right: 15px;">
                <button>
                    {{__('Login')}}
                </button>
            </a>

            <a href="/register">
                <button>
                    {{__('Register')}}
                </button>
            </a>
        </nav>

        <div class="flex-fill flex-center">
            <div class="content">
                <div class="title m-b-md">
                    Track My Notes
                </div>
                <div class="Links" style="text-align: center;">A place to link up your clients.</div>
            </div>
        </div>
        </div>
    </div>
</body>
</html>
