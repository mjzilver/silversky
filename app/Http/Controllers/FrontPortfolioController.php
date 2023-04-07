<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Resources\PortfolioCollection;
use App\Http\Resources\PortfolioResource;
use App\Models\Portfolio;

class FrontPortfolioController extends Controller
{
    public function index()
    {
        return new PortfolioCollection(Portfolio::with('images')->get());
    }

    public function show($id)
    {
        return new PortfolioResource(Portfolio::with('images')->findOrFail($id));
    }
}
