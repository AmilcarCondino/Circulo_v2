<?php

namespace App\Http\Controllers;

use App\Http\Requests\ModuleRequest;
use App\Module;
use App\Project;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ModuleController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @param  Project $project
     * @return \Illuminate\Http\Response
     */
    public function create(Project $project)
    {
        $module = new Module();
        return view('module.create', compact('project', 'module'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  ModuleRequest $request
     * @param  Project $project
     * @return \Illuminate\Http\Response
     */
    public function store(ModuleRequest $request, Project $project)
    {
        $module = new Module( $request->all() );
        $project->modules()->save($module);
        return redirect()->route('project.show', [$project]);
    }

    /**
     * Display the specified resource.
     *
     * @param  Project $project
     * @param  Module $module
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project, Module $module)
    {
        return view('module.show', compact('project', 'module'));
    }


    /**
     * Show the form for creating a new nested resource.
     *
     * @param  Project $project
     * @param  Module $parent_module
     * @return \Illuminate\Http\Response
     */
    public function submodule(Project $project, Module $parent_module)
    {
        $module = new Module();
        return view('module.create', compact('project', 'module', 'parent_module'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param Project $project
     * @param Module $module
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project, Module $module)
    {
        return view('module.edit', compact('project', 'module'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ModuleRequest|Request $request
     * @param Project $project
     * @param Module $module
     * @return \Illuminate\Http\Response
     */
    public function update(ModuleRequest $request, Project $project, Module $module)
    {
        $module->update( $request->all() );
        $module->save();
        return redirect()->route('project.show', [$project]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Project $project
     * @param Module $module
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project, Module $module)
    {
        $module->delete();
        return redirect()->route('project.show', [$project]);
    }
}
