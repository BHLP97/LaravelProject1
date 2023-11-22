@extends("layout.adminLayoutPage")

@section('content')
<div id='page-wrapper'>
    <div class="app-content">
      <div class="iq-card">
        <div class="iq-card-header d-flex justify-content-between">
            <div class="iq-header-title">
              <h4 class="card-title">Sửa thông tin quyển</h4>
            </div>
        </div>
        <div class="iq-card-body">
            <form action="{{route("admin.book.update",$item->id)}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="categoryName">Tên quyển</label>
                    <input type="text" class="form-control" id="book_title" name="book_title" placeholder="Nhập tên quyển..." value="{{$item->book_title}}">
                </div>
                <div class="form-group">
                    <label for="categorySlug">Slug</label>
                    <input type="text" class="form-control" id="book_author" name="book_author" placeholder="Nhập tác giả của quyển..."  value="{{$item->book_author}}">
                </div>
                <div class="form-group">
                    <label for="categorySlug">Slug</label>
                    <input type="text" class="form-control" id="book_slug" name="book_slug" placeholder="Nhập slug của quyển..."  value="{{$item->book_slug}}">
                </div>
                <div class="form-group">
                    <label for="book_category_id">Danh mục</label>
                    <select name="book_category_id" id="book_category_id">
                      <option value="">Choose a category here</option>
                      @foreach ($categories as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                      @endforeach
                    </select>
                </div>
  
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
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