<!DOCTYPE html>
<html lang="en">

@section("title","Albums")
@include("layout/Header")
<style>
* {
    box-sizing: border-box;
}

body {
    font-family: Lato, sans-serif;
    margin: 0;
    padding: 1rem;
    min-height: 100vh;

    justify-content: center;
    align-items: center;
    background: rgba(20, 20, 20, 1);
}

img {
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
</style>

@include("layout/navbar")

<body>



    <ul class="it">

        @foreach($posts as $post)
        <li>
            <a href="/album/{{$post->id}}">
                <figure>
                    <img src='{{ URL('source/albums/'.$post->id.'.jpg') }}'
                        alt='Volcano and lava field against a stormy sky'>
                    <figcaption>{{$post->name}}</figcaption>
                </figure>
            </a>
        </li>


        @endforeach


    </ul>


</body>

</html>