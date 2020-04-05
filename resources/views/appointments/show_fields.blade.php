<!-- Shop Id Field -->
<div class="form-group">
    {!! Form::label('shop_id', 'Shop Id:') !!}
    <p>{{ $appointment->shop_id }}</p>
</div>

<!-- Client Id Field -->
<div class="form-group">
    {!! Form::label('client_id', 'Client Id:') !!}
    <p>{{ $appointment->client_id }}</p>
</div>

<!-- Employee Id Field -->
<div class="form-group">
    {!! Form::label('employee_id', 'Employee Id:') !!}
    <p>{{ $appointment->employee_id }}</p>
</div>

<!-- Service Id Field -->
<div class="form-group">
    {!! Form::label('service_id', 'Service Id:') !!}
    <p>{{ $appointment->service_id }}</p>
</div>

<!-- Date Field -->
<div class="form-group">
    {!! Form::label('date', 'Date:') !!}
    <p>{{ $appointment->date }}</p>
</div>

<!-- Time Field -->
<div class="form-group">
    {!! Form::label('time', 'Time:') !!}
    <p>{{ $appointment->time }}</p>
</div>

<!-- Comments Field -->
<div class="form-group">
    {!! Form::label('comments', 'Comments:') !!}
    <p>{{ $appointment->comments }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $appointment->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $appointment->updated_at }}</p>
</div>

