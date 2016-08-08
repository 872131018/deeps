<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Storage;

class ImageController extends Controller
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
    public function index() {
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

        return view('images.index', [
            'images' => $images
        ]);
    }
  /**
  * Save a file through a post request
  * @return \Illuminate\Http\Response
  */
  public function save(Request $request) {
    $image = $request->file('file');
    if($image->move(public_path('uploads'), $image->getClientOriginalName())) {
      return json_encode([
          'result' => 'success'
      ]);;
    } else {
      return json_encode([
          'result' => 'failure'
      ]);
    }
  }
  /**
  * Delete a file through a post
  * @return \Illuminate\Http\Response
  */
  public function delete(Request $request) {
    /*
    * Find the file and delete it
    */
    $image_to_delete = $request->name;
    Storage::delete($image_to_delete);
    /*
    * Delete doesn't return anything so ensure success with file check
    */
    if(!Storage::exists($image_to_delete)) {
      /*
      * Collection of lists of filenames
      */
      $excluded_files = ['images/.DS_Store'];
      $images = Storage::allFiles('uploads');
      foreach($images as $index=>$image) {
        if(in_array($image, $excluded_files)) {
            unset($images[$index]);
        }
      }

      return view('images.index', [
          'images' => $images
      ]);
    } else {
      die("There was an error deleting the image!");
    }
  }
}
