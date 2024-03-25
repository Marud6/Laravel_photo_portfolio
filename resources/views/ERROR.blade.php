<!DOCTYPE html>
<html lang="en">
@section("title","ERROR")
@include("layout/Header")

<body>
    @if(Session::has('msg'))
    <h1>{{Session('msg')}}</h1>
    @endif
</body>

</html>
