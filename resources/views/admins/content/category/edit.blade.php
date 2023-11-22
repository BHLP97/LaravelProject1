@extends("layout.adminLayoutPage")
@section('content')
<div id='page-wrapper'>
    <div class="app-content">
        <div class="iq-card">
            <div class="iq-card-header d-flex justify-content-between">
               <div class="iq-header-title">
                  <h4 class="card-title">Sửa thông tin danh mục</h4>
               </div>
            </div>
            <div class="iq-card-body">
                <form action="{{route("admin.category.update",$item->id)}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="categoryName">Tên danh mục</label>
                        <input type="text" class="form-control" id="categoryName" name="name" placeholder="Nhập tên danh mục..." value="{{$item->name}}">
                    </div>
                    <div class="form-group">
                        <label for="categorySlug">Slug</label>
                        <input type="text" class="form-control" id="categorySlug" name="slug" placeholder="Nhập slug của danh mục..."  value="{{$item->slug}}">
                    </div>
                    <div class="form-group">
                        <label for="categoryParentId">Danh mục cha</label>
                        <select class="form-control" id="categoryParentId" name="parent_id">
                            <option value="0">Không có danh mục cha</option>
                            @include("admins.content.category.category_selected_option", ["categories"=>$categories, "level"=>0, "item"=>$item])
                        </select>
                    </div>

                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection