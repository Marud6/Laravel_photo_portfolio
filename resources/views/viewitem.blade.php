<!DOCTYPE html>
<html lang="en">
@section("title","view")
@include("layout/Header")

<body>
    @include("layout/navbar")


    <style>
    body {}

    img {
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 50%;
        height: 500px;
        width: 500px;
        object-fit: contain;
    }

    p {
        text-align: center;

        color: white;
    }

    h1 {
        text-align: center;

        color: white;
    }
    </style>


    @foreach($posts as $post )
    <?php
$id = $post->id;
?>

    <div class="gallery">

        <a target="_blank">
            <img src="{{ URL('source/'.$post->id.'.'.$post->att) }}" alt="Northern Lights">
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