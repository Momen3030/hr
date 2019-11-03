<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
    <!-- Styles -->
     <style>
        html, body {
    background-color: #fff;
    color: #636b6f;
    font-family: 'Raleway', sans-serif;
    font-weight: 100;
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
    font-size: 12px;
    font-weight: 600;
    letter-spacing: .1rem;
    text-decoration: none;
    text-transform: uppercase;
    }

    .m-b-md {
    margin-bottom: 30px;
    }
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
            @endauth
        </div>
    @endif

    <div class="content">
        <div class="container">
            @if (Session::has('expired'))
                <div class="alert alert-primary text-center" role="alert">
                    برجاء الاشتراك مجدداد للدخول علي النظام
                </div>
            @endif

            <div class="row">
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="https://www.arabigeek.com/wp-content/uploads/2016/05/4_001.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">اشترك الان</h5>
                            <p class="card-text">
                                العروض للباقه الحاليه السنويه
                            </p>
                            <a href="{{route('subscription',['name'=>'annual'])}}" class="btn btn-primary">سنوي</a>
                        </div>
                    </div>
                </div>


                <div class="col">

                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="data:image/png;base64,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" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">اشترك الان</h5>
                            <p class="card-text">
                                العروض للباقه الحاليه الشهريه
                            </p>
                            <a href="{{route('subscription',['name'=>'monthly'])}}" class="btn btn-primary">شهري</a>
                        </div>
                    </div>

                </div>


                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="http://www.stjegypt.com/uploads/986528571275.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">اشترك الان</h5>
                            <p class="card-text">
                                العروض للباقه الحاليه المجانيه

                            </p>
                            <a href="{{route('subscription',['name'=>'free'])}}" class="btn btn-primary">مجاني</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>
</body>
</html>
