    <div class="row">

        <div class="col-md-12">

            <h1>Edit Image</h1>

            {!! Form::model($image, ['route' => ['project.module.page.image.update', $project, $module, $page, $image], 'method' => 'put', 'class' => 'form-horizontal']) !!}

                @include('image._form')

            {!! Form::close() !!}

        </div>

    </div>
