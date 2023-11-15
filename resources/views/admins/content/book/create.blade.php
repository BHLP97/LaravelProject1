@extends("layout.adminLayoutPage")

@section('content')
<div id='page-wrapper'>
    <div class="app-content">
        <div class="tables">
          <form action="{{route('admin.book.store')}}" method="post">
            @csrf
            <label for="book_title">First name:</label><br>
            <input type="text" id="book_title" name="book_title" value="" placeholder="Write a title here"><br>
            <label for="book_author">Last name:</label><br>
            <input type="text" id="book_author" name="book_author" value="" placeholder="Write the author here"><br>
            <label for="book_slug">Slug:</label><br>
            <input type="text" id="book_slug" name="book_slug" value="" placeholder="Write the slug here"><br>
            <label for="book_category">Category :</label><br>
            <select name="book_category_id" id="book_category_id">
              <option value="">Choose a category here</option>
              @foreach ($categories as $item)
                <option value="{{$item->id}}">{{$item->name}}</option>
              @endforeach
            </select>
            <br><br>
            <input type="submit" value="Submit">
          </form>
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