@if(isset($project) && $project->id)

<ol class="breadcrumb">

        @if(isset($project) && $project->id)
            <li>{!! link_to_route('project.show', $project->name, [$project], ['class' => '']) !!}</li>
        @endif

        @if(isset($module))
            <li>{!! link_to_route('project.module.show', $module->name, [$project, $module], ['class' => '']) !!}</li>
        @endif

        @if(isset($page))
            <li>{!! link_to_route('project.module.page.show', $page->name, [$project, $module, $page], ['class' => '']) !!}</li>
        @endif

        @if(isset($image))
            <li>{!! link_to_route('project.module.page.image.show', $image->name, [$project, $module, $page, $image], ['class' => '']) !!}</li>
        @endif

        @if(isset($proposal))
            <li>{!! link_to_route('project.module.page.image.proposal.show', $proposal->name, [$project, $module, $page, $image, $proposal], ['class' => '']) !!}</li>
        @endif

    </ol>

@endif