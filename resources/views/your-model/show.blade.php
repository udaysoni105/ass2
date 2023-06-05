{{-- @if ($yourModel)
    <h1>Your Model Show</h1>
    <p>Name: {{ $yourModel->name }}</p>
    <p>Description: {{ $yourModel->description }}</p>
@else
    <p>Model not found.</p>
@endif --}}


<!-- resources/views/your-model/show.blade.php -->

@extends('layouts.app')

@section('content')
    <div>
        <h1>Your Model Details</h1>
        <p>Attribute 1: {{ $yourModel->attribute1 }}</p>
        <p>Attribute 2: {{ $yourModel->attribute2 }}</p>
        <!-- Add more attributes here -->
    </div>
@endsection

