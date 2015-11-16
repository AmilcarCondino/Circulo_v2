@extends('app')

@section('content')

    @include('partials.breadcrumbs')

    <div class="row">

        <div class="col-md-12">
            <h1>
                {{ $module->name }}
                <small class="pull-right">
                    {!! link_to_route('project.module.edit', 'Edit', [$project, $module], ['class' => 'btn btn-primary']) !!}
                </small>
            </h1>

            <table class="table table-condensed">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Paginas</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>{{ $module->id }}</td>
                    <td>{{ $module->projected_total_pages }}</td>
                </tr>
                </tbody>
            </table>

        </div>

        <div class="col-md-12">
            <div class="row">

            <h2>
                Pages
                <small class="pull-right">
                    {!! link_to_route('project.module.page.create', 'New Page', [$project, $module], ['class' => 'btn btn-success']) !!}
                </small>
            </h2>

            <table class="table table-condensed">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($module->pages as $page)
                    <tr>
                        <td>{{ $page->id }}</td>
                        <td>{!! link_to_route('project.module.page.show', $page->name, [$project, $module, $page], ['class' => '']) !!}</td>
                        <td>{!! link_to_route('project.module.page.edit', 'Edit', [$project, $module, $page], ['class' => 'btn btn-primary']) !!}</td>
                        <td>
                            {!! Form::open(['route' => ['project.module.page.destroy', $project, $module, $page], 'method' => 'delete']) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>

    </div>

@endsection