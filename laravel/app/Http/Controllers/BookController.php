<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use App\Http\Requests\BookUpdateRequest;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::query()->where('user_id', Auth::id())->get();
        //$path = route('storage.app.books');
        return view('books.index', ['books' => $books]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('books.form', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BookRequest $request)
    {
        $name = $request->get('name');
        $message = $request->get('message');
        $user_id = Auth::id();
        $category_id = $request->get('category_id');
        //print_r($request->all());
        $file = $request->file('file');
        $path = $file->store('books');
        print_r($path);
        Book::query()->create([
            'name' => $name,
            'message' => $message,
            'user_id' => $user_id,
            'category_id' => $category_id,
            'photo' => $path
        ]);
        return redirect()->route('books.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = Book::query()->find($id);
        $categories = Category::all();
        return view('books.edit', ['categories' => $categories, 'book' => $book]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BookUpdateRequest $request, $id)
    {
        $book = Book::query()->find($id);
        $name = $request->get('name');
        $category_id = $request->get('category_id');
        $message = $request->get('message');
        $file = $request->file('file');
        if ($file) {
            $path = $file->store('books');
        } else {
            $path = $book->photo;
        }
        $book->update([
            'name' => $name,
            'category_id' => $category_id,
            'message' => $message,
            'photo' => $path
        ]);
        return redirect()->route('books.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Book::query()->find($id);
        $book->delete();
        return redirect()->route('books.index');
    }
}
