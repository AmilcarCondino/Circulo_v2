@extends('app')

@section('content')

    <div class="row">

        <div class="col-md-12">
            <h1>
                {{ $page->name }}
                <small class="pull-right">
                    {!! link_to_route('project.module.page.image.create', 'New Image', [$project, $module, $page], ['class' => 'btn btn-success']) !!}
                    {!! link_to_route('project.module.page.edit', 'Edit', [$project, $module, $page], ['class' => 'btn btn-primary']) !!}
                </small>
            </h1>
        </div>

        <div class="col-md-12">

            <h2>Images</h2>

            <table class="table table-condensed">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Asignado</th>
                    <th>Etapa</th>
                    <th>Pedido</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($page->images as $image)
                    <tr>
                        <td>{{ $image->id }}</td>
                        <td>{!! link_to_route('project.module.page.image.show', $image->name, [$project, $module, $page, $image], ['class' => '']) !!}</td>
                        <td>{{ $image->assigned_to }}</td>
                        <td>{{ $image->stage }}</td>
                        <td>{{ $image->request }}</td>
                        <td>{!! link_to_route('project.module.page.image.edit', 'Edit', [$project, $module, $page, $image], ['class' => 'btn btn-primary']) !!}</td>
                        <td>
                            {!! Form::open(['route' => ['project.module.page.image.destroy', $project, $module, $page, $image], 'method' => 'delete']) !!}
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