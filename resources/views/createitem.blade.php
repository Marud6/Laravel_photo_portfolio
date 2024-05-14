<!DOCTYPE html>
<html lang="en">

@section("title","Create")
@include("layout/Header")


<style>
.upload {
    text-align: center;
}

input {
    text-align: center;

}

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









    @if(Session::has('msg'))
    <h1>{{Session('msg')}}</h1>
    @endif



    <form action="/critem" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="upload">
            <section>
                <input type="text" name="name" placeholder="Name of photo">
            </section>
            <section>
                <input type="text" name="desc" placeholder="description of photo">
            </section>
            <section>
                <select name="albumid" class="albumchs" id="albumid" placeholder="Platform">
                    @foreach($posts as $post)

                    <option value="{{$post->id}}">{{$post->name}}</option>
                    @endforeach

                </select>
            </section>








            <label for="file-upload" class="custom-file-upload">
                Upload images
            </label>
            <input id="file-upload" type="file" id="img[]" name="img[]" multiple />
            <section>
                <a class="btn btn-danger" href="/adminview">back</a>
                <button class="btn btn-primary" type="submit">Submit</button>
            </section>
        </div>
    </form>
</body>




</html>
