$(document).ready(function(){
    $(".person-box").hover(function(){
        console.log("ready");

        $(this).addClass("person-show");
        console.log("Allo");
    }, function(){
        $(this).removeClass("person-show");
    });
})



