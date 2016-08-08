<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Storage;

class GalleryController extends Controller
{
    /**
    * Create a new controller instance.
    *
    * @return void
    */
    public function __construct() {
        $this->middleware('auth');
    }
    /**
    * Show the files that are manageable
    * @return \Illuminate\Http\Response
    */
    public function index(Request $request) {
        /*
        * Recursively get image files from storage
        */
        $excluded_files = ['images/.DS_Store'];
        $images = Storage::allFiles('uploads');
        foreach($images as $index => $image) {
            if(in_array($image, $excluded_files)) {
                unset($images[$index]);
            }
        }
        /*
        * Save where the url came from to know which gallery
        */
        return view('gallery.index', [
            'images' => $images
        ]);
    }
}
