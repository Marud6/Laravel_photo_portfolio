<!DOCTYPE html>
<html lang="en">

<head>
    @section("title","Dashboard")
    @include("layout/Header")

    <style>
    body {
        background: rgba(20, 20, 20, 1);

    }

    .thumbnail {
        width: 250px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        text-align: center;
        max-height: 350px;
        overflow-y: auto;
        margin-bottom: 20;

    }

    img {

        width: 100%;
        display: block;
        aspect-ratio: 1 / 1;
        object-fit: cover;
        transition: transform 1000ms;
    }
    </style>
</head>

<body>
    @include("layout/navbar")


    <div class="container">
        <div class="row">
            @foreach($posts as $post)
            <div class="col-md-3">
                <div class="thumbnail">
                    <h1 class="desc">{{$post->name}}</h1>
                    <a target="_blank" href="{{ URL('viewitem/'.$post->id) }}">
                        <img src="{{ URL('source/'.$post->id.'.jpg') }}" alt="Northern Lights" style="width:100%">
                    </a>
                    <div class="caption">
                        <p>{{$post->desc}}</p>
                    </div>
                    <div class="desc">
                        <a class="btn btn-danger" href="/delete/{{$post->id}}">DELETE</a>
                        <a class="btn btn-primary" href='/edit/{{$post->id}}'>EDIT</a>
                    </div>
                </div>
            </div>
            @if($loop->iteration % 4 == 0)
        </div>
        <div class="row">
            @endif
            @endforeach
        </div>
    </div>

</body>

</html>
