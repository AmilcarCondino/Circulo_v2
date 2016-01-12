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
        <p><strong>Paginas Del Modulo:</strong> {{ $module->projected_total_pages }}</p>
    </div>

</div>

<div class="row">

    <div class="col-md-10">
        <h2>Paginas</h2>
    </div>

    <div class="col-md-2">
        {!! link_to_route('project.module.page.create', 'Nueva Pagina', [$project, $module], ['class' => 'btn btn-success']) !!}
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
                    <p><strong>Estado: </strong>{{ $page->page_stage }}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <p><strong>Edicion: </strong>{{ $page->layout_stage }}</p>
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    {!! Form::open(['route' => ['project.module.page.destroy', $project, $module, $page], 'method' => 'delete']) !!}


                    {!!Form::button('Eliminar', [
                        'class' => 'btn btn-danger',
                        'type' => 'button',
                        'data-toggle' => 'modal',
                        'data-target' => '#confirmDelete',
                        'data-title' => 'Eliminar Imagen',
                        'data-message' => 'Seguro que queres eliminar la pagina?, Tambien vas a elimnar todas las imagenes.',
                        'data-btncancel' => 'btn-default',
                        'data-btnaction' => 'btn-danger',
                        'data-btntxt' => 'Eliminar'
                    ])
                    !!}

                    {!!Form::close()!!}

                </div>
            </div>
        </div>
    </div>
    @endforeach

</div>




{!! Form::open(['route' => ['project.module.page.update', $project, $module, $page], 'method' => 'put']) !!}


    <div class="col-lg-12">
        <div class="row">
            {!! Form::label('module_name', 'Mover Paginas a: ') !!}
            {!! Form::select('module_name', $module_list, null, ['class' => 'validate']) !!}
        </div>

    </div>

    @foreach($module->pages as $page)
    <div class="col-sm-1">
        {!! Form::label($page->id, $page->name, ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-1">
            {!! Form::checkbox($page->id, $page->id) !!}
        </div>
    </div>

    @endforeach

    <div class="row">
        <div class="col-xs-12">
            {!! Form::submit('Reordenar Paginas', ['class' => 'btn btn-xs btn-danger pull-right']) !!}
            {!! Form::close() !!}
        </div>
    </div>


{!! Form::open(['route' => ['project.module.page.update', $project, $module, $page], 'method' => 'put']) !!}

    <div class="row">
        {!! Form::text('module_id', $module->id, ['class' => 'hidden']) !!}
    </div>

    <div class="form-group {{ $errors->has('page_stage') ? 'has-error' : '' }}">
        {!! Form::label('page_stage', 'Estadio de Pagina', ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-10">
            {!! Form::select('page_stage', ['Autor' => 'Autor', 'Edicion' => 'Edicion', 'Diagramacion' => 'Diagramacion', 'Edicion 1ra vuelta' => 'Edicion 1ra vuelta', 'Diagramacion 1ra Vuelta' => 'Diagramacion 1ra Vuelta', 'Edicion 2ra vuelta' => 'Edicion 2ra vuelta', 'Correccion 1ra vuelta' => 'Correccion 1ra vuelta', 'Diagramacion 2ra Vuelta' => 'Diagramacion 2da Vuelta', 'Edicion 3ra vuelta' => 'Edicion 3ra vuelta', 'Correccion 2ra vuelta' => 'Correccion 2ra vuelta', 'Diagramacion 3ra Vuelta' => 'Diagramacion 3ra Vuelta', 'Preprensa' => 'Preprensa', 'Cierre' => 'Cierre'], null, ['class' => 'form-control']) !!}
            {!! $errors->first('page_stage', '<p class="help-block">:message</p>') !!}
        </div>
    </div>

    <div class="form-group {{ $errors->has('layout_stage') ? 'has-error' : '' }}">
        {!! Form::label('layout_stage', 'Estadio de Edicion', ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-10">
            {!! Form::select('layout_stage', ['Sobra Texto' => 'Sobra Texto', 'Falta Texto' => 'Falta Texto', 'Rediagramar' => 'Rediagramar', 'Otro' => 'Otro', 'Ok' => 'Ok'], null, ['class' => 'form-control']) !!}
            {!! $errors->first('layout_stage', '<p class="help-block">:message</p>') !!}
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            {!! Form::submit('Guardar', ['class' => 'btn btn-success pull-right']) !!}
        </div>
    </div>

{!! Form::close() !!}



@endsection