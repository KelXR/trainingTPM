<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function getCreatePage(){
        return view('create');
    }

    public function createBook(Request $request){
        Book::create([
            'title' => $request->title,
            'author' => $request->author,
            'release' => $request->release,
            'price' => $request->price,
        ]);

        return redirect(route('getCreatePage'));
    }

    public function getBooks(){
        $books = Book::all();
        return view('view', ['books'=> $books]);
    }
}
