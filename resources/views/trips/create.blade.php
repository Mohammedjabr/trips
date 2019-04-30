@extends('layouts.main')


@section('content')
    <h2>Create New Trip</h2>

    <form method="POST" action="{{ route('trips.store') }}">
        @csrf

        Title
        <input type="text" name="title" />
        <br>
        <br>
        Description
        <input type="text" name="description" />
        <br>
        <br>
        Details
        <textarea name="details">
        </textarea>
        <br>
        <br>
        <input type="submit" value="Add Trip" />
    </form>


@endsection