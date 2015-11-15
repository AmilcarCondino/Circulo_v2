<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
    {!! Form::label('name', 'Name', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-10">
        {!! Form::text('name', $proposal->name, ['class' => 'form-control', 'placeholder' => 'Proposal Name']) !!}
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('url') ? 'has-error' : '' }}">
    {!! Form::label('url', 'URL', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-10">
        {!! Form::text('url', $proposal->name, ['class' => 'form-control', 'placeholder' => 'URL']) !!}
        {!! $errors->first('url', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="col-sm-12">
    <div class="row">
        <div class="col-sm-4">
            <p>Seleccionado</p>
            <div class="form-group {{ $errors->has('selected') ? 'has-error' : '' }}">
                {!! Form::label('selected', 'Si', ['class' => 'col-sm-2 control-label']) !!}
                <div class="col-sm-10">
                    {!! Form::radio('selected', '1') !!}
                    {!! $errors->first('selected', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('selected') ? 'has-error' : '' }}">
                {!! Form::label('selected', 'No', ['class' => 'col-sm-2 control-label']) !!}
                <div class="col-sm-10">
                    {!! Form::radio('selected', '0') !!}
                    {!! $errors->first('selected', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
        </div>

        <div class="col-sm-4">
            <p>Descargado</p>
            <div class="form-group {{ $errors->has('downloaded') ? 'has-error' : '' }}">
                {!! Form::label('downloaded', 'Si', ['class' => 'col-sm-2 control-label']) !!}
                <div class="col-sm-10">
                    {!! Form::radio('downloaded', '1') !!}
                    {!! $errors->first('downloaded', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('downloaded') ? 'has-error' : '' }}">
                {!! Form::label('downloaded', 'No', ['class' => 'col-sm-2 control-label']) !!}
                <div class="col-sm-10">
                    {!! Form::radio('downloaded', '0') !!}
                    {!! $errors->first('downloaded', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
        </div>

        <div class="col-sm-4">
            <p>Rechazado</p>
            <div class="form-group {{ $errors->has('rejected') ? 'has-error' : '' }}">
                {!! Form::label('rejected', 'Si', ['class' => 'col-sm-2 control-label']) !!}
                <div class="col-sm-10">
                    {!! Form::radio('rejected', '1') !!}
                    {!! $errors->first('rejected', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('rejected') ? 'has-error' : '' }}">
                {!! Form::label('rejected', 'No', ['class' => 'col-sm-2 control-label']) !!}
                <div class="col-sm-10">
                    {!! Form::radio('rejected', '0') !!}
                    {!! $errors->first('rejected', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
        </div>
    </div>
</div>
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        {!! Form::submit('Save', ['class' => 'btn btn-success pull-right']) !!}
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