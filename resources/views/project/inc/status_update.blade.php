<form action="{{route('ajax.update.project.status',$project->id)}}" method="post" id="update_status" class="pl-2">
    @csrf
    @method('PUT')
    <label for="project_status">Update Project Status</label>
    <div class="row">
        <div class="col-9">
            <div class="form-group">
                <select id="project_status" class="form-control mb-3">
                    <option value="0" {{isset($project) && $project->is_active == 0 ? 'selected' : ''}}>Inactive</option>
                    <option value="1" {{isset($project) && $project->is_active == 1 ? 'selected' : ''}}>Active</option>
                </select>
            </div>
        </div>
        <div class="col-3">
            <a href="javascript:void(0)" class="mb-1 btn btn-sm btn-primary waves-effect btn-label waves-light status py-2" id="update_button"><i class="mdi mdi-update label-icon"></i> update</a>
        </div>
    </div>
</form>

