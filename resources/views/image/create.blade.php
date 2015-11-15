@extends('app')

@section('content')

    <div class="row">

        <div class="col-md-12">

            <h1>Create Image</h1>

            {!! Form::model($image, ['route' => ['project.module.page.image.store', $project, $module, $page], 'class' => 'form-horizontal']) !!}

                @include('image._form')

            {!! Form::close() !!}

        </div>

    </div>

@endsection