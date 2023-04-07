<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use App\Models\Portfolio_images;
use Illuminate\Http\Request;
use Carbon\Carbon;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('portfolio/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $portfolio = Portfolio::create($request->all());
        
        $portfolio->save();

        if($request->hasfile('images'))
        {
           foreach($request->file('images') as $file)
           {
                $unix = Carbon::now()->timestamp;
                $folder = "\images\\";
                $image = $file;
                $filename = $image->getClientOriginalName();
                $image->storePubliclyAs($folder, $unix . $filename, 'public');

                $completeurl =  $folder . $unix . $filename;

                $portfolio_image = Portfolio_images::create([
                    'url' => $completeurl,
                    'portfolio_id' => $portfolio->id,
                ]);

                $portfolio_image->save();
           }
        }

        return redirect('dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function show(Portfolio $portfolio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function edit(Portfolio $portfolio)
    {
        return view('portfolio/edit')->with('portfolio', $portfolio);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portfolio $portfolio)
    {
        $portfolio['title'] = $request->input('title');
        $portfolio['url'] = $request->input('url');
        $portfolio['description'] = $request->input('description');

        if($request['replace'] == "on" && $request->has('images'))
        {  
            $portfolio->images()->delete();

            foreach($request->file('images') as $file)
            {
                $unix = Carbon::now()->timestamp;
                $folder = "\images\\";
                $image = $file;
                $filename = $image->getClientOriginalName();
                $image->storePubliclyAs($folder, $unix . $filename, 'public');

                $completeurl =  $folder . $unix . $filename;

                $portfolio_image = Portfolio_images::create([
                    'url' => $completeurl,
                    'portfolio_id' => $portfolio->id,
                ]);

                $portfolio_image->save();
            }

        }

        $portfolio->update();
        $portfolio->save();
        return redirect('dashboard');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portfolio $portfolio)
    {
        $portfolio->images()->delete();
        $portfolio->delete();
        return redirect('dashboard');
    }
}
