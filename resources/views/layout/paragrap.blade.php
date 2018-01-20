	@extends('layout.index')
@section('konten')<br><br><br><br>
    <style>    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
  </style>
</head>
<body>
<div class="container text-center">    
  <div class="row">
    <div class="col-sm-3 well">
      <div class="well">
        <p><a href="adit.jpg">My Profile</a></p>
        <img src="adit.jpg" class="img-circle" height="100" width="200" alt="Avatar">
      </div>
      <div class="well">
        
        <p>
          <span class="label label-default">New</span>
          <span class="label label-primary">School</span>
          <span class="label label-success">Smk</span>
          <span class="label label-info">Assalaam</span>
          <span class="label label-warning">Bandung</span>
          <span class="label label-danger">Industries Education Based</span>
        </p>
      </div>
      <div class="alert alert-success fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        <p><strong>Ey!</strong></p>
        People are looking at your profile. Find out who.
      </div>
      
    </div><hr>
    <div class="col-sm-7">
    
      <div class="row">
        <div class="col-sm-12">
          <div class="panel panel-default text-left">
            <div class="panel-body">
              <p contenteditable="true">Status: Muncak</p>
              <button type="button" class="btn btn-default btn-sm">
                <span class="glyphicon glyphicon-thumbs-up"></span> Like
              </button>     
            </div>
          </div>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-sm-3">
          <div class="well">
           <p>Mts</p>
           <img src="putri.jpg" class="img-circle" height="55" width="55" alt="Avatar">
          </div>
        </div>
        <div class="col-sm-9">
          <div class="well">
            <p>Just Forgot that I had to mention something about someone to someone about how I forgot something, but now I forgot it. Ahh, forget it! Or wait. I remember.... no I don't.</p>
          </div>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-sm-3">
          <div class="well">
           <p>Smk</p>
           <img src="artapela.jpg" class="img-circle" height="55" width="55" alt="Avatar">
          </div>
        </div>
        <div class="col-sm-9">
          <div class="well">
            <p>Just Forgot that I had to mention something about someone to someone about how I forgot something, but now I forgot it. Ahh, forget it! Or wait. I remember.... no I don't.</p>
          </div>
        </div>
      </div><hr>
      <div class="row">
        <div class="col-sm-3">
          <div class="well">
           <p>Kuliah</p>
           <img src="malam.jpg" class="img-circle" height="55" width="55" alt="Avatar">
          </div>
        </div>
        <div class="col-sm-9">
          <div class="well">
            <p>Just Forgot that I had to mention something about someone to someone about how I forgot something, but now I forgot it. Ahh, forget it! Or wait. I remember.... no I don't.</p>
          </div>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-sm-3">
          <div class="well">
           <p>Rpl 1</p>
           <img src="rpl1.jpg" class="img-circle" height="55" width="55" alt="Avatar">
          </div>
        </div>
        <div class="col-sm-9">
          <div class="well">
            <p>Just Forgot that I had to mention something about someone to someone about how I forgot something, but now I forgot it. Ahh, forget it! Or wait. I remember.... no I don't.</p>
          </div>
        </div>
      </div>     
    </div>
    <div class="col-sm-2 well">
      <div class="thumbnail">
        <p>Upcoming Events:</p>
        <img src="nature.jpg" alt="Paris" width="400" height="300">
        <p><strong>Artapela</strong></p>
        <p>Monday. 27 Oktober 2017</p>
        <a href="https://tempatwisatadibandung.info/gunung-artapela-pangalengan-bandung/"><button class="btn btn-primary"> Info Artapela</button></a>
      </div>      
      <div class="well">
      </div>
      <div class="well">
      </div>
    </div>
  </div>
</div>

</body>
</html>
<hr>
@endsection