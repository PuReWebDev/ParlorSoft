<!-- Employee Id Field -->
<div class="form-group">
    {!! Form::label('employee_id', 'Employee Id:') !!}
    <p>{{ $workingHour->employee_id }}</p>
</div>

<!-- Date Field -->
<div class="form-group">
    {!! Form::label('date', 'Date:') !!}
    <p>{{ $workingHour->date }}</p>
</div>

<!-- Start Time Field -->
<div class="form-group">
    {!! Form::label('start_time', 'Start Time:') !!}
    <p>{{ $workingHour->start_time }}</p>
</div>

<!-- Finish Time Field -->
<div class="form-group">
    {!! Form::label('finish_time', 'Finish Time:') !!}
    <p>{{ $workingHour->finish_time }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $workingHour->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $workingHour->updated_at }}</p>
</div>

