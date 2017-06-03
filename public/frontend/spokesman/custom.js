//Responsive Menu
$(function() {
    $( '.dl-menuwrapper' ).dlmenu({
        animationClasses : { 
            classin : 'dl-animate-in-5', 
            classout : 'dl-animate-out-5' 
        }
    });
});

/*$(document).ready(function(){
    // slide-post
    $('.slide-post').owlCarousel({
        loop: true,
        margin: 0,
        nav: true,
        autoplay: true,
        autoplayHoverPause: true,
        autoplaySpeed: 1500,
        autoplayTimeout: 5000,
        navText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
        items: 1,
        singleItem: true
    });
});*/


$(document).ready(function(){
    // healthy tips
    $("#healty-tips").owlCarousel({
        autoPlay: 6000,
        singleItem : true,
        navigation: true,
        pagination: false,
        navigationText: [
           "<i class='fa fa-angle-left'></i>",
           "<i class='fa fa-angle-right'></i>"
        ]
    });

    //post slider
    var sync1 = $("#spoke-post");
    var sync2 = $("#slide-text");
    sync1.owlCarousel({
        singleItem : true,
        slideSpeed : 1000,
        navigation: true,
        pagination:true,
        autoplay:true,
        afterAction : syncPosition,
        navigationText: [
           "<i class='fa fa-angle-left'></i>",
           "<i class='fa fa-angle-right'></i>"
        ],
        responsiveRefreshRate : 200
    });
    sync2.owlCarousel({
       items : 3,
       itemsDesktop      : [1199,4],
       itemsDesktopSmall     : [1024,3],
       itemsTablet       : [768,3],
       itemsMobile       : [479,3],
       pagination:false,
       autoplay:true,
       responsiveRefreshRate : 100,
       afterInit : function(el){
         el.find(".owl-item").eq(0).addClass("synced");
       }
    });
    function syncPosition(el){
       var current = this.currentItem;
       $("#slide-text")
         .find(".owl-item")
         .removeClass("synced")
         .eq(current)
         .addClass("synced")
       if($("#slide-text").data("owlCarousel") !== undefined){
         center(current)
       }
    }
    
    $("#slide-text").on("click", ".owl-item", function(e){
        e.preventDefault();
        var number = $(this).data("owlItem");
        sync1.trigger("owl.goTo",number);
    });

    function center(number){
       var sync2visible = sync2.data("owlCarousel").owl.visibleItems;
       var num = number;
       var found = false;
        for(var i in sync2visible){
            if(num === sync2visible[i]){
            var found = true;
            }
        }
        if(found===false){
         if(num>sync2visible[sync2visible.length-1]){
           sync2.trigger("owl.goTo", num - sync2visible.length+2)
         }else{
           if(num - 1 === -1){
             num = 0;
           }
           sync2.trigger("owl.goTo", num);
         }
       } else if(num === sync2visible[sync2visible.length-1]){
         sync2.trigger("owl.goTo", sync2visible[1])
       } else if(num === sync2visible[0]){
         sync2.trigger("owl.goTo", num-1)
       }
    }
});