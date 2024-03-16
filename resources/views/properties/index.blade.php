@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Properties List</h2>
        <div class="row">
            @foreach ($properties as $property)
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="{{ Storage::url($property->photo) }}" class="card-img-top" alt="{{ $property->title }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $property->title }}</h5>
                            <p class="card-text">{{ $property->location }}</p>
                            <p class="card-text">${{ number_format($property->price, 2) }}</p>
                            <a href="{{ url('/properties', $property->id) }}" class="btn btn-info">View Property</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection