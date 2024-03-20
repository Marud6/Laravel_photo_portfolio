<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@if(Session::has('msg'))
<h1>{{Session('msg')}}</h1>
@endif
</body>
</html>