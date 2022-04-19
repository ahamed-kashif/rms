<div class="mt-3">
    <label for="name">Name <code>*</code></label>
    <input type="text" name="name" class="form-control" value="{{isset($employee) ? $employee->name : ''}}" required>
</div>
<div class="mt-3">
    <label for="nid">NID</label>
    <input type="text" class="form-control" id="nid" name="nid" value="{{isset($employee) ? $employee->nid : ''}}">
</div>
<div class="mt-3">
    <label for="phone">Contact Number<code>*</code></label>
    <input type="text" class="form-control" id="phone" name="phone" value="{{isset($employee) ? $employee->phone : ''}}">
</div>
<div class="mt-3">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" name="email" value="{{isset($employee) ? $employee->email : ''}}">
</div>
<div class="mt-3">
    <label for="address">Address</label>
    <input type="text" class="form-control" id="address" name="address" value="{{isset($employee) ? $employee->address : ''}}">
</div>
