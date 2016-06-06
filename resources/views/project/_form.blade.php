<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
    {!! Form::label('name', 'Nombre de la Obra', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-10">
        {!! Form::text('name', $project->name, ['class' => 'form-control', 'placeholder' => 'Nombre de la Obra']) !!}
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
    {!! Form::label('project_code', 'Codigo', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-10">
        {!! Form::text('project_code', $project->project_code, ['class' => 'form-control', 'placeholder' => 'Codigo']) !!}
        {!! $errors->first('project_code', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('authors') ? 'has-error' : '' }}">
    {!! Form::label('authors', 'Autores', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-10">
        {!! Form::text('authors', $project->authors, ['class' => 'form-control', 'placeholder' => 'Autores']) !!}
        {!! $errors->first('authors', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('projected_total_modules') ? 'has-error' : '' }}">
    {!! Form::label('projected_total_modules', 'Modulos Principales Proyectados', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-10">
        {!! Form::text('projected_total_modules', $project->projected_total_modules, ['class' => 'form-control', 'placeholder' => 'Modulos Principales Proyectados']) !!}
        {!! $errors->first('projected_total_modules', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('projected_total_pages') ? 'has-error' : '' }}">
    {!! Form::label('projected_total_pages', 'Paginas Totales Proyectadas', ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-10">
            {!! Form::text('projected_total_pages',$project->projected_total_pages, ['class' => 'form-control', 'placeholder' => 'Paginas Totales Proyectadas']) !!}
            {!! $errors->first('projected_total_pages', '<p class="help-block">:message</p>') !!}
        </div>
</div>

<div class="form-group {{ $errors->has('format') ? 'has-error' : '' }}">
    {!! Form::label('format', 'Formato', ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-10">
            {!! Form::text('format', $project->format, ['class' => 'form-control', 'placeholder' => 'Formato']) !!}
            {!! $errors->first('format', '<p class="help-block">:message</p>') !!}
        </div>
</div>

<div class="form-group {{ $errors->has('alternative_format') ? 'has-error' : '' }}">
    {!! Form::label('alternative_format', 'Formato Alternativo', ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-10">
            {!! Form::text('alternative_format', $project->alternative_format, ['class' => 'form-control', 'placeholder' => 'Formato Alternativo']) !!}
            {!! $errors->first('alternative_format', '<p class="help-block">:message</p>') !!}
        </div>
</div>

<div class="form-group {{ $errors->has('complementary_materials') ? 'has-error' : '' }}">
    {!! Form::label('complementary_materials', 'Materiales Complementarios', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-10">
        {!! Form::textarea('complementary_materials', $project->complementary_materials, ['class' => 'form-control', 'placeholder' => 'Materiales Complementarios', 'size' => '30x3']) !!}
        {!! $errors->first('complementary_materials', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('notes') ? 'has-error' : '' }}">
    {!! Form::label('notes', 'Observaciones', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-10">
        {!! Form::textarea('notes', $project->notes, ['class' => 'form-control', 'placeholder' => 'Observaciones', 'size' => '30x3']) !!}
        {!! $errors->first('notes', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('isbn_number') ? 'has-error' : '' }}">
    {!! Form::label('isbn_number', 'ISBN', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-10">
        {!! Form::text('isbn_number', $project->isbn_number, ['class' => 'form-control', 'placeholder' => 'Numero de ISBN']) !!}
        {!! $errors->first('isbn_number', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
    <div class="col-sm-offset-2 col-sm-10">
        {!! Form::submit('Save', ['class' => 'btn btn-success pull-right']) !!}
            <a class="btn btn-danger" href="{{ URL::previous() }}">Cancelar</a>
    </div>
</div>