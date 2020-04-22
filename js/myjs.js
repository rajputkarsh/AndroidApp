 
// $(document).ready(function(){
//   $.ajax({
//     url : "header.php",
//     type : "GET",

//     success : function(result){
//       $("#menuNav").html(result);
//     },
//     error : function(xhr, status){
//       alert("Cannot Display Menu "+xhr+" - "+status);
//     }
//   });
//   $.ajax({
//     url : "footer.php",
//     type : "GET",

//     success : function(result){
//       $("#footer").html(result);
//     },
//     error : function(xhr, status){
//       alert("Cannot Display Footer"+xhr+" - "+status);
//     }
//   });
// });

function getPVC(){
  document.getElementById("gallery").innerHTML="";
  $.ajax({url: "pvc.html", success: function(result){
      $("#gallery").html(result);
    }});
}

function getBakelite(){
  document.getElementById("gallery").innerHTML="";
  $.ajax({url: "bakelite.html", success: function(result){
      $("#gallery").html(result);
    }});
}

function getUV(){
  document.getElementById("gallery").innerHTML="";
  $.ajax({url: "uv.html", success: function(result){
      $("#gallery").html(result);
    }});
}

function getHPL(){
  document.getElementById("gallery").innerHTML="";
  $.ajax({url: "hpl.html", success: function(result){
      $("#gallery").html(result);
    }});
}

function getGrass(){
  document.getElementById("gallery").innerHTML="";
  $.ajax({url: "grass.html", success: function(result){
      $("#gallery").html(result);
    }});
}

function getFloor(){
  document.getElementById("gallery").innerHTML="";
  $.ajax({url: "floor.html", success: function(result){
      $("#gallery").html(result);
    }});
}

function getGypsum(){
  document.getElementById("gallery").innerHTML="";
  $.ajax({url: "gypsum.html", success: function(result){
      $("#gallery").html(result);
    }});
}


$(document).ready(function(){

    function alignModal(){

        var modalDialog = $(this).find(".modal-dialog");

        /* Applying the top margin on modal dialog to align it vertically center */

        modalDialog.css("margin-top", Math.max(0, ($(window).height() - modalDialog.height()) / 2));

    }

    // Align modal when it is displayed

    $(".modal").on("shown.bs.modal", alignModal);

    

    // Align modal when user resize the window

    $(window).on("resize", function(){

        $(".modal:visible").each(alignModal);

    });   

});

function opening(url){
    console.log("image clicked");
  $("#imgbody").html("<img src = '"+url+"' width='100%' height='100%' />");
  // alert("<img src = '"+url+"' width='100%' height='100%'>");
  $("#myModal").modal();
}

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
