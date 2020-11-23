<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="name">Title<code>*</code></label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Ex: Rod" required value="{{(isset($material)? $material->title : '')}}">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="nid">Unit</label>
            <input type="text" class="form-control" id="unit" name="unit" placeholder="optional" value="{{(isset($material)? $material->unit : '')}}">
        </div>
    </div>
</div>
<div>
    <button type="submit" class="btn btn-primary"><i class="fas fa-save mr-2"></i>Save</button>
</div>
