<!DOCTYPE html>
<html lang="en">
@section("title","Albums")
@include("layout/Header")

<style>
input[type="file"] {
    display: none;
}

.custom-file-upload {
    border: 1px solid #ccc;
    display: inline-block;
    padding: 6px 12px;
    cursor: pointer;
}

h1 {
    color: white;

}

label {
    color: white;
}

.upload {
    text-align: center;
}

input {
    text-align: center;

}

div.upload {
    padding-top: 60px;
    position: relative;
    top: 0;
    right: 0px;
    font-size: 20px;

}
</style>

<body>
    @include("layout/navbar")




    <form action="/cralbum" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="upload">
            <section>
                <input type="text" name="name" placeholder="Name of album">
            </section>
            <section>
                <input type="text" name="desc" placeholder="Description of album">
            </section>
            <label for="file-upload" class="custom-file-upload">
                Upload image
            </label>
            <input id="file-upload" type="file" id="img" name="img" />






            <section>
                <label for="filess" class="custom-file-upload">
                    Add Images
                </label>
                <input type="file" id="filess" name="filess[]" multiple><br><br>
            </section>
            <section>
                <a class="btn btn-danger" href="/adminview">back</a>
                <button class="btn btn-primary" type="submit">Submit</button>
            </section>

        </div>
    </form>
</body>
</body>

</html>
