$(function () {

    // check if on homepage
    if (window.location.href.indexOf ("index") > -1) {
        // Index (home) page
        console.log('homepage');
    }

    else if (window.location.href.indexOf("projects") > -1) {
        console.log('projects');
    }

    else if (window.location.href.indexOf("project") > -1) {
        console.log('project');
    }

    else if (window.location.href.indexOf("writing") > -1) {
        console.log('writing');
    }

    else if (window.location.href.indexOf("about") > -1) {
        console.log('about');
    }

    else if (window.location.href.indexOf("contact") > -1) {
        console.log('contact');
    }

    else {
       // on other page
       console.log('other page');
    }

});

$(document).ready(function () {

    // menu button
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
});
