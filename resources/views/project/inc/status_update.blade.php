<form action="{{route('ajax.update.project.status',$project->id)}}" method="post" id="update_status" class="pl-2">
    @csrf
    @method('PUT')
    <label for="project_status">Update Project Status</label>
    <div class="row">
        <div class="col-8">
            <div class="form-group">
                <select id="project_status" class="form-control mb-3">
                    <option value="pending" {{isset($project) && $project->status == 'pending'? 'selected' : ''}}>Pending</option>
                    <option value="under construction" {{isset($project) && $project->status == 'under construction'? 'selected' : ''}}>Under Construction</option>
                    <option value="completed" {{isset($project) && $project->status == 'completed'? 'selected' : ''}}>Completed</option>
                    <option value="delayed" {{isset($project) && $project->status == 'delayed'? 'selected' : ''}}>Delayed</option>
                    <option value="cancelled" {{isset($project) && $project->status == 'cancelled'? 'selected' : ''}}>Cancelled</option>
                </select>
            </div>
        </div>
        <div class="col-4">
            <div class="row">
                <a href="javascript:void(0)" class="mb-1 btn btn-sm btn-primary waves-effect btn-label waves-light status py-2"><i class="mdi mdi-update label-icon"></i> update</a>
{{--                <a href="javascript:void(0)" class="btn btn-primary status">update</a>--}}
            </div>
        </div>
    </div>
</form>
@push('custom-js')
    <script type="text/javascript" src="{{asset('js/restapi.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.status').on('click', function () {
                let form = $('#update_status');
                let url = form.attr('action');
                let status = $('#project_status').val();
                console.log(status);
                let updateStatus = $.ajax({
                    dataType: 'json',
                    type: 'PUT',
                    data: {api_token: $api_token, status: status},
                    url: url,
                });

                updateStatus.done(function (data) {
                    console.log(data);
                    alert(data.message);
                    location.reload();
                });
            });
        });
    </script>
@endpush
