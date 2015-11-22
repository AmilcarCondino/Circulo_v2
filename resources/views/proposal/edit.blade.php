{!! Form::model($proposal, ['route' => ['project.module.page.image.proposal.update', $project, $module, $page, $image, $proposal], 'method' => 'put', 'class' => '']) !!}

    @include('proposal._form')

{!! Form::close() !!}
