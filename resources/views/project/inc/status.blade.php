@switch($project->status)
    @case('pending')
    <span class="badge badge-warning ml-2">Pending</span>
    @break
    @case('under construction')
    <span class="badge badge-primary ml-2">Under Construction</span>
    @break
    @case('completed')
    <span class="badge badge-success ml-2">Completed</span>
    @break
    @case('delayed')
    <span class="badge badge-danger ml-2">Delayed</span>
    @break
    @case('cancelled')
    <span class="badge badge-danger ml-2">Cancelled</span>
    @break
@endswitch

