<?php

namespace App\Http\Controllers;

use App\Models\Services;
use Illuminate\Http\Request;
use App\Http\Resources\ServiceResource;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class ServicesController extends Controller
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
        return view('services/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $completeurl = "";
  
        if ($request->has('url')) {
            $unix = Carbon::now()->timestamp;
            $folder = "\images\\";
            $image = $request->file('url');
            $filename = $image->getClientOriginalName();
            $image->storePubliclyAs($folder, $unix . $filename, 'public');

            $completeurl =  $folder . $unix . $filename;
        }

        $service = Services::create([
            'title' => $request->input('title'),
            'url' => $completeurl,
            'description' => $request->input('description'),
            'short_description' => $request->input('short_description'),
        ]);

        $service->save();

        return redirect('dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function show(Services $services)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function edit(Services $service)
    {
        return view('services/edit')->with('service', $service);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Services $service)
    {
        $service['title'] = $request->input('title');
        $service['short_description'] = $request->input('short_description');
        $service['description'] = $request->input('description');

        if($request['replace'] == "on" && $request->has('url'))
        {  
            $unix = Carbon::now()->timestamp;
            $folder = "\images\\";
            $image = $request->file('url');
            $filename = $image->getClientOriginalName();
            $image->storePubliclyAs($folder, $unix . $filename, 'public');

            $service['url'] =  ($folder . $unix . $filename);
        }

        $service->update();
        $service->save();
        return redirect('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function destroy(Services $service)
    {
        $service->delete();
        return redirect('dashboard');
    }
}
