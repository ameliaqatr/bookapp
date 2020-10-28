<?php

namespace App\Http\Controllers;

use App\Models\Book;

use Laravel\Lumen\Routing\Controller as BaseController;

class BooksController extends BaseController
{
    public function index()
    {
        return Book::all();
    }

    public function show($id)
    {
        $book = Book::find($id);
        if($book){
            return $book;
        } else {
            return response()->json([
                'message' => 'Book Not Found'
            ], 404);
        }
    }
}

