<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
</head>
<style>
* {
    box-sizing: border-box;
}

body {
    font-family: Lato, sans-serif;
    margin: 0;
    padding: 1rem;
    min-height: 100vh;
    display: flex;
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

ul {
    list-style: none;
    margin: 0;
    padding: 0;
    display: grid;
    gap: 0.5rem;
    grid-template-columns: repeat(auto-fit, minmax(20rem, 1fr));
    max-width: 100%;
    width: 70rem;
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

<body>

    <ul>
        <li>
            <a href="">
                <figure>
                    <img src='https://images.unsplash.com/photo-1631451095765-2c91616fc9e6?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTYzNDA0OTI3Nw&ixlib=rb-1.2.1&q=80&w=400'
                        alt='Volcano and lava field against a stormy sky'>
                    <figcaption>Mountains and volcanos</figcaption>
                </figure>
            </a>
        </li>
        <li>
            <a href="">
                <figure>
                    <img src='{{ URL('source/albums/3.jpg') }}'
                        alt='Guy on a bike ok a wooden bridge with a forest backdrop'>
                    <figcaption>Adventure getaways</figcaption>
                </figure>
            </a>
        </li>
        <li>
            <a href="">
                <figure>
                    <img src='https://images.unsplash.com/photo-1633635146842-12d386e64058?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTYzNDA1MjA5OA&ixlib=rb-1.2.1&q=80&w=400'
                        alt='Person standing alone in a misty forest'>
                    <figcaption>Forest escapes</figcaption>
                </figure>
            </a>
        </li>
        <li>
            <a href="">
                <figure>
                    <img src='https://images.unsplash.com/photo-1568444438385-ece31a33ce78?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTYzNDA1MjA5OA&ixlib=rb-1.2.1&q=80&w=400'
                        alt='Person hiking on a trail through mountains while taking a photo with phone'>
                    <figcaption>Hiking trails</figcaption>
                </figure>
            </a>
        </li>
        <li>
            <a href="">
                <figure>
                    <img src='https://images.unsplash.com/photo-1633515257379-5fda985bd57a?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTYzNDA1MjA5OA&ixlib=rb-1.2.1&q=80&w=400'
                        alt='Street scene with person walking and others on motorbikes, all wearing masks'>
                    <figcaption>Street scenes</figcaption>
                </figure>
            </a>
        </li>
        <li>
            <a href="">
                <figure>
                    <img src='https://images.unsplash.com/photo-1633209931146-260ce0d16e22?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTYzNDA1MjA5OA&ixlib=rb-1.2.1&q=80&w=400'
                        alt='Fashionable-looking girl with blond hair and pink sunglasses'>
                    <figcaption>Trending</figcaption>
                </figure>
            </a>
        </li>
    </ul>
</body>

</html>
