<div class="mt-3">
    <label for="project_id">Project</label>
    <select name="project_id" id="project_id" class="form-control">
        <option value="" disabled selected>select</option>
        @foreach($projects as $p)
            <option value="{{$p->id}}" {{isset($customer) && isset($customer->project) && $p->id == $customer->project->id ? 'selected' : ''}}>{{$p->name}}</option>
        @endforeach
    </select>
</div>

<div class="mt-3">
    <label for="full_name">Name</label>
    <input required type="text" name="full_name" value="{{isset($customer) ? $customer->full_name : ''}}" class="form-control" />
    @error('full_name'){{$message}}@enderror
</div>
<div class="mt-3">
    <label for="phone_number">Phone</label>
    <input type="text" name="phone_number" value="{{isset($customer) ? $customer->phone_number : ''}}" class="form-control" />
    @error('phone_number'){{$message}}@enderror
</div>
<div class="mt-3">
    <label for="nid">NID</label>
    <input type="text" name="nid" value="{{isset($customer) ? $customer->nid : ''}}" class="form-control" />
    @error('nid'){{$message}}@enderror
</div>
<div class="mt-3">
    <label for="title">Flat Title</label>
    <input type="text" name="flat_title" id="title" class="form-control" value="{{isset($customer) && isset($customer->flats) ? $customer->flats->flat_title : ''}}">
</div>
<div class="mt-3">
    <label for="flat_amount">Total Amount (BDT)</label>
    <input required type="number" name="flat_amount" class="form-control" id="flat_amount" value="{{isset($customer) && isset($customer->flats) ? $customer->flats->flat_amount : ''}}">
</div>
