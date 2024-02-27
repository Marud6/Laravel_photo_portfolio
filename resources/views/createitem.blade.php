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
<div class="upload">
<input type="text" name="name" placeholder="name">
<input type="text" name="desc" placeholder="desc">
<input type="number" name="albumid" placeholder="albumid">

<button type="submit">post</button>

<h1>Upload image</h1>
<input type="file" id="img" name="img">
<a href="/adminview">BACK</a>
</div>
</form>
</body>


<style>


div.upload{
    padding-top: 60px;
    position: relative;
  top: 0;
  right: 0px;
  font-size: 20px;

}
</style>

<script>



    



</script>

</html>