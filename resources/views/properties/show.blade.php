@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="card mb-3 ">
                <div class="row g-0">
                    <div class="col-md-6 d-flex">
                        <img src="{{ Storage::url($property->photo) }}" class="img-fluid rounded-start" alt="{{ $property->title }}">
                    </div>
                    <div class="col-md-6 d-flex">
                        <div class="card-body">
                            <h5 class="card-title display-6 fw-bold text-body-emphasis">{{ $property->title }}</h5>
                            <div class="row mb-2">
                                    <div class="col-md-3">
                                        <p class="card-text badge rounded-pill bg-primary text-light badge-padding-y px-3 py-2" style="margin-left: 1rem;">${{ number_format($property->price, 2) }}</p>
                                    </div>    
                                    <div class="col">
                                        <p class="card-text badge rounded-pill bg-warning text-light badge-padding-y px-3 py-2" style="margin-left: 1rem;">{{ $property->type }}</p>
                                    </div>
                           </div>
                    
                            <p class="card-text">{{ $property->description }}</p>
                            <div class="row mb-2">
                                    <div class="col-md-5">
                                    <p class="card-text"> <i class="fa fa-bed" ></i> {{ $property->number_of_bedrooms }} Bedrooms</p>
                                    </div>    
                                    <div class="col">
                                    <p class="card-text"> <i class="fa fa-bath "></i> {{ $property->number_of_bathrooms }} Bathrooms</p>
                                    </div>
                           </div>
                                    <p class="card-text mb-4"><i class="fas fa-map-marker-alt"></i> {{ $property->location }}</p>

                            <button class="btn btn-secondary" style="background:#15bba8;" onclick="alert('Emailing the realtor is not implemented yet.')">Email Realtor</button>
                        </div>
                    </div>
                    </div>
</div>
            </div>
        </div>
    </div>
@endsection