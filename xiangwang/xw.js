$(document).ready(function(){
    setInterval(function(){
        if($(".deng").css('left')=="0px")
            $(".deng").animate({left:'-=464px'});
        if($(".deng").css('left')=="-464px")
            $(".deng").animate({left:'-=464px'});
        if($(".deng").css('left')=="-928px")
            $(".deng").animate({left:'0px'});
    },5000);
    $(".imgleft").click(function(){
        if($(".deng").css('left')=="-464px")
            $(".deng").animate({left:'+=464px'});
        if($(".deng").css('left')=="-928px")
            $(".deng").animate({left:'+=464px'});
        if($(".deng").css('left')=="0px")
            $(".deng").animate({left:'-=928px'});
    });
    $(".imgright").click(function(){
        if($(".deng").css('left')=="0px")
            $(".deng").animate({left:'-=464px'});
        if($(".deng").css('left')=="-464px")
            $(".deng").animate({left:'-=464px'});
        if($(".deng").css('left')=="-928px")
            $(".deng").animate({left:'0px'});
    });

});

$(".jzqb").click(function(){
    $(".jzqb").hide();
    $(".bodan ul").empty();
    $(".jiazai").show();
    $.get("danbo.php",function(data,status){
        $(".bodan ul").append(data);
        $(".jiazai").hide();
    });
})