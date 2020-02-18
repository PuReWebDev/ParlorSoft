<div class="table-responsive">
    <table class="table" id="shops-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Complex Name</th>
        <th>Address Line 1</th>
        <th>Address Line 2</th>
        <th>City</th>
        <th>State</th>
        <th>Zip</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($shops as $shop)
            <tr>
                <td>{{ $shop->name }}</td>
            <td>{{ $shop->complex_name }}</td>
            <td>{{ $shop->address_line_1 }}</td>
            <td>{{ $shop->address_line_2 }}</td>
            <td>{{ $shop->city }}</td>
            <td>{{ $shop->state }}</td>
            <td>{{ $shop->zip }}</td>
                <td>
                    {!! Form::open(['route' => ['shops.destroy', $shop->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('shops.show', [$shop->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('shops.edit', [$shop->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
