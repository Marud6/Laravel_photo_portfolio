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



<form action="/critem" method="POST" enctype="multipart/form-data">
@csrf

<input type="text" name="name" placeholder="name">
<input type="text" name="desc" placeholder="desc">

<button type="submit">post</button>

<h1>Upload image</h1>
<input type="file" id="img" name="img">

</form>
</body>
</html>