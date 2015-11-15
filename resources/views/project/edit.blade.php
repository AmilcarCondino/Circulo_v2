@extends('app')

@section('content')

    <div class="row">

        <div class="col-md-12">

            <h1>Edit Project</h1>

            {!! Form::model($project, ['route' => ['project.update', $project], 'method' => 'put', 'class' => 'form-horizontal']) !!}

                @include('project._form')

            {!! Form::close() !!}

        </div>

    </div>

@endsection