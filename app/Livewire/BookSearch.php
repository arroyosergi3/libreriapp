<?php

namespace App\Livewire;

use App\Models\Book;
use App\Models\User;
use Auth;
use Livewire\Component;

class BookSearch extends Component
{

    public $nombre;
    public $buscador = '';

    public $user;
    public function render()
    {
        $this->user =  User::find(Auth::id());
        $users = User::all();
        $books = Book::where(function ($query) {
                $query->where('title', 'like', '%'. $this->buscador. '%')
                    ->orWhere('author', 'like', '%'. $this->buscador. '%')
                    ->orWhere('isbn', 'like', '%'. $this->buscador. '%');
            })
            ->where('user_id','!=', $this->user->id) // Esta condición SIEMPRE debe cumplirse
            ->get();

        return view('livewire.book-search')->with('books', $books)->with('users', $users);
    }

}
