<!--<div class="form-group {{ $errors->has('id') ? 'has-error' : ''}}">
    <label for="id" class="control-label">{{ 'Id' }}</label>
    <input class="form-control" name="id" type="number" id="id" value="{{ isset($member->id) ? $member->id : ''}}" >
    {!! $errors->first('id', '<p class="help-block">:message</p>') !!}
</div>
--->
<div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
    <label for="email" class="control-label">{{ 'Email' }}</label>
    <input class="form-control" name="email" type="text" id="email" value="{{ isset($member->email) ? $member->email : ''}}" >
    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="control-label">{{ 'Name' }}</label>
    <input class="form-control" name="name" type="text" id="name" value="{{ isset($member->name) ? $member->name : ''}}" >
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('password') ? 'has-error' : ''}}">
    <label for="password" class="control-label">{{ 'Password' }}</label>
    <input class="form-control" name="password" type="text" id="password" value="{{ isset($member->password) ? $member->password : ''}}" >
    {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('package') ? 'has-error' : ''}}">
    <label for="package" class="control-label">{{ 'Package' }}</label>
    <input class="form-control" name="package" type="number" id="package" value="{{ isset($member->package) ? $member->package : ''}}" >
    {!! $errors->first('package', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('free_trial') ? 'has-error' : ''}}">
    <label for="free_trial" class="control-label">{{ 'Free Trial' }}</label>
    <input class="form-control" name="free_trial" type="text" id="free_trial" value="{{ isset($member->free_trial) ? $member->free_trial : ''}}" >
    {!! $errors->first('free_trial', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('exp_date') ? 'has-error' : ''}}">
    <label for="exp_date" class="control-label">{{ 'Free Trial' }}</label>
    <input class="form-control" name="exp_date" type="text" id="exp_date" value="{{ isset($member->exp_date) ? $member->exp_date : ''}}" >
    {!! $errors->first('exp_date', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
