@extends('app')

@section('content')

    <div class="row">

        <div class="col-md-12">

            <h1>Edit Proposal</h1>

            {!! Form::model($proposal, ['route' => ['project.module.page.image.proposal.update', $project, $module, $page, $image, $proposal], 'method' => 'put', 'class' => 'form-horizontal']) !!}

                @include('proposal._form')

            {!! Form::close() !!}

        </div>

    </div>

@endsection