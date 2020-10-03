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
            <td>角色名称</td>
            <input type="text" placeholder=角色名称 name="role_name" id="role_name" value="">
        </tr>
        <tr>
            <td></td>
            <td>
                <button id="but">添加</button>
                <a href="/role/index">去管理员列表</a>
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
            var role_name = $("#role_name").val();
            if(role_name==""){
                alert("角色名称不能为空");
                return false;
            }
            $.ajax({
                type: "post",
                url: "/role/adddo",
                data: {role_name: role_name},
                dataType: "json",
                success: function (res) {
                    if (res.errno == 200) {
                        alert('添加成功');
                        location.href = "/role/index";
                    } else {
                        alert('添加失败');
                    }
                }
            })

        })
    })

</script>
