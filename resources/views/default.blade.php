<html lang="en">
<head >
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        @yield("content")

        @if(Session::has('flash_message'))
            <div class="alert alert-success">{{Session::get('flash_message')}}</div>
        @endif
    </div>
        @yield("footer")
</body>
</html>