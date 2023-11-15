@extends("layout.adminLayoutPage")

@section('content')
<div id='page-wrapper'>
    <div class="app-content">
        <div class="tables">
            <div class="table-responsive bs-example widget-shadow">
                <p>Đây là view Category</p>
                <a href="{{route('admin.book.create')}}"><button type="button" class="btn btn-success">Thêm danh mục</button></a>
                <div class="flex justify-center">
                    <table class="table table-bordered">
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Author</th>
                            <th>Category</th>
                            <th>Cover</th>
                            <th>Actions</th>
                        </tr>
                        @foreach ($books as $book)
                            <tr>
                                <td>{{$book->id}}</td>
                                <td>{{$book->book_title}}</td>
                                <td>{{$book->book_author}}</td>
                                <td>{{$book->book_category_id}}</td>
                                <td>
                                    <img src="{{$book->book_cover}}" alt="" style="width:50px; height:50px">
                                </td>
                                <td>
                                    <a href="{{route('admin.book.edit', $book->id)}}">Edit</a>
                                    <a href="{{route('admin.book.destroy', $book->id)}}">Delete</a>
                                </td>
                            </tr> 
                        @endforeach
                    </table>
                </div>
            </div>  
        </div>
    </div>
</div>
<style>
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }
    
    td, th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }
    
    tr:nth-child(even) {
      background-color: #dddddd;
    }
</style>
@endsection