/**
 * Created by harry on 02/04/15.
 *
 * Used to switch the navbar to the correct selected part.
 */


$(document).ready(function(){

    var filename = getCurentFileName();

    switch(filename){
        case "about.php":
            $("li[name='about.php']").addClass("active");
            break;
        case "more.php":
            $("li[name='more.php']").addClass("active");
            break;
        default:
            $("li[name='index.php']").addClass("active");
    }


});


function getCurentFileName(){
    var pagePathName= window.location.pathname;
    return pagePathName.substring(pagePathName.lastIndexOf("/") + 1);
}