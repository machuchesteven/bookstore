<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderBookController extends Controller
{
    //
    public function remove_from_order(){
        return "<h1>Remove Book from order</h1>";
    }
    public function add_book(){
        return "<h1>Add Book To Order</h1>";
    }
    public function add_amount_to_order(){
        return "<h1>Alter book quantity in order</h1>";
    }
    public function minimize_amount_in_order(){
        return "<h1>Minimize book quantity in order</h1>";
    }
}
