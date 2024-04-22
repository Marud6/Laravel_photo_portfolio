<!DOCTYPE html>
<html lang="en">

@section("title","Create")
@include("layout/Header")


<style>
h1 {
    color: white;
}
</style>

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


        <select name="albumid" class="albumchs" id="albumid" placeholder="Platform">
            @foreach($posts as $post)

            <option value="{{$post->id}}">{{$post->name}}</option>
            @endforeach









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