@extends('app')

@section('content')

    <div class="row">

        <div class="col-md-12">
            <h1>
                Obra
                <small class="pull-right">
                    {!! link_to_route('project.create', 'New', [], ['class' => 'btn btn-success']) !!}
                </small>
            </h1>
        </div>
        <div class="col-md-12">

            <table class="table table-condensed">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Autores</th>
                    <th>Modulos Principales Proyectados</th>
                    <th>Paginas Totales Proyectadas</th>
                    <th>Formato</th>
                    <th>Formato Alternativo</th>
                    <th>Materiales Complementarios</th>
                    <th>Observaciones</th>
                    <th>ISBN</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($projects as $project)
                <tr>
                    <td>{{ $project->id }}</td>
                    <td>{!! link_to_route('project.show', $project->name, [$project], ['class' => '']) !!}</td>
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


                    <td>{!! link_to_route('project.edit', 'Edit', [$project], ['class' => 'btn btn-primary']) !!}</td>
                    <td>
                        {!! Form::open(['route' => ['project.destroy', $project->id], 'method' => 'delete']) !!}
                            {!! Form::submit('Borrar', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>

        </div>

    </div>

@endsection