<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index() {
        return view('books.index');
    }

    public function search(Request $request) {

        $search_query = $request->search_query;

        $books = Book::where('title', 'LIKE', '%' . $search_query . '%')->get();

        // return $books;

        return view('books.search_result', compact('books'));
    }
}
