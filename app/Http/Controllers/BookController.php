<?php

namespace App\Http\Controllers;

use App\Models\book;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function index()
    {
        $books = book::with("bookAutor")->get();
        return view('book.index', compact('books'));
    }

    public function borrowBook(Request $request)
    {
        // Estado
        // 0 = Pendiente
        // 1 = Aceptado
        // 2 = Rechazado
        // 3 = Devuelto
        $id_user = 1;
        $user = User::find($id_user);
        $user->prestamos()->create([
            'id_libro' => $request->id_book,
            'fecha_solicitud' => date('Y-m-d'),
            'fecha_devolucion' => date('Y-m-d', strtotime('+1 week')),
            'mora' => 0,
            'estado' => 0,
        ]);
        return redirect()->route('book.show');
    }
    public function editForm($id)
    {
        $book = book::with('bookAutor')->find($id);
        // O se puede reemplazar por
        // $book = DB::select('select * from books as bk inner join users as us on us.id=bk.use_id where bk.id = ? ', [$id]);
        // $book = collect($book);
        // $book = $book[0];
        // dd($book);
        $authors = User::all();
        return view('book.edit', compact('book', 'authors'));
    }
}
