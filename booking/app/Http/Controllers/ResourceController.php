<?php

namespace App\Http\Controllers;

use App\Models\Resource;
use Illuminate\Http\Request;

class ResourceController extends Controller
{
    public function index()
    {
        $resource = Resource::all();

        return view("resources.index", ["resources" => $resource]);
    }
}
