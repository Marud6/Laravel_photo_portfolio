<!DOCTYPE html>
<html lang="en">
@section("title","Albums")
@include("layout/Header")

<body>
    @include("layout/navbar")





    <h1>Album create</h1>
    <form action="/cralbum" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="upload">

            <input type="text" name="name" placeholder="name of album">
            <input type="text" name="desc" placeholder="description of album">
            <h1>Profil of album</h1>
            <input type="file" id="img" name="img">
            <a class="btn btn-danger" href="/adminview">back</a>
            <button class="btn btn-primary" type="submit">Submit</button>


        </div>
    </form>
</body>
</body>

</html>
