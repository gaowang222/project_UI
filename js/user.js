/**
 * Created by Administrator on 2017/11/15.
 */
$(function(){
    //点击切换验证码
    $("#mycode").click(function() {
        $(this).attr('src',registCodeUrl+'/'+Math.random());
    });
    $("#mycodeLogin").click(function () {
        $(this).attr('src',loginCodeUrl+'/'+Math.random());
    });
    //注册页面
    //点击注册实现功能
    $("#registBtn").click(function () {
        var $login_name = $("#login_name").val();
        var $passwd = $("#passwd").val();
        var $tel = $("#tel").val();
        var $loginaddress = $("#loginaddress").val();
        var $usercode = $("#usercode").val();
        var $userImg = $("#userImg").val().substr($("#userImg").val().lastIndexOf("\/")+1);
        if(!$login_name ){
            $("#login_name").next('span').html('请输入账号!');
            $("#login_name").next('span').css('color','#f00');
            $("#login_name").focus();
            return;
        }else{
            var usernameReg = /^[a-zA-Z0-9_-]{1,5}$/;
            if(!usernameReg.test($login_name)){
                $("#login_name").next('span').html('账号必须1到5位，包括：字母、数字、下划线、减号');
                $("#login_name").next('span').css('color','#f00');
                return;
            }else{
                $("#login_name").next('span').html('');
            }
        }
        if(!$passwd){
            $("#passwd").next('span').html('请输入密码!');
            $("#passwd").next('span').css('color','#f00');
            $("#passwd").focus();
            return;
        }else {
            var passwdReg = /^(\w){6,20}$/;
            if(!passwdReg.test($passwd)){
                $("#passwd").next('span').html('密码只能输入6-20个字母、数字、下划线!');
                $("#passwd").next('span').css('color','#f00');
                return;
            }else {
                $("#passwd").next('span').html('');
            }
        }
        if(!$usercode){
            $("#usercode").css('border',"1px solid #f00");
            $("#usercode").focus();
            return;
        }else{
            $("#usercode").css('border',"1px solid #fff");
        }
        if(!$tel){
            $("#tel").next('span').html('请输入手机号!');
            $("#tel").next('span').css('color','#f00');
            $("#tel").focus();
            return;
        }else {
            var telReg = /^1[3|4|5|8][0-9]\d{4,8}$/;
            if(!telReg.test($tel)){
                $("#tel").next('span').html('请输入11位手机号!');
                $("#tel").next('span').css('color','#f00');
                $("#tel").focus();
                return;
            }else{
                $("#tel").next('span').html('');
            }

        }
        if(!$loginaddress){
            $("#loginaddress").next('span').html('请输入地址!');
            $("#loginaddress").next('span').css('color','#f00');
            $("#loginaddress").focus();
            return;
        }else{
            $("#loginaddress").next('span').html('');
        }
        //发送ajax请求
        $.ajax({
            data: {
                login_name: $login_name,
                passwd:$passwd,
                tel:$tel,
                usercode:$usercode,
                loginaddress:$loginaddress,
                userImg:$userImg
            },       //要发送的数据
            type: "POST",           //发送的方式
            url: registUrl,        //url地址
            error: function (msg) { //处理出错的信息
                alert("注册失败");
            },
            success: function (msg) {  //处理正确时的信息
               alert("注册成功");
                //跳转到登录页
                window.location.href = loginUrl;
            }
        });

    });

    //2.登录页面
    $("#loginBtn").click(function () {
        var $login_name = $("#login_name").val();
        var $passwd = $("#passwd").val();
        var $repasswd = $("#repasswd").val();
        var $usercode = $("#usercode").val();
        if(!$login_name){
            $("#login_name").next('span').html('请输入账号!');
            $("#login_name").next('span').css('color','#f00');
            $("#login_name").focus();
            return;
        }else {
            $("#login_name").next('span').html('');
        }
        if(!$passwd){
            $("#passwd").next('span').html('请输入密码!');
            $("#passwd").next('span').css('color','#f00');
            $("#passwd").focus();
            return;
        }else{
            $("#passwd").next('span').html('');
        }
        if(!$repasswd){
            $("#repasswd").next('span').html('请再次输入密码!');
            $("#repasswd").next('span').css('color','#f00');
            $("#repasswd").focus();
            return;
        }else{
            $("#repasswd").next('span').html('');
        }
        if($passwd != $repasswd){
            $("#repasswd").next('span').html('两次输入密码不一致，请重新输入!');
            $("#repasswd").next('span').css('color','#f00');
            $("#repasswd").focus();
            return;
        }else{
            $("#repasswd").next('span').html('');
        }
        if(!$usercode){
            $("#usercode").css('border',"1px solid #f00");
            $("#usercode").focus();
            return;
        }else{
            $("#usercode").css('border',"1px solid #fff");
        }
        //发送ajax请求
        $.ajax({
            data: {
                login_name: $login_name,
                passwd:$passwd,
                usercode:$usercode,
            },       //要发送的数据
            type: "POST",           //发送的方式
            url: loginUrl,        //url地址
            error: function (msg) { //处理出错的信息
                alert("登录失败");
            },
            success: function (msg) {  //处理正确时的信息
                console.log(msg.lastIndexOf(1));
                if(msg.lastIndexOf(1) == 0){
                    alert("登录成功");
                   window.location.href=indexUrl;
                }else if(msg.lastIndexOf(2) == 0){
                    alert("密码有错");
                    window.location.reload();
                }else if(msg.lastIndexOf(3) == 0){
                    alert("用户名不存在");
                    window.location.reload();
                }
            }
        });
    })


    //3.single页面，点击添加到购物车
    $("#addCartBtn").click(function () {
        var $itemid = $(this).attr('itemid');
        $.ajax({
            data: {
                itemid:$itemid
            },       //要发送的数据
            type: "POST",           //发送的方式
            url: addcartUrl,        //url地址
            error: function (msg) { //处理出错的信息
                alert("添加失败");
            },
            success: function (msg) {  //处理正确时的信息
                alert("添加成功");
                //跳转到购物车页
                window.location.href = cartUrl;
            }
        })
    })

    //主页加入购物车 因为有多个按钮所以要用class
    $(".addCartBtn").click(function () {
        var $itemid = $(this).attr('itemid');
        $.ajax({
            data: {
                itemid:$itemid
            },       //要发送的数据
            type: "POST",           //发送的方式
            url: addcartUrl,        //url地址
            error: function (msg) { //处理出错的信息
                alert("添加失败");
            },
            success: function (msg) {  //处理正确时的信息
                alert("添加成功");
                //跳转到购物车页
                window.location.href = cartUrl;
            }
        })
    })
})