<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@foreach($posts as $post )
<?php
$id=$post->id;
?>

<div class="gallery">
<div class="desc">{{$post->name}}</div>
  <a target="_blank" href="{{ URL('source/'.$id.'.jpg') }}">
  

    <img src="{{ URL('source/'.$id.'.jpg') }}" alt="Northern Lights" width="600" height="400">
  </a>
  <div class="desc">{{$post->desc}}</div>
 
</div>

@endforeach
<a href="/adminview">Back</a>


</body>
</html>