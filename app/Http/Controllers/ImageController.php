<?php

namespace App\Http\Controllers;

use App\Http\Requests\ImageRequest;
use App\Image;
use App\Page;
use App\Module;
use App\Project;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use \Input as Input;

class ImageController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @param Project $project
     * @param Module $module
     * @param Page $page
     * @return \Illuminate\Http\Response
     */
    public function create(Project $project, Module $module, Page $page)
    {
        $image = new Image();
        return view('image.create', compact('project', 'module', 'page', 'image'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ImageRequest $request
     * @param Project $project
     * @param Module $module
     * @param Page $page
     * @return \Illuminate\Http\Response
     */
    public function store(ImageRequest $request, Project $project, Module $module, Page $page)
    {

        $image = new Image( $request->all() );
        $page->images()->save($image);

        return redirect()->route('project.module.page.show', [$project, $module, $page]);
    }

    /**
     * Display the specified resource.
     *
     * @param Project $project
     * @param Module $module
     * @param Page $page
     * @param Image $image
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project, Module $module, Page $page, Image $image)
    {
        return view('image.show', compact('project', 'module', 'page', 'image'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Project $project
     * @param Module $module
     * @param Page $page
     * @param Image $image
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project, Module $module, Page $page, Image $image)
    {
        return view('image.edit', compact('project', 'module', 'page', 'image'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ImageRequest $request
     * @param Project $project
     * @param Module $module
     * @param Page $page
     * @param Image $image
     * @return \Illuminate\Http\Response
     */
    public function update(ImageRequest $request, Project $project, Module $module, Page $page, Image $image)
    {
        $image->update( $request->all() );

        if(Input::file('model_file')){

            $file = Input::file('model_file');
            $file->move('uploads/models', $file->getClientOriginalName());
            $image->model_file = $file->getClientOriginalName();

        }
        $image->save();
        return redirect()->route('project.module.page.show', [$project, $module, $page]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Project $project
     * @param Module $module
     * @param Page $page
     * @param Image $image
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Project $project, Module $module, Page $page, Image $image)
    {
        $image->delete();
        return redirect()->route('project.module.page.show', [$project, $module, $page]);
    }
}
