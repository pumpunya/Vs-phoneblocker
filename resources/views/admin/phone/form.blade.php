<!--<div class="form-group {{ $errors->has('id') ? 'has-error' : ''}}">
    <label for="id" class="control-label">{{ 'Id' }}</label>
    <input class="form-control" name="id" type="number" id="id" value="{{ isset($phone->id) ? $phone->id : ''}}" >
    {!! $errors->first('id', '<p class="help-block">:message</p>') !!}
</div>-->

<div class="form-group {{ $errors->has('phonenumber') ? 'has-error' : ''}}">
    <label for="phonenumber" class="control-label">{{ 'Phonenumber' }}</label>
    <input class="form-control" name="phonenumber" type="text" id="phonenumber" value="{{ isset($phone->phonenumber) ? $phone->phonenumber : ''}}" >
    {!! $errors->first('phonenumber', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="control-label">{{ 'Name' }}</label>
    <input class="form-control" name="name" type="text" id="name" value="{{ isset($phone->name) ? $phone->name : ''}}" >
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
