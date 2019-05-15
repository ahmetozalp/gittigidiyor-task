<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            * {
                box-sizing: border-box;
            }
            body,
            html {
                height: 100%;
                overflow: hidden;
            }
            body {
                background: #ccc;
                margin: 0;
                font-family: Montserrat;
                font-size: 20px;
                text-align: center;
                background: hsl(200, 50%, 50%)
                radial-gradient(circle, transparent, hsl(200, 50%, 30%));
            }
            .title {
                font-size: 3em;
                text-align: center;
                color: #ccc;
                margin: 0.5em 0;
                line-height: 1em;
                color: #ccc;
                text-shadow: 0 0.1em 0.1em hsla(0, 0%, 0%, 0.3);
            }
            .vending-machine {
                display: inline-flex;
                margin: auto;
                width: auto;
                position: relative;
                box-shadow: 0 0.1em 0.5em hsla(0, 0%, 0%, 0.3);
            }

            main,
            aside {
                height: 30em;
                display: inline-block;
            }
            .frame {
                width: 14em;
                padding: 1.5em;
                position: relative;
                background: silver
                linear-gradient(
                        45deg,
                        hsla(0, 0%, 30%, 1) 0%,
                        hsla(0, 0%, 50%, 1) 66%,
                        hsla(0, 0%, 70%, 1) 80%
                );
                background-clip: border-box;
            }
            .window {
                height: 90%;
                padding: 0.5em;
                box-shadow: 0 0 1em hsla(0, 0%, 0%, 1) inset;
                background-color: #333;
                position: absolute;
                overflow: hidden;
            }
            .frame.bought {
                position: absolute;
                bottom: 0;
                left: 0;
                height: 30%;
                z-index: 1000;
            }
            .row {
                height: 20%;
                width: 100%;
                border-bottom: 0.3em black solid;
            }
            .can {
                margin: 0.6em 0.05em 0;
                width: 1.3em;
                height: 2.7em;
                position: relative;
                color: hsl(221, 11%, 71%);
                display: inline-block;
                border-bottom: 0.2em solid;
                border-top: 0.15em #adb2bd solid;
                border-radius: 0.5em 0.5em 0.3em 0.3em;
                box-shadow: 0 0 10px hsla(0, 0%, 0%, 0.5);
            }
            .can .text {
                font: 0.9em sans-serif;
                text-align: center;
                text-indent: -1.6em;
                display: block;
                content: "soda";
                transform: rotate(-90deg) translateY(-0.1em);
            }
            .row:nth-child(1) .can {
                background-color: hsl(354, 85%, 45%);
            }
            .row:nth-child(2) .can {
                background-color: hsl(0, 5%, 5%);
            }
            .row:nth-child(3) .can {
                background-color: hsl(220, 90%, 35%);
            }
            .row:nth-child(4) .can {
                background-color: hsl(20, 85%, 45%);
            }
            .row:nth-child(5) .can {
                background-color: hsl(150, 50%, 35%);
            }

            aside {
                position: relative;
                width: 4em;
                background-color: hsl(0, 0%, 15%);
            }
            .panel {
                padding-top: 5.5em;
            }
            .can.selected {
                z-index: 900;
                position: absolute;
                margin: 0;
                animation: fallDown ease-in-out 3s;
                animation-fill-mode: forwards;
            }
            .display {
                width: 100%;
                text-align: center;
                font-size: 2em;
                font-family: Consolas, monospace;
                color: hsl(70, 50%, 50%);
            }
            .display.success {
                animation: blink steps(2, start) 1s 5;
            }
            .display.error {
                color: hsl(0, 50%, 50%);
            }
            .input a {
                font-size: 0.7em;
                padding: 0.1em 0 0.1em;
                width: 1.5em;
                height: 1.5em;
                margin: 0.1em;
                border: none;
                color: white;
                background-color: #999;
                border-radius: 0.3em;
                box-shadow: 0 0 0.3em hsla(0, 0%, 0%, 0.5) inset;
                cursor: pointer;
            }
            .output {
                width: auto;
                height: 5em;
                margin: 1em 0.75em;
                background-color: #111;
                box-shadow: 0 0.5em 1em hsla(0, 0%, 50%, 0.3) inset;
            }
            @keyframes blink {
                from {
                    visibility: visible;
                }
                to {
                    visibility: hidden;
                }
            }
            @keyframes fallDown {
                0% {
                    transform: translateY(0em);
                }
                50% {
                    transform: scale(1.2) rotate(0deg);
                }
                60% {
                    transform: scale(1.2) rotate(5deg);
                }
                100% {
                    transform: translateY(20em) rotate(15deg);
                }
            }

            .btn {
                display: inline-block;
                font-weight: 400;
                text-align: center;
                white-space: nowrap;
                vertical-align: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
                border: 1px solid transparent;
                line-height: 1.5;
                border-radius: .25rem;
                transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
            }

            .btn-primary {
                color: #fff;
                background-color: #007bff;
                border-color: #007bff;
            }

            .btn-danger {
                color: #fff;
                background-color: #dc3545;
                border-color: #dc3545;
            }

            .btn-success {
                color: #fff;
                background-color: #28a745;
                border-color: #28a745;
            }

            .alert {
                position: relative;
                padding: .75rem 1.25rem;
                margin-bottom: 1rem;
                border: 1px solid transparent;
                border-radius: .25rem;
            }

            .alert-danger {
                color: #721c24;
                background-color: #f8d7da;
                border-color: #f5c6cb;
            }
        </style>
    </head>
    <body>
        <div class="flex-top position-ref full-height" style="margin-top: 50px">
            <div class="content">
                <div class="title m-b-md">
                    Meşrubat Dolabı Durumu:
                    @if ($cupboard->sum("quantity") === 0)
                        tamamen boş
                    @elseif ($cupboard->sum("quantity") === $cupboard->sum("max_quantity"))
                        tamamen dolu
                    @else
                        kısmen dolu
                    @endif
                </div>

                <div class="title m-b-md">
                    Kapak:
                    @if ($door->cover === 1)
                        Acik
                    @else
                        Kapali
                    @endif
                </div>

                @if (session('error'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('error') }}
                    </div>
                @endif

                <div class="links">
                    @if ($cupboard->count() > 0)
                        <div class='vending-machine'>
                            <main class='frame'>
                                <div class='window'>
                                    @foreach ($cupboard as $cupboards)
                                        <div class='row'>
                                            <div class='can'>
                                                <div class='text'>cola</div>
                                            </div>
                                            <div class='can'>
                                                <div class='text'>cola</div>
                                            </div>
                                            <div class='can'>
                                                <div class='text'>cola</div>
                                            </div>
                                            <div class='can'>
                                                <div class='text'>cola</div>
                                            </div>
                                            <div class='can'>
                                                <div class='text'>cola</div>
                                            </div>
                                            <div class='can'>
                                                <div class='text'>cola</div>
                                            </div>
                                        </div>
                                        <br><span>
                                            @if ($cupboards->quantity === $cupboards->max_quantity)
                                                Raf Dolu
                                            @else
                                                {{ $cupboards->quantity }}/{{ $cupboards->max_quantity }}
                                            @endif
                                            @if ($door->cover === 1)
                                                    @if ($cupboards->quantity < 20)
                                                        <a href="/operation?up=1&id={{ $cupboards->id }}" class="btn btn-success"><i class="fas fa-sort-up"></i></a>
                                                    @endif
                                                    @if ($cupboards->quantity > 0)
                                                        <a href="/operation?down=1&id={{ $cupboards->id }}" class="btn btn-danger"><i class="fas fa-sort-down"></i></a>
                                                    @endif
                                            @else
                                                    @if ($cupboards->quantity < 20)
                                                        <a href="/operation?up=1&id={{ $cupboards->id }}" class="btn btn-success"><i class="fas fa-sort-up"></i></a>
                                                    @endif
                                                    @if ($cupboards->quantity > 0)
                                                        <a href="/operation?down=1&id={{ $cupboards->id }}" class="btn btn-danger"><i class="fas fa-sort-down"></i></a>
                                                    @endif
                                            @endif
                                        </span><br><br>
                                    @endforeach
                                    <div class='arm'></div>
                                </div>
                            </main>

                            <aside>
                                <div class='panel'>
                                    @if ($door->cover === 1)
                                        <a href="/operation?open=2&id={{ $door->id }}" class="btn btn-danger">Kapak Kapat</a>
                                    @else
                                        <a href="/operation?open=1&id={{ $door->id }}" class="btn btn-danger">Kapak Ac</a>
                                    @endif
                                    <div class='display'>
                                        {{ $cupboard->sum("quantity") }}
                                    </div>
                                    <div class='input'></div>
                                    <div class='output'></div>
                                </div>
                            </aside>
                        </div>
                    @endif



                </div>
            </div>
        </div>
    </body>
</html>
