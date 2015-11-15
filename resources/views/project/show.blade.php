@extends('app')

@section('content')

    <div class="row">

        <div class="col-md-12">
            <h1>
                {{ $project->name }}

                <small class="pull-right">
                    {!! link_to_route('project.edit', 'Edit', [$project], ['class' => 'btn btn-primary']) !!}
                </small>
            </h1>
        </div>

        <table class="table table-condensed">
            <thead>
            <tr>
                <th>ID</th>
                <th>Autores</th>
                <th>Modulos Principales Proyectados</th>
                <th>Paginas Totales Proyectadas</th>
                <th>Formato</th>
                <th>Formato Alternativo</th>
                <th>Materiales Complementarios</th>
                <th>Observaciones</th>
                <th>ISBN</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>{{ $project->id }}</td>
                <td>
                    {{ $project->authors }}
                </td>
                <td>
                    {{ $project->projected_total_modules }}
                </td>
                <td>
                    {{ $project->projected_total_pages }}
                </td>
                <td>
                    {{ $project->format }}
                </td>
                <td>
                    {{ $project->alternative_format }}
                </td>
                <td>
                    {{ $project->complementary_materials }}
                </td>
                <td>
                    {{ $project->notes }}
                </td>
                <td>
                    {{ $project->isbn_number }}
                </td>
            </tr>
            </tbody>
        </table>

        <div class="col-md-12">

            <h2>Modules
                <small class="pull-right">
                    {!! link_to_route('project.module.create', 'New Module', [$project], ['class' => 'btn btn-success']) !!}
                </small>
            </h2>

            <table class="table table-condensed">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Paginas</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($project->rootModules as $module)
                    <tr>
                        <td>{{ $module->id }}</td>
                        <td>{!! link_to_route('project.module.show', $module->name, [$project, $module], ['class' => '']) !!}</td>
                        <td>{{ $module->projected_total_pages }}</td>
                        <td>{!! link_to_route('project.module.edit', 'Edit', [$project, $module], ['class' => 'btn btn-primary']) !!}</td>
                        <td>
                            {!! Form::open(['route' => ['project.module.destroy', $project, $module], 'method' => 'delete']) !!}
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