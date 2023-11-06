<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Book1 = new Book();
        $Book1->id = 1;
        $Book1->name = "The Great Escape";
        $Book1->author = "Paul Brickhill";
        $Book1->category = "Ebook";
        // $Book1->save();
        $Book2 = new Book();
        $Book2->id = 2;
        $Book2->name = "The Great Gatsby";
        $Book2->author = "F. Scott Fitzgerald";
        $Book2->category = "Ebook";
        // $Book2->save();
        $books = [$Book1, $Book2];
        return view('admins/content/book/index', ["books"=>$books]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        //
    }
}
