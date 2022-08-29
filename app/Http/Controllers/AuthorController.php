<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthorController extends Controller
{
    //
    public function show($id){
        return "<h1>Show COntroller".$id."</h1>";
    }
    public function create(){
        $message = "author created succesfully";
        return view('create_author')->compact('message', $message);
    }
    public function list_authors(){
        return "<h1>Author list</h1>";
    }
    public function alter_author(){
        return "<h1>Modify author or edit author</h1>";
    }
    public function delete_author(){
        return "<h1>Delete Author</h1>";
    }
    public function author_books(){
        return "<h1>Author Books</h1>";
    }
    
}
