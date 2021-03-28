@switch($project->is_active)
    @case(0)
    <span class="badge badge-warning ml-2">Inactive</span>
    @break
    @case(1)
    <span class="badge badge-success ml-2">Active</span>
    @break
@endswitch

