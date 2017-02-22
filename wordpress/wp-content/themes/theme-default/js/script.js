$(window).on('beforeunload', function() {

  $('body').fadeOut(225);
  
});

$(window).scroll(function() {  

    var scroll = $(window).scrollTop();

    if (scroll >= 1000) {

        $(".page.case-1 figure:first-child").removeClass("blur");

    } else {

        $(".page.case-1 figure:first-child").addClass("blur");

    }

    if (scroll >= 1500) {

        $(".page.case-1 figure:last-child").removeClass("blur");

    } else {

        $(".page.case-1 figure:last-child").addClass("blur");

    }

    if (scroll >= 2100) {

        $(".page.case-2 figure:first-child").removeClass("blur");

    } else {

        $(".page.case-2 figure:first-child").addClass("blur");

    }

    if (scroll >= 2700) {

        $(".page.case-2 figure:last-child").removeClass("blur");

    } else {

        $(".page.case-2 figure:last-child").addClass("blur");

    }

    if (scroll >= 3200) {

        $(".page.case-3 figure").removeClass("blur");

    } else {

        $(".page.case-3 figure").addClass("blur");

    }
   

});

$(function() {
    $("body").prognroll({
        height:5,        //Progress bar height
        color:"#b3b3b3", //Progress bar background color
        position:"top",  //Progress bar position can be "top" or "bottom"
        custom:false     //If you make it true, you can add your custom div and see it's scroll progress on the page    
    });
});

$( document ).ready(function() {
   
    $(function() {
      $("#showBottom").on("click", function(e) {
        $("#cbp-spmenu-s4").toggleClass("cbp-spmenu-open");
      });
      $(document).on("click", function(e) {
        if ($(e.target).is("#cbp-spmenu-s4, #showBottom") === false) {
          $("#cbp-spmenu-s4").removeClass("cbp-spmenu-open");
        }
      });
    });

});