@extends('layout.index')
@section('konten')
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
body, html {
    height: 100%;
    color: #777;
    line-height: 1.8;
}

/* Create a Parallax Effect */
.bgimg-1, .bgimg-2, .bgimg-3 {
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

/* First image (Logo. Full height) */
.bgimg-1 {
    background-image: url('bg.jpg');
    min-height: 100%;
}

/* Second image (Portfolio) */
.bgimg-2 {
    background-image: url("bg.jpg");
    min-height: 400px;
}

/* Third image (Contact) */
.bgimg-3 {
    background-image: url("bg.jpg");
    min-height: 400px;
}

.wide {letter-spacing: 10px;}
.hover-opacity {cursor: pointer;}

/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-device-width: 1024px) {
    .bgimg-1, .bgimg-2, .bgimg-3 {
        background-attachment: scroll;
    }
}
</style>
<body><br><br><br><br>	
<!-- First Parallax Image with Logo Text -->

<div class="bgimg-1 display-container opacity-min" id="home">
  <div class="display-middle" style="white-space:nowrap;"><br><br><br><br><br><br><br><br>  <br><br><br><br>    
  	<center> 
              <H1>WELCOME TO SIMPLE WEBSITE </H1>                              
                            </div></center>
                        </div>
  </div>
</div>
    
@endsection 