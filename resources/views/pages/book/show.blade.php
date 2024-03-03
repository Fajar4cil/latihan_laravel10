@extends('layouts.app')

@section('body')
    <h1 class="mb-0">Detail Book</h1>
    <hr>
            <div class="row">
          <div class="col mb-3">
            <label for="">Name</label>
            <input type="text" name="name" class="form-control" placeholder="Book name" value="{{ $book->name }}" readonly>
          </div>
          <div class="col mb-3">
            <label for="">Author</label>
            <input type="text" name="author" class="form-control" placeholder="Author" value="{{ $book->author }}" readonly>
          </div>
        </div>
        <div class="row">
            <label for="">Year</label>
          <div class="col mb-3">
            <input type="text" name="year" class="form-control" placeholder="Year" value="{{ $book->year }}" readonly>
          </div>
          <div class="col mb-3">
            <label for="">Description</label>
            <textarea class="form-control" name="description" placeholder="description" readonly>{{ $book->description }}</textarea>
          </div>
        </div>
        <div class="row">
            <label for="">Created_At</label>
          <div class="col mb-3">
            <input type="text" name="created_at" class="form-control" placeholder="created_at" value="{{ $book->created_at }}" readonly>
          </div>
          <div class="col mb-3">
              <label for="">Updated_At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="updated_at" value="{{ $book->updated_at }}" readonly>
          </div>
        </div>
@endsection