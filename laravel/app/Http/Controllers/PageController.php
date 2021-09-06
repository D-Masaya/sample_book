<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        //$books = Book::query()->get();
        $books = Book::all();
        //$path = route('storage.app.books');
        return view('welcome_index', ['books'=>$books]);
    }
}
