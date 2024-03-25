<!DOCTYPE html>
<html lang="en">
@section("title","view")
@include("layout/Header")

<body>
    @include("layout/navbar")


    <style>
    img {
        height: 500px;
        width: 500px;
        object-fit: contain;
    }
    </style>


    @foreach($posts as $post )
    <?php
$id=$post->id;
?>

    <div class="gallery">

        <a target="_blank" href="{{ URL('source/'.$id.'.jpg') }}">
            <img src="{{ URL('source/'.$id.'.jpg') }}" alt="Northern Lights">
        </a>
        <h1 class="desc">{{$post->name}}</h1>


        <p class="desc">{{$post->desc}}</p>
        <a class="btn btn-danger" class="odkaz" href="/adminview">Back</a>

    </div>

    @endforeach


</body>

<style>
div.gallery {
    margin: auto;
    width: 50%;
    padding: 10px;
}

div.gallery h1 {
    margin: auto;
    width: 40%;
    padding: 10px;
}
</style>

</html>