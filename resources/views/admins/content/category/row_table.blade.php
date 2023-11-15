@foreach($categories as $item)
    <tr>
        <th scope="row">{{$item->id }}</th>
        <td>{{str_repeat("----", $level)}}  {{$item->name}}</td>
        <td>{{$item->slug}}</td>

        <td>
            <a href="{{route('admin.category.edit',$item->id )}}">Sửa</a>
            <a href="{{route('admin.category.destroy',$item->id )}}"
               onclick="return confirm('Bạn có muốn xóa không?');">Xóa</a>
        </td>
    </tr>
    @if($item->childs)
        @include('admins.content.category.row_table', ["categories"=>$item->childs, "level"=>$level+1])
    @endif
@endforeach