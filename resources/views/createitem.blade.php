<!DOCTYPE html>
<html lang="en">

@section("title","Create")
@include("layout/Header")

<body>

    @include("layout/navbar")









    @if(Session::has('msg'))
    <h1>{{Session('msg')}}</h1>
    @endif



    <form action="/critem" method="POST" enctype="multipart/form-data">
        @csrf
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

        <input type="text" name="name" placeholder="name">
        <input type="text" name="desc" placeholder="desc">
        <div class="dropdown">
            <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
                Chose album
            </button>
            <ul class="dropdown-menu">


                @foreach($posts as $post)
                <li><a class="dropdown-item" name="albumid" value="{{$post->id}}">{{$post->name}}</a>
                </li>

                @endforeach

            </ul>
        </div>
        <script>

        </script>




        <div class="upload">

            <h1>Upload image</h1>
            <input type="file" id="img" name="img">
            <a class="btn btn-danger" href="/adminview">back</a>
            <button class="btn btn-primary" type="submit">Submit</button>
        </div>
    </form>
</body>


<style>
div.upload {
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
