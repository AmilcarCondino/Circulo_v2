@extends('app')

@section('content')

    <div class="row">

        <div class="col-md-12">

            <h1>Editar Modulo</h1>

            {!! Form::model($module, ['route' => ['project.module.update', $project, $module], 'method' => 'put', 'class' => 'form-horizontal']) !!}

                @include('module._form')

            {!! Form::close() !!}

        </div>

    </div>

@endsection