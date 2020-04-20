<?php
include 'header.php'
?>

<div class="container-fluid">
  <h2><center><strong>DECORATORS</strong></center></h2>  

  <br/>  <br/>

  <!-- carousel starts -->
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="imgs/slider1.jpg" alt="site 1" style="width:100%; height: 300px;">
      </div>

      <div class="item">
        <img src="imgs/slider2.jpg" alt="site 2" style="width:100%; height: 300px;">
      </div>
    
      <div class="item">
        <img src="imgs/slider3.jpg" alt="site 3" style="width:100%; height: 300px;">
      </div>
    </div>
    <!-- carousel ends -->

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="arrow-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="arrow-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <!-- controls end -->

<br/><br/>

<div class="row">
  <div class="jumbotron">
    <center><h4>Featured Products</h4></center>
  </div>
</div>

<!-- 1x2 TABS Start -->
<div class="row">
  <div class="col-xs-6">
    <div id="tile-holder">
      <img src="imgs/pvc/pvc1.jpg" alt="PVC PANEL" width="100%" style="height: 100%">
      <div id="tile-data">PVC Sheets</div>
    </div>
  </div>

  <div class="col-xs-6">
    <div id="tile-holder">
      <img src="imgs/hpl/hpl1.jpg" alt="PVC PANEL" width="100%" style="height: 100%">
      <div id="tile-data">HPL Sheets</div>
    </div>
  </div>
</div>
 <br/>

<div class="row">
  <div class="col-xs-6">  
    <div id="tile-holder">
      <img src="imgs/grass/ag1.jpg" alt="PVC PANEL" width="100%" style="height: 100%">  
      <div id="tile-data">Artificial Grass</div>
    </div>
  </div>

  <div class="col-xs-6">    
    <div id="tile-holder">
      <img src="imgs/wf/wf1.jpg" alt="PVC PANEL" width="100%" style="height: 100%">
      <div id="tile-data"">Wooden Flooring</div>
    </div>
  </div>
</div>

 <br/>

<div class="row">
  <div class="col-xs-6">  
    <div id="tile-holder">
      <img src="imgs/bakelite/b1.jpg" alt="PVC PANEL" width="100%" style="height: 100%">  
      <div id="tile-data">Bakelite Sheets</div>
    </div>
  </div>

  <div class="col-xs-6">    
    <div id="tile-holder">
      <img src="imgs/gypsum/g1.jpg" alt="PVC PANEL" width="100%" style="height: 100%">
      <div id="tile-data"">Gypsum Tiles</div>
    </div>
  </div>
</div>
<br/>
<div class="row">
  <div class="jumbotron">
    <center>
      <h5><strong>All Wonderful Products, at one place !</strong></h5>  
    </center>
  </div>
</div>
 <br/> <br/> <br/>


<!-- 1x2 Tabs End -->

</div>
<?php
include 'footer.php'
?>