@extends('base')
@section('main')
    

<div class="row g-2">
    <div class="col-md-8">
        <h1>Welcome The Stock Management for Admins</h1>
        <button class="btn btn-outline-dark" onclick="console.log('hello');"><span class="me-2"><i class="fas fa-user mr-5"></i></span> Go to the books</button>
    </div>
    <div class="col-md-4">
        <div class="row my-5 mx-2">
            <h4>Latest Orders</h4>
            <div class="ml-2">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action">Order XXX: <b>$ 0000</b></a>
                    <a href="#" class="list-group-item list-group-item-action">Order XXX: <b>$ 0000</b></a>
                    <a href="#" class="list-group-item list-group-item-action">Order XXX: <b>$ 0000</b></a>
                </div>
            </div>
        </div>
        <div class="row my-5 mx-2">
            <h4>Latest Payments Orders</h4>
            <div class="ml-2">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action"><b>$ 0000</b> by John 1</a>
                    <a href="#" class="list-group-item list-group-item-action"><b>$ 0000</b> by John 2</a>
                    <a href="#" class="list-group-item list-group-item-action"><b>$ 0000</b> by John 3</a>
                </div>
            </div>
        </div>
        <div class="row my-5 mx-2">
            <h4>Requested Books</h4>
        </div>
    </div>

    <div class="container h-100">

    </div>
</div>

@endsection