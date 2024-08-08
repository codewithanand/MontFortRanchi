<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Gallery;
use App\Models\Image;


class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::with('images')->get();
        return view("frontend.gallery", compact('galleries'));
    }

    public function gallery($slug)
    {
        $gallery = Gallery::where('slug', $slug)->with('images')->first();
        $images = $gallery->images;
        return view("frontend.gallery_view", compact('gallery', 'images'));
    }
}
