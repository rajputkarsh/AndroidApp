<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  
<script
        src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
        crossorigin="anonymous"></script>
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>




  <style>
.navBox {
  overflow: hidden;
  background:  #e1ef70 ;
}

.navBox a {
  display: block;
  padding: 14px 10px;
  color: #000;
  text-align: center;
  text-decoration: none;
}

.navBox .active { background: #474747; }

.navBox ul {
  max-width: 990px;
  margin: 0 auto;
  overflow: hidden;
}

.navBox ul li {
  float: left;
  list-style: none;
}

.navBox ul li .fa { padding-left: 4px; }

.navBox .dropNav {
  display: none;
  width: 100%;
  padding: 5px 0;
  position: absolute;
  left: 0;
  right: 0;
  top: inherit;
  background: #474747;
  z-index: 7;
  overflow: hidden;
}

.navBox>ul>li.active { background-color: #474747; }
 @media only screen and (min-width: 991px) {

#openPageslide { display: none; }

#pageslide { display: block !important; }

.pageslideBg { display: none !important; }
}
@media screen and (max-width: 990px) {

.navBox ul li { float: none; }


.navBox>ul>li>a { padding: 10px; }

.navBox .dropNav {
  position: static;
  background: #0F80B8;
}

#openPageslide {
  display: block;
  padding: 14px 10px;
  width: 28px;
  border-radius: 6px;
}

#openPageslide span {
  height: 7px;
  display: block;
  border: 1px solid #0F80B8;
  border-width: 5px 0;
}

#pageslide {
  display: none;
  width: 200px;
  position: fixed;
  top: 0;
  left: -200px;
  height: 100%;
  z-index: 999999;
  overflow-y: auto;
}

.pageslideBg {
  display: none;
  position: fixed;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  background: rgba(0,0,0,0.6);
  z-index: 9998;
}
}

h1 { margin:30px auto; text-align:center;}
  html,body{
    height: 100%;
  }
  .container{
    min-height: 100%;
    overflow: hidden;
    margin-left: 0px;
    width: 100%; 
  }
  h5 {
  display: inline-block;
  padding: 10px;
  background: #B9121B;
  border-top-left-radius: 10px;
  border-top-right-radius: 10px;
}

.p {
  text-align: center;
  padding-top: 40px;
  font-size: 13px;
}
  </style>
</head>
<body>

<div id="menu">
	<a id="openPageslide" href="#pageslide"><i class="fa fa-bars" ></i></a>
	<div id="pageslide" class="navBox">
	  <ul style="margin-left: -60px">
	    <li> <a href="index.html" class="btn btn-dark" style="margin-top: 30px" >
	    	<strong>HOME</strong>
	    </a> </li>
	    <li> <a href="products.html"  class="btn btn-dark" >
	    	<strong>Products</strong>
	    </a> </li>
	    <li> <a href="#" class="btn btn-dark">
	    	<strong>Gallery</strong>
	    </a> </li>
	    <li> <a href="#" class="btn btn-dark">
	    	<strong>Contact Us</strong>
	    </a> </li>
	    <li> <a href="#" class="btn btn-dark">
	    	<strong>About Us</strong>
	    </a> </li>
	  </ul>
	</div>

</div>


<div class="container-fluid">
  <h2><center><strong>DECORATORS</strong></center></h2>  

  <br/>  <br/>
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

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

<br/><br/>
<center><a href="tel:+917508502336" class="btn-btn-primary">Call Us Now</a></center>
<br/>
<footer><center>&copy;  Decorators, All Rights Reserved</center></footer>
</div>



<script src="js/sidenav.js"></script> 
<script>

 $(function(){
    var responsiveWidth = 990;
    var _widthResize;

    $(window).resize(function() {
        _widthResize = $(this).width() > responsiveWidth;
    }).resize();

    $('.navBox >ul >li').hover(function(){
      if(_widthResize){
        var _this = $(this);
        _this.addClass('active').children('.dropNav').stop(true, true).slideDown(300);        
      }  
    } , function(){
      if(_widthResize){
        $(this).removeClass('active').children('.dropNav').stop(true, true).hide();
      }   
    });

    $('.dropNav').parent('li').click(function(e) {
      if(!_widthResize){
        $(this).children('.dropNav').stop(true, true).slideToggle(300);
        e.preventDefault();
      }    
    });

    $("#openPageslide").sideNav();

}); 

$('.carousel').carousel({
  interval: 3000,
  pause: "false"
});



</script>

</body>
</html>
