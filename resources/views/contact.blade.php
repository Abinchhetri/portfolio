@extends('layouts.app')

@section('content')
    <h1>Contact Me</h1>
    <form method="POST" action="{{ route('contact.store') }}">
        @csrf
        <input type="text" name="name" placeholder="Name">
        <input type="email" name="email" placeholder="Email">
        <textarea name="message" placeholder="Message"></textarea>
        <button type="submit">Send Message</button>
    </form>
@endsection
