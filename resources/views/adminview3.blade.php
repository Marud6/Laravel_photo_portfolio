<!DOCTYPE html>
<html lang="en">

<head>
    @section("title","Dashboard")
    @include("layout/Header")
    <style>
    * {
        box-sizing: border-box;
    }

    body {
        font-family: Lato, sans-serif;
        margin: 0;

        min-height: 100vh;

        justify-content: center;
        align-items: center;
        background: rgba(20, 20, 20, 1);
    }

    img {
        image-rendering: optimizeSpeed;
        width: 100%;
        display: block;
        aspect-ratio: 1 / 1;
        object-fit: cover;
        transition: transform 1000ms;
    }

    .it {
        list-style: none;
        margin: 0;
        padding: 0;
        display: grid;
        gap: 0.5rem;
        grid-template-columns: repeat(auto-fit, minmax(20rem, 1fr));
        max-width: 100%;
        width: 1920;
    }

    figure {
        margin: 0;
        position: relative;
        overflow: hidden;
    }

    figure::after {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        width: 200%;
        height: 200%;
        background: rgba(0, 0, 0, 0.5);
        transform-origin: center;
        opacity: 0;
        transform: scale(2);
        transition: opacity 300ms;
    }

    figcaption {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        place-items: center;
        text-align: center;
        padding: 1rem;
        color: white;
        font-size: 1.2rem;
        z-index: 1;
        opacity: 0;
        transition: opacity 600ms, transform 600ms;
    }

    a:is(:hover, :focus) figure::after {
        opacity: 1;
    }

    a:is(:hover, :focus) figcaption {
        opacity: 1;
        transition: opacity 600ms;
    }

    @media (prefers-reduced-motion: no-preference) {
        figcaption {
            transform: translate3d(0, 2rem, 0);
        }

        figure::after {
            border-radius: 50%;
            opacity: 1;
            transform: scale(0);
            transition: transform 900ms;
        }

        a:is(:hover, :focus) figure::after {
            transform: scale(2.5);
        }

        a:is(:hover, :focus) figcaption {
            opacity: 1;
            transform: translate3d(0, 0, 0);
            transition: opacity 600ms 400ms, transform 600ms 400ms;
        }

        a:is(:hover, :focus) img {
            transform: scale(1.2);
        }


    }

    .itt {
        list-style: none;
        margin: 0;
        padding: 0;
        display: grid;
        gap: 0.5rem;
        grid-template-columns: repeat(auto-fit, minmax(25rem, 1fr));
        max-width: 100%;
        width: 1920;


    }

    #but {
        text-align: center;
        border-radius: 2px;
    }

    #al_but:hover {
        background-color: grey;
        color: white;
    }

    #ph_but:hover {
        background-color: grey;
        color: white;
    }
    </style>
</head>

<body>
    @include("layout/navbar")

    <body>
        <div id="but">
            <button id="al_but" onclick="show_albums()">Albums</button>
            <button id="ph_but" onclick=" show_photos()">Photos</button>
        </div>








        <ul id="albums" style="display: grid;" class="itt">

            @foreach($posts_albums as $post)
            <li>
                <a href="album/{{$post->id}}">
                    <figure>
                        <img src='{{ URL('source/albums/'.$post->id.'.'.$post->att) }}'>
                        <figcaption>{{$post->name}}</figcaption>

                    </figure>


                </a>
                <a class="btn btn-danger" href="/album_delete/{{$post->id}}">DELETE</a>
                <a class="btn btn-primary" href='/album_edit/{{$post->id}}'>EDIT</a>
            </li>


            @endforeach


        </ul>



        <ul id="photos" style="display: grid;" class="it">

            @foreach($posts as $post)
            <li>
                <a href="viewitem/{{$post->id}}">
                    <figure>
                        <img src='{{ URL('source/'.$post->id.'.'.$post->att) }}'>
                        <figcaption>{{$post->name}}</figcaption>

                    </figure>


                </a>
                <a class="btn btn-danger" href="/delete/{{$post->id}}">DELETE</a>
                <a class="btn btn-primary" href='/edit/{{$post->id}}'>EDIT</a>
            </li>


            @endforeach


        </ul>

    </body>
    <script>
    var photos = document.getElementById("photos");
    var albums = document.getElementById("albums");
    var albt = document.getElementById("al_but");
    var phbt = document.getElementById("ph_but");


    function show_photos() {
        if (photos.style.display == "none") {


            photos.style.display = "grid";
            phbt.style.color = "white";
            phbt.style.backgroundColor = "grey";
        } else if (photos.style.display == "grid") {

            photos.style.display = "none";
            phbt.style.color = "black";
            phbt.style.backgroundColor = "white";

        }







    }

    function show_albums() {
        if (albums.style.display == "none") {
            albums.style.display = "grid";
            albt.style.color = "white";
            albt.style.backgroundColor = "grey";

        } else if (albums.style.display == "grid") {
            albums.style.display = "none";
            albt.style.color = "black";
            albt.style.backgroundColor = "white";

        }



    }
    </script>

</html>
