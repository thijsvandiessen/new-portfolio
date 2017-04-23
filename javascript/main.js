$(function () {

    if ( window.location.pathname == 'index.php' ){
        // Index (home) page
        console.log('index.php');
    } 

    else if (window.location.pathname == '/~thijsvandiessen/portfolio/') {
        // Other page
        console.log(window.location.pathname);

        
    }

    else {
       // other 
    }

});