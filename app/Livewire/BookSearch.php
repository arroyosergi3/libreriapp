<?php

namespace App\Livewire;

use App\Models\Book;
use App\Models\User;
use Livewire\Component;

class BookSearch extends Component
{

    public $nombre;
    public $buscador = '';
    public function render()
    {
        $users = User::all();
        $books = Book::where('title', 'like', '%'. $this->buscador. '%')
        ->orWhere('author', 'like', '%'. $this->buscador. '%')
        ->orWhere('publisher', 'like', '%'.$this->buscador. '%')
        ->orWhere('isbn', 'like', '%'.$this->buscador. '%')->get();
        return view('livewire.book-search')->with('books', $books)->with('users', $users);

    }
}
