<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Resources\ServiceCollection;
use App\Http\Resources\ServiceResource;
use App\Models\Services;

class FrontServicesController extends Controller
{
    public function index()
    {
        return new ServiceCollection(Services::all());
    }

    public function show($id)
    {
        return new ServiceResource(Services::findOrFail($id));
    }
}
