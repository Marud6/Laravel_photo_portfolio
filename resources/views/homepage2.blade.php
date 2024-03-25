<!DOCTYPE html>
<html lang="en">
@section("title","Homepage")
@include("layout/Header")
<style>
.navbar {
    margin-bottom: 0;
    border-radius: 0;
}

footer {
    background-color: #f2f2f2;
    padding: 25px;
}
</style>

<body>

    @include("layout/navbar")

    <div class="jumbotron">
        <div class="container text-center">
            <h1>My Portfolio</h1>
            <p>Just some photos...</p>
        </div>
    </div>



    <div class="container-fluid bg-3 text-center">
        <h3>My newest word</h3><br>
        <div class="row">
            <div class="col-sm-3">
                <p>{{ $posts[0]->name }}</p>
                <img src="{{ URL('source/'. $posts[0]->id .'.jpg') }}" class="img-responsive" style="width:100%"
                    alt="Image">
            </div>
            <div class="col-sm-3">
                <p>{{ $posts[1]->name }}</p>
                <img src="{{ URL('source/'.$posts[1]->id .'.jpg') }}" class="img-responsive" style="width:100%"
                    alt="Image">
            </div>
            <div class="col-sm-3">
                <p>{{ $posts[2]->name }}</p>
                <img src="{{ URL('source/'.$posts[2]->id .'.jpg') }}" class="img-responsive" style="width:100%"
                    alt="Image">
            </div>
            <div class="col-sm-3">
                <p>{{ $posts[3]->name }}</p>
                <img src="{{ URL('source/'.$posts[3]->id .'.jpg') }}" class="img-responsive" style="width:100%"
                    alt="Image">
            </div>
        </div>
    </div><br>

    <div class="container-fluid bg-3 text-center">
        <div class="row">
            <div class="col-sm-3">
                <p>{{ $posts[4]->name }}</p>
                <img src="{{ URL('source/'.$posts[4]->id .'.jpg') }}" class="img-responsive" style="width:100%"
                    alt="Image">
            </div>
            <div class="col-sm-3">
                <p>{{ $posts[5]->name }}</p>
                <img src="{{ URL('source/'.$posts[5]->id .'.jpg') }}" class="img-responsive" style="width:100%"
                    alt="Image">
            </div>
            <div class="col-sm-3">
                <p>{{ $posts[6]->name }}</p>
                <img src="{{ URL('source/'.$posts[6]->id .'.jpg') }}" class="img-responsive" style="width:100%"
                    alt="Image">
            </div>
            <div class="col-sm-3">
                <p>{{ $posts[7]->name }}</p>
                <img src="{{ URL('source/'.$posts[7]->id .'.jpg') }}" class="img-responsive" style="width:100%"
                    alt="Image">
            </div>
        </div>
    </div><br><br>


    < <footer class="container-fluid text-center">
        <p>Footer Text</p>
        </footer>

</body>

</html>