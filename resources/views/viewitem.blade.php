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
<h1 class="desc">{{$post->name}}</h1>
  <a target="_blank" href="{{ URL('source/'.$id.'.jpg') }}">
  

    <img src="{{ URL('source/'.$id.'.jpg') }}" alt="Northern Lights" >
  </a>
  <p class="desc">{{$post->desc}}</p>
  <a class="odkaz" href="/adminview">Back</a>

</div>

@endforeach


</body>

<style>

div.gallery {
  margin: auto;
  width: 50%;
  padding: 10px;
}

div.gallery h1 {
  margin: auto;
  width: 40%;
  padding: 10px;
}


</style>
</html>