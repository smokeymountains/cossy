<?php

namespace App\Http\Controllers\Admin;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProjectRequest;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $project = Project::all(); 
        return view('admin.project.index', compact('project'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       $project=Project::all(); 
       return view('admin.project.add',compact('project'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProjectRequest $request)
    {
        $val = $request->validated();
        $project =Project::create([
            'Title' => $val['title'],
            'meta' => $val['meta'],
            'Descr' => $val['descr'],
            'start' => $request->date,
            'End' => $request->date1,
            'status' => $request->status == true ? '1' : '0',
            'popular' => $request->popular == true ? '1' : '0',
        ]);


        if ($request->hasFile('image')) {
            $project->addMediaFromRequest('image')->toMediaCollection('project');
            return redirect('admin/project')->with('messegae', 'Category added Sucessfully');
        }
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
        $project = Project::findOrFail($id);
        return view('admin.project.edit',compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProjectRequest $request,$id)
    {
        $project = Project::findOrFail($id);
        $val = $request->validated();
        $project->update([
            'Title' => $val['title'],
            'meta' => $val['meta'],
            'Descr' => $val['descr'],
            'start' => $request->date,
            'End' => $request->date1,
            'status' => $request->status == true ? '1' : '0',
            'popular' => $request->pop == true ? '1' : '0',
        ]);
        if ($request->hasFile('image')) {
            $project->clearMediaCollection('project');
            $project->addMediaFromRequest('image')->toMediaCollection('project');
           
        }
        return redirect('admin/project')->with('messegae', 'Category added Sucessfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $project = Project::find($id);
        $project->delete();
        $project->clearMediaCollection('project');
        return redirect('admin/project')->with('messegae', 'Category Deleted Sucessfully');
    }
}
