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