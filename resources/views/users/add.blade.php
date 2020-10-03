<!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body>
    <form>
        <table border="1" bgcolor="#00ffff">
            <tr>
                <td>管理员名称</td>
                <td><input type="text"  placeholder="管理员名称" name="admin_name" id="admin_name" ></td>
            </tr>
            <tr>
                <td>密码</td>
                <td><input type="password" placeholder="密码" name="password" id="password"></td>
            </tr>
            <tr>
                <td>确认密码</td>
                <td><input type="password"  placeholder="确认密码" name="password1" id="password1" ></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button id="but">添加</button>
                    <a href="/user/index">去管理员列表</a>
                </td>
            </tr>
        </table>
    </form>
    </body>
    </html>
    <script src="/jquery.min.js"></script>

<script>
    $(document).ready(function() {
        $('#but').click(function () {
            var admin_name = $("#admin_name").val();
            var password = $("#password").val();
            var password1 = $("#password1").val();
            if(admin_name==""){
                alert("管理员名称不能为空");
                return false;
            }
            if(password==""){
                alert("管理员密码不能为空");
                return false;
            }
            if(password!=password1){
                alert("密码不一致");
                return false;
            }
            $.ajax({
                type: "post",
                url: "/user/adddo",
                data: {admin_name: admin_name,password:password},
                dataType: "json",
                success: function (res) {
                    if (res.errno == 200) {
                        alert('添加成功');
                        location.href = "/user/index";
                    } else {
                        alert('添加失败');
                    }
                }
            })

        })
    })

</script>