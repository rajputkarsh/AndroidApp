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
