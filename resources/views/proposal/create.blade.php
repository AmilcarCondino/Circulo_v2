@extends('app')

@section('content')

    <div class="row">

        <div class="col-md-12">

            <h1>Crear Propuesta</h1>

            {!! Form::model($proposal, ['route' => ['project.module.page.image.proposal.store', $project, $module, $page, $image], 'class' => 'form-horizontal']) !!}

                @include('proposal._form')

            {!! Form::close() !!}

        </div>

    </div>

@endsection