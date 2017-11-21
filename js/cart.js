/**
 * Created by Administrator on 2017/11/21.
 */
$(function () {
    //点击删除购物车产品
    $("#cartBtn").click(function () {
        var $carid = $(this).attr('cartid');
        $.ajax({
            data: {
                cartid: $carid
            },       //要发送的数据
            type: "POST",           //发送的方式
            url: cartUrl,        //url地址
            error: function (msg) { //处理出错的信息
                alert("删除失败");
            },
            success: function (msg) {  //处理正确时的信息
                alert("删除成功");
                window.location.reload();
            }
        });
    })
})