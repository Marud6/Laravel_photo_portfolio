<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<form action="/update"  method="post" enctype="multipart/form-data">
@foreach($posts as $post)
<h1>{{$post->id}}</h1>
<input type="text" class="form-control" name="name" value="{{$post->name}}" placeholder=" Name">
<input type="text" class="form-control" name="desc" value="{{$post->desc}}" placeholder=" Name">
<img src="{{ URL('source/'.$post->id.'.jpg') }}" alt="Northern Lights" >
<h1>Upload image</h1>
<input type="file" id="img" name="img">
@endforeach
    <a href="/adminview">back</a>
    <button type="submit">Submit</button>
    </form>
</body>
</html>