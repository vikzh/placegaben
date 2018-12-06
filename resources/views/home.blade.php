<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="vkzhuk">

    <title>Title</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
</head>

<body>

<main role="main" class="container">
    <div class="container jumbotron mt-2">
        <div class="row align-items-center">
            <div class="col">
                <div>
                    <h1>PlaceGaben</h1>
                </div>
            </div>

            <div class="col">
                <div class="d-flex justify-content-center border-left border-right">
                    <img src="{{ url('/') }}/450/480/soul">
                </div>
            </div>
        </div>

        <div class="row align-items-center mt-3 border-top pt-2">
            <div class="col">
                <div class="d-flex justify-content-center border-left border-right">
                    <img src="{{ url('/') }}/500/400/smile">
                </div>
            </div>
            <div class="col">
                <div class="row align-items-center">
                    <div class="col">
                        <div class="d-flex flex-column align-items-center border-left border-right">
                            <div class="d-flex">
                                <div class="d-flex justify-content-center align-items-center">
                                    <img src="{{ url('/') }}/100/200/boss">

                                </div>
                                <div class="d-flex justify-content-center align-items-center">
                                    <img src="{{ url('/') }}/100/200/boss">
                                </div>
                            </div>
                            <div class="d-flex justify-content-center align-items-center">
                                <img src="{{ url('/') }}/200/200/wizard">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="d-flex justify-content-center align-items-center border-left border-right">
                            <img src="{{ url('/') }}/200/400/green-gabe">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

</body>
</html>