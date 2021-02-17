
    <div class="form-group row mb-4">
        <label for="name" class="col-form-label col-lg-2">Project Name<code>*</code></label>
        <div class="col-lg-10">
            <input id="name" name="name" type="text" class="form-control" placeholder="Enter Project Name..." value="{{isset($project) ? $project->name : ''}}">
        </div>
    </div>
    <div class="form-group row mb-4">
        <label for="area" class="col-form-label col-lg-2">Project Area (In Square Ft.)<code>*</code></label>
        <div class="col-lg-10">
            <input id="area" name="area" type="number" class="form-control" placeholder="Enter Project Area..." value="{{isset($project) ? $project->area : ''}}">
        </div>
    </div>
    <div class="form-group row mb-4">
        <label for="description" class="col-form-label col-lg-2">Project Description</label>
        <div class="col-lg-10">
            <textarea class="form-control" id="description" rows="3" placeholder="Enter Project Description..." name="description">{{isset($project) ? $project->description : ''}}</textarea>
        </div>
    </div>
    <div class="form-group row mb-4">
        <label for="address" class="col-form-label col-lg-2">Project Address</label>
        <div class="col-lg-10">
            <textarea class="form-control" id="address" name="address" rows="3" placeholder="Enter Project Address...">{{isset($project) ? $project->address : ''}}</textarea>
        </div>
    </div>

    <div class="form-group row mb-4">
        <label class="col-form-label col-lg-2">Project Date<code>*</code></label>
        <div class="col-lg-10">
            <div class="input-daterange input-group" data-provide="datepicker" data-date-format="dd M, yyyy" data-date-autoclose="true">
                <input type="text" class="form-control" placeholder="Start Date" name="start_date" value="{{isset($project) ? date_format(date_create($project->start_date),'d M, yy') : ''}}"/>
                <input type="text" class="form-control" placeholder="End Date" name="end_date" value="{{isset($project) ? date_format(date_create($project->end_date),'d M, yy') : ''}}"/>
            </div>
        </div>
    </div>

    <div class="form-group row mb-4">
        <label for="budget" class="col-form-label col-lg-2">Budget<code>*</code></label>
        <div class="col-lg-10">
            <input id="budget" name="budget" type="number" placeholder="Enter Project Budget..." class="form-control" value="{{isset($project) ? $project->budget : ''}}">
        </div>
    </div>
    <div class="form-group row mb-4">
        <label for="contractor_budget" class="col-form-label col-lg-2">Contractors Budget</label>
        <div class="col-lg-10">
            <input id="contractor_budget" name="contractor_budget" type="number" placeholder="Enter Contractor Budget..." class="form-control" value="{{isset($project) ? $project->contractor_budget : ''}}">
        </div>
    </div>
    <div class="form-group row mb-4">
        <label for="supplier_budget" class="col-form-label col-lg-2">Suppliers Budget</label>
        <div class="col-lg-10">
            <input id="supplier_budget" name="supplier_budget" type="number" placeholder="Enter Supplier Budget..." class="form-control" value="{{isset($project) ? $project->supplier_budget : ''}}">
        </div>
    </div>
    <div class="form-group row mb-4">
        <label for="engineer_budget" class="col-form-label col-lg-2">Engineers Budget</label>
        <div class="col-lg-10">
            <input id="engineer_budget" name="engineer_budget" type="number" placeholder="Enter Engineer Budget..." class="form-control" value="{{isset($project) ? $project->engineer_budget : ''}}">
        </div>
    </div>
    <div class="form-group row mt-5 ml-3">
        <div class="custom-control custom-switch custom-switch-lg mb-3" dir="rtl">
            <input type="checkbox" class="custom-control-input" name="is_investor_project" id="customSwitchsizelg" {{isset($project) && $project->is_investor_project ? 'checked' : ''}} value="{{isset($project) && $project->is_investor_project ? 0 : 1}}">
            <label class="custom-control-label" for="customSwitchsizelg">Investor Project</label>
        </div>
    </div>

@push('custom-css')
    @include('extras.bootstrap-datepicker-css')
@endpush
@push('custom-js')
    @include('extras.bootstrap-datepicker-js')
@endpush

