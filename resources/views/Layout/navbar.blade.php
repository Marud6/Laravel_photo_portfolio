<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/photos">Portfolio</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li><a href="/">Home</a></li>
                <li><a href="/albumsview">Gallery</a></li>
                <li><a href="/search">search</a></li>
                <li><a href="/contact">Contact</a></li>
                <li><a href="/about">About</a></li>

                <?php
if ($user = auth()->user()) {

    echo ('<li><a href="/create">Create</a></li>
    <li><a href="/create_album">Create_album</a></li>
    <li><a href="/adminview">Dashboard</a></li>
    <li><a href="/statistic">Statistic</a></li>');
}

?>



            </ul>
            <ul class="nav navbar-nav navbar-right">
                <?php
if ($user = auth()->user()) {

    echo (' <li><a href="/logout"><span class="glyphicon glyphicon-log-in"></span> Log Out</a></li>
    ');
} else {
    echo (' <li><a href="/login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    ');

}

?>




            </ul>
        </div>
    </div>
</nav>