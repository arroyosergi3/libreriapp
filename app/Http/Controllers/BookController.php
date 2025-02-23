<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Number;


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
        return view('books.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'publisher' => 'required',
            'isbn' => 'required',
            'pic' => 'required | image'

        ]);

        try {
            $book = new Book();
            $book->title = $request->title;
            $book->author = $request->author;
            $book->publisher = $request->publisher;
            $book->isbn = $request->isbn;
            //$book->pic = $request->pic;
            $book->user_id = Auth::id();



            $foto = time() . '-' . $request->file('pic')->getClientOriginalName();
            //$request->file('foto')->move(public_path('fotos'), $nombre_foto);
            $book->pic = $foto;


            $request->file('pic')->storeAs('img_books', $foto);
            $book->pic = 'img_books/' . $foto;

            $book->save();
            return to_route('book.index')->with('msg', 'insertbooksuccess');
            //return redirect()->route('car.index');
        } catch (QueryException $qe) {
            return to_route('book.index')->with('msg', 'insertbookerror');

        }


    }
    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        //
        return view('books.show')->with('book', $book);
    }

    public function cambiar( $idBook)
    {
        //
        $libro1 = Book::find($idBook);
        $usuarioAutenticado = User::find(Auth::id());
        $misLibros = $usuarioAutenticado->books()->get();
        return view('books.show')->with('book', $libro1)->with('misLibros', $misLibros);
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

    public function mios()
    {
        $user = User::find(Auth::id());
       // $mybooks = Book::where('user_id', $user->id)->get();
        $mybooks = $user->books()->get();
        return view('books.mios')->with('mybooks',$mybooks)->with('user',$user);
    }
}
