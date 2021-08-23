<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function index(Request $request) {
        $path = $request->get('path');
        //print_r($path);
        return Storage::response($path);
    }
}
