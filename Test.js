$(document).ready(function () {
    //切屏动画
    var imgCount = 0;//初始化并记录切换数据
    var imgWidthAll = $("#img_out").width();
    var imgLength = $("#img_out img").length;
    var  imgWidthEach = imgWidthAll / imgLength;
    var  imgTimer = null;//记录定时切换
    var  isIconChange=false;//记录图标变换标志
    //console.log(imgLength);
    function imgMove() {
        imgCount++;
        if(imgCount==imgLength){
            imgCount=0;
        }
        $("#img_out").stop().animate({'left':-imgCount*imgWidthEach},500);
        $(".text_out_box  .text_img_box").eq(imgCount).show().siblings().hide();
        $("#icon-out  .icon  img").eq(imgCount).attr("src","image/book_active.png");
        for(var i=0;i<imgLength;i++)
        {
            if(i==imgCount){
                continue;
            }
            $("#icon-out  .icon  img").eq(i).attr("src","image/book.png")
        }
        //console.log(imgCount+$("#icon-out  .icon  img").eq(imgCount).parent().siblings().attr("class"));
    }
    imgTimer = window.setInterval(imgMove, 4000);
    //图标鼠标事件
    $("#icon-out  .icon  img").on({
        mouseover:function(){
            if($(this).attr("src")!="image/book_active.png"){
                $(this).attr("src","image/book_active.png");
                isIconChange=true;
            }
            window.clearInterval(imgTimer);
        },
        mouseout:function(){
            //console.log($(this).attr("src"));
            if(isIconChange==true){
                $(this).attr("src","image/book.png");
                isIconChange=false;
            }
            imgTimer = window.setInterval(imgMove,4000);
        },
        click:function(){
            //console.log("click"+$(this).attr("alt"));
            var index=Number($(this).attr("alt"));
            //console.log(index);
            if(index!=imgCount){
                imgCount=index;
                isIconChange=false;
                $("#img_out").stop().animate({'left':-imgCount*imgWidthEach},500);
                $(".text_out_box  .text_img_box").eq(imgCount).show().siblings().hide();
                $("#icon-out  .icon  img").eq(imgCount).attr("src","image/book_active.png");
                for(var i=0;i<imgLength;i++)
                {
                    if(i==imgCount){
                        continue;
                    }
                    $("#icon-out  .icon  img").eq(i).attr("src","image/book.png")
                }
            }

        }
    });
    $(".btn_left").on("click",function () {
        console.log("left");
        imgCount=imgCount==0?3:(imgCount-1);
        $("#img_out").stop().animate({'left':-imgCount*imgWidthEach},500);
        $(".text_out_box  .text_img_box").eq(imgCount).show().siblings().hide();
        $("#icon-out  .icon  img").eq(imgCount).attr("src","image/book_active.png");
        for(var i=0;i<imgLength;i++)
        {
            if(i==imgCount){
                continue;
            }
            $("#icon-out  .icon  img").eq(i).attr("src","image/book.png")
        }

    });
    $(".btn_right").on("click",function () {
        console.log("right");
        imgCount=imgCount==3?0:(imgCount+1);
        $("#img_out").stop().animate({'left':-imgCount*imgWidthEach},500);
        $(".text_out_box  .text_img_box").eq(imgCount).show().siblings().hide();
        $("#icon-out  .icon  img").eq(imgCount).attr("src","image/book_active.png");
        for(var i=0;i<imgLength;i++)
        {
            if(i==imgCount){
                continue;
            }
            $("#icon-out  .icon  img").eq(i).attr("src","image/book.png")
        }
    });

});
