@extends('app')

@section('content')

    @include('partials.breadcrumbs')

    <div class="row">
        <div class="col-md-2">
            <h1>PAgina {{ $page->name }}</h1>
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
                        <th>
                            {!! Form::open(['route' => ['project.module.page.image.proposal.store', $project, $module, $page, $image], 'method' => 'post']) !!}
                                {!! Form::submit('Añadir Nueva Propuesta', ['class' => 'btn btn-sm btn-primary']) !!}
                            {!! Form::close() !!}
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($image->proposals as $proposal)
                        @include('proposal.edit', ['image' => $image, 'proposal' => $proposal])
                        <div class="form-group">
                            {!! Form::open(['route' => ['project.module.page.image.proposal.destroy', $project, $module, $page, $image, $proposal], 'method' => 'delete']) !!}
                                {!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        </div>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
        @endforeach

    </div>

@endsection