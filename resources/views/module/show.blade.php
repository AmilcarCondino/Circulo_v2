@extends('app')

@section('content')

    @include('partials.breadcrumbs')

<div class="row">

    <div class="col-md-12">
        <h1>{{ $module->name }}</h1>
    </div>

</div>

<div class="row">

    <div class="col-md-12">
        <p><strong>Planned pages:</strong> {{ $module->projected_total_pages }}</p>
    </div>

</div>

<div class="row">

    <div class="col-md-10">
        <h2>Pages</h2>
    </div>

    <div class="col-md-2">
        {!! link_to_route('project.module.page.create', 'New Page', [$project, $module], ['class' => 'btn btn-success']) !!}
    </div>

</div>

<div class="row">

    @foreach($module->pages as $page)
    <div class="col-md-2">
        <div class="well">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <h1>{!! link_to_route('project.module.page.show', $page->name, [$project, $module, $page], ['class' => '']) !!}</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <p><strong>Status: </strong>{{ $page->page_stage }}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <p><strong>Layout: </strong>{{ $page->layout_stage }}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    {!! Form::open(['route' => ['project.module.page.destroy', $project, $module, $page], 'method' => 'delete']) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-xs btn-danger pull-right']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    @endforeach

</div>

@endsection