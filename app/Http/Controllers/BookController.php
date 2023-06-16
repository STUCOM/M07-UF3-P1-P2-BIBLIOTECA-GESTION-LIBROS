<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public static function index()
    {
        // buscamos todos los libros que existan en la base de datos
        $books = Book::all();
        // pasamos esos libros a la vista
        //var_dump($books);
        return view('books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('books.create');
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // guarda en la base de datos un libro nuevo con: titulo, autor, precio, fechaPub
        
        $book = Book::create([
            'title' => $request->input('title'),
            'author' => $request->input('author'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'published_date' => $request->input('published_date'),
        ]);
        // guardamos en la base de datos
        
        $book->save();
        // redirect to index
        return redirect()->route('books.index');
    }

    /**
     * Display the specified resource.
     */
    public static function show(string $isbn)
    {
        // buscamos el libro que tenga el isbn que nos pasan
        $book = Book::where('isbn', $isbn)->first();
        // pasamos ese libro a la vista
        return view('books.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $book = Book::where('id', $id)->first();

        return view('books.edit',compact('book'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // buscamos el libro que tenga el isbn que nos pasan
        $book = Book::where('id', $id)->first();
        // actualizamos los datos del libro
        $book->isbn = $request->input('isbn');
        $book->title = $request->input('title');
        $book->author = $request->input('author');
        $book->description = $request->input('description');
        $book->price = $request->input('price');
        $book->published_date = $request->input('published_date');
        // guardamos en la base de datos
        $book->save();
        // redirect to index
        return redirect()->route('books.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       // Eliminar los registros relacionados en la tabla `book_category`
       DB::table('book_category')->where('book_id', $id)->delete();

       // Eliminar el registro en la tabla `books`
       DB::table('books')->where('id', $id)->delete();

       return redirect()->route('books.index')->with('success', 'Libro eliminado correctamente');
    }
}
