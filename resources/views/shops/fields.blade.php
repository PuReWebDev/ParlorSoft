<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Contact Phone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('contact_phone', 'Contact Phone:') !!}
    {!! Form::text('contact_phone', null, ['class' => 'form-control']) !!}
</div>

<!-- Complex Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('complex_name', 'Complex Name:') !!}
    {!! Form::text('complex_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Address Line 1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('address_line_1', 'Address Line 1:') !!}
    {!! Form::text('address_line_1', null, ['class' => 'form-control']) !!}
</div>

<!-- Address Line 2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('address_line_2', 'Address Line 2:') !!}
    {!! Form::text('address_line_2', null, ['class' => 'form-control']) !!}
</div>

<!-- City Field -->
<div class="form-group col-sm-6">
    {!! Form::label('city', 'City:') !!}
    {!! Form::text('city', null, ['class' => 'form-control']) !!}
</div>

<!-- State Field -->
<div class="form-group col-sm-6">
    {!! Form::label('state', 'State:') !!}
    {!! Form::text('state', null, ['class' => 'form-control']) !!}
</div>

<!-- Zip Field -->
<div class="form-group col-sm-6">
    {!! Form::label('zip', 'Zip:') !!}
    {!! Form::text('zip', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('shops.index') }}" class="btn btn-default">Cancel</a>
</div>
