<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    //
    public function book_information(){
        return "<h1>Book Information</h1>";
    }
    public function create(){
        $book = new Book;
        return "<h1>Create Book</h1>";
    }
    public function edit(){
        return "<h1>Edit Book Information</h1>";
    }
    public function delete(){
        return "<h1>Delete Book Information</h1>";
    }
    public function list_books(){
        return "<h1>List All books requested</h1>";
    }
}
