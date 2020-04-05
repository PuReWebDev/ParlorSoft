<!-- First Name Field -->
<div class="form-group">
    {!! Form::label('first_name', 'First Name:') !!}
    <p>{{ $employee->first_name }}</p>
</div>

<!-- Last Name Field -->
<div class="form-group">
    {!! Form::label('last_name', 'Last Name:') !!}
    <p>{{ $employee->last_name }}</p>
</div>

<!-- Full Name Field -->
<div class="form-group">
    {!! Form::label('full_name', 'Full Name:') !!}
    <p>{{ $employee->full_name }}</p>
</div>

<!-- Cell Phone Field -->
<div class="form-group">
    {!! Form::label('cell_phone', 'Cell Phone:') !!}
    <p>{{ $employee->cell_phone }}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $employee->email }}</p>
</div>

<!-- Shop Id Field -->
<div class="form-group">
    {!! Form::label('shop_id', 'Shop Id:') !!}
    <p>{{ $employee->shop_id }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $employee->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $employee->updated_at }}</p>
</div>

