@extends('app')

@section('content')

    <div class="row">

        <div class="col-md-12">

            <h1>Crear Nuevo Modulo</h1>

            {!! Form::model($module, ['route' => ['project.module.store', $project], 'class' => 'form-horizontal']) !!}

                @include('module._form')

            {!! Form::close() !!}

        </div>

    </div>

@endsection