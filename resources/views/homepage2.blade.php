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
    background: rgba(20, 20, 20, 1);
    padding: 25px;
}



p {
    color: white;
}

h1 {
    color: black !important;
}

h2 {
    color: black !important;
}

h3 {
    color: white;
}
</style>

<body>

    @include("layout/navbar")

    <div class="jumbotron">
        <div class="container text-center">
            <h1>My Portfolio</h1>
            <h2>Just some photos...</h2>
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


    <footer class="container-fluid text-center">
        @include("layout/footer")
    </footer>

</body>

</html>
