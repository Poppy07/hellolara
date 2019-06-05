@extends('layouts.app')
@section('content')
    <form method="POST" action="/user" class="form container">
        @csrf
        <div class="form-group">
            <label for="username">Username: </label>
            <input type="text" class="form-control" name="username" placeholder="Enter username">
        </div>
        <div class="form-group">
            <label for="age">Age: </label>
            <input type="number" class="form-control" name="age" placeholder="Enter age">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection





