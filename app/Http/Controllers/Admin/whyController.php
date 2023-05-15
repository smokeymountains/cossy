<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Why;
use Illuminate\Http\Request;

class whyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $why= Why::all();
        return view('admin.why.index',compact('why'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $why = Why::find($id);
        return view('admin.why.edit', compact('why'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $why = Why::findOrFail($id);

        if ($why) {
            $why->update([
                'descr1' => $request->input('descr'),
                'descr2' => $request->input('descr2'),
                'descr4' => $request->input('descr4'),
            ]);
            if ($request->hasFile('image1')) {
                $why->clearMediaCollection('taho1');
                $why->addMediaFromRequest('image1')->toMediaCollection('taho1');
            }
            if ($request->hasFile('image2')) {
                $why->clearMediaCollection('taho2');
                $why->addMediaFromRequest('image2')->toMediaCollection('taho3');
            }
            if ($request->hasFile('image3')) {
                $why->clearMediaCollection('taho3');
                $why->addMediaFromRequest('image3')->toMediaCollection('taho3');
            }
            
    }
        return redirect('admin/why');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
