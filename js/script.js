$('.carousel').carousel({
    interval: 90000
})

function openTab(evt, tabName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
        tablinks[i].childNodes[1].src = tablinks[i].childNodes[1].src.replace("-active", "");
        console.log(tablinks[i]);
    }
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " active";
    document.getElementById("img-" + tabName).src = "img/" + tabName + "-active.svg";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();

// SPYSCROLL

$(function() {
    "use strict";

    var topoffset = 50; // Variable for menu height
     // Activate Scrollspy
    $('body').scrollspy({
        target: 'header .navbar',
        offset: topoffset
    });



    // Add an inbody class to nav when scrollspy event triggers
    $('.navbar-fixed-top').on('activate.bs.scrollspy', function() {
        var hash = $(this).find('li.active a').attr('href');
        if(hash !== '#featured') {
            $('header nav').addClass('inbody');
        } else {
            $('header nav').removeClass('inbody');
        }
    });

    $('.carousel').carousel({
        interval: false
    });
});