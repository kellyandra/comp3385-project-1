@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-3">
                    <img src="{{ Storage::url($property->photo) }}" class="card-img-top" alt="{{ $property->title }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $property->title }}</h5>
                        <p class="card-text">{{ $property->description }}</p>
                        <p class="card-text">Bedrooms: {{ $property->number_of_bedrooms }}</p>
                        <p class="card-text">Bathrooms: {{ $property->number_of_bathrooms }}</p>
                        <p class="card-text">Location: {{ $property->location }}</p>
                        <p class="card-text">Price: ${{ number_format($property->price, 2) }}</p>
                        <p class="card-text">Type: {{ $property->type }}</p>
                        <button class="btn btn-secondary" onclick="alert('Emailing the realtor is not implemented yet.')">Email Realtor</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection