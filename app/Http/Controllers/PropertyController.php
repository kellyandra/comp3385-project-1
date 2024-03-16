<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PropertyController extends Controller
{
    //
    public function create()
    {
        return view('properties.create'); // Return the view with the form to add a new property
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'number_of_bedrooms' => 'required|numeric',
            'number_of_bathrooms' => 'required|numeric',
            'location' => 'required|string|max:255',
            'price' => ['required', 'numeric', 'regex:/^\d+(\.\d{1,2})?$/'],
            'type'=>'required|in:House,Apartment',
            'description' => 'required|string|max:255',
            'photo' => 'required|image|mimes:jpeg,png,jpg|max:2048', // Image must be less than 2MB
        ]);

        $fileName = null; // Initialize $fileName to handle cases where no file is uploaded
        
        // Upload the file
        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $fileName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/photos', $fileName); // Store the uploaded file
            $filePath  = 'photos/' . $fileName;

        }

        // Save client data to the database
        $property = new Property();
        $property->title = $request->title;
        $property->number_of_bedrooms = $request->number_of_bedrooms;
        $property->number_of_bathrooms = $request->number_of_bathrooms;
        $property->location = $request->location;
        $property->price = $request->price;
        $property->type = $request->type;
        $property->description = $request->description;
     
        
    
        
        if ($filePath) {
            $property->photo = $filePath; // Save the file name to the 'photo' field
        }
        $property->save();

        return redirect()->route('properties.index')->with('success', 'Property was successfully added');
    }
}
