@extends('app')

@section('content')

    <div class="row">

        <div class="col-md-12">

            <h1>Edit Page</h1>

            {!! Form::model($page, ['route' => ['project.module.page.update', $project, $module, $page], 'method' => 'put', 'class' => 'form-horizontal']) !!}

                @include('page._form')

            {!! Form::close() !!}

        </div>

    </div>

@endsection