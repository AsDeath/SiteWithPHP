var script = document.createElement('script');
script.src = 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js';
script.type = 'text/javascript';
document.getElementsByTagName('head')[0].appendChild(script);

var isOpen = false;
function changeStyleTransform(open){
    if(open) document.getElementById("burger-links").style.transform = "translateX(0px)";
    else document.getElementById("burger-links").style.transform = "";
}

function clickHandler(){
    var windowInnerWidth = window.innerWidth;
    if(windowInnerWidth<=768){
        isOpen = !isOpen;
        changeStyleTransform(isOpen);
    }
};
function clickHandlerLinks(s){
    isOpen = false;
    changeStyleTransform(isOpen);
};

/*
$(function() {
    var $header = $(".header");
    var scroll = 0;
    var active = "header-active";
    //$header.addClass(active);
    $(window).scroll(function() {
        if ($(window).scrollTop() > scroll) {
            $header.addClass(active)
        } else {
            $header.removeClass(active)
        }
    });
});
*/
