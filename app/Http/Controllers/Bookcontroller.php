<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class Bookcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::orderBy('created_at', 'DESC')->get();
        return view('pages.book.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.book.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        Book::create($request->all());

        return redirect()->route('book.index')->with('success', 'Book added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        $book = Book::findOrfail($id);

        return view('pages.book.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $book = Book::findOrfail($id);

        return view('pages.book.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $book = Book::findOrfail($id);

        $book->update($request->all());

        return redirect()->route('book.index')->with('success', 'Book updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $book = Book::findOrfail($id);

        $book->delete();

        return redirect()->route('book.index')->with('success', 'Book deleted successfully');
    }
}
