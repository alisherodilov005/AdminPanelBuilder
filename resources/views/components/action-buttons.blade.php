@props(['routeDelete', 'routeEdit'])
{{-- 'canDelete' , 'canEdit' --}}
<div class="d-flex">
    {{-- @can($canDelete) --}}
        <x-delete-button route="{{ $routeDelete }}" />
    {{-- @endcan --}}
    <div style="width: 10px;"></div>
    {{-- @can('canEdit')      --}}
       <x-edit-button route="{{ $routeEdit }}" />
    {{-- @endcan --}}
</div>
