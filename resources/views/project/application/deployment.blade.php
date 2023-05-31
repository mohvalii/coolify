<x-layout>
    <h1 class="py-0">Deployment</h1>
    <div class="pb-10 text-sm breadcrumbs">
        <ul>
            <li><a
                    href="{{ route('project.show', ['project_uuid' => request()->route('project_uuid')]) }}">{{ $application->environment->project->name }}</a>
            </li>
            <li><a
                    href="{{ route('project.resources', ['environment_name' => request()->route('environment_name'), 'project_uuid' => request()->route('project_uuid')]) }}">{{ request()->route('environment_name') }}</a>
            </li>
            <li>{{ data_get($application, 'name') }}</li>
        </ul>
    </div>
    <x-applications.navbar :application="$application" />
    {{-- @if (data_get($activity, 'properties.status') === 'in_progress' && (data_get($deployment, 'metadata.status') !== 'error' || data_get($deployment, 'metadata.status') !== 'finished'))
        <livewire:project.application.deployment-cancel :activity="$activity" :application="$application" :deployment_uuid="$deployment_uuid" />
    @endif --}}
    <livewire:project.application.deployment-logs :activity="$activity" :application="$application" :deployment_uuid="$deployment_uuid" />
</x-layout>
