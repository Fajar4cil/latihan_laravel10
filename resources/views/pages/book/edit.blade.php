@extends('layouts.app')

@section('body')
    <h1 class="mb-0">Detail Book</h1>
    <hr>
    <form action="{{ route('book.update', $book->id) }}" method="POST">
        @csrf
        @method('PUT')
            <div class="row">
          <div class="col mb-3">
            <label for="">Name</label>
            <input type="text" name="name" class="form-control" placeholder="Book name" value="{{ $book->name }}" >
          </div>
          <div class="col mb-3">
            <label for="">Author</label>
            <input type="text" name="author" class="form-control" placeholder="Author" value="{{ $book->author }}" >
          </div>
        </div>
        <div class="row">
            <label for="">Year</label>
          <div class="col mb-3">
            <input type="text" name="year" class="form-control" placeholder="Year" value="{{ $book->year }}" >
          </div>
          <div class="col mb-3">
            <label for="">Description</label>
            <textarea class="form-control" name="description" placeholder="description" >{{ $book->description }}</textarea>
          </div>
        </div>
        <div class="row">
          <div class="d-grid">
              <button class="btn btn-warning">Update</button>
          </div>
        </div>
    </form>
@endsection