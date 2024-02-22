<!DOCTYPE html>
<html>
<head>
<style>
div.gallery {
  margin: 5px;
  border: 1px solid #ccc;
  float: left;
  width: 180px;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}
</style>
</head>
<body>






<a href="create">create new item</a>

@foreach($posts as $post )
<?php
$id=$post->id;
?>

<div class="gallery">
<div class="desc">{{$post->name}}</div>
  <!-- <a target="_blank" href="{{ URL('source/'.$id.'.jpg') }}"> -->
  <a target="_blank" href="{{ URL('viewitem/'.$id) }}">


    <img src="{{ URL('source/'.$id.'.jpg') }}" alt="Northern Lights" width="600" height="400">
  </a>
  <div class="desc">{{$post->desc}}</div>
  <a href='/delete/<?=$id?>' >DELETE</a>
  <a href='/edit/<?=$id?>' >EDIT</a>

</div>

@endforeach


</body>
</html>


