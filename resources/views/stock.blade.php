@extends('base')
@section('main')
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-8">  
                <h1 class="text-center" id="stock-header">
                    Stock Management
                </h1>
            </div>
            <div class="col-sm-3 col-md-2 gx-2">
                <button class="btn btn-outline-dark" onclick="console.log('hello');"><span class="me-2"><i class="fas fa-book mr-5"></i></span>Add Books</button>
            </div>
            <div class="col-sm-3 col-md-2 gx-2">
                <button class="btn btn-outline-dark" onclick="console.log('hello');"><span class="me-2"><i class="fas fa-book mr-5"></i></span>Find A Book</button>
            </div>
        </div>
        <div class="row stock-table">
            <div class="col-sm-12">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Book Name</th>
                            <th>Author</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Book 1</td>
                            <td>Author 1</td>
                            <td>$100</td>
                            <td>100</td>
                            <td>
                                <button class="btn btn-outline-dark" onclick="console.log('hello');"><span class="me-2"><i class="fas fa-edit mr-5"></i></span>Edit</button>
                                <button class="btn btn-outline-dark" onclick="console.log('hello');"><span class="me-2"><i class="fas fa-trash-alt mr-5"></i></span>Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Book 2</td>
                            <td>Author 2</td>
                            <td>$200</td>
                            <td>200</td>
                            <td>
                                <button class="btn btn-outline-dark" onclick="console.log('hello');"><span class="me-2"><i class="fas fa-edit mr-5"></i></span>Edit</button>
                                <button class="btn btn-outline-dark" onclick="console.log('hello');"><span class="me-2"><i class="fas fa-trash-alt mr-5"></i></span>Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3" >Book 3</td>
                            <td>Author 3</td>
                            <td>$300</td>
        </div>
    </div>
@endsection