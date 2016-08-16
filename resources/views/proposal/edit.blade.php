{!! Form::model($proposal, ['route' => ['project.module.page.image.proposal.update', $project, $module, $page, $image, $proposal], 'method' => 'put', 'class' => 'form-horizontal']) !!}

    @include('proposal._form')

{!! Form::close() !!}
