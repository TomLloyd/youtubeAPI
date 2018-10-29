<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>YouTube API</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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

    <script>
        var delay = (function(){
            var timer = 0;
            return function(callback, ms){
                clearTimeout (timer);
                timer = setTimeout(callback, ms);
            };
        })();

        function submitFunction() {
            $('input').keyup(function () {
                delay(function () {
                    document.getElementById("form").submit();
                }, 50);
            });
        }
    </script>

</head>
<body>

<div class="content">
    <div class="title m-b-md">
        <h2>Welcome to Obinna's YouTube Videos API</h2>
    </div>

    <div width="50%">
    <form id="form" method="post" action="/videos">
        <div class="form-group">
            <label for="searchItem">Search Video:</label>
            <input type="text" class="form-control form-control input-lg"  placeholder="Enter Search Text" name="searchItem">
        </div>
        <div class="form-group">
            <label for="num_of_video">Number of Videos:</label>
            <input type="number" default = "1" class="form-control form-control input-lg" id="num_of_video" placeholder="Select number" name="num_of_video">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
        {{ csrf_field() }}
    </form>
    </div>
</div>

</body>
</html>