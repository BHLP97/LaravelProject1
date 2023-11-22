@foreach($categories as $item)
    <tr>
        <th scope="row">{{$item->id }}</th>
        <td>{{str_repeat("----", $level)}}  {{$item->name}}</td>
        <td>{{$item->slug}}</td>

        <td class="text-center">
            <a href="{{route('admin.category.edit',$item->id )}}">
                <button class="btn btn-outline-warning mr-2"><i class="fas fa-edit"></i></button>
            </a>
            <a href="{{route('admin.category.destroy',$item->id )}}"
               onclick="return confirm('Bạn có muốn xóa không?');">
               <button class="btn btn-outline-danger mr-2"><i class="fas fa-trash"></i></button>
            </a>
        </td>
    </tr>
    @if($item->childs)
        @include('admins.content.category.row_table', ["categories"=>$item->childs, "level"=>$level+1])
    @endif
@endforeach