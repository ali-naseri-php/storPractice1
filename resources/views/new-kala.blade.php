<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{url('css/new.css')}}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>

    <link href='https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>

    <link href="http://dev.see8ch.com/see8ch/v3/fonts/ss-social/ss-social.css" rel="stylesheet" />

    <link href="http://dev.see8ch.com/see8ch/v3/fonts/ss-standard/ss-standard.css" rel="stylesheet" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

    <title>Document</title>
</head>
<body>
<div class="login-page">
    <div class="form">
        <form action="{{ route('store')}}"enctype="multipart/form-data"method="post">
            @csrf

            <div class="field name-box">
                name kala<input type="text"name="name" id="name">
            </div>

            <div class="field email-box">
                price<input type="text"name="price" id="email">
            </div>

            <div class="field name-box">
                grouping <input type="text"name="grouping" id="name">
            </div>

            <div class="field name-box">
                images<input type="file"name="image" id="name">
            </div>


            <div class="field name-box">
                <input type="submit" id="name">
            </div>

        </form>
        </section>
</body>
</html>
