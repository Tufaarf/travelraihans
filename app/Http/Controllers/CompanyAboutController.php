<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAboutRequest;
use App\Http\Requests\UpdateAboutRequest;
use App\Models\CompanyAbout;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;

class CompanyAboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $abouts = CompanyAbout::orderByDesc("id")->paginate(10);
        return view('admin.abouts.index', compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.abouts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAboutRequest $request)
    {
        //
        DB::transaction(function() use ($request){
            $validated = $request->validated();

            if($request->hasFile('thumbnail')){
                $thumbnailPath = $request->file('thumbnail')->store('thumbnails', 'public');
                $validated['thumbnail'] = $thumbnailPath;
                }

                $newAbout = CompanyAbout::create($validated);

                if(!empty($validated['keypoints'])){
                foreach($validated['keypoints'] as $keypoint){
                    $newAbout->keypoints()->create([
                        'keypoint' => $keypoint
                    ]);
                }
            }

        });

        return redirect()->route('admin.abouts.index');



    }

    /**
     * Display the specified resource.
     */
    public function show(CompanyAbout $companyAbout)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CompanyAbout $about)
    {
        //
        return view('admin.abouts.edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAboutRequest $request, CompanyAbout $about)
    {
        //
        DB::transaction(function() use ($request, $about){
            $validated = $request->validated();

            if($request->hasFile('thumbnail')){
                $thumbnailPath = $request->file('thumbnail')->store('thumbnails', 'public');
                $validated['thumbnail'] = $thumbnailPath;
                }

                $about->update($validated);



                if(!empty($validated['keypoints'])){
                    $about->keypoints()->delete();
                    foreach($validated['keypoints'] as $keypoint){
                        $about->keypoints()->update([
                            'keypoint' => $keypoint
                        ]);
                    }
                }
            });
            return redirect()->route('admin.abouts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CompanyAbout $about)
    {
        //
        DB::transaction(function() use ($about){
            $about->delete();
        });
        return redirect()->route('admin.abouts.index');
    }
}
