@extends('base')

@section('main')
    @if ($books)
        @foreach ($books as $book)
            <div class="row">
                <p class="text-center">
                    books will go here
                </p>
            </div>
        @endforeach
    @else
        <h1 class="text-center">
            No Books For Now
        </h1>
    @endif
@endsection