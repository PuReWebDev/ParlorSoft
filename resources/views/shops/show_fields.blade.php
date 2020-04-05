<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $shop->name }}</p>
</div>

<!-- Contact Phone Field -->
<div class="form-group">
    {!! Form::label('contact_phone', 'Contact Phone:') !!}
    <p>{{ $shop->contact_phone }}</p>
</div>

<!-- Complex Name Field -->
<div class="form-group">
    {!! Form::label('complex_name', 'Complex Name:') !!}
    <p>{{ $shop->complex_name }}</p>
</div>

<!-- Address Line 1 Field -->
<div class="form-group">
    {!! Form::label('address_line_1', 'Address Line 1:') !!}
    <p>{{ $shop->address_line_1 }}</p>
</div>

<!-- Address Line 2 Field -->
<div class="form-group">
    {!! Form::label('address_line_2', 'Address Line 2:') !!}
    <p>{{ $shop->address_line_2 }}</p>
</div>

<!-- City Field -->
<div class="form-group">
    {!! Form::label('city', 'City:') !!}
    <p>{{ $shop->city }}</p>
</div>

<!-- State Field -->
<div class="form-group">
    {!! Form::label('state', 'State:') !!}
    <p>{{ $shop->state }}</p>
</div>

<!-- Zip Field -->
<div class="form-group">
    {!! Form::label('zip', 'Zip:') !!}
    <p>{{ $shop->zip }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $shop->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $shop->updated_at }}</p>
</div>

