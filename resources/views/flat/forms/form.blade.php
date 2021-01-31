.<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="project_id">Project<code>*</code></label>
            <select name="porject_id" required>
                @foreach($projects as $project)
                <option value="{{$project->id}}">{{$project-}}</option>
                @endsection
            </select>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="flat_number">Flat Number <code>*</code></label>
            <input type="text" class="form-control" id="flat_numbe" name="flat_numbe" placeholder="Ex: A1" required>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <label for="is_avail_loan">DO You Want to Avail Loan ?</label>
            <input type="checkbox" class="form-control" id="is_avail_loan" name="is_avail_loan" placeholder="Ex: yes/No">
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <label for="is_installable"> Installment Service</label>
            <input type="checkbox" class="form-control" id="is_installable" name="is_installable" placeholder="Ex: yes/No">
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="installment_amount">Installment Amount <code>*</code></label>
            <input type="number" class="form-control" id="installment_amount" name="installment_amount" placeholder="Ex: 104300">
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="installment_duration">Installment Duration <code>*</code></label>
            <input type="text" class="form-control" id="installment_duration" name="installment_duration" placeholder="Ex: 6 month">
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="utility">Utility</label>
            <input type="number" class="form-control" id="utility" name="utility" placeholder="Ex: 10200">
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="car_parking">Car Parking</label>
            <input type="car_parking" class="form-control" id="car_parking" name="car_parking" placeholder="Ex: 10200">
        </div>
    </div>
</div>
