@extends('app')

@section('content')

    @include('partials.breadcrumbs')

    <div class="row">
        <div class="col-md-2">
            <h1>Page {{ $page->name }}</h1>
        </div>
        <div class="col-md-8">
            @include('page.edit', ['page' => $page])
        </div>
        <div class="col-md-2">
            {!! Form::open(['route' => ['project.module.page.image.store', $project, $module, $page], 'method' => 'post']) !!}
                {!! Form::submit('Add Image', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>

    <div class="row">

        @foreach($page->images as $image)
        <div class="col-md-6">
            <div class="well">
                @include('image.edit', ['image' => $image])

                <table class="table table-condensed">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Selected</th>
                        <th>Downloaded</th>
                        <th>Rejected</th>
                        <th>URL</th>
                        <th>
                            {!! Form::open(['route' => ['project.module.page.image.proposal.store', $project, $module, $page, $image], 'method' => 'post']) !!}
                                {!! Form::submit('Add Proposal', ['class' => 'btn btn-sm btn-primary']) !!}
                            {!! Form::close() !!}
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($image->proposals as $proposal)
                    @include('proposal.edit', ['image' => $image, 'proposal' => $proposal])
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
        @endforeach

    </div>

@endsection