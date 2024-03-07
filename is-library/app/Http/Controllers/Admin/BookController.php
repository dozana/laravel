<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $books = Book::paginate(10);

        return view('admin.books.index', compact('books'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.books.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'barcode' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
        ]);

        Book::create($validatedData);
        return redirect()->route('books.index')->with('success', 'ჩანაწერი დაემატა.');
    }

    public function show(Book $book)
    {
        return view('admin.books.show', compact('book'));
    }

    public function edit(Book $book)
    {
        $categories = Category::all();
        //$materials = Material::all();

        return view('admin.books.edit', compact('book', 'categories'));
    }

    public function update(Request $request, Book $book)
    {
        $validatedData = $request->validate([
            'barcode' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
        ]);

        $book->update($validatedData);

        return redirect()->route('books.index')->with('success', 'ჩანაწერი განახლდა.');
    }

    public function destroy(Book $book)
    {
        $book->delete();

        return redirect()->route('books.index')->with('success', 'ჩანაწერი წაიშალა.');
    }

    public function search(Request $request)
    {
        $query = Book::query();

        if ($request->filled('barcode')) {
            $query->where('barcode', 'like', '%' . $request->input('barcode') . '%');
        }

        if ($request->filled('title')) {
            $query->where('title', 'like', '%' . $request->input('title') . '%');
        }

        if ($request->filled('author')) {
            $query->where('author', 'like', '%' . $request->input('author') . '%');
        }

        // Add conditions for other search criteria

        $books = $query->paginate(10);

        return view('admin.books.index', compact('books'));
    }

}
