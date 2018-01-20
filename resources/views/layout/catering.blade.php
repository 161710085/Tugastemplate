@extends('layout.index')
@section('konten')<br><br><br><br><br><br><br>
<style>
body {font-family: "Times New Roman", Georgia, Serif;}
h1,h2,h3,h4,h5,h6 {
    font-family: "Playfair Display";
    letter-spacing: 5px;
}
</style>
<body>

<!-- Header -->
<header class="display-container-content-wide" style="max-width:1600px;min-width:500px" id="home">
  <img class="image" src="hamburger.jpg" alt="Hamburger Catering" width="1600" height="800">
   <h1 class="large">Le Catering</h1> 
  <div class="display-bottomleft-padding-large-opacity">
   
  </div>
</header>

<!-- Page content -->
<div class="content" style="max-width:1100px">

  <!-- About Section -->
  <div class="row padding-64" id="about">
    <div class="col m6 -padding-large -hide-small">
     <img src="tahu.jpg" class="round image opacity-min" alt="Table Setting" width="600" height="750">
    </div>

    <div class="col m6 -padding-large">
      <h1 class="center">About Catering</h1><br>
      <h5 class="center">Tradition since 1889</h5>
      <p class="large">The Catering was founded in blabla by Mr. Smith in lorem ipsum dolor sit amet, consectetur adipiscing elit consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute iruredolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.We only use <span class="-tag -light-grey">seasonal</span> ingredients.</p>
      <p class="large -text-grey -hide-medium">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod temporincididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
  </div>  
  <br>
  <hr>
  <br><br><br><br>
  <!-- Menu Section -->
  <div class="row padding 64" id="menu">
    <div class="col l6 padding large">
      <center><h1 class="center">Our Menu</h1></center
      <h4>Bread Basket</h4>
      <br>Assortment of fresh baked fruit breads and muffins 5.50</p><br>
    
      <h4>Honey Almond Granola with Fruits</h4>
      <p class="text-grey">Natural cereal of honey toasted oats, raisins, almonds and dates 7.00</p><br>
    
      <h4>Belgian Waffle</h4>
      <p class="text-grey">Vanilla flavored batter with malted flour 7.50</p><br>
    
      <h4>Scrambled eggs</h4>
      <p class="text-grey">Scrambled eggs, roasted red pepper and garlic, with green onions 7.50</p><br>
    
      <h4>Blueberry Pancakes</h4>
      <p class="text-grey">With syrup, butter and lots of berries 8.50</p>    
    </div>
    
    <div class="col l6 w3-padding-large">
      <img src="waf.jpg" class="round image opacity-min" alt="Menu" style="width:100%">
    </div>
  </div>

  <hr>


@endsection