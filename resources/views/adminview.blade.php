<!DOCTYPE html>
<html>
<head>
<style>

div.gallery {
  margin: 5px;
  border: 1px solid #ccc;
  float: left;
  width: 180px;
  background-color: #C5D22D;
  border-radius: 5px;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
  border-radius: 6px;
margin: auto;

}

div.desc {
  padding: 15px;
  text-align: center;
}


div.desc a {
  color: #333;
  display: block;
  text-align: center;
  padding: 6px 8px;
  font-size: 15px;
  text-decoration: none;
  margin-bottom: 15px;
  border-radius: 6px;
}


div.desc a.del {
background-color: #EE4447;

}
div.desc a.del:hover {
background-color: #EA1519;

}


div.desc a.ed {
background-color: #39C907;
margin-bottom: 5px;

}

div.desc a.ed:hover {
background-color: #2B9705;

}


div.desc p {
  text-align: center;
margin: auto;
font-size: 15px;
margin-bottom: 5px;


}

div.gallery h1.desc {
  text-align: center;
margin: auto;
font-size: 25px;

}


body{

  background-color: #D1DB57;
}


.topnav {
  background-color: #333;
  overflow: hidden;
}

.topnav a {
  float: right;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #FFB233;
  color: white;
}
.topnav a.active:hover {
  background-color: #FF9E00;
  color: white;
}

.topnav .icon {
  display: none;
}




.modal {
  position: fixed;
  z-index: 1;
  padding-top: 100px;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0,0.4);
}

.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 50%;
}

.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

div.modal-content button {

background-color: #39C907;
border-radius: 5px;
size: 10px;
}



</style>




</head>
<body>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="topnav" id="myTopnav">
  <a href="create" class="active">Create</a>
  <a href="/" lass="active">Home</a>

  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
  </a>
</div>



@foreach($posts as $post )
<?php
$id = $post->id;
?>

<div class="gallery">
<h1 class="desc">{{$post->name}}</h1>
  <a target="_blank" href="{{ URL('viewitem/'.$id) }}">







  <img src="{{ URL('source/'.$id.'.jpg') }}" alt="Northern Lights" width="600" height="400">






  </a>
  <div class="desc">
  <p>  {{$post->desc}}</p>



  <a class="del" onclick="really(<?=$id?>)"  >DELETE</a>




  <a class="ed" href='/edit/<?=$id?>' >EDIT</a>

  </div>
</div>

@endforeach

<div id="popup" hidden>
<div id="myModal" class="modal">

  <div class="modal-content">
    <span onclick="closerly()" class="close">&times;</span>
    <p>Do you really want to delete this image??</p>
    <button id="yesbuton">YES</button>
  </div>

</div>
</div>


<script>
function really(id){
  document.getElementById("popup").hidden = false;
button=document.getElementById("yesbuton");
button.onclick=function(){
  window.location.href = "/delete/"+id;

}

}
function closerly(){
  document.getElementById("popup").hidden = true;
console.log(id);
}


</script>
</body>
</html>


