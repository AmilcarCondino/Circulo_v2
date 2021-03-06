<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
    {!! Form::label('name', 'Nombre', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-10">
        {!! Form::text('name', $image->name, ['class' => 'form-control', 'placeholder' => 'Nombre de la Imagen']) !!}
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('assigned_to') ? 'has-error' : '' }}">
    {!! Form::label('assigned_to', 'Asignado', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-10">
        {!! Form::text('assigned_to', $image->assigned_to, ['class' => 'form-control', 'placeholder' => 'Asignado']) !!}
        {!! $errors->first('assigned_to', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('assigned_to') ? 'has-error' : '' }}">
    {!! Form::label('image_sort', 'Tipo de Imagen', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-10">
        {!! Form::select('image_sort', ['Foto' => 'Foto', 'Ilustrador' => 'Ilustrador', 'Montaje' => 'Montaje', '3D' => '3D', 'Vector' => 'Vector'], null, ['class' => 'validate']) !!}
        {!! $errors->first('image_sort', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('stage') ? 'has-error' : '' }}">
    {!! Form::label('stage', 'Estado', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-10">
        {!! Form::select('stage', ['Busqueda' => 'Busqueda', 'Seleccion' => 'Seleccion', 'Bocetao' => 'Boceto', 'Color' => 'Color', 'Descarga' => 'Descarga', 'Terminacion' => 'Terminacion', 'Retoque' => 'Retoque', 'Correccion' => 'Correccion', 'Ok' => 'Ok'], null, ['class' => 'validate']) !!}
        {!! $errors->first('stage', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('model_file') ? 'has-error' : '' }}">
    {!! Form::label('model_file', 'Modelo', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-10">
<!--        {!! Form::text('model_file', $image->model_file, ['class' => 'form-control', 'placeholder' => 'Modelo']) !!}-->
<!--        {!! $errors->first('model_file', '<p class="help-block">:message</p>') !!}-->

            <input type="file" name="model_file" id="model_file">
    </div>
<div class="row">
    <img src="{{ asset('uploads/models/' . $image->model_file)}}" style="height: 150px";/>
</div>

</div>

        <div class="form-group {{ $errors->has('request') ? 'has-error' : '' }}">
            {!! Form::label('request', 'Requerimientos', ['class' => 'col-sm-2 control-label']) !!}
            <div class="col-sm-10">
                {!! Form::textarea('request', $image->request, ['class' => 'form-control', 'placeholder' => 'Requerimientos']) !!}
                {!! $errors->first('request', '<p class="help-block">:message</p>') !!}
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                {!! Form::submit('Guardar', ['class' => 'btn btn-success pull-right']) !!}
                <a class="btn btn-danger" href="{{ URL::previous() }}">Cancelar</a>
            </div>
        </div>