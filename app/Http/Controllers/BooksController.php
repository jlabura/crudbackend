<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class BooksController extends Controller
{

    public function __construct(){

      $this->middleware('auth');


    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //   
        
        //$books = $book->all();

        $books = Book::all();

        /*echo '<ul>';        
        foreach($books as $item){

        echo '<li>';
        echo $item->naslov;
        echo '</li>' ;   
    }

        echo '</ul>';*/

        return view('books.index', compact('books'));

    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //echo 'Pozvana je metoda create preko rute books/create';

        return view('books.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $books = new Book;

        $books->naslov = $request->naslov;
        $books->autor = $request->autor;
        $books->isbn = $request->isbn;

        $books->save();

        //return redirect()->back();
       
        return redirect()->route('books.index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Book $book

        //echo 'show metoda pozvana za ID' . $id;

        $showid = Book::find($id);
        dd($showid);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $editid = Book::find($id);
        return view('books.edit', compact('editid'));

    } 

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        
         $books = Book::find($id);
        $books->naslov = $request->naslov;
        $books->autor = $request->autor;
        $books->isbn = $request->isbn;
         
        $books->save();
        return redirect()->route('books.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $bookDelete = Book::find($id);
        $bookDelete->delete();
        return redirect()->route('books.index');

    }
}
