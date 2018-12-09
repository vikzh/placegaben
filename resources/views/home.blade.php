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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
            integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
            integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
            crossorigin="anonymous"></script>
</head>

<body>

<main role="main" class="container">
    <div class="container jumbotron mt-2">
        <div class="row align-items-start justify-content-center">
            <div class="col-12 col-sm d-flex align-items-start">
                <div class="d-flex flex-column align-items-start justify-content-start">
                    <h1 class="h1">PlaceGaben</h1>
                    <p>A quick and simple service for getting pictures of <strong>Gabe Newell</strong> for use as
                        placeholders in your designs or code.</p>
                    <div class="d-flex flex-column w-100">

                        <div class="accordion" id="accordionExample">
                            <div class="card border border-dark">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link text-dark" type="button" data-toggle="collapse"
                                                data-target="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne">
                                            Usage Example:
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                     data-parent="#accordionExample">
                                    <div class="card-body p-0">
                                        <ul class="list-group list-group-flush">
                                            <li class="pt-0 pb-0 list-group-item list-group-item-action list-group-item-dark">
                                                <a class="text-dark"
                                                   href="{{ url('/') }}/100/200/boss">{{ url('/') }}/100/200</a>
                                            </li>
                                            <li class="pt-0 pb-0 list-group-item list-group-item-action list-group-item-dark">
                                                <a class="text-dark"
                                                   href="{{ url('/') }}/100/200/boss">{{ url('/') }}/200/400</a>
                                            </li>
                                            <li class="pt-0 pb-0 list-group-item list-group-item-action list-group-item-dark">
                                                <a class="text-dark"
                                                   href="{{ url('/') }}/100/200/boss">{{ url('/') }}/100/200/boss</a>
                                            </li>
                                            <li class="pt-0 pb-0 list-group-item list-group-item-action list-group-item-dark">
                                                <a class="text-dark"
                                                   href="{{ url('/') }}/100/200/boss">{{ url('/') }}/500/400/smile</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card border border-dark">
                                <div class="card-header" id="headingTwo">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed text-dark" type="button"
                                                data-toggle="collapse"
                                                data-target="#collapseTwo" aria-expanded="false"
                                                aria-controls="collapseTwo">
                                            List of Image Names:
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                     data-parent="#accordionExample">
                                    <div class="card-body p-0">
                                        <ul class="list-group list-group-flush">
                                            @foreach($images as $image)
                                                <li class="pt-0 pb-0 list-group-item list-group-item-action list-group-item-dark">
                                                    <span class="text-dark">{{ $image }}</span>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm p-2">
                <div class="d-flex justify-content-center align-items-start w-100">
                    <img src="{{ url('/') }}/480/480/soul">
                </div>
            </div>
        </div>

        <div class="row align-items-start justify-content-center border-top">
            <div class="col-12 col-sm">
                <div class="d-flex justify-content-center border-left border-right">
                    <img src="{{ url('/') }}/500/400/smile">
                </div>
            </div>
            <div class="col-12 col-sm">
                <div class="row justify-content-center align-items-between">
                    <div class="col p-0">
                        <div class="d-flex flex-column align-items-center">
                            <div class="d-flex">
                                <div class="d-flex justify-content-right align-items-center p-0 border-right border-bottom">
                                    <img src="{{ url('/') }}/100/200/boss">
                                </div>
                                <div class="d-flex justify-content-left align-items-center p-0 border-left border-bottom">
                                    <img src="{{ url('/') }}/100/200/boss">
                                </div>
                            </div>
                            <div class="d-flex justify-content-center align-items-center p-0 border-left border-right border-dark">
                                <img src="{{ url('/') }}/200/200/wizard">
                            </div>
                        </div>
                    </div>
                    <div class="col p-0">
                        <div class="d-flex align-items-center justify-content-center p-0">
                            <img src="{{ url('/') }}/220/400/green-gabe">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

</body>
</html>