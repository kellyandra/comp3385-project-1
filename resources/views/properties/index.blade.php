@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Properties List</h2>
        <div class="row">
            @foreach ($properties as $property)
                <div class="col-md-6 ">
                    <div class="card mb-4">
                        <img src="{{ Storage::url($property->photo) }}" class="card-img-top" alt="{{ $property->title }}">
                        <div class="card-body pb-0 px-0">
                            <h5 class="card-title px-3">{{ $property->title }}</h5>
                            <p class="card-text px-3"> <i class="fas fa-map-marker-alt"></i>{{ $property->location }}</p>
                            <p class="card-text badge rounded-pill bg-primary text-light badge-padding-y px-3 py-2" style="margin-left: 1rem;">${{ number_format($property->price, 2) }}</p>
                            <div class="card-footer p-0">
                                <a href="{{ url('/properties', $property->id) }}" class="btn btn-info w-100 text-light py-3" style="border-top-left-radius: 0; border-top-right-radius: 0; background:#15bba8;" >View Property</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <style>
       .price-circle{
        background-color: #3395FF; 
        color:white;
        border-top-left-radius: 20px; 
        border-top-right-radius: 20px;
        border-bottom-left-radius: 20px; 
        border-bottom-right-radius: 20px;
        width: 100px;
        height: 30px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 10px;
       }
    </style>

@endsection