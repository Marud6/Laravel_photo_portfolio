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
        <div class="upload">

            <input type="text" name="name" placeholder="name">
            <input type="text" name="desc" placeholder="desc">
            <input type="number" name="albumid" placeholder="albumid">



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
