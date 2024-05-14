<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <style>
    body {
        background-color: rgba(20, 20, 20, 1);
    }
    </style>
</head>

<style>
h4 {
    color: white;
}

body {
    margin: 0;
    padding: 0;
}

/* .container{
	width:90%
	margin:10px auto;
} */
.portfolio-menu {
    text-align: center;
}

.portfolio-menu ul li {
    display: inline-block;
    margin: 0;
    list-style: none;
    padding: 10px 15px;
    cursor: pointer;
    -webkit-transition: all 05s ease;
    -moz-transition: all 05s ease;
    -ms-transition: all 05s ease;
    -o-transition: all 05s ease;
    transition: all .5s ease;
}



.portfolio-item .item {
    float: left;
    margin-bottom: 10px;
}
</style>


<script>
$('.portfolio-menu ul li').click(function() {
    $('.portfolio-menu ul li').removeClass('active');
    $(this).addClass('active');

    var selector = $(this).attr('data-filter');
    $('.portfolio-item').isotope({
        filter: selector
    });
    return false;
});
$(document).ready(function() {
    var popup_btn = $('.popup-btn');
    popup_btn.magnificPopup({
        type: 'image',
        gallery: {
            enabled: true
        }
    });
});
</script>

<body>



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center my-2">
                <h4>Photos</h4>
                <a class="btn btn-danger" href="search">back</a>
            </div>
        </div>
        <div class="portfolio-menu mt-2 mb-4">

        </div>
        <div class="portfolio-item row">
            @foreach($posts as $post)
            <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
                <a href="{{ URL('source/'.$post->id.'.jpg') }}" class="fancylight popup-btn"
                    data-fancybox-group="light">
                    <img class="img-fluid" src="{{ URL('source/'.$post->id.'.'.$post->att) }}" alt="">
                </a>
            </div>
            @endforeach
        </div>
    </div>




</body>

</html>
