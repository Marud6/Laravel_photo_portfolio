<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<form action="/verifilogin" method="POST">
@csrf
<p>username</p>

<input type="text" name="username" placeholder="username">
<p>pasword</p>
<input type="text" name="pasword" placeholder="pasword">

<button type="submit">post</button>

</body>
</html>
