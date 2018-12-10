$(document).ready(function(){
    sousuo($(".biaoqian span:first").text());

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

    setInterval(function(){
        var d = new Date();
        var xiayue = 0;
        var gdmon = 12;
        var gdday = 15;
        var vMon = d.getMonth() + 1;
        var vDay = d.getDate();
        var h = d.getHours();
        var m = d.getMinutes();
        var se = d.getSeconds();
        if(gdmon!=vMon)
        switch(gdmon){
            case 1:
                xiayue=31-vDay;
                break;
            case 2:
                xiayue=28-vDay;
                break;
            case 3:
                xiayue=31-vDay;
                break;
            case 4:
                xiayue=30-vDay;
                break;
            case 5:
                xiayue=31-vDay;
                break;
            case 6:
                xiayue=30-vDay;
                break;
            case 7:
                xiayue=31-vDay;
                break;
            case 8:
                xiayue=31-vDay;
                break;
            case 9:
                xiayue=30-vDay;
                break;
            case 10:
                xiayue=31-vDay;
                break;
            case 11:
                xiayue=30-vDay;
                break;
            case 12:
                xiayue=31-vDay;
                break;
        }

        var tian=xiayue+(gdday-vDay);
        var shi=24-h;
        var fen=60-m;
        var miao=60-se;
        if(tian>=10)
            $(".dongsj ul li:first").text(tian);
        else
            $(".dongsj ul li:first").text("0"+tian);

        if(shi>=10)
            $(".dongsj ul li:eq(2)").text(shi);
        else
            $(".dongsj ul li:eq(2)").text("0"+shi);

        if(fen>=10)
            $(".dongsj ul li:eq(4)").text(fen);
        else
            $(".dongsj ul li:eq(4)").text("0"+fen);

        if(miao>=10)
            $(".dongsj ul li:eq(6)").text(miao);
        else
            $(".dongsj ul li:eq(6)").text("0"+miao);


    },1000);
});
//标签
$(".biaoqian span:first").css("border","2px solid #ff461f");
$(".biaoqian span").click(function(){
    $(".biaoqian span").css("border","1px solid #c8cccf");
    $(this).css("border","2px solid #ff461f");
    sousuo($(this).text());
});
//单击搜索
$(".cousk").click(function(){
    sousuo($("#soutext").val());
});
//回车
$('#soutext').bind('keypress',function(event){
     if(event.keyCode == "13")
     {
         sousuo($("#soutext").val());
     }
});
$(".clename").click(function(){
    $('#soutext').val("");
});
function sousuo(neir){
    $(".jieguo ul").empty();
    $.get("sou.php?neir="+neir,function(data,status){
        if(data==""&&neir!=""){
            $(".jieguo ul").append("请换非IE内核，使用该功能");
        }
        else{
            $(".jieguo ul").append(data);
        }
      });
}
$(".jzqb").click(function(){
    $(".jzqb").hide();
    $(".bodan ul").empty();
    $(".jiazai").show();
    $.get("danbo.php",function(data,status){
        $(".bodan ul").append(data);
        $(".jiazai").hide();
    });
})