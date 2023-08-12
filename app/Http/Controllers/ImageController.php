<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ImageController extends Controller
{
    // Upload file
    public function store(Request $request)
    {
        $imagePath = $request->file('image')->store('image', 'public');

        Product::update([
            'photo' => $imagePath,
        ]);

        return response([
            'image_path' => $imagePath
        ]);
    }
}
