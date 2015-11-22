<?php

namespace App\Http\Controllers;

use App\Http\Requests\ImageRequest;
use App\Proposal;
use App\Image;
use App\Page;
use App\Module;
use App\Project;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProposalController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @param Project $project
     * @param Module $module
     * @param Page $page
     * @param Image $image
     * @return \Illuminate\Http\Response
     */
    public function create(Project $project, Module $module, Page $page, Image $image)
    {
        $proposal = new Proposal();
        return view('proposal.create', compact('project', 'module', 'page', 'image', 'proposal'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ImageRequest $request
     * @param Project $project
     * @param Module $module
     * @param Page $page
     * @param Image $image
     * @return \Illuminate\Http\Response
     */
    public function store(ImageRequest $request, Project $project, Module $module, Page $page, Image $image)
    {
        $proposal = new Proposal;
        $image->proposals()->save($proposal);
        return redirect()->route('project.module.page.image.show', [$project, $module, $page, $image]);
    }

    /**
     * Display the specified resource.
     *
     * @param Project $project
     * @param Module $module
     * @param Page $page
     * @param Image $image
     * @param Proposal $proposal
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project, Module $module, Page $page, Image $image, Proposal $proposal)
    {
        return view('proposal.show', compact('project', 'module', 'page', 'image', 'proposal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Project $project
     * @param Module $module
     * @param Page $page
     * @param Image $image
     * @param Proposal $proposal
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project, Module $module, Page $page, Image $image, Proposal $proposal)
    {
        return view('proposal.edit', compact('project', 'module', 'page', 'image', 'proposal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ImageRequest $request
     * @param Project $project
     * @param Module $module
     * @param Page $page
     * @param Image $image
     * @param Proposal $proposal
     * @return \Illuminate\Http\Response
     */
    public function update(ImageRequest $request, Project $project, Module $module, Page $page, Image $image, Proposal $proposal)
    {
        $proposal->update( $request->all() );
        $proposal->save();
        return redirect()->route('project.module.page.image.show', [$project, $module, $page, $image]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Project $project
     * @param Module $module
     * @param Page $page
     * @param Image $image
     * @param Proposal $proposal
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Project $project, Module $module, Page $page, Image $image, Proposal $proposal)
    {
        $proposal->delete();
        return redirect()->route('project.module.page.image.show', [$project, $module, $page, $image]);
    }
}
