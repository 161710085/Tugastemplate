	@extends('layout.index')
@section('konten')<br>
	<!DOCTYPE html>
<html>
<title></title>
  <style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Karma", sans-serif}
.w3-bar-block .w3-bar-item {padding:20px}
</style>
<body>

<div class="">
  <div class="container text-center"><br><br><p>    <h1><font > My Gallery</font></h1></p>      
  </div>
</div>
  <br><br><br><br>
<div class="container-fluid bg-3 text-center">    
  <div class="row">
    <div class="col-sm-3">
      <p>Let Me Tell You About This Steak</p><br>
      <img src="steak.jpg" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3"> 
      <p>The Perfect Sandwich, A Real NYC Classic</p>
      <img src="sandwich.jpg" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3"> 
      <p>Le French</p><br>
      <img src="croissant.jpg" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3">
      <p>The Perfect Sandwich, A Real NYC Classic

</p>
      <img src="cherries.jpg" class="img-responsive" style="width:100%" alt="Image">
    </div>
  </div>
</div>

<div class="container-fluid bg-3 text-center">    
  <div class="row">
    <div class="col-sm-3">
      <p>Once Again, Robust Wine and Vegetable Pasta</p>
      <img src="wine.jpg" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3"> 
      <p>All I Need Is a Popsicle</p><br>
      <img src="popsicle.jpg" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3"> 
      <p>Salmon For Your Skin
  </p><br>
      <img src="salmon.jpg" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3">
      <p>The Perfect Sandwich, A Real Classic</p><br>
      <img src="sandwich.jpg" class="img-responsive" style="width:100%" alt="Image">
    </div>
  </div>
</div><br>


</body>
</html>

@endsection