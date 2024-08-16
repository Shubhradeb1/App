@extends('layouts.app')

@section('content')
    <h1>Create Contact</h1>
    <form method="POST" action="{{ route('contacts.store') }}">
        @csrf
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div>
            <label for="phone">Phone:</label>
            <input type="text" id="phone" name="phone">
        </div>
        <div>
            <label for="address">Address:</label>
            <input type="text" id="address" name="address">
        </div>
        <button type="submit">Create</button>
    </form>
@endsection
