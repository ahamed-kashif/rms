<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-10">
                <h5 class="text-truncate font-size-15">{{isset($project) ? $project->name : ''}}@include('project.inc.status')</h5>
                <p class="text-muted">{{isset($project) ? $project->address : ''}}</p>
            </div>
            <div class="col-2">
                <a href="{{route('project.edit',$project->id)}}"><i class="fa fa-edit"></i><span class="text-alias"> Edit</span></a>
            </div>
        </div>
        <h5 class="font-size-15 mt-4">Project Details :</h5>
        <p class="text-muted">{{isset($project) ? $project->description : ''}}</p>
        <h5>Budget</h5>
        <ul class="list-unstyled">
            <li>
                <span class="mb-2"><b class="mr-2">Contractors Budget:</b>{{isset($project) ? '৳ '.$project->contractor_budget : ''}}</span>
            </li>
            <li>
                <span class="mb-2"><b class="mr-4">Suppliers Budget:</b>{{isset($project) ? '৳ '.$project->supplier_budget : ''}}</span>
            </li>
            <li>
                <span class="mb-2"><b class="mr-4">Engineers Budget:</b>{{isset($project) ? '৳ '.$project->engineer_budget : ''}}</span>
            </li>
        </ul>
        <span class="font-size-15 text-success mt-4"><b class="mr-3 text-dark">Estimated Total Budget:</b>{{isset($project) ? '৳ '.$project->budget : ''}}</span>
        <div class="row task-dates">
            <div class="col-sm-4 col-6">
                <div class="mt-4">
                    <h5 class="font-size-14"><i class="bx bx-calendar mr-1 text-primary"></i> Start Date</h5>
                    <p class="text-muted mb-0">{{isset($project) ? date_format(date_create($project->start_date),'d M, yy') : ''}}</p>
                </div>
            </div>

            <div class="col-sm-4 col-6">
                <div class="mt-4">
                    <h5 class="font-size-14"><i class="bx bx-calendar-check mr-1 text-primary"></i> Due Date</h5>
                    <p class="text-muted mb-0">{{isset($project) ? date_format(date_create($project->end_date),'d M, yy') : ''}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
