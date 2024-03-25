<!DOCTYPE html>
<html lang="en">
@section("title","Albums")
@include("layout/Header")
<style>
.gallery {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    grid-auto-rows: 250px;
    gap: 10px;
    padding: 10px;
}

.gallery img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}
</style>

<body>
    <div class="gallery">

        <img src="{{ URL('source/1'.'.jpg') }}" alt="Placeholder Image 1">



    </div>


</body>

</html>