@extends('base')


@section('main')
    <div class="container">
        <div class="text-center">
            <h1>
                Add A Book To The Inventory
            </h1>

        </div>
        <form action="">
            <div class="form-group">
              <label for="">Book Title</label>
              <input type="text"
                class="form-control" name="title" id="" aria-describedby="helpId" placeholder="title here">
              <small id="helpId" class="form-text text-muted">Help text</small>
            </div>
        </form>
    </div>
@endsection