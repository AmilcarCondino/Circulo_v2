@extends('app')

@section('content')

    <div class="row">

        <div class="col-md-12">

            <h1>Crear Obra</h1>

            {!! Form::model($project, ['route' => ['project.store'], 'class' => 'form-horizontal']) !!}

                @include('project._form')

            {!! Form::close() !!}

        </div>

    </div>

@endsection