@extends("layout.adminLayoutPage")

@section('content')
<div id='page-wrapper'>
    <div class="app-content">
        <div class="iq-card">
            <div class="iq-card-header d-flex justify-content-between">
                <div class="table-responsive bs-example widget-shadow">
                    <p>Đây là view Category</p>
                    <a href="{{route('admin.category.create')}}"><button type="button" class="btn btn-outline-success mb-3">Thêm danh mục</button></button></a>
                    <div class="flex justify-center">
                        <table class="table table-bordered">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Slug</th>
                                <th>Actions</th>
                            </tr>
                            @include("admins.content.category.row_table", ["categories"=>$categories, "level"=>0])
                        </table>
                    </div>
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