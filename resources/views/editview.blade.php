<!DOCTYPE html>
<html lang="en">

@section("title","edit")
@include("layout/Header")

<body>
    @include("layout/navbar")


    @foreach($posts as $post)
    <img src="{{ URL('source/'.$post->id.'.'.$post->att) }}" alt="Northern Lights" class="mx-auto d-block">

    <form action="/update" method="post" enctype="multipart/form-data">
        @csrf

        <label for="comment"><kbd>name:</kbd></label>
        <input type="text" class="form-control" name="name" value="{{$post->name}}" placeholder=" Name">

        <label for="comment"><kbd>description:</kbd></label>
        <textarea class="form-control" rows="5" id="comment" name="desc">{{$post->desc}}</textarea>

        <select name="albumid" class="albumchs" id="albumid" placeholder="idk">
            {{$ac=$post->albumid}}

            <option value="{{$post->albumid}}">{{$ac}}</option>
            @foreach($posts2 as $post2)

            <option value="{{$post2->id}}">{{$post2->name}}</option>
            @endforeach


            <input hidden type="text" name="id" value="{{$post->id}}">

            <section>
                <label for="img" class="custom-file-upload">
                    Add Image
                </label>
                <input type="file" id="img" name="img"><br><br>


            </section>


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