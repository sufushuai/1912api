<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form >
    <table border="1" bgcolor="#7fff00">
        <tr>
            <td>用户名</td>
            <td><input type="text" name="username" ></td>
        </tr>
        <tr>
            <td>密码</td>
            <td><input type="password" name="password"></td>
        </tr>
        <tr>
            <td></td>
            <td><button id="but">登录</button></td>
        </tr>
    </table>
</form>
</body>
</html>
<script src="/jquery.min.js"></script>
<script>

    $("#but").bind('click',function(){
        var username=$("input[name='username']").val()
        var password=$("input[name='password']").val()



        if(username==''){
            alert('必填');
            return false;
        }
        if(password==''){
            alert('必填');
            return false;
        }

//        return false;
        $.ajax({
            url:"/admin/logindo",
            type:'post',
            data:{'username':username,'password':password},
            dataType:'json',
            success:function(res){
                if(res.error==0){
                    alert(res.msg);
//                  location.href = "/users/index";
                }else{
                    alert(res.msg);
                }

            }
        })
    })

</script>