
<!--数据列表-->
<table border="1" bgcolor="#ffd700">
    <thead>
    <tr>
        <th class="sorting_asc">管理员ID</th>
        <th class="sorting">管理员名称</th>
        <th class="sorting">管理员状态</th>
        <th class="sorting">角色权限</th>
        <th class="sorting">操作</th>
    </tr>
    </thead>
    <tbody>
    @foreach($data as $k=>$v)
        <tr>
            <td>{{$v->admin_id}}</td>
            <td>{{$v->admin_name}}</td>
            <td>{{$v->is_del==1?"普通管理员":"超级管理员"}}</td>
            <td><a href="{{url(''.$v->admin_id)}}">角色</a>|
                <a href="{{url(''.$v->admin_id)}}">权限</a>
            </td>
            <td>
                <button id="edit" type="button"><a href="">修改</a></button>
                <button id="del" type="button"><a href="{{url('user/delete/'.$v->admin_id)}}">删除</a></button>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
<script src="/jquery.min.js"></script>
