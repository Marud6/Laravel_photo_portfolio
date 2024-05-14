<!DOCTYPE html>
<html lang="en">

@section("title","edit")
@include("layout/Header")

<body>
    @include("layout/navbar")


    @foreach($posts as $post)
    <img src="{{ URL('source/albums/'.$post->id.'.'.$post->att) }}" alt="Northern Lights" class="mx-auto d-block">

    <form action="/update_album" method="post" enctype="multipart/form-data">
        @csrf

        <label for="comment"><kbd>name:</kbd></label>
        <input type="text" class="form-control" name="name" value="{{$post->name}}" placeholder=" Name">

        <label for="comment"><kbd>description:</kbd></label>
        <textarea class="form-control" rows="5" id="comment" name="desc">{{$post->desc}}</textarea>




        <input hidden type="text" name="id" value="{{$post->id}}">

        <label for="img" class="custom-file-upload">
            Add Image
        </label>
        <input type="file" id="img" name="img"><br><br>
        @endforeach
        <a class="btn btn-danger" href="/adminview">back</a>
        <button class="btn btn-primary" type="submit">Submit</button>
    </form>
</body>


<style>
input[type="file"] {
    display: none;
}

.custom-file-upload {
    border: 1px solid #ccc;
    display: inline-block;
    padding: 6px 12px;
    cursor: pointer;
    color: white;
}

img {
    height: 500px;
    width: 500px;
    object-fit: contain;
}
</style>

</html>
