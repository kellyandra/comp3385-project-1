@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <h2>Add New Property</h2>
        
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('properties.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title" class="form-label">Property Title</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
              
            <div class="form-group">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="5" required></textarea>
            </div>

        <div class="row">
            <div class="col-md-6 ">
                <label for="number_of_bedrooms" class="form-label">No. of Bedrooms</label>
                <input type="number" class="form-control" id="number_of_bedrooms" name="number_of_bedrooms" required>
            </div><div class="col-md-6">
                <label for="number_of_bathrooms" class="form-label">No. of Bathrooms</label>
                <input type="number" class="form-control" id="number_of_bathrooms" name="number_of_bathrooms" required>
            </div>
        </div>

        <div class= "row">
            <div class="col-md-6"> 
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control" id="price" name="price" required>
            </div>
            <div class="col-md-6"> 
                <label for="type" class="form-label">Property Type</label>
                <select  class="form-control" id="type" name="type" required>
                    <option value="House">House</option>
                    <option value="Apartment">Apartment</option>
                </select>
            </div>
        </div>
          
            <div class="form-group">
                <label for="location" class="form-label">Location</label>
                <input type="text" class="form-control" id="location" name="location" required>
            </div>

            <div class="form-group mb-4">
                <label for="photo" class="form-label">Photo</label>
                <div class="custom-file">
                    <button type="button" class="btn btn-light" onclick="document.getElementById('photo').click()">Browse</button>
                    <input type="file" class="custom-file-input" id="photo" name="photo" style="display:none;" onchange="updateLabel()" required>
                   
                </div>
            </div>


            
            <button type="submit" class="btn btn-primary">Add Property</button>
           
        </form>
    </div>
   

    <script>
    function updateLabel() {
        var fileName = document.getElementById('photo').value.split('\\').pop();
        document.getElementById('file-chosen').textContent = fileName;
    }
    </script>
@endsection

