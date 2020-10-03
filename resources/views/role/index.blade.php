<!--数据列表-->
<table border="1" bgcolor="#ffd700">
    <thead>
    <tr>

        <th class="sorting_asc">角色ID</th>
        <th class="sorting">角色名称</th>
        <th class="text-center">操作</th>
    </tr>
    </thead>
    <tbody>
    @foreach($data as $k=>$v)
        <tr role_id="{{$v->role_id}}">
            <td>{{$v->role_id}}</td>
            <td>
                {{$v->role_name}}
            </td>
            <td class="text-center">
                <button type="button"><a href="">修改</a></button>
                <button type="button"><a href="{{url('role/delete/'.$v->role_id)}}">删除</a></button>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>