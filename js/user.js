/**
 * Created by Administrator on 2017/11/15.
 */
$(function(){
    //点击切换验证码
    $("#mycode").click(function() {
        this.src = '../code/code.php?randoms=' + Math.random();
    });
    //注册页面
    //点击注册实现功能
    $("#registBtn").click(function () {

        var $login_name = $("#login_name").val();
        var $passwd = $("#passwd").val();
        var $tel = $("#tel").val();
        var $loginaddress = $("#loginaddress").val();
        var $usercode = $("#usercode").val();
        if(!$login_name ){
            $("#login_name").next('span').html('请输入账号!');
            $("#login_name").next('span').css('color','#f00');
            $("#login_name").focus();
            return;
        }
        if(!$passwd){
            $("#passwd").next('span').html('请输入密码!');
            $("#passwd").next('span').css('color','#f00');
            $("#passwd").focus();
            return;
        }
        if(!$usercode){
            $("#usercode").css('border',"1px solid #f00");
            $("#usercode").focus();
            return;
        }
        if(!$tel){
            $("#tel").next('span').html('请输入手机号!');
            $("#tel").next('span').css('color','#f00');
            $("#tel").focus();
            return;
        }
        if(!$loginaddress){
            $("#loginaddress").next('span').html('请输入地址!');
            $("#loginaddress").next('span').css('color','#f00');
            $("#loginaddress").focus();
            return;
        }
        //发送ajax请求
        $.ajax({
            data: {
                login_name: $login_name,
                passwd:$passwd,
                tel:$tel,
                usercode:$usercode,
                loginaddress:$loginaddress
            },       //要发送的数据
            type: "POST",           //发送的方式
            url: registUrl,        //url地址
            error: function (msg) { //处理出错的信息
                alert("注册失败");
            },
            success: function (msg) {  //处理正确时的信息
                alert("注册成功");

            }
        });

    });
});