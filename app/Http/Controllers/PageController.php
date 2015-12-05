<?php

namespace App\Http\Controllers;

use App\Http\Requests\PageRequest;
use App\Page;
use App\Module;
use App\Project;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @param Project $project
     * @param Module $module
     * @return \Illuminate\Http\Response
     */
    public function create(Project $project, Module $module)
    {
        $page = new Page();
        return view('page.create', compact('project', 'module', 'page'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param PageRequest $request
     * @param Project $project
     * @param Module $module
     * @param Page $page
     * @return \Illuminate\Http\Response
     */
    public function store(PageRequest $request, Project $project, Module $module, Page $page)
    {
        $page = new Page( $request->all() );
        $module->pages()->save($page);
        return redirect()->route('project.module.show', [$project, $module]);
    }

    /**
     * Display the specified resource.
     *
     * @param Project $project
     * @param Module $module
     * @param Page $page
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project, Module $module, Page $page)
    {
        return view('page.show', compact('project', 'module', 'page'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param PageRequest|Request $request
     * @param Project $project
     * @param Module $module
     * @param Page $page
     * @return \Illuminate\Http\Response
     */
    public function update(PageRequest $request, Project $project, Module $module, Page $page)
    {


        if (isset ($_POST['module_name']) )
        {
            $pages = $_POST;

            $module = Module::where('project_id', '=', $project->id)
                                ->where('name', '=', $_POST['module_name'])->first();

            foreach ($pages as $val)
            {
                if (is_numeric($val))
                {
                    $p = Page::where('id', '=', $val)->first();
                    $p->module_id = $module->id;
                    $p->save();
                }
            }
        }

        $page->update( $request->all() );
        $page->save();
        return redirect()->route('project.module.show', [$project, $module]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Project $project
     * @param Module $module
     * @param Page $page
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project, Module $module, Page $page)
    {
        $page->delete();
        return redirect()->route('project.module.show', [$project, $module]);
    }

}
