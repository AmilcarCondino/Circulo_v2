@extends('app')

@section('content')

    @include('partials.breadcrumbs')

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

        <div class="row">
            <div class="col-md-12">

                <h2>
                    Modulos
                    <small class="pull-right">
                        {!! link_to_route('project.module.create', 'New Module', [$project], ['class' => 'btn btn-success']) !!}
                    </small>
                </h2>

                <table class="table table-condensed">
                    <thead>
                    <tr>
                        <th>Nombre</th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($project->rootModules as $module)
                    <tr>
                        <td>{!! link_to_route('project.module.show', $module->name, [$project, $module], ['class' => '']) !!}</td>
                        <td class="shrink">{!! link_to_route('project.module.edit', 'Editar', [$project, $module], ['class' => 'btn btn-xs btn-primary']) !!}</td>
                        <td class="shrink">{!! link_to_route('project.module.submodule.create', 'Nuevo Submodulo', [$project, $module], ['class' => 'btn btn-xs btn-success']) !!}</td>
                        <td class="shrink">

                                {!! Form::open(['route' => ['project.module.destroy', $project, $module], 'method' => 'delete']) !!}


                                {!!Form::button('Eliminar', [
                                'class' => 'btn btn-xs btn-danger',
                                'type' => 'button',
                                'data-toggle' => 'modal',
                                'data-target' => '#confirmDelete',
                                'data-title' => 'Eliminar Modulo',
                                'data-message' => 'Seguro que queres eliminar el modulo?, Tambien vas a elimnar todas las paginas y submodulos.',
                                'data-btncancel' => 'btn-default',
                                'data-btnaction' => 'btn-danger',
                                'data-btntxt' => 'Eliminar'
                                ])
                                !!}

                                {!!Form::close()!!}
                        </td>
                    </tr>
                    @foreach($module->submodules as $submodule)
                    @include('project._submodules', ['module' => $submodule, 'count' => 1])
                    @endforeach
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>

        @endsection