<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    // Obtener el usuario autenticado
    $user = User::find(Auth::id());
    $users = User::all();

    // Obtener todos los libros excepto los que son del usuario autenticado
    $otherbooks = Book::where('user_id', '!=', $user->id)->get();

    // Pasar los otros libros a la vista
    return view('books.index')->with(['otherbooks'=> $otherbooks, 'users' => $users]);
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
