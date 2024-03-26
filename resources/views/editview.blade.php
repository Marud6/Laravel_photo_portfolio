<!DOCTYPE html>
<html lang="en">

@section("title","edit")
@include("layout/Header")

<body>
    @include("layout/navbar")


    @foreach($posts as $post)
    <img src="{{ URL('source/'.$post->id.'.jpg') }}" alt="Northern Lights" class="mx-auto d-block">

    <form action="/update" method="post" enctype="multipart/form-data">
        @csrf

        <label for="comment"><kbd>name:</kbd></label>
        <input type="text" class="form-control" name="name" value="{{$post->name}}" placeholder=" Name">

        <label for="comment"><kbd>description:</kbd></label>
        <textarea class="form-control" rows="5" id="comment" name="desc">{{$post->desc}}</textarea>
        <label for="comment"><kbd>Abumid:</kbd></label>

        <input type="number" class="form-control" name="albumid" value="{{$post->albumid}}">
        <input hidden type="text" name="id" value="{{$post->id}}">

        <h1 class="h1">Upload image</h1>
        <input type="file" id="img" name="img">
        @endforeach
        <a class="btn btn-danger" href="/adminview">back</a>
        <button class="btn btn-primary" type="submit">Submit</button>
    </form>
</body>


<style>
body {
    background-color: grey;
}

img {
    height: 500px;
    width: 500px;
    object-fit: contain;
}
</style>

</html>
