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
    <img src="https://via.placeholder.com/250" alt="Placeholder Image 1">
    <img src="https://via.placeholder.com/250" alt="Placeholder Image 2">
    <img src="https://via.placeholder.com/250" alt="Placeholder Image 3">
    <img src="https://via.placeholder.com/250" alt="Placeholder Image 4">
    <img src="https://via.placeholder.com/250" alt="Placeholder Image 5">
    <img src="https://via.placeholder.com/250" alt="Placeholder Image 6">
    <img src="https://via.placeholder.com/250" alt="Placeholder Image 7">
    <img src="https://via.placeholder.com/250" alt="Placeholder Image 8">
    <img src="https://via.placeholder.com/250" alt="Placeholder Image 9">
</div>

</body>
</html>