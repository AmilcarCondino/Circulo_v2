    <div class="row">

        <div class="col-md-12">

            <h1>Editar Imagen</h1>

            {!! Form::model($image, ['route' => ['project.module.page.image.update', $project, $module, $page, $image], 'method' => 'put', 'class' => 'form-horizontal']) !!}

                @include('image._form')

                <div class="form-group">
                    {!! Form::open(['route' => ['project.module.page.image.destroy', $project, $module, $page, $image], 'method' => 'delete']) !!}
                        {!! Form::submit('Eliminar', ['class' => 'btn btn-danger', 'type' => 'button', 'data-toggle' => 'modal', 'data-target' => '#confirmDelete', 'data-title' => 'Delete User', 'data-message' => 'Are you sure you want to delete this user ?' ]) !!}
                    {!! Form::close() !!}
                </div>
            {!! Form::close() !!}

        </div>

    </div>
    @include('partials.delete_confirm')