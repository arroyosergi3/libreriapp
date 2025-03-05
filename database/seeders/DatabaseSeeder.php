<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Book;
use App\Models\Deal;
use Illuminate\Support\Facades\DB;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        DB::table('books')->insert([
            ['created_at' => '2025-02-24 16:16:41', 'updated_at' => '2025-02-24 16:16:41', 'user_id' => 1, 'title' => 'Cien años de soledad', 'author' => 'Gabriel García Márquez', 'publisher' => 'Editorial Sudamericana', 'isbn' => '9780307474728', 'pic' => 'img_books/cienAñosDeSoledad.jpg', 'deleted_at' => NULL],
            ['created_at' => '2025-02-24 16:16:41', 'updated_at' => '2025-02-24 16:16:41', 'user_id' => 2, 'title' => '1984', 'author' => 'George Orwell', 'publisher' => 'Secker & Warburg', 'isbn' => '9780451524935', 'pic' => 'img_books/1984.jpg', 'deleted_at' => NULL],
            ['created_at' => '2025-02-24 16:16:41', 'updated_at' => '2025-02-24 16:16:41', 'user_id' => 3, 'title' => 'El Principito', 'author' => 'Antoine de Saint-Exupéry', 'publisher' => 'Reynal & Hitchcock', 'isbn' => '9780156012195', 'pic' => 'img_books/elPrincipito.jpg', 'deleted_at' => NULL],
            ['created_at' => '2025-02-24 16:16:41', 'updated_at' => '2025-02-24 16:16:41', 'user_id' => 4, 'title' => 'Orgullo y prejuicio', 'author' => 'Jane Austen', 'publisher' => 'T. Egerton', 'isbn' => '9780141439518', 'pic' => 'img_books/orgulloYPrejuicio.jpg', 'deleted_at' => NULL],
            ['created_at' => '2025-02-24 16:16:41', 'updated_at' => '2025-02-24 16:16:41', 'user_id' => 5, 'title' => 'Don Quijote de la Mancha', 'author' => 'Miguel de Cervantes', 'publisher' => 'Francisco de Robles', 'isbn' => '9788424117074', 'pic' => 'img_books/donQuijoteDeLaMancha.jpg', 'deleted_at' => NULL],
            ['created_at' => '2025-02-24 16:16:41', 'updated_at' => '2025-02-24 16:16:41', 'user_id' => 6, 'title' => 'Matar a un ruiseñor', 'author' => 'Harper Lee', 'publisher' => 'J.B. Lippincott & Co.', 'isbn' => '9780061120084', 'pic' => 'img_books/matarAUnRuiseñor.jpg', 'deleted_at' => NULL],
            ['created_at' => '2025-02-24 16:16:41', 'updated_at' => '2025-02-24 16:16:41', 'user_id' => 7, 'title' => 'Crimen y castigo', 'author' => 'Fiódor Dostoyevski', 'publisher' => 'The Russian Messenger', 'isbn' => '9780143058144', 'pic' => 'img_books/crimenYCastigo.jpg', 'deleted_at' => NULL],
            ['created_at' => '2025-02-24 16:16:41', 'updated_at' => '2025-02-24 16:16:41', 'user_id' => 8, 'title' => 'Los juegos del hambre', 'author' => 'Suzanne Collins', 'publisher' => 'Scholastic Press', 'isbn' => '9780439023481', 'pic' => 'img_books/losJuegosDelHambre.jpg', 'deleted_at' => NULL],
            ['created_at' => '2025-02-24 16:16:41', 'updated_at' => '2025-02-24 16:16:41', 'user_id' => 9, 'title' => 'Harry Potter y la piedra filosofal', 'author' => 'J.K. Rowling', 'publisher' => 'Bloomsbury', 'isbn' => '9780747532699', 'pic' => 'img_books/harryPotterYLaPiedraFilosofal.jpg', 'deleted_at' => NULL],
            ['created_at' => '2025-02-24 16:16:41', 'updated_at' => '2025-02-24 16:16:41', 'user_id' => 10, 'title' => 'El Hobbit', 'author' => 'J.R.R. Tolkien', 'publisher' => 'George Allen & Unwin', 'isbn' => '9780618260300', 'pic' => 'img_books/elHobbit.jpg', 'deleted_at' => NULL],
        ]);

        DB::table('books')->insert([
            ['created_at' => '2025-02-24 16:20:00', 'updated_at' => '2025-02-24 16:20:00', 'user_id' => 1, 'title' => 'El nombre del viento', 'author' => 'Patrick Rothfuss', 'publisher' => 'DAW Books', 'isbn' => '9780756404741', 'pic' => 'img_books/elNombreDelViento.jpg', 'deleted_at' => NULL],
            ['created_at' => '2025-02-24 16:20:00', 'updated_at' => '2025-02-24 16:20:00', 'user_id' => 2, 'title' => 'La sombra del viento', 'author' => 'Carlos Ruiz Zafón', 'publisher' => 'Editorial Planeta', 'isbn' => '9788408163354', 'pic' => 'img_books/laSombraDelViento.jpg', 'deleted_at' => NULL],
            ['created_at' => '2025-02-24 16:20:00', 'updated_at' => '2025-02-24 16:20:00', 'user_id' => 3, 'title' => 'Dune', 'author' => 'Frank Herbert', 'publisher' => 'Chilton Books', 'isbn' => '9780441172719', 'pic' => 'img_books/dune.jpg', 'deleted_at' => NULL],
            ['created_at' => '2025-02-24 16:20:00', 'updated_at' => '2025-02-24 16:20:00', 'user_id' => 4, 'title' => 'Drácula', 'author' => 'Bram Stoker', 'publisher' => 'Archibald Constable and Company', 'isbn' => '9788491050713', 'pic' => 'img_books/dracula.jpg', 'deleted_at' => NULL],
            ['created_at' => '2025-02-24 16:20:00', 'updated_at' => '2025-02-24 16:20:00', 'user_id' => 5, 'title' => 'Los miserables', 'author' => 'Victor Hugo', 'publisher' => 'A. Lacroix, Verboeckhoven & Cie.', 'isbn' => '9782070408503', 'pic' => 'img_books/losMiserables.jpg', 'deleted_at' => NULL],
            ['created_at' => '2025-02-24 16:20:00', 'updated_at' => '2025-02-24 16:20:00', 'user_id' => 6, 'title' => 'Rayuela', 'author' => 'Julio Cortázar', 'publisher' => 'Editorial Sudamericana', 'isbn' => '9788437604947', 'pic' => 'img_books/rayuela.jpg', 'deleted_at' => NULL],
            ['created_at' => '2025-02-24 16:20:00', 'updated_at' => '2025-02-24 16:20:00', 'user_id' => 7, 'title' => 'Fahrenheit 451', 'author' => 'Ray Bradbury', 'publisher' => 'Ballantine Books', 'isbn' => '9781451673319', 'pic' => 'img_books/fahrenheit451.jpg', 'deleted_at' => NULL],
            ['created_at' => '2025-02-24 16:20:00', 'updated_at' => '2025-02-24 16:20:00', 'user_id' => 8, 'title' => 'El señor de los anillos', 'author' => 'J.R.R. Tolkien', 'publisher' => 'George Allen & Unwin', 'isbn' => '9780618640157', 'pic' => 'img_books/elSeñorDeLosAnillos.jpg', 'deleted_at' => NULL],
            ['created_at' => '2025-02-24 16:20:00', 'updated_at' => '2025-02-24 16:20:00', 'user_id' => 9, 'title' => 'Cumbres Borrascosas', 'author' => 'Emily Brontë', 'publisher' => 'Thomas Cautley Newby', 'isbn' => '9780141439556', 'pic' => 'img_books/cumbresBorrascosas.jpg', 'deleted_at' => NULL],
            ['created_at' => '2025-02-24 16:20:00', 'updated_at' => '2025-02-24 16:20:00', 'user_id' => 10, 'title' => 'It', 'author' => 'Stephen King', 'publisher' => 'Viking Press', 'isbn' => '9780451169517', 'pic' => 'img_books/it.jpg', 'deleted_at' => NULL],
        ]);

        Deal::factory(10)->create();
        //Book::factory(10)->create();
/*
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        */
    }
}
