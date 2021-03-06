<tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{!! link_to_route('project.module.show', str_repeat('+', $count) . ' ' . $module->name, [$project, $module], ['class' => '']) !!}</td>
    <td>{!! link_to_route('project.module.edit', 'Editar', [$project, $module], ['class' => 'btn btn-xs btn-primary']) !!}</td>
    <td>{!! link_to_route('project.module.submodule.create', 'Nuevo Submodulo', [$project, $module], ['class' => 'btn btn-xs btn-success']) !!}</td>
    <td>

        {!! Form::open(['route' => ['project.module.destroy', $project, $module], 'method' => 'delete']) !!}


        {!!Form::button('Eliminar', [
        'class' => 'btn btn-xs btn-danger',
        'type' => 'button',
        'data-toggle' => 'modal',
        'data-target' => '#confirmDelete',
        'data-title' => 'Eliminar Modulo',
        'data-message' => 'Seguro que queres eliminar el modulo?, Tambien vas a elimnar todas las paginas.',
        'data-btncancel' => 'btn-default',
        'data-btnaction' => 'btn-danger',
        'data-btntxt' => 'Eliminar'
        ])
        !!}

        {!!Form::close()!!}
    </td>
</tr>
@foreach($module->submodules as $submodule)
@include('project._submodules', ['module' => $submodule, 'count' => $count+1])
@endforeach