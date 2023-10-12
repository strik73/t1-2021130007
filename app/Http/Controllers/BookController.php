<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'isbn' => 'required|string|min:13|max:13',
            'judul' => 'required|string',
            'halaman' => 'required|numeric',
            'kategori' => 'required|string',
            'penerbit' => 'required|string',
        ]);

        $article = Book::create([
            'title' => $validated['title'],
            'body' => $validated['body'],
            'judul' => $validated['judul'],
            'halaman' => $validated['halaman'],
            'penerbit' => $validated['penerbit'],

        ]);

        return $article;
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
