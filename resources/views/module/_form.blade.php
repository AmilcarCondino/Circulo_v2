@if(isset($parent_module))
    <input type="hidden" name="parent_module" value="{{ $parent_module->id }}">
@endif

<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
    {!! Form::label('name', 'Name', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-10">
        {!! Form::text('name', $module->name, ['class' => 'form-control', 'placeholder' => 'Module Name']) !!}
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
    {!! Form::label('projected_total_pages', 'Paginas Proyectadas', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-10">
        {!! Form::text('projected_total_pages', $module->projected_total_pages, ['class' => 'form-control', 'placeholder' => 'Paginas Proyectadas']) !!}
        {!! $errors->first('projected_total_pages', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        {!! Form::submit('Save', ['class' => 'btn btn-success pull-right']) !!}
    </div>
</div>