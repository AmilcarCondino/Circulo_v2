{!! Form::model($page, ['route' => ['project.module.page.update', $project, $module, $page], 'method' => 'put', 'class' => 'form-horizontal']) !!}

    @include('page._form')

{!! Form::close() !!}
