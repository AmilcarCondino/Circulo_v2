<!--<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">-->
<!--    {!! Form::label('name', 'Nombre', ['class' => 'col-sm-2 control-label']) !!}-->
<!--    <div class="col-sm-10">-->
<!--        {!! Form::text('name', $page->name, ['class' => 'form-control', 'placeholder' => 'Pagina']) !!}-->
<!--        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}-->
<!--    </div>-->
<!--</div>-->

<div class="form-group {{ $errors->has('page_stage') ? 'has-error' : '' }}">
    {!! Form::label('page_stage', 'Estadio de Pagina', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-10">
        {!! Form::select('page_stage', ['Autor' => 'Autor', 'Edicion' => 'Edicion', 'Diagramacion' => 'Diagramacion', 'Edicion 1ra vuelta' => 'Edicion 1ra vuelta', 'Diagramacion 1ra Vuelta' => 'Diagramacion 1ra Vuelta', 'Edicion 2ra vuelta' => 'Edicion 2ra vuelta', 'Correccion 1ra vuelta' => 'Correccion 1ra vuelta', 'Diagramacion 2ra Vuelta' => 'Diagramacion 2da Vuelta', 'Edicion 3ra vuelta' => 'Edicion 3ra vuelta', 'Correccion 2ra vuelta' => 'Correccion 2ra vuelta', 'Diagramacion 3ra Vuelta' => 'Diagramacion 3ra Vuelta', 'Preprensa' => 'Preprensa', 'Cierre' => 'Cierre'], null, ['class' => 'form-control']) !!}
        {!! $errors->first('page_stage', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('layout_stage') ? 'has-error' : '' }}">
    {!! Form::label('layout_stage', 'Estadio de Diagramacion', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-10">
        {!! Form::select('layout_stage', ['Sobra Texto' => 'Sobra Texto', 'Falta Texto' => 'Falta Texto', 'Rediagramar' => 'Rediagramar', 'Otro' => 'Otro', 'Ok' => 'Ok'], null, ['class' => 'form-control']) !!}
        {!! $errors->first('layout_stage', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('notes') ? 'has-error' : '' }}">
    {!! Form::label('notes', 'Notas', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-10">
        {!! Form::text('notes', $page->notes, ['class' => 'form-control', 'placeholder' => 'Notas']) !!}
        {!! $errors->first('notes', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        {!! Form::submit('Guardar', ['class' => 'btn btn-success pull-right']) !!}
        <a class="btn btn-danger" href="{{ URL::previous() }}">Cancelar</a>
    </div>
</div>


@if( $errors->any() )
<hr/>
<div class="alert alert-danger" role="alert">
    <p><strong>Temporal error list</strong></p>
    @foreach($errors->all() as $error)
    <p>{{ $error }}</p>
    @endforeach
</div>
@endif