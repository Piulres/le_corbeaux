$(window).scrollTop(0);

$(window).scroll(function() {  

    var scroll = $(window).scrollTop();

    if (scroll >= 1000) {

        $(".page.case-1").removeClass("blur");

    } else {

        $(".page.case-1").addClass("blur");

    }

    if ( scroll >= 1700 ) {

        $(".page.case-2").removeClass("blur");

    } else {

        $(".page.case-2").addClass("blur");

    }

    if ( scroll >= 2700 ) {

        $(".page.case-3").removeClass("blur");

    } else {

    	$(".page.case-3").addClass("blur");

    }

	if ( scroll >= 3500 ) {

        $(".page.case-4").removeClass("blur");

    } else {

        $(".page.case-4").addClass("blur");

    }

    if ( scroll >= 1200 ) {

        $(".page.case-5").removeClass("blur");

    } else {

        $(".page.case-5").addClass("blur");

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
