<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Photo Gallery</title>
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
</head>
<body>
<div class="gallery">
@foreach($posts as $post)

    <img src="{{ URL('source/'.$post->id.'.jpg') }}" alt="Placeholder Image 1">



@endforeach
</div>


</body>
</html>