<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = DB::table('books')->get();
        return view('admins/content/book/index', ["books"=>$items]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $items = DB::table('categories')->get();
        return view('admins/content/book/create', ["books"=>$items]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $book = new Book();
        $book->book_title = $request->get('book_title');
        $book->book_author = $request->get('book_author');
        $book->book_slug = $request->get('book_slug');
        $book->book_category_id = $request->get('book_category_id');
        // $book->book_cover = $request->get('book_cover');
        $book->save();
        return redirect()->route('admin.book');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $item = Book::find($id);
        $categories = Category::where('parent_id','=',0)->with('childs')->get();
        return view('admins/content/book/edit', ["categories"=>$categories, "item"=>$item]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $book = Book::find($id);
        $book->delete();
        return redirect()->route('admin.book');
    }
}
