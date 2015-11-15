@extends('app')

@section('content')

    <div class="row">

        <div class="col-md-12">

            <h1>Create Page</h1>

            {!! Form::model($page, ['route' => ['project.module.page.store', $project, $module], 'class' => 'form-horizontal']) !!}

                @include('page._form')

            {!! Form::close() !!}

        </div>

    </div>

@endsection