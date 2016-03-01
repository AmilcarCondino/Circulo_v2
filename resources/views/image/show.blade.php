@extends('app')

@section('content')

    @include('partials.breadcrumbs')

    <div class="row">

        <div class="col-md-12">
            <h1>
                {{ $image->name }}
                <small class="pull-right">
                    {!! link_to_route('project.module.page.image.edit', 'Editar', [$project, $module, $page, $image], ['class' => 'btn btn-primary']) !!}
                </small>
            </h1>

            <table class="table table-condensed">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>URL</th>
                    <th>Asignado</th>
                    <th>Etapa</th>
                    <th>Pedido</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>{{ $image->id }}</td>
                    <td><a href="{{ $image->name }}"></a></td>
                    <td>{{ $image->assigned_to }}</td>
                    <td>{{ $image->stage }}</td>
                    <td>{{ $image->request }}</td>
                </tr>
                </tbody>
            </table>


        </div>

        <div class="col-md-12">

            <h2>
                Propuestas
                <small class="pull-right">
                    {!! link_to_route('project.module.page.image.proposal.create', 'New Proposal', [$project, $module, $page, $image], ['class' => 'btn btn-success']) !!}
                </small>
            </h2>

            <table class="table table-condensed">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($image->proposals as $proposal)
                    <tr>
                        <td>{{ $proposal->id }}</td>
                        <td>{!! link_to_route('project.module.page.image.proposal.show', $proposal->name, [$project, $module, $page, $image, $proposal], ['class' => '']) !!}</td>
                        <td>{!! link_to_route('project.module.page.image.proposal.edit', 'Edit', [$project, $module, $page, $image, $proposal], ['class' => 'btn btn-primary']) !!}</td>
                        <td>
                            {!! Form::open(['route' => ['project.module.page.image.proposal.destroy', $project, $module, $page, $image, $proposal], 'method' => 'delete']) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>

    </div>

@endsection